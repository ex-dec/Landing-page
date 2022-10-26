<?php
include 'template/checkSession.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel admin</title>
    <?php include "template/bootstrap.php" ?>
</head>

<body>
    <div class="container-fluid">
        <form class="form-signin" method="POST" action="api/register.php">
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">Register</h1>
            </div>
            <div class="form-label-group">
                <input type="text" class="form-control" name="username" required autofocus>
                <label>username</label>
            </div>
            <div class="form-label-group">
                <input type="text" class="form-control" name="name" required>
                <label>name</label>
            </div>
            <div class="form-label-group">
                <input type="password" name="password" class="form-control" required>
                <label>password</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        </form>
        <div class="text-center mb-4">
            <p>If u have account, <a href="/admin">log in</a> here</p>
        </div>
    </div>
</body>

</html>