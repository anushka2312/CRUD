<?php

$conn = new mysqli('localhost','root','','assignuser');

if($conn->connect_error)
{
    echo"connection error";
    die;
}

if(isset($_GET['SID']))
{
    $SID = $_GET['SID'];

}

$mysql_obj = mysqli_query($conn,"select *from usertable where SID='$SID'");

$row=mysqli_fetch_assoc($mysql_obj);


$name=$_POST['name'];
$surname=$_POST['surname'];
$phone=$_POST['contactNo'];
$email=$_POST['email'];




$cmd1 = "update usertable set Name='$name', Surname='$surname', Phone='$phone', Email='$email' where SID='$SID'";

$update=mysqli_query($conn,$cmd1);
if($update)
{

    header("location:index.php");
}
else
{
    echo"Something went wrong";
}

?>