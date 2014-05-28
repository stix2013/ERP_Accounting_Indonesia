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
        Create
    </h1>
</div>  

<p>Halaman ini terdiri dari beberapa bagian yaitu
<ul>
    <li>Kolom kiri berisi form ubah topik training, yang terdiri dari
        <ul>
            <li>Learning Title, judul topik training</li>
            <li>Objective: targat yang ingin dicapai dengan diadakannya training  topik tersebut</li>
            <li>Outline: materi yang disampaikan</li>
            <li>Target Participant: jenis peserta yang disarankan mengikuti training topik tersebut</li>
            <li>Duration: lama training (dalam satuan jam)</li>
            <li>Type: jenis training</li>
            <li>Pre Requisite: topik training lain yang harus sudah diambil sebelumnya</li>
        </ul>
        Ubah data di form tersebut, lalu klik Save.
    </li>
    <li>Kolom kanan berisi </li>
    <ul>
        <li>Learning Calendar, link ke halaman utama training</li>
        <li>List By Subject, link ke daftar topik training</li>
        <li>List By Date, link ke daftar training pada bulan berjalan</li>
    </ul>
</ul>
</ul>


<img src="/images/man/m1_iLearningHolding_update.jpg">