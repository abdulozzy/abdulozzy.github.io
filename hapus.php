<?php
require 'data1.php';
    $id=$_GET['id'];
    $siswa->delete($id);
if($siswa){
    header('Location: datasiswa.php');
    }else{
        die("Gagal Menghapus...");
    }
   
?>