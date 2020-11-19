<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad_modul3_adinda";


$conn =  mysql_connect($dbhost, $dbuser, $dbpass, $dbname,3306);

if(!$conn){
    echo "<script> 
    alert ('Failed Connect into Database'); 
    </script>;";
}
?>