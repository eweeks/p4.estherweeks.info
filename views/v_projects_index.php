<h2>Index page for projects</h2>

	<?php foreach($projects as $project): ?>

		<article>
		
			<h1><?=$project['project_name']?> <?=$project['project_description']?> created:</h1>
			<time datetime="<?=Time::display($project['created'],'Y-m-d G:i')?>">
				<?=Time::display($project['created'])?>
			</time>
			<br><br>
		</article>

	<?php endforeach; ?>