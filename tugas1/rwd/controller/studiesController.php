<?php
session_start();
include_once '../koneksi.php';
include_once '../models/Study.php';

// 1. Tangkap data dari POST (Simpan/Ubah)
// Pakai ?? null supaya kalau kuncinya gak ada, gak muncul Warning
$nama = $_POST['nama'] ?? null;
$idlevel = $_POST['idlevel'] ?? null;
$keterangan = $_POST['keterangan'] ?? null;
$tahun = $_POST['tahun_lulus'] ?? null;
$foto = $_POST['foto_sekolah'] ?? null;
$id = $_POST['id'] ?? null;
$tombol = $_POST['proses'] ?? null;

// 2. Tangkap data dari GET (Hapus)
$id_hapus = $_GET['id_hapus'] ?? null;

$obj = new Study();

// 3. Logika Eksekusi
if (isset($tombol)) {
    $data = [$nama, $idlevel, $keterangan, $tahun, $foto];
    if ($tombol == 'simpan') {
        $obj->simpan($data);
    } elseif ($tombol == 'ubah') {
        $data[] = $id; // Tambah ID di akhir array untuk WHERE id=?
        $obj->ubah($data);
    }
} elseif (isset($id_hapus)) {
    $obj->hapus($id_hapus);
}

// Balik ke list
header('location:../index.php?hal=studies_list');
