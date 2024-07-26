<?php
require 'data1.php';
    $username=$_GET['id'];
    $user->delete($username);
if($user){
    header('Location: datauser.php');
    }else{
        die("Gagal Menghapus...");
    }
   
?>