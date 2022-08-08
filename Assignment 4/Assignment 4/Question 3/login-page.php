<?php
session_start();
if(isset($_SESSION['uName'])){
    header('Location: give-pet.php');
}
$message= "";
if(isset($_POST["submit"])){
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $file = file_get_contents('users.txt');  
    $search = $userName.':'.$userPass; 
    if(strpos($file, $search)){ 
        $_SESSION['uName'] = $userName;
        header('Location: give-pet.php');
    }
    else{
        $message = '<div class="center"><p>The username + password you input does not match the ones registered on this site!</p></div>'; 
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Give away a Pet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <?php include 'header.php' ?>
  <?php include 'sidebar.php' ?>
      <div class="content-area center">
        <form method="post">
            <fieldset>
            <label for="userName">Username:</label>
            <input name="userName" id="userName" required pattern="[A-Za-z0-9]+">
                <br>
                <label for="userPass">Password:</label>
                <input type="password" name="userPass" id="userPass" required pattern="(?=.*\d)(?=.*[a-zA-Z]).{4,}">
                <br>
                <input type="submit" value="Submit" name="submit">
            </fieldset>
        </form>
        <div>
            <h3></h3>
        </div>
        <?php echo $message; ?>
      </div>       
     <?php include 'footer.php' ?>
    
</body>
</html>

