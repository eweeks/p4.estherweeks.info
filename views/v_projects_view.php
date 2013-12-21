<h1>View page for projects</h1>

<!-- Prints our project info for this project-->
<?php foreach($name as $row): ?>	
	<h2><?=$row['project_name']?>:</h2> 
	<p><?=$row['project_id']?>:</p>
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
		<br><br>
	</article>
	
	<a href='/projects/f_delete/<?=$project['file_id']?>/<?=$row['project_id']?>'  title="Delete File">Delete File</a>
<?php endforeach; ?>
<br>
<a href="/projects/files" title="Add Projects">Add Files </a>