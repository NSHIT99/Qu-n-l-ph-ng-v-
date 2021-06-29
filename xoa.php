<?php
	$MS = $_GET['MS'];
	include("connect.php");

	$query = "delete from sach where MS = '$MS'";
		if (mysqli_query($connect, $query) ==true) {
			header("Location:home.php");
		}
		else{
			echo "error";
		}
?>