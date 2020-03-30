<?php

//Pesan Notifikasi
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Maaf, username atau password salah";
	}else if($_GET['pesan'] == "logout"){
		echo "Anda telah berhasil logout";
	}
}
?>

<html>
    <head>
	    <title>Login Kitahu Komputer</title>
    </head>
    <body>
	    <h2>Login Kitahu Komputer</h2>
	    <form method="post" action="cek_login.php">
		    <table>
			    <tr>
				    <td>Username</td>
				    <td>:</td>
				    <td><input type="text" name="username" placeholder="Masukkan username"></td>
			    </tr>
			    <tr>
				    <td>Password</td>
				    <td>:</td>
				    <td><input type="password" name="password" placeholder="Masukkan password"></td>
			    </tr>
			    <tr>
				    <td></td>
				    <td></td>
				    <td><input type="submit" value="LOGIN"></td>
			    </tr>
		    </table>			
	    </form>
    </body>
</html>