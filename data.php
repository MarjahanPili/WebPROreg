<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */

require 'database.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$c_password=$_POST['c_pass'];

if($c_password==$password)
{
	$statement="insert into resister(name,email,password) values ('$name','$email','$password')";
}
else
{
	echo "Pass Do not match";
}

if(mysqli_query($conn,$statement))
{
    header('location:Registration.php');
}
else
    mysqli_error($conn);

mysqli_close($conn);