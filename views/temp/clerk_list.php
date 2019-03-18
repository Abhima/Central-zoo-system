<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Clerk_ID</th>
				<th>Clerk Name</th>
				<th>Animal_name</th>
				<th>Area</th>
				<th>Species</th>
				<th>Food</th>
			</tr>
		</thead>
		<?php 
			foreach ($searchclerk as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="Clerk_id"><?php echo $row->clerk_id; ?></td>
				<td class="Clerk_name"><?php echo $row->clerk_name; ?></td>
				<td class="animal_name"><?php echo $row->animal_name; ?></td>
				<td class="area"><?php echo $row->area_name; ?></td>
				<td class="species"><?php echo $row->species_name; ?></td>
				<td class="food_name"><?php echo $row->food_name; ?></td>	
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>