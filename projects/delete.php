<?php if (file_exists('../config.php')) : require_once '../config.php'; else : header('Location: ' . ABSPATH . '/install.php'); endif; ?>
<?php user_redirect(); ?>

<?php

if (isset($_GET['projectid']) && isset($_GET['teamid'])) {

  $project_id = $_GET['projectid'];
  $team_id = $_GET['teamid'];

  $mysqli->query("DELETE FROM `projects` WHERE `projects`.`id` = '$project_id'");

  header('Location: ' . ABSPATH . '/projects/index.php?id=' . $team_id);

}
