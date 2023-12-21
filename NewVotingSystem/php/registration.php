<?php

    include 'db_connect.php'; 
    $name = $_POST['name'];
    $password = $_POST['pass'];
    $mobile_no = $_POST['mob'];
    $email = $_POST['email'];
    $cpass = $_POST['cpass'];
    // $image = $_FILES['image']['name'];
    // $tmp_name = $_FILES['image']['tmp_name'];
    
    if($cpass!=$password){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../Login/signUp.html";
            </script>';
    }
    else{
        // move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($con, "insert into user (Name, Mobile_number, Password,email) values ('$name', '$mobile_no', '$password', '$email');");

        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
?>