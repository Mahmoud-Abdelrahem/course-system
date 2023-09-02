<?php
include '../general/env.php';
include '../shared/navbar.php';
include '../general/functions.php';

auth();

if (isset($_POST['add'])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $insert = "INSERT INTO students VALUES(NULL,'$name',$phone,'$email','$password')";
    mysqli_query($connication, $insert);
    path('student/ListStudent.php');
}
$name = "";
$phone = "";
$email = "";
$password = "";
$update = false;

?>

<section class="student p-70">
    <h1 class="text-center mt-5"> Welcome Create New Student </h1>
    <br>
    <div class="container w-50 p-4 border">

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Student Name : </label>
                <input class="form-control" value="<?= $name ?>" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="">Student Phone : </label>
                <input class="form-control" value="<?= $phone ?>" type="text" name="phone">
            </div>
            <div class="form-group">
                <label for="">Student Email : </label>
                <input class="form-control" value="<?= $email ?>" type="email" name="email">
            </div>
            <div class="form-group">
                <label for="">Student Password : </label>
                <input class="form-control" value="<?= $password ?>" type="password" name="password">
            </div>
            <br>
            <button name="add" class="btn btn-info"> Add New Student </button>
        </form>
    </div>
</section>
<?php
include '../shared/footer.php';
?>