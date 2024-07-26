<?php
require 'data1.php';
require 'index.php';
$data_karyawan=$karyawan->getdata();
if(isset($_POST['Cari'])){
    $data_karyawan= $karyawan->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DATA KARYAWAN</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahkaryawan.php">Tambah Karyawan</a>
<form action="" method="post">
    <div class="row">
        <div class="col-4">
        <input type="text" class="form-control" name="keyword" id="keyword"> 
        </div>
        <div class="col-1">
        <input type="submit" class="btn btn-sm btn-success" name="Cari" value="Cari"><br>
        </div>
    </div>

<table class="table table-hover mt-3">
    <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Gaji</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($data_karyawan as $row) :?>
    <tr>
        <td><?= $row['NIK']; ?></td>
        <td><?= $row['Nama']; ?></td>
        <td><?= $row['Alamat']; ?></td>
        <td><?= $row['Jabatan']; ?></td>
        <td><?= $row['Gaji']; ?></td>
        <td><?= $row['Jenis_Kelamin']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning" href="Updatekaryawan.php?id=<?=$row["id"];?>">ubah</a>

        <a class="btn btn-sm btn-danger" href="hapuskaryawan.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>