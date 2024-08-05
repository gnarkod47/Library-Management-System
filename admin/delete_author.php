<?php
session_start();
$connection = mysqli_connect("localhost","root","appu1234");
$db = mysqli_select_db($connection,"lms");
$query = "delete from authors where author_id=$_GET[auth]";
$query_run = mysqli_query($connection,$query);
header("location:manage_author.php");
?>