<?php
include_once '../koneksi.php'; // memanggil koneksi database ($dbh)
include_once '../models/Produk.php'; // memanggil class Produk (model)

// 1. menangkap data dari form (input user)
$kode = $_POST['kode']; // ambil kode produk
$nama = $_POST['nama']; // ambil nama produk
$kondisi = $_POST['kondisi']; // ambil kondisi (Baru / Second)
$harga = $_POST['harga']; // ambil harga
$stok = $_POST['stok']; // ambil stok
$idjenis = $_POST['idjenis']; // ambil id jenis (relasi ke tabel jenis)
$foto = $_POST['foto']; // ambil nama file foto
$tombol = $_POST['proses']; // ambil aksi tombol (simpan / ubah / hapus)

// 2. simpan semua data ke dalam array (urut sesuai query di model)
$data = [
    $kode,   // ? ke-1
    $nama,   // ? ke-2
    $kondisi,// ? ke-3
    $harga,  // ? ke-4
    $stok,   // ? ke-5
    $idjenis,// ? ke-6
    $foto,   // ? ke-7
];

// 3. buat object dari class Produk
$obj_produk = new Produk();

// 4. eksekusi berdasarkan tombol yang diklik
switch ($tombol) {

    case 'simpan':
        // jika tombol simpan → insert data baru
        $obj_produk->simpan($data);
        break;

    case 'ubah':
        // jika tombol ubah → update data
        // tambahkan id (idx) ke array sebagai parameter ke-8
        $data[] = $_POST['idx']; // hidden field dari form edit
        $obj_produk->ubah($data);
        break;

    case 'hapus':
        // jika tombol hapus → delete data berdasarkan id
        $obj_produk->hapus($_POST['id']); // id dari hidden field
        break;

    default:
        // jika tidak ada aksi yang sesuai
        header('location:index.php?hal=produk_list');
        break;
}

// 5. setelah semua proses selesai → redirect ke halaman produk_list
header('Location: ../index.php?hal=produk_list');
exit; // menghentikan script
?>