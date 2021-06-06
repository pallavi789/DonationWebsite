<?php

$email=$_POST['email'];
$password=$_POST['password'];

$con=new mysqli("localhost","root","","loginform");
if($con->connect_error) {
    die("failed : ".$con->connect_error);
}
?>


