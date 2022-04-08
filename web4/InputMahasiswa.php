<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="ProsesInputMahasiswa.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <fieldset>
        <legend><h2>Input Data Mahasiswa</h2></legend>
        <table>
            <tr>
                <td>Id Mahasiswa</td>
                <td>:</td>
                <td><input name="id_mahasiswa" type="text" id="id_mahasiswa" size="50"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input name="nama" type="text" id="nama" size="50"/></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi" id="prodi">
                        <option value="">--Pilih Prodi--</option>
                        <option value="Teknik Infomatika">Teknik Informatika</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="DKV">DKV</option>
                        <option value="Agribisnis">Agribisnis</option>
                        <option value="Akuntansi">Akuntansi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">Perempuan
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki">Laki-laki</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input name="tempat_lahir" id="tempat_lahir" type="text" size="50"/></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" required pattern="\d{4}-\d{2}-\d{2}"/></td>
            </tr>
            <tr>
                <td>Skill</td>
                <td>:</td>
                <td><input type="checkbox" name="skill[]" value="Desain Grafis">Desain Grafis
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="skill[]" value="HTML">HTML</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="skill[]" value="Videografi">Videografi</td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file"
                name="foto" id="foto"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
            </tr>
        </table>
    </fieldset>    
</body>
</html>