<html>
<head>
<title> Konversi Tipe Data </title>
</head>
<body>
<?php
//pendeklarasian variabel a
$a = 300.4;
//menampilkan variabel a
echo $a;
//spasi satu baris
echo "<br>";
//variabel a dikonversi menjadi tipe double
echo "Tipe Double :", doubleval($a), "<br>";
//variabel a dikonversi menjadi tipe integer
echo "Tipe Integer :",intval($a), "<br>";
//variabel a dikonversi menjadi tipe string
echo "Tipe String :", strval($a)
?>
</body>
</html>