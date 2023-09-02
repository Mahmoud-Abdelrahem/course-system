<?php
//   include('../shared/header.php');
include('../shared/navbar.php');
include('../general/database.php');
include '../general/functions.php';

auth();
?>


<!-- show data table -->

<section class="courses p-70">
    <h1 class="text-center mt-5"> Welcome Courses List Page </h1>
    <div class="container col-md-8 mt-5 mt-5 " enctype="multipart/form-data">
        <table class="table table-dark">
            <thead class="">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="text-center" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($showcourse as $data) { ?>
                    <tr>
                        <td><?= $data["id"] ?></td>
                        <td><?= $data["name"] ?></td>
                        <td>
                            <?php $updateurl = 'update.php?id=' . $data['id']; ?>
                            <a class='btn btn-info  w-50' name='update-dep-btn' href="<?= $updateurl ?>">update</a>
                        </td>
                        <td>
                            <?php $delurl = 'delete.php?id=' . $data['id']; ?>
                            <a class='btn btn-danger w-50' name='del-dep-btn' href="<?= $delurl ?>">delete</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>
</section>



<?php
include('../shared/footer.php');
?>