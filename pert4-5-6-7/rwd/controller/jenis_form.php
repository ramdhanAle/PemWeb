<?php
include_once 'koneksi.php'; // memanggil file koneksi database (meskipun di form ini belum dipakai langsung)
?>

<div class="container px-5 my-5"> <!-- container bootstrap untuk layout -->
    <h3>Form Jenis Produk</h3> <!-- judul halaman/form -->

    <!-- form untuk input data jenis produk -->
    <form method="POST" action="controller/jenis.php"> <!-- data dikirim ke controller -->

        <div class="form-floating mb-3"> <!-- komponen bootstrap (input + label floating) -->
            <input 
                class="form-control" 
                name="nama" <!-- name digunakan untuk menangkap data di $_POST -->
                id="namaJenis" 
                type="text" 
                placeholder="Nama Jenis" 
                required <!-- validasi wajib diisi -->
            />
            <label for="namaJenis">Nama Jenis</label> <!-- label untuk input -->
        </div>

        <div class="text-center"> <!-- untuk posisi tombol di tengah -->
            
            <!-- tombol submit (kirim data ke controller) -->
            <button 
                class="btn btn-primary" 
                name="proses" <!-- name ini akan dibaca di controller -->
                type="submit" 
                value="simpan" <!-- value menentukan aksi (simpan) -->
            >
                Simpan
            </button>

            <!-- tombol kembali ke halaman list -->
            <a href="index.php?hal=jenis_list" class="btn btn-info">
                Kembali
            </a>

        </div>

    </form>
</div>