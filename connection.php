<?php
$con=mysqli_connect("localhost","root","");
//check connection
if(mysqli_connect_errno())
{
    echo "Failed to connect to Mysql :" .mysqli_connect_error();
}
//create database
$sql="CREATE DATABASE yoyo";
if(mysqli_query($con,$sql)) //
{
    echo "Database yoyo created successfully";
}
else
{
    echo "Error creating database: ".mysqli_error($con);
}
?>
