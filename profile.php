<?php
include_once 'data.php';
$result = mysqli_query($conn,"SELECT * FROM user_info");
?>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body class = "amaka">
        <div class="container">
            <h2>Profile</h2>
            <table>
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
	
            <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	<th>
        <tr>
            <td><?php echo $row["first_name"]; ?></td>
            <td><?php echo $row["last_name"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $row["address"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $row["email"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $row["mobile"]; ?></td>
        </tr>
    </th>
            <?php
			$i++;
			}
			?>
</table>
<div>
    <button type = "submit" nane= "btn" href="update_profile.php">Upddate</button>
</div>
<div>
<a href="update_profile.php?id=<?php echo $row["id"]; ?>">Update</a>
</div>
<div>
<a href="index.php">Exit</a>
</div>
<?php
}
else
{
    echo "No result found";
}
?>
        </div>
    </body>
</html>
<style>
    .container{
            max-width: 400px;
            width: 100%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.03);
            margin: auto;
            background: white;
            padding: 10px;
            height: 500px;
            font-family: sans-serif;
    }
    .amaka{
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 100vh;
            background-color: skyblue;
            background:
    }
    .container h2{
        text-align: center;
    }
    ..container tr, td{
        margin-top: 0;

    }
</style>