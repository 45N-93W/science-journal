<?php
include("../Users.php");
$host = "localhost";
$username = "aheisleycook";
$password = "A714708o";
$db = new mysqli("localhost", $username, $password, "journal");
$cmd = $db->query("SELECT * FROM USERS where USERS_EMAIL = '$_POST[username]' AND USERS_PASSWORD='$_POST[password]'");
if ($cmd->result == true) {
    $_SESSION["loggedin"] = true;
} elseif ($cmd->result == false) {
    echo "<a href='../settings'>failed</a>";
}
