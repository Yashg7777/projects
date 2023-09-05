<!doctype html>
<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "mentorproject");
if (isset($_POST['upload'])) {
 
        
    $id=$_POST['id'];
    
    $PRN=$_SESSION['login_user'];
       $date= date("Y-m-d");
       $time=date("H:m");
       $datetime=$date."T".$time;
    if (isset($_FILES['pdf_file']['name']))
    {
      $file_name = $_FILES['pdf_file']['name'];
      $file_tmp = $_FILES['pdf_file']['tmp_name'];
   
      move_uploaded_file($file_tmp,"./assignment/".$file_name);
   
      $insertquery =
      "INSERT INTO submit (`prn`,`date`,`id`,`filename`) VALUES('$PRN','$date','$id','$file_name')";
      $iquery = mysqli_query($con, $insertquery);
    }
    else
    {
       ?>
        <div class=
        "alert alert-danger alert-dismissible
        fade show text-center">
          <a class="close" data-dismiss="alert"
             aria-label="close">×</a>
          <strong>Failed!</strong>
              File must be uploaded in PDF format!
        </div>
      <?php
    }
   }
   ?>
   
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
        background-color: burlywood;
   }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-danger" id="headerNav">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-lg-none" href="#">
                <img src="/static_files/images/logos/logo_2_white.png" height="80" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="logout.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="Profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="About.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="Contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Assignment Id</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">View Assignment</th>
                    <th scope="col">Submit Assignment</th>
                </tr>
            </thead>
            <tbody>
                <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="mentorproject";
    $conn=mysqli_connect($servername,$username,$password,$database);
    $sql="select * from image";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
       $id=$row['id'];
       $date=$row['date'];
    
    echo'
    <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$date.'</td>
      <td><a href="view_assignment.php?id='.$id.'">view</a></td>
 
      <td>
      <form method="POST" action="new_assignment.php?'.$id.'" enctype="multipart/form-data">
      <div class="form-group">
      <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
     
      <div class="my-3">
      <input name="id" id="id" type="text" class="form__field" placeholder="Enter Submission id" />
      </div>
  </div>
  <div class="form-group">
  <button class="btn btn-primary" type="submit" name="upload">Submit Assignment</button>
                </div>
                </form>
                </td>
    </tr>
    ';
    
    }
    ?>
            </tbody>

        </table>
    </div>
</body>
</html>