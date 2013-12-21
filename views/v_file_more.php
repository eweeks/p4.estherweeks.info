<div>
	<a href='/file/edit/<?=$more['file_id']?>'  title="Edit File">Edit File</a>
	<a href='/file/delete/<?=$more['file_id']?>'  title="Delete File">Delete File</a>
	<table id="more" class="display">
		<thead>
			<tr>
				<th>Category</th>
				<th>File Info</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Number</td>
				<td><?=$more['number']?></td>
			</tr>
			<tr>
				<td>Date Start</td>
				<td><?=$more['date_start']?></td>
			</tr>
			<tr>
				<td>Date End</td>
				<td><?=$more['date_end']?></td>
			</tr>
			<tr>
				<td>Name</td>	
				<td><?=$more['name']?></td> 
			</tr>
			<tr>
				<td>Format</td>
				<td><?=$more['format']?></td>
			</tr>
			<tr>
				<td>File Base</td>
				<td><?=$more['film_base']?></td>	
			</tr>
			<tr>
				<td>Camera</td>
				<td><?=$more['camera']?></td>
			</tr>
			<tr>
				<td>ISO</td>
				<td><?=$more['iso']?></td>	
			</tr>
			<tr>
				<td>Color</td>
				<td><?=$more['color']?></td>
			</tr>
			<tr>
				<td>Positive or Neg</td>
				<td><?=$more['pos_neg']?></td>
			</tr>
			<tr>
				<td>Push</td>
				<td><?=$more['push']?></td>	
			</tr>
			<tr>
				<td>Tags</td>
				<td><?=$more['tags']?></td>
			</tr>
			<tr>
				<td>Stored</td>
				<td><?=$more['stored']?></td>
			</tr>
			<tr>
				<td>Scanned</td>
				<td><?=$more['scanned']?></td>
			</tr>
			<tr>
				<td>Projects</td>
				<td><?=$more['projects']?></td>
			</tr>
			<tr>
				<td>Starred</td>
				<td><?=$more['starred']?></td>
			</tr>
			<tr>
				<td>Created</td>
				<td><?=Time::display($more['created'],'Y-m-d G:i')?></td>
			</tr>
			<tr>
				<td>Modified</td>
				<td><?=Time::display($more['modified'],'Y-m-d G:i')?></td>
			</tr>
		</tbody>
	</table>
</div>
<br>
<a href="/file/">Back</a>