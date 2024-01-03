<h1>Form Tambah Data Divisi</h1>
<form action="View/divisi/prosesTambah.php" method="GET">
    <div class="form-group">
      <label for="">ID Divisi</label>
      <input type="text" name="id_divisi"  class="form-control" placeholder="ID Divisi" required>
    </div>
    <div class="form-group">
      <label for="">Nama Divisi</label>
      <input type="text" name="nama_divisi"  class="form-control" placeholder="Nama Divisi" required>
    </div>
    <div class="form-group">
      <label for="">Nama Manager</label>
      <input type="text" name="nama_manager"  class="form-control" placeholder="Nama Manager" required>
    </div>
    <div class="form-group">
        <label for="">Penempatan</label>
        <select class="form-control" name="penempatan" required>
            <option value="Lantai 1">Lantai 1</option>
            <option value="Lantai 2">Lantai 2</option>
            <option value="Lantai 3">Lantai 3</option>
            <option value="Lantai 4">Lantai 4</option>
            <option value="Parkiran">Parkiran</option>
            <option value="Gudang">Gudang</option>
            <option value="Dapur">Dapur</option>
        </select>
    </div>
    <p>
        <a href="index.php?page=homeDivisi" class="btn btn-info">Kembali</a>
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