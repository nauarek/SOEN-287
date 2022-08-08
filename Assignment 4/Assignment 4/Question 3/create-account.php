<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create an account</title>
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
        
      </div>       
     <?php include 'footer.php' ?>
    
</body>
</html>

<?php



if(isset($_POST["submit"])){
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $file = file_get_contents('users.txt');
    //I add the : here in the case someone uses a password that could match the username trying to be inputted
    $search = $userName.':'; 
    if(strpos($file, $search)){ 
        print '<div class="center"><h3>The User Name you inputted is already in use, please input another! </h3>';
    } 
    else{
        //enter in the format uName|uPass and then a new line
        $input = $userName . ':' . $userPass.PHP_EOL;
        $fp = fopen('users.txt','a+');
        fwrite($fp,$input);
        fclose($fp);
        print '<div class="center"><p>Success, thank you <b>' .$userName. '</b> ,you are now registered, and can login</p></div>';
  }
}


?>