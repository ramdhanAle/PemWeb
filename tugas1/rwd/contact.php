<?php
// Halaman Contact Me - Sosmed Si Meong (5 Poin Tugas 1)
?>

<div class="container mt-4 mb-5">
  <h3 class="mb-4 text-white"><i class="bi bi-chat-dots me-2"></i>Contact Me</h3>

  <div class="card-group shadow-lg overflow-hidden" style="border-radius: 20px; border: 1px solid #444;">

    <div class="card bg-dark border-secondary">
      <div class="p-4 text-center">
        <i class="bi bi-instagram text-danger" style="font-size: 4rem; filter: drop-shadow(0 0 10px rgba(220, 53, 69, 0.3));"></i>
      </div>
      <div class="card-body text-center">
        <h5 class="card-title text-white">Instagram</h5>
        <p class="card-text text-secondary small">Follow keseharian saya tidur dan makan lewat foto estetik.</p>
        <a href="https://instagram.com" target="_blank" class="btn btn-outline-danger btn-sm px-4">@meong_coding</a>
      </div>
    </div>

    <div class="card bg-dark border-secondary border-start-0 border-end-0">
      <div class="p-4 text-center">
        <i class="bi bi-tiktok text-light" style="font-size: 4rem; filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));"></i>
      </div>
      <div class="card-body text-center">
        <h5 class="card-title text-white">TikTok</h5>
        <p class="card-text text-secondary small">Video Zoomies jam 3 pagi dan tips ngoding sambil rebahan.</p>
        <a href="https://tiktok.com" target="_blank" class="btn btn-outline-light btn-sm px-4">@daily_meong</a>
      </div>
    </div>

    <div class="card bg-dark border-secondary">
      <div class="p-4 text-center">
        <i class="bi bi-github text-info" style="font-size: 4rem; filter: drop-shadow(0 0 10px rgba(13, 202, 240, 0.3));"></i>
      </div>
      <div class="card-body text-center">
        <h5 class="card-title text-white">GitHub</h5>
        <p class="card-text text-secondary small">Cek repo project saya: "Auto-Feeder-System.php".</p>
        <a href="https://github.com" target="_blank" class="btn btn-outline-info btn-sm px-4">github.com/meong</a>
      </div>
    </div>

  </div>
</div>

<style>
  /* Efek hover biar keren */
  .card-group .card {
    transition: all 0.3s ease;
  }

  .card-group .card:hover {
    background-color: #2d2d2d !important;
    /* Berubah jadi abu agak terang saat di-hover */
    transform: translateY(-5px);
    z-index: 10;
  }
</style>