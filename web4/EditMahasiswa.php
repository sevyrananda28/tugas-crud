<?php
    error_reporting(0);
    include 'koneksi.php';

    if (isset($_GET["id"])) {
        $id = ($_GET["id"]);

        $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'");

        while($row = mysqli_fetch_array($result)) {
            $id_pegawai = $row["id_mahasiswa"];
            $nama = $row["nama"];
            $prodi = $row["prodi"];
            $jenis_kelamin = $row["jenis_kelamin"];
            $tempat_lahir = $row["tempat_lahir"];
            $tanggal_lahir = $row["tanggal_lahir"];
            $dataskill=explode(',', $skill['skill']);
            $foto = $row["foto"];
        }

    }else {
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

   <body>
<form action="ProsesEditMahasiswa.php" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
    <fieldset>
        <legend><h2>Edit Data Mahasiswa</h2></legend>
        <table>
            <tr>
            <td>Id Mahasiswa</td>
                <td>:</td>
                <td><input name="id_mahasiswa" type="text" id="id_mahasiswa" size="50" readonly value="<?php echo $id; ?>"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input name="nama" type="text" id="nama" size="50" value="<?php echo $nama; ?>"/></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi" id="prodi">
                        <option value="">--Pilih Prodi--</option>
                        <option value="Teknik Infomatika" <?php if ($prodi == 'Teknik Infomatika') echo ' selected="selected"'; ?> >Teknik Informatika</option>
                        <option value="Teknik Elektro" <?php if ($prodi == 'Teknik Elektro') echo ' selected="selected"'; ?> >Teknik Elektro</option>
                        <option value="DKV" <?php if ($prodi == 'DKV') echo ' selected="selected"'; ?> >DKV</option>
                        <option value="Agribisnis" <?php if ($prodi == 'Agribisnis') echo ' selected="selected"'; ?> >Agribisnis</option>
                        <option value="Akuntansi" <?php if ($prodi == 'Akuntansi') echo ' selected="selected"'; ?> >Akuntansi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" 
                    <?php if (isset($jenis_kelamin) && $jenis_kelamin=="perempuan") echo "checked";?>
                    value="perempuan">Perempuan
                    <input type="radio" name="jenis_kelamin"
                    <?php if (isset($jenis_kelamin) && $jenis_kelamin=="laki-laki") echo "checked";?> 
                    value="laki-laki">Laki-laki</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input name="tempat_lahir" id="tempat_lahir" type="text" size="50" value="<?php echo $tempat_lahir; ?>"/></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" required pattern="\d{4}-\d{2}-\d{2}" value="<?php echo $tanggal_lahir; ?>"/></td>
            </tr>
            <tr>
                <td>Skill</td>
                <td>:</td>
                <td><input type="checkbox" name="skill[]" value="Desain Grafis" <?php if ($skill == 'Desain Grafis') echo "checked";?>>Desain Grafis</td>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="skill[]" value="HTML" <?php if ($skill =='HTML') echo "checked";?>>HTML</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="skill[]" value="Videografi" <?php if ($skill == 'Videografi') echo "checked";?>>Videografi</td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                    <input type="file" name="foto" id="foto" /><br>
                    <?php echo $foto; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" id="edit" value="Edit" /></td>
            </tr>
        </table>
    </fieldset>    
</body>