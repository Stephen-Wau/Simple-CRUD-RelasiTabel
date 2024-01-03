<?php
//1. panggil settingan database
include_once ('../../model/Karyawan.php');
$krwn = new karyawan();

$krwn->idKaryawan = $_GET['id_karyawan'];
$krwn->nama = $_GET['nama_karyawan'];
$krwn->jk = $_GET['jk_karyawan'];
$krwn->dob = $_GET['dob_karyawan'];
$krwn->alamat = $_GET['alamat'];
$krwn->jabatan = $_GET['jabatan'];
$krwn->idDivisi = $_GET['id_divisi'];

$krwn->update(); //manggil database insert di class mahasiswa

header('location: /index.php?page=homeKaryawan');

