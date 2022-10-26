<?php
include '../template/checkSession.php';
include '../template/startConnection.php';

// get form request
$user = mysqli_real_escape_string($connect, $_POST['username']);
$passwd = md5($_POST['password']);

// get user from db
$getUser = mysqli_query($connect, "select * from user where username='$user'");
$fetchUser = mysqli_fetch_array($getUser);

if($fetchUser){
    if($passwd == $fetchUser['password']){
        $_SESSION['username'] = $user;
        $_SESSION['name'] = $fetchUser['name'];
        header('Location: /admin/dashboard.php');
    } else {
        echo "<script>alert('Sorry, your password is incorrect!');
        document.location='/admin/'</script>";
    }
} else {
    echo "<script>alert('Sorry, your username is incorrect!');
    document.location='/admin/'</script>";
}


?>