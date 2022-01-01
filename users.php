<style>
	.fa {
		color: white;
	}
	.fa-user-plus{
		color: white;
		float: right;
		font-size: 28px;
		margin-bottom: 10px;
		transition: 0.5s;
	}
	.fa-user-plus:hover{
		color: black;
	}
	.hehe{
		float: right;
	}
	.bb{
		transition: 0.5s;
	}
	.bb:hover{
		color: red;
	}
</style>
<div class="container-fluid">
<div class="row">
	<div class="col-lg-12">
	<a href="index.php?page=manage_user" class="hehe" ><span class='addnew'><i class="fa fa-user-plus"></i></span></a>
	</div>
	</div>
	
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
				<label for="">Admin User</label>
			<thead>
				<tr>
					<th >Name</th>
					<th >Email</th>
					<th >Position</th>
					<th >Username</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					$users = $conn->query("SELECT * FROM users order by name asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td>
				 		<?php echo $row['name'] ?>
				 	</td>
					 <td>
				 		<?php echo $row['email'] ?>
				 	</td>
					 <td>
				 		<?php echo $row['position'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['username'] ?>
				 	</td>
					<td class="text-center">
						<a href="delete_admin.php?id=<?php echo $row["id"]; ?>" class="bb">Delete</a></td>
                    </td>
					<?php
					$i++;
					?>
				 	
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>
<script>
$('.manage_user').click(function(){
		uni_modal('Add new user','manage_user.php?id='+$(this).attr('data-id'))
	})
$('.edit_user').click(function(){
	uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
})

</script>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
                    <label for="">Customer Information</label>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Mobile Number</th>
                    <th>Address</th>
					<th>Remove Customer</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					$users = $conn->query("SELECT*FROM user_info");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td>
				 		<?php echo $row['first_name'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['last_name'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['mobile']?>
				 	</td>
					<td>
				 		<?php echo $row['address']?>
				 	</td>
					<td class="text-center">
					<a href="delete_process.php?user_id=<?php echo $row["user_id"]; ?>" class="bb">Remove</a></td>
                    </td>
					<?php
					$i++;
					?>
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>
</div>
