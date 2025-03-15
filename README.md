# die
mohon maaf, modul rusak, banyak kode saya ubah dengan AI.
## essai
1. 1.1 Instalasi CodeIgniter 3 dan Persiapan A. Persiapan 1.	Pastikan XAMPP atau software web server lainnya sudah terinstal di komputer. 2.	Download CodeIgniter 3 dari situs resminya: https://codeigniter.com/download B. Instalasi CodeIgniter 3 1.	Ekstrak file CodeIgniter yang telah didownload. 2.	Pindahkan folder hasil ekstraksi ke dalam folder htdocs pada XAMPP (biasanya terletak di C:/xampp/htdocs/). 3.	Ubah nama folder sesuai dengan nama proyek yang diinginkan (misalnya: ci-bootstrap). 4.	Buka file application/config/config.php, ubah bagian:
```
$config['base_url'] = 'http://localhost/cicrudanp/';
```
C. Menghubungkan CodeIgniter dengan Database 1.	Buka file application/config/database.php. 2.	Atur konfigurasi koneksi database:
```
'default' => [     'hostname' => 'localhost',     'username' => 'root',     'password' => '',     'database' => 'cicrudanp',     'dbdriver' => 'mysqli',     'dbprefix' => '',     'pconnect' => FALSE,     'db_debug' => (ENVIRONMENT !== 'production'),     'cache_on' => FALSE,     'cachedir' => '',     'char_set' => 'utf8',     'dbcollat' => 'utf8_general_ci',     'swap_pre' => '',     'encrypt' => FALSE,     'compress' => FALSE,     'stricton' => FALSE,     'failover' => [],     'save_queries' => TRUE ];
```
2. config.php mengatur tempat peletakan url untuk website

3. tidak ada di modul, bukan salahku.

4. Berisi berbagai fungsi tentang database, utamanya fungsi CRUD

5. kayaknya make get all siswa, terus data sqlnya dimasukin ke tabel, kayak kode biasa, atau mungkin make view lain
```
public function get_all_siswa() {
        return $this->db->get('student')->result();
    }
```
6. jadi dia memasukan THIS kedalam db yang sudah di config, menggunakan fungsi insert dengan nama tabel dan datanya
```
public function insert_siswa($data) {
        return $this->db->insert('student', $data);
    }
```
7. placeholdertext
```
public function update_siswa($id, $data) {
        return $this->db->where('id', $id)->update('siswa', $data);
    }
```

8. delete_siswa berfungsi untuk delete siswa

9. E. Menambah Tombol Edit & Hapus di siswa_view.php
Tambahkan kolom baru:
```
<th>Aksi</th>
```
Tambahkan baris berikut di dalam <tbody>:
```
<td>
    <a href="<?= site_url('siswa/edit/'.$row->id); ?>" class="btn btn-warning">Edit</a>
    <a href="<?= site_url('siswa/hapus/'.$row->id); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
</td>
```
Fitur edit dan hapus data telah berhasil ditambahkan. Ingin dilanjutkan dengan penambahan styling Bootstrap agar tampilannya lebih menarik? 😊

10. Bootstrap penting karena biar penampilannya bagus.

## praktikum

1. sudah

2. sudah

3. sudah

4. mohon maaf, index(), tambah(), dan simpan() tidak disediakan oleh modul

5. mohon maaf, pembuatan siswa_view.php dan edit_siswa.php tidak dijelaskan sama sekali

6. 27 eror php, semuanya blabla depreceated, mungkin garagara versi 3.0

7. saya pasrah

## refleksi

