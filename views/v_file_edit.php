<h1>Edit Page for Files</h1>

<div class="row" id="formcss">
	<div class="col-md-12 col-sm-12">
		<form method='POST' action='/file/f_edit/<?=$present['file_id']?>' class="form-horizontal" role="form" id="file_form">
			<!--	New File Input	-->
			<p>Note: Current file information is filled in. </p>
			<p class="orange"><span class="glyphicon glyphicon-check"></span> marks required fields</p>
			
			<!--Number-->
			<div class="form-group">
				<label class="col-sm-2 control-label"> <span class="glyphicon glyphicon-check"></span> Enter Number</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="number" placeholder="Number" 
					name='number' maxlength="20" value="<?=$present['number']?>">
				</div>
				<div class="status"></div>
			</div>
			
			<!--Enter Name-->
			<div class="form-group">
				<label class="col-sm-2 control-label"> <span class="glyphicon glyphicon-check"></span> Enter Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="name" placeholder="Name" 
					name='name' maxlength="42" value="<?=$present['name']?>">
				</div>	
				<div class="status"></div>
			</div>
			
			<!--Start Date-->
			<div class="form-group">
				<label class="col-sm-2 control-label"> <span class="glyphicon glyphicon-check"></span> Enter Start Date</label>
				<div class="col-sm-6">
					<input type="text" class="form-control datepicker" id="date_start" 
					placeholder="Date-Start" name='date_start' maxlength="10" value="<?=$present['date_start']?>">
				</div>	
				<div class="status"></div>
			</div>
			
			<!--End Date-->
			<div class="form-group">
				<label class="col-sm-2 control-label">Enter End Date</label>
				<div class="col-sm-6">
					<input type="text" class="form-control datepicker" id="date_end" 
					placeholder="Date-End" name='date_end' maxlength="10"
					value="<?=$present['date_end']?>">
				</div>	
				<div class="status"></div>
			</div>
			
			<!--Photographer-->
			<div class="form-group">
				<label class="col-sm-2 control-label" for="photographer"> <span class="glyphicon glyphicon-check"></span> Photographer</label>
				<select name="photographer" id="photographer" title="Choose the Photographer">
					<option selected="Selected" class="selected"><?=$present['photographer']?> </option>
					<option>Carl Calhoun</option>
					<option>Esther Weeks</option>
				</select>
			</div>
			
			<!--Choose Format-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label" for="iso"> <span class="glyphicon glyphicon-check"></span> Choose Format</label>
				<select name="format" id="format" title="Select the Film Format of Images">
					<option selected="Selected" class="selected"><?=$present['format']?></option>
					<option >135</option>
					<option>120 6x4.5</option>
					<option>120 6x6</option>
					<option>120 6x7</option>
					<option>120 6x9</option>
					<option>2 1/4 x 3 1/4</option>
					<option>Digital</option>
				</select>
			</div>
			
			<!--Film Base-->
			<div class="form-group">
				<br>				
				<label class="col-sm-2 control-label" for="iso"> <span class="glyphicon glyphicon-check"></span> Choose Film Base</label>
				<select name="film_base" id="film_base" title="Select the Film Base Used">
					<option selected="Selected"><?=$present['film_base']?></option>
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
			</div>
			
			<!--Camera-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label" for="iso"> <span class="glyphicon glyphicon-check"></span> Choose Camera</label>
				<select name="camera" id="camera" title="Select Camera Used">
					<option selected="Selected"><?=$present['camera']?></option>
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
			</div>
			
			<!--Choose ISO-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label" for="iso"> <span class="glyphicon glyphicon-check"></span> Choose ISO</label>
				<select name="iso" id="iso" title="Select ISO Used">
					<option selected="Selected"><?=$present['iso']?></option>
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
			</div>
			
			<!--Color-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label" for="color"> <span class="glyphicon glyphicon-check"></span> Color</label>
				<select name="color" id="color" title="Select if Color, Black and White, or Infrared">
					<option selected="Selected"><?=$present['color']?></option>
					<option>Color</option>
					<option>Black & White</option>
					<option>Infrared</option>
				</select>
			</div>
			
			<!--Pos or Neg-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label" for="pos_neg"> <span class="glyphicon glyphicon-check"></span> Positive or Negative</label>
				<select name="pos_neg" id="pos_neg" title="Select if Files are Positive or Negative">
					<option selected="Selected"><?=$present['pos_neg']?></option>
					<option>Positive</option>
					<option>Negative</option>
				</select>
			</div>
			
			<!--Push-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label">Push</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="push" placeholder="Push" 
					name='push' title="Enter Any Push Processing" maxlength="10" value="<?=$present['push']?>" >
				</div>
				<div class="status"></div>
			</div>
			
			<!--Tags-->
			<div class="form-group">
				<label class="col-sm-2 control-label"> <span class="glyphicon glyphicon-check"></span> Enter tags</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="tags" placeholder="Tags" 
					name='tags' value="<?=$present['tags']?>">
				</div>
				<div class="status"></div>
			</div>
			
			<!--Stored-->
			<div class="form-group">
				<label class="col-sm-2 control-label"> <span class="glyphicon glyphicon-check"></span> Enter Where Stored</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="stored" placeholder="Stored" 
					name='stored' value="<?=$present['stored']?>">
				</div>
				<div class="status"></div>
			</div>
			
			<!--Scanned-->
			<div class="form-group">
				<label class="col-sm-2 control-label"> <span class="glyphicon glyphicon-check"></span> Scanned?</label>
				<select name="scanned" id="scanned" title="Has the File Been Scanned?">
					<option selected="Selected"><?=$present['scanned']?> </option>
					<option>No</option>
					<option>Yes</option>
				</select>
			</div>
			
			<!--Projects-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label">Any projects used in</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="projects" placeholder="Projects" 
					name='projects' title="Projects File is Used in" value="<?=$present['projects']?>">
				</div>
			</div>
			
			<!--Notes-->
			<div class="form-group">
				<br>
				<label class="col-sm-2 control-label">Notes</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="notes" placeholder="Notes" 
					name='notes' title="Anything Else Relevant" value="<?=$present['notes']?>">
				</div>
			</div>
			
			<!--Starred-->
			<div class="form-group">
				<label class="col-sm-2 control-label"> <span class="glyphicon glyphicon-check"></span> Starred?</label>
				<select name="starred" id="starred" title="Star Image to Mark as Important">
					<option selected="Selected"><?=$present['starred']?> </option>
					<option>No</option>
					<option>Yes</option>
				</select>
			</div>
			<!--	Submit Updated File-->
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" title="Update File">Update File</button>
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