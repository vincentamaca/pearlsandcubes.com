<?php
if(isset($_POST['login'])){
	// Account details
	$apiKey = urlencode('Your apiKey');
	$name = $_POST['first_name'];
	
	// Message details
	$numbers = $_POST['mobile'];
	$sender = "Pearls and cubes";
	$otp=mt_rand(100000,999999);
	setcookie("otp", $otp);
	$message = $name."Your OTP is".$otp;
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	echo("OTP SEND SUCCESSFULLY");
	// Process your response here
	echo $response;
}
?> 
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="">
            <input type="text" name="name">
            <input type="text" name="number">
            <input type="submit" name="login">
        </form>
    </body>
</html>