<?php
require 'data1.php';
require 'index.php';
    $nik=$_GET['id'];
    $k=$karyawan->getdataSingle($nik);

if($_POST){

$karyawan->data=[$_POST['id'],$_POST['NIK'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jabatan'],$_POST['Gaji'],$_POST['Jenis_Kelamin']];
$karyawan->update();
if($_POST>0){
    echo"<script>
    alert('Data Berhasil Diubah!');
    document.location.href='datakaryawan.php';
    </script>";
}else{
    echo"Gagal Ubah Data";
}
}
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Data Karyawan</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datakaryawan.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$k["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>NIK</td>
            <td><input type="text" name="NIK" id="NIK" required="" value="<?= $k["NIK"];?>"></td>
            </tr>
            <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" id="Nama"  required="" value="<?= $k["Nama"];?>"></td>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" id="Alamat"  required="" value="<?= $k["Alamat"];?>"></td>
            </tr>
            <tr>
            <td>Jabatan</td>
            <td><input type="text" name="Jabatan" id="Jabatan"  required="" value="<?= $k["Jabatan"];?>"></td>
            </tr>
            <tr>
            <td>Gaji</td>
            <td><input type="text" name="Gaji" id="Gaji"  required="" value="<?=$k["Gaji"];?>"></td>
            </tr>
            <tr>
            <td>Jenis_Kelamin</td>
            <td><input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin"  required="" value="<?=$k["Jenis_Kelamin"];?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</td>
            </tr>
        </tr>
    </table>
    </form>
            </div>
        </div>
</section>
    </div>