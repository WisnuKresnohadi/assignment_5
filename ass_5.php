<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    //Luas Segitiga
    $alasSegitiga = 5;
    $tinggiSegitiga = 3;
    echo "Alas Segitiga : $alasSegitiga <br>";
    echo "Tinggi Segitiga : $tinggiSegitiga";
    echo "<br>";

    echo "Luas Segitiga :<br>";
    echo ($alasSegitiga * $tinggiSegitiga) / 2;
    echo "<br>";
    echo "<br>";

    //Luas Dan Keliling Persegi
    $panjangPersegi = 10;
    $lebarPersegi = 15;
    echo "Panjang : $panjangPersegi <br>";
    echo "Lebar : $lebarPersegi <br>";
    echo "Keliling Persegi :<br>";
    echo ($panjangPersegi * 2) + ($lebarPersegi * 2);
    echo "<br>";
    echo "Luas Persegi :<br>";
    echo $panjangPersegi * $lebarPersegi;
    echo "<br>";
    echo "<br>";

    //Konversi Suhu
    $celcius = 30;
    $fahrenheit = 1200;
    $reamur = 150;
    echo "Celcius Ke Reamur :<br>";
    echo $celcius * 0.8;
    echo "<br>";
    echo "Celcius Ke Fahrenheit :<br>";
    echo $celcius * 1.8 + 32;
    echo "<br>";
    echo "<br>";
    echo "Fahrenheit Ke Celcius :<br>";
    echo ($fahrenheit - 32) / 1.8;
    echo "<br>";
    echo "Fahrenheit Ke Reamur :<br>";
    echo 0.44 * ($fahrenheit - 32);
    echo "<br>";
    echo "<br>";
    echo "Reamur Ke Celcius :<br>";
    echo 1.25 * $reamur;
    echo "<br>";
    echo "Reamur Ke Fahrenheit :<br>";
    echo (2.25 * $reamur) + 32;
    echo "<br>";
    echo "<br>";

    //Konversi Nilai Angka Ke Huruf
    $nilai = 40;
    echo "Nilai : ";
    if ($nilai >= 80 && $nilai <= 100) {
        # code...
        echo "A";
    } elseif ($nilai >= 70 && $nilai < 80) {
        # code...
        echo "B";
    } elseif ($nilai >= 60 && $nilai < 70) {
        # code...
        echo "C";
    } elseif ($nilai >= 50 && $nilai < 60) {
        # code...
        echo "D";
    } else {

        echo "E";
    }
    echo "<br>";
    echo "<br>";
    //Bilangan Prima
    $masukan = 2;
    $count = 0;
    for ($i = 1; $i <= $masukan; $i++) {
        # code...
        if ($masukan % $i == 0) {
            # code...
            $count++;
        }
    }
    if ($count == 2) {
        # code...
        echo "$masukan Adalah Prima";
    } else {
        # code...
        echo "$masukan Bukan Prima";
    }
    echo "<br>";
    echo "<br>";
    //Dua Pangkat
    $pangkat = 8;
    $save = $pangkat;
    while ($pangkat % 2 == 0) {
        # code...
        $pangkat = $pangkat / 2;
    }
    if ($pangkat == 1) {
        # code...
        echo "$save Adalah Pangkat 2";
    } else {
        # code...
        echo "$save Bukan Pangkat 2 ";
    }

    ?>
</body>

</html>