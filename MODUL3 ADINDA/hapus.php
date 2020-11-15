<?php 
include 'Config.php';
 

$id = $_GET['id'];

mysqli_query($conn,"delete from event_table where id='$id'");
 
header("location:home.php");
 
?>