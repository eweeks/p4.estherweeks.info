<h2>View page for projects</h2>
			<?php foreach($name as $row): ?>	
			<h1><?=$row['project_name']?>:</h1> 
			<p>Description:<?=$row['project_description']?></p>
				<?php endforeach; ?>
				<br><br>
	<?php foreach($projects as $project): ?>
		<article>
			<p>File name:<?=$project['name']?></p>
			<p>File Number:<?=$project['number']?></p>
			<p>Stored:<?=$project['stored']?></p>
			<p>Date of file:<?=$project['date']?> </p>
			<br><br>
		</article>
	<?php endforeach; ?>
<a href="/projects/files" title="Add Projects">Add Files </a>