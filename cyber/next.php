<?php
  include('connect.php');

 $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$CreateSql = "INSERT INTO `receive` (first_name, last_name, email_id, gender, age) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";
		$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));


		header('Location: index.html');


?>

	 