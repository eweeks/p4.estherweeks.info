<div class="row">
	<div class="col-md-12 col-sm-12">
		<h2 >Add a File</h2>
		<form method='POST' action='/file/f_add' class="form-horizontal" role="form">
			<!--	New File Input	-->
			<div class="form-group">
				<p>Enter info for a new file here</p>
				<label class="col-sm-2 control-label">Enter Number</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="number" placeholder="Number" name='number' title="Number">
				</div>
				
				<label class="col-sm-2 control-label">Enter Date Photo Was Taken</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="date" placeholder="Date" name='date' title="Date">
				</div>				
				
				<label class="col-sm-2 control-label">Enter Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="name" placeholder="Name" name='name' title="Name">
				</div>

				<label class="col-sm-2 control-label">Enter Format</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="format" placeholder="Format" name='format' title="Format">
				</div>				

				<label class="col-sm-2 control-label">Enter Film Base</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="film_base" placeholder="Film Base" name='film_base' title="Film Base">
				</div>		
				
				<label class="col-sm-2 control-label">Enter Camera</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="camera" placeholder="Camera" name='camera' title="Camera">
				</div>		
		
				<label class="col-sm-2 control-label">Enter ISO</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="iso" placeholder="ISO" name='iso' title="ISO">
				</div>		

				<label class="col-sm-2 control-label">Enter Color</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="color" placeholder="Color" name='color' title="Color">
				</div>

				<label class="col-sm-2 control-label">Positive or Negative</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pos_neg" placeholder="Positive or Negative" name='pos_neg' title="Positive">
				</div>
				
				<label class="col-sm-2 control-label">Push</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="push" placeholder="Push" name='push' title="Push">
				</div>

				<label class="col-sm-2 control-label">Enter tags</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="tags" placeholder="Tags" name='tags' title="Tags">
				</div>

				<label class="col-sm-2 control-label">Enter Where Stored</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="stored" placeholder="Stored" name='stored' title="Stored">
				</div>

				<label class="col-sm-2 control-label">Scanned?</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="scanned" placeholder="Scanned" name='scanned' title="Scanned">
				</div>

				<label class="col-sm-2 control-label">Any projects used in</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="projects" placeholder="Projects" name='projects' title="Projects">
				</div>
		
			<label class="col-sm-2 control-label for="Starred">Starred?</label>
			<select name="starred" id="starred">
				<option>Yes</option>
				<option>No</option>
			</select>
				
				
			</div>
			<!--	Submit New Post	-->
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" title="Add File">Add File</button>
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