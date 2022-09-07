<?php 

    include("connectToSql.php");

    if(isset($_POST["submit"])){
        $uName = $_POST['userName'];
        $uEmail = $_POST['userEmail'];
        $uPass = $_POST['userPass'];
    }

    $sql = "INSERT INTO userdetails (userEmail) VALUES ('$uEmail')";
    $sql = "INSERT INTO userdetails (userName) VALUES ('$uName')";
    $sql = "INSERT INTO userdetails (userPass) VALUES ('$uPass')";


    
    
    ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="signUp.css">
  </head>
  <body>
    <!-- Division for the entire body -->
    <div class="bodyContent">

      <!-- this is heading div -->
      <?php include("header.php"); ?>

      

      <div class="userDetails">
        <h2 id="signUp">SignUp</h2>

        <form class="userDetailForm" action="thankYou.html" method="post">

          <label for="name">Name: </label>
          <input type="text" id="name" name="userName" placeholder="first + last"><br>

          <label for="email">Email: </label>
          <input type="email" id="email" name="userEmail" placeholder="abd@domain.com" required><br>

          <label for="password">Password: </label>
          <input type="password" id="password" name="userPass" placeholder="0-9 a-z no special"><br>

          <p>choose your country: </p>
          <input type="radio" id="male" name="countryC" value="M">
          <label for="male">Canada</label>


          <input type="radio" id="female" name="countryU" value="F">
          <label for="female">US</label><br>


          <h2>Give us rating please:</h2 >
          <select class="Rating" name="stars">
            <option value="Great">5</option>
            <option value="better">4</option>
            <option value="good">3</option>
            <option value="ok">2</option>
            <option value="bad">1</option>
          </select><br>

          <input type="submit" name="submit" value="SignUp">

        </form>
      </div>

      <div class="ads">
        <p>ads</p>
      </div>

      <?php include("footer.php"); ?>

    </div>

  </body>
</html>
