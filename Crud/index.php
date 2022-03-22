<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>

    <!-- jQuery Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        .removeLink {
            text-decoration: none;
        }
    </style>

    <style>
        .removeRow {
            background-color: #FF0000;
            color: #FFFFFF;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('delete_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $(this).closest('tr').addClass('removeRow');
                } else {
                    $(this).closest('tr').removeClass('removeRow');
                }
            });

            $('#delete_all').click(function() {
                var checkbox = $('.delete_chceckbox:checked');
                if (checkbox.length > 0) {
                    var checkbox_value = [];
                    $(checkbox).each(function() {
                        checkbox_value.push($(this).val());
                    });

                    $.ajax({
                        url:"delete.php",
                        method:"POST",
                        data:{checkbox_value:checkbox_value},
                        success:function() {
                            $('.remove').fadeOut(1500);
                        }
                    });

                } else {
                    alert("Select atleast one records");
                }
            });

        });

        // function toggleCheckbox(box) {
        //     var id = $(box).attr("value");
        //     if ($(box).prop("checked")) {
        //         var visible = 1;
        //     } else {
        //         var visible = 0;
        //     }

        //     var data = {
        //         "search_data": 1,
        //         "id": id,
        //         "visible": visible
        //     };

        //     $.ajax({
        //         type: "post",
        //         url: "delete.php",
        //         data: data,
        //         success: function (response) {
                    
        //         }
        //     });
        // }
    </script>

</head>
<body>

<div class="container">
    <h1><center><b>User Dashboard</b></center></h1>
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light removeLink">Add User</a>
    </button>
    <!-- Multi Delete Button with PHP Ajax Animated Effect -->
    <button type="submit" form="my-form" name="delete_all" id="delete_all" class="btn btn-danger my-5">
        Delete User
    </button>
    <button type="submit" name="login" id="login" class="btn btn-warning my-5 float-end">
        <a href="login-user.php" class="removeLink">Login</a>
    </button>
    <button type="submit" name="login" id="signup" class="btn btn-info my-5 float-end mr-2">
        <a href="signup-user.php" class="removeLink">Signup</a>
    </button>

    <table class="table table-bordered table-striped table-responsive">
        <thead>
            <tr>
            <th scope="col">Sl no</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
            <th scope="col">Check</th>
            </tr>
        </thead>
        <form action="delete.php" id="my-form" method="post">
        <tbody>

        <?php

        $limit = 5;
        
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $offset = ($page - 1) * $limit;

        $sql = "select * from `crud` LIMIT {$offset}, {$limit}";
        $result = mysqli_query ($con, $sql);
        if ($result) {
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $password = $row['password'];
                echo '<tr>
                <th scope="row">' . $i++ . '</th>
                <td>' . $firstName . '</td>
                <td>' . $lastName . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $password . '</td>
                <td>
                    <button class="btn btn-success">
                    <a href="update.php?updateid=' . $id . '" class="text-light removeLink">Update</a>
                    </button>
                    <button class="btn btn-danger">
                    <a href="delete.php?deleteid=' . $id . '" class="text-light removeLink">Delete</a>
                    </button>
                </td>
                <td>
                    <input type="checkbox" name="check_list[]" class="delete_checkbox" value="'.$row["id"].'" />
                </td>
                </tr>';
            }
        }
        
        ?>

            
        </tbody>
    </table>

    <?php
    
    $sql1 = "SELECT * FROM crudoperations.crud";
    $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

    if (mysqli_num_rows($result1) > 0) {
        $total_records = mysqli_num_rows($result1);
        
        $total_page = ceil($total_records / $limit);

        echo '<ul class="pagination">';
        if ($page > 1) {
            echo '<li class="page-item"><a href="index.php?page='.($page - 1).'" class="page-link">Prev</a></li>';
        }
        
        for ($i=1; $i < $total_page; $i++) { 
            if ($i == $page) {
                $active = "active";
            } else {
                $active = "";
            }

            echo '<li class="'.$active.' page-item"><a href="index.php?page='.$i.'" class="page-link">'.$i.'</a></li>';
        }
        if ($total_page > $page) {
            echo '<li class="page-item"><a href="index.php?page='.($page + 1).'" class="page-link">Next</a></li>';
        }
        
        echo '</ul>';
    }
    
    ?>

</div>

</body>
</html>
