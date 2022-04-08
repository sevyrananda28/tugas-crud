<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $skill = implode(",", $_POST['skill']);
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/" .$foto;
    

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO mahasiswa VALUES 
        ('$id_mahasiswa', '$nama', '$prodi', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$skill', '$foto') ";
    
        $result = mysqli_query($koneksi, $query);

        if (!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi)).
                " - " . mysqli_error($koneksi);
        }
        else
        {
            echo "<script>alert('Data Berhasil Ditambah');window.location.href='index.php'</script>";
        }
    }
}

?>