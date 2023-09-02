<?php
include('../shared/navbar.php');
include('../general/database.php');
include '../general/functions.php';

auth();

?>

<!--  insertion form -->

<section class="insert-course p-70">

    <h1 class="text-center mt-5"> Create Course </h1>
    <div class="container w-50 p-4 border  mt-5">


        <form action="" method="post">
            <label for="">course name:</label>
            <input type="text" name="name" class="form-control">


            <button name="insert-course-btn" class=" btn btn-info mt-3 mr-3 ">insert course</button>
        </form>
    </div>
</section>

<?php include('../shared/footer.php'); ?>