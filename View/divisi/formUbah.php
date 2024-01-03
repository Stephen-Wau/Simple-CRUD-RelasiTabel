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
include_once('model\Divisi.php');

//Eksekusi Query
$divisilist = Divisi::getByPrimaryKey($idDivisi);
$divisi = [];
while($dvs = mysqli_fetch_assoc($divisilist)){
    $divisi = $dvs;
}
if(count($divisi) === 0){
    header( 'location: index.php');
}
?>

<h1>Form Edit Data Divisi</h1>
<form action="View/divisi/prosesUbah.php" method="get">
    <div class="form-group">
        <label for="">ID Divisi</label>
        <input type="text" class="form-control" value="<?= $divisi['id_divisi'] ?>" name="id_divisi" placeholder='ID Divisi' required readonly/>
    </div>
    <div class="form-group">
        <label for="">Nama Divisi</label>
        <input type="text" class="form-control" value="<?= $divisi['nama_divisi'] ?>" name="nama_divisi" placeholder='Nama Divisi' required/>
    </div>
    <div class="form-group">
        <label for="">Nama Manager</label>
        <input type="text" class="form-control" value="<?= $divisi['nama_manager'] ?>" name="nama_manager" placeholder='Nama Manager' required/>
    </div>
    <div class="form-group">
        <label for="">Penempatan</label>
        <select class="form-control" name="penempatan" required>
            <?php
            $l1 = $divisi['penempatan'] === 'Lantai 1' ? 'selected' : '';
            $l2 = $divisi['penempatan'] === 'Lantai 2' ? 'selected' : '';
            $l3 = $divisi['penempatan'] === 'Lantai 3' ? 'selected' : '';
            $l4 = $divisi['penempatan'] === 'Lantai 4' ? 'selected' : '';
            $prk = $divisi['penempatan'] === 'Parkiran' ? 'selected' : '';
            $gdg = $divisi['penempatan'] === 'Gudang' ? 'selected' : '';
            $dpr = $divisi['penempatan'] === 'Dapur' ? 'selected' : '';
            ?>
            <option <?= $l1 ?> value="Lantai 1">Lantai 1</option>
            <option <?= $l2 ?> value="Lantai 2">Lantai 2</option>
            <option <?= $l3 ?> value="Lantai 3">Lantai 3</option>
            <option <?= $l4 ?> value="Lantai 4">Lantai 4</option>
            <option <?= $prk ?> value="Parkiran">Parkiran</option>
            <option <?= $gdg ?> value="Gudang">Gudang</option>
            <option <?= $dpr ?> value="Dapur">Dapur</option>
        </select>
    </div>
    <p>
        <a href="index.php?page=homeDivisi" class="btn btn-info">Kembali</a>
        <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#modalEdit">Simpan</button>
    </p>

    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fa fa-pencil" id="exampleModalLabel"> Konfirmasi Ubah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body btn-info">
                    Yakin ingin mengubah data ini ? 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Ubah</button>
                </div>
                </div>
            </div>
        </div>

</form>