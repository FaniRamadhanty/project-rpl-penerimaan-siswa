<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <style>
        body{
            padding-top:10%;
            background-image:url("assets/img/bg-sekolah.jpg");
            background-size:cover;
            background-color: #4CAF50;
        }
        input[type=submit]{
            background-color: #4CAF50;
        }
    </style>
</head>

<body>
    <center>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
<table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" /></td>
        </tr>
        <tr>
            <td>Alamat</td> 
            <td>:</td> 
            <td><textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td> 
            <td>:</td> 
            <td>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Sekolah Asal</td>
            <td>:</td>
            <td><input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan" name="simpan" /></td>
        </tr>
</table>
        </fieldset>


    </form>
    </center>
    </body>
</html>