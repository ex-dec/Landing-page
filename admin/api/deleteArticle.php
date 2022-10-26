<?php

use LDAP\Result;

include '../template/checkSessionSub.php';
include '../template/startConnection.php';
$id = $_GET['id'];

$queryDeleteArticle = "DELETE from article where id = '$id'";
$deleteArticle = mysqli_query($connect, $queryDeleteArticle);

if($deleteArticle){
    header('location: /admin/article.php');
}
