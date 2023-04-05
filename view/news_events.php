<?php
include 'nabvar.php';
include 'model/dbmodule.php';
$obj = new Database();
$obj->select("notice", "*", null, null, null, null);
$result = $obj->getResult();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .event {
            padding-top: 6rem;
        }

        .news {
            display: grid;
            grid-template-columns: repeat(2, 1fr);

        }

        .news-heading {
            text-align: center;
            font-family: cursive;
            font-size: 5rem;
        }

        .up-eve {
            font-family: cursive;
            font-size: 2rem;
        }



        .left {
            width: 40vw;
        }

        .right {
            width: 40vw;
        }

        .l-section {
            text-align: center;
            margin: 1rem;
        }

        .c-section {
            display: flex;
            justify-content: space-evenly;
        }

        .date-section {

            height: 250px;
            width: 200px;
            border-radius: 10px;
            border: 5px dotted;
            border-color: #2ea0dd;
            border-start-end-radius: 80px;
        }

        .date-section h1 {
            text-align: center;
            font-size: 2.8rem;
            margin: 2rem;
            color: rgb(233, 166, 22);
        }

        .notice-section {
            height: 200px;
            width: 340px;
            padding: 4px;
        }

        .notice-section p {
            text-align: left;
        }

        @media screen and (max-width:768px) {
            .news {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 10px;
            }

            .left {
                width: 43vw;
            }


            .c-section {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;

            }

            .date-section {
                height: 150px;
                width: 140px;
                border: 3px dotted;
            }

            .date-section h1 {
                margin: 12px;
            }


            .notice-section {
                height: 160px;
                width: 220px;
            }
        }
    </style>
</head>

<body>

    <div class="event">
        <div class="news-heading">
            <h3>School Events</h3>
            <h1 class="up-eve">Upcomming Events</h1>
        </div>
        <div class="news">

            <?php

            foreach ($result as list("id" => $Id, "day" => $Day, "monthyear" => $MonthYear, "noticetitle" => $NoticeTitle, "noticemessage" => $NoticeMessage)) {

                echo '

                <div class="l-section">
                <div class="c-section">
                    <div class="date-section">
                        <h1> ' . $Day . '</h1>
                        <h2> ' . $MonthYear . '</h2>
                    </div>
                    <div class="notice-section">
                        <h3>' . $NoticeTitle . '</h3>
                        <p>' . $NoticeMessage . '</p>
                    </div>
                </div>
                </div>                
                ';

            }


            ?>




        </div>


    </div>




</body>

</html>

<?php

include 'view/footer.php';
?>