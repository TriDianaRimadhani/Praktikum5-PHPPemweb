<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <!--form menggunakan method POST dan inputan akan dikirim ke hasilkirim.php-->
        <form method="POST" action="hasilkirim.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <!--inputan berupa teks-->
                    <td width="130">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <!--tombol submit untuk mengirim inputan-->
                        <input type="submit" name="btnlogin" value="Kirim">
                        <!--tomol reset untuk menghapus/mengulang kembali isi form-->
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>        
    </body>

</html>