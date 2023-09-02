<?php
include "../shared/navbar.php";
include "../general/env.php";
include '../general/functions.php';



if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:../auth/login.php");
}

auth();
?>


<section class="home">
    <div class="overlay"></div>
    <div class="text_home">
        <h1>
            Welcome to
            <br>
            our Education System.
        </h1>
    </div>
</section>

<?php
include "../shared/footer.php";
?>