<?php

include "koneksi.php";

$tgl = $_POST['tanggal'];
$nik =$_POST['nik'];
$laporan = $_POST['lapor'];
$status = $_POST['status'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){
	$sql="INSERT INTO pengaduan(id_pengaduan, tgl_pengaduan, nik, isi_laporan, foto, status)
	VALUES(null,'$tgl','$nik','$laporan','$fotobaru','$status')";
	
	$hasil = mysqli_query($conn, $sql);
	
if($hasil){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data yang anda Input sukses');window.location='http://localhost/pengaduan_masyarakat/index.php?page=pengaduan'</script>"; // Redirect ke halaman pengaduan
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Data yang anda Input Gagal');window.location='http://localhost/pengaduan_masyarakat/index/index.php?page=pengaduan'</script>"; // Redirect ke halaman pengaduan
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Gambar yang anda Input Gagal');window.location='http://localhost/pengaduan_masyarakat/index.php?page=pengaduan'</script>"; // Redirect ke halaman pengaduan
}
?>