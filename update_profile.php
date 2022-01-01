<div class="container">
	<div class="box">
        <form action="" id="update" method="post">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" class="user" required>
            </div>
            <div>
                <label for="">Username</label>
                <input type="text" name="username" class="user" required>
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="password" class="user" required>
            </div>
            <div>
            <label for="">Type</label>
                <select name="type" id=""class="user" >
                    <option value=""></option>
                    <option value="2">2</option>
                </select>
            </div>
            <br>
		    <div class="text-center">
                <button class="buttn" type="submit">Save</button>
		    </div>
        </form>
	</div>
</div>

<style>
	#uni_modal .modal-footer{
		display: none;
	}
    .user{
        width: 100%;
        border-radius: 5px;
        outline: none;
    }
    
</style>