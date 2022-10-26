<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('U must login first!!!');
    document.location='/admin/'</script>";
}
