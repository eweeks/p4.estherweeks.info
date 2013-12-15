<h2>Index page for projects</h2>
<a href='/projects/add'>Add Project</a>
	<?php foreach($projects as $project): ?>

		<article>
		
			<h1><?=$project['project_name']?> <?=$project['project_description']?> <?=$project['project_id']?> created:</h1>
			<time datetime="<?=Time::display($project['created'],'Y-m-d G:i')?>">
				<?=Time::display($project['created'])?>
			</time>
			<a href='/projects/view/<?=$project['project_id']?>' title="View Project">View Project </a>
			
			<br><br>
		</article>

	<?php endforeach; ?>
	