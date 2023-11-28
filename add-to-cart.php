<?php
session_start();
$_SESSION['name'] = "product";
echo$_SESSION["name"];
$_SESSION["age"] = "27";
echo$_SESSION["age"];
session_destroy();
?>
