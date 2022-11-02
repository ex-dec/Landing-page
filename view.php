<?php

include 'admin/template/startConnection.php';
session_start();
$id = $_GET['id'];
$queryGetArc = "SELECT * from article WHERE id = '$id'";
$getArc = mysqli_query($connect, $queryGetArc);
$arc = mysqli_fetch_array($getArc);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/img/icon.svg" type="img/svg">
    <title><?= $arc['title'] ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body class="container">
    <!-- Header and navbar -->
    <?php include 'template/header.php'?>
    <!-- Body view -->
    <div style="text-align: center; margin-top: 60px">
        <h2><?= $arc['title'] ?></h2>
    </div>
    <div style="text-align: center; margin-top: 20px">
        <p><?= $arc['date'] ?></p>
    </div>
    <div style="text-align: center; margin-top: 20px">
        <p>author : <?= $arc['author'] ?></p>
    </div>
    <div style="padding-top: 3rem; padding-left: 6rem; padding-right: 6rem; padding-bottom: 5rem">
        <?= $arc['article'] ?>
    </div>
    <!-- footer -->
    <footer>
        <div class="footer-bottom">
            <div class="footer-border">
                <div class="footer-copy-right">
                    <a href="index.php" style="text-decoration: none;">@ 2022 Krisna Wahyu Setyawan</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>