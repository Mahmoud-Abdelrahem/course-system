<?php
include '../general/env.php';
include '../shared/navbar.php';
include '../general/functions.php';

auth();

$select = "SELECT * FROM `admin`";
$s = mysqli_query($connication, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `admin` WHERE id=$id ";
    $id = mysqli_query($connication, $delete);
    path('admin/ListAdmin.php');
}
$update = false;

?>

<section class="admin p-70">
    <h1 class="text-center mt-5"> Welcome Admins List Page </h1>

    <br>
    <div class="container w-50 p-0  mt-5">

        <table class="table table-dark">
            <thead class="">
                <tr>
                    <th> id </th>
                    <th> Admin Name </th>
                    <th> Admin Password </th>
                    <th colspan="2" class="text-center"> Action </th>

                </tr>
            </thead>
            <?php foreach ($s as $data) { ?>
                <tbody>
                    <tr>
                        <td><?= $data['id'] ?> </td>
                        <td><?= $data['name'] ?> </td>
                        <td><?= $data['password'] ?> </td>
                        <td> <a class="btn btn-info" href="/courses/admin/updateAdmin.php?edit=<?= $data['id'] ?>">
                                Update </a> </td>
                        <td> <a class="btn btn-danger" href="/courses/admin/ListAdmin.php?delete=<?= $data['id'] ?>">
                                Delete </a> </td>
                    </tr>
                </tbody>
            <?php  } ?>
        </table>


    </div>

</section>

<?php
include '../shared/footer.php';
?>