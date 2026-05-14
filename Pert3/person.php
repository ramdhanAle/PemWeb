<?php

class Person
{
    //atribut
    public $name;
    public $gender;

    //method
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    //method cetak
    public function cetak()
    {
        echo 'Nama : ' . $this->name . '<br>';
        echo 'Jenis Kelamin : ' . $this->gender . '<br>';
    }
}

?>