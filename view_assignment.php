<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    body{
        background-color: burlywood;
    }
    </style>
    <title>Hello, world!</title>
</head>

<body>

    <div id="display-image">
		<?php
        $db = mysqli_connect("localhost", "root", "", "mentorproject");
        $id=$_GET['id'];
		$query = " select * from image where id='$id' ";
		$result = mysqli_query($db, $query);

		while($row=mysqli_fetch_array($result)){
		?>
			 <embed src="./image/<?php echo $row['filename']; ?>"width="1500px" height="820px"/>
		<?php
		 }
		?>
	</div>
</body>
</html>