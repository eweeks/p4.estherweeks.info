<table id="example" class="display">
	<thead>
		<tr>
			<th>Number</th>
			<th>Name</th>
			<th>Date Start</th>
			<th>Camera</th>
			<th>Format</th>
			<th>Tags</th>
			<th>Color</th>
			<th>More</th>
		</tr>
	</thead>
	<tbody>
	
	<?php foreach($files as $file): ?>
		<tr>
			<td><?=$file['number']?></td>
			<td><?=$file['name']?></td> 
			<td><?=$file['date_start']?></td>  
			<td><?=$file['camera']?></td>
			<td><?=$file['format']?></td> 
			<td><?=$file['tags']?></td>
			<td><?=$file['color']?></td>
			<td><a href='/file/more/<?=$file['file_id']?>' title="More Info">More info </a></td>
		</tr>
	<?php endforeach; ?>
	
	</tbody>
</table>
