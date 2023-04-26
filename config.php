<?php 

session_start();
//$conn = mysql_connect("localhost","root","", "WA");

$conn = new PDO('mysql:dbname=WA;host=127.0.0.1;charset=utf8mb4', 'root', '');

$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




?>