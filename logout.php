<?php
session_start();
if (!empty($_SESSION['username'])) {
    unset($_SESSION['username']); //remove session variables - unset rather than destroy so ID remains
    echo ('You have been logged out... redirecting in 2 seconds');
    header('Refresh:2; URL=login.php');
} else {
    echo ('You have to be logged in to log out...');
}

$page = "logout";
require "templates/meta.php";
include "templates/header.php";

?>

<?php
include "templates/footer.php";
?>
