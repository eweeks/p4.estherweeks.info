<?php

class admin_controller extends base_controller {
	
/*-------------------------------------------------------------------------------------------------

-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
		
	}
		
/*-------------------------------------------------------------------------------------------------
	Index for Admin
-------------------------------------------------------------------------------------------------*/
	public function index() {	
		# Make sure user is admin
		if($this->user->first_name != "admin") {
			Router::redirect("/admin/noaccess");
		}
	
		# Setup view
		$this->template->content = View::instance('v_admin');
		$this->template->title   = "Admin";
			
		# Render template
		echo $this->template;
		
	} # End of method
	
/*-------------------------------------------------------------------------------------------------
	noaccess for Admin - restricts view, displays no access view
-------------------------------------------------------------------------------------------------*/	
	
	public function noaccess(){
		# Setup view
		$this->template->content = View::instance('v_admin_noaccess');
		$this->template->title   = "No Access";

		# Render template
		echo $this->template;
	}
	
/*-------------------------------------------------------------------------------------------------
		Admin Signup Function for Users
-------------------------------------------------------------------------------------------------*/
	public function signup($error = NULL) {
		# Setup view
		$this->template->content = View::instance('v_admin_signup');
		$this->template->title   = "Sign Up";

		# Pass data to the view
		$this->template->content->error = $error;

		# Render template
		echo $this->template;

	}
/*-------------------------------------------------------------------------------------------------
		p_signup Function	**Checks for errors and signs up user
-------------------------------------------------------------------------------------------------*/
	public function p_signup() {
			
		$this->template->content = View::instance('v_admin_signed');
		$this->template->title   = "Welcome to Photo File";
	
		foreach($_POST as $key => $value){
			if((empty($value)) || (!$value) || (trim($value) == "") ){
				# Send them back to the login page
				Router::redirect("/admin/signup/error");
			}
		
		}
	
		# More data we want stored with the user
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();
	
		# Encrypt the password  
		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

		# Create an encrypted token via their email address and a random string
		$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
		$email=$_POST['email'];

		if(!$this->userObj->confirm_unique_email($email) ) {
			# Send them back to the login page
			Router::redirect("/admin/signup/error");
		}else{
			# Insert this user into the database
			$user_id = DB::instance(DB_NAME)->insert('users', $_POST);
			
			# Render template
			echo $this->template;
		}

	}	
	
	
} # End of class