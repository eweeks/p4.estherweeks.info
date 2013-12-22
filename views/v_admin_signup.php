<div class="row">
	<div class="col-md-12 col-sm-12">
		<h2 >Sign Up</h2>
		<p class="orange"><span class="glyphicon glyphicon-check"></span> marks required fields</p>
		<form method='POST' action='/admin/p_signup' class="form-horizontal" 
			role="form" id="sign_up">
			
			<!--	Input First Name	-->
			<div class="form-group">
				<label class="col-sm-2 control-label"><span class="glyphicon glyphicon-check"></span>  First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputFirstName" placeholder="FirstName"
					name='first_name' title="First Name" maxlength="60">
				</div>
				<div class="status"></div>
			</div>
			
			<!--	Input Last Name	-->
			<div class="form-group">
				<label class="col-sm-2 control-label"><span class="glyphicon glyphicon-check"></span>  Last Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="LastName" placeholder="LastName" name='last_name'
					 maxlength="60">
				</div>
				<div class="status"></div>
			</div>
			
			<!--	Input Email	-->
			<div class="form-group">
				<label class="col-sm-2 control-label"><span class="glyphicon glyphicon-check"></span> Email</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="email" placeholder="Email" name='email' maxlength="42">
				</div>
				<div class="status"></div>
			</div>
			
			<!--	Input Password	-->
			<div class="form-group">
				<label class="col-sm-2 control-label"><span class="glyphicon glyphicon-check"></span> Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="Password" placeholder="Password" name='password'
					maxlength="20">
				</div>
				<div class="status"></div>
			</div>
			
			<!--	Sign Up Submit	-->
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" title="Sign Up">Sign Up!</button>
				</div>
				<div class="status"></div>
			</div>
		</form>
	</div><!-- end class col-->
</div><!--end class row -->

<?php if(isset($error)): ?>
	<div class='error'>
		<p>Signup failed. Please double check your email, password and fill in all fields.</p>
	</div>
	<br>
<?php endif; ?>


