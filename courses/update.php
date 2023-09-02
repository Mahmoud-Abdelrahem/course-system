<?php


include('../shared/navbar.php');
include('../general/database.php');
include '../general/functions.php';

$updateid = $_GET['id'];


$select = "SELECT * from `courses` where `id` = $updateid";
$coursesselect = mysqli_query($connection, $select);
$coursedata = mysqli_fetch_assoc($coursesselect);

auth();
?>


<!--update from -->
<section class="update-course p-70">

    <h1 class="text-center mt-5"> Update Course</h1>
    
    <div class="container p-4 w-50  border mt-5">
        <form action="" method="post">
            
            <label for="">course name:</label>
            <input type="text" name="name" class="form-control" value="<?= $coursedata["name"] ?>">
            
            
            <button name="edit-course-btn" class=" btn btn-info mt-3 mr-3 ">Update</button>
        </form>
    </div>
</section>

<?php
include('../shared/footer.php');
?>