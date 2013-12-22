<div class="row">
	<div class="col-md-12 col-sm-12">
		<h2 >Add a Project</h2>
		<form method='POST' action='/projects/p_add' class="form-horizontal" role="form" id="projects_add">
			<!--	New File Input	-->
			<div class="form-group">
				<p>Enter info for a new project here</p>
				
				<!--Project Name-->
				<div class="form-group">
					<label class="col-sm-2 control-label">Enter Name</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="project_name" placeholder="Project Name" 
						name='project_name' maxlength="42">
					</div>
					<div class="status"></div>
				</div>
				<!--Description-->
				<div class="form-group">
					<label class="col-sm-2 control-label">Enter Description</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="project_description" placeholder="Project Description" 
						name='project_description' maxlength="42">
					</div>
					<div class="status"></div>
				</div>

			</div>
			<!--Submit New Project-->
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" title="Add project, files can be added on next page">
						Add Project</button>
				</div>
			</div>
		</form>
	</div><!-- end class col-->
</div><!--end class row -->

	<?php if(isset($error)): ?>
		<div class='error'>
			<p>Invaild Entry...</p>
			<p>Please enter some text</p>
		</div>
	<?php endif; ?>