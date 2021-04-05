<?php
session_start();
if (isset($_SESSION['username'])) {
    header ("location: welcome.php");
}
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <?php
                // Cek apakah terdapat cookie dengan nama message
            if(isset($_COOKIE["message"])){ // Jika ada
            echo $_COOKIE["message"]; // Tampilkan pesannya
            }
        ?>
            <h1>Login</h1>
            <form method="post" action="login.php">
                <label>Username</label><br>
                <input type="text" placeholder="Enter username"><br>
                <label>Password</label><br>
                <input type="password" placeholder="Enter password"><br>
                <button type="submit">Log in</button>
            </form>
        </div>     
    </body>
</html>
