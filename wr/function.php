<?php
   // koneksi ke database
$conn= mysqli_connect ("localhost","root","","warung");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    
      $nama_makanan = $data["nama_makanan"];
      $jenis_makanan = $data["jenis_makanan"];

      $query="INSERT INTO menu_mknn
      VALUES
   ('','$nama_makanan', ' $jenis_makanan')
    ";

   mysqli_query($conn,$query);

   return mysqli_affected_rows($conn);


}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM menu_mknn WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;

    $id=$data["id"];
    $nama_makanan = htmlspecialchars($data["nama_makanan"]);
    $jenis_makanan =htmlspecialchars($data["jenis_makanan"]);
 
       $query="UPDATE menu_mknn SET
            nama_makanan = '$nama_makanan',
            jenis_makanan = '$jenis_makanan'
        WHERE id = $id
            ";


    mysqli_query($conn,$query);
 
    return mysqli_affected_rows($conn);
 }

?>
