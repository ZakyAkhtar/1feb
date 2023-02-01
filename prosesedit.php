<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $mapel=$_POST['nama_mapel'];
    $ruangan=$_POST['ruangan'];

    $sql="UPDATE tb_guru set nama_guru='$nama', alamat='$alamat', jenis_kelamin=$jenis_kelamin where id_guru='$id' ";
    $query=mysqli_query($koneksi,$sql);

    $sql="UPDATE tb_mapel set nama_mapel='$mapel', ruangan='$ruangan' where kode_mapel='$id' ";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header("Location:data.php?status=sukses");
    }
}
?>