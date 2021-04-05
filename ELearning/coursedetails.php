<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="icon" href="icon.png" type="image/icon" sizes="16x16">
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
                    <span class="logo">ELearning</span>
                </div>
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
                                    echo 'class="active"';?> >
                                <a href="account.php?q=1">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li <?php
                                if (@$_GET['q'] == 2)
                                    echo 'class="active"';?> > 
                                <a href="account.php?q=2">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;My History
                                </a>
                            </li>
                            <li <?php
                                if (@$_GET['q'] == 3)
                                    echo 'class="active"'; ?>>
                                <a href="account.php?q=3">
                                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Leaderboard
                                </a>
                            </li>
                            <li <?php
                                if (@$_GET['q'] == 4)
                                    echo 'class="active"'; ?>>
                                <a href="coursedetails.php">
                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;Courses
                                </a>
                            </li>
                            <li <?php
                                if (@$_GET['q'] == 5)
                                    echo 'class="active"'; ?>>
                                <a href="#">
                                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </nav>

            <!-- Start Course page Banner -->
            <div class="container-fluid bg-dark">
                <div class="row">
                    <img src="./image/course.png" alt="course"
                    style="height: 500px; width:100%; object-fit:cover;
                    box-shadow:10px;"/>
                </div>
            </div>
            <!-- End Course page Banner -->

            <!-- Start Main Content -->
            <div class="container" style="margin-top: 20px;">
            <?php
            if(isset($_GET['course_id'])){
                $course_id = $_GET['course_id'];
                //$_SESSION['course_id'] = $course_id;
                $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
            }
            ?>
                <div class="row">
                    <div class="col-md-4" >
                        <img src="<?php echo str_replace('..', '.', $row['couse_img'])?>" 
                        class="card-img-top" alt="Data"/>
                    </div>
                    <div class="col-md-8"style="padding-left: 180px;">
                        <div class="card-body">
                            <h5 class="card-title">Course Name: <?php echo $row['course_name'] ?></h5>
                            <p class="card-text"> Description: <?php echo $row['course_desc'] ?></p>
                            <p class="card-text"> Duration: <?php echo $row['course_duration'] ?></p>
                            <form action="" method="post">
                                <p class="card-text d-inline">Price: 
                                    <small>
                                        <del>&#8377
                                        <?php echo $row['course_original_price'] ?>
                                        </del>
                                    </small>
                                    <span class="font-weight-bolder">&#8377 
                                    <?php echo $row['course_price'] ?>
                                    </span>
                                </p>
                                <input type="hidden" name="id" value="'$row['course_price']'">
                                <!--<button type="submit" class="btn btn-primary text-white
                                font-weight-bolder" style="float: right;" name="start">Start Now</button>-->
                                <a href="watchcourse.php?course_id=<?php echo
                                $row['course_id'] ?>" class="btn btn-primary mt-5 float-right">Start Now</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container" style="padding-top: 30px;">
                    <div class="row">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Lesson No.</th>
                                <th scope="col">Lesson Name</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php 
                    $sql = "SELECT * FROM lesson";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $num = 0;
                        while($row = $result->fetch_assoc()){
                            if($course_id == $row['course_id']){
                                $num++;
                                echo '
                                <tr>
                                    <th scope="row">'.$num.'</th>
                                        <td>'.$row['lesson_name'].'</td>
                                </tr>';
                            }
                        }
                    }
                    ?>
                        
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Main COntent -->
        </div>

        <div class="row footer">
            <div class="col-md-2 box"></div>
            <div class="col-md-3 box">
                <a href="#" data-toggle="modal" data-target="#developers" s style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Designed By Arpy & Biva</a>
            </div>
        </div>
        <!-- Modal For Developers-->
        <div class="modal fade title1" id="developers">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" style="font-family:'typo' ">
                            <span style="color:orange">ELearning Info</span>
                        </h4>
                    </div>
	  
                    <div class="modal-body">
                        <p>
		                    <div class="row">
		                        <div class="col-md-4">
		                            <img src="image/muki.jpg" width=100 height=100 alt="Mugunthan" class="img-rounded">
		                        </div>
		                        <div class="col-md-5">
		                            <a href="" style="color:#202020; font-family:'typo' ; font-size:18px" title="">Elearning</a>
		                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">Arpy & Biva</h4>
                                    <h4 style="font-family:'typo' ">Ahsanullah University of Science & Technology</h4>
                                    <h4 style="font-family:'typo' ">Dhaka, Bangaldesh </h4>
                                </div>
                            </div>
                        </p>
                    </div>
    
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="col-md-2 box">
            <a href="feedback.php" style="color:lightyellow;text-decoration:underline" onmouseover="this.style('color:yellow')" target="new">Feedback</a>
        </div>
    </body>
</html>