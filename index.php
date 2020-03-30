<!-- cek apakah sudah login -->
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kitahu Komputer</title>
    </head>
    <body>
	    <h2>Halaman Admin</h2>
	    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	    <br/>
	    <br/>
	    <a href="logout.php">LOGOUT</a>
    </body>
</html>