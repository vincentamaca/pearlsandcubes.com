
<?php
if(isset($_POST['save'])){
    $hostname = "localhost";
    $username ="root";
    $password ="";
    $databaseName = "pearlsandcubes";

    $conn = mysqli_connect($hostname, $username, $password, $databaseName);
    
    $pay = $_POST['pay'];
    $gname = $_POST['gname'];
    $gnumber = $_POST['mobile'];

    $query = "UPDATE `orders` SET `payment_type`='".$pay."',`Gcash_name`='".$gname."',`Gcash_number`='".$gnumber."', WHERE 'id'";

    $result = mysqli_query($conn, $query);
    if ($result){
        echo 'save';
    }
    else{
        echo 'not save';
    }
}
?>
<html lang="en">
    <head>
        <title>Payment</title>
        <link rel = "stylesheet" href="css/design.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container">
            <h5>Select Your Payment</h5>
            <form action="" method = "post" class="frm">
                <div class="radiobtn">
                    <div class="radbutton">
                        <input type="radio" id="cod" name="pay" value="Cash on Delivery" onclick="text(0)"/> Cash on Delivery
                    </div>
                    <div class="radbutton">
                        <input type="radio" id="gcash" name="pay" value="GCash" onclick="text(1)" checked/> GCash
                    </div>
                </div>
                <div class="input-group" id="gcsh">
                    <div class="gcashname">
                        <label class="lbl" for="">Gcash Name</label>
                        <input type="text" name="gname" required="">
                    </div>
                    <div class="gcashnumber">
                        <label class="lbl" for="">Mobile Number</label>
                        <input type="text" name="mobile">
                    </div>
                </div>
                <input type="submit" name="save" value="Place Order" class="bbtn">
            </form>
        </div>
        <style>
            .bbtn{
                width: 100%;
                background: green;
                padding: 8px;
                border-radius: 5px;
                color: white;
                border: none;
                font-weight: bold;
                font-size: 18px;
                outline: none;
                margin-top: 10px;
                transition: 0.5s;
            }
            .bbtn:hover{
                background: #00994d;
                color: #2F4F4F;
                font-weight: bold;
            }
            .file{
                width: 100%;
                padding:5px 10px;
                background:#00ad2d;
                border:1px solid #00ad2d;
                position:relative;
                color:#fff;
                border-radius:2px;
                text-align:center;
                cursor:pointer
            }
            .container h5{
            text-align: center;
            font-size: 18px;
            padding-bottom: 20px;
            }
            .container{
            width: 500px;
            height: 300px;
            border: 1px solid;
            background-color: white;
            display: flex;
            flex-direction: column;
            padding: 40px;
            justify-content: center;
            }
            input[type=text] {
            width: 97%;
            padding: 5px 10px;
            margin: 5px 5px;
            font-size: 18px;
            box-sizing: border-box;
            }
            .radbutton{
                padding: 5px;
            }
            .input-group{
                border: 1px solid;
                border-radius: 5px;
            }
            .lbl{
                padding:5px;
            }
        </style>
    </body>
</html>
<script>
    function text(x){
        if (x==1) document.getElementById("gcsh").style.display = "block";
        else document.getElementById("gcsh").style.display ="block";
        return;
    }
</script>