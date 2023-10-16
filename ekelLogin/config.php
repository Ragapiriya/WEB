<?php
$conn = mysqli_connect("localhost","root","","ekelusers");

if(!$conn)
{
    die("Connection failed babe".mysqli_connect_error());
}

?>