<?php
$id_edit = $_GET['id'] ?? null;
$row = [];
if ($id_edit) {
    $obj = new Level();
    $row = $obj->getLevel($id_edit);
}
?>
<div class="container mt-4">
    <div class="card bg-dark border-secondary shadow-lg col-md-6 mx-auto">
        <div class="card-header bg-secondary text-white fw-bold">Form Level Pendidikan</div>
        <div class="card-body">
            <form action="controller/levelController.php" method="POST">
                <input type="hidden" name="id" value="<?= $id_edit ?>">
                <div class="mb-3">
                    <label class="form-label">Nama Level</label>
                    <input type="text" name="nama" class="form-control bg-dark text-white border-secondary" value="<?= $row['nama'] ?? '' ?>" required>
                </div>
                <button type="submit" name="proses" value="<?= $id_edit ? 'ubah' : 'simpan' ?>" class="btn btn-info">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>