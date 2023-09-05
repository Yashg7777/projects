<?php
$con = mysqli_connect("localhost", "root", "", "mentorproject");
    if (isset($_POST['submit'])) {
 
        
        $id=$_POST['id'];
        $date=$_POST['date'];
        $post_date=date('d-m-y');
        if (isset($_FILES['pdf_file']['name']))
        {
          $file_name = $_FILES['pdf_file']['name'];
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./image/".$file_name);
 
          $insertquery =
          "INSERT INTO image (filename,`id`,`date`,`post_date`) VALUES('$file_name','$id','$date','$post_date')";
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
<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #content {
        width: 50%;
        justify-content: center;
        align-items: center;
        margin: 20px auto;
        border: 1px solid #cbcbcb;
    }

    form {
        width: 50%;
        margin: 20px auto;
    }

    #display-image {
        width: 100%;
        justify-content: center;
        padding: 5px;
        margin: 15px;
    }

    img {
        margin: 5px;
        width: 350px;
        height: 250px;
    }

    body {
        background-color: brown;
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
                    <a class="nav-link active" aria-current="page" href="submission.php">Submitions</a>
                </li>
            </ul>

            <div class=" my-2 my-lg-0">
                <ul class="nav nav-pills">
                   
                    <li class="nav-item mx-4">
                        <a class="nav-link active " aria-current="page" href="app/login.php">Chats</a>
                    </li>

                </ul>

            </div>
    </nav>
    <div class="container my-5">
        <div class="card text-center">
            <div class="card-header bg-success text-light">
                <h3>New Assignment</h3>
            </div>
<form method="post" enctype="multipart/form-data">
    <div class="form-input py-2">
    <div class="my-2">
                <h4><label for="fname">Assignment Id</label></h4>
                <input type="text" id="id" name="id">
            </div>
			<div class="my-2">
                <h4><label for="fname">Assignment Due Date</label></h4>
                <input type="text" id="date" name="date">
            </div>
            <div class="card-body my-2">
                <h4 class="card-title">Add Photo</h4>
                <div id="content">
                                                    
        <div class="form-group">
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/>
        </div>
        <div class="form-group">
        <button class="btn btn-primary" type="submit" name="submit">Post Assignment</button>
          
        </div>
   </div>
</form>
</body>
</html>
