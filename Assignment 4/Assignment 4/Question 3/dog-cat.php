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
        <form>
          <fieldset class="pet-search">
            <label>Type of Pet:</label>
            <input type="radio" name="pet" id="Dog" required>
            <label>Cat</label>
            <input type="radio" name="pet" id="Cat">
            <label>Dog</label> <br><br>
            <label>Breed of choice:</label> <br>
            <input type="text" name="breed" id="breed-name" placeholder="Breed of Cat/Dog" required>
            <input type="checkbox" name="breed" id="not-matter">
            <label>Doesn't Matter</label> <br><br>
            <label>Preferred age of animal:</label>
            <select name="age" id="age-select" required>
            <option selected disabled value="">Choose an Age</option>
            <option value="Below 3 years">Below 3 years</option>
            <option value="3-8 years">3-8 years</option>
            <option value="Older than 8 years">Older than 8 years</option>
            <option value="Doesn't Matter">Doesn't Matter</option>
          </select> <br><br>
            <label>Preferred Gender:</label>
            <input type="radio" name="gender" id="male" required>
            <label>Male</label>
            <input type="radio" name="gender" id="female">
            <label>Female</label>
            <input type="radio" name="gender">
            <label>Doesn't Matter</label> <br> <br>
            <label>Does the pet need to get along with:</label> <br>
            <input type="checkbox" name="get-along" id="other-dogs">
            <label>Other dogs</label>
            <input type="checkbox" name="get-along" id="other-cats">
            <label>Other cats</label>
            <input type="checkbox" name="get-along" id="other-children">
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
  


?>