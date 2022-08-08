<?php
  session_start();
  if(!isset($_SESSION['uName'])){
    header('Location: login-page.php');
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Have a pet to give away?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php' ?>
    <?php include 'sidebar.php' ?>
      <div class="content-area">
        <h1 class="center">Have a pet to give away?</h1> <br>
        <form method="post">
        <fieldset class="pet-search">
          <legend>Information about the pet:</legend>
          <label>Cat</label>
          <input type="radio" name="pet-type" value="cat" required>
          <label>Dog</label>
          <input type="radio" name="pet-type" value="dog" > <br> <br>
          <label>Breed of the animal:</label>
          <input type="text" name="breed"  placeholder="Breed" required> <br><br>
          <label>Preferred age of animal:</label>
            <select name="age" id="age-select" required>
            <option selected disabled value="">Choose an Age</option>
            <option value="Below 3 years">Below 3 years</option>
            <option value="3-8 years">3-8 years</option>
            <option value="Older than 8 years">Older than 8 years</option>
            <option value="Doesn't Matter">Doesn't Matter</option>
            </select> <br><br>
          <label>Gender of the Animal:</label>
          <select name="gender" required> 
            <option selected disabled value="">Choose a gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select><br> <br>
          <label>It gets along with other dogs: </label>
          <input type="checkbox" name="get-along-dog" > <br>
          <label>It gets along with other cats: </label>
          <input type="checkbox" name="get-along-cat"> <br>
          <label>Suitable in a house for small children: </label>
          <input type="checkbox" name="get-along-child"> <br>
        </fieldset>
        <fieldset class="pet-search">
          <legend>Information on the Owner</legend>
          <label>Current Owner's Name: </label> <br>
          <input type="text" name="first-name"  placeholder=" Owner's First Name" required>
          <input type="text" name="family-name"  placeholder="Owner's Family Name" required> <br>
          <label>Owner's Email Adress:</label> <br>
          <input type="email" name="owner-email" placeholder="Owner@email.com" pattern="[A-Za-z0-9.#$&=?^`!_%+-{64}]+@[A-Za-z0-9.-{253}]+\.[A-Za-z0-9-]{2,3}$" required> <br>
        </fieldset>
        <div class="submit-reset">
          <input type="submit" value="Submit" name="submit">
          <input type="reset" value="clear">
        </div>
      </form>
      </div>
       
      <?php include 'footer.php' ?>
    
</body>
</html>

<?php
  $file="available-pet-information.txt";
  $linecount = 0;
  $fp = fopen($file, "r");
  while(!feof($fp)){
    $line = fgets($fp);
    $linecount++;
  }
  $linecount-1;
  fclose($fp);
  $userName = $_SESSION['uName'];
  if(isset($_POST["submit"])){
    $type = $_POST['pet-type'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $alongDog = (isset($_POST['get-along-dog'])? 'yes': 'no');
    $alongCat = (isset($_POST['get-along-cat'])? 'yes': 'no');
    $alongChild = (isset($_POST['get-along-child'])? 'yes': 'no');
    $fName = $_POST['first-name'];
    $lName = $_POST['family-name'];
    $email = $_POST['owner-email'];
    $input = $linecount.':'.$userName.':'.$type.':'.$breed.':'.$gender.':'.$alongDog.':'.$alongCat.':'.$alongChild.':'.$fName.':'.$lName.':'.$email.PHP_EOL;
    $fp2 = fopen($file,'a+');
    fwrite($fp2,$input);
    fclose($fp2);
    print '<div class="center"><p>Success your pet has now been registered to the database!</p></div>';
  }
  
 


?>