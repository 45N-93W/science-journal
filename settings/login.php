<?php
include("../Users.php");
$host = "localhost";
$username = "aheisleycook";
$password = "A714708o";
$db = new mysqli("localhost", $username, $password, "journal");
$cmd = $db->query("SELECT * FROM USERS_EMAIL where NAME='$_POST[username]' AND USERS_PASSWORD='$_POST[password]'");
if ($cmd->result == true) {
    $_SESSION["loggedin"] = true;
} elseif ($cmd->result == false) {
    echo "login failed<a href='/'>click</a>";
}
