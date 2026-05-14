<?php
include_once 'koneksi.php'; // memanggil file koneksi database (isi $dbh)
include_once 'models/Produk.php'; // memanggil class Produk (model)

// buat array scalar untuk judul kolom tabel
$ar_judul = ['NO', 'KODE', 'NAMA', 'KATEGORI', 'KONDISI', 'HARGA', 'STOK', 'FOTO', 'ACTION'];

// membuat object dari class Produk
$obj_produk = new Produk();

// memanggil fungsi index() untuk mengambil semua data produk dari database
$rs = $obj_produk->index();
?>

<?php
if (isset($_SESSION['MEMBER'])) {
    $ar_judul = ['NO', 'KODE', 'NAMA', 'KATEGORI', 'KONDISI', 'HARGA', 'STOK', 'FOTO', 'ACTION'];
} else {
    $ar_judul = ['NO', 'KODE', 'NAMA', 'KATEGORI', 'KONDISI', 'HARGA', 'STOK', 'FOTO'];
}
$obj_produk = new Produk();
$rs = $obj_produk->index();
?>

<h3>Daftar Produk</h3>
<?php if (isset($_SESSION['MEMBER'])) { ?>
    <a href="index.php?hal=produk_form" class="btn btn-primary">Tambah</a>
<?php } ?>

<!-- tombol untuk pindah ke halaman form tambah produk -->
<a href="index.php?hal=produk_form" class="btn btn-primary">Tambah</a>

<table class="table table-striped">
    <thead>
        <tr>
            <?php
            // looping array judul untuk membuat header tabel
            foreach ($ar_judul as $jdl) {
                echo '<th>' . $jdl . '</th>'; // tampilkan setiap judul kolom
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
                <?php if (isset($_SESSION['MEMBER'])) { ?> 
                <td>
                    <form method="POST" action="controller/produkController.php">
                        <a href="index.php?hal=produk_detail&id=<?= $produk['id'] ?>"
                            title="Detail Produk" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="index.php?hal=produk_form&id=<?= $produk['id'] ?>"
                            title="Ubah Produk" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <?php if ($_SESSION['MEMBER']['role'] != 'staff') { ?>
                            <button type="submit" title="Hapus Produk" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin ingin di Hapus?')">
                                <i class="bi bi-trash"></i>
                            </button>
                            <input type="hidden" name="id" value="<?= $produk['id'] ?>" />
                        <?php } ?>
                    </form>
                </td>
                <?php } ?>
            </tr>
        <?php
            $no++; // increment nomor urut
        }
        ?>
    </tbody>
</table>