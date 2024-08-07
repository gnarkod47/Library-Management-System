<?php
session_start();
if (!isset($_SESSION['name'])) {
  header("Location:index.php");
  exit();
}
$connection = mysqli_connect("localhost", "root", "appu1234");
$db = mysqli_select_db($connection, "lms");
$name = "";
$email = "";
$mobile = "";
$address = "";
$query = "select * from admin where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
  $name = $row['name'];
  $email = $row['email'];
  $mobile = $row['mobile'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<link rel="stylesheet" href="style.css">

<body>
  <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="user_dashboard.php">Library Management System [LMS]</a>
      </div>
      <span>Welcome <?php echo ($_SESSION['name']); ?></span>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
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
  <br><span>
    <marquee behavior="" direction="">Library opens at 9:00 AM and closes when the last worm leaves!!!</marquee>
  </span>
  <form action="update.php" method="post">
    <div class="form group d-flex flex-column mb-3 w-25 p-3 position-absolute top-50 start-50 translate-middle">
      <label for="name" class="form-label"><strong>Name</strong></label>
      <input type="text" class="form-control" name="name" value="<?php echo $name ?>" >
      <label for="email" class="form-label"><strong>Email</strong></label>
      <input type="email" class="form-control" name="email" value="<?php echo $email ?>" >
      <label for="mobile" class="form-label"><strong>Mobile</strong></label>
      <input type="text" class="form-control" name="mobile" value="<?php echo $mobile ?>" >
      <br>
      <button type="submit" name="edit" class="btn btn-primary" >Edit</button>
    </div>
  </form>
</body>

</html>