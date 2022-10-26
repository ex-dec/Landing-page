<?php
include 'admin/template/startConnection.php';
$queryGetArc = 'Select * from article';
$getArc = mysqli_query($connect, $queryGetArc);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/img/icon.svg" type="img/svg">
    <title>Landing page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body class="container">
    <!-- Header and navbar -->
    <header id="home">
        <nav>
            <div class="header-nav">
                <div class="header-border">
                    <div class="nav-brand">
                        <h3> Ex-dec | Exclusive for December </h3>
                    </div>
                    <ul class="nav-lu">
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="article.php">Article</a></li>
                        <li class="nav-item"><a class="nav-link" href="#porto">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- banner -->
    <div class="banner-background">
        <div class="banner-text">
            <h1>Welcome to my landing page</h1>
            <p>My name is Krisna</p>
        </div>
    </div>
    <!-- About me -->
    <div class="container-porto" style="color: rgba(0, 0, 0, 0.5);" id="about">
        <h1 style="text-align: center; padding: 3% 0px 2%; margin-top: 0%;">About Me</h1>
        <div class="row">
            <div class="col-50" style="padding: 10% 10% 10% 10%; text-align: center;">Let me introduce myself. My name is Krisna Wahyu Setyawan. I'm student from Electronic Engineering Polytechnic Institute of Surabaya. Now i'm focusing on system administration and cyber security
            </div>
            <div class="col-50">
                <img src="img/profile.png" alt="me" width="40%" style="margin-left: 25%; border-radius: 20px">
            </div>
        </div>
    </div>
    <!-- Skill -->
    <div class="container-porto" style="color: rgba(0, 0, 0, 0.5);" id="skill">
        <h1 style="text-align: center; padding: 3% 0px 2%; margin-top: 0%;">Skill</h1>
        <div class="row">
            <div class="col-50">
                <img src="img/networkingBadge.png" alt="networking" width="35%" style="margin-top: 5%;margin-left: 33%; border-radius: 20px">
                <div style="padding: 10% 10% 10% 10%; text-align: center; font-size: 24px"> Networking </div>
            </div>
            <div class="col-50">
                <img src="img/securityBadge.png" alt="system administration" width="40%" style="margin-top: 5%;margin-left: 23%; border-radius: 20px">
                <div style="padding: 12% 20% 10% 5%; text-align: center; font-size: 24px"> Security </div>
            </div>
        </div>
    </div>
    <!-- gallery -->
    <div class="container-porto" id="porto">
        <h1 style="text-align: center; padding: 3% 0px 2%; margin-top: 0%;">my Portofolio</h1>
        <div class="row">
            <?php
            $i = 1;
            while ($article = mysqli_fetch_assoc($getArc)) {
            ?>
                <div class="column">
                    <a href="view.php?id=<?= $article['id'] ?>">
                        <div class="card">
                            <img src="/img/porto1.png" alt="<?= strtok($article['title']) ?>" height="200px" width="250px">
                            <div class="container-card">
                                <a href="view.php?id=<?= $article['id'] ?>" style="text-decoration: none; color: #523a28;"><?= $article['title'] ?></a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- contact -->
    <div class="container-contact" id="contact">
        <h4>Contact me</h4>
        <div>
            <span class="material-symbols-outlined">
                perm_phone_msg
            </span>
            <a href="https://wa.me/6281806620706" style="text-decoration: none; color: #523a28;">081806620706</a>
        </div>
        <div>
            <span class="material-symbols-outlined">mail</span>
            <a href="mailto:krisnawahyusetyawan@gmail.com" style="text-decoration: none; color: #523a28;">krisnawahyusetyawan@gmail.com</a>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="footer-bottom">
            <div class="footer-border">
                <div class="footer-copy-right">
                    <a href="#home" style="text-decoration: none;">@ 2022 Krisna Wahyu Setyawan</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>