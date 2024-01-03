<?php
include __DIR__.'/../config/koneksi.php';

    class karyawan
    {
        public $idKaryawan;
        public $nama;
        public $jk;
        public $dob;
        public $alamat;
        public $jabatan;
        public $idDivisi;

        public static function getAll()
        {
            $query = 'select * from Karyawan as k join divisi d on k.id_divisi = d.id_divisi';
            $con = new koneksi();
            return mysqli_query($con->koneksi,$query);
        }

        public static function getAllDivisi()
        {
            $query = 'select * from divisi';
            $con = new koneksi();
            return mysqli_query($con->koneksi,$query);
        }

        public static function getByPrimaryKey($idKaryawan)
        {
            $query = "select * from Karyawan as k join divisi d on k.id_divisi = d.id_divisi where id_karyawan='$idKaryawan'";
            $con = new koneksi();
            return mysqli_query($con->koneksi,$query);
        }

        public function insert()
        {
            $query = "insert into Karyawan values(
                        '$this->idKaryawan',
                        '$this->nama',
                        '$this->jk',
                        '$this->dob',
                        '$this->alamat',
                        '$this->jabatan',
                        '$this->idDivisi'
                        )";
            $con = new koneksi();
            return mysqli_query($con->koneksi,$query);
        }

        public function update()
        {
            $query = "update karyawan set 
                nama_karyawan='$this->nama',
                jk_karyawan='$this->jk',
                dob_karyawan='$this->dob',
                alamat='$this->alamat',
                jabatan='$this->jabatan',
                id_divisi='$this->idDivisi'
                where id_karyawan='$this->idKaryawan' ";
            $con = new koneksi();
            return mysqli_query($con->koneksi,$query);
        }

        public function delete()
        {
            $query = "delete from karyawan where id_karyawan='$this->idKaryawan'";
            $con = new koneksi();
            return mysqli_query($con->koneksi,$query);
        }
    }