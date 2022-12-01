<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
 <h3>Biodataku</h3>
        <ul>
            <li>Nama : Raka Anggie Saputra</li>
            <li>TTL : Blitar, 20 November 2005</li>
            <li>Jurusan : TKJ</li>
            <li>Kelas industri : Sysadmin</li>
            <li>Foto diri : <a href="fotoku.html" target="_blank">lihat fotoku</a></li>
        </ul>
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>
