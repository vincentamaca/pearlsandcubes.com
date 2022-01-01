<?php
include 'db_connect.php';
$sql = "DELETE FROM user_info WHERE user_id='" . $_GET["user_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("User has deleted !")';
    echo '</script>';
    header("Refresh:0; url=index.php?page=users");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>