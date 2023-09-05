<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
$db = mysqli_connect("localhost", "root", "", "project");
$id=$_POST['id'];
$date=$_POST['date'];
if (isset($_POST['upload'])) {
    
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename,`id`,`date`) VALUES ('$filename','$id','$date')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Assign.php">New Assignment</a>
                    </li>
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
			<form method="POST" action="" enctype="multipart/form-data">
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
        <button class="btn btn-primary" type="submit" name="upload">Post Assignment</button>
        </div>
                </form>
               
            </div>

        </div>
    </div>


</body>

</html>