<?php

    include 'db_connect.php';
    //mysql_select_db("newvotingsystem",$con); 
    $bname = $_POST['bname'];
    $p1name = $_POST['panel1name'];
    $p2name = $_POST['panel2name'];
    $cfstartdate = $_POST['cf_startdate'];
    $cfenddate = $_POST['cf_enddate'];
    $eledate = $_POST['election_date'];

        //mysql_query("create table $newelection (bname varchar(200),panel1name varchar(50),panel2name varchar(50),cfstartdate date,cfenddate date,eledate date)");
        $sql = "INSERT into newelection (bname,p1,p2,cfstartdate,cfenddate,eledate) values ('$bname','$p1name','$p2name','$cfstartdate','$cfenddate','$eledate');";

       // $insert = mysqli_query($con,INSERT into newelection (bname,panel1name,panel2name,cfstartdate,cfenddate,eledate) values ('$bname','$p1name','$p2name','$cfstartdate','$cfenddate','$eledate'));

       //mysqli_query($con,$sql) or die("Lagliii");

       
        if(mysqli_query($con,$sql)){
            echo '<script>
                    alert("Election Declared Successfully!");
                    window.location = "../";
                </script>';
        }
        
        
?>