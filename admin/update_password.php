<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "appu1234");
$db = mysqli_select_db($connection, "lms");
$query = "select * from admin where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($query_run)) {
    $password = $row['password'];
}
if($password == $_POST['currentPassword']){
    $query = "update admin set password='$_POST[newPassword]' where email='$_SESSION[email]'";
    $query_run = mysqli_query($connection, $query);        
}
?>
<script>
    alert("Updated details")
    window.location.href="admin_dashboard.php";
</script>