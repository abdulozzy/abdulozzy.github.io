<?php
require "data1.php";
require 'index.php';


$data_user=$user->getdata();
if(isset($_POST['Cari'])){
    $data_user= $user->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DATA USER</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahuser.php">Tambah User</a>
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
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>
<?php
foreach($data_user as $row) :?>
    <tr>
        <td><?= $row['Username']; ?></td>
        <td><?= $row['Password']; ?></td>
        <td><?= $row['Level']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning"  href="updateuser.php?id=<?=$row["id"];?>">ubah</a>
        <a class="btn btn-sm btn-danger" href="hapususer.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>