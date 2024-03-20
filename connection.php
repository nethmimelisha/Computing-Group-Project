<?php

error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="immunifylanka";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
//echo "connected";
}
else{
    echo"connection fail". mysqli_connect_error();
    
}
?>