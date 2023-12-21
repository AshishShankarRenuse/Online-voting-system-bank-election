<?php

    include 'db_connect.php';
    session_start();    

    $name = $_POST['username'];
    $pass = $_POST['pass'];


    $sql = "SELECT * FROM `user` WHERE `Name`='$name' AND `Password` = '$pass'";
    $res = mysqli_query($con,$sql);
    $num = mysqli_num_rows($res);
    if($num != 0){
        if($name == 'admin'){
            header('Location: http://localhost/php2/NewVotingSystem/Login/superadmin.html');
        }else{
            $_SESSION["Name"] = $name;
            header('Location: http://localhost/php2/NewVotingSystem/php/session.php');
        }
    }else{
        echo '<script>
        alert("Login Failed!");
        window.location = "../";
    </script>';
    }

    mysqli_close($con);

?>