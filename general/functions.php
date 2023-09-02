<?php 

function path($go)
{

    echo "<script> window.location.replace('/course-system/$go')</script>";
}


function auth()
{
    if (isset($_SESSION['userName'])) {
    } else {
        path('auth/login.php');
    }
}
?>
