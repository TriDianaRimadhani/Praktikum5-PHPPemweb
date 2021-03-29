<?php
include "akun.php"; //file juga mengambil file akun.php untuk dieksekusi disini
//kondisi untuk mengecek inputan dari form dengan variable yang telah dideklarasi
if ($_POST['username']==$username){ //variabel username diambil dari akun.php
    if ($_POST['email']==$email){ //variabel email diambil dari akun.php
        header ("Location:index.php"); //jika inputan form username dan email sama dengan variabel, maka akan diarahkan pada halaman index.php
    } else {
        header("Location:logkosongemail.php");//jika data email kosong/salah maka akan diarahkan ke logkosongemail.php
    }
} else {
    header("Location:logkosonguser.php");//jika username kosong/salah maka akan diarahkan ke logkosonguser.php 
}

?>