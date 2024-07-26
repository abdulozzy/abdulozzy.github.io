<?php
require 'data1.php';
require 'index.php';
    $username=$_GET['id'];
    $u=$user->getdataSingle($username);

if($_POST){

$user->data=[$_POST['id'],$_POST['Username'],$_POST['Password'],$_POST['Level']];
$user->update();
if($_POST>0){
    echo"<script>
    alert('Data Berhasil Diubah!');
    document.location.href='datauser.php';
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
                <a class="btn btn-sm btn-secondary float-end" href="datauser.php">Kembali</a>
            </div>
            <div class="card-body">

    <h1 class="tengah">Ubah Data User</h1>
    <form action="" method="post" enctype="multipart/form-data">\
        <input type="hidden" name="id" value="<?=$u["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>Username</td>
            <td><input type="text" name="Username" id="Username" required="" value="<?= $u["Username"];?>"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="text" name="Password" id="Password"  required="" value="<?= $u["Password"];?>"></td>
            <tr>
            <td>Level</td>
            <td><input type="text" name="Level" id="Level"  required="" value="<?= $u["Level"];?>"></td>
            </tr>
            <tr>
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
