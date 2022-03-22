<?php

    // include 'connect.php';

    // Error messages
    $firstNameErr = "";
    $lastNameErr = "";
    $emailErr = "";
    $mobileErr = "";
    $passwordErr = "";

    if (isset($_POST['submit'])) {
        // Set form variables
        $firstName = test_input($_POST['firstName']);
        $lastName = test_input($_POST['lastName']);
        $email = test_input($_POST['email']);
        $mobile = test_input($_POST['mobile']);
        $password = test_input($_POST['password']);

        // First Name validation
        if (empty($firstName)) {
            $firstNameErr = '<span class="error">First Name cannot be left blank!!!</span>';
        } elseif(!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
            // check if name only contains letters and whitespace
            $firstNameErr = '<br><span class="error">Only letters and white space allowed!!!</span>';
        } else {
            echo $firstName . '<br>';
        }

        // Last Name validation
        // if ($lastName == "") {
        if (empty($lastName)) {
            $lastNameErr = '<span class="error">Last Name cannot be left blank!!!</span>';
        } elseif(!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
            // $lastName = test_input($lastName);
            // check if name only contains letters and whitespace
            $lastNameErr = '<span class="error">Only letters and white space allowed!!!</span>';
        } else {
            echo $lastName . '<br>';
        }

        // Email Validation
        if (empty($email)) {
            $emailErr = '<span class="error">Email cannot be left blank!!!</span>';
        } // Email Format validation
        else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            // $email = test_input($email);
            $emailErr = '<span class="error">Email format is not valid!!!</span>';
        } else {
            echo $email . '<br>';
        }

        // Mobile Validation
        if (empty($mobile)) {
            $mobileErr = '<span class="error">Mobile number cannot be left blank!!!</span>';
        } else if(!is_numeric($mobile)) {
            // $mobile = test_input($mobile);
            // check if mobile only contains numbers
            echo '<span class="error">Only Mobile Number!!!</span>';
        } else if(strlen($mobile) < 10) {
            // check length <10 digit then error >10 digit then error
            echo '<span class="error">Please Enter proper Mobile Number Here!!!</span>';
        } else if(strlen($mobile) > 10) {
            echo '<span class="error">Your Mobile Number is too Large. Please enter valid number...</span>';
        } else if(!preg_match("/^[6-9]\d{9}$/", $mobile)) {
            $mobileErr = '<span class="error">Invalid Mobile Number!!!</span>';
        } else {
            echo $mobile . '<br>';
        }

        // Password Validation
        if (empty($password)) {
            $passwordErr = '<span class="error">Password cannot be left blank!!!</span>';
        } else {
            // $password = test_input($password);
            echo $password . '<br>';
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>