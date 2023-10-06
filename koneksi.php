<?php 

    // variabel database
    $namaServer = 'localhost';
    $namaPengguna = 'root';
    $kataSandi = '';
    $dbName = 'db_nokensoft';

    // koneksi ke database
    $koneksi = new mysqli($namaServer, $namaPengguna, $kataSandi, $dbName);

    if($koneksi->connect_error);