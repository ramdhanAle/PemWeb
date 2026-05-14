<?php
class Produk
{
    // member 1: variabel (property) untuk menyimpan koneksi database
    private $koneksi;

    // member 2: konstruktor (otomatis jalan saat object dibuat)
    public function __construct()
    {
        global $dbh; // ambil variabel $dbh dari file koneksi (koneksi.php)
        $this->koneksi = $dbh; // simpan koneksi ke dalam property class
    }

    // member 3: fungsi untuk menampilkan semua data produk (READ)
    public function index()
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.idjenis
                ORDER BY produk.id DESC";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    // fungsi untuk menyimpan data produk (CREATE)
    public function simpan($data)
    {
        // query insert dengan placeholder (?) untuk keamanan (anti SQL Injection)
        $sql = "INSERT INTO produk (kode,nama,kondisi,harga,stok,idjenis,foto)
                VALUES (?,?,?,?,?,?,?)";

        // prepare statement → query disiapkan dulu sebelum dieksekusi
        $ps = $this->koneksi->prepare($sql);

        // execute → menjalankan query dengan data yang dikirim dari form
        // $data harus urut sesuai tanda tanya di query
        $ps->execute($data);
    }

    // fungsi untuk update data produk (UPDATE)
    public function ubah($data)
    {
        $sql = "UPDATE produk SET kode=?, nama=?, kondisi=?, harga=?, stok=?, idjenis=?, foto=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    // fungsi untuk menghapus data produk (DELETE)
    public function hapus($id)
    {
        $sql = "DELETE FROM produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    // fungsi untuk mengambil data produk berdasarkan id (READ)
    public function getProduk($id)
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.idjenis WHERE produk.id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function cari($keyword)
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.idjenis
                WHERE produk.nama LIKE '%$keyword%' 
                OR jenis.nama LIKE '%$keyword%' 
                OR produk.kondisi LIKE '%$keyword%'";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }
}