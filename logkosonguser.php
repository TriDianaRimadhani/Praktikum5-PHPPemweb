<html>
    <head>
    <!--menghubungkan dengan file style.css-->
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <style>
        div{ /*pengaturan tampilan untuk area div*/
            margin: 15% auto;
            width: 400px;
	        border:2px solid #c70505;
        }
    </style>
    
    <div>
        <?php
        //menampilkan teks dengan posisi di tengah
        echo "<center>Data tidak lengkap</center>","<br>";
        echo "<center>Anda tidak memasukkan username anda atau username anda salah!</center>";
        ?>
        <!--tombol 'Kembali' untuk diarahkan kembali ke halaman login.php dengan tampilan css-->
        <center><a href="http://localhost/praktikum5/login.php"><button class="button" >Kembali</button></a></center>
    </div>
</html>