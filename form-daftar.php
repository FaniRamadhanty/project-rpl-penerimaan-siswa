<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body{
            background-image:url("assets/img/bg-sekolah.jpg");
            background-size:cover;
        }

        form{
            background:#e6f2ff;
            border-radius: 20px;
            background-color: #f2f2f2;
            padding: 20px;
        }
input[type=text], select {
  width: 100%;
  padding: 24px 40px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 24px 40px;
  margin: 8px 0;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}



</style>
</head>

<body>
    <center>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="nama lengkap" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Sekolah Asal</td>
            <td>:</td>
            <td><input type="text" name="sekolah_asal" placeholder="nama sekolah" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="Daftar" name="daftar" /></td>
        </tr>
        <p>
        </p>
        </table>
        </fieldset>
      
    </form>
    <br></br>
<button><a href="index.html">Kembali</a></button>
</center>
    </body>
</html>