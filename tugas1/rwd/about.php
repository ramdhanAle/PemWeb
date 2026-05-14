<?php
?>

<div class="container mt-4">
  <h3 class="mb-4 text-white"><i class="bi bi-person-badge me-2"></i>About Me</h3>

  <div class="accordion accordion-flush shadow shadow-lg" id="accordionAbout" style="border-radius: 15px; overflow: hidden;">

    <div class="accordion-item bg-dark border-secondary">
      <h2 class="accordion-header">
        <button class="accordion-button bg-dark text-info fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="bi bi-controller me-2"></i> Hobby
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAbout">
        <div class="accordion-body text-light opacity-75">
          Hobi utama saya adalah <strong class="text-white">Parkour Tengah Malam</strong> di atas lemari dan mengejar bayangan di tembok. Selain itu, saya sangat menikmati sesi "Zoomies" sesaat setelah menggunakan kotak pasir. Jika sedang santai, saya suka memperhatikan burung dari balik jendela sambil mengeluarkan suara aneh.
        </div>
      </div>
    </div>

    <div class="accordion-item bg-dark border-secondary">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-dark text-info fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="bi bi-egg-fried me-2"></i> Favorite Menu
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionAbout">
        <div class="accordion-body text-light opacity-75">
          Menu favorit saya sangat spesifik:
          <ul class="mt-2">
            <li><strong class="text-white">Tuna dalam Kaleng:</strong> Wajib ada setiap pagi.</li>
            <li><strong class="text-white">Cemilan Creamy:</strong> Hadiah kalau saya tidak mencakar sofa.</li>
            <li><strong class="text-white">Rumput Kucing (Catnip):</strong> Untuk relaksasi maksimal.</li>
          </ul>
          <em class="text-secondary small">Catatan: Aing Macan!</em>
        </div>
      </div>
    </div>

    <div class="accordion-item bg-dark border-secondary">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-dark text-info fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="bi bi-people me-2"></i> Pengalaman Organisasi
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionAbout">
        <div class="accordion-body text-light opacity-75">
          Meskipun kucing, saya punya jiwa kepemimpinan:
          <ol class="mt-2">
            <li><strong class="text-white">Ketua Geng Kucing Komplek Sebelah:</strong> Berhasil mengamankan wilayah tempat sampah dari gangguan kucing Mujair liar.</li>
            <li><strong class="text-white">Anggota Senior "The Sleepy Society":</strong> Berkontribusi dalam riset tidur 18 jam sehari tanpa gangguan.</li>
            <li><strong class="text-white">Divisi Keamanan Rumah:</strong> Bertanggung jawab membangunkan majikan tepat jam 4 pagi untuk minta makan.</li>
          </ol>
        </div>
      </div>
    </div>

  </div>
</div>

<style>
/* Custom CSS untuk menghilangkan background biru saat tombol diklik */
.accordion-button:not(.collapsed) {
    background-color: #2d2d2d !important; /* Abu-abu slate gelap */
    color: #0dcaf0 !important; /* Warna cyan/info */
    box-shadow: inset 0 -1px 0 rgba(255,255,255,.125);
}
.accordion-button::after {
    filter: invert(1); /* Biar panah accordion jadi putih */
}
</style>