<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Food ID</th>
				<th>Food Name</th>
				<th>Food Type</th>
				<th>Quantity</th>
				<th>Unit</th>
			</tr>
		</thead>
		<?php 
			foreach ($results as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="Food_id"><?php echo $row->food_id; ?></td>
				<td class="Food_name"><?php echo $row->food_name; ?></td>
				<td class="Food_type"><?php echo $row->food_type; ?></td>
				<td class="quantity"><?php echo $row->quantity; ?></td>
				<td class="unit"><?php echo $row->unit; ?></td>
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>