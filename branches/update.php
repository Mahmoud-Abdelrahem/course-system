<?php


include('../shared/navbar.php');
include('../general/database.php');
include '../general/functions.php';

auth();

$updateid = $_GET['id'];
$select = "SELECT * from `branches` where `id` = $updateid ";
$branchesselect = mysqli_query($connection, $select);
$branchesdata = mysqli_fetch_assoc($branchesselect);

?>

<section class="branches p-70">
   <h1 class="text-center mt-5">update branches</h1>
   <!--update from -->
   <div class="container w-50 mt-5 p-4 border">
      <form action="" method="post">

         <label for="">branches name:</label>
         <input type="text" name="name" class="form-control" value="<?= $branchesdata["name"] ?>">


         <button name="edit-branch-btn" class=" btn btn-info mt-3 mr-3 ">edit branch</button>
      </form>
   </div>

</section>


<?php
include('../shared/footer.php');
?>