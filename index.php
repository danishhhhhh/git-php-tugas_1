
<?php

include("koneksi.php");
require("function.php");

$dataCharaCars = query("SELECT * FROM datacharactercars");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styless.css">
    
</head>
<body>



<h1 class="title">Data Karakter Di Film Cars</h1>
<button class="buttonTambah"><a href="http://localhost/PROJECT/Web/data_list/tambah.php" class="link">TAMBAH</a></button>

<table border="1px">
    <tr>
        <th class = "no row-title" >No</th>
        <th class = "image-title row-title">Image</th>
        <th class = "name row-title">Name</th>
        <th class = "description row-title">Deskripsi</th>
        <th class = "roda row-title">Roda</th>
        
    </tr>
    <?php 

    $no = 1;
    foreach ($dataCharaCars as $character) {
        
        ?>

        <tr>
            <td class = "no"><?php echo $no++; ?></td>
            <td class = "image-title"><img class= "image" style= "background-color: <?php echo $dataBackgroundColor; ?>" src="<?php echo $character->image; ?>" alt="Photo <?php echo $character->name; ?>"></td>
            <td class = "name"><?php echo $character->name; ?></td>
            <td class = "description"><?php echo $character->description; ?></td>
            <td class = "roda"><?php echo $character->roda; ?></td>
        </tr>

        

    <?php
    } ?>
</table>



</body>
</html>