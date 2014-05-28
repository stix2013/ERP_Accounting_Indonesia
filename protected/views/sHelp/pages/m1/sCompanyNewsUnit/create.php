<?php
$this->breadcrumbs = array(
    'Help' => array('/m1/help'),
);

$this->menu = array(
    array('label' => 'Home', 'icon' => 'home', 'url' => array('/help')),
);
?>

<div class="page-header">
    <h1>
        <i class="fa fa-user fa-fw"></i>
        Create Business Unit News 
    </h1>
</div>	

<p>Halaman ini terdiri dari
    beberapa bagian yaitu</li>
<ul>
    <li>Bagian kiri berisi form tambah berita unit bisnis, yang terdiri dari
        <ul>
            <li>Title, judul berita berupa link ke halaman preview berita</li>
            <li>Priority, prioritas</li>
            <li>Tags</li>
            <li>Approved, status persetujuan</li>
            <li>Publish Date, tanggal terbit berita.  Jika input ini di klik maka akan keluar tampilan seperti <img src="/images/man/select_date_time.jpg">. Pilih tanggal untuk menetapkan tanggal seleksi, dan gunakan slider hour dan minute untuk menetapkan waktu seleksi, lalu klik Done</li>
            <li>Expire Date, tanggal berita selesai diterbitkan/ditampilkan</li>
            <li>Content, isi berita. Pada input content terdapat tool sederhana untuk mem format isi berita. Formatting yang disediakan adalah
                <ul>
                    <li>Jenis teks: normal, heading 1, heading 2, heading 3</li>
                    <li>Warna teks</li>
                    <li>Style: bold, italic, underline</li>
                    <li>List: ordered (dengan angka), not ordered (dengan bullet)</li>
                    <li>Indentation</li>
                    <li>Insert link dan image</li>
                </ul>
            </li>
        </ul>
        <br>Untuk menambah berita unit bisnis baru, masukkan data berita di form tersebut, 
        lalu klik Create
    </li>
    <li><p>Kolom kanan berisi
        <ul>
            <li>Home, link ke daftar berita unit bisnis</li>
        </ul>
    </li>
</ul>
<BR>

<img src="/images/man/m1_sCompanyNewsUnit_create.jpg">