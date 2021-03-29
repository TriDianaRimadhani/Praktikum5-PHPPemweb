<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!--link mengarahkan pada file css-->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!--area div menggunakan css kelas box-->
        <div class="box">
        <h1 class="title">LOGIN AKUN</h1> <!--h1 menggunakan css title-->
        <!--form menggunakan method POST dan inputan akan dikirim ke hasilkirim.php-->
        <form method="POST" action="ceklogin.php">
            <table class="khusus">
                <tr>
                    
                    <td>Username</td>
                    <td>:</td>
                    <!--inputan berupa teks dengan nama username-->
					<td><input type="text" name="username" ></input></td>
                </tr>
                <tr>
                    <!--inputan berupa teks dengan nama username-->
					<td>Email</td>
					<td>:</td>
                    <!--inputan berupa teks dengan nama email-->
					<td><input type="email" name="email" ></input></td>
				</tr>
                <tr>
                    <td colspan="3" > <!--tombol untuk mengirim inputan dari form-->
                        
                        <input type="submit" class="submit kanan" name="btnlogin" value="LOGIN">
                    </td>
                    <td colspan="3" > <!--tombol untuk reset/membersihkan data form-->
                        
                    <input type="reset" class="reset kanan" name="reset" value="RESET">
                    </td>
                    
                </tr>
        </div>        
    </body>
</html>