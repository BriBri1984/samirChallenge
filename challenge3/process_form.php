<?php 

$connection = mysqli_connect('localhost', 'root', '', 'practice_form');

	if(!$connection) {
		die('Database Connection Failed');
	} else{
		echo "Connected";
	}



function create(){
	if (isset($_POST['submit'])) {
		global $connection;

	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$checkbox = $_POST['age'];
	if ($checkbox != 1){
		$checkbox = 0;
	}

	
	$query = "INSERT INTO users(username,password,age) ";
	$query .= "VALUES ('$username', '$password', '$checkbox')";
	
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die('Query Failed' . mysqli_error($connection));
	} else {
		echo "Record Created";
	}
}
}




?>

