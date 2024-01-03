<?php
$idDivisi = 0;
//memeriksa apakah ada parameter dgn nama idDivisi
if(isset($_GET['id'])){
    $idDivisi = $_GET['id'];
}else{
    header( 'location: index.php');
}

//kondisi nim ada
//panggil settingan database
include_once('model/Divisi.php');

//Eksekusi Query
$dvsList = Divisi::getByPrimaryKey($idDivisi);
$divisi = [];
while($dvs = mysqli_fetch_assoc($dvsList)){
    $divisi = $dvs;
}
if(count($divisi) === 0){
    header( 'location: index.php');
}
?>

<div class="kotak">
    <h3>Apakah anda ingin menghapus data ini?</h3>
    <form action="../../View/divisi/prosesHapus.php" method="POST">
        <table class="table table-borderless table-sm">
            <tr>
                <td>ID Divisi</td>
                <td><?= $divisi['id_divisi'] ?></td>
            </tr>
            <tr>
                <td>Nama Divisi</td>
                <td><?= $divisi['nama_divisi'] ?></td>
            </tr>
            <tr>
                <td>Nama Manager</td>
                <td><?= $divisi['nama_manager'] ?></td>
            </tr>
            <tr>
                <td>Penempatan</td>
                <td><?= $divisi['penempatan'] ?></td>
            </tr>
        </table>
        <p></p>
        <input type="hidden" name="id" value="<?= $divisi['id_divisi'] ?>">
        <a href="../../index.php" class="btn btn-info">Kembali</a>
        <input type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalhapus" value="Hapus">

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
