<!doctype html>
<html lang="en">
<?php
session_start();
$servername="localhost";
$password="";
$username="root";
$database="mentorproject";
$conn=mysqli_connect($servername,$username,$password,$database);

    if($_SESSION['login_user']=="mentor")
    {
        $PRN=$_GET['PRN'];
    }
    else{
        $PRN=$_SESSION['login_user'];
    }


$sql="select *from student_imfo where prn='$PRN'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
             {
               $name=$row['name'];
               $email=$row['email'];
               $phon=$row['phon'];
               $addr=$row['address'];
               $class=$row['class'];
               $GFG=$row['gfg'];
               $HRK=$row['hrk'];
               $lk=$row['ln'];


             } 
            
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
   
</head>

<body>
    <?php
    $prn=$PRN;
    ?>
    <section style="background-color: #eee;">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link active " aria-current="page" href="MProfile.php">Profile</a>
                    
                </li>
            </ul> 
    </nav>
    <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="person.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"><?php
             while($row=mysqli_fetch_array($result))
             {
               $name=$row['name'];
               echo $name;
             } 
            ?></h5>
                            <p class="text-muted mb-1">Python Developer</p>
                            <p class="text-muted mb-4">5*coder at Hackerrank,
                                Achieved Gold Badge On Hackerrank
                            </p>

                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fas fa-globe fa-lg text-warning"></i>
                                    <p class="mb-0">Hackerrank Profile Link :
                                        <?php echo$lk;?>
                                    </p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                    <p class="mb-0">GFG Profile Link :
                                        <?php echo$lk;?>
                                    </p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                    <p class="mb-0">Codechef Profile Link :
                                        <?php echo$lk;?>
                                    </p>
                                    </p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                    <p class="mb-0">Git Hub Link :
                                        <?php echo$lk;?>
                                    </p>
                                    </p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                    <p class="mb-0">Linkedin:
                                        <?php echo$lk;?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0"> Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                    echo $name; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                    echo $email; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                    echo $phon; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Class</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                    echo $class; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php
                                    echo $addr; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">Coding </span>
                                        Status
                                    </p>
                                    <p class="mb-1" style="font-size: .77rem;">Python</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">C++</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 95%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Java</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 10%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Data Structures</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Web Developement</p>
                                    <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span>
                                        Status(Last Three Assignment Grading)
                                    </p>
                                </div>
                                <table class="table table-dark">
<tbody>
           
                                
<?php
                   while($row=mysqli_fetch_assoc($result2))
                              {

                                echo'
                                <div class="card-body">
                               
                                <tr>
                                <th scope="row"></th>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['assign_grade'].'</td>
                           
                               
                                          
                              </tr> 

                                </div>
                                ';
                              }
                              ?>
 </tbody>

</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-center text-white page-footer center-on-small-only pt-0 mt-5 ">
        <!-- Grid container -->

        <div class="text-center p-3 my-2" style="background-color: rgba(0, 0, 0, 0.2);">
            @Sanjivani,All Rights Resolved
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>