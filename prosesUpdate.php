<?php
include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($connect, "UPDATE tabel_mahasiswa SET nama='$nama', jk='$jk', jurusan='$jurusan' WHERE id='$id'");

if($query){
 echo 'Data berhasil diupdate. Klik <a href="index.php">di sini</a> untuk ke halaman depan.';
}else{
 echo 'Data gagal diinput. Klik <a href="index.php">di sini</a> untuk ke halaman depan.';
}
?>