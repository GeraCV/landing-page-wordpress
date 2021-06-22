<?php 

$host = 'localhost' ;
$user = 'root' ;
$password = '' ;
$database = 'landing_p' ;
$db = mysqli_connect($host, $user, $password, $database);

mysqli_query($db, "SET NAME utf-8 ");
 
?>