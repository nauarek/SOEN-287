<!-- A4: Question 3 -->
<!-- Amanda Beronilla (40228871) -->
<!-- SOEN 287 WEB PROGRAMMING -->
<!-- 22 August 2022 -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create An Account - The Gaia Concord</title>
    <link rel="stylesheet" href="_style.css">
    <link rel="icon" href="favIcon.png">
    <script>
      console.log("check");
    </script>
  </head>

  <body>
    <div class="body">
      <!-- HEADER -->
      <?php include("-header.php") ?>
      <!-- SIDE MENU -->
      <div class="sideMenu">
        <p>Her Cornucopia</p>
        <a href="_home.php">Home</a>
        <a href="_browse.php">Browse Available Pets</a>
        <a href="_find.php">Find a Dog/Cat</a>
        <a href="_dog.php">Dog Care</a>
        <a href="_cat.php">Cat Care</a>
        <a href="_give.php">Have a pet to give away?</a>
        <a href="_contact.php">Contact Us</a>
      </div>
      <!-- CONTENT -->
      <div class="content">
        <p class="contentHeader">An Introduction</p>
        <form action="" method="post">
          <!-- USERNAME -->
          <label class="contentText">Username</label>
          <p class="contentText contentTextSmall">• Can only include uppercase letters, lowercase letters, & numbers</p>
          <p class="contentText contentTextSmall">• Must contain at least one character</p>
          <input type="text" class="formTextInput" id="createUsername" name="createUsername" pattern="[a-zA-Z0-9].{1,}" required>
          <br>
          <br>
          <br>
          <!-- PASSWORD -->
          <label class="contentText">Password</label>
          <p class="contentText contentTextSmall">• Can only include uppercase letters, lowercase letters, & numbers</p>
          <p class="contentText contentTextSmall">• Must contain at least four characters with at least one letter & one digit</p>
          <input type="password" class="formTextInput" id="createPassword" name="createPassword" pattern="(?=.*\d)(?=.*[a-zA-Z]).{4,}" required>
          <br>
          <br>
          <br>
          <!-- BUTTONS -->
          <button type="submit" id="createSubmit" name="createSubmit">Submit</button>
          <button type="reset" id="createReset" name="createReset">Reset</button>
          <p class="contentText contentTextSmall createError" id="createSubmitError">
            <?php print 'hello im here'; ?>
          </p>
        </form>
      </div>
      <?php include("_php.php"); ?>
      <!-- FOOTER -->
      <?php include("-footer.php") ?>
      <!-- SCRIPT -->
      <script src="_script.js"></script>
    </div>
  </body>
</html>

<?php

  if(isset($POST["createSubmit"])) {
    $un = $_POST["createUsername"];
    $pw = $_POST["createPassword"];
    $find = "." . $un . ":";
    $creds = $find . $pw . "/r/n";

    $name = "-login.txt";
    $file = fopen('-login.txt', "a+");
    $text = fread($file, filesize($name));

    if(strpos($text, $find)) {
      $out = "no";
    }
    else {
      $out = "yes";
      // fwrite($file, $creds);
    }

    fwrite($file, $out);

    fclose($file);
  }

?>

