

<?php 
session_start();
include("connection.php");
$id = $_GET['id'];

$delete = "DELETE FROM `cart` WHERE `id`='$id'";


$query = mysqli_query($db, $delete);

if ($query > 0) {
    header('location: ../cart.php?status=success');
} else {
    header('location: ../cart.php?status=failed');
}

?>