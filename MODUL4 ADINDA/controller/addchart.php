
<?php 
session_start();
include("connection.php");
$id = $_SESSION['id'];
$name = $_GET['name'];
$harga = $_GET['harga'];

$insert = "INSERT INTO `cart`(`id`, `user_id`, `nama_barang`, `harga`)
    VALUES ('','$id','$name','$harga')";



$query = mysqli_query($db, $insert);
if ($query > 0) {
    header('location: ../index.php?status=success');
} else {
    header('location: ../index.php?status=failed');
}

?>