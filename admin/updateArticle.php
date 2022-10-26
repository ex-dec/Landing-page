<?php
include 'template/checkSessionSub.php';
include 'template/startConnection.php';
$id = $_GET['id'];
$queryUpdateArticle = "select * from article where id='$id'";
$updateArticle = mysqli_query($connect,$queryUpdateArticle);
$article = mysqli_fetch_array($updateArticle);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Article</title>
    <?php include 'template/bootstrap.php' ?>
</head>

<body>
    <!-- nav bar section -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="dashboard.php">Dashboard Admin</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php"> Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"> Article </a>
                </li>
            </ul>
            <form action="api/logout.php" class="form-inline">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
            </form>
        </div>
    </nav>
    <!-- main section -->
    <div class="row">
        <div class="col-xl-11 m-auto">
            <h2>Update article</h2>
            <div class="card card-primary">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="api/updateArticle.php">
                        <div class="row">
                            <input type="text" name="id" value="<?=$article['id']?>" hidden>
                            <div class="col-lg-12 mt-3">
                                <input type="text" name="title" placeholder="update title" class="form-control" value="<?=$article['title']?>">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <textarea class="form-control" name="article" id="article" cols="30" rows="10"><?=$article['article']?></textarea>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <button name="submit" class="btn btn-primary btn-block">submit</button>
                            </div>
                        </div>
                    </form>
                    <script src="ckeditor/ckeditor.js"></script>
                    <script src="ckeditor/styles.js"></script>
                    <script type="text/javascript">
                        CKEDITOR.replace('article');
                    </script>
                </div>
            </div>
        </div>
    </div>

</body>

</html>