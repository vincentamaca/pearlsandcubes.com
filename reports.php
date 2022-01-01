<div class="right">
    <a href="print.php" class="btn btn-primary">Go to Print</a>
</div>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
                    <label for="">Customer Order Info.</label>
			<thead>
				<tr>
					<th class="text-center">Name</th>
					<th class="text-center">Mobile Number</th>
                    <th class="text-center">Payment Type</th>
                    <th class="text-center">Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					$users = $conn->query("SELECT*FROM orders");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td class="text-center">
				 		<?php echo $row['name'] ?>
				 	</td>
				 	<td class="text-center">
				 		<?php echo $row['mobile'] ?>
				 	</td>
                    <td class="text-center">
				 		<?php echo $row['payment_type'] ?>
				 	</td>
                    <td class="text-center">
				 		<?php echo $row['date']?>
				 	</td>
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
        
			</div>
		</div>
	</div>
</div>
<style>
    .right{
        margin-left: 90%;
    }
</style>
