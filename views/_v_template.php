<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" /><!-- css from bootstrap-->
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"><!-- css for dataTables-->
	<link href="/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" /> <!-- jquery ui, used for datepicker-->
	<link href="/css/project4.css" rel="stylesheet" /><!-- My css-->


			
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
	<header>
		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Photo File</a>
			</div>	
	
			<!--Nav links here-->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href='/'>Home</a></li>
			
					<!-- Menu for users who are logged in -->
					<?php if($user): ?>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Files <b class="caret o-caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href='/file'>View Files</a></li>
								<li><a href='/file/add'>Add a File</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Projects<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href='/projects'>Projects</a></li>
								<li><a href='/projects/add'>Add a Project</a></li>
							</ul>
						</li>
						<li><a href='/users/logout'>Logout</a></li>
						<!--Menu for Admin-->
						<?php if($user->first_name == "admin"): ?>
							<li><a href='/admin'>Admin</a></li>
					<?php endif; ?><!--for admin-->
		
					<!-- Menu options for users who are not logged in -->
					<?php else: ?>
						<li><a href='/users/login'>Log in</a></li>
					<?php endif; ?>
				</ul>
			</div><!-- end navbar collapse-->
		</nav>
	</header>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
		<script type="text/javascript" charset="utf8" src="/js/jquery-1.10.2.min.js"></script><!-- jquery-->
		<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.min.js"></script><!--script for/from dataTables-->
		<script src="/js/bootstrap.min.js"></script><!-- bootstrap script-->
		<script src="/js/jquery-ui-1.10.3.custom.min.js"></script><!-- script for jquery ui- used for date picker-->
		<script src="/js/jquery.validate.js"></script><!--script for jquery validate-->
		<script src="/js/form.js"></script> <!-- My script for form checking-->
		<script type="text/javascript" language="javascript" src="/js/p4.js"></script><!-- My js for pages-->
</body>
</html>