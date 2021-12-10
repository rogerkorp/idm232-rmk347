<?php
include 'connection.php';

if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<nav class="header-nav" id="admin-nav">
<a href="home.php">    
<img id="logo" src="assets/admin-logo.png">
</a>
    <a class="nav-link" id="nav-search" href="search.php">Search</a>
    <a class="nav-link" id="nav-browse" href="categories.php">Browse</a>
</nav>
