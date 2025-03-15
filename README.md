# die
mohon maaf tapi ni modul ga ngerti sama sekali, deskripsinya ga muat jadi di readme aja ya.
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

5. kayaknya make get all siswa, terus data sqlnya dimasukin ke tabel, kayak kode biasa, atau mungkin make view lain, coba aja kalau dikasih tau di modul, mungkin aku jadi pengen ikuti
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

8. jadi delete_siswa berfungsi untuk delete siswa wowwww

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

10. beneran, mohon maaf ya kalau saya terlihat males atau bosan, sombong dll. saya pusing ke sekolah, kemarin malesin banget cuman sholat dhuha doang. mungkin bapak ngejelasin lebih bener di sekolah, mungkin ini termasuk karma. tapi saya ga ngerti mau diapain lagi ni, modulnya kosong, dan ngeliat tutorial tidak sama, dan saya tidak ngerti sama sekali. dari tahap pertama langsung berubah, disuruh composer. mohon maaf ya pak. Bootstrap penting karena biar penampilannya bagus.

## praktikum

1. sudah

2. sudah

3. sudah

4. mohon maaf, index(), tambah(), dan simpan() tidak disediakan oleh modul

5. mohon maaf, pembuatan siswa_view.php dan edit_siswa.php tidak dijelaskan sama sekali

6. 27 eror php, semuanya blabla depreceated, mungkin garagara versi 3.0

7. saya pasrah

## refleksi

1. kebanyakan codeigniter, gaada dibilang "bootstrap" sama sekali di isinya, saya sampai lupa ini seharusnya make 22nya

2. saya mau google tadi tapi udah laper, mau tidur

3. memisahkan antara tampilan dan database lebih aman, dan menurut saya di LUAR modul ini arsitektur MVC sebenarnya seru dan menarik, saya kangen reactjs

4. model buat kode database, view buat kode tampilan, controller menggabungkan keduanya dan buat logika

5. Ringkasan AI
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


