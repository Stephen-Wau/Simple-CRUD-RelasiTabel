<?php

// Panggil settingan database
include_once('../../model/Divisi.php');
$divisi = new Divisi();

// Ambil semua parameter yg dikirim lewat form
$divisi->idDivisi = $_GET['id_divisi'];
$divisi->nama = $_GET['nama_divisi'];
$divisi->manager = $_GET['nama_manager'];
$divisi->penempatan = $_GET['penempatan'];

$divisi->insert();

// Redirect
header('location: /index.php?page=homeDivisi');

