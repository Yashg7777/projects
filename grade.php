<!doctype html>
<html lang="en">
    <?php
$servername="localhost";
$username="root";
$password="";
$database="grade";
$conn=mysqli_connect($servername,$username,$password,$database);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id=$_POST['id'];
$prn=$_POST['prn'];
$grade=$_POST['grade'];
$sql="insert into `marks`(`id`,`prn`,`assign_grade`) VALUES ('$id','$prn','$grade') ";
$result=mysqli_query($conn,$sql);
$sql2="DELETE FROM `submit` WHERE prn='$prn'";
$result=mysqli_query($conn,$sql2);
if($result)
echo"Success";
else
echo"Fail";
}
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style>

$background: #f5f6fa;
$text: #9c9c9c;
$input-bg-color: #fff;
$input-text-color: #a3a3a3;
$button-bg-color: #7f8ff4;
$button-text-color: #fff;


:root {
	background: $background;
	color: $text;
	font: 1rem "PT Sans", sans-serif;
}

html,
body,
.container {
	height: 100%;
}

a {
	color: inherit;
	
	&:hover {
		color: $button-bg-color;
	}
}


.container {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.uppercase {
	text-transform: uppercase;
}


.btn {
	display: inline-block;
	background: transparent;
	color: inherit;
	font: inherit;
	border: 0;
	outline: 0;
	padding: 0;
	transition: all 200ms ease-in;
	cursor: pointer;
	
	&--primary {
		background: $button-bg-color;
		color: $button-text-color;
		box-shadow: 0 0 10px 2px rgba(0, 0, 0, .1);
		border-radius: 2px;
		padding: 12px 36px;
		
		&:hover {
			background: darken($button-bg-color, 4%);
		}
		
		&:active {
			background: $button-bg-color;
			box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, .2);
		}
	}
	
	&--inside {
		margin-left: -96px;
	}
}


.form {	
	&__field {
		width: 360px;
		background: #fff;
		color: $input-text-color;
		font: inherit;
		box-shadow: 0 6px 10px 0 rgba(0, 0, 0 , .1);
		border: 0;
		outline: 0;
		padding: 22px 18px;
	}
}
body
{
    background-color: bisque;
}

        </style>
</head>
<body>
<div class="container">
	<div class="container__item">
		<form class="form" method="post" action=/PBLP/grade.php?>
			<input name="grade" id="grade" type="text" class="form__field" placeholder="Enter Grade" />
            <div class="my-3">
            <input name="prn" id="prn" type="text" class="form__field" placeholder="Enter PRN" />
</div>
<div class="my-3">
            <input name="id" id="id" type="text" class="form__field" placeholder="Enter Submission id" />
</div>
            <div>
                <button class="btn btn-primary" type="submit" name="upload">Submit</button>
			<!-- <button type="button" class="btn btn--primary ">submit</button> -->
        </div>
		</form>
	</div>
	
</div>
     <!-- <div class="container my-5">
     <form method="POST" action="new_assignment.php?'.$id.'" enctype="multipart/form-data">
      <div class="form-group">
      
      <input class="form-control" type="file" name="uploadfile" value="" />
     </div>   -->
</body>
</html>        