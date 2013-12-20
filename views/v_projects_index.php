<div class="row">
	<div class="col-md-12 col-sm-12">
		<h1>Projects</h1>
		<a href='/projects/add'>Add Project</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<?php foreach($projects as $project): ?>

			<article>
		
				<h2><?=$project['project_name']?></h2> 
				<p><?=$project['project_description']?></p>
				<p class="time">Created:
				<time datetime="<?=Time::display($project['created'],'Y-m-d G:i')?>">
					<?=Time::display($project['created'])?>
				</time>
				</p>
				<p><a href='/projects/view/<?=$project['project_id']?>' title="View Project"
				class="view">View Project </a></p>
				<p><a href='/projects/delete/<?=$project['project_id']?>' title="Delete Project"
				class="view">Delete Project </a></p>
			
				<br>
			</article>
	
		<?php endforeach; ?>
	</div>
</div>