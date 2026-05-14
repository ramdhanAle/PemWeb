<?php
class Bank{
    protected $norek;
    public $nama;
    private $saldo;

    static $jml = 0;
    const BANK = "Bank Syariah NF";

    public function __construct ($no, $nasabah, $saldo)
    {
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }

    public function setor($uang)
    {
        $this->saldo += $uang;
    }

    public function tarik($uang)
    {
        $this->saldo -= $uang;
    }

    public function cetak(){
        echo '<b><u>' .self ::BANK . '</u></b><br>';
        echo 'No Rekening : ' . $this->norek . '<br>';
        echo 'Nama Nasabah : ' . $this->nama . '<br>';
        echo 'Saldo : Rp. ' .number_format($this->saldo,0, ',', '.') . '<br>';
        echo '<hr>';
    }
}
?>