<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Supplier ID</th>
				<th>Supplier Name</th>
				<th>Address</th>
				<th>Contact no.</th>
			</tr>
		</thead>
		<?php 
			foreach ($results as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="Supplier_id"><?php echo $row->supplier_id; ?></td>
				<td class="Supplier_name"><?php echo $row->supplier_name; ?></td>
				<td class="Address"><?php echo $row->address; ?></td>
				<td class="Contact_no"><?php echo $row->contact_no; ?></td>
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>