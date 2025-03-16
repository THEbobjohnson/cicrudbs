# ci crud bootstrap
mohon maaf, kode di modul rusak, banyak kode saya ubah dengan AI.
kodenya masih rusak
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

3. mengganti config database.php

4. Berisi berbagai fungsi tentang database, utamanya fungsi CRUD

5. kayaknya make get all siswa, terus data sqlnya dimasukin ke tabel, kayak kode biasa, atau mungkin make view lain
```
public function get_all_student() {
        return $this->db->get('student')->result();
    }
```
6. jadi dia memasukan THIS kedalam db yang sudah di config, menggunakan fungsi insert dengan nama tabel dan datanya
```
public function insert_student($data) {
        return $this->db->insert('student', $data);
    }
```
7. jadi dia memasukan THIS kedalam db yang sudah di config, menggunakan fungsi update dengan nama tabel dan datanya
```
public function update_student($id, $data) {
        return $this->db->where('id', $id)->update('student', $data);
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
    <a href="<?= site_url('student/edit/'.$row->id); ?>" class="btn btn-warning">Edit</a>
    <a href="<?= site_url('student/delete/'.$row->id); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?');">Delete</a>
</td>
```
Fitur edit dan hapus data telah berhasil ditambahkan. Ingin dilanjutkan dengan penambahan styling Bootstrap agar tampilannya lebih menarik? 😊

10. Bootstrap penting karena biar penampilannya bagus.

ini absen 2 xiipplg btw
