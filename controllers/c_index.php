<?php

class index_controller extends base_controller {

	public function __construct() {
		parent::__construct();
	}
		
/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
-------------------------------------------------------------------------------------------------*/
	public function index() {
		#Sets View
		$this->template->content = View::instance('v_index_index');
			
		# Sets Title
		$this->template->title = "Hello World";
		
		# Render the view
		echo $this->template;
	} # End of method
	
} # End of class
