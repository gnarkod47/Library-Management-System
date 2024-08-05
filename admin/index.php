<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Library Management System [LMS]</a> 
        </div>    
        <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">User Login</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="signup.php">Register</a>
        </li>         -->
      </ul>
    </div>
  </div>
</nav>
<br><span><marquee behavior="" direction="">Library opens at 9:00 AM and closes when the last worm leaves!!!</marquee></span>
<div class="row">
  <div class="col-md-4" id="side_bar">
    <h5>Library Timing</h5>
    <ul>
      <li>Opening timing: 9:00 AM</li>
      <li>Closing timing: 9:00 PM</li>
      <li>Sunday off</li>
    </ul>
    <h5>Facilities</h5>
    <ul>
      <li>Fullfurniture</li>
      <li>Free Wi-fi</li>
      <li>News Papers</li>
      <li>Discussion Room</li>
      <li>RO water</li>
      <li>Neardy environment</li>
    </ul>
  </div>
  <div class="col-md-8" id="main_content">
    <center><h3>Admin Login form</h3></center>
    <form action="" method="post">
      <div class="mb-3 form-group">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3 form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>      
      <button type="submit" name="login" class="btn btn-primary" >Login</button>
    </form> 
    <?php
      session_start();
      if(isset($_POST['login'])){
        $connection = mysqli_connect("localhost","root","appu1234");
        $db = mysqli_select_db($connection,"lms");
        $query = "select * from admin where email = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
          if($row['email']==$_POST['email']){
            if($row['password'] == $_POST['password']){
              $_SESSION['name'] = $row['name'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['id'] =  $row['id'];
              header("Location:admin_dashboard.php");
            }
            else{
              ?>
              <br><br><center><span class="alert-danger">Wrong Password</span></center>
              <?php
            }
          }
        }
      }
    ?>
  </div>
</div>
</body>
</html>