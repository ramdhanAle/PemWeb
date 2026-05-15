<?php
// Buat objek Study
$obj_study = new Study();
$rs = $obj_study->index();
?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mt-3">
        <h3>Riwayat Studi</h3>
        <?php if (isset($_SESSION['MEMBER'])): ?>
            <a href="index.php?hal=studies_form" class="btn btn-primary">Tambah Data</a>
        <?php endif; ?>
    </div>

    <table class="table-dark table-hover">
        <tbody>
            <?php foreach ($rs as $row): ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td>
                        <a href="index.php?hal=studies_detail&id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Detail</a>

                        <?php if (isset($_SESSION['MEMBER'])): ?>
                            <a href="index.php?hal=studies_form&id=<?= $row['id'] ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                            <a href="controller/studiesController.php?id_hapus=<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>