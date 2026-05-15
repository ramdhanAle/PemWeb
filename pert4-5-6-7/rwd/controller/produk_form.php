<?php
include_once 'koneksi.php'; // memanggil koneksi database ($dbh)
include_once 'models/Jenis.php'; // memanggil model Jenis (buat ambil data jenis)

// membuat object dari class Jenis
$obj_jenis = new Jenis();

// ambil semua data jenis dari database (buat dropdown)
$rs = $obj_jenis->index();

// array kondisi produk (untuk radio button)
$ar_kondisi = ['Baru', 'Second'];
// ambil id dengan aman
$id = $_GET['id'] ?? null;
$obj_produk = new Produk();
if (!empty($id)) {
    $row = $obj_produk->getProduk($id);
} else {
    $row = [];
}

// helper biar ga ribet isset
function val($row, $key)
{
    return isset($row[$key]) ? $row[$key] : '';
}
?>

<div class="container px-5 my-5">
    <h3>Form Produk</h3>

    <!-- form kirim data ke controller -->
    <form method="POST" action="controller/produk.php">

        <!-- input kode produk -->
        <div class="form-floating mb-3">
            <input class="form-control" name="kode" id="kodeProduk" type="text" placeholder="Kode Produk" required value="<?= val($row, 'kode') ?>" />
            <label for="kodeProduk">Kode Produk</label>
        </div>

        <!-- input nama produk -->
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" id="namaProduk" type="text" placeholder="Nama Produk" required value="<?= val($row, 'nama') ?>" />
            <label for="namaProduk">Nama Produk</label>
        </div>

        <!-- KONDISI (radio button) -->
        <div class="mb-3">
            <label class="form-label d-block">Kondisi Produk</label>
            <?php foreach ($ar_kondisi as $kondisi) { ?>
                <div class="form-check form-check-inline">
                    <!-- radio button kondisi -->
                    <input class="form-check-input" type="radio" name="kondisi" value="<?= $kondisi ?>" required <?= (val($row, 'kondisi') === $kondisi) ? 'checked' : '' ?>>
                    <label class="form-check-label"><?= $kondisi ?></label>
                </div>
            <?php } ?>
        </div>

        <!-- input harga -->
        <div class="form-floating mb-3">
            <input class="form-control" name="harga" id="hargaProduk" type="number" placeholder="Harga Produk" required value="<?= val($row, 'harga') ?>" />
            <label for="hargaProduk">Harga Produk</label>
        </div>

        <!-- input stok -->
        <div class="form-floating mb-3">
            <input class="form-control" name="stok" id="stokProduk" type="number" placeholder="Stok Produk" required value="<?= val($row, 'stok') ?>" />
            <label for="stokProduk">Stok Produk</label>
        </div>

        <!-- DROPDOWN JENIS -->
        <div class="form-floating mb-3">
            <select class="form-select" name="idjenis" id="jenisProduk" required>
                <option value="">-- Pilih Jenis --</option>

                <?php foreach ($rs as $jenis) { ?>
                    <!-- value = id jenis, text = nama jenis -->
                    <option value="<?= $jenis['id'] ?>" <?= (val($row, 'idjenis') == $jenis['id']) ? 'selected' : '' ?>>
                        <?= $jenis['nama'] ?>
                    </option>
                <?php } ?>

            </select>
            <label for="jenisProduk">Jenis Produk</label>
        </div>

        <!-- input foto (sementara masih text, bukan upload) -->
        <div class="form-floating mb-3">
            <input class="form-control" name="foto"
                value="<?= val($row, 'foto') ?>"
                type="text" placeholder="Foto Produk">
            <label>Foto Produk</label>
        </div>

        <!-- tombol aksi -->
        <div class="text-center">
            <?php if (empty($id)) { ?>
                <button class="btn btn-primary" name="proses" value="simpan">
                    Simpan
                </button>
            <?php } else { ?>
                <button class="btn btn-success" name="proses" value="ubah">
                    Ubah
                </button>
                <input type="hidden" name="idx" value="<?= $id ?>">
            <?php } ?>

            <a href="index.php?hal=produk_list" class="btn btn-info">
                Kembali
            </a>
        </div>
    </form>
</div>