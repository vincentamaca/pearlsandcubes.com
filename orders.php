
<style>
	th{
		font-size: 14px;
		background: skyblue;
	}
	td{
		font-size: 12px;
	}
	.btnnnn{
		font-size: 12px;
		padding: 0;
		width:80px;
		outline: none;
		border: none;
	}
	.btnnnnn{
		background-color: red;
		font-size: 12px;
		padding: 0;
		width: 80px;
		padding-left: 5px;
		padding-right: 5px;
		outline: none;
		border: none;
	}
</style>
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<table class="table table-bordered">
		<thead>
			 <tr>
				<th>Name</th>
				<th>Address</th>
				<th>Username</th>
				<th>Mobile</th>
				<th>Payment Type</th>
				<th>Gcash Name</th>
				<th>Gcash Number</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i = 1;
			include 'db_connect.php';
			$qry = $conn->query("SELECT * FROM orders ");
			while($row=$qry->fetch_assoc()):
			 ?>
			 <tr>
			 		<td><?php echo $row['name'] ?></td>
			 		<td><?php echo $row['address'] ?></td>
			 		<td><?php echo $row['email'] ?></td>
			 		<td><?php echo $row['mobile'] ?></td>
					<td><?php echo $row['payment_type']?></td>
					<td><?php echo $row['Gcash_name']?></td>
					<td><?php echo $row['Gcash_number']?></td>
			 		<?php if($row['status'] == 1): ?>
			 			<td class="text-center"><span class="badge badge-success">Confirmed</span></td>
			 		<?php else: ?>
			 			<td class="text-center"><span class="badge badge-secondary">Order Confirmation</span></td>
			 		<?php endif; ?>
			 		<td>
						<button class="btnnnn btn-sm btn-primary view_order" data-id="<?php echo $row['id'] ?>" >View Order</button>
					</td>
					<td>
						<button class="btnnnnn btn-sm btn-danger delete_ord"data-id="<?php echo $row['id'] ?>" name="delete" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
			 		</td>
			 </tr>
			<?php endwhile; ?>
		</tbody>
	</table>
		</div>
	</div>

</div>
<script>
	$('.view_order').click(function(){
		uni_modal('Order','view_order.php?id='+$(this).attr('data-id'))
	})

	$('.delete_ord').click(function(){
		_conf("Are you sure to delete this order?","delete_ord",[$(this).attr('data-id')])
	})
	function delete_ord($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_order',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Order has deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}
			}
		})

	}
</script>