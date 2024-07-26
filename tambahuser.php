<?php
    require_once 'data1.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $user->data=['',$_POST['Username'],$_POST['Password'],$_POST['Level']];
            $user->table='user';
            $user->save();
            header('Location: datauser.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data User</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datauser.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0"  class="mx-auto">
        <tr>
            <tr>
            <td>Username</td>
            <td><input type="text" name="Username" id="Username"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="text" name="Password" id="Password"></td>
            <tr>
            <td>Level</td>
            <td><input type="text" name="Level" id="Level"></td>
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