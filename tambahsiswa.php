<?php

    require_once 'data1.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $siswa->data=['',$_POST['NIS'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jurusan']];
            $siswa->save();

            header('Location: datasiswa.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data Siswa</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasiswa.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0" class="mx-auto">
        <tr>
            <tr>
            <td>NIS</td>
            <td><input type="text" name="NIS" id="NIS"></td>
            </tr>
            <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" id="Nama"></td>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" id="Alamat"></td>
            </tr>
            <tr>
            <td>Jurusan</td>
            <td><input type="text" name="Jurusan" id="Jurusan"></td>
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