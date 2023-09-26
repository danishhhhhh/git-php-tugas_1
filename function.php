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

    print_r(mysqli_affected_rows($koneksi));

    return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    
    $query = "DELETE FROM datacharactercars WHERE no = $id";
  
    mysqli_query($koneksi, $query);
    
    return mysqli_affected_rows($koneksi);
}

function ubah($post) {
global $koneksi;
    
    $no = $post['id'];
    $name = $post['name'];
    $image = $post['image'];
    $description = $post['description'];
    $wheels = $post['wheels'];
    
    $query = "UPDATE datacharactercars SET 
                name = '$name', 
                image = '$image', 
                description = '$description', 
                roda = '$wheels' 
                WHERE no = $no";
  
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>