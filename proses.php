<?php
include "inc.php"; //include berfungsi mengambil dari file lain yang kan di eksekusi juga disini
echo $angka; //variabel angka yang telah dideklarasikan di file inc.php
echo "<br>";
//operasi kondisi untuk eksekusi dari variabel yang telah diambil
if ($angka==100){
    echo "Memuaskan";
} elseif ($angka<100&&$angka>=85) {
    echo "Sangat Baik";
} elseif ($angka<85&&$angka>=70) {
    echo "Baik";
} elseif ($angka<70&&$angka>=55) {
    echo "Cukup";
} elseif($angka<55&&$angka>=0) {
    echo "Kurang";
}
?>