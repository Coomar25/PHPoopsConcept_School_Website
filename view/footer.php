<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@NaN,0,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style media="screen">
        .footerPart {
            position: relative;
            background: #000000;
            padding: 2rem;
        }

        .footerPart .footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: auto;
            width: 100vw;
            padding-top: 40px;
            color: #fff;

        }

        .footer {
            background-color: #000000;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .footer-content h3 {
            font-size: 2.1rem;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 3rem;
        }

        .footer-content p {
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
            color: #cacdd2;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: #fff;
            border: 1.1px solid white;
            padding: 5px;

            border-radius: 50%;

        }

        .socials a i {
            font-size: 1.1rem;
            width: 20px;
            transition: color .4s ease;
        }

        .socials a span {
            font-size: 1.1rem;
            width: 20px;
            transition: color .4s ease;
        }

        .socials a:hover i {
            color: aqua;
        }

        .footer-bottom {
            background: #000;
            width: 100vw;
            padding: 20px;
            padding-bottom: 40px;
            text-align: center;
        }

        .footer-bottom p {
            float: right;
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom p a {
            color: #44bae8;
            font-size: 16px;
            text-decoration: none;
        }

        .footer-bottom span {
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }

        .footer-menu {
            float: left;
        }

        .footer-menu ul {
            display: flex;
        }

        .footer-menu ul li {
            padding-right: 10px;
            display: block;
        }

        .footer-menu ul li a {
            color: #cfd2d6;
            text-decoration: none;
        }

        .footer-menu ul li a:hover {
            color: #27bcda;
        }

        @media (max-width:500px) {
            .footer-menu ul {
                display: flex;
                margin-top: 10px;
                margin-bottom: 20px;
            }
        }

        @media screen and (max-width:607px) {
            .footer-content img {
                width: 390px;
            }
        }

        @media screen and (max-width:412px) {
            .footer-content img {
                width: 300px;
            }
        }
    </style>
</head>

<body>
    <!-- =================================footer================================== -->
    <!-- <div class="footersection">
        <div class="footSection">
            <div class=" row footSection mt-4 ">
                <div class=" col-md-6 mt-4">
                    <img class="footerimage" src="./images/Modern.png" alt="">
                </div>

                <div class=" usefullLink col-md-2 mt-4">
                    <h6>Usefull Links</h6>
                    <h6><a href="<?= $base_url ?>?r=home">Home</a></h6>
                    <h6><a href="<?= $base_url ?>?r=class">Student Achievment</a></h6>
                    <h6><a href="<?= $base_url ?>?r=teacherlogin">Teacher Login</a></h6>
                    <h6><a href="<?= $base_url ?>?r=newadmission">New Admission</a></h6>
                    <h6><a href="<?= $base_url ?>?r=events">News/Events</a></h6>
                    <h6><a href="<?= $base_url ?>?r=contact">Contact Us</a></h6>
                </div>
                <div class="usefullAddress col-md-2 mt-4 ">
                    <h5>Get in touch with us</h5>
                    <h5>Address Info</h5>
                    <h5>Nepal, Chitwam</h5>
                    <h5>Khairhanai-5, Parsa</h5>
                </div>


            </div>

           
        </div>
    </div> -->

    <!-- =================================footer End Here================================== -->
    <div class="footerPart">
        <footer>
            <div class="footer-content">
                <h3> <img src="./images/bannerLeft.png" alt=""> </h3>
                <ul class="socials">
                    <li><a href="<?= $base_url ?>?r=home"> <span class="material-symbols-outlined">home</span></a></li>
                    <li>
                        <a href="<?= $base_url ?>?r=newadmission">
                            <span class="material-symbols-outlined">
                                add_circle
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=teacherlogin">
                            <span class="material-symbols-outlined">
                                login
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=events">
                            <span class="material-symbols-outlined">
                                notifications
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=contact">
                            <span class="material-symbols-outlined">
                                contact_page
                            </span>
                        </a>
                    </li>

                </ul>
                <p>Welcome to our school's website! Our school is dedicated to providing a safe and nurturing learning
                    environment for all of our students. We strive to offer the best possible education by utilizing
                    innovative teaching methods and incorporating technology into our classrooms. </p>

            </div>

        </footer>

        <div class="row text-center mt-4 mb-4 text-white">
            <div class="col-md-12">
                <h6>Copyright © 2023 Modern English Boarding School • All Rights Reserved</h6>
                <h6 class="developedBy">Developed By Kumar Chaudhary <a
                        href="https://www.linkedin.com/in/kumar-chaudhary-504126244/">Contact Developer</a> </h6>
                <a href="https://www.kumarchaudhary.com.np/"> Get In Touch
                    <span class="material-symbols-outlined">
                        bubble_chart
                    </span>
                </a>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
</body>

</html>