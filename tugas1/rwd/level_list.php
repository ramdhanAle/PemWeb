<?php
// Buat objek dari class Level
$obj_level = new Level();
$data_level = $obj_level->index();
?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
        <h3>Data Level Pendidikan</h3>
        <?php if(isset($_SESSION['MEMBER'])): ?>
            <a href="index.php?hal=level_form" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-circle-fill"></i> Tambah Level
            </a>
        <?php endif; ?>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0"> <table class="table table-hover table-dark table-hover">
                <thead class="thead" style="background-color: #2d2d2d;">
                    <tr>
                        <th width="10%" class="text-center">No</th>
                        <th width="65%">Nama Level Pendidikan</th>
                        <th width="25%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($data_level as $row){
                    ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td class="text-center">
                            <?php if(isset($_SESSION['MEMBER'])): ?>
                                <a href="index.php?hal=level_form&id=<?= $row['id'] ?>" 
                                   class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="controller/levelController.php?id_hapus=<?= $row['id'] ?>" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Yakin ingin menghapus level <?= $row['nama'] ?>?')"
                                   title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </a>
                            <?php else: ?>
                                <span class="badge bg-secondary">No Access</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>