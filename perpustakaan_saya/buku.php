<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "select * from buku");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>ACTION</td>
</tr>
<?php foreach($query as $buku) { ?>
<tr>
            <td><?php echo $buku["nama"]?></td>
            <td><?php echo $buku["isbn"]?></td>
            <td><?php echo $buku["unit"]?></td>
            <td><a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>Edit</a>
                <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>Delete</a>
            </td>
    </tr>
    <?php } ?>
    </table>
    <br>
    <button><a href="./add-buku.php">Tambah Daftar Buku</a></button>
    <button><a href="./index.php">Back to Main Menu</a></button>
</body>
</html>