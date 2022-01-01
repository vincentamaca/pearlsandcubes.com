<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
<br>
    <div class="right">
    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
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
    .btn{
        margin-left: 94%;
    }
</style>