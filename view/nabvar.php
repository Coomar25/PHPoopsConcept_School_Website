<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- below fontawesome icon not working sometimes -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- ICon Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>

<body>

    <nav class="mynavbar">
        <div class="content">
            <div class="logo">
                <!-- <img src="https://th.bing.com/th/id/R.7e8a0015935d244af373ffd25f878b7b?rik=1Ge0H7PVWxdkOw&pid=ImgRaw&r=0"
                    height="50" /> -->
                <img src="./images/schoolLogo.png" height="65" />
            </div>

            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <!-- <i class="fa fa-times"></i> -->
                    <i class="bi bi-x-circle"></i>
                </div>
                <li><a href="<?= $base_url ?>?r=home">Home</a></li>
                <li><a href="<?= $base_url ?>?r=class">Student Achievment</a></li>
                <li><a href="<?= $base_url ?>?r=teacherlogin">Teacher Login</a></li>
                <li><a href="<?= $base_url ?>?r=newadmission">New Admission</a></li>
                <li><a href="<?= $base_url ?>?r=events">News/Events</a></li>
                <li><a href="<?= $base_url ?>?r=contact">Contact Us</a></li>
            </ul>
            <div class="icon menu-btn">
                <!-- <i class="fa fa-bars"></i> -->
                <i class="bi bi-list"></i>
            </div>
        </div>
    </nav>





    <!-- =================================================== -->




    <script>
        const menu = document.querySelector(".menu-list");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");

        menuBtn.onclick = () => {
            menu.classList.add("active");
            menuBtn.classList.add("hide");
        }

        cancelBtn.onclick = () => {
            menu.classList.remove("active");
            menuBtn.classList.remove("hide");
        }
    </script>
</body>

</html>