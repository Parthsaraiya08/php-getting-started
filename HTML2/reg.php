<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Create Registration form with MySQL and PHP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class='container'>
      <div class='row'>

        <div class='col-md-6' >

          <form method='post' action=''>

            <h1>SignUp</h1>
            <?php 
            // Display Error message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

            <?php 
            // Display Success message
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>
            <?php 
$error_message = "";$success_message = "";

// Register user
if(isset($_POST['btnsignup'])){
   $FName = trim($_POST['FName']);
   $LName = trim($_POST['LName']);
   $Email = trim($_POST['Email']);
   $HomeAddress = trim($_POST['Home Address']);
   $HomePhone = trim($_POST['Home Phone']);
   $CellPhone = trim($_POST['Cell Phone']);

   $isValid = true;

   // Check fields are empty or not
   if($FirstName == '' || $LastName == '' || $Email == '' || $HomeAddress == '' || $HomePhone == '' || $CellPhone == ''){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }
    }
    $msg = '';
    if (isset($_POST['register']) && !empty($_POST['username'])
        && !empty($_POST['password'])) {
        if ($_POST['password'] == $_POST['cpassword']) {
            $FName = $_POST['First Name'];
                $LName = $_POST['Last Name'];
                    $Email = $_POST['Email'];
                        $HomeAddress = $_POST['Home Address'];
                            $HomePhone = $_POST['Home Phone'];
                            $CellPhone = $_POST['Cell Phone'];
                        

                $conn = new mysqli('localhost', 'root', '', 'parth_db');
            $con = mysqli_connect('localhost', 'root', '', 'parth_db') or die('Unable To connect');
            $sql = "INSERT INTO users (FirstName, LastName, Email,HomeAddress,HomePhone,CellPhone) VALUES ('$FirstName', '$LastName', '$Email', '$HomeAddress', '$HomePhone', '$CellPhone')";
            if (mysqli_query($con, $sql)) {
                $msg = 'Registration successfully';
            } else {
                $msg = 'Username already exists';
                }
                mysqli_close($con);
            } else {
            $msg = 'Password does not match';
        }
    }
        ?>


            <div class="form-group">
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" name="First Name" id="First Name" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" name="Last Name" id="Last Name" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="Email" id="Email" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="text">Home Address</label>
              <input type="text" class="form-control" name="Home Address" id="Home Address" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="text">Home Phone</label>
              <input type="text" class="form-control" name="Home Phone" id="Home Phone" onkeyup='' required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="text">Cell Phone</label>
              <input type="text" class="form-control" name="Cell Phone" id="Cell Phone" onkeyup='' required="required" maxlength="80">
            <button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
          </form>
        </div>

     </div>
    </div>
  </body>
</html>