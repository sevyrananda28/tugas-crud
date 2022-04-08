<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['edit']))
{
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $prodi = $_POST["prodi"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $skill= implode(',', $_POST["skill"]);
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/".$foto;

    if (empty($foto))
    {
        $query = "UPDATE mahasiswa set nama = '$nama', prodi = '$prodi', jenis_kelamin = '$jenis_kelamin', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', skill = '$skill' where id_mahasiswa = '$id_mahasiswa'";
    }
    else
    {
        $file = mysqli_query($koneksi, "SELECT foto FROM mahasiswa where id_mahasiswa ='$id_mahasiswa'");
        $hasil=mysqli_fetch_array($file);
        $foto_lama=$hasil['foto'];
        unlink("image/".$foto);

        if(move_uploaded_file($tmp, $path))
        {
            $query = "UPDATE mahasiswa set nama = '$nama', prodi = '$prodi', jenis_kelamin = '$jenis_kelamin', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', skill = '$skill' where id_mahasiswa = '$id_mahasiswa'";
        }
    }

    $result = mysqli_query($koneksi, $query);

    if (!$result)
    {
        die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
    }
    else
    {
        echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
    }
}

?>
