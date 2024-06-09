<?php
    include_once("./connect.php");
    if(isset ($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "insert into staff values(
            null, '$nama', '$telp', '$email'
            )" );
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Staff</title>
</head>
<body>
    <h1>Form Penambahan Staff</h1>
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br><br>
        <label for="telp">Telp</label>
        <input type="text" id="telp" name="telp">
        <br><br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"><br><br>
        <button type="submit" name="submit">Submit</button>
</form><br>
<button><a href="./index.php">Back to Main Menu</a></button>
</body>
</html>