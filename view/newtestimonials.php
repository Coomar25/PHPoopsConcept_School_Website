<html>

<head>
    <title> </title>
</head>
<style>
    .middle-banner {
        height: 30rem;
        width: 100vw;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3)), url(images/banner.jpg) no-repeat;
        background-attachment: fixed;
    }


    .middle-banner .img {
        height: 2rem;
    }


    .middle-banner .school {
        /* font-family: 'Itim', cursive; */
        font-family: times;
        font-size: 90px;
        font-weight: 400;
        text-align: center;
        padding-top: 14rem;
        color: yellowgreen;
    }

    .middle-banner img {

        width: 150px;
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        margin-top: 8rem;
        scroll-behavior: smooth;
    }

    /* .middle-banner .middle-banner-txt {
        margin-top: 8rem;
    } */

    .middle-banner h4 {
        text-align: center;
        font-size: 70px;
        font-weight: 400;
        font-family: 'panama';
        color: orange;
    }


    @media screen and (max-width:1000px) {
        .middle-banner {
            height: 40rem;
        }

    }

    @media screen and (max-width:600px) {

        .middle-banner {
            height: 28rem;
        }

        .middle-banner .school {
            font-size: 40px;
        }

        .middle-banner h4 {
            font-size: 40px;
        }

    }
</style>

<body>

    <div class="middle-banner">
        <img src='images/services-icon-3.svg'>
        <div class="middle-banner-txt">
            <h1 class="school">MODERN SCHOOL</h1>
            <h4> TEAMWORKING </H4>
        </div>

    </div>



</body>

</html>