<html>
<head>
	<title>DATA MASYARAKAT</title>
</head>
<body>
	<h2>DATA MASYARAKAT</h2>
<form method="post" action="simpan.php">
<table cellpadding="8" align="center" width="600px">
<caption>----------Input Data Masyarakat----------</caption>
<!--Tanggal Lahir-->
	<tr><td>NIK </td><td>: </td><td><input type="text" name="nik"></td></tr>
	<tr><td>Nama </td><td>: </td><td><input type="text" name="nama"></td></tr>
	<tr><td>Username </td><td>: </td><td><input type="text" name="username"></td></tr>
	<tr><td>Password </td><td>: </td><td><input type="text" name="password"></td></tr>
	<tr><td>Telepon </td><td>: </td><td><input type="text" name="telepon"></td></tr>
	<tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
</table>
</form>
</body>
</html>

</html>
<table class ="table table-bordered table-striped table-hover"border=1 cellpadding="8" align="center">
	<caption>----------Data Masyarakat----------</caption>
<tr>
	<th>No.</th>
	<th>Nik</th>]
	<th>Nama</th>
	<th>Username</th>
	<th>Password</th>
	<th>Telepon</th>
</tr>

<?php

include "koneksi.php";

$query ="select * from masyarakat";
$result = mysqli_query($conn, $query);

$x=1;

while($data = mysqli_fetch_array($result))
{
	
	echo "<tr>";
	echo "<td>$x</td>";
	echo "<td>$data[nik]</td>";
	echo "<td>$data[nama]</td>";
	echo "<td>$data[username]</td>";
	echo "<td>$data[password]</td>";
	echo "<td>$data[telp]</td>";
	echo "</tr>";
	$x++;
}
?>
	</table>
	