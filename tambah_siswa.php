<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        Nama Siswa : 
        <input type="text" name="nama_siswa" value="" class="form-control">
        Tanggal Lahir : 
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Gender : 
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        Kelas
        <select name="ID_Kelas" class="form-control">
            <option></option>
            <?php 
            include "Koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['ID_Kelas'].'">'.$data_kelas['Nama_kelas'].'</option>';    
            }
            ?>          
        </select>
        Jurusan
        <select name="id_jurusan" class="form-control">
            <option></option>
            <?php 
            include "Koneksi.php";
            $qry_id_jurusan=mysqli_query($conn,"select * from id_jurusan");
            while($data_id_jurusan=mysqli_fetch_array($qry_id_jurusan)){
                echo '<option value="'.$data_id_jurusan['id_jurusan'].'">'.$data_id_jurusan['nama_jurusan'].'</option>';    
            }
            ?>
        </select>

        <input type="Submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>