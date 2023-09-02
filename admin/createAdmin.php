<?php

include '../shared/navbar.php';
include '../general/env.php';
include '../general/functions.php';

auth();

if (isset($_POST['add'])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    $insert = "INSERT INTO `admin` VALUES(NULL,'$name','$password')";
    mysqli_query($connication, $insert);
    path('admin/ListAdmin.php');
}
$name = "";
$password = "";
$update = false;

?>

<section class="admin p-70">
    <h1 class="text-center mt-5"> Welcome Create Admin Page </h1>
    <br>
    <div class="container border w-50 p-4">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">AdminName : </label>
                <input class="form-control" value="<?= $name ?>" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="">AdminPassword : </label>
                <input class="form-control" value="<?= $password ?>" type="password" name="password">
            </div>
            <br>
            <button name="add" class="btn btn-info"> Add New Admin </button>
        </form>

    </div>
</section>

<?php
include '../shared/footer.php';
?>