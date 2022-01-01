<?php
    include_once 'data.php';
    if(isset($_POST['save'])){
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $username = $_POST['email'];
        $payment = $_POST['pay'];
        $gcashname = $_POST['gname'];
        $number = $_POST['mobile'];

        $sql = "INSERT INTO `orders`(`name`, `address`, `mobile`, `email`, `payment_type`, `Gcash_name`, `Gcash_number`, `status`) 
        VALUES ('$firstname', '$lastname', '$contact','$address', '$username', '$payment', '$gcashname', $number)";
        
        if(mysqli_query($conn, $sql)){
            alert ("Order Placed!");
        }
        else
        {
            alert("Order not Place!");
        }
        mysqli_close($conn);
    }
    ?>