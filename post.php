<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <!--membuat form dengan menggunakan method POST sebagai pengambil nilai variabel dari form-->
    <form method="POST" action="postAct.php">
        <!--tabel sebagai tempat form-->
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <!--media inputan untuk username-->
                <td width="130">Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <!--media inputan untuk email-->
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>
                    <!--tombol untuk submit form-->
                    <input type="submit" name="btnlogin" value="Login">
                    <!--tombol untuk reset/clear form-->
                    <input type="reset" name="reset" value="Reset">

                </td>
            </tr>
        </table>
    </form>
</body>    
</html>