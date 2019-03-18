<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Food Id</th>
				<th>Food Name</th>
				<th>Supplier Id</th>
				<th>Supplier Name</th>
				<th>Address</th>
				<th>Contact No</th>
			</tr>
		</thead>
		<?php 
			foreach ($searchfood as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="food_id"><?php echo $row->food_id; ?></td>
				<td class="food_name"><?php echo $row->food_name; ?></td>
				<td class="supplier_id"><?php echo $row->supplier_id; ?></td>
				<td class="supplier_name"><?php echo $row->supplier_name; ?></td>
				<td class="address"><?php echo $row->address; ?></td>
				<td class="contact_no"><?php echo $row->contact_no; ?></td>	
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>