<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index3.css">
</head>
<body>

<div class="container">

    <form method="post" action ="tampil3.php">
        <h2>Form Biodata</h2>
        <div>
            <label>Nama : </label><br/>
            <input type="text" placeholder="Masukkan Nama" name="nama"><br/>
        </div>
        <br>
        <div>
            <label>Jenis Kelamin : </label><br/>
            <input type="radio" name="gender" value="perempuan">Perempuan
            <input type="radio" name="gender" value="laki-laki">Laki-laki<br/>
        </div>
        <br>
        <div>
            <label>Agama : </label><br/>
            <input type="text" placeholder="Masukkan Agama" name="agama"><br/>
        </div>
        <br>
        <div>
            <label>Tempat Lahir : </label>
            <br>
            <input type="text" placeholder="Tempat Lahir" name="tempatlahir">
        </div>
        <br>
        <div>
            <label for="datemin">Tanggal Lahir : </label><br/>
            <input type="date" id="datemin" name="datemin"><br/>
        </div>
        <br>
        <div>
            <label>Hobi : </label><br/>
            <input type="text" placeholder="Masukkan Hobi" name="hobi"><br/>
        </div>
        <br>
        <div>
            <label>Cita-cita : </label><br/>
            <input type="text" placeholder="Masukkan Cita-cita"name="citacita"><br/>
        </div>
        <br>
        <div>
            <label>Usia : </label><br/>
            <input type="number" placeholder="Masukkan Usia" name="usia"><br/>
        </div>
        <br>
        <div>
            <label>Asal Sekolah : </label><br/>
            <input type="text" placeholder="Masukkan Asal Sekolah"name="asalsekolah"><br/>
        </div>
        <br>
        <div>
            <input type="submit" value="kirim">
        </div>
    </form>
</div>

</body>
</html>