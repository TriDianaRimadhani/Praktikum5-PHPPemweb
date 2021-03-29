<?php //hasil dari inputan form akan dikirim disini

    if (empty($_POST['nama'])){
        header("Location:kosong.php"); //jika inputan tidak ada data, akan di direct ke halaman kosong.php
    } else {
        //menampilkan variabel dari POST yang telah diambil dari form dengan method="POST"
        echo "<center>Nama :".$_POST['nama']."</center><br>";
    }
?>