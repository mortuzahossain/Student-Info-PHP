<?php 
include 'db_connect.php';

if ($_GET['id']) {
	$id = $_GET['id'];
	$sql = "DELETE FROM student_info WHERE id = $id";
	if (mysqli_query($con,$sql)) {
		header('Location: index.php');
	} else {
		echo "<h1>Sorry Something Goes Wrong Please Try Again.</h1>";
	}
}

?>