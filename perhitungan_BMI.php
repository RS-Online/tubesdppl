<?php

// Action form

if (isset($_POST['submit'])) {
    // Input form
    $nama      = $_POST['nama'];
    $kelamin   = $_POST['kelamin'];
    $tb        = $_POST['tb'] / 100;
    $bb        = $_POST['bb'];

    /* Rumus BMI adalah:
    BMI = BERAT BADAN / KUADRAT TINGGI BADAN
    */

    // Hitung BMI
    $bmi        = $bb / ($tb * $tb);

    /*Hitung BB ideal sesuai jenis kelamin dengan rumus broca
    
    notes : tinggi badan dalam cm
    wanita = (tinggi badan - 100 )-(15%*(tinggi badan-100))
    pria = (tinggi badan - 100 )-(10%*(tinggi badan-100))
    */

    if ($kelamin == "Perempuan") {
        $bbideal = (($tb * 100) - 100) - (0.15 * (($tb * 100) - 100));
    } else if ($kelamin == "Laki-laki") {
        $bbideal = (($tb * 100) - 100) - (0.1 * (($tb * 100) - 100));
    }


    // Mencetak hasil

    echo '<div class="hasil">';
    echo "<h3>Hasil perhitungan BMI</h3>";
    echo "Nama Anda: $nama<br>";
    echo "Jenis kelamin: $kelamin<br>";
    echo "Tinggi Badan: $tb meter<br>";
    echo "Berat Badan: $bb kilogram<br>";
    echo "<hr>BMI Anda: " . number_format($bmi);
    echo "<h4>Kesimpulan:</h4>";
    // Menghitung dan mencetak kesimpulan
    if ($bmi < 15.5) {
        echo "Anda mengalami anoreksia<br>";
        echo "Berat Badan Ideal Seharusnya $bbideal<br>";
    } elseif ($bmi < 18.5) {
        echo "Anda mengalami kekurangan gizi<br>";
        echo "Berat Badan Ideal Seharusnya $bbideal<br>";
    } elseif ($bmi < 25) {
        echo "Anda memiliki berat badan normal<br>";
        echo "Berat Badan Anda Sudah Ideal dengan Berat Badan Sebesar $bbideal<br>";
    } elseif ($bmi < 30) {
        echo "Anda memiliki overweight<br>";
        echo "Berat Badan Ideal Seharusnya $bbideal<br>";
    } elseif ($bmi < 35) {
        echo "Anda mengalami Obesitas Level 1<br>";
        echo "Berat Badan Ideal Seharusnya $bbideal<br>";
    } elseif ($bmi < 40) {
        echo "Anda mengalami Obesitas Level 2<br>";
        echo "Berat Badan Ideal Seharusnya $bbideal<br>";
    } else {
        echo "Anda mengalami Obesitas Akut<br>";
        echo "Berat Badan Ideal Seharusnya $bbideal<br>";
    }
    // closing div
    echo '</div>';
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>HiHealth</title>
</head>

<body>
    <form method="POST" action="perhitungan_BMI.php">
        <br />
        <br />
        <table>
            <td><a href="menu_perhitungan.php">Hitung Ulang BMI</a></td>
            <td></td>
        </table>

</body>

</html>