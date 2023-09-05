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
    $name=$_POST["studentname"];
    $username=$_POST["prn"];
    $class=$_POST["classd"];
    $password=$_POST["pass"];
    $sql="INSERT INTO `studentll`(`name`,`username`,`class`,`password`) VALUES ('$name','$username','$class','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo"Student Added Successfully";

    }
    else{
        echo"Error";
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
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <!-- Modal Form -->
    <div class="container">
        <section class="vh-100" style="background-color:;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <!-- <img src="Photos/Mentor.jpg" alt="login form" class="img-fluid"
                                            style="width: 450px; height: 650px;" /> -->
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">





                                        <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Add A New Student
                                        </h4>




                                        <form action="/PBLP/Add_Student.php" method="post">
                                            <div class="form-outline mb-4 my-3">
                                                <input type="text" name="studentname" id="studentname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="studentname" name="studentname">Enter
                                                    Student Full Name</label>
                                            </div>
                                            <div class="form-outline mb-4 my-3">
                                                <input type="text" name="prn" id="prn"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="prn" name="prn"> Set Username(PRN)
                                                </label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" name="classd" id="classd"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="classd" name="classd">Enter Student
                                                    Class</label>
                                            </div>


                                            <div class="form-outline mb-4">
                                                <input type="text" name="pass" id="pass"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="pass" name="pass">Set Password</label>
                                            </div>


                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block btn-primary" type="submit"
                                                    name="submit">Add Account</button>
                                                    
                                            </div>


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
</body>

</html>