1.
```
Eduonix Blog Eduonix
\"

Eduonix
Hubungi kami
Kursus
Penawaran

Tutorial Pemrograman WebPelajari Cara Mengintegrasikan Bootstrap 4 di Codeigniter
Pelajari Cara Mengintegrasikan Bootstrap 4 di Codeigniter
Krishnakumar
Oleh
Krishnakumar
28 Mei 2018
7
FacebookTwitterPinterestWhatsAppLinkedinMix
Integrasikan Bootstrap-4
Hari ini, kita akan mempelajari cara mengintegrasikan Bootstrap-4 di CodeIgniter. Beberapa orang menghadapi masalah dengan konfigurasi bootstrap, karena mereka tidak dapat mengintegrasikan gaya bootstrap saat membuat kode karena konfigurasi Bootstrap yang rumit. Dalam artikel ini, kami akan menjelaskan secara rinci cara mengelola konfigurasi Bootstrap dengan CodeIgniter secara rinci. Setelah konfigurasi, kita dapat mengembangkan aplikasi web apa pun menggunakan kerangka kerja CodeIgniter. Kami berharap artikel ini membantu orang mempelajari cara menggunakan bootstrap dalam CodeIgniter framework.

Sebelum kita mulai membangun aplikasi, kita perlu mengunduh XAMPP, dan menyiapkan CodeIgniter di sistem Anda. Anda dapat melakukannya dengan menggunakan poin-poin di bawah ini:

1) Instal XAMPP di sistem Anda. XAMPP adalah lingkungan pengembangan PHP. Anda dapat mengunduh dan menginstal XAMPP dari https://www.apachefriends.org/index.html

2) Sekarang, Anda perlu menyiapkan versi CodeIgniter saat ini. Unduh framework CodeIgniter dari “https://codeigniter.com/download”. Buka folder htdocs, buat folder dengan nama CodeIgniter di lokasi “C:\xampp\htdocs” dan ekstrak semua file di folder CodeIgniter ini.

Untuk menguji penyiapan CodeIgniter, mulai layanan Apache dan MYSQL dan buka http://localhost/codeigniter, di mana Anda akan melihat bahwa CodeIgniter sedang berjalan.

Sekarang, Anda dapat membuat pesan sendiri untuk aplikasi Anda dengan mengedit file application/views/welcome_message.php. Periksa tangkapan layar di bawah ini untuk membantu Anda.

Selamat datang

3) Hapus file index.php dari URL di CodeIgniter

Untuk mengubah konfigurasi CodeIgniter, buka folder C:\xampp\htdocs\codeigniter dan buat file dengan ekstensi .htaccess dan tambahkan kode di bawah ini.

RewriteEngine on
RewriteBase /codeigniter
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]

4) Unduh Bootstrap 4 dari https://getbootstrap.com/ dan ekstrak foldernya. Anda akan melihat berkas JS dan CSS di folder bootstrap. Dalam artikel ini, kita akan menggunakan contoh Bootstrap 4 dari https://getbootstrap.com/docs/4.1/examples/starter-template/.

5) Buka folder CodeIgniter, yang terletak di folder “C:\xampp\htdocs” dan buat folder dengan nama “assets” dan pindahkan semua folder CSS dan JS dari folder Bootstrap 4 yang diekstrak ke folder assets.

Buat pengontrol:
Sekarang kita akan membuat beberapa halaman dalam aplikasi, jadi tidak perlu membuat pengontrol terpisah untuk setiap halaman. Kita membuat satu pengontrol untuk beberapa halaman. Kita menggunakan pernyataan if untuk memeriksa apakah halaman tersebut ada atau tidak di pengontrol.

Buka folder controller dan buat file pages.php, lalu tambahkan kode berikut:

<?php

class Pages extends CI_Controller{

function view($page = 'home')
{
if( !file_exists('application/views/pages/'.$page.'.php'))
{
show_404();
}

$this->load->view('pages/'.$page);

}

}

?>
Buat view
Mari buat halaman statis di View. Buka folder “C:\xampp\htdocs\codeigniter\application\views” dan buat folder dengan nama “Pages”. Kami menggunakan contoh bootstrap untuk membuat halaman statis di view.
Silakan lihat template awal dari https://getbootstrap.com/docs/4.1/examples/starter-template/.

Di dalam folder pages, buat file home.php, file about.php, dan file contact.php, lalu tambahkan kode yang diberikan di bawah ini:

a) Tambahkan kode di file home.php:

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../../../favicon.ico">

<title>Template Jumbotron untuk Bootstrap</title>

<!-- CSS inti Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Gaya khusus untuk template ini -->
<link href="jumbotron.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

<a class="navbar-brand" href="#">Navbar</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">

<ul class="navbar-nav mr-auto">

<li class="nav-item active">

<a class="nav-link" href="#">Beranda <span kelas="sr-hanya">(saat ini)</span></a>
</li>
<li kelas="nav-item">
<a class="nav-link" href="tentang">tentang</a>
</li>
<li class="nav-item">
<a class="nav-link" href="kontak">kontak</a>
</li>
</ul>

<form class="form-inline my-2 my-lg-0 pull-right">
<input class="form-control mr-sm-2" type="text" placeholder="Cari" aria-label="Cari">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
</form>
</div>
</nav>

<main role="main">

<!-- Jumbotron utama untuk pesan pemasaran utama atau ajakan bertindak -->
<div class="jumbotron">
<div class="container">
<center><h2 class="display-3">Selamat datang di beranda halaman</h2></pusat>
 </div>
 </div>



 <peran utama="utama">
 <div kelas="wadah">
 <!-- Contoh baris kolom -->
 <div kelas="baris">
 <div kelas="col-md-4">
 <h2>Judul</h2>
 <p>Donec id elit non mi porta gravida di eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Selesai ya. </p>
 <p><a class="btn btn-secondary" href="#" role="button">Lihat detail &raquo;</a></p>
 </div>
 <div kelas="col-md-4">
 <h2>Judul</h2>
 <p>Donec id elit non mi porta gravida di eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Selesai ya. </p>
 <p><a class="btn btn-secondary" href="#" role="button">Lihat detail &raquo;</a></p>
 </div>
 <div kelas="col-md-4">
 <h2>Judul</h2>
 <p>Sudah selesai. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
 <p><a class="btn btn-secondary" href="#" role="button">Lihat detail &raquo;</a></p>
 </div>
 </div>
 </div>
 <jam>

 </utama>

 <footer kelas="wadah">
 <p><tengah>&copy; Perusahaan 2017-2018</center></p>
</footer>

<!-- Inti JavaScript Bootstrap
==================================================== -->
<!-- Ditempatkan di akhir dokumen agar halaman dimuat lebih cepat -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
b) Tambahkan kode di berkas about.php:

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../../../favicon.ico">

<title>Jumbotron Templat untuk Bootstrap</title>

<!-- CSS inti Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Gaya khusus untuk templat ini -->
<link href="jumbotron.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Navbar</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="home">Beranda <span class="sr-only">(saat ini)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="tentang">tentang</a>
</li>
<li class="nav-item">
<a class="nav-link" href="kontak">hubungi kami </a>
</li>
</ul>

<form class="form-inline my-2 my-lg-0 pull-right">
<input class="form-control mr-sm-2" type="text" placeholder="Cari" aria-label="Cari">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Cari</button>
</form>
</div>
</nav>

<main role="main">

<!-- Jumbotron utama untuk pesan pemasaran utama atau ajakan bertindak -->
<div class="jumbotron">
<div class="container">
<h2 class="display-3">Selamat datang di halaman tentang</h2>
<p>Ini adalah templat untuk situs web pemasaran atau informasi sederhana. Ini mencakup keterangan besar yang disebut jumbotron dan tiga konten pendukung. Gunakan ini sebagai titik awal untuk membuat sesuatu yang lebih unik.</p>
<p><a class="btn btn-primary btn-lg" href="#" role="button">Pelajari lebih lanjut &raquo;</a></p>
</div>
</div>

<footer class="container">
<p><center>&copy; Perusahaan 2017-2018</center></p>
</footer>

<!-- Inti JavaScript Bootstrap
==================================================== -->
<!-- Ditempatkan di akhir dokumen agar halaman dimuat lebih cepat -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
c) Tambahkan kode di berkas contact.php

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../../../favicon.ico">

<title>Templat Jumbotron untuk Bootstrap</title>

<!-- CSS inti Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Gaya khusus untuk templat ini -->
<link href="jumbotron.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Navbar</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="home">Beranda <span class="sr-only">(saat ini)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="tentang">tentang</a>
</li>
<li class="nav-item">
<a class="nav-link" href="kontak">hubungi kami </a>
</li>
</ul>

<form class="form-inline my-2 my-lg-0 pull-right">
<input class="form-control mr-sm-2" type="text" placeholder="Cari" aria-label="Cari">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
</form>
</div>
</nav>

<main role="main">

<!-- Jumbotron utama untuk pesan pemasaran utama atau ajakan bertindak -->
<div class="jumbotron">
<div class="container">
<h2 class="display-3">Hubungi kami</h2>
<p>Ini adalah templat untuk situs web pemasaran atau informasi sederhana.
Ini mencakup keterangan besar yang disebut jumbotron dan tiga konten pendukung.
Gunakan ini sebagai titik awal untuk membuat sesuatu yang lebih unik.
</p>
</div>
</div>

<footer class="container">
<p><center>&copy; Perusahaan 2017-2018</center></p>
</footer>

<!-- Inti JavaScript Bootstrap
==================================================== -->
<!-- Ditempatkan di akhir dokumen agar halaman dimuat lebih cepat -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
Dalam proyek ini, kami menambahkan berkas CSS dan JS Bootstrap di dalam folder aset dan kami telah memberikan tautan untuk berkas CSS dan JS di halaman statis seperti yang diberikan di bawah ini.

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/js/bootstrap.min.js"></script>
Buat Rute:
Di localhost, kita menulis http://localhost/codeigniter/pages/view untuk mengakses file tampilan, yang memanggil objek halaman dan fungsi tampilan dari pengontrol pages.php.

Untuk membuat perubahan pada URL. Buka file “routes.php”, yang terletak di folder “C:\xampp\htdocs\codeigniter\application\config”.

Ubah pengontrol default dan tambahkan rute untuk halaman mana pun dengan menambahkan baris berikut:

$route['(:any)'] = 'pages/view/$1';

$route['default_controller'] = 'pages/view'; Dan sekarang Anda dapat menggunakan URL berikut
http://localhost/codeigniter/home,
http://localhost/codeigniter/about,
http://localhost/codeigniter/contact,

Buka localhost dan buka halaman home, about, dan contact dengan menggunakan URL di atas.
Silakan periksa tangkapan layar di bawah ini
```

