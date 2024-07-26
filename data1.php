<?php require 'database.php';

$siswa=new database();
$siswa->table='tb_siswa';
$siswa->field=['id','NIS','Nama','Alamat','Jurusan'];

$karyawan=new database();
$karyawan->table='tb_karyawan';
$karyawan->field=['id','NIK','Nama','Alamat','Jabatan','Gaji','Jenis_Kelamin'];

$user=new database();
$user->table='user';
$user->field=['id','Username','Password','Level'];

$sekolah=new database();
$sekolah->table='tb_praktikum1';
$sekolah->field=['ID','Kode_Kabupaten_Kota','Nama_Kabupaten_Kota','Kategori_Sekolah','Jumlah_Sekolah','Satuan','Tahun_Ajaran'];
?>