<?php
$conn=new mysqli('localhost','root','');
if($conn->connect_error)
{
    die("Connection Failed:".$conn->connect_error);
}
$sql="CREATE DATABASE Hotel";
if($conn->query($sql)===TRUE)
{
    echo "Database Created Successfully";
}
else
{
    echo "Error creating database: ".$conn->error;
}
?>