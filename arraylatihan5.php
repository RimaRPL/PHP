<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="arraylatihan5.css">
</head>
<body>
    <div class="container">
        <table class="vertical-table">
            <tbody>
                <?php
                $siswa = array(
                    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
                    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
                    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
                    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
                );

                foreach ($siswa as $data) {
                    echo '<tr>';
                    echo '<td>'. $data['nama'] ;
                    echo '<br>';
                    echo  $data['kelas'] . ' - ' . $data['jurusan'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
