<?php

class koneksi
{
    private $Host = 'localhost';
    private $Username = 'root';
    private $Password = '';
    private $dbName = 'tas_pweb_2020';
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->Host,$this->Username,$this->Password,$this->dbName);
    }
}