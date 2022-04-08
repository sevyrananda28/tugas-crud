<?php
    error_reporting(0);
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="mx-auto">
        <!-- sebagai header yang membungkus output -->
        <div class="card">
            <div class="card-header text-white bg-dark">
                Tugas CRUD - Sevyra Nanda Octavianti V3921034 TI E
            </div>
            <div class="card-body">
<h1 style="text-align: center;">Data Mahasiswa</h1>
    <center><a href="InputMahasiswa.php"><button type="button" class="btn btn-primary">Tambah Data</button></a></center>
    <br>    
    <!-- sebagai tabel penampung data yang sudah diinput/edit -->
        <div class="card">
            <div class="card-header bg-info p-2 text-white">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                <table class="table table-bordered">   
                <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Skill</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $no=0;
                $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa ASC");
                while($row = mysqli_fetch_array($result)) {
                    $no++
            ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['id_mahasiswa'];?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['prodi'];?></td>
                    <td><?php echo $row['jenis_kelamin'];?></td>
                    <td><?php echo $row['tempat_lahir'];?></td>
                    <td><?php echo $row['tanggal_lahir'];?></td>
                    <td><?php echo $row['skill'];?></td>
                    
                    <td>
                        <center>
                            <img src="image/<?php echo $row['foto']; ?>"
                            border = "1" width="70px" height="70px"/>
                        </center>
                    </td>
                    <td>
                        <a href="EditMahasiswa.php?id=<?php echo $row['id_mahasiswa'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                    </td>
                    <td>
                        <a href="HapusMahasiswa.php?id=<?php echo $row['id_mahasiswa'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
                <?php } ?>
        </tbody>    
    </table>
</body>
</html>