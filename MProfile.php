<!doctype html>
<html lang="en">
<?php
session_start();
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
        color: #797979;
        background: #f1f2f7;
        font-family: 'Open Sans', sans-serif;
        padding: 0px !important;
        margin: 0px !important;
        font-size: 13px;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
    }

    .profile-nav,
    .profile-info {
        margin-top: 30px;
    }

    .profile-nav .user-heading {
        background: #fbc02d;
        color: #fff;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
        padding: 30px;
        text-align: center;
    }

    .profile-nav .user-heading.round a {
        border-radius: 50%;
        -webkit-border-radius: 50%;
        border: 10px solid rgba(255, 255, 255, 0.3);
        display: inline-block;
    }

    .profile-nav .user-heading a img {
        width: 112px;
        height: 112px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
    }

    .profile-nav .user-heading h1 {
        font-size: 22px;
        font-weight: 300;
        margin-bottom: 5px;
    }

    .profile-nav .user-heading p {
        font-size: 12px;
    }

    .profile-nav ul {
        margin-top: 1px;
    }

    .profile-nav ul>li {
        border-bottom: 1px solid #ebeae6;
        margin-top: 0;
        line-height: 30px;
    }

    .profile-nav ul>li:last-child {
        border-bottom: none;
    }

    .profile-nav ul>li>a {
        border-radius: 0;
        -webkit-border-radius: 0;
        color: #89817f;
        border-left: 5px solid #fff;
    }

    .profile-nav ul>li>a:hover,
    .profile-nav ul>li>a:focus,
    .profile-nav ul li.active a {
        background: #f8f7f5 !important;
        border-left: 5px solid #fbc02d;
        color: #89817f !important;
    }

    .profile-nav ul>li:last-child>a:last-child {
        border-radius: 0 0 4px 4px;
        -webkit-border-radius: 0 0 4px 4px;
    }

    .profile-nav ul>li>a>i {
        font-size: 16px;
        padding-right: 10px;
        color: #bcb3aa;
    }

    .r-activity {
        margin: 6px 0 0;
        font-size: 12px;
    }


    .p-text-area,
    .p-text-area:focus {
        border: none;
        font-weight: 300;
        box-shadow: none;
        color: #c3c3c3;
        font-size: 16px;
    }

    .profile-info .panel-footer {
        background-color: #f8f7f5;
        border-top: 1px solid #e7ebee;
    }

    .profile-info .panel-footer ul li a {
        color: #7a7a7a;
    }

    .bio-graph-heading {
        background: #fbc02d;
        color: #fff;
        text-align: center;
        font-style: italic;
        padding: 40px 110px;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
        font-size: 16px;
        font-weight: 300;
    }

    .bio-graph-info {
        color: #89817e;
    }

    .bio-graph-info h1 {
        font-size: 22px;
        font-weight: 300;
        margin: 0 0 20px;
    }

    .bio-row {
        width: 50%;
        float: left;
        margin-bottom: 10px;
        padding: 0 15px;
    }

    .bio-row p span {
        width: 100px;
        display: inline-block;
    }

    .bio-chart,
    .bio-desk {
        float: left;
    }

    .bio-chart {
        width: 40%;
    }

    .bio-desk {
        width: 60%;
    }

    .bio-desk h4 {
        font-size: 15px;
        font-weight: 400;
    }

    .bio-desk h4.terques {
        color: #4CC5CD;
    }

    .bio-desk h4.red {
        color: #e26b7f;
    }

    .bio-desk h4.green {
        color: #97be4b;
    }

    .bio-desk h4.purple {
        color: #caa3da;
    }

    .file-pos {
        margin: 6px 0 10px 0;
    }

    .profile-activity h5 {
        font-weight: 300;
        margin-top: 0;
        color: #c3c3c3;
    }

    .summary-head {
        background: #ee7272;
        color: #fff;
        text-align: center;
        border-bottom: 1px solid #ee7272;
    }

    .summary-head h4 {
        font-weight: 300;
        text-transform: uppercase;
        margin-bottom: 5px;
    }

    .summary-head p {
        color: rgba(255, 255, 255, 0.6);
    }

    ul.summary-list {
        display: inline-block;
        padding-left: 0;
        width: 100%;
        margin-bottom: 0;
    }

    ul.summary-list>li {
        display: inline-block;
        width: 19.5%;
        text-align: center;
    }

    ul.summary-list>li>a>i {
        display: block;
        font-size: 18px;
        padding-bottom: 5px;
    }

    ul.summary-list>li>a {
        padding: 10px 0;
        display: inline-block;
        color: #818181;
    }

    ul.summary-list>li {
        border-right: 1px solid #eaeaea;
    }

    ul.summary-list>li:last-child {
        border-right: none;
    }

    .activity {
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .activity.alt {
        width: 100%;
        float: right;
        margin-bottom: 10px;
    }

    .activity span {
        float: left;
    }

    .activity.alt span {
        float: right;
    }

    .activity span,
    .activity.alt span {
        width: 45px;
        height: 45px;
        line-height: 45px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        background: #eee;
        text-align: center;
        color: #fff;
        font-size: 16px;
    }

    .activity.terques span {
        background: #8dd7d6;
    }

    .activity.terques h4 {
        color: #8dd7d6;
    }

    .activity.purple span {
        background: #b984dc;
    }

    .activity.purple h4 {
        color: #b984dc;
    }

    .activity.blue span {
        background: #90b4e6;
    }

    .activity.blue h4 {
        color: #90b4e6;
    }

    .activity.green span {
        background: #aec785;
    }

    .activity.green h4 {
        color: #aec785;
    }

    .activity h4 {
        margin-top: 0;
        font-size: 16px;
    }

    .activity p {
        margin-bottom: 0;
        font-size: 13px;
    }

    .activity .activity-desk i,
    .activity.alt .activity-desk i {
        float: left;
        font-size: 18px;
        margin-right: 10px;
        color: #bebebe;
    }

    .activity .activity-desk {
        margin-left: 70px;
        position: relative;
    }

    .activity.alt .activity-desk {
        margin-right: 70px;
        position: relative;
    }

    .activity.alt .activity-desk .panel {
        float: right;
        position: relative;
    }

    .activity-desk .panel {
        background: #F4F4F4;
        display: inline-block;
    }


    .activity .activity-desk .arrow {
        border-right: 8px solid #F4F4F4 !important;
    }

    .activity .activity-desk .arrow {
        border-bottom: 8px solid transparent;
        border-top: 8px solid transparent;
        display: block;
        height: 0;
        left: -7px;
        position: absolute;
        top: 13px;
        width: 0;
    }

    .activity-desk .arrow-alt {
        border-left: 8px solid #F4F4F4 !important;
    }

    .activity-desk .arrow-alt {
        border-bottom: 8px solid transparent;
        border-top: 8px solid transparent;
        display: block;
        height: 0;
        right: -7px;
        position: absolute;
        top: 13px;
        width: 0;
    }

    .activity-desk .album {
        display: inline-block;
        margin-top: 10px;
    }

    .activity-desk .album a {
        margin-right: 10px;
    }

    .activity-desk .album a:last-child {
        margin-right: 0px;
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
                        <a class="nav-link active " aria-current="page" href="assign2.php">Assignment</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link active " aria-current="page" href="logout.php">Logout</a>
                    </li>

                </ul>

            </div>
    </nav>
    <div class="container my-5">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <div class="profile-nav col-md-3">
                    <div class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="person.png" alt="">
                            </a>
                            <h1>.......</h1>
                            <p>........</p>
                        </div>

                        <ul class="nav nav-pills nav-stacked my-5">
                            <li><a href="Edit.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="profile-info col-md-9">
                    <div class="panel">
                        <div class="panel-body bio-graph-info my-5">
                            <h1>Bio Graph</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>First Name </span>:......</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Last Name </span>:......</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Country </span>:......</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Birthday</span>: ......</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Occupation </span>:......</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Email </span>:........</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Mobile </span>: .........</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Phone </span>: ........</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card text-center" style="background-color:light">
            <h5 class="card-header text-center">Status</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text text-center " style=" color=white">You Are Assigned For Students of Sy-A from roll
                    numbers 1-15</p>
                <a href="mentorpage.php" class="btn btn-primary ">Add Your Students</a>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-center text-white page-footer center-on-small-only pt-0 mt-5 ">
        <!-- Grid container -->

        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2);">
            @Sanjivani2022,All Rights Resolved
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>