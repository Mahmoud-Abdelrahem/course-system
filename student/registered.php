<?php
include '../shared/navbar.php';
include '../general/env.php';
include '../general/database.php';
include '../general/functions.php';


auth();
//select branch(show)
$select = "SELECT * from `studentcourse`";
$s = mysqli_query($connection, $select);
$row=mysqli_fetch_assoc($s);


?>


<section class="student p-70">
    <!-- show data table -->
    <h1 class="text-center mt-5"> Welcome Registered Students List Page </h1>

    <div class="container col-md-8 mt-5 p-0 mt-5" enctype="multipart/form-data">
        <table class="table table-dark">
            <thead class="">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Branch</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($s as $data) { ?>
                    <tr>
                        <td><?= $data["studentid"] ?></td>
                        <td><?= $data["name"] ?></td>
                        <td><?= $data["coursename"] ?></td>
                        <td><?= $data["branchname"] ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>
</section>



<?php
include('../shared/footer.php');
?>