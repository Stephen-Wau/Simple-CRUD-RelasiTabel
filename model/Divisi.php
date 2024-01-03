<?php
include __DIR__.'/../config/koneksi.php';
class Divisi
{
    public $idDivisi;
    public $nama;
    public $manager;
    public $penempatan;

    public static function getAll()
    {
        $query = 'select * from divisi';
        $con = new koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public static function getByPrimaryKey($id)
    {
        $query = "select * from divisi where id_divisi='$id'";
        $con = new koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function insert()
    {
        $query = "insert into divisi values(
                    '$this->idDivisi',
                    '$this->nama',
                    '$this->manager',
                    '$this->penempatan')";
        $con = new koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function update()
    {
        $query = "update divisi set
                    nama_divisi='$this->nama',
                    nama_manager='$this->manager',
                    penempatan='$this->penempatan'
                    where id_divisi='$this->idDivisi' ";
        $con = new koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function delete()
    {
        $query = "delete from divisi where id_divisi='$this->idDivisi' ";
        $con = new koneksi();
        return mysqli_query($con->koneksi,$query);
    }
}