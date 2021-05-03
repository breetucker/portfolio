<?php

  include('config/db_connect.php');

  // Write Query for all icecreams
  $sql = 'SELECT title, ingredients, id FROM icecreams ORDER BY created_at';

  // Make query and get result
  $result = mysqli_query($conn, $sql);

  // Fetch the resulting rows as an array
  $icecreams = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free result from memory
  mysqli_free_result($result);

  // Close Connection
  mysqli_close($conn);

  //explode(',', $icecreams[0]['ingredients']);

?>

<!DOCTYPE html>
<html lang="en">
  
  <?php include('includes/header.php'); ?>

  <h4 class="center brown-text">Icecream!</h4>
  <div class="container">
    <div class="row">
      <?php foreach($icecreams as $icecream): ?>
      <div class="col s6 md3">
        <div class="card">
          <img src="img/icecream.png" alt="icecream" class="icecream">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($icecream['title']); ?></h6>
            <ul>
            <?php foreach(explode(',', $icecream['ingredients']) as $ing): ?>
            <li> <?php  echo htmlspecialchars($ing); ?></li>
            <?php endforeach ?>
            </ul>
          </div>
          <div class="card-action right-align">
          <a class="brandText" href="details.php?id=<?php echo $icecream['id']?>">more info</a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>


</html>