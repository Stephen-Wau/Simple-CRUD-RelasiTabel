<?php
$idKaryawan = 0;
//memeriksa apakah ada parameter dgn nama nim
if(isset($_POST['id'])){
    $idKaryawan = $_POST['id'];
}else{
    header( 'location: index.php');
}

//panggil settingan database
include_once('../../model/Karyawan.php');
$krywn = new karyawan();
//ambil semua parameter yg dikirim lewat form
$krywn->idKaryawan = $idKaryawan;
$krywn->delete();

header( 'location: /index.php?page=homeKaryawan');