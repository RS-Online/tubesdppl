<?php

    echo"halaman admin";

	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php");
	}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>WEB PERHITUNGAN BMI</title>
    </head>
    <body>
        <h2>Welcome</h2>
        <h4>Welcome, <?php echo $_SESSION['username']; ?>! You're successfull to login !</h4>
        <br/>
        <br/>
        <table>
			<td><a href="logout.php">LOGOUT</a></td>
			<!--<td><a href="menuperhitungan"-->
		</table>
    </body>
</html>