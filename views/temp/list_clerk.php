<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Clerk_ID</th>
				<th>Clerk Name</th>
			</tr>
		</thead>
		<?php 
			foreach ($results as $row) 
			{
		?>
		<tbody>
			<tr>
				<td class="Clerk_id"><?php echo $row->clerk_id; ?></td>
				<td class="Clerk_name"><?php echo $row->clerk_name; ?></td>
			</tr>
		</tbody>
		<?php
			}
		?>
	</table>
</div>