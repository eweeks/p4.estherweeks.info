<p>Select Files to add to project 
	<?php foreach($projects as $project): ?><?=$project['project_name']?><?php endforeach; ?></p>

<table id="example" class="display">
					<thead>
						<tr>
							<th>Name</th>
							<th>Date</th>
							<th>Camera</th>
							<th>Number</th>
							<th>Format</th>
							<th>Tags</th>
							<th>More</th>
						</tr>
					</thead>
					<tbody>


<?php foreach($files as $file): ?>

<tr><td><?=$file['name']?></td> <td><?=$file['date_start']?></td>  <td><?=$file['camera']?></td>
	 <td><?=$file['number']?></td> <td><?=$file['format']?></td> <td><?=$file['tags']?></td>
	<td><a href='/projects/f_add/<?=$file['file_id']?>' title="More Info">Add File</a></td></tr>
	<?php endforeach; ?>
	
					</tbody>
				</table>
				
<p></p>