<?php
//1. panggil settingan database
include_once('../../model/Karyawan.php');
$krywn = new karyawan();

//2. ambil semua parameter yg dikirim lewat form
$krywn->idKaryawan = $_GET['id_karyawan'];
$krywn->nama = $_GET['nama_karyawan'];
$krywn->jk = $_GET['jk_karyawan'];
$krywn->dob = $_GET['dob_karyawan'];
$krywn->alamat = $_GET['alamat'];
$krywn->jabatan = $_GET['jabatan'];
$krywn->idDivisi = $_GET['id_divisi'];

$krywn->insert(); //manggil database insert di class mahasiswa

header( 'location: /index.php?page=homeKaryawan');


