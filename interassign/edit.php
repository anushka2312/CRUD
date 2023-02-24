<style>
    <?php include 'C:/xampp/htdocs/interassign/c.css'; ?>
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />



</head>

<body>

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


$name=$row['Name'];
$surname = $row['Surname'];
$phone = $row['Phone'];
$email = $row['Email'];


echo"
<div>
        <div class='text-center mt-5'>
            <h1 class='heading'> EDIT YOUR RESPONSE</h1>
        </div>
        <div class='formback text-center' style='margin-left:600px; width:300px;'>
            <form  action='editing.php' method='post'>
                <div class='form-group'>
                    <div class='mt-5'> 
                      <div class='labelheading mt-3'>  <label for='name'>Name:</label></div>
                        <input value='$name' class='form-control-sm'   type='text' id='name' name='name'>
                        
                     
                    </div>
                    <div class='mt-3'>
                    <div class='labelheading'>   <label for='surname'>Surname:</label></div>
                        <input value='$surname' class='form-control-sm' type='text' id='surname' name='surname'>
                      
                    </div>
                    <div class='mt-3'>
                    <div class='labelheading'>   <label for='Phone'>Contact No:</label></div>
                        <input value='$phone' class='form-control-sm' type='tel' id='contactNo' name='contactNo'>
                    </div>
                    <div class='mt-3'>
                    <div class='labelheading'>   <label for='email'>Email: </label></div>
                        <input value='$email' class='form-control-sm' type='email id='email' name='email'>
                    </div>
                    <div class='mt-3'>
                        <button class='mb-3 form-control-lg btn btn-outline-info' type='submit' value='Edit'>EDIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





    
        
       
      



"

?>
</body>

</html>
