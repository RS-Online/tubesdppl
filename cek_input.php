<?php 
// koneksi database
include 'koneksis.php';

// menangkap data yang di kirim dari form
	$names	= $_POST['nama'];
	$emails	= $_POST['email'];
    $weight	= $_POST['beratbadan'];
    $height = $_POST['tinggibadan'];
    $age = $_POST['umur'];
    $usernames = $_POST['username'];
    $passwords = $_POST['ps'];

//KONDISI 

	if (empty($names)) { 
		echo "Nama harus di isi"; 
	} 
	
	if (empty($emails)) { 
		echo "Email harus di isi"; 
	} 
	
	if (empty($weight)) { 
		echo "Berat Badan harus di isi"; 
	}
	if (empty($height)) { 
		echo "Tinggi Badan harus di isi"; 
	}
	if (empty($age)) { 
		echo "Umur harus di isi"; 
	}
	if (empty($usernames)) { 
		echo "Username harus di isi"; 
	}
	if (empty($passwords)) { 
		echo "Password harus di isi"; 
	} 


//menginput data ke database
mysqli_query($koneksi,"INSERT INTO tubesdpplnew 
	VALUES ('',$usernames', '$passwords', '$names', '$emails', '$age', '$weight', '$height', '')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>