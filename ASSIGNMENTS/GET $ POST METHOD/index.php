<?php
$server="localhost";
$username="root";
$password="";
$database= "Muneeb";
$insert= false;

$con= mysqli_connect($server, $username, $password, $database);

if(!$con){
    die("Connection Failed: ". mysqli_connect_error());
}

if(isset($_POST["fn"])){
	$firstnamevalue= $_POST["fn"];
	$lastnamevalue= $_POST["ps"];

	$sql = "INSERT INTO INFO (First_Name, PASS_WORD) VALUES ('$firstnamevalue','$lastnamevalue')";
    // Execute the query
    $res = mysqli_query($con, $sql);

    if ($res) {
        echo("<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Congratulations!</strong> You have been registered successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='top: 0;'></button>
  </div>");
    $insert= true;
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>MHS</title>
</head>
<body>

<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		<form class="form" action="index.php" method="post">
            <label for="fn" id="fn"></label>
			<input type="text" placeholder="Username" name="fn" >
            <label for="ps" id="ps"></label>
			<input type="password" placeholder="Password" name="ps">
			<button type="submit" id="login-button" value="submit">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
