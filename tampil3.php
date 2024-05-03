<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampil3.css">
</head>
<body>
    <div class="container">
        <h2>Form Biodata</h2>
        <?php 
        $nama=$_POST['nama'];
        $gender=$_POST['gender'];
        $agama=$_POST['agama'];
        $tempatlahir=$_POST['tempatlahir'];
        $tanggallahir=$_POST['datemin'];
        $hobi=$_POST['hobi'];
        $citacita=$_POST['citacita'];
        $usia=$_POST['usia'];
        $asal=$_POST['asalsekolah'];
        
        echo "<p>"." Nama : " . $nama . "<br/>". "</p>" ;
        echo "<p>"." Jenis Kelamin : " . $gender . "<br/>"."</p>";
        echo "<p>"." Agama : " . $agama . "<br/>"."</p>";
        echo "<p>"." Lahir di : " . $tempatlahir. "<br/>"."</p>";
        echo "<p>"." Tanggal Lahir : " . $tanggallahir . "<br/>"."</p>";
        echo "<p>"." Hobi : " . $hobi . "<br/>"."</p>";
        echo "<p>"." Cita-cita : " . $citacita . "<br/>"."</p>";
        echo "<p>"." Usia : " . $usia . "<br>"."</p>";
        echo "<p>"." Asal Sekolah : " . $asal . "<br>"."</p>";
        ?>
    </div>
</body>
</html>