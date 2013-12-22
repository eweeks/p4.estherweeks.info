<h1>View page for projects</h1>

<!-- Prints our project info for this project-->
<?php foreach($name as $row): ?>	
	<h2><?=$row['project_name']?>:</h2> 
	<p>Description:<?=$row['project_description']?></p>
<?php endforeach; ?>

<br><br>

<!-- Prints out file info for this project-->
<?php foreach($projects as $project): ?>
	<article>
		<p>File name:<?=$project['name']?></p>
		<p>File Number:<?=$project['number']?></p>
		<p>Stored:<?=$project['stored']?></p>
		<p>Date of file:<?=$project['date_start']?> </p>
		
		<a  href="#fileModal<?=$project['file_id']?>"  title="Delete File" data-toggle="modal">Delete File</a>
		<!--modal content for delete file -->
			<div id="fileModal<?=$project['file_id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fileModalLabel<?=$project['file_id']?>" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="fileModalLabel<?=$project['file_id']?>">Are You Sure?</h4>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to delete this file?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
								<a href='/projects/f_delete/<?=$project['file_id']?>/<?=$row['project_id']?>' 
								title="Delete File"
								class="btn btn-default" role="button" >Yes</a>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		
		
	</article>
	<br><br>
<?php endforeach; ?>
<br>
<a href="/projects/files" title="Add Files">Add Files </a>