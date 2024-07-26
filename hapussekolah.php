<?php
require 'data1.php';
    $id=$_GET['id'];
    $sekolah->delete($id);
if($sekolah){
    header('Location: datasekolah.php');
    }else{
        die("Gagal Menghapus...");
    }
   
?>