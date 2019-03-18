<div class="container">
	<table class="table table-hover">
		<thead>
			<tr><th>Order No</th>
				<th>Food ID</th>
				<th>Order Date</th>
				<th>Order Quantity</th>
				<th>Unit</th>
				<th>Expected Delivery</th>
			</tr>
		</thead>
		<?php 
			foreach ($displayorder as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="Order_no"><?php echo $row->order_no; ?></td>
				<td class="Food_id"><?php echo $row->food_name; ?></td>
				<td class="Order_date"><?php echo $row->order_date; ?></td>
				<td class="Order_quantity"><?php echo $row->order_quantity; ?></td>
				<td class="Unit"><?php echo $row->unit; ?></td>
				<td class="Expected_delivery"><?php echo $row->expected_delivery; ?></td>
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>