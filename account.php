<?php
	session_start();
    include('admin/db_connect.php');
 ?>
<!DOCTYPE html>
<html>
 <head>
   <title>Your profile</title>
   <link rel="stylesheet" href="css/account.css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
<body>
	<div class="container1">
        <div class="cons1">
		        <nav>
			        <ul>
                        <li><a href="index.php">Back Home</a></li>
				        <button type="button" class="btn1 " data-toggle="modal" data-target="#myModal">Change Information</button>
			        </ul>
		        </nav>
        </div> 
        <br>
        <form class="infoo" action="">
            <center>
            <h2>Hello!</h2>
            <h1>
            <?php echo $_SESSION['login_first_name'] ?>
            <?php echo $_SESSION['login_last_name'] ?>
            </h1>
            <h4>
            <?php echo $_SESSION['login_mobile'] ?>
            <br>
            <?php echo $_SESSION['login_email'] ?>
            <br>
            <?php echo $_SESSION['login_address'] ?>
            </h4>
            </center>
        </form>
            
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change your information</h4>
                </div>
                <div class="modal-body">
                    <form action=""class="iloveyou">
                        <div class="input">
                            <input type="text" class="info" name="name" placeholder="Enter First Name" required>
                        </div>
                        <br>
                        <div class="input">
                            <input type="text" class="info" name="lastname" placeholder="Enter Last Name" required>
                        </div>
                        <br>
                        <div class="input">
                            <input type="text" class="info" name="address"placeholder="Enter Address"required>
                        </div>
                        <br>
                        <div class="input">
                            <input type="text" class="info" name="mobile" placeholder="Enter Mobile" required>
                        </div>
                        <br>
                        <div class="input">
                            <input type="email" class="info" name="email" placeholder="Enter Email" required>
                        </div>
                        <br>
                        <div class="input">
                            <input type="text" class="info" name="password" placeholder="New Password" required>
                        </div>
                        <br>
                        <div class="">
                            <button type="submit" class="btn2 ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 </body>
 <style>
     body{
         background-image: url("pearls.jpg");
         background-repeat: no-repeat;
         background-size:     cover; 
     }
     .infoo{
        width: 780px;
        border-radius: 5px;
        background: #efefef;
        -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
        box-shadow: 10px 10px 15px rgba(0,0,0,0.6);
     }
     h2{
        padding-top:10px;
        padding-left: 8px;
        font-size: 60px;
     } 
     h4{
         padding-left: 8px;
         padding-bottom:  10px;
         font-size: 28px;
     }
     .container1{
         width: 850px;
         margin-top: 30px;
         margin-bottom: 30px;
         border-radius: 10px;
         height: 400px;
         box-shadow: 10px 10px 15px rgba(0,0,0,0.6);
     }
     nav{
    float: right;
    margin-right: 50px;
    padding-top: 20px;
    }
    nav ul li{
    display: inline-block;
    text-decoration: none;
    margin-left: 10px;
    }
    a{
    text-decoration: none;
    font-size: 16px;
    color: #000;
    transition: 0.5s;
    text-transform: uppercase;
    }
    a:hover{
    color: aqua;
    text-decoration: none;
    }
     .yf{
         text-transform: uppercase;
         margin-top: 20px;
         float: left;
         margin-left: 30px;
         font-size: 16px;
         font-family: sans-serif;
     }
     .yf:hover{
         color: aqua;
     }
     .btn1{
        text-transform: uppercase;
        background: none;
        border: none;
        color: black;
        font-size: 16px;
        margin-left: 10px;
        transition: 0.5s;
     }
     .btn1:hover{
        color: aqua;
     }
     .btn2{
         width: 100%;
         margin:0;
         background-color: #228B22;
         border: none;
         font-size: 16px;
         border-radius: 5px;
         padding: 5px;
         color: white;
         transition: 0.5s;
     }
     .btn2:hover{
         color: black;
         background-color: #006400;
     }
     .info{
         width: 100%;
         border-radius: 3px;
         outline: 1px solid;
         border: none;
         padding: 5px;
         font-size: 16px;
     }
     label{
         font-size: 16px;
     }
     .modal-body{
         box-shadow: 10px gray;
     }
     .iloveyou{
         margin-right: 40px;
     }
     .input{
         box-shadow: 10px gray;
     }
 </style>
</html>
<script>
     $('.update_profile').click(function(){
		uni_modal('Edit Information','update_profile.php?id='+$(this).attr('data-id'))
	})
 </script>