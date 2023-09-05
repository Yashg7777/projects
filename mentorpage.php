<!doctype html>
<html lang="en">
<?php 
$servername="localhost";
$username="root";
$password="";
$database="mentorproject";
$conn=mysqli_connect($servername,$username,$password,$database);


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
    <div class="container my-5">
        <div class="row">
            <?php
                
                            $sql="SELECT * FROM `studentl`";
                            $result=mysqli_query($conn,$sql);
                            
                    while( $row=mysqli_fetch_assoc($result))
                    {
                        $PRN=$row['username'];
                        $name=$row['name'];
                        $class=$row['class'];
                    echo' <div class="col-md-4 my-2">
                                <div class="card" style="width:18 rem;">
                                    <div class="card-body">
                                            <h5 class="card-title">Mentee Info</h5>
                                            <p class="card-text">Name:'.$name.'<br>
                                            PRN:  '.$PRN.'
                                            <br>Class: '.$class.'
                                            </p>
                                            <a href="Sprofile.php?PRN='.$PRN.'" class="card-link">See Details</a>
                                    </div>
                                </div>
                            </div>
                        ';
                
                        }      
            ?>
        </div>
        <div class="rows">
            <div class="col text-center my-5">
                <a href='Add_Student.php'><button class="btn btn-primary">Add New Student</button></a>

            </div>

            <!-- <div class="col-sm-4 card"></div> -->

        </div>
    </div>
    <footer class="bg-dark text-center text-white page-footer center-on-small-only pt-0 mt-5 ">
        <!-- Grid container -->

        <div class="text-center p-3 my-2" style="background-color: rgba(0, 0, 0, 0.2);">
            @Sanjivani,All Rights Resolved
        </div>
        <!-- Copyright -->
    </footer>


</body>

</html>