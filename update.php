<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "appu1234");
$db = mysqli_select_db($connection, "lms");
$query = "update users set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]' where email = '$_POST[email]'";
$query_run = mysqli_query($connection, $query);
?>
<script>
    alert("Updated details")
    window.location.href="user_dashboard.php";
</script>


