<?php
include '../template/checkSessionSub.php';
include '../template/startConnection.php';

$id =  mysqli_real_escape_string($connect, $_POST['id']);
$title = mysqli_real_escape_string($connect, $_POST['title']);
$article = mysqli_real_escape_string($connect, $_POST['article']);

$queryUpdateArticle = "UPDATE article SET title = '$title', article = '$article' WHERE id = '$id'";

$queryUpdate = mysqli_query($connect, $queryUpdateArticle);

if ($queryUpdate) {
    header('location: /admin/article.php');
} else {
    echo "<script>alert('Can't submit');
          document.location='/admin/article.php'</script>";
    echo mysqli_error($connect);
}