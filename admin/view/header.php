<!Doctype HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- ================================================== -->
    <!-- ====================achievment==================== -->
    <!-- ================================================== -->

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <!-- <link href="css/style.css" rel="stylesheet" /> -->
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/css-circular-prog-bar.css">

    <!-- ================================================== -->
    <!-- ====================achievment==================== -->
    <!-- ================================================== -->

</head>

<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>M</span>odern</p>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="<?= $base_url ?>?r=achievment" class="icon-a"><i class="fa fa-users icons"></i>
            &nbsp;&nbsp;Achievment</a>
        <a href="<?= $base_url ?>?r=addteacher" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Add
            Teacher</a>
        <a href="<?= $base_url ?>?r=newadmission" class="icon-a"><i class="fa fa-shopping-bag icons"></i>
            &nbsp;&nbsp;New Admission</a>
        <a href="<?= $base_url ?>?r=contactmessage" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Contact
            Message</a>
        <a href="<?= $base_url ?>?r=events" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;
            Notice/Events</a>
        <a href="<?= $base_url ?>?r=logout" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Logout</a>
        <!-- <a href="<?= $base_url ?>?r=logout">Logout</a> -->
    </div>
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">
                </div>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>

                $(".nav").click(function () {
                    $("#mySidenav").css('width', '70px');
                    $("#main").css('margin-left', '70px');
                    $(".logo").css('visibility', 'hidden');
                    $(".logo span").css('visibility', 'visible');
                    $(".logo span").css('margin-left', '-10px');
                    $(".icon-a").css('visibility', 'hidden');
                    $(".icons").css('visibility', 'visible');
                    $(".icons").css('margin-left', '-8px');
                    $(".nav").css('display', 'none');
                    $(".nav2").css('display', 'block');
                });

                $(".nav2").click(function () {
                    $("#mySidenav").css('width', '300px');
                    $("#main").css('margin-left', '300px');
                    $(".logo").css('visibility', 'visible');
                    $(".icon-a").css('visibility', 'visible');
                    $(".icons").css('visibility', 'visible');
                    $(".nav").css('display', 'block');
                    $(".nav2").css('display', 'none');
                });

            </script>

</body>


</html>