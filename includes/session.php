<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == 'username'){
		header('location: dashboard.php');
	}

	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."password";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>