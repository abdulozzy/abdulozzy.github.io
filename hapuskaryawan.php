<?php
require 'data1.php';
    $nik=$_GET['id'];
    $karyawan->delete($nik);
if($karyawan){
    header('Location: datakaryawan.php');
    }else{
        die("Gagal Menghapus...");
    }
   
?>