<?php
include_once 'koneksi.php'; // memanggil file koneksi database (isi $dbh)
include_once 'models/Produk.php'; // memanggil class Produk (model)

// buat array scalar untuk judul kolom tabel
$ar_judul = ['NO', 'KODE', 'NAMA', 'KONDISI', 'HARGA', 'STOK', 'FOTO'];

// membuat object dari class Produk
$obj_produk = new Produk();

// memanggil fungsi index() untuk mengambil semua data produk dari database
$rs = $obj_produk->index();
?>

<h3>Daftar Produk</h3>

<!-- tombol untuk pindah ke halaman form tambah produk -->
<a href="index.php?hal=produk_form" class="btn btn-primary">Tambah</a>

<table class="table table-striped">
    <thead>
        <tr>
            <?php
            // looping array judul untuk membuat header tabel
            foreach ($ar_judul as $jdl) {
                echo '<th>' .$jdl. '</th>'; // tampilkan setiap judul kolom
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1; // nomor urut
        foreach ($rs as $produk) { // looping data hasil query
        ?>
            <tr>
                <td><?= $no ?></td> <!-- tampilkan nomor urut -->
                <td><?= $produk['kode'] ?></td> <!-- tampilkan kode produk -->
                <td><?= $produk['nama'] ?></td> <!-- tampilkan nama produk -->
                <td><?= $produk['kondisi'] ?></td> <!-- tampilkan kondisi produk -->

                <!-- format harga jadi rupiah -->
                <td>Rp. <?= number_format($produk['harga'], 0, ',', '.') ?></td>

                <td><?= $produk['stok'] ?></td> <!-- tampilkan stok -->

                <td width="15%">
                    <?php
                    // cek apakah ada foto
                    if (!empty($produk['foto'])) {
                    ?>
                        <!-- kalau ada, tampilkan gambar -->
                        <img src="img/<?= $produk['foto'] ?>" width="50%" />
                    <?php
                    } else {
                    ?>
                        <!-- kalau tidak ada, tampilkan default -->
                        <img src="img/nophoto.jpg" width="50%" />
                    <?php } ?>
                </td>
            </tr>
        <?php
            $no++; // increment nomor urut
        }
        ?>
    </tbody>
</table>