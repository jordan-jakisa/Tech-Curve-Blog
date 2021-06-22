<?php 
session_start();
//connect to database
$conn = mysqli_connect("localhost", "root", "", "je_blog");

if (!$conn){
	die("Error connecting to database: ". mysqli_connect_error());
}

define('ROOT_PATH', '/storage/ssd3/104/16044104/public_html');

define('BASE_URL', 'https://jordanempire.000webhostapp.com/'); 
?>