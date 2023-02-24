<?php
$mahasiswa =[
    ["Ahmad Qomarudin", "22520021", "Teknik Informatika", "22520021_ahmad_qomarudin@stimata.ac.id"],
    ["Qomarudin Ahmad", "22520022", "Sistem Informasi", "qomarudin_ahmad@stimata.ac.id"],
    ["Ahmad", "22520023", "Menejemen Informasi", "ahmad@stimata.ac.id"]
    
];
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
    </ul>  -->
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach ($mhs as $m) : ?>
            <li> <?php echo $m; ?></li>
        <?php endforeach ?>
    </ul>
    <?php endforeach ?>
    <!--<ul>
        <li><?php echo $mhs[0]; ?></li>
        <li><?php echo $mhs[1]; ?></li>
        <li><?php echo $mhs[2]; ?></li>
        <li><?php echo $mhs[3]; ?></li>
    </ul>  
    <ul>
        <li><?php echo $mahasiswa[1][0]; ?></li>
        <li><?php echo $mahasiswa[1][1]; ?></li>
        <li><?php echo $mahasiswa[1][2]; ?></li>
        <li><?php echo $mahasiswa[1][3]; ?></li>
    </ul>        -->
</body>
</html>



