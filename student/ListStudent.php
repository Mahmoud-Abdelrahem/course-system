<?php
include '../general/env.php';
include '../shared/navbar.php';
include '../general/functions.php';

auth();

$select = "SELECT * FROM students";
$sel = mysqli_query($connication, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM students WHERE id=$id ";
    $id = mysqli_query($connication, $delete);
    header("location: /ListStudent.php");
}
$update = false;

?>


<section class="student p-70">
    <h1 class="text-center mt-5"> Welcome Student List Page </h1>

    <br>
    <div class="container col-md-8 mt-5 p-0 mt-5" enctype="multipart/form-data">
        <table class="table table-dark">
            <thead class="">
                <tr>
                    <th> id </th>
                    <th> Student Name </th>
                    <th> Student Phone </th>
                    <th> Student Email </th>
                    <th> Student Password </th>
                    <th colspan="2" class="text-center"> Action </th>
                  
                </tr>
            </thead>
            <?php foreach ($sel as $data) { ?>
                <tbody class="">
                    <tr>
                        <td><?= $data['id'] ?> </td>
                        <td><?= $data['name'] ?> </td>
                        <td><?= $data['phone'] ?> </td>
                        <td><?= $data['email'] ?> </td>
                        <td><?= $data['password'] ?> </td>

                        <td> <a class="btn btn-info" href="/courses/student/updateStudent.php?edit=<?= $data['id'] ?>">
                                Update </a>
                        </td>
                        <td> <a class="btn btn-danger" href="/courses/student/ListStudent.php?delete=<?= $data['id'] ?>">
                                Delete </a>
                        </td>
                    </tr>
                </tbody>
            <?php  } ?>
        </table>

    </div>
</section>


<?php
include '../shared/footer.php';
?>

