

<?php


$conn = new mysqli('localhost','root','','assignuser');

if($conn->connect_error)
{
    echo"connection error";
    die;
}
else
{
    echo "success";
}

$name=$_POST['name'];
$surname=$_POST['surname'];
$phone=$_POST['contactNo'];
$email=$_POST['email'];

$cmd = "insert into usertable(Name, Surname, Phone, Email) values('$name','$surname','$phone', '$email')";

$sql_request= mysqli_query($conn, $cmd);

if($sql_request)
{
    echo "<h2> success</h2>";
    header('location:index.php');

}



?>