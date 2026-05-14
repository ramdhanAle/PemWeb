<?php
include_once '../dbkoneksi.php'; // 1. Panggil koneksi (naik satu folder)
include_once '../models/Produk.php'; // 2. Panggil model Produk

// 3. Inisialisasi objek agar baris $obj_produk->cari tidak error
$obj_produk = new Produk();

// Tangkap data dari form pencarian
$tombol_cari = $_GET['proses_cari']; 

if(isset($tombol_cari)){
    $keyword = $_GET['keyword'];
    
    // Panggil fungsi cari di model
    $obj_produk->cari($keyword);

    // Redirect kembali ke halaman cari dengan membawa keywordnya
    header('location:../index.php?hal=produk_cari&keyword='.$keyword);
}
?>