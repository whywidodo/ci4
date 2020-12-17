# CodeIgniter 4 - Template SBAdmin 2

## Apakah ini?
Sebuah website php berbasis framework [CI](https://codeigniter.com) yang telah dimodifikasi agar bisa terintegrasi dengan template [SBAdmin-2](https://startbootstrap.com/theme/sb-admin-2).
Sehingga dalam struktur tampilan/view tidak perlu membuat dari awal, karena didalam ini sudah terdapat :
- Layout Header
- Layout Footer
- Layout Template
Sehingga dalam pengembangannya mudah untuk dimodifikasi.

### Hal baru
Pemanggilan file CSS dan JS hanya yang digunakan pada halaman terkait saja, sehingga tidak membebani proses loading data.


## Cara pemasangan & Update.
Anda bisa melakukan cloning dengan cara.
Masuk pada terminal yang Anda gunakan kemudian ketikan perintah berikut :
```gh repo clone whywidodo/ci4```

Setelah proses cloning selesai, jalankan update composer dengan mengetikan perintah berikut :
```composer update```

Maka composer akan melakukan pembaruan terhadap file yang telah Anda cloning tadi. Setelah proses update selesai, maka Anda akan melihat ada folder baru yang bernama `vendor`.

Jika sudah maka Anda bisa menjalankan website ini menggunakan perintah `php spark serve` dalam terminal/gitbash.


## Catatan

Untuk menjalankan website ini, dibutuhkan PHP minimal versi 7.2.

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) Apabila Anda berkeinginan untuk menggunakan HTTP/CurlRequest

Dan pastikan bahwa ekstensi tambahan berikut ini telah aktif pada PHP Anda :

- json (secara default sudah aktif)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (secara default sudah aktif)

# Terimakasih
[Codeigniter-4](https://codeigniter.com) - Framework PHP
[SBAdmin-2](https://startbootstrap.com/theme/sb-admin-2) - Start Bootstrap
