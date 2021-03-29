<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
        <!--menyambungkan pada file css-->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <style>
            /*style tampilan untuk h1*/
            h1 {
                background-color:transparent;
	            color: rgb(62, 112, 179);
                font-family:sans-serif;
                text-align: center;
                width: 45%;
                margin-top: 10%;
                margin-right:auto;
                margin-left:auto;
                padding: 20px;
                border: 3px solid #333281
            }
            /*menyisipkan background untuk halaman*/
            body {
                background-image: url('abstract-watercolor-background_91008-101.jpg');
                background-repeat: no-repeat;
                background-size:cover;
            }
            /*tampilan css untuk area  div*/
            div{
                margin-top:10%;
                margin-right:60%;
                margin-left:1cm;
                width: 250px;
                border:1px solid #4745e2;
            }
        </style>
    <body>
        
        <nav class="nav"><!--tag nav telah di definisikan style tampilannya-->
            <ul><!--script untuk pembuatan menu/navigasi bar-->
                <li><a href ="http://localhost/praktikum5/contact.php">Contact</a></li>
                <li><a href ="http://localhost/praktikum5/interest.php">Interest</a></li>
                <li><a href ="http://localhost/praktikum5/profile.php">Profile</a></li>
                <li><a href ="http://localhost/praktikum5/index.php">Home</a></li>
            </ul>
        </nav>
        <h1>WELCOME TO MY PAGE</h1>
        <div>
            <?php
            include "akun.php"; //menggunakan include dengan file akun.php untuk dieksekusi disini
                echo "<center>Log Activity</center>","<br>";
                //menampilkan variabel dari file akun.php
                echo "Nama :".$username."<br>";
                echo "Email :".$email."<br>";
                //menampilkan waktu login
                echo date ("d-D-F-Y, g:i:s a");
            ?>
        </div>
    </body>
</html>