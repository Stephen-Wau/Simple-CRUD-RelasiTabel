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

<h3>Form Ubah Data Karyawan</h3>
<form action="View/karyawan/prosesUbah.php" method="GET">
    <div class="form-group">
        <!-- nilai value disini fungsinya untuk menampilkan data sebelumnya -->
        <!-- readonly berfungsi agar data yg ada didalam tidak bisa diubah -->
        <label for="">ID Karyawan</label>
        <input type="text" class="form-control" value="<?= $karyawan['id_karyawan'] ?>" name ="id_karyawan" placeholder="ID karyawan" required readonly>
    </div>
    <div class="form-group">
        <label for="">Nama Karyawan</label>
        <input type="text" class="form-control" value="<?= $karyawan['nama_karyawan'] ?>" name ="nama_karyawan" placeholder="Nama Karyawan" required>
    </div>
    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select class="form-control" name="jk_karyawan" required>
            <?php
            $sL = $karyawan['jk_karyawan'] === 'L' ? 'selected' : '';
            $sP = $karyawan['jk_karyawan'] === 'P' ? 'selected' : '';
            ?>
            <option <?= $sL ?> value="Laki-Laki">Laki-Laki</option>
            <option <?= $sP ?> value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir Karyawan</label>
        <input type="date" class="form-control" value="<?= $karyawan['dob_karyawan'] ?>" name="dob_karyawan" placeholder="Tanggal Lahir Karyawan" required>
    </div>
    <div class="form-group">
        <label for="">Alamat Karyawan</label>
        <!-- khusus textarea, agar data sebelumnya tampil, harus diletakan diantara tag textarea -->
        <textarea class="form-control" name="alamat" placeholder="Alamat Karyawan" cols="5" rows="3" required><?= $karyawan['alamat']?></textarea>
    </div>
    <div class="form-group">
        <label for="">Jabatan</label>
        <select class="form-control" name="jabatan" required>
            <?php
            $j1 = $karyawan['jabatan'] === 'Manager' ? 'selected' : '';
            $j2 = $karyawan['jabatan'] === 'Bendahara' ? 'selected' : '';
            $j3 = $karyawan['jabatan'] === 'Koordinator' ? 'selected' : '';
            $j4 = $karyawan['jabatan'] === 'Staf' ? 'selected' : '';
            $j5 = $karyawan['jabatan'] === 'Satpam' ? 'selected' : '';
            $j6 = $karyawan['jabatan'] === 'OB' ? 'selected' : '';
            ?>
            <option <?= $j1 ?> value="Manager">Manager</option>
            <option <?= $j2 ?> value="Bendahara">Bendahara</option>
            <option <?= $j3 ?> value="Koordinator">Koordinator</option>
            <option <?= $j4 ?> value="Staf">Staf</option>
            <option <?= $j5 ?> value="Satpam">Satpam</option>
            <option <?= $j6 ?> value="OB">OB</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Divisi</label>
        <select class="form-control" name="id_divisi">
            <option value="" selected disabled>Pilih Divisi</option>
            <?php
            $divisilist = Karyawan::getAllDivisi();
            while ($divisi = mysqli_fetch_assoc($divisilist)){
                $p = $divisi['id_divisi'] === $karyawan['id_divisi'] ? 'selected' : '';
                ?>
                <option <?= $p ?> value="<?= $divisi['id_divisi'] ?>"><?= $divisi['nama_divisi']?></option>
                <?php
            }
            ?>
        </select>
    </div>    

        <a href="index.php?page=homeKaryawan" class="btn btn-info">Kembali</a>
        <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#modalEdit">Simpan</button>

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