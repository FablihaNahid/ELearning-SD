<?php
if(!isset($_SESSION)){
    session_start();
}
include('dbConnection.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA_Compatible" content="ie=edge">
        <title>Watch Courses</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid bg-success p-2">
            <h3>Welcome To ELearning</h3>
            <a class="btn btn-danger" href="stucourses.php">All Courses</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 border-right">
                    <h4 class="text-center">Lessons</h4>
                    <ul id="playlist" class="nav flex-column">
                        <?php
                            if(isset($_GET['course_id'])){
                                $course_id = $_GET['course_id'];
                                $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo'
                                        <li class="nav-item border-bottom py-2"
                                        movieurl='.$row['lesson_link'].' style="cursor:
                                        pointer;">'.$row['lesson_name'].'</li>';
                                    }
                                }
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <video id="videoarea" src="" class="mt-5 w-75 ml-2" 
                    controls>
                    </video>
                </div>
            </div>
        </div>
        

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/all.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>

