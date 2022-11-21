<?php

require_once("config.php");
connect_db();

if (isset($_GET['action']) && $_GET['action'] == 'login') {
	if (isset($_POST['fuser']) && isset($_POST['fpass'])) {
		$fuser = $_POST['fuser'];
		$fpass = $_POST['fpass'];

		$result = $conn->query("SELECT * FROM tbl_user WHERE username = '$fuser' AND password = '$fpass'");

		while ($row = $result->fetch_assoc()) {
			session_start();
			$_SESSION['login_user'] = $fuser;
			$_SESSION['user_role'] = $row['role'];
			header('Location: dashboard-getar.php');
			exit;
		}
	}
	header('Location: index.php');
	exit;
}
