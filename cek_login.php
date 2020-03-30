<?php
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// mengaktifkan session php
session_start();

//Membuat koneksi database
$koneksi = mysqli_connect("localhost","root","","tubesdpplnew");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and sandi='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){

	$data = mysqli_fetch_assoc($data);
	// cek jika user login sebagai admin
	if($data['username']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
	}
	else{
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:.");
	}
}
else{
	//mengalihkan ke halaman login kembali
	header("location:login.php?pesan=gagal");
}
?>