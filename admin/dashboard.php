<?php
include 'template/checkSessionSub.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard admin</title>
    <?php include 'template/bootstrap.php' ?>
</head>

<body>
    <!-- nav bar section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"> Dashboard Admin </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="article.php"> Article </a>
                </li>
            </ul>
            <form action="api/logout.php" class="form-inline">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
            </form>
        </div>
    </nav>
    <!-- main section -->
    <div style="margin: auto;">
        <div class="jumbotron">
            <h1 class="display-4">welcome</h1>
            <p class="lead">This is admin dashboard for add and remove content on this landing page</p>
        </div>
    </div>
</body>

</html>