<form method="post" action="simpan_adu.php" enctype="multipart/form-data">
<table cellpadding="8" align="center" width="60px">
<caption>----------Input Pengaduan Masyarakat----------</caption>
<tr>
	<td>NIK</td>
	<td>:</td>
	<td><input type="text" name="nik"></td>
</tr>
<tr>
	<td>Laporan</td>
	<td>:</td>
	<td><textarea name="lapor" rows="4" cols="50"></textarea></td>
</tr>
<tr>
	<td>Foto</td>
	<td>:</td>
	<td><input type="file" name="foto"></td>
</tr>
	<input type="hidden" name="status" value="0">
	<input type="hideen" name="tanggal" value="<?php echo date("Y-m-d");?>">
<tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
</table>
</form>

<br><br>
<table class="table table-bordered table-striped table-hover" border=1 cellpadding="8" align="center">
   <caption>------------Data Pengaduan Masyarakat--------------</caption>
<tr>
  <th>No.</th>
  <th>NIk</th>
  <th>Nama</th>
  <th>Telepon</th>
  <th>Laporan</th>
  <th>Foto</th>
  <th>Status</th>
</tr>
 
<?php

include "koneksi.php";

$query ="select * from pengaduan,masyarakat where pengaduan.nik=masyarakat.nik order by id_pengaduan desc";
$result = mysqli_query($conn, $query);

$x=1;
//ambil dan tampilkan seluruh tabel masyarakat
 
while($data = mysqli_fetch_array($result))
{
 
  echo "<tr>";
  echo "<td>$x</td>";
  echo "<td>$data[nik]</td>";
  echo "<td>$data[nama]</td>";
  echo "<td>$data[telp]</td>";
  echo "<td>$data[isi_laporan]</td>";
  echo "<td><img src='images/".$data['foto']."' width='70' height='70'></td>";
  echo "<td>$data[status]</td>";
  echo "</tr>";
  $x++;
}
?>
  </table>
</div>