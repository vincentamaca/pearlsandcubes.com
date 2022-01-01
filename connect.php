<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "pearlsandcubes";
$conn = mysqli_connect($host, $user, $password, $database);

$result = $conn->query("SELECT * FROM order_list");

?>
<?php while ($data = $result->fetch_assoc()): ?>

    <tr>
        <td><?php echo $data['order_id']?></td>
        <td><?php echo $data['product_id']?></td>
        <td><?php echo $data['qty']?></td>
        <td><?php echo $data['payment']?></td>
    </tr>
<?php endwhile; ?>
