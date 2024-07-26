<?php
require "data1.php";
require 'index.php';

$data_siswa=$siswa->getdata();
if(isset($_POST['Cari'])){
    $data_siswa= $siswa->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DATA SISWA</h3>
    <a class="btn btn-sm btn-primary float-end"  href="tambahsiswa.php">Tambah Siswa</a>
<form action="" method="post">
<div class="row">
        <div class="col-4">
        <input type="text" class="form-control" name="keyword" id="keyword"> 
        </div>
        <div class="col-1">
        <input type="submit" class="btn btn-sm btn-success" name="Cari" value="Cari"><br>
        </div>
    </div>
<table class="table table-hover mt-3" >
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
<?php
foreach($data_siswa as $row) :?>
    <tr>
        <td><?= $row['NIS']; ?></td>
        <td><?= $row['Nama']; ?></td>
        <td><?= $row['Alamat']; ?></td>
        <td><?= $row['Jurusan']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning"  href="Update.php?id=<?=$row["id"];?>">ubah</a>

        <a class="btn btn-sm btn-danger"  href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>