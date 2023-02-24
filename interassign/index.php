<style><?php include 'C:/xampp/htdocs/interassign/c.css'; ?></style>


<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
</head>
    </head>

<body>
<div class="text-center mt-5">
    <h1 class='heading'>CRUD OPERATION</h1>
</div>

<?php

$conn = new mysqli('localhost','root','','assignuser');

if($conn->connect_error)
{
    echo"connection error";
    die;
}

$mysqli_obj = mysqli_query($conn, "select * from usertable");

echo"
<div class='mt-5 justify-content-left'>
<table border=1 class='table table-dark' style='width:70%; margin-left: 200px;'>
    <thead>
        <tr>
            <th scope='col' class='ps-4 pe-4'>Sr no</th>
            <th class='pe-4'>Name</th>
            <th class='ps-4'>Surname</th>
            <th class='pe-5'>Phone</th>
            <th class='px-5'>Email</th>
            <th style='margin-left:25px;'>Action</th>
            
        </tr>
    </thead>
</table>
</div>
";


while($row=mysqli_fetch_assoc($mysqli_obj))
{
    $SID=$row['SID'];
    $name = $row['Name'];
    $surname = $row['Surname'];
    $phone = $row['Phone'];
    $email = $row['Email'];







    echo"

    <div class='justify-content-left'>
        <table border=1 class='table table-stripped' style='width:70%; margin-left:200px;'>
             <tbody>
             <div>
                <div>
                <tr>
                    <td class='px-5'>$SID</td>
                    <td class='px-5'>$name</td>
                    <td class='px-5'>$surname</td>
                    <td class='px-5'>$phone</td>
                    <td class='px-5'>$email</td>
                </div>
                    <td>
                    <div>
                        <a href='edit.php?SID=$SID'><button class='btn p-1 btn-info'><i class='fa fa-edit'></i></button></a>
                        <a href='delete.php?SID=$SID'><button class='btn p-1 btn-danger'><i class='fa fa-trash'></i></button</a>
                    </div>
                    </td>
                
                 </tr>

              </div>  
            </tbody>
        </table>
    </div>
    ";
    





}

?>

<div class="text-end" style="margin-right:17%;">
        
    <button class="btn btn-outline-primary" 
    onclick="window.location.href ='form.php'">
        ADD USER
    </button>
</div>


</body>
</html>




