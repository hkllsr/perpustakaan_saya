<?php
    include_once("./connect.php");

    if(isset ($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "insert into buku values(
            null, '$nama', '$isbn', '$unit'
            )" );
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Form Penambahan Buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br><br>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br><br>
        <label for="unit">Unit</label>
        <input type="text" id="unit" name="unit"><br><br>
        <button type="submit" name="submit">Submit</button>
</form><br>
<button><a href="./index.php">Back to Main Menu</a></button>
</body>
</html>