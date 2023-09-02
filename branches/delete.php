<?php

include('../general/database.php');
include('../general/functions.php');

if (isset($_GET['id'])) {

  $deletedepid = $_GET['id'];

  // sql to delete a record
  $deletebranch = "DELETE from `branches` where `id` = $deletedepid ";
  $deletebranchdata = mysqli_query($connection, $deletebranch);
  if ($deletebranchdata) {
    echo 'deleted';
    path('branches/list.php');
    exit;
  } else {
    echo "Error deleting record";
  }
}

?>
