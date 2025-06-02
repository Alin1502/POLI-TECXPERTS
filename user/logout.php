<?php
session_start();

session_unset();

setcookie("loggedin", "false",time() - 3600, "/");

header("Location: ../index.html")

?>