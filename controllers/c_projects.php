<?php

class projects_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	
		# Make sure user is logged in if they want to use anything in this controller
		if(!$this->user) {
			Router::redirect('/users/login');
		}
	}
	
	
/*-------------------------------------------------------------------------------------------------
		Index Function for Projects
-------------------------------------------------------------------------------------------------*/		
		public function index() {
	
		# Set up the View
		$this->template->content = View::instance('v_projects_index');
		$this->template->title   = "Projects";


		# Query
		$q = 'SELECT project_name, project_description, project_id, created
			FROM projects';

		# Run the query, store the results in the variable $posts
		$projects = DB::instance(DB_NAME)->select_rows($q);
	
		# Pass data to the View
		$this->template->content->projects = $projects;

		# Render the view
		echo $this->template;	

	}
	

/*-------------------------------------------------------------------------------------------------
		View Function for Projects
-------------------------------------------------------------------------------------------------*/		
		public function view($project_id) {
	
		# Set up the View
		$this->template->content = View::instance('v_projects_view');
		$this->template->title   = "Projects - View";

			
		$q ='SELECT 
				projects.project_name,
				projects.project_description,
				projects.project_id,
				projects.created,
				files_projects.project_id AS project_id,
                                files_projects.file_id AS file_id,
				files.name,
				files.number,
				files.stored,
				files.date_start
			FROM projects
			INNER JOIN files_projects
    			ON projects.project_id = files_projects.project_id
INNER JOIN files
ON files.file_id = files_projects.file_id

			WHERE files_projects.project_id=';

		# Run the query, store the results in the variable $projects
		$projects = DB::instance(DB_NAME)->select_rows($q.$project_id);
		
		$n='SELECT project_name, project_description, project_id
        FROM projects
        WHERE project_id like '.$project_id;
		
		$name = DB::instance(DB_NAME)->select_rows($n);
		
		$_SESSION['project'] = DB::instance(DB_NAME)->select_rows($n);
			
		# Pass data to the View
		$this->template->content->name = $name;
		# Pass data to the View
		$this->template->content->projects = $projects;

		# Render the view
		echo $this->template;	

	}

/*-------------------------------------------------------------------------------------------------
		Add Function for Projects - redirects to v_projects_added page
-------------------------------------------------------------------------------------------------*/
	public function add($error = NULL) {

		# Setup view
		$this->template->content = View::instance('v_projects_add');
		$this->template->title   = "Add Project";
		
		# Pass data to the view
		$this->template->content->error = $error;

		# Render template
		echo $this->template;

	}
	
/*-------------------------------------------------------------------------------------------------
		p_add Function for Projects	**adds projects and checks for errors
-------------------------------------------------------------------------------------------------*/
	public function p_add() {

		# Setup view
		//$this->template->content = View::instance('v_projects_files');
		//$this->template->title   = "Project Added";

		foreach($_POST as $key => $value){

			if((empty($value)) || (!$value) || (trim($value) == "") ){
				# Send them back to the login page
				Router::redirect("/projects/add/error");
			}
		}
		

		# Unix timestamp of when this post was created / modified
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();
		

		# Insert
		# Insert Method Sanitizes
		$project_id = DB::instance(DB_NAME)->insert('projects', $_POST);
		
		#gets project id from project inserted
		$id='SELECT *
            FROM projects 
            WHERE created = '.$_POST['created'];

		$_SESSION['project'] = DB::instance(DB_NAME)->select_rows($id);
		
		//print_r($project);
		# Pass data to the View
		//$this->template->content->project = $project;
		
		# Send them back to the main index.
		Router::redirect('/projects/files');
		
		//# Render template
		//echo $this->template;

	}
/*-------------------------------------------------------------------------------------------------
		Files Function for Projects	**allows for adding files to project
-------------------------------------------------------------------------------------------------*/	
	public function files(){
		
		# Setup view
		$this->template->content = View::instance('v_projects_files');
		$this->template->title   = "Add Files to Project";
		
		//print_r($_SESSION['project']);
		$projects=$_SESSION['project'];
		//unset($_SESSION['project']);
		//echo $project;
		$this->template->content->projects = $projects;
		//print_r($projects);
		
		//get this projects id
		foreach($projects as $project): 
			$id=$project['project_id'];
		endforeach;
	
		# Query
		$q = 'SELECT number, date_start, date_end, name, camera, format, tags, file_id
			FROM files';

		# Run the query, store the results in the variable $files
		$files = DB::instance(DB_NAME)->select_rows($q);
		
		$q2= 'SELECT file_id
			FROM files_projects WHERE project_id='.$id;
			
		# Run the query, store the results in the variable $files
		$items = DB::instance(DB_NAME)->select_rows($q2);
		//print_r($files);
		//print_r($items);
		$t= array();
		foreach($items as $item){
			array_push($t, $item['file_id']);
			//$t=$t.$item['file_id'];
					//echo"Not in Array "+$file['file_id'];
			
		
		};
		//echo "t is".$t;
		//print_r($t);
		//checks if each file is already in the project
	//	foreach($files as $file){
	//			$check=$file['file_id'];
	//			if(in_array($file['file_id'], $items) ){
	//				print_r("Already in Array "); //+ $file['file_id'];
	//			}
	//				//echo"Not in Array "+$file['file_id'];
	//			
	//		
	//	};
		
		# Pass data to the View
		$this->template->content->t = $t;
		
		# Pass data to the View
		$this->template->content->files = $files;
		# Render template
		echo $this->template;
	
	
	}
	
/*-------------------------------------------------------------------------------------------------
		f_add Function for Projects	**adds files to projects checks for errors
-------------------------------------------------------------------------------------------------*/
	public function f_add($file_id) {
		
		//# Set up the View
		$this->template->content = View::instance('v_projects_added');
		$this->template->title   = "Projects";
		$projects=$_SESSION['project'];
		
		
		foreach($projects as $project): 
			$project=$project['project_id'];
		endforeach;
		
		//$id= $project['project_id'];
		//echo $project['project_id'];
		$q= Array(
			"project_id" => $project,
			"file_id" => $file_id,
			"created" => Time::now()
		);
		

		# Run the query, store the results in the variable $files
		//$files = DB::instance(DB_NAME)->select_rows($q);
		
		# Insert Method Sanitizes
		$files = DB::instance(DB_NAME)->insert('files_projects', $q);

		
		# Pass data to the View
		//$this->template->content->files = $files;
		
		//# Render template
		echo $this->template;

	}
	
		public function delete($project_id){ 
		# Setup view
		$this->template->content = View::instance('v_projects_deleted');
		$this->template->title   = "Project Deleted";
		
		#Deletes project from project table
		$where_condition = 'WHERE project_id = '.$project_id;
		DB::instance(DB_NAME)->delete('projects', $where_condition);
		
		#Deletes any items on files_projects linked to this project
		$where_two = 'WHERE project_id = '.$project_id;
		DB::instance(DB_NAME)->delete('files_projects', $where_two);
		
		
		# Render template
		echo $this->template;
	
	}
	
	public function f_delete($file_id, $project_id){ 
		# Delete this connection
		$where_condition = 'WHERE file_id = '.$file_id.' AND project_id = '.$project_id;
		DB::instance(DB_NAME)->delete('files_projects', $where_condition);



		# Send them back
		Router::redirect("/projects/view/".$project_id);
	
	}
	
} # End of class