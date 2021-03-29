<html><!--halaman ketika email kosong-->
    <head>
    <!--menyambungkan dengan file css-->
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <style>
        /*style untuk area div*/
        div{
            margin: 15% auto;
            width: 400px;
	        border:2px solid #c70505;
        }
    </style>
    <div>
        <?php
        //menampilkan teks
        echo "<center>Data tidak lengkap</center>","<br>";
        echo "<center>Anda tidak memasukkan email anda atau email anda salah!</center>";
        ?>
        <!--tombol untuk kembali pada halaman login-->
        <center><a href="http://localhost/praktikum5/login.php"><button class="button">Kembali</button></a></center>
    </div>
</html>