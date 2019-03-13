<?php
session_start();
@$ipAddress=$_SESSION['ipAddress']; 
$conn = new mysqli('localhost', 'root', '', 'demo1');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM login WHERE id='$ipAddress'");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo $row['pos'];
	}
}
?>