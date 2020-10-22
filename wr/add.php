<?php
require'function.php';
// koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","warung");

    // mengecek tombol apakah user telah mensubmit
if( isset($_POST["submit"]) ) {
   

   // mengecek data yg telah ditambahkan
   if(tambah ($_POST) > 0 ){
      echo"
         <script>
            alert('data berhasil ditambahkan!');
            document.location.href='index.php';
         </script>
         ";
   }else {
      echo"
      <script>
            alert('data gagal ditambahkan!');
            document.location.href='index.php';
         </script>
         ";
   }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<body bgcolor="yellow">
<html>
<head>
    <title> Data menu makanan</title>
</head>
<body>
    <h1>Tambahkan menu makanan</h1>

    <form action="" method="post">
        <ul>
          <li>
            <label for="nama_makanan">Nama makanan :</label>
            <input type="text"name="nama_makanan"id="nama_makanan"required>
         </li><br>
         <li>
            <label for="jenis_makanan">jenis makanan :</label>
            <input type="text"name="jenis_makanan"id="jenis_makanan">
         </li><br>
         <li> 
            <button type="submit"name="submit">Tambah Data</button>
         </li>
        </ul>

    </form>

</body>
</html>