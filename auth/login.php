<?php
include "../shared/header.php";
include "../general/env.php";
include '../general/functions.php';


$name = '';
$password = '';


if (isset($_POST['login'])) {
    $id = $_POST['login'];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $select = "SELECT * FROM `admin` WHERE `name`='$name' and `password`='$password'";
    $row = mysqli_query($connication, $select);
    $numRows = mysqli_num_rows($row);
    if ($numRows == 1) {
        echo "True Admin ";
        $_SESSION["userName"] = "admin";
        path('home/index.php');
    }
}


?>


    <main class="login">
        <section class="home p-70">
            <div class="overlay"></div>
            <div class="container col-md-6">


                <div class="card card-body">
                    <h1>Login To Our System</h1>
                    <form class="needs-validation mt-3" novalidate method="post">
                        <div class="row ">
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" name="name" id="validationCustom01" value="<?= $name ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">password</label>
                                <input type="password" class="form-control" name="password" id="validationCustom01" value="<?= $password ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>


                        </div>
                        <div class="btn-info text-center ">
                            <button class="btn_login mt-3" name="login" type="submit">login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
 


<?php
include "../shared/footer.php";
?>