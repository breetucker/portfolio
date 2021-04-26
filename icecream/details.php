<?php 

include('config/db_connect.php');

if (isset($_POST['delete'])){
//mysqli_real_escape_string makes sure user cannot iunput malicious code
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

  $sql = "DELETE FROM `icecreams` WHERE id = $id_to_delete";

  if(mysqli_query($conn, $sql)){
    //success
    header ('Location: icecream.php');
  } else {
    //failure
    echo 'query error: ' . mysqli_error($conn);
  }
}

//check GET request id param
if(isset($_GET['id'])){
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  //make sql
  $sql = "SELECT * FROM `icecreams` WHERE id = $id";

  //get query result
  $result = mysqli_query($conn, $sql);

  //fetch result in array format
  $icecream = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/header.php'); ?>

<div class="container center">
  <?php if($icecream): ?>
    <h4><?php echo htmlspecialchars($icecream['title']); ?></h4>
    <p>Created by: <?php echo htmlspecialchars($icecream['name']);?></p>
    <p><?php echo date($icecream['created_at']);?></p>
    <h5>Ingredients:</h5> 
    <p><?php echo htmlspecialchars($icecream['ingredients']); ?></p>

    <!-- delete form -->
    <form action="details.php" method="POST">
    <input type="hidden" name="id_to_delete" value="<?php echo $icecream['id'];?>">
    <input type="submit" name="delete" value="Delete" class="btn brand">
    </form>

  <?php else: ?>

    <h5>No such icecream exists!</h5>

  <?php endif; ?>

</div>


<?php include('includes/footer.php'); ?>

</html>