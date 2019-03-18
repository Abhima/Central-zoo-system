<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ConsumeDate</th>
				<th>ConsumeQuantity</th>
				<th>Time</th>
				<th>species_id</th>
				<th>food_id</th>
			</tr>
		</thead>
		<?php 
			foreach ($listofextraction as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="ConsumeDate"><?php echo $row->ConsumeDate; ?></td>
				<td class="ConsumeQuantity"><?php echo $row->ConsumeQuantity; ?></td>
				<td class="Time"><?php echo $row->Time; ?></td>
				<td class="species_id"><?php echo $row->species_name; ?></td>	
				<td class="food_id"><?php echo $row->food_id; ?></td>		
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>