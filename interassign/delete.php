<?php

$SID=$_GET['SID'];

$conn = new mysqli('localhost','root','','assignuser');

if($conn->connect_error)
{
    echo"connection error";
    die;
}

$cmd="delete from usertable where SID='$SID'";

$sql_status = mysqli_query($conn, $cmd);

if($sql_status)
{
    header('location:index.php');

}
else
{
    echo"<h1>Something went wrong";
}


?>