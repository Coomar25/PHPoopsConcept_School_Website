<?php
// include 'model/dbmodule.php'; No need to write this because it has already been called once in home.php at about .php file
// $objt = new Database();
// select($table, $rows = "*", $join = null, $where = null, $order = null, $limit = null)
$obj->select('teacher_forum', '*', null, "category= 'dynamic'", null, null);
$dyResult = $obj->getResult();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Nunito:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Demo styles -->
    <style>
        /* font-family: 'Cormorant Garamond', serif;
font-family: 'Nunito', sans-serif; */


        :root {

            --color-newbg: #1b1b1b;
            --color-bg: #1f1f38;
            --color-bg-varient: #2c2c6c;
            --color-primary: #4bb5ff;
            --color-primary-varient: rgba(77, 181, 255, 0.4);
            --color-white: #fff;
            --color-light: rgba(255, 255, 255, 0.6);
            --transition: all 400ms ease;
        }


        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background-color: aqua;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100vw;
            height: 400px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background-color: var(--color-bg-varient);
            color: antiquewhite;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 4rem;
        }

        .swiper-slide img {
            display: block;
            margin-top: 10px;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 4rem;
            overflow: hidden;
        }

        .slide-title {
            position: absolute;
            top: 70%;
            font-family: 'Cormorant Garamond', serif;
            color: antiquewhite;
            font-size: 2rem;
        }

        .swiper-slide h4 {
            font-family: 'Nunito', sans-serif;

        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <?php
            foreach ($dyResult as list("name" => $Name, "image" => $Image, "post" => $Post)) {
                echo '
                <div class="swiper-slide"> <img src="admin/uploads/' . $Image . '" alt="">
                <h1 class="slide-title">
                    ' . $Name . '
                </h1>
                <h4>' . $Post . '</h4>
            </div>
                ';
            }
            ?>

            <!-- <div class="swiper-slide"> <img src="images/ramchandrasir.jpg" alt="">
                <h1 class="slide-title">
                    Name:- Rudra Regmi
                </h1>
                <h4>Vice Principals</h4>
            </div>
            <div class="swiper-slide"> <img src="images/ramchandrasir.jpg" alt="">
                <h1 class="slide-title">
                    Name:- Rudra Regmi
                </h1>
                <h4>Vice Principals</h4>
            </div>
            <div class="swiper-slide"> <img src="images/ramchandrasir.jpg" alt="">
                <h1 class="slide-title">
                    Name:- Rudra Regmi
                </h1>
                <h4>Vice Principals</h4>
            </div> -->
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            centeredSlides: false,
            spaceBetween: 30,
            grabCursor: true,
            autoplay: {
                delay: 2000, // Time in milliseconds between each slide
                disableOnInteraction: false, // Enable/disable autoplay on user interaction
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            breakpoints: {
                // when window width is <= 768px
                1024: {
                    slidesPerView: 5,
                    centeredSlides: true,
                    spaceBetween: 10

                },
                768: {
                    slidesPerView: 3,
                    centeredSlides: true,
                    spaceBetween: 10
                },
                400: {
                    slidesPerView: 1,
                    centeredSlides: true,
                    spaceBetween: 10
                },
                350: {
                    slidesPerView: 1,
                    centeredSlides: true,
                    spaceBetween: 10
                }
            }
        });
    </script>
</body>

</html>