<?php
session_start();
if(isset($_SESSION['uName'])){
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php' ?>
    <?php include 'sidebar.php' ?>
      <div class="content-area">
        <h1 class="center">Logged out</h1><br><br>
      </div>
       
    <?php include 'footer.php' ?>
    
</body>
</html>