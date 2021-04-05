<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--Font Awesome CSS-->
        <link rel="stylesheet" href="css/all.min.css">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu"
        rel="stylesheet">

        <!-- Custom CSS-->
        <link rel="stylesheet" href="css/adminstyle.css">
    </head>
    <body>
        <!-- Top Navbar -->
        <nav class="navbar navbar-dark fixed-top p-0 shadow"
        style="background-color: #225470;">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0"
            href="adminDashboard.php">ELearning<small class="text-white">AdminArea</small>
            </a>
        </nav>

        <!-- Side Bar -->
        <div class="container-fluid mb-5" style="margin-top: 40px;">
            <div class="row">
                <nav class="col-sm-3 col-md-2 bg-light sidebar py-5
                d-print-none">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="dash.php">
                                    <i class="fas fa-home"></i>
                                    Home
                                </a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="adminDashboard.php">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                </a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="courses.php">
                                    <i class="fas fa-chalkboard"></i>
                                    Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lessons.php">
                                    <i class="fas fa-book"></i>
                                    Lessons
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>