<?php 
 
  $username = $_SESSION['username'];
?>

<nav class="navbar">
    <a href="index.php" class="logo">IMDMedia</a>
    <a href="index.php">Home</a>
    <a href="mylist.php">Profile</a>
    
    <form action="" method="get">
      <input type="text" name="search">
    </form>
    
    <a href="logout.php" class="navbar__logout">Hi <?php echo $username; ?>, logout?</a>
</nav>