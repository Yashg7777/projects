<!doctype html>
<html lang="en">
<?php 
$servername="localhost";
$username="root";
$password="";
$database="mentorproject";
$conn=mysqli_connect($servername,$username,$password,$database);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
    $select=$_POST["select"];
    $username=$_POST["Email"];
    $password=$_POST["pass"];
        if($select=='Admin')
        {
            session_start();
            $sql="select * from adminl where username='$username' AND password='$password'";
            $_SESSION['login_user']= $username;
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num==2){
            header("location:Adminpage.php");
            }
            else{
                $message = "Username Or Password is incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        else if($select=='Mentor')
        {    session_start();
            $sql="select * from mentorl where username='$username' AND password='$password'";
            $_SESSION['login_user']= $username;
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num==1){
            header("location:MProfile.php");
            }
            else{
                $message = "Username Or Password is incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
            else if($select='Mentee')
            {      session_start();
                  $sql="select * from studentl where username='$username' AND password='$password'";
                  $_SESSION['login_user']= $username;
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if($num==1){
                // header("location:Profile.php");
                 header("location:Profile.php");
                }
                else{
                $message = "Username Or Password is incorrect.\\nTry again.";
                  echo "<script type='text/javascript'>alert('$message');</script>";
                }
                
            }
            
        }
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
    .container {
        -ms-overflow-style: none;
        /* Internet Explorer 10+ */
        scrollbar-width: none;
        /* Firefox */
    }

    .container::-webkit-scrollbar {
        display: none;
        /* Safari and Chrome */
    }

    .navbar a {
        text-align: center;
        /* justify-content:center; */
    }
    </style>
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
                        <a class="nav-link mx-2 active" aria-current="page" href="PHome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="About.php">About Us</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link mx-2 active">
                            <img src="Photos/logo5.png" height="40" width="120" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="Contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="Contact.php"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="card mb-3 my-5 text-bg-primary " style="max-width: 2000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="Photos/logo5.png" style="width: 400px; height: 250px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Sanjivani Rural Education Societys,</h5>
                        <h2 class="card-text"> Sanjivani College Of Engineering,Department of Computer Engineering
                        </h2>
                        <h4 class="card-text">An Autonomous Institute </h4>
                    </div>
                </div>
            </div>
        </div>
        <section class="vh-100" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="Photos/Mentor.jpg" alt="login form" class="img-fluid"
                                        style="width: 450px; height: 650px;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into
                                            your account</h4>

                                        <form action="/PBLP/PHome.php" method="post">
                                            <div class="form-floating">
                                                <select class="form-select" name="select" id="Select"
                                                    aria-label="Floating label select example">
                                                    <option selected>Login As</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Mentor">Mentor</option>
                                                    <option value="Mentee">Mentee</option>

                                                </select>

                                                <form action="/PBLP/PHome.php" method="post">
                                                    <div class="form-outline mb-4 my-3">
                                                        <input type="text" name="Email" id="Email"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="Email" name="Email">Username</label>
                                                    </div>

                                                    <div class="form-outline mb-4">
                                                        <input type="password" name="pass" id="pass"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="pass"
                                                            name="pass">Password</label>
                                                    </div>

                                                    <div class="pt-1 mb-4">
                                                        <button class="btn btn-dark btn-lg btn-block btn-primary"
                                                            type="submit" name="Login">Login</button>


                                                    </div>

                                                    <a class=" text-muted" href="#!">Forgot password?</a>
                                                    <p>
                                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                                    </p>
                                                </form>

                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <footer class="bg-dark text-center text-white">
        <div class="text-center p-3 my-2" style="background-color: rgba(0, 0, 0, 0.2);">
            Sanjivani, All Rights Reserved
        </div>
    </footer>

</body>

</html>