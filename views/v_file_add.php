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
				
				<label class="col-sm-2 control-label">Enter Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="name" placeholder="Name" name='name' title="Name">
				</div>				
				
				<label class="col-sm-2 control-label">Enter Start Date</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="date_start" placeholder="Date-Start" name='date_start' title="Date-Start">
				</div>				
				
				<label class="col-sm-2 control-label">Enter End Date</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="date_end" placeholder="Date-End" name='date_end' title="Date-End">
				</div>	
				

			<label class="col-sm-2 control-label" for="Scanned">Photographer</label>
			<select name="scanned" id="scanned">
				<option>Carl Calhoun</option>
				<option>Esther Weeks</option>
			</select>
			<br>
			<label class="col-sm-2 control-label" for="iso">Choose Format</label>
			<select name="format" id="format">
				<option>135</option>
				<option>120 6x4.5</option>
				<option>120 6x6</option>
				<option>120 6x7</option>
				<option>120 6x9</option>
				<option>Polaroid</option>
				<option>Digital</option>				
			</select>
			<br>				

			<label class="col-sm-2 control-label" for="iso">Choose Film Base</label>
			<select name="film_base" id="film_base">
				<option>RXP-Provia 400X</option>
				<option>RVP100-Velvia 100</option>
				<option>RVP100F - Velvia 100F</option>
				<option>RDPIII - Provia 100F</option>
				<option>CH-Superia X-tra 400</option>
				<option>CX-Superia X-tra 800</option>
				<option>FP4 Plus 125</option>	
				<option>HP5 Plus 400</option>
				<option>XP2 Super 400</option>
				<option>Digital</option>	
			</select>
			<br>		
				
			<label class="col-sm-2 control-label" for="iso">Choose Camera</label>
			<select name="camera" id="camera">
				<option>EOS-3</option>
				<option>EOS-1</option>
				<option>AE-1</option>
				<option>RB-67</option>
				<option>Bessa 1</option>
				<option>Vitessa</option>
				<option>XA-1</option>	
				<option>Elan II</option>
				<option>FTb</option>
				<option>Kiev 88</option>	
				<option>Rebel EOS-G</option>
				<option>Other</option>				
			</select>
			<br>
				
			<label class="col-sm-2 control-label" for="iso">Choose ISO</label>
			<select name="iso" id="iso">
				<option>50</option>
				<option>80</option>
				<option>100</option>
				<option>125</option>
				<option>200</option>
				<option>160</option>
				<option>400</option>
				<option>800</option>
				<option>1600</option>
				<option>3200</option>
				<option>Other</option>
			</select>
			<br>
				

			<label class="col-sm-2 control-label" for="color">Color</label>
			<select name="color" id="color">
				<option>Color</option>
				<option>Black & White</option>
				<option>Infrared</option>
			</select>
			<br>

			<label class="col-sm-2 control-label" for="pos_neg">Positive or Negative</label>
			<select name="pos_neg" id="pos_neg">
				<option>Positive</option>
				<option>Negative</option>
			</select>
			
				<br>
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

				
			<label class="col-sm-2 control-label" for="Scanned">Scanned?</label>
			<select name="scanned" id="scanned">
				<option>No</option>
				<option>Yes</option>
			</select>
				
				<br>
				<label class="col-sm-2 control-label">Any projects used in</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="projects" placeholder="Projects" name='projects' title="Projects">
				</div>
		
				<br>
				<label class="col-sm-2 control-label">Notes</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="notes" placeholder="Notes" name='notes' title="Notes">
				</div>		
		
		
			<label class="col-sm-2 control-label" for="Starred">Starred?</label>
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