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

<tr><td><?=$file['name']?></td> <td><?=$file['date']?></td>  <td><?=$file['camera']?></td>
	 <td><?=$file['number']?></td> <td><?=$file['format']?></td> <td><?=$file['tags']?></td>
	<td><a href='/file/more/<?=$file['file_id']?>' title="More Info">More info </a></td></tr>
	<?php endforeach; ?>
	
					</tbody>
				</table>
				
<p></p>