<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Animal_ID</th>
				<th>Animal Name</th>
				<th>Species</th>
			</tr>
		</thead>
		<?php 
			foreach ($results as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="Animal_id"><?php echo $row->animal_id; ?></td>
				<td class="Animal_name"><?php echo $row->animal_name; ?></td>
				<td class="Species"><?php echo $row->species_name; ?></td>
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>