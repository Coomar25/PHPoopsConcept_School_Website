<?php

include 'model/dbmodule.php';
$obj = new Database();
$obj->select('student_achievment', '*', null, null, null, null);
$overall_result = $obj->getResult();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/class.css" rel="stylesheet" />
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Class Start -->
    <div class="class">
        <div class="container">
            <div class="row class-container">
                <?php
                foreach ($overall_result as list("name" => $Name, "gpa" => $Gpa, "achievmemt" => $Achievment, "image" => $Image, "quote" => $Quote)) {
                    echo '
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="class-wrap">
                            <div class="class-img">
                               <img src=" admin/uploads/' . $Image . '"
                                alt="Image">
                            </div>
                         <div class="class-text">
                            <div class="class-teacher">
                                <img src=" admin/uploads/' . $Image . '"
                                    alt="Image">
                                <h3> ' . $Name . ' </h3>
                            </div>
                            <h2>SEE:-  ' . $Gpa . '</h2>
                            <h2> ' . $Achievment . '</h2>

                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <strong> ' . $Quote . '</strong> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
                            ';
                }

                ?>


            </div>
        </div>
    </div>
    </div>
    <!-- Class End -->


</body>

</html>