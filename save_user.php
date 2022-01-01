
<?php
include_once 'db_connect.php';
if(isset($_POST['save']))
{    
	$name =$_POST['name'];
	$email = $_POST['email'];
	$position = $_POST['position'];
	$type =$_POST['type'];
	$username =$_POST['username'];
	$password =$_POST['password'];

     $sql = "INSERT INTO users (name, email, position, username, password, type)
     VALUES ('$name','$email', '$position', '$username','$password', '$type')";
     if (mysqli_query($conn, $sql)) {
        $message = "User added successfully!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Refresh:0; url=index.php?page=users");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>