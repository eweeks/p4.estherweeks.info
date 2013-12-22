<?php

class file_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	
		# Make sure user is logged in if they want to use anything in this controller
		if(!$this->user) {
			Router::redirect('/users/login');
		}
	}

/*-------------------------------------------------------------------------------------------------
		Index Function for File
-------------------------------------------------------------------------------------------------*/
	public function index() {
		# Set up the View
		$this->template->content = View::instance('v_file_index');
		$this->template->title   = "File";

		# Query
		$q = 'SELECT number, date_start, name, camera, format, tags, color, file_id
			FROM files';

		# Run the query, store the results in the variable $files
		$files = DB::instance(DB_NAME)->select_rows($q);

		# Pass data to the View
		$this->template->content->files = $files;
		
		# Render the view
		echo $this->template;
	}
	
/*-------------------------------------------------------------------------------------------------
		Add Function for Files 
-------------------------------------------------------------------------------------------------*/
	public function add($error = NULL) {

		# Setup view
		$this->template->content = View::instance('v_file_add');
		$this->template->title   = "Add File";
		
		# Pass data to the view
		$this->template->content->error = $error;

		# Render template
		echo $this->template;

	}

/*-------------------------------------------------------------------------------------------------
		f_add Function for Posts	**adds files and checks for errors
-------------------------------------------------------------------------------------------------*/
	public function f_add() {

		# Setup view
		$this->template->content = View::instance('v_file_added');
		$this->template->title   = "File Added";

		foreach($_POST as $key => $value){
				//print_r($_POST);
				if($key=="number" || $key=="name" ||
					$key=="date_start" || $key=="tags" ||
					$key=="stored"){
					if((empty($value)) || (!$value) || (trim($value) == "") ){
						# Send them back to the login page
						Router::redirect("/file/add/error");
					}
			}
		}
		

		# Unix timestamp of when this post was created / modified
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();

		# Insert
		# Insert Method Sanitizes
		$file_id = DB::instance(DB_NAME)->insert('files', $_POST);

		# Render template
		echo $this->template;

	}

/*-------------------------------------------------------------------------------------------------
		more Function, to see more info on selected file
-------------------------------------------------------------------------------------------------*/	
	public function more($file_id) {
		# Set up the View
		$this->template->content = View::instance('v_file_more');
		$this->template->title   = "View File";
		
		# Query
		$q = 'SELECT * FROM files WHERE file_id = ';
		DB::instance(DB_NAME)->select_row($q.$file_id);
		#Saves query as variable
		$more = DB::instance(DB_NAME)->select_row($q.$file_id);
		
		# Pass data to the View
		$this->template->content->more = $more;
		
		# Render the view
		echo $this->template;
	
	}
	
	public function edit($file_id){
		# Set up the View
		$this->template->content = View::instance('v_file_edit');
		$this->template->title   = "Edit File";
		
		# Query
		$q = 'SELECT * FROM files WHERE file_id = ';
		DB::instance(DB_NAME)->select_row($q.$file_id);
		$present = DB::instance(DB_NAME)->select_row($q.$file_id);
		
		# Pass data to the View
		$this->template->content->present = $present;
		
		# Render the view
		echo $this->template;
	}
	
	public function f_edit($file_id){
		# Setup view
		$this->template->content = View::instance('v_file_edited');
		$this->template->title   = "File Updated";

		#Checks that required fields are filled out
		foreach($_POST as $key => $value){
			//print_r($_POST);
			if($key=="number" || $key=="name" ||
				$key=="date_start" || $key=="tags" ||
				$key=="stored"){
				if((empty($value)) || (!$value) || (trim($value) == "") ){
					# Send them back to the login page
					Router::redirect("/file/edit/error");
				}
			}
		}
		
		# Unix timestamp of when this files was modified
		$_POST['modified'] = Time::now();

		# updates datebase
		DB::instance(DB_NAME)->update("files", $_POST, 'WHERE file_id = '.$file_id);

		# Render template
		echo $this->template;
	}

	public function delete($file_id){ 
		# Setup view
		$this->template->content = View::instance('v_file_deleted');
		$this->template->title   = "File Deleted";
		
		$where_condition = 'WHERE file_id = '.$file_id;
		DB::instance(DB_NAME)->delete('files', $where_condition);
		
		# Render template
		echo $this->template;
	
	}
	
} # End of class