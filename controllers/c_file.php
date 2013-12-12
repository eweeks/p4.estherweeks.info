<?php

class file_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	
		# Make sure user is logged in if they want to use anything in this controller
		if(!$this->user) {
			Router::redirect('/users/login');
		}
	}
	
	public function index() {
	
		# Set up the View
		$this->template->content = View::instance('v_file');
		$this->template->title   = "File";

		# Render the view
		echo $this->template;	
		echo "This is the file page";
	
	}
	
} # End of class