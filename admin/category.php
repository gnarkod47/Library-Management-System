<?php
require("functions.php");
session_start();
if (!isset($_SESSION['name'])) {
  header("Location:index.php");
  exit();
}
$connection = mysqli_connect("localhost","root","appu1234");
$db = mysqli_select_db($connection,"lms");
$category_name = "";
$category_id = "";
$query = "select cat_id,cat_name from category";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="style.css">
<body>
<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="navbar-header ">
       <a class="navbar-brand" href="admin_dashboard.php">Library Management System [LMS]</a> 
    </div>
      <p class="text-light">Welcome <?php echo($_SESSION['name']);?></p>
      <p class="text-light">Email : <?php echo($_SESSION['email']);?></p>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              My profile
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
              <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
              <li><a class="dropdown-item" href="change_password.php">Change password</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><span><marquee behavior="" direction="">Library opens at 9:00 AM and closes when the last worm leaves!!!</marquee></span>
<div class="row" style=" padding:100px">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form action="">
      <table class="table-bordered" width="900px" style="text-align:center">
        <tr>
          <th>Category ID</th>
          <th>Category name</th>
        </tr>
        <?php
        $query_run = mysqli_query( $connection, $query);
        while($row = mysqli_fetch_assoc($query_run)){
          $category_id = $row['cat_id'];
          $category_name = $row['cat_name'];
          ?>
          <tr>
            <td><?php echo $category_id;?></td>
            <td><?php echo $category_name;?></td>      
          </tr>
        <?php
        }
        ?>
      </table>
    </form>
  </div>
  <div class="col-md-2"></div>
</div>
</body>
</html>