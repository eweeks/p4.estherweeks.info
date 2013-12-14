<h2>View page for projects</h2>

	<?php foreach($projects as $project): ?>
		<article>
			<h1><?=$project['project_name']?> <?=$project['project_description']?> created:</h1>

			<?=$project['name']?>
			<br><br>
		</article>
	<?php endforeach; ?>