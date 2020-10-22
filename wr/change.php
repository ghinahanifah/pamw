<?php
require'function.php';

// ambil data di URL
$id = $_GET["id"];
// query data makanan berdasarkan id
$menu_mknn = query("SELECT * FROM menu_mknn WHERE id = $id")[0];

    // mengecek tombol submit apakah sudah ditekan 
if( isset($_POST["submit"]) ) {
   

   // mengecek apakah data berhasil diubah
   if(ubah($_POST) > 0 ){
      echo"
         <script>
            alert('data berhasil diubah!');
            document.location.href ='index.php';
         </script>
         ";
   }else {
      echo"
      <script>
            alert('data gagal diubah!');
            document.location.href ='index.php';
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
    <title> Data makanan</title>
</head>
<body>
    <h1>Edit Data makanan</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $menu_mknn["id"];?>">
          <li>
            <label for="nama_makanan">Nama makanan :</label>
            <input type="text"name="nama_makanan"id="nama_makanan"required value="<?= $menu_mknn["nama_makanan"];?>">
         </li><br>
         <li>
            <label for="jenis_makanan">jenis makanan :</label>
            <input type="text"name="jenis_makanan"id="jenis_makanan"required value="<?= $menu_mknn["jenis_makanan"];?>">
         </li><br>
         <li>
            <button type="submit"name="submit">Ubah Data</button>
         </li>
         


    </form>

</body>
</html>