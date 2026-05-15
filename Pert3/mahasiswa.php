<?php

require_once 'person.php';

class Mahasiswa extends Person
{
    public $semester;
    public $jurusan;

    public function __construct($semester, $jurusan, $name, $gender)
    {
        parent::__construct($name, $gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }

    public function cetak()
    {
        parent::cetak();
        echo 'Semester : ' . $this->semester . '<br>';
        echo 'Jurusan : ' . $this->jurusan . '<br>';
        echo '<hr>';
    }
}

?>