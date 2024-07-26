<?php
require "data1.php";
require 'index.php';

$data_sekolah=$sekolah->getdata();
if(isset($_POST['Cari'])){
    $data_sekolah= $sekolah->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DATA SEKOLAH</h3>
    <a class="btn btn-sm btn-primary float-end"  href="tambahsekolah.php">Tambah Sekolah</a>
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
        <th>Kode Kabupaten Kota</th>
        <th>Nama Kabupaten Kota</th>
        <th>Kategori Sekolah</th>
        <th>Jumlah Sekolah</th>
        <th>Satuan</th>
        <th>Tahun Ajaran</th>
        <th>Aksi</th>
    </tr>
<?php
foreach($data_sekolah as $row) :?>
    <tr>
        <td><?= $row['Kode_Kabupaten_Kota']; ?></td>
        <td><?= $row['Nama_Kabupaten_Kota']; ?></td>
        <td><?= $row['Kategori_Sekolah']; ?></td>
        <td><?= $row['Jumlah_Sekolah']; ?></td>
        <td><?= $row['Satuan']; ?></td>
        <td><?= $row['Tahun_Ajaran']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning"  href="updatesekolah.php?id=<?=$row["ID"];?>">ubah</a>

        <a class="btn btn-sm btn-danger"  href="hapussekolah.php?id=<?=$row["ID"];?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>