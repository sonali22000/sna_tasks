<?php
$servername = "db";
$username= "capp1";
$password = "Dhana@sona9830";
$dbname = "capp1";
// creating connection

$conn=new mysqli ($servername,$username,$password,$dbname);

// check the connection
if ($conn->connect_error){
die("conncetion failed:" . $conn->connect_error);


}
?>