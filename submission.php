<!doctype html>
<html lang="en">
<?php 
$servername="localhost";
$username="root";
$password="";
$database="grade";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="select * from submit";
$result=mysqli_query($conn,$sql);
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    body {
        background-color: rgb(235, 166, 166);
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="PHome.php">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link active " aria-current="page" href="MProfile.php">Profile</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="mentorpage.php">Mentees</a>
                </li>
            </ul>

            <div class=" my-2 my-lg-0">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="app/login.php">Chats</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link active " aria-current="page" href="Assign.php">Assignment</a>
                    </li>

                </ul>

            </div>
    </nav>

    <body>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            $prn=$row['prn'];
     echo'
        <div class="container my-5">
        <table class="table table-dark">             
                            
                            
                <thead>
                    <tr>
                    <th scope="col">Submission Id</th>
                    <th scope="col">PRN</th>
                    <th scope="col">Submission Date</th>
                    <th scope="col">View Submission</th>
                    <th scope="col">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">'.$row['id'].'</th>
                    <td>'.$row['prn'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>view</td>
                    <form action="/PBLP/grade.php?prn='.$prn.'" method="post">
                    <td>    
                    <a href="grade.php?prn='.$row['prn'].'">Grade Here</a></td>
                    </tr>
                    </body>
                </tbody>
            </table>
   </div>';
        }
    ?>



    </body>

</html>