<!--<table>
<thead>
	<tr>
		<th>Number</th>
		<th>Date Start</th>
		<th>Date End</th>
		<th>Name</th>
		<th>Format</th>
		<th>File Base</th>
		<th>Camera</th>
		<th>ISO</th>
		<th>Color</th>
		<th>Positive or Neg</th>
		<th>Push</th>
		<th>Tags</th>
		<th>Stored</th>
		<th>Scanned</th>
		<th>Projects</th>
		<th>Starred</th>
		<th>Created</th>
		<th>Modified</th>
		
	</tr>
</thead>
<tbody>

<tr>
	<td><?=$more['number']?></td>
	<td><?=$more['date_start']?></td>
	<td><?=$more['date_end']?></td>
	<td><?=$more['name']?></td> 
	<td><?=$more['format']?></td>
	<td><?=$more['film_base']?></td>	 
	<td><?=$more['camera']?></td>
	<td><?=$more['iso']?></td>	
	<td><?=$more['color']?></td>
	<td><?=$more['pos_neg']?></td>
	<td><?=$more['push']?></td>	
	<td><?=$more['tags']?></td>
	<td><?=$more['stored']?></td>
	<td><?=$more['scanned']?></td>
	<td><?=$more['projects']?></td>
	<td><?=$more['starred']?></td>
	<td><?=Time::display($more['created'],'Y-m-d G:i')?></td>
	<td><?=Time::display($more['modified'],'Y-m-d G:i')?></td>	

	</tr>
</tbody>
</table>-->
		<p>Number: <?=$more['number']?></p>
		<p>Date Start: <?=$more['date_start']?></p>
		<p>Date End: <?=$more['date_end']?></p>
		<p>Name: <?=$more['name']?></p>
		<p>Format: <?=$more['format']?></p>
		<p>Film Base: <?=$more['film_base']?></p>
		<p>Camera: <?=$more['camera']?></p>
		<p>ISO: <?=$more['iso']?></p>
		<p>Color: <?=$more['color']?></p>
		<p>Positive or Neg: <?=$more['pos_neg']?></p>
		<p>Push: <?=$more['push']?></p>
		<p>Tags: <?=$more['tags']?></p>
		<p>Stored: <?=$more['stored']?></p>
		<p>Scanned: <?=$more['scanned']?></p>
		<p>Projects: <?=$more['projects']?></p>
		<p>Starred: <?=$more['starred']?></p>
		<p>Photographer: <?=$more['photographer']?></p>
		<p>Created: <?=Time::display($more['created'],'Y-m-d G:i')?></p>
		<p>Modified: <?=Time::display($more['modified'],'Y-m-d G:i')?></p>
		<p>Notes: <?=$more['notes']?></p>



<a href="/file/">Back</a>