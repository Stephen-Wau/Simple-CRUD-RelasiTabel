<h1>Data Divisi</h1>
<h6><?= "Today : ".date('j F Y');?></h6>
<h6><?php
    date_default_timezone_set("Asia/Jakarta");
    echo "The time is " . date("h:i:sa");
    ?>
</h6>
<a class="btn btn-primary" href="../../index.php?page=registerDivisi">Tambah Data Divisi</a>
<p></p>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped table-sm">
        <tr>
            <th>ID Divisi</th>
            <th>Nama Divisi</th>
            <th>Nama Manager</th>
            <th>Penempatan</th>
            <th>Action</th>
        </tr>
        <?php
        include_once('model/Divisi.php');
        $divisiList = Divisi::getAll();
        while($divisi = mysqli_fetch_assoc($divisiList)){
            ?>
            <tr>
                <td><?=$divisi['id_divisi']?></td>
                <td><?=$divisi['nama_divisi']?></td>
                <td><?=$divisi['nama_manager']?></td>
                <td><?=$divisi['penempatan']?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="../../index.php?page=editDivisi&id=<?=$divisi['id_divisi']?>">
                        <i class="fa fa-edit">Edit</i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="../../index.php?page=deleteDivisi&id=<?=$divisi['id_divisi']?>">
                        <i class="fa fa-trash">Delete</i>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

