<?php
include "../template/startConnection.php";

$username = mysqli_real_escape_string($connect, $_POST['username']);
$name = mysqli_real_escape_string($connect, $_POST['name']);
$password = mysqli_real_escape_string($connect, md5($_POST['password']));

$queryRegister = "INSERT INTO user (id, username, password, name)
                  VALUE (NULL, '$username', '$password', '$name')";

$queryCheckDup = "select * from user";
$checkDup = mysqli_query($connect, $queryCheckDup);

while($dup = mysqli_fetch_assoc($checkDup)){
    if($dup['username'] == $username) {
        $confirm = 0;
        break;
    } else {
        $confirm = 1;
    }
}

if($confirm){
    $register = mysqli_query($connect, $queryRegister);
    if ($register) {
        echo "<script>alert('Register complete');
                  document.location='/admin/'</script>";
    } else {
        echo "<script>alert('Can't submit');
                  document.location='/admin/'</script>";
        echo mysqli_error($connect);
    }
} else {
    echo "<script>alert('username exist');
    document.location='/admin/register.php'</script>";
}

