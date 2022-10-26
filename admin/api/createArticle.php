<?php

include '../template/checkSessionSub.php';
include '../template/startConnection.php';
$title = mysqli_real_escape_string($connect, $_POST['title']);
$article = mysqli_real_escape_string($connect, $_POST['article']);

$author = $_SESSION['username'];
$date = date('Y-m-d H:i:s');

$queryCheckDup = "select * from article";
$checkDup = mysqli_query($connect, $queryCheckDup);

while ($dup = mysqli_fetch_assoc($checkDup)) {
    if ($dup['title'] == $title) {
        $confirm = 0;
        break;
    } else {
        $confirm = 1;
    }
}

$queryCreateArticle = "INSERT INTO article (id, title, article, author, date)
                       VALUE (NULL, '$title', '$article', '$author', '$date')";

if ($confirm) {
    $queryCreate = mysqli_query($connect, $queryCreateArticle);
    if ($queryCreate) {
        header('location: /admin/article.php');
    } else {
        echo "<script>alert('Can't submit');
          document.location='/admin/article.php'</script>";
        echo mysqli_error($connect);
    }
} else {
    echo "<script>alert('title already exist');
    document.location='/admin/article.php'</script>";
}
