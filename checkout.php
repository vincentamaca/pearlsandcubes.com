<?php 
session_start();
?>
<header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                	<h3 class="check">CHECKOUT</h3>
            </div>
        </div>
    </header>
    <style>
        .check{
            color: green;
            width: 1000px;
        }
        .card{
            background-color: rgb(55, 139, 139);
            margin-top: 20px;
        }
        .btn{
            background-color: green;
            margin-top: 20px;
            color: white;
            outline: none;
            border: none;
            transition: 0.5s;
        }
        .btn:hover{
            background-color: #228B22;
            color: black;
        }
        .payment{
            color: black;
            transition: 0.5s;
        }
        .payment:hover{
            color: white;
            text-decoration: none;
        }
        h3{
            font-size: 40px;
            transition: 0.5s;
        }
        h3:hover{
            background: #90EE90;
        }

    </style>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" id="checkout-frm">
                    <h4>Confirm Delivery Information</h4>
                    <div class="form-group">
                        <label for="" class="control-label">First Name</label>
                        <input type="text" name="first_name" required="" class="form-control" value="<?php echo $_SESSION['login_first_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Last Name</label>
                        <input type="text" name="last_name" required="" class="form-control" value="<?php echo $_SESSION['login_last_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Contact</label>
                        <input type="text" name="mobile" required="" class="form-control" value="<?php echo $_SESSION['login_mobile'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Address</label>
                        <textarea cols="30" rows="3" name="address" required="" class="form-control"><?php echo $_SESSION['login_address'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <br>
                        <input type="date" id="date" name="date"class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" name="email" required="" class="form-control" value="<?php echo $_SESSION['login_email'] ?>">
                    </div>
                    <h4>Select your Payment</h4>
                    <div class="radiobtn">
                    <div class="radbutton">
                        <input type="radio" id="cod" name="pay" value="Cash on Delivery" onclick="text(0)"/> Cash on Delivery
                    </div>
                    <br>
                    <div class="radbutton">
                        <input type="radio" id="gcash" name="pay" value="GCash" onclick="text(1)" checked/> GCash
                    </div>
                    <div id="gcsh">
                        <br>
                        <label for="">* Please pay using your gcash account to this number</label>
                        <h5>09101382867</h5>
                        <label for="">* Please provide your gcash number and gcash name below to verify your payment</label>
                        <br>
                        <div class = "form-group">
                            <label class="lbl" >Gcash Name</label>
                            <input type="text" class="form-control"name="gname" >
                        </div>
                        <div class="form-group">
                            <label class="lbl" >Gcash Number</label>
                            <input type="text" class="form-control" name="gnumber" >
                    </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-block btn-outline-primary" name="save" id="account">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
    $(document).ready(function(){
          $('#checkout-frm').submit(function(e){
            e.preventDefault()
          
            start_load()
            $.ajax({
                url:"admin/ajax.php?action=save_order",
                method:'POST',
                data:$('#checkout-frm').serialize(),
                success:function(resp){
                    if(resp==1){
                        alert_toast("Your order placed, Thank You!")
                        setTimeout(function(){
                            location.replace('index.php?page=home')
                        },2500)
                    }
                }
            })
        })
        })

        function text(x){
        if (x==1) document.getElementById("gcsh").style.display = "block";
        else document.getElementById("gcsh").style.display ="none";
        return;
    }

    $('#account').click(function(){
			if('<?php echo isset($_SESSION['login_user_id']) ?>' == 1){
				location.replace("index.php?page=account")
			}else{
				uni_modal("account","login.php?page=account")
			}
		})
    </script>
    