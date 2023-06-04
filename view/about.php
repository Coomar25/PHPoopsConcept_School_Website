<?php
// include 'model/dbmodule.php';
// $obj = new Database();
// select($table, $rows = "*", $join = null, $where = null, $order = null, $limit = null)
$obj->select('teacher_forum', '*', null, "category= 'static'", null, null);
$teacherdata = $obj->getResult();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">

</head>

<body>
    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About Our Proefficient Professional Teacher</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which
                        will help you research new products and launch them in new emerging markets</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <?php

                foreach ($teacherdata as list("name" => $Name, "image" => $Image, "post" => $Post, "quote" => $Quote, "category" => $Category)) {
                    echo '
                <div class="col-lg-3">
                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper teamimg">
                        <img class="img-fluid" src="admin/uploads/' . $Image . '" alt="alternative">
                    </div> <!-- end of image-wrapper -->
                    <p class="p-large"><strong>' . $Name . '</strong></p>
                    <p class="job-title"> ' . $Post . '</p>
                   
                </div> <!-- end of team-member -->
                <!-- end of team member -->
            </div>    
                    ';
                }
                ?>


                <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->






    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
</body>

</html>