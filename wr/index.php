<?php
require 'function.php';
$menu_mknn=query("SELECT * FROM menu_mknn");

?>
<!DOCTYPE html>
<html lang="en">
<body bgcolor="yellow">
<html>
<head>
    <title> Halaman Admin </title>
</head>
<body>

    <h1>Daftar Makanan</h1>

    <button type ="button"class="btn btn-success btn-sm"><a href="add.php">Tambah Menu Makanan</a></button>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>no.</th>
        <th>Nama makanan</th>
        <th>Jenis Makanan</th>
        <th>Aksi</th>
    <tr>

    <?php $i = 1; ?>
    <?php foreach($menu_mknn as $row) :?>

    <tr>
        <td> <?= $i; ?> </td>
        <td><?= $row["nama_makanan"]; ?></td>
        <td><?= $row["jenis_makanan"]; ?></td>
        <td>
            <button type ="button"class="btn btn-success btn-sm"><a href="change.php?id=<?= $row["id"]; ?>"> Edit </a></button>
            <button type ="button"class="btn btn-success btn-sm"><a href="delet.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('Yakinkah Anda Ingin Menghapus Data Ini?')">Hapus </a></button>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach ; ?>

    </table>

</body>
</html>