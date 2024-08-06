<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> dasar php </h3></title>
    <h2 align = center> <u>LATIHAN DASAR PHP</u> </h2>
</head>
<body>
<?php
    //variabel
    $subjudul1 = "MATERI 1 : Variabel";
    echo "<b> $subjudul1 </b>";
    echo "<br>";
    echo "Nama : Chilya Salsabila El Chusni" ;
    echo "<br>" ; 
    echo "Kelas : XI RPL 4" ; 
    echo "<br>" ;
    echo "Alamat : Pakis, Malang" ; 
    echo "<br>" ;
    echo "Jenis Kelamin : Perempuan" ;  

    $email = "chilyaabel@gmail.com" ;
    $username = "abeell";

    echo "<br> <br>" ;
    echo "<i> Email = $email </i>";  
    echo "<br>" ;
    echo "<u> Username = $username </u>";
    echo "<br> <br>" ;

    //operator penjumlahan sederhana
    $subjudul2 = "MATERI 2 : Operator Penjumlahan Sederhana";
    echo "<b> $subjudul2 </b>";
    echo "<br>";

    $a = 5;
    $b = 5;
    $hasil = $a + $b;
    echo "Nilai ke-1 = $a";
    echo "<br>";
    echo "Nilai ke-2 = $b";
    echo "<br>";
    echo "<b> Hasil Penjumlahannya = $hasil </b>";
    echo "<br> <br>";

    //operator perkalian bilangan segitiga
    $subjudul3 = "MATERI 2 : Operator Perkalian Segitiga";
    echo "<b> $subjudul3 </b>";
    echo "<br>";

    $alas = 10;
    $tinggi = 35;
    $hasill = 1/2 * $alas * $tinggi;
    echo "Nilai Alas = $alas cm";
    echo "<br>";
    echo "Nilai Tinggi = $tinggi cm";
    echo "<br>";
    echo "<i> Rumus perkalian segitiga : 1/2 x $alas x $tinggi </i>";
    echo "<br>";
    echo "<b> Hasilnya adalah = $hasill cm </b>";
    echo "<br> <br>";

    //kondisi if else
    $subjudul4 = "MATERI 3 : Kondisi if else";
    echo "<b> $subjudul4 </b>";
    echo "<br>";
    $harga = 9000;
    if($harga < 5000) {
        echo "saya akan beli kopi" ;
    } else if ($harga <=8000) {
        echo "saya akan tawar";
    } else {
        echo "gapunya duit" ;
    }
    echo "<br> <br>";
    
    //membuat function
    $subjudul5 = "MATERI 4 : Function";
    echo "<b> $subjudul5 </b>";
    echo "<br>";
    
    function quote () {
        echo "belajar php";
    }
    quote(); //ini memanggil function

    //buat repo dgn nama "latihan php" di github!!
    //lalu didalamnya ada 1 halaman web yg menampung materi diatas!
    ?>
</body>
</html>

