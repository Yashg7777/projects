<?php
                $servername="localhost";
                $password="";
                $username="root";
                $database="project";
                $conn=mysqli_connect($servername,$username,$password,$database);
                $sql2="select * from `marks` where prn='$PRN'";
                $result2=mysqli_query($conn,$sql2);
                ?>
                <?php
                $servername="localhost";
                $password="";
                $username="root";
                $database="grade";
                $conn=mysqli_connect($servername,$username,$password,$database);
                $sql2="select * from `marks` where prn='$PRN'";
                $result2=mysqli_query($conn,$sql2);
                ?>