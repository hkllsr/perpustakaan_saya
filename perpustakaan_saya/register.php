<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location: login.php');
}
?>

<html>
<body>
    <h2>Register</h2>
    <form action="./register_proccess.php" method="post">
        <label for="email">Email: </label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password"><br>

        <br>
        <button type="submit" value="register">REGISTER</button>
    </form>
</body>
</html>