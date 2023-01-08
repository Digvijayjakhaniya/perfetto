<?php

use LDAP\Result;
session_start();

if (isset($_SESSION["id"])) {
    $name = $_SESSION['id'];
} else {
    header("location:login/login-user.php");
}

?> 