2. [kayak gini](https://www.youtube.com/watch?v=nRouPRrFLUA)

3. memisahkan antara tampilan dan database lebih aman, dan menurut saya di LUAR modul ini arsitektur MVC sebenarnya seru dan menarik, saya kangen reactjs

4. model buat kode database, view buat kode tampilan, controller menggabungkan keduanya dan buat logika

5.
```
Ringkasan AI
Pelajari lebih lanjut
Routing CodeIgniter adalah proses penentuan controller dan method yang akan dieksekusi. Dalam CodeIgniter, terdapat dua jenis routing, yaitu Perutean Rute yang Ditentukan dan Perutean Otomatis. 
Perutean Rute yang Ditentukan Tentukan rute secara manual, Gunakan placeholder atau Regular Expressions, Tentukan metode yang sesuai dengan kata kerja HTTP. 
Perutean Otomatis Merutekan permintaan HTTP secara otomatis, Menjalankan metode pengontrol yang sesuai. 
Cara mengatur routing CodeIgniter 
Buka file app/Config/Routes.php
Tentukan kriteria perutean
Tentukan rute menggunakan placeholder atau Regular Expressions
Tentukan metode yang sesuai dengan kata kerja HTTP
Contoh perutean $route['jurnal'] = 'blog', $route['blog/joe'] = 'blogs/pengguna/34', $route['produk/(:apa saja)'] = 'pencarian_katalog/produk', $route['product/(:num)'] = 'pencarian_katalog/produk_berdasarkan_id/$1'. 
CodeIgniter adalah framework PHP yang digunakan untuk mengembangkan aplikasi web. CodeIgniter bersifat open source dan menggunakan pola desain Model-View-Controller (MVC). 
Tutorial Codeigniter #03: Memahami Konsep MVC dan Routing
30 Agu 2018 — Memahami Router pada Codeigniter Router pada Codeigniter bertugas untuk menentukan controller dan method/fungsi yang ak...

Petani Kode
Perutean URI — Dokumentasi CodeIgniter 4.5.5 - GitHub Pages
Terjemahan — Menetapkan Aturan Perutean. Aturan perutean ditetapkan dalam berkas app/Config/Routes. php . Di dalamnya Anda akan melih...
codeigniter4.github.io
Perutean URI — dokumentasi CodeIgniter 4.4.5
Terjemahan — Apa itu Perutean URI?  Perutean URI mengaitkan URI dengan metode pengontrol. CodeIgniter memiliki dua jenis routing. Sa...

codeigniter.com
Tampilkan semua
Tampilkan lainnya
```


