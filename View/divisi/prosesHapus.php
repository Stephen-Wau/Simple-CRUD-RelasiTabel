<?php
$idDivisi = 0;
//memeriksa apakah ada parameter dgn nama idDivisi
if(isset($_POST['id'])){
    $idDivisi = $_POST['id'];
}else{
    header( 'location: index.php?page=homeDivisi');
}

//panggil settingan database
include_once ('../../model/Divisi.php');
$dvs = new Divisi();
//ambil semua parameter yg dikirim lewat form
$dvs->idDivisi = $idDivisi;
$dvs->delete();

//redirect
header('location: /index.php?page=homeDivisi');