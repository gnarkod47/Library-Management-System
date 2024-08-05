<?php
require("functions.php");
session_start();
if (!isset($_SESSION['name'])) {
  header("Location:index.php");
  exit();
}
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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Book
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addBook.php">Add New Book</a></li>
            <li><a class="dropdown-item" href="manage_book.php">Manage Books</a></li>
          </ul>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addCategory.php">New category</a></li>
            <li><a class="dropdown-item" href="manage_category.php">Manage category</a></li> 
          </ul>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Author
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addAuthor.php">Add new author</a></li>
            <li><a class="dropdown-item" href="manage_author.php">Manage Author</a></li>
          </ul>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="issue_book.php">Issue Book</a>
        </li>
      </ul>      
    </div>
  </div>
</nav>
<br><span><marquee behavior="" direction="">Library opens at 9:00 AM and closes when the last worm leaves!!!</marquee></span>
<div class="row">
  <div class="col-md-3">
    <div class="card" style="width: 18rem; ">      
      <div class="card-body">
        <h5 class="card-title">Registered Users</h5>
        <hr>
        <p class="card-text">Total no of users : <?php echo get_user_count()?></p>
        <a href="registerUsers.php" class="btn btn-danger">View Registered Users</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 18rem; ">
      <div class="card-body">
        <h5 class="card-title">Registered Books</h5>
        <hr>
        <p class="card-text">No of available books : <?php echo get_book_count()?></p>
        <a href="registerBooks.php" class="btn btn-primary">View registered books</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 18rem; ">
      <div class="card-body">
        <h5 class="card-title">Registered Category</h5>
        <hr>
        <p class="card-text">No of book's category : <?php echo get_category_count()?></p>
        <a href="category.php" class="btn btn-primary">View categories</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 18rem; ">
      <div class="card-body">
        <h5 class="card-title">Registered Authors</h5>
        <hr>
        <p class="card-text">No of available authors : <?php echo get_auth_count()?></p>
        <a href="author.php" class="btn btn-primary">View Authors</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 18rem; ">
      <div class="card-body">
        <h5 class="card-title">Issued books : </h5>
        <hr>
        <p class="card-text">No of issued books : <?php echo get_issue_book_count()?></p>
        <a href="issuedBooks.php" class="btn btn-primary">View issued books</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>