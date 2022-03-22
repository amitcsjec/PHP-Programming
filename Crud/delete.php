<?php

include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Deleted Successfully";
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}

foreach($_POST['check_list'] as $dataID) {
    $sql = "DELETE from `crud` where id=$dataID";
    $query = mysqli_query($con, $sql);
}

if ($query) {
    header('location:index.php');
} else {
    echo "Error";
}

?>