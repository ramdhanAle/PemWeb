<?php
class Study
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function index()
    {
        $sql = "SELECT studies.*, level.nama AS nama_level 
                FROM studies 
                INNER JOIN level ON level.id = studies.idlevel
                ORDER BY studies.id DESC";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        return $ps->fetchAll();
    }

    // --- INI FUNGSI YANG BIKIN MERAH TADI ---
    public function getStudy($id)
    {
        $sql = "SELECT * FROM studies WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        return $ps->fetch();
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO studies (nama, idlevel, keterangan, tahun_lulus, foto_sekolah) 
                VALUES (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE studies SET nama=?, idlevel=?, keterangan=?, tahun_lulus=?, foto_sekolah=? 
                WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM studies WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
