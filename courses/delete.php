<?php

include('../general/database.php');
include '../general/functions.php';

auth();


if (isset($_GET['id'])) {

  $deleteid = $_GET['id'];

  // sql to delete a record
  $delete = "DELETE from `courses` where `id` = $deleteid ";
  $deletedata = mysqli_query($connection, $delete);
  if ($deletedata) {
    echo 'deleted';
    header('Location: list.php'); //If list.php is your main page where you list your all records
    exit;
  } else {
    echo "Error deleting record";
  }
}
