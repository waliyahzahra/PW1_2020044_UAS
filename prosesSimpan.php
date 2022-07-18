<?php
include('koneksi.php');
 
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];
 
$query = mysqli_query($connect, "INSERT INTO tabel_mahasiswa(nama, jk, jurusan) VALUES('$nama', '$jk', '$jurusan')");
 
if($query){
 echo 'Data berhasil disimpan.<br><a href="input.html">Tambah Data</a> <br>';
  echo '<a href="index.php">Lihat Data Mahasiswa</a>.';
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="input.html">di sini</a>';
}
 
?>