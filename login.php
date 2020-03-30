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
	    <title>Login WEB </title>
    </head>
    <body>
	    <h2>Login WEB</h2>
	    <form method="post" action="cek_login.php">
		    <table>
			    <tr>
				    <td>Username</td>
				    <td>:</td>
				    <td><input type="text" name="username" placeholder="Input username"></td>
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
					<td>Belum Punya Akun ? <a href="register.php">Daftar di sini</a></td>
			    </tr>
		    </table>			
	    </form>
    </body>
</html>