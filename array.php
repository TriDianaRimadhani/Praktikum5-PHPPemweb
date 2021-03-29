<html>
<head>
<title> Pemrograman PHP dengan Array </title>
</head>
<body>
<?php
//penulisan array dapat dibuat seperti berikut
//pendeklarasian variabel menggunakan array
$nama[] = "Dhani";
$nama[] = "Laras";
$nama[] = "Eni";
//menampilkan urutan array yang dipanggil sesuai indeks
echo $nama[1],  "<br>" . $nama[2], "<br>" . $nama[0];
echo "<br>";
//menghitung jumlah elemen array
$jum_array = count($nama);
//menampilkan jumlah elemen array
echo "Jumlah elemen array = " . $jum_array;
?>
</body>
</html>