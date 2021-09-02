<?php
if($_POST){
    $Nama_siswa=$_POST['nama_siswa'];
    $Tanggal_lahir=$_POST['tanggal_lahir'];
    $Alamat=$_POST['alamat'];
    $Gender=$_POST['gender'];
    $Username=$_POST['username'];
    $Password= $_POST['password'];
    $ID_Kelas=$_POST['ID_Kelas'];
    $ID_Jurusan=$_POST['id_jurusan'];
    if(empty($Nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    } elseif(empty($Username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($Password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "Koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nama_siswa,tanggal_lahir, gender, alamat, username, password, ID_Kelas, id_jurusan)
         value ('".$Nama_siswa."','".$Tanggal_lahir."','".$Gender."','".$Alamat."','".$Username."','".md5($Password)."','".$ID_Kelas."','".$ID_Jurusan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tambah_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>