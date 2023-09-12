<?php

global $koneksi;
include("koneksi.php");
require("function.php");

if (isset($_POST["submit"])) {

  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php'
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal ditambahkan!');
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

<h1>Tambah Data</h1>

<form action="" method="POST">
  <label for="fname">Cars Character Name:</label><br>
  <input type="text" id="name" name="name"><br>
  
  <label for="lname">Character Image:</label><br>
  <input type="text" id="image" name="image"><br>
  
  <label for="lname">Character Description:</label><br>
  <input type="text" id="description" name="description"><br>
  
  <label for="lname">Character Wheels:</label><br>
  <input type="text" id="wheels" name="wheels"><br>
  
  <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>

<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $result = testvar();
// }

// function testvar(){
//   $test = $_POST['name'];
//   $test2 = $_POST['image'];
//   $test3 = $_POST['description'];
//   $test4 = $_POST['wheels'];
//   insertData($test, $test3, $test4, $test2);
// };

?>