<?php
$idKaryawan = 0;
//memeriksa apakah ada parameter dgn nama nim
if(isset($_GET['id'])){
    $idKaryawan = $_GET['id'];
}else{
    header( 'location: index.php');
}

//kondisi nim ada
//panggil settingan database
include_once('model/Karyawan.php');

//Eksekusi Query
$krywnlist = karyawan::getByPrimaryKey($idKaryawan);
$karyawan = [];
while($krywn = mysqli_fetch_assoc($krywnlist)){
    $karyawan = $krywn;
}
if(count($karyawan) === 0){
    header( 'location: index.php');
}
?>

<div class="kotak">
    <h3>Apakah anda ingin menghapus data ini?</h3>
    <form action="View/karyawan/prosesHapus.php" method="POST">
        <table class="table table-borderless table-sm">
            <tr>
                <td>ID Divisi</td>
                <td><?= $karyawan['id_karyawan'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $karyawan['nama_karyawan'] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $karyawan['jk_karyawan'] ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $karyawan['dob_karyawan'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $karyawan['alamat']?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><?= $karyawan['jabatan']?></td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td><?= $karyawan['id_divisi']?></td>
            </tr>
        </table>
        <p></p>
        <input type="hidden" name="id" value="<?= $karyawan['id_karyawan'] ?>">
        <a href="index.php?page=homeKaryawan" class="btn btn-info">Kembali</a>
        <input type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalhapus" value="Hapus">

        <!-- The Modal -->
        <div class="modal fade" id="modalhapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fa fa-trash" id="exampleModalLabel"> Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body btn-info">
                    Yakin ingin menghapus data ini ? 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
                </div>
            </div>
        </div>

    </form>
</div>