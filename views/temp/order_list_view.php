<div id="header_title">
	<h4><b>Minimun Stock list</b></h4>
</div>

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

		<tbody>
			<?php if (! is_null($getorderlistfood)): ?>
				<?php
					foreach ($getorderlistfood as $row)
					{

				?>
				<tr>
					<td><?php echo $row->food_id;?></td>
					<td><?php echo $row->food_name;?></td>
					<td><?php echo $row->food_type;?></td>
					<td><?php echo $row->quantity;?></td>
					<td><?php echo $row->unit;?></td>
				</tr>
				<?php
					}
				?>
			<?php endif ?>
		</tbody>
	</table>
</div>