<?php
session_start();
if (session_status() == PHP_SESSION_ACTIVE) {

    if (session_destroy()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Failed to destroy session.";
    }
} else {
    header("Location:index.php");
}
?>
