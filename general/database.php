<?php

function path_go($go)
{

    echo "<script> window.location.replace('/courses/$go')</script>";
}


//connection
$connection = mysqli_connect("localhost", "root", "", "course-system");




//select branch(show)
$select = "SELECT * from `branches`";
$showbranch = mysqli_query($connection, $select);



//select courses(show)
$select = "SELECT * from `courses`";
$showcourse = mysqli_query($connection, $select);

//select admins(show)
$select = "SELECT * from `admin`";
$showadmins = mysqli_query($connection, $select);


//select students(show)
$select = "SELECT * from `students`";
$showstudents = mysqli_query($connection, $select);




//courses


if (isset($_POST['insert-course-btn'])) {

    $coursename = $_POST['name'];


    //insert
    $insert = "INSERT INTO `courses` values(null,'$coursename')";
    $insertdata = mysqli_query($connection, $insert);
    path_go('courses/list.php');
}




//branch

if (isset($_POST['insert-branch-btn'])) {

    $branchname = $_POST['name'];


    //insert
    $insert = "INSERT INTO `branches` values(null,'$branchname')";
    $insertdata = mysqli_query($connection, $insert);
    path_go('branches/list.php');
}

if (isset($_POST['update-dep-btn'])) {

    $depname = $_POST['name'];

    //update
    $updatedep = "UPDATE `departments` SET name='$depname' WHERE `id` = $updatedepid  ";
    $updatedepdata = mysqli_query($connection, $updatedep);


    header('Location: list.php');
}






// Admin 

//log in select
if (isset($_POST['log-in-btn'])) {

    $adminpass = $_POST['pass'];
    $adminid = $_POST['id'];

    $select = "SELECT * from `admins` where `id` = $adminid";
    $adminselect = mysqli_query($connection, $select);
    $rows =  mysqli_num_rows($adminselect);

    if ($rows > 0) {
        $_SESSION['adminid'] = $adminid;
        header('Location: /ODC/06/index.php');
    } else {
        session_unset();
        session_destroy();
        header('Location: /ODC/06/index.php');
    }
}

//add admin insert
if (isset($_POST['add-admin-btn'])) {
    $adminid = $_POST['id'];
    $adminpass = $_POST['pass'];


    //insert
    $addadmin = "INSERT INTO `admins` values('$adminid','$adminpass',null)";
    $addadmindata = mysqli_query($connection, $addadmin);
}



//edit branch update
if (isset($_POST['edit-branch-btn'])) {

    $name = $_POST['name'];
    $updateid = $_GET['id'];

    //update
    $updatebranch = "UPDATE `branches` SET `name`='$name' WHERE `id` = $updateid  ";
    $updatebranchdata = mysqli_query($connection, $updatebranch);
    path_go('branches/list.php');
}


//edit course update
if (isset($_POST['edit-course-btn'])) {

    $name = $_POST['name'];
    $updateid = $_GET['id'];

    //update
    $updatecourse = "UPDATE `courses` SET `name`='$name' WHERE `id` = $updateid  ";
    $updatecoursedata = mysqli_query($connection, $updatecourse);
    path_go('courses/list.php');
}
