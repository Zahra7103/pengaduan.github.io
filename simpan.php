<?php
include 'koneksi.php';

$nik =$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telepon'];

$sql="INSERT INTO masyarakat (nik,nama,username,password,telp) VALUES ('$nik','$nama','$user','$pass','$telp')";

$hasil = mysqli_query($conn, $sql);

if ($hasil){
echo "Input Berhasil";
}else{
echo "Input Gagal";
echo $sql;
}
mysqli_close($conn);
?>