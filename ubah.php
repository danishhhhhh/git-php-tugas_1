<?php
include("koneksi.php");
require("function.php");

$id = $_GET['id'];

[$data] = query("SELECT * FROM `datacharactercars` WHERE no = $id");

if (isset($_POST["submitubah"])) {

    if (ubah($_POST) > 0) {
        echo "
          <script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php'
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Data gagal diubah!');
            document.location.href = 'index.php'
          </script>
        ";
      }

}

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

<button class="buttonTambah"><a href="http://localhost/PROJECT/Web/data_list/" class="link">BACK</a></button>

<h1>Ubah Data</h1>

<form action="" method="POST">
  <input type="hidden" id="id" name="id" value="<?php echo $data->no; ?>"><br>
  <label for="fname">Cars Character Name:</label><br>

  <input type="text" id="name" name="name" value="<?php echo $data->name; ?>"><br>
  
  <label for="lname">Character Image:</label><br>
  <input type="text" id="image" name="image" value="<?php echo $data->image; ?>"><br>
  
  <label for="lname">Character Description:</label><br>
  <input type="text" id="description" name="description" value="<?php echo $data->description; ?>"><br>
  
  <label for="lname">Character Wheels:</label><br>
  <input type="text" id="wheels" name="wheels" value="<?php echo $data->roda; ?>"><br>
  
  <input type="submit" value="Submit" name="submitubah">
</form>

</body>
</html>

<?php

?>