<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="container">
        <label for="">Add new user</label> <br><br>
	<div class="box">
        <form action="save_user.php" id="newuser" method="post">
            <div>
                <input type="text"id="name" name="name" class="user" placeholder="Full Name" required>
            </div>
            <br>
            <div>
                <input type="email"id="mail" name="email" class="user" placeholder="Email" required>
            </div>
            <br>
            <div>
                <select name="position" id="position"class="user">
                    <option value="">Select Position</option>
                    <option value="Admin">Admin</option>
                    <option value="Staff">staff</option>
                </select>
            </div>
            <br>
            <div>
                <select name="type" id="type"class="user">
                    <option value="">Select Type</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
            <br>
            <div>
                <input type="text" id="username" name="username"placeholder="Username"class="user" required>
            </div>
            <br>
            <div>
                <input type="text" id="password" name="password" placeholder="Password" class="user" required>
            </div>
            <br>
            
		    <div class="text-center">
                <input type="submit"class="userr" name="save" id="btnsave" value="submit">
		    </div>
        </form>
	</div>
</div>
    </body>
</html>


<style>
	#uni_modal .modal-footer{
		display: none;
	}
    .user{
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        outline: none;
        border: none;
        transition: .5s;
    }
    .user:hover{
        outline: 1px solid;
        
    }
    .userr{
        width: 100%;
        border-radius: 5px;
        outline: 1px solid black;
        border: none;
        background:teal;
        color: white;   
        transition: 0.5s;
    }
    .userr:hover{
        background-color: #66CDAA;
        color: black;
        outline: none;
    }
    .container{
        background-color: silver;
        border-radius: 5px;
        height: 440px;
    }
</style>
