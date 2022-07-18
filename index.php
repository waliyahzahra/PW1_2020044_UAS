<!DOCTYPE html>
<html>
<head>
 <title>Sistem CRUD Sederhana Data Mahasiswa</title>
</head>
<body>
 <a href="input.html">Tambah Data</a>
 
 <table border="1">
  <tr>
   <td>No.</td>
   <td>Nama</td>
   <td>Jenis Kelamin</td>
   <td>Jurusan</td>
   <td>Action</td>
  </tr>
  <?php
include('koneksi.php');
 
$query = mysqli_query($connect, "SELECT * FROM tabel_mahasiswa");
$no=1;
while($data = mysqli_fetch_array($query)){
?>
<tr>
 <td><?=$no++?></td>
 <td><?=$data['nama']?></td>
 <td><?=$data['jk']?></td>
 <td><?=$data['jurusan']?></td>
 <td><a href="edit.php?id=<?=$data['id']?>">Edit</a> | <a href="hapus.php?id=<?=$data['id']?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td>
</tr>
<?php
}
?>
 </table>
</body>
</html>