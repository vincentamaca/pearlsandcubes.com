<?php 
session_start();
?>
<div class="container-fluid">
	<form action="" id="signup-frm" method="post">
		<div class="form-group">
			<label for="" class="control-label">First Name</label>
			<input type="text" name="first_name" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Last Name</label>
			<input type="text" name="last_name" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact No.</label>
			<input type="text" name="mobile" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
		</div>
		
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
		</div>
		<br>
		<button class="buttn btn btn-info btn-sm" name="login">Create</button>
	</form>
	<br>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
	.container-fluid{
		background-color: rgb(55, 139, 139);
	}
	.buttn{
		margin-bottom: 5px;
		width: 100%;
		padding: 6px;
		font-size: 16px;
		background-color: green;
		color: white;
		outline: none;
		border: none;
		transition: 0.5s;
	}
	.buttn:hover{
		background-color: #3CB371;
		color: black;
	}
	.control-label{
		font-size: 16px;
		margin-top: 5px;
	}
</style>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		$('#signup-frm button[type="submit"]').attr('disabled',true).html('Saving...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php?page=home' ?>';
				}else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Username already exist.</div>')
					$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');
				}
			}
		})
	})
</script>