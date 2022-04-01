<?php

// debugger mode
ini_set("display_errors", 1);
error_reporting(E_ERROR);

// required headers
// header("Access-Control-Allow-Origin: http://localhost:9999/rest-api-authentication/");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files needed to connect to database
include_once('config/database.php');
include_once('objects/user.php');
// include_once('logging.php');

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate user object
$user = new User($db);
// print_r($user);

    // get posted data
    $data = json_decode(file_get_contents("php://input", true));

    // set user property values
    $user->firstname = $data->firstname;
    $user->lastname = $data->lastname;
    $user->email = $data->email;
    $user->password = $data->password;
    // print_r($user->password);
    print_r($user->create());

    // create the user
    // if (
    //     !empty($data->firstname) &&
    //     !empty($data->email) &&
    //     !empty($data->password) &&
    //     $user->create()
    // ) {
        // if (!empty($user->firstname) && !empty($user->email) && !empty($user->password) && $user->create()) 
        // {
        if ($user->create()) {
            
            // set response code
            http_response_code(200);
        
            // display message: user was created
            echo json_encode(array("message" => "User was created."));
        // }
        }

        // message if unable to create user
        else {
        
            // set response code
            http_response_code(400);
            
            // display message: unable to create user
            echo json_encode(array("message" => "Unable to create user."));
        }
    // }
?>
