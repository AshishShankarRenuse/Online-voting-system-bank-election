<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
 
</head>
<body>
 
    <div class="main-div">
        <h1>List of Candidate</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table border = 1>
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>No of Shares</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Aadhar No</th>
                                <th>Email ID</th>
                                <th>Mo Number</th>
                                <th>Address</th>
                                <th>Panel</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
 
                                include 'db_connect.php';
 
                                $selectquery=" select * from creg";
 
                                $query = mysqli_query($con,$selectquery);
 
                                $nums = mysqli_num_rows($query);
                                while($res = mysqli_fetch_array($query))
                                {
 
                                ?>
                                <tr>
                                <td><?php echo $res['id'];  ?></td>
                                <td><?php echo $res['fname'];  ?></td>
                                <td><?php echo $res['shares'];  ?></td>
                                <td><?php echo $res['dateofbirth'];  ?></td>
                                <td><?php echo $res['gender'];  ?></td>
                                <td><?php echo $res['anumber'];  ?></td>
                                <td><?php echo $res['email'];  ?></td>
                                <td><?php echo $res['number'];  ?></td>
                                <td><?php echo $res['address'];  ?></td>
                                <td><?php echo $res['panel'];  ?></td>
                                <td><a href="delete.php?num=<?php echo $res['id'];?>">Delete</td>
                            </tr>
                            <?php
                                }
                           ?>
                        </tbody>
                </table>
 
            </div>
 
        </div>
    </div>
</body>
</html>