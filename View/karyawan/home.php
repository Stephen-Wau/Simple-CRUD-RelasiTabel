<h1>Data Karyawan</h1>
<h6><?= "Today : ".date('j F Y');?></h6>
<h6><?php
    date_default_timezone_set("Asia/Jakarta");
    echo "The time is " . date("h:i:sa");
    ?>
</h6>
<a class="btn btn-primary" href="../../index.php?page=registerKaryawan">Tambah Data Karyawan</a>
<p></p>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
        <tr>
            <th>ID Karyawan</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Divisi</th>
            <th>Action</th>
        </tr>
        <?php
        include_once('model/Karyawan.php');
        $krywnlist = Karyawan::getAll();
        while($karyawan = mysqli_fetch_array($krywnlist)){
            $tanggalLahir = date('d F Y', strtotime($karyawan['dob_karyawan']));
            ?>
            <tr>
                <td><?=$karyawan['id_karyawan']?></td>
                <td><?=$karyawan['nama_karyawan']?></td>
                <td><?=$karyawan['jk_karyawan'] === 'L' ? 'Laki-Laki' : 'Perempuan'?></td>
                <td><?=$tanggalLahir?></td>
                <td><?=$karyawan['alamat']?></td>
                <td><?=$karyawan['jabatan']?></td>
                <td><?='['.$karyawan['id_divisi'].'] '.$karyawan['nama_divisi']?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="../../index.php?page=editKaryawan&id=<?= $karyawan['id_karyawan'] ?>">
                        <i class="fa fa-edit"> Ubah</i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="../../index.php?page=deleteKaryawan&id=<?= $karyawan['id_karyawan'] ?>">
                        <i class="fa fa-trash"> Hapus</i>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>