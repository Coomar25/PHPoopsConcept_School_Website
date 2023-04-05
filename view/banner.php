<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/banner.css" />

    <style>
        .section {
            height: 80vh;
            width: 100vw;
            padding-top: 4.8rem;
            /* object-fit: contain; */
            object-fit: cover;
            overflow: hidden;
        }


        @media screen and (max-width:1024px) {

            .section {
                height: 60vh;
            }
        }

        @media screen and (max-width:900px) {

            .section {
                height: 50vh;
                padding-top: 4.4rem;
            }
        }

        @media screen and (max-width:770px) {
            .section {
                padding-top: 4rem;
            }
        }


        @media screen and (max-width:600px) {

            .section {
                height: 40vh;
            }
        }
    </style>
</head>

<body>

    <!-- style="padding-top:4.4rem;" -->
    <!-- https://cemhri.org/wp-content/uploads/2018/04/Home-Four-Banner-Background-Image.png -->

    <div class="section">

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banner.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </div>




</body>

</html>