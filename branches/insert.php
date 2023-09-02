<?php
include('../shared/navbar.php');
include('../general/database.php');
include '../general/functions.php';

auth();

?>
<section class="branches p-70">
    <h1 class="text-center mt-5">create new branches</h1>
    <!--  insertion form -->
    <div class="container w-50 p-4 border mt-5">


        <form action="" method="post">
            <label for="">branch name:</label>
            <input type="text" name="name" class="form-control">

            <button name="insert-branch-btn" class=" btn btn-info mt-3 mr-3 ">insert branch</button>
        </form>
    </div>
</section>

<?php include('../shared/footer.php'); ?>