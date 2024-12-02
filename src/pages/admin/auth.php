<?php
session_start();
if (!isset($_SESSION["loggedin"])){
    echo "You're not logged in as admin";
    echo "<a href='http://localhost/Focus6/codewave6/src/pages/admin/admin-login.php'>log in</a>";
    exit;
}
?>