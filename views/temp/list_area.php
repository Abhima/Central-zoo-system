<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Area ID</th>
				<th>Area Name</th>
			</tr>
		</thead>
		<?php 
			foreach ($results as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="area_id"><?php echo $row->area_id; ?></td>
				<td class="area_name"><?php echo $row->area_name; ?></td>
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>