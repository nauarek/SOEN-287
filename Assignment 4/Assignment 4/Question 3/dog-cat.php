<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find a Dog/Cat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php' ?>
    <?php include 'sidebar.php' ?>
      <div class="content-area">
        <h1 class="center">Pet Search</h1> <br>
        <form method="post">
          <fieldset class="pet-search">
            <label>Type of Pet:</label>
            <input type="radio" name="pet" id="Cat" value="cat" required>
            <label>Cat</label>
            <input type="radio" name="pet" value="dog" id="Dog">
            <label>Dog</label> <br><br>
            <label>Breed of choice:</label> <br>
            <input type="text" name="breed" id="breed-name" placeholder="Breed of Cat/Dog">
            <input type="checkbox" name="breed" value="check" id="not-matter">
            <label>Doesn't Matter</label> <br><br>
            <label>Preferred age of animal:</label>
            <select name="age" id="age-select">
            <option selected disabled value="">Choose an Age</option>
            <option value="Below 3 years">Below 3 years</option>
            <option value="3-8 years">3-8 years</option>
            <option value="Older than 8 years">Older than 8 years</option>
          </select> 
          <label>Doesn't Matter</label>
          <input type="checkbox" name="age" value="check">
          <br><br>
            <label>Preferred Gender:</label>
            <input type="radio" name="gender" value="Male" required>
            <label>Male</label>
            <input type="radio" name="gender" value="Female">
            <label>Female</label>
            <input type="radio" name="gender" value="check">
            <label>Doesn't Matter</label> <br> <br>
            <label>Does the pet need to get along with:</label> <br>
            <input type="checkbox" name="get-along-dog" id="other-dogs">
            <label>Other dogs</label>
            <input type="checkbox" name="get-along-cat" id="other-cats">
            <label>Other cats</label>
            <input type="checkbox" name="get-along-child" id="other-children">
            <label>Small Children</label> <br><br>
          </fieldset>
          <div class="submit-reset">
            <input type="submit" name="submit">
            <input type="reset" name="reset">
          </div>
        </form>
        
      </div>
       
      <?php include 'footer.php' ?>
</body>
</html>

<?php 
  if(isset($_POST["submit"])){
    $different = 6;
    $type = $_POST['pet'];
    $breed = $_POST['breed'];
    if($breed == 'check'){$different++; }
    $age = $_POST['age'];
    if($age == 'check'){$different++; }
    $gender = $_POST['gender'];
    if($gender == 'check'){$different++; }
    $alongDog = (isset($_POST['get-along-dog'])? 'yes': 'no');
    $alongCat = (isset($_POST['get-along-cat'])? 'yes': 'no');
    $alongChild = (isset($_POST['get-along-child'])? 'yes': 'no');
    $find = $type.':'.$breed.':'.$age.':'.$gender.':'.$alongDog.':'.$alongCat.':'.$alongChild;

    $file="available-pet-information.txt";
    $fp = fopen($file, "r");
    while(!feof($fp)){
      $line = fgets($fp);
      $array1 = explode(":", $line);
      $array2 = explode(":", $find);
      $differenceCount = array_diff($array1, $array2);
      if(count($differenceCount)<$different){
        print '<div class="center"><p>'.$line.'</p></div>'; 
      }
    }
    fclose($fp);
  }

 






?>