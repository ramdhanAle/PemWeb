<?php
$ar_judul = ['NO', 'KODE', 'NAMA', 'KONDISI', 'HARGA', 'STOK', 'FOTO', 'ACTION'];
$obj_produk = new Produk();
$keyword = $_GET['keyword'];
$rs = $obj_produk->cari($keyword);
?>