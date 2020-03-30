<?php
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// mengaktifkan session php
session_start();

//Membuat koneksi database
$koneksi = mysqli_connect("localhost","root","","latihanphp");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:.");
}else{
	header("location:login.php?pesan=gagal");
}
?>