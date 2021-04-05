<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ELearning</title>
        <link  rel="stylesheet" href="css/bootstrap.min.css"/>
        <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
        <link rel="stylesheet" href="css/main.css">
        <link  rel="stylesheet" href="css/font.css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <?php
        if (@$_GET['w']) {
            echo '<script>alert("' . @$_GET['w'] . '");</script>';
        }
        ?>

    </head>
    <?php
    include_once 'dbConnection.php';
    ?>
    <body>
        <div class="header">
            <div class="row">
                <div class="col-lg-6">
                    <span class="logo">ELearning</span></div>
                <div class="col-md-4 col-md-offset-2">
                <?php
                include_once 'dbConnection.php';
                session_start();
                if (!(isset($_SESSION['username']))) {
                    header("location:index.php");
                } else {
                    $name     = $_SESSION['name'];
                    $username = $_SESSION['username'];
                    
                    include_once 'dbConnection.php';
                    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $username . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
                }
                ?>
                </div>
            </div>
        </div>
<div class="bg">
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php
if (@$_GET['q'] == 1)
    echo 'class="active"';
?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php
if (@$_GET['q'] == 2)
    echo 'class="active"';
?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;My History</a></li>
    <li <?php
if (@$_GET['q'] == 3)
    echo 'class="active"';
?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Leaderboard</a></li>
<li <?php
if (@$_GET['q'] == 3)
    echo 'class="active"';
?>><a href="stucourses.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;Courses</a></li></ul>
            
      </div>
  </div>
</nav>


            <!-- Start Course Page Banner -->
            <div class="container-fluid bg-dark">
                <div class="row">
                    <img src="./image/course.png" alt="courses"
                    style="height: 500px; width:100%; object-fit:cover;
                    box-shadow:10px;"/>
                </div>
            </div>
            <!-- End Course Page Banner -->



            <!-- Start All Course -->
            <div class="container" style="margin-top: 20px;">
                <h1 class="text-center">All Courses</h1>
                
                <?php
                    $sql = "SELECT * FROM course";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $course_id = $row['course_id'];
                            echo '
                            <div class="col-sm-4 mb-4" style="padding:30px;">
                                <a href="coursedetails.php?course_id='.$course_id.'"
                                    class="btn" style="text-align: left; padding:0px;">
                                    <div class="card">
                                        <img src="'.str_replace('..','.',$row['couse_img']).'"
                                            class="card-img-top" alt="course"/>
                                        <div class="card-body">
                                            <h5 class="cad-title">'.$row['course_name'].'</h5>
                                            <p class="card-text">'.$row['course_desc'].'</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text d-inline">Price: 
                                                <small>
                                                    <del>&#8377 '.$row['course_original_price'].'</del>
                                                </small>
                                                <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span>
                                            </p>
                                            <a class="btn btn-primary text-white font-weight-bolder float-right"
                                                href="coursedetails.php?course_id='.$course_id.'">Enroll
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            ';
                        }
                    }
                ?>
                </div> <!-- End All Course Row -->
            </div>
            <!-- End All Course -->


        </div>
        <div class="col-md-2 box">
            <a href="feedback.php" style="color:lightyellow;text-decoration:underline" onmouseover="this.style('color:yellow')" target="new">Feedback</a>
        </div>
    </body>
</html>
