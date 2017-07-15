<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "inquiry";

$fname = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// create connection

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tb_form (name, email, subject, message)
VALUES ('$fname', '$email', '$subject', '$message')";

if ($conn->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();

?>

