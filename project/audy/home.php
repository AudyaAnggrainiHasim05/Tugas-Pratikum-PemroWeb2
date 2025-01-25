<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: tugaswebbasic.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo, GET TO KNOW AUDYA ANGGRAINI HASIM!</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <header>
        <marquee>Halo, GET TO KNOW AUDYA ANGGRAINI HASIM!</marquee>
    </header>
    <div class="content-container">
        <img src="audyapoto.png" alt="Foto Audya" class="profile-photo">
        <h2>Kenali Lebih Dalam</h2>
        <a href="biografi.php" class="btn">Klik di sini</a>
    </div>
</body>
</html>
