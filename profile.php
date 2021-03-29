<!DOCTYPE html>

<html>
    <head>
        <title>Profile</title>
        <!--menyambungkan pada file css-->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <style>
            /*menyisipkan background untuk halaman*/
            body {
                background-image: url('abstract-watercolor-background_91008-101.jpg');
                background-repeat: no-repeat;
                background-size:cover;
            }
        </style>
    <body>
        
        <nav class="nav"> <!--area nav menggunakan kelas nav pada css-->
            <ul> <!--script untuk pembuatan menu/navigasi bar-->
                <li><a href ="http://localhost/praktikum5/contact.php">Contact</a></li>
                <li><a href ="http://localhost/praktikum5/interest.php">Interest</a></li>
                <li><a href ="http://localhost/praktikum5/profile.php">Profile</a></li>
                <li><a href ="http://localhost/praktikum5/index.php">Home</a></li>
            </ul>
        </nav>
        <h2>MY PROFILE</h2>
        <br>
        <table class="center" border="1" cellpadding="5" cellspacing="0"><!--tabel menggunakan css class cente-->
               <tr>
                   <!--menampilkan gambar-->
                   <td><img src="20201101_195128-01.jpeg" alt="diana's photo" width="140" height="190"></td>
                   <td><!--menampilkan sederet teks-->
                       <p>Name : Tri Diana Rimadhani</p>
                       <p>Birth Date : 14 December 2000</p>
                       <p>Age : 20th</p>
                       <p>Blood Type : A</p>
                    </td>
               </tr>
        </table>
        <!--settingan tampilan dari tabel-->
        <table class="center" width="700" border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <!--menampilkan sederet paragraf-->
                    <td><p align="center" >Seorang mahasiswi jurusan Sistem Informasi Universitas Pembangunan Nasional "Veteran" Jawa Timur yang saat ini masih menempuh bidang studinya selama 4 semester.
                    Sejatinya, ia merupakan mahasiswa perantau yang memiliki kampung halaman di Tuban, Kota Wali.
                    Dan saat ini pun dikarenakan situasi pandemi yang masih melanda, ia kembali ke kampung halamannya dan melanjutkan perkuliahannya di sana.
                    </td></p>
                </tr>
        </table>
    </body>
</html>