<?php
    require_once 'data1.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $karyawan->data=['',$_POST['NIK'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jabatan'],$_POST['Gaji'],$_POST['Jenis_Kelamin']];
            $karyawan->table='tb_karyawan';
            $karyawan->save();
            header('Location: datakaryawan.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data Karyawan</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datakaryawan.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0" class="mx-auto">
        <tr>
            <tr>
            <td>NIK</td>
            <td><input type="text" name="NIK" id="NIK"></td>
            </tr>
            <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" id="Nama"></td>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" id="Alamat"></td>
            </tr>
            <tr>
            <td>Jabatan</td>
            <td><input type="text" name="Jabatan" id="Jabatan"></td>
            </tr>
            <td>Gaji</td>
            <td><input type="text" name="Gaji" id="Gaji"></td>
            </tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin"></td>
            </tr>
            <tr>
                <td class="text-center"><button type="submit">Simpan</td>
            </tr>
        </tr>
    </table>
    </form>
    </div>
    </div>
    </section>
    </div>
