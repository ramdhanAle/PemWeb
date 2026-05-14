<?php
session_start();
include_once '../koneksi.php';
include_once '../models/Level.php';

$nama = $_POST['nama'] ?? null;
$id = $_POST['id'] ?? null;
$tombol = $_POST['proses'] ?? null;
$id_hapus = $_GET['id_hapus'] ?? null;

$obj = new Level();

if (isset($tombol)) {
    $data = [$nama];
    if ($tombol == 'simpan') $obj->simpan($data);
    elseif ($tombol == 'ubah') {
        $data[] = $id;
        $obj->ubah($data);
    }
} elseif (isset($id_hapus)) {
    $obj->hapus($id_hapus);
}

header('location:../index.php?hal=level_list');
