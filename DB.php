<?php
//DB connect
$servername ='localhost';
$username ='root';
$password ='';
$dbname ='ezana';

$connect=mysqli_connect('localhost','root','','ezana');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>