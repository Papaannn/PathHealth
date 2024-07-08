<?php
include "../koneksi.php";

$username = $_POST['username'];
$fullname = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "INSERT INTO users (username, email, full_name, password)
			  VALUES ('$username', '$email', '$fullname',  '$password')";

if (mysqli_query($conn, $query_sql)){
	header("Location: ../login/login.php");
} else{
	echo "Pendaftaran Gagal: " . mysqli_error($conn);
}

?>
