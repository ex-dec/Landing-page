<?php
include 'template/checkSessionSub.php';
include 'template/startConnection.php';
$queryGetArticle = "Select * from article";
$getArticle = mysqli_query($connect, $queryGetArticle);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Article Dashboard</title>
    <?php include 'template/bootstrap.php' ?>
</head>

<body style="display:block ;">
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
    <div class="container" style="margin-top: 3%">
        <div class="item-index">
            <h2>Article</h2>
            <a class="btn btn-success mt-3" href="createArticle.php">Create</a>
            <div class="grid-view mt-3">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 55%;">Title</th>
                            <th style="width: 10%;">Author</th>
                            <th style="width: 10%;">Date</th>
                            <th style="width: 20%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($article = mysqli_fetch_assoc($getArticle)) {
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $article['title'] ?></td>
                                <td><?= $article['author'] ?></td>
                                <td><?= $article['date'] ?>
                                <td style="width:fit-content">
                                    <a class="btn btn-primary" href="../view.php?id=<?=$article['id']?>">View</a>
                                    <a class="btn btn-secondary" href="updateArticle.php?id=<?=$article['id']?>">Update</a>
                                    <a class="btn btn-danger" href="api/deleteArticle.php?id=<?=$article['id']?>">Delete</a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>