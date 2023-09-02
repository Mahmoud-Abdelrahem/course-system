<?php
include '../shared/header.php';

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("location:../auth/login.php");
}
?>

<header class="header" id="header1">

  <div class="Navbar">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand courses animate__animated animate__bounceInLeft" data-wow-delay="1s" href="#">COURSES</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ms-auto">


            <li class="nav-item">
              <a class="nav-link   active" data-wow-delay="1s" aria-current="page" href="/course-system/home/index.php">Home</a>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInUp" href="#">Branches <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/course-system/branches/insert.php">Add New Branch</a>
                <a href="/course-system/branches/list.php">List of Branches</a>
              </div>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInUp" href="#">Courses <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/course-system/courses/insert.php">Add New Course</a>
                <a href="/course-system/courses/list.php">List of Courses</a>
              </div>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInDown" href="#">Students <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/course-system/student/createStudent.php">Create Student</a>
                <a href="/course-system/student/ListStudent.php">Show Students</a>
                <a href="/course-system/student/registered.php">Show Registered</a>
              </div>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInDown" href="#">Admin <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/course-system/admin/createAdmin.php">Add new Admin</a>
                <a href="/course-system/admin/ListAdmin.php">List Admin</a>
              </div>
            </li>

          </ul>
          <?php if (isset($_SESSION['userName'])) : ?>
            <form class="d-flex ms-auto header-login" method="post" role="search">
              <button name="logout" href="/Horus/login.php" class="btn btn-danger margin-response m-auto animate__animated animate__lightSpeedInRight">Logout </button>
            </form>

          <?php else : ?>
            <form class="d-flex ms-auto header-login" role="search">
              <a href="/Horus/login.php" class="Btn margin-response m-auto animate__animated animate__lightSpeedInRight" data-wow-delay="1s"> Login</a>
            </form>
            <a href="/Horus/Admin/login.php" class=" margin-response m-auto animate__animated animate__lightSpeedInRight" data-wow-delay="1s"> <img src="Admin/assets/img/software-engineer.png" style="width: 30px;" alt=""></a>
          <?php endif; ?>
        </div>
      </div>
    </nav>
  </div>


 
</header>