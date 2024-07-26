<?php
    require_once 'data1.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $sekolah->data=['',$_POST['Kode_Kabupaten_Kota'],$_POST['Nama_Kabupaten_Kota'],$_POST['Kategori_Sekolah'],$_POST['Jumlah_Sekolah'],$_POST['Satuan'],$_POST['Tahun_Ajaran']];
            $sekolah->table='tb_praktikum1';
            $sekolah->save();
            header('Location: datasekolah.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data Sekolah</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasekolah.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0" class="mx-auto">
        <tr>
        <tr>
            <td>Kode Kabupaten Kota</td>
            <td><input type="text" name="Kode_Kabupaten_Kota" id="Kode_Kabupaten_Kota"></td>
            </tr>
            <tr>
            <td>Nama Kabupaten Kota</td>
            <td><input type="text" name="Nama_Kabupaten_Kota" id="Nama_Kabupaten_Kota"></td>
            <tr>
            <td>Kategori Sekolah</td>
            <td><input type="text" name="Kategori_Sekolah" id="Kategori_Sekolah"></td>
            </tr>
            <tr>
            <td>Jumlah Sekolah</td>
            <td><input type="text" name="Jumlah_Sekolah" id="Jumlah_Sekolah"></td>
            </tr>
            <tr>
            <td>Satuan</td>
            <td><input type="text" name="Satuan" id="Satuan"></td>
            </tr>
            <tr>
            <td>Tahun Ajaran</td>
            <td><input type="text" name="Tahun_Ajaran" id="Tahun_Ajaran"></td>
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
