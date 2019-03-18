<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Invoice_no</th>
				<th>Order_no</th>
				<th>Payment_amount</th>
			</tr>
		</thead>
		<?php 
			foreach ($displayinvoice as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="Invoice_no"><?php echo $row->invoice_no; ?></td>
				<td class="Order_no"><?php echo $row->order_no; ?></td>
				<td class="Payment_amount"><?php echo $row->payment_amount; ?></td>
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>