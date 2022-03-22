<?php
include 'connect.php';

// Form Validation Script
// include 'form_validation.php';

$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$firstName = $row['firstName'];
$lastName = $row['lastName'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

// define variables and set to empty values
$firstNameErr = $lastNameErr = $emailErr = $mobileErr = $passwordErr = '';
// $firstName = $lastName = $email = $mobile = $password = '';

if (isset($_POST['submit'])) {
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $email = test_input($_POST['email']);
    $mobile = test_input($_POST['mobile']);
    $password = test_input($_POST['password']);

    // Form Validation Script

    // First name validation
    if (empty($firstName)) {
        $firstNameErr = "First Name is required";
    } else {
      if (strlen($firstName ) < 2) {
          $firstNameErr = "First name must be minimum 2 characters in length";
      }
  
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
            $firstNameErr = "Only letters and white space allowed";
        }
    }
  
    // Last name validation
    if (empty($lastName)) {
        $lastNameErr = "Last Name is required";
    } else {
      if (strlen($lastName) < 2) {
        $firstNameErr = "First name must be minimum 2 characters in length";
      }
  
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
        $lastNameErr = "Only letters and white space allowed";
      }
    }
        
    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
  
    // Mobile Validation
    if (empty($mobile)) {
        $mobileErr = 'Mobile number cannot be left blank!!!';
    } else if(!is_numeric($mobile)) {
        // $mobile = test_input($mobile);
        // check if mobile only contains numbers
        echo 'Only Mobile Number!!!';
    } else if(strlen($mobile) < 10) {
        // check length <10 digit then error >10 digit then error
        echo 'Please Enter proper Mobile Number Here!!!';
    } else if(strlen($mobile) > 10) {
        echo 'Your Mobile Number is too Large. Please enter valid number...';
    } else if(!preg_match("/^[6-9]\d{9}$/", $mobile)) {
        $mobileErr = 'Invalid Mobile Number!!!';
    }
  
    // Password Validation
    if (empty($password)) {
        $passwordErr = 'Password cannot be left blank!!!';
    } elseif (strlen($password ) < 8) {
        $passwordErr = "Password must be 8 characters in length!!!";
    }

    if ($firstNameErr == "" && $lastNameErr == "" && $emailErr == "" && $mobileErr == "" && $passwordErr == "") {
        $sql = "update `crud` 
        set id=$id, firstName='$firstName', lastName='$lastName', email='$email', mobile='$mobile', password='$password'
        where id=$id";
        $result = mysqli_query($con, $sql);
        if($result) {
            // echo "Updated successfully";
            header('location:index.php');
        } else {
            die(mysqli_error($con));
        }
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

    <!-- CSS Styles -->
    <style>
    .error {color: #FF0000;}
    </style>

    <!-- jQuery Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Crud Operation</title>
  </head>
  <body>

    <?php
    
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
    ?>

      <div class="container my-5" >
        <h1><b><center>Update User Details</center></b></h1>
        <p><span class="error">* required field</span></p>
        <form method="post">
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter your first name" 
                name="firstName" autocomplete="off" 
                value=<?php echo $firstName; ?> required="required">
                <span class="error">* <?php echo $firstNameErr; ?></span>
                <br><br>
            </div>
            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your last name" 
                name="lastName" autocomplete="off" 
                value=<?php echo $lastName; ?> required="required">
                <span class="error">* <?php echo $lastNameErr; ?></span>
                <br><br>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" 
                name="email" autocomplete="off" 
                value=<?php echo $email; ?> required="required">
                <span class="error">* <?php echo $emailErr; ?></span>
                <br><br>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" 
                name="mobile" autocomplete="off" required="required"
                value=<?php echo $mobile; ?> maxlength="10">
                <span class="error">* <?php echo $mobileErr; ?></span>
                <br><br>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" 
                name="password" autocomplete="off" 
                value=<?php echo $password; ?> required="required">
                <span class="error">* <?php echo $passwordErr; ?></span>
                <br><br>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button type="submit" class="btn btn-info" name="submit">Back</button>
        </form>
      </div>

    
  </body>
</html>