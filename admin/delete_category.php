<?php
session_start();
$connection = mysqli_connect("localhost","root","appu1234");
$db = mysqli_select_db($connection,"lms");
$query = "delete from category where cat_id=$_GET[categ]";
$query_run = mysqli_query($connection,$query);
header("location:manage_category.php");
?>