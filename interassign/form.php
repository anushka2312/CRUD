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
    <div>
        <div class="text-center mt-5">
            <h1 class="heading">Basic CRUD Web application</h1>
        </div>
        <div class="formback text-center" style="margin-left:600px; width:300px;">
            <form onsubmit=" return validate()" action="user.php" method="post">
                <div class="form-group">
                    <div class="mt-5"> 
                      <div class="labelheading mt-3">  <label for="name">Name:</label></div>
                        <input class="form-control-sm"   type="text" id="name" name="name">
                        
                      <div>  <span class="errorMsg text-danger" id="errorMsg"></span></div>
                    </div>
                    <div class="mt-3">
                    <div class="labelheading">   <label for="surname">Surname:</label></div>
                        <input class="form-control-sm" type="text" id="surname" name="surname">
                      <div>  <span class="errorMsg text-danger" id="error1Msg"></span></div>
                    </div>
                    <div class="mt-3">
                    <div class="labelheading">   <label for="Phone">Contact No:</label></div>
                        <input class="form-control-sm" type="tel" id="contactNo" name="contactNo">
                    </div>
                    <div class="mt-3">
                    <div class="labelheading">   <label for="email">Email: </label></div>
                        <input class="form-control-sm" type="email" id="email" name="email">
                    </div>
                    <div class="mt-3">
                        <button class="mb-3 form-control-lg btn btn-outline-info" type="submit" value="add user">ADD USER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validate() {
            name = document.getElementById('name').value;
            surname = document.getElementById('surname').value;
            phone = document.getElementById('contactNo').value;
            email = document.getElementById('email').value;

            if (name.length == 0) {
                document.getElementById('errorMsg').innerHTML = 'username cannot be empty'
                return false;
            }
            if (surname.length == 0) {
                document.getElementById('error1Msg').innerHTML = 'usurname cannot be empty';
            }
            if (phone.length != 10) {
                alert("Mobile number should be of 10 digits")
                return false;
            }

            return true;

        }
    </script>

</body>

</html>