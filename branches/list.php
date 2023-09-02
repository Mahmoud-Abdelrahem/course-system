<?php
include('../shared/navbar.php');
include('../general/database.php');
include '../general/functions.php';

auth();

?>


<section class="branches p-70">
    <!-- show data table -->
    <h1 class="text-center mt-5"> Welcome Branches List Page </h1>

    <div class="container col-md-8 mt-5 p-0 mt-5 " enctype="multipart/form-data">
        <table class="table table-dark">
            <thead class="">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col" colspan="2" class="text-center">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($showbranch as $data) { ?>
                    <tr>
                        <td><?= $data["id"] ?></td>
                        <td><?= $data["name"] ?></td>
                        <td>

                            <?php $updateurl = 'update.php?id=' . $data['id']; ?>
                            <a class='btn btn-info' name='update-dep-btn' href="<?= $updateurl ?>">update</a>
                        </td>
                        <td>

                            <?php $delurl = 'delete.php?id=' . $data['id']; ?>
                            <a class='btn btn-danger' name='del-dep-btn' href="<?= $delurl ?>">delete</a>
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