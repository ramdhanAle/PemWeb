<?php

require('person.php');

class Dosen extends Person
{
    public $nidn;
    public $gelar;

    public function __construct($nidn, $gelar, $name, $gender)
    {
        parent::__construct($name, $gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }

    public function cetak()
    {
        parent::cetak();
        echo 'NIDN : ' . $this->nidn . '<br>';
        echo 'Gelar : ' . $this->gelar . '<br>';
        echo '<hr>';
    }
}

?>