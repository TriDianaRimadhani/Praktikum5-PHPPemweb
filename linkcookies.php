<?php
//mendeklarasikan variabel pada cookies
setcookie("variable_cookies","Ini adalah variabel cookies", time()+60);
//link untuk menuju halaman cekookies
echo "<a href=cekcookies.php>Cek Cookies</a>";
?>