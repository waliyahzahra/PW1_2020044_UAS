<?php
include('koneksi.php');
$id = (isset($_GET['id']))?$_GET['id']:'';

$query = mysqli_query($connect, "select * from tabel_mahasiswa where id='$id'");
$data = mysqli_fetch_array($query);

$nama = $data['nama'];
$jk = $data['jk'];
$jurusan = $data['jurusan'];

?>

<!DOCTYPE html>
<html>
<head>
 <title>Form Edit Data</title>
</head>
<body>
 <form action="prosesUpdate.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id ?>">
  Nama:
  <input type="text" name="nama" value="<?php echo $nama?>"><br>
  Jenis Kelamin:
  <select name="jk">
   <option value="">Pilih</option>
   <option value="pria" <?php echo $jk == 'pria' ? 'selected="selected"' : '' ?>>Pria</option>
   <option value="wanita" <?php echo $jk == 'wanita' ? 'selected="selected"' : '' ?>>Wanita</option>
  </select><br>
 Jurusan
  <select name="jurusan">
   <option value="">Pilih</option>
   <option value="ti" <?php echo $jurusan == 'ti' ? 'selected="selected"' : '' ?>>Teknik informatika</option>
   <option value="si" <?php echo $jurusan == 'si' ? 'selected="selected"' : '' ?>>Sistem Informasi</option>
  </select><br>
  
  <br>
  <input type="submit" value="Simpan"> <input type="reset" value="Reset">
 </form>
</body>
</html>