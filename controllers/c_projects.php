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
			var_dump($projects);
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
				projects.created,
				files_projects.project_id AS project_id,
                                files_projects.file_id AS file_id,
				files.name,
				files.number	
			FROM projects
			INNER JOIN files_projects
    			ON projects.project_id = files_projects.project_id
INNER JOIN files
ON files.file_id = files_projects.file_id

			WHERE files_projects.project_id=';

		echo $q.$project_id;
		# Run the query, store the results in the variable $projects
		$projects = DB::instance(DB_NAME)->select_rows($q.$project_id);
	var_dump($projects);
		# Pass data to the View
		$this->template->content->projects = $projects;

		# Render the view
		echo $this->template;	

	}
	
	
	
	
} # End of class