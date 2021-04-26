<?php

  include('config/db_connect.php');

  $title = $name = $ingredients = '';
  $errors = array('name'=>'', 'title'=>'', 'ingredients'=>'');
  

  if(isset($_POST['submit'])){
    //Checks if fields have data
    if(empty($_POST['name'])){
      $errors['name'] = 'A name is required <br />';
    } else {
      $name = $_POST['name'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
        $errors['name'] = 'name must be letters and spaces only';
      }
    }
    if(empty($_POST['title'])){
      $errors['title'] = 'A title is required <br />';
    } else {
      $title = $_POST['title'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
       $errors['title'] = 'Title must be letters and spaces only';
      }
    }
    if(empty($_POST['ingredients'])){
      $errors['ingredients'] = 'At least one ingredient is required <br />';
    } else {
      $ingredients = $_POST['ingredients'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
      $errors['ingredients'] = 'Ingredients must be a comma separated list';
      }
    }

    if(array_filter($errors)){
      // echo 'errors in the form';
    } else { 

      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

      //create sql
      $sql = "INSERT INTO `icecreams` (title, name, ingredients) VALUES ('$title', '$name', '$ingredients')";

      //save to database and check
      if(mysqli_query($conn, $sql)){
        //success
      header('Location: icecream.php');
      } else {
        //error
        echo 'query error: ' . mysqli_error($conn);
      }

    }

  } //End of POST check

?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/styles.css">
  <?php include('includes/header.php'); ?>

  <section class="container brown-text">
    <h4 class="center">Add Icecream</h4>
    <form action="add.php" method="POST" class="white">
      <label>Your Name:</label>
      <input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
      <div class="red-text"><?php echo $errors['name'] ?></div>
      <label>Icecream Title</label>
      <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
      <div class="red-text"><?php echo $errors['title'] ?></div>
      <label>Ingredients (comma separated)</label>
      <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
      <div class="red-text"><?php echo $errors['ingredients'] ?></div>
      <div class="center">
        <input type="submit" value="submit" name="submit" class="btn brand">
      </div>
    </form>
  </section>

  <?php include('includes/footer.php'); ?>


</html>