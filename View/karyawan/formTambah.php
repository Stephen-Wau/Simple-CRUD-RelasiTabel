<h2>Form Tambah Data Karyawan</h2>
<form action="View/karyawan/prosesTambah.php" method="GET">
    <!-- div ini adlh aturan dalam boostrap -->
    <div class="form-group">
        <input type="text" class="form-control" name ="id_karyawan" placeholder="ID karyawan" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name ="nama_karyawan" placeholder="Nama Karyawan" required>
    </div>
    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select name="jk_karyawan" class="form-control" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Tanggal lahir</label>
        <input type="date" class="form-control" name="dob_karyawan" placeholder="Tanggal Lahir Karyawan" required>
    </div>
    <div class="form-group">
        <label for="">Alamat Karyawan</label>
        <textarea class="form-control" name="alamat" placeholder="Alamat Karyawan" cols="5" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="">Jabatan</label>
        <select class="form-control" name="jabatan" required>
            <option value="Manager">Manager</option>
            <option value="Bendahara">Bendahara</option>
            <option value="Koordinator">Koordinator</option>
            <option value="Staf">Staf</option>
            <option value="Satpam">Satpam</option>
            <option value="OB">OB</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Divisi</label>
        <select class="form-control" name="id_divisi">
            <option value="" selected disabled>Pilih Divisi</option>
            <?php
            include 'model/Divisi.php';
            $divisilist = Divisi::getAll();
            while ($divisi = mysqli_fetch_assoc($divisilist)){
                ?>
                <option value="<?= $divisi['id_divisi'] ?>"><?= $divisi['nama_divisi']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <p>
        <a class="btn btn-info" href="index.php?page=homekaryawan">Kembali</a>
        <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#modalTambah">Simpan</button>
    </p>

    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fa fa-save" id="exampleModalLabel"> Konfirmasi Simpan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body btn-info">
                    Yakin ingin menambahkan data ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </div>
            </div>
        </div>

</form>

