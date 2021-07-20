

<?php
	session_start();
	include("server.php");

	$user = $_POST['username']; //123 
	$pass = $_POST['password'];

    $sql = "SELECT * FROM user_login WHERE username = '$user' and password = '$pass' ";
	$result = $conn->query($sql);
	$row = $result -> fetch_assoc();

	if ($result->num_rows > 0) {
		$_SESSION['username'] = $user;
		header("location: admin_page.php");
	} else {
        echo "<script>alert('รหัสผิดพลาด')</script>";
        header("refresh:0 ; url=login.php");
	}
	

?>