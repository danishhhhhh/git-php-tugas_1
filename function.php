<?php

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_object($result)) {
        $rows[] = $row;
    };
    return $rows;
};

function tambah($post) {
    global $koneksi;
    $name = $post['name'];
    $image = $post['image'];
    $description = $post['description'];
    $wheels = $post['wheels'];
    
    $query = "INSERT INTO datacharactercars VALUES ('','$name', '$description', '$wheels', '$image')";
  
    mysqli_query($koneksi, $query);

    $var1 = mysqli_affected_rows($koneksi);

    
    return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    
    $query = "DELETE FROM datacharactercars WHERE no = $id";
  
    mysqli_query($koneksi, $query);
    
    return mysqli_affected_rows($koneksi);
}

?>