<?php
session_start();
$servername="localhost";
$password="";
$username="root";
$database="imfo";
$PRN=$_SESSION['login_user'];
echo$PRN;
$conn=mysqli_connect($servername,$username,$password,$database);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['name'];
    $number=$_POST['no'];
    $addr=$_POST['addr'];
    $email=$_POST['email'];
    $linkedin=$_POST['lpl'];
    $git=$_POST['git'];
    $gfg=$_POST['gfg'];
    $hackerrank=$_POST['hrk'];
    $sql="update `student_imfo`SET name='$name',address='$addr',git='$git',linkeddin='$linkedin',
    gfg='$gfg',email='$email',hackerrank='$hackerrank',phon='$number' WHERE prn='$PRN'";

               
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo"yes";
    }
    else{
        echo"fail";
    }
}
?>
<!doctype html>
<html lang="en">

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
        background-color: aqua;
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
                    <a class="nav-link active " aria-current="page" href="Profile.php">Profile</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="UpdateP.php">Update Profile</a>
                </li>
            </ul>
            
    </nav>
    
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold"></span><span
                        class="text-black-50"></span><span> </span></div>
            </div>
            <form action="/PBLP/Updatep.php" method="post">
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Full Name</label><input type="text"
                                    class="form-control" placeholder="Full Name" name="name" id="name" value=""></div>
                           

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                    class="form-control" name="no" id="no" placeholder="enter phone number" value="">
                            </div>

                            <div class="col-md-12"><label class="labels">Address </label><input type="text"
                                    class="form-control" name="addr" id="addr" placeholder="enter Your Address"
                                    value=""></div>

                            <div class="col-md-12"><label class="labels">Email Id</label><input type="text"
                                    class="form-control" name="email" id="email" placeholder="enter email id" value="">
                            </div>

                            <div class="col-md-12"><label class="labels">Linkeddin Profile Link</label><input
                                    type="text" name="lpl" id="lpl" class="form-control"
                                    placeholder="linkedin Profile Link" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">GitHub</label><input type="text"
                                    class="form-control" name="git" id="git" placeholder="GitHub Profile Link" value="">
                            </div>

                            <div class="col-md-12"><label class="labels">Hackerank</label><input type="text"
                                    class="form-control" name="hrk" id="hrk" value=""
                                    placeholder="Hackerrank Profile Link"></div>

                            <div class="col-md-12"><label class="labels">GFG</label><input type="text"
                                    class="form-control" name="gfg" id="gfg" value="" placeholder="GFG Profile Link">
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"
                                name="save">Save
                                Changes</button></div>
                    </div>
            </form>
        </div>

        

    </div>
    </div>
    </div>
    </div>
</body>

</html>