<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            padding-top:10%;
            background-image:url("assets/img/bg-sekolah.jpg");
            background-size:cover;
        }
        button{
            background-color: #4CAF50;
        }
    </style>
</head>

<body>
    <center>
    <header>
        <h1>Pendaftaran Siswa Baru</h1>
        <h3>SMK ASSALAAM BANDUNG</h3>
    </header>

    <nav>
        <button><a href="form-daftar.php">Daftar Baru</a></button><br></br>
        <button><a href="list-siswa.php">Pendaftar</a>
    
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</center>
    </body>
</html>