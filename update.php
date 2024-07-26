<?php
require 'data1.php';
require 'index.php';
    $nis=$_GET['id'];
    $datas=$siswa->getdataSingle($nis);

if($_POST){
$siswa->data=[$_POST['id'],$_POST['NIS'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jurusan']];
$siswa->update();
if($_POST>0){
    echo"<script>
    alert('Data Berhasil Diubah!');
    document.location.href='datasiswa.php';
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
                <a class="btn btn-sm btn-secondary float-end" href="datasiswa.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$datas["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>NIS</td>
            <td><input type="text" name="NIS" id="NIS" required="" value="<?= $datas['NIS'];?>"></td>
            </tr>
            <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" id="Nama"  required="" value="<?= $datas["Nama"];?>"></td>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" id="Alamat"  required="" value="<?= $datas["Alamat"];?>"></td>
            </tr>
            <tr>
            <td>Jurusan</td>
            <td><input type="text" name="Jurusan" id="Jurusan"  required="" value="<?= $datas["Jurusan"];?>"></td>
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