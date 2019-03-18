<div class="container">
	<table class="table table-hover">
		<thead>
			<tr><th>Order No</th>
				<th>Supplier ID</th>
				<th>Supplier Name</th>
				<th>Food ID</th>
				<th>Order Date</th>
				<th>Order Quantity</th>
				<th>Supplied Quantity</th>
				<th>Unit</th>
				<th>Expected Delivery</th>
				<th>Delivery Date</th>
				<th>Remark</th>
			</tr>
		</thead>
		
		<tbody>
		<?php 
			foreach ($results as $row) 
			{
		?>
		<form method="post" action="<?php echo base_url('order_detail/delivered'); ?>">
			<tr>
				<td class="Order_no"><?php echo $row->order_no; ?></td>
				<td class="Supplier_id"><?php echo $row->supplier_id; ?></td>
				<td class="Supplier_name"><?php echo $row->supplier_name; ?></td>
				<td class="Food_id"><?php echo $row->food_name; ?></td>
				<td class="Order_date"><?php echo $row->order_date; ?></td>
				<td class="Order_quantity"><?php echo $row->order_quantity; ?></td>
				<td class="Supplied_quantity"><?php echo $row->supplied_quantity; ?></td>
				<td class="Unit"><?php echo $row->unit; ?></td>
				<td class="Expected_delivery"><?php echo $row->expected_delivery; ?></td>
				<?php
					if($row->remark == "")
					{
				?>
					<td class="Delivery_date"><input type="date" name="deliveryDate" required/></td>
					<td class="Remark"><button name="DataValue" type="submit" value="<?php echo $row->id;?>">Delivered</button></td>
				<?php
					}
					else
					{
				?>
				<td class="Delivery_date"><?php echo $row->delivery_date; ?></td>
				<td class="Remark"><?php echo $row->remark; ?></td>
				<?php
					}
				?>
				
			</tr>
			</form>
			<?php
			}
		?>
		</tbody>
		
	</table>
</div>