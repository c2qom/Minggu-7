<?php
$mahasiswa =["Ahmad Qomarudin", "22520021", "Teknik Informatika", "22520021_ahmad_qomarudin@stimata.ac.id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="wiewpart"
    content="width=device-tidth, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
           <li> 
                <?php echo $mhs; ?>
            </li>
        <?php endforeach; ?>
    </ul> -->
    <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ul>    
</body>
</html>



