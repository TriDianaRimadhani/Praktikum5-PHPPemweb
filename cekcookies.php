<?php
//menggunakan kondisi untuk mengeksekusi operasi
if (isset($variable_cookies)) {
    //menampilkan variabel cookies yng telah dideklarasikan
    echo 'Variabel cookiesnya "$variable_cookies" nilainya adalah' . $variable_cookies;
} else{
    //jika variabel belum dideklarasikan akan muncul teks
    echo "Variabel cookies belum diterapkan";
}
?>