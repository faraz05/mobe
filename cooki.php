<?php
$value = "cook";
$exp = time() + 86400;
setcookie("name",$value,$exp);

echo $_COOKIE['name'];
?>trry