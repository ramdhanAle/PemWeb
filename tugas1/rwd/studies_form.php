<?php
// 1. Ambil data level untuk dropdown (TK, SD, dst)
$obj_level = new Level();
$data_level = $obj_level->index();

// 2. Logika Edit: Cek apakah ada ID di URL
$id_edit = $_GET['id'] ?? null;
$row = [];
if ($id_edit) {
    $obj_study = new Study();
    $row = $obj_study->getStudy($id_edit); // Ambil data lama berdasarkan ID
}
?>

<div class="container-fluid mt-4">
    <div class="card bg-dark border-secondary shadow-lg">
        <div class="card-header bg-secondary text-white py-3" style="--bs-bg-opacity: .2;">
            <h5 class="mb-0 fw-bold"><?= $id_edit ? 'Edit' : 'Tambah' ?> Riwayat Studi</h5>
        </div>
        <div class="card-body">
            <form action="controller/studiesController.php" method="POST">
                <input type="hidden" name="id" value="<?= $id_edit ?>">

                <div class="mb-3">
                    <label class="form-label text-secondary">Nama Sekolah/Kampus</label>
                    <input type="text" name="nama" class="form-control bg-dark text-white border-secondary" value="<?= $row['nama'] ?? '' ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-secondary">Level Pendidikan</label>
                    <select name="idlevel" class="form-select bg-dark text-white border-secondary" required>
                        <option value="" class="text-secondary">-- Pilih Level --</option>
                        <?php foreach ($data_level as $lv): ?>
                            <?php $sel = ($lv['id'] == ($row['idlevel'] ?? '')) ? 'selected' : ''; ?>
                            <option value="<?= $lv['id'] ?>" <?= $sel ?>><?= $lv['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-secondary">Tahun Lulus</label>
                        <input type="number" name="tahun_lulus" class="form-control bg-dark text-white border-secondary" value="<?= $row['tahun_lulus'] ?? '' ?>" placeholder="Contoh: 2024">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-secondary">Foto Sekolah (Nama File)</label>
                        <input type="text" name="foto_sekolah" class="form-control bg-dark text-white border-secondary" value="<?= $row['foto_sekolah'] ?? '' ?>" placeholder="sekolah.jpg">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label text-secondary">Keterangan</label>
                    <textarea name="keterangan" class="form-control bg-dark text-white border-secondary" rows="3"><?= $row['keterangan'] ?? '' ?></textarea>
                </div>

                <div class="text-end border-top border-secondary pt-3 mt-4">
                    <a href="index.php?hal=studies_list" class="btn btn-outline-secondary px-4">Batal</a>
                    <button type="submit" name="proses" value="<?= $id_edit ? 'ubah' : 'simpan' ?>" class="btn btn-info px-4 fw-bold">
                        <?= $id_edit ? 'Update Data' : 'Simpan Data' ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>