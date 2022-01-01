<?php 
session_start() 
?>
<html>
	<head>
		<title></title>
		
	</head>
	<body>
	<div class="container-fluid">
	<form action="" id="login-frm">
		<div class="form-group">
			<label for="" class="control-label">Username</label>
			<input type="text" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
			
		</div>
		<button class="buttonn btn btn-info btn-sm">Login</button>
		<small><a href="javascript:void(0)" id="new_account" class="gidli">Create New Account</a></small>
	</form>
</div>
	</body>
</html>


<style>
	.gidli{
		color: blue;
	}
	#uni_modal .modal-footer{
		display:none;
	}
	.admin{
		margin: 150px;
	}
	.container-fluid{
		background-color: rgb(55, 139, 139);
	}
	.buttonn{
		margin-bottom: 5px;
		width: 100%;
		font-size: 16px;
		background-color: green;
		color: white;
		outline: none;
		border: none;
		transition: 0.5s;
	}
	.buttonn:hover{
		background-color: #3CB371;
		color: black;
	}
	a{
		color: white;
		text-decoration: none;
		font-size: 16px;
		float: right;
		margin: 10px;
	}
	a:hover{
		text-decoration: none;
		color: red;
	}
	.control-label{
		color: white;
	}
</style>

<script>
	$('#new_account').click(function(){
		uni_modal("Create an Account",'signup.php?redirect=index.php?page=home')
	})
	$('#login-frm').submit(function(e){
		e.preventDefault()
		$('#login-frm button[type="submit"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php?page=home' ?>';
				}else{
					$('#login-frm').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>