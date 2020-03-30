<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Aplikasi BMI (Body Mass Index)</title>
    <style>
    body {
        padding: 20px 20%;
    }

    form {
        padding: 10px 20px;
        background-color: #f5f5f5;
        border: solid thin #EEE;
    }

    input,
    select {
        padding: 6px 12px;
    }

    .hasil {
        padding: 10px 20px;
        background-color: #900;
        color: #FFF;
        border: solid thin #600;
    }
    </style>
</head>

<body>
    <h1>Menghitung BMI </h1>

    <form method="POST" action="perhitungan_BMI.php">
        Nama<br>
        <input type="text" name="nama"><br>
        Jenis kelamin<br>
        <select name="kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        Tinggi badan (cm) <br>
        <input type="text" name="tb"><br>
        Berat badan (kg)<br>
        <input type="text" name="bb"><br>
        <input type="submit" name="submit" value="Hitung BMI">
    </form>
</body>

</html>