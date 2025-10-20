<?php
include 'koneksi.php'; 
//mengambil nilai post
$id_anggota=$_POST['id_anggota'];
$nama_anggota=$_POST['nama_anggota'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];

//query
$query_simpan="insert into tbanggota (idanggota,nama,jeniskelamin,alamat) values ('$id_anggota','$nama_anggota','$jk','$alamat')";
$simpan=mysqli_query($db,$query_simpan);

//cek
if ($simpan) {
	echo "berhasil <br>";
}
else{
	echo "gagal <br>";
}
 ?>