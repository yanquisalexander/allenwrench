<?php require_once '../config.php'; ?>
<?php user_redirect(); ?>

<?php

if (isset($_POST['name']) && isset($_POST['description'])) {

  $name = $_POST['name'];
  $description = $_POST['description'];

  connect();
  $sql = "INSERT INTO `teams` (`name`, `description`) VALUES ('$name', '$description')";
  mysqli_query($connection, $sql);
  mysqli_close($connection);

  header('Location: ' . ABSPATH . '/index.php');

}

?>

<?php require_once '../template-parts/header.php'; ?>

<h1>Add Team</h1>
<div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" uk-grid>
    <div>
      <div class="uk-card uk-card-default uk-card-small uk-card-body">
        <form action="add.php" method="post">
          <h2 class="uk-card-title">Team Name:</h2>
          <input type="text" name="name" class="uk-input">
          <h2 class="uk-card-title">Description:</h2>
          <textarea rows="8" class="uk-textarea" name="description"></textarea>
          <p><input type="submit" value="Add Team" class="uk-button uk-button-primary"></p>
        </form>
      </div>
    </div>
</div>

<?php require_once '../template-parts/footer.php'; ?>