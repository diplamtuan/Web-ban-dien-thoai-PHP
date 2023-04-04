<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (!isset($_SESSION['auth'])) {
    header("location: login.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/img/logoicon.png">
  <link rel="stylesheet" href="../assets/css/adminpage.css">
  <title>Admin</title>
</head>
<header role="banner">
  <h1>Admin Page</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#"><?php echo $_SESSION['auth_user']['username']; ?></a></li>
    <li class="logout warn"><a id="logout" href="">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="index.php?action=admindashboard">Dashboard</a></li>
    <!-- <li class="edit"><a href="#">Edit Website</a></li>
    <li class="write"><a href="#">Write news</a></li>
    <li class="comments"><a href="#">Ads</a></li> -->
    <!-- <a href="index.php?action=" usersmanager"><div>Manage Users</div></a> -->
    <li class="users"><a href="index.php?action=usersmanager">Manage Users</a></li>
  </ul>
</nav>

<main role="main">

  <!-- <section class="panel important">
    <h2>This is page</h2>
    <ul>
      <li>Information Panel</li>
    </ul>
  </section> -->
  <?php 
  // include("admindasboard.php");
  include('content.php'); 
  ?>

  <!-- <section class="panel important">
    <h2>Write a post</h2>
      <form action="" method="post">
        <div class="twothirds">
          Blog title:<br/>
          <input type="text" name="title" size="40"/><br/><br/>
          Content:<br/>    
          <textarea name="newstext" rows="15" cols="67"></textarea><br/>  
        </div>
        <div>
          <input type="submit" name="submit" value="Save" />
        </div>
        </div>
      </form>
  </section> -->

</main>


</html>