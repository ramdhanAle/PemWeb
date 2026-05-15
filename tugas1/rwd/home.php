<div class="container mt-4">
  <h3 class="mb-4">Profil Saya</h3>

  <div class="card mb-3 shadow-sm" style="max-width: 740px;">
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
        <?php
        // Tampilkan foto kucing jika ada, jika tidak tampilkan nophoto
        $foto_kucing = 'img/meong.jpg';
        if (file_exists($foto_kucing)) {
        ?>
          <img src="<?= $foto_kucing ?>" class="img-fluid rounded-circle shadow" alt="Foto Profil Kucing" style="object-fit: cover; width: 150px; height: 150px;">
        <?php
        } else {
        ?>
          <img src="img/meong.png" class="img-fluid rounded-circle" alt="No Photo">
        <?php } ?>
      </div>

      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-info fw-bold">Halo, Aing Meong!</h5>

          <p class="card-text text-light">
            Saya adalah seekor kucing domestik yang saat ini sedang belajar pemrograman web. Saya sangat suka tidur, mengejar laser merah, dan tentu saja nunggu whiskas dari babu.
          </p>

          <hr class="border-secondary opacity-50">

          <p class="card-text">
            <strong class="text-white">Keahlian:</strong>
            <span class="badge bg-success">Tidur</span>
            <span class="badge bg-warning text-dark">Mageran</span>
            <span class="badge bg-info text-dark">Nunggu Whiskas</span>
          </p>

          <p class="card-text"><small class="text-secondary">Status: Sedang menunggu whiskas</small></p>
        </div>
      </div>
    </div>
  </div>
</div>