<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css"
        crossorigin="anonymous" />
    <style>
        .notice {
            margin-top: 5rem;
            width: 60vw;
            color: antiquewhite;
        }

        .date-picker {
            color: black;
        }

        .cardcontainer {
            display: flex;
            justify-content: space-between;
        }

        @media screen and (max-width:600px) {

            .notice {
                width: 40vw;
            }

            .noticeWrappper {
                scroll-behavior: smooth;
                height: max-content;
            }
        }

        @media screen and (max-width:412px) {

            .notice {
                width: 25vw;
                height: fit-content;
                margin-bottom: 4rem;
            }

            .form-control {
                width: fit-content;
            }

            .form-label {
                width: fit-content;
            }
        }
    </style>
</head>

<body>

    <div class="noticeWrappper">

        <div class=" notice">
            <form action="<?= $base_url ?>?r=noticeform" method="POST" class="row g-3 mt-4">
                <div class="col-md-4">
                    <label for="date" class="form-label">Select a date</label><br>
                    <input type="text" id="date" name="day" class="date-picker " />
                </div>
                <div class="col-md-6">
                    <label for="monthyear" class="form-label">Select Month and Year</label> <br>
                    <input type="text" id="monthyear" name="monthyear" class="monthyear-picker " />
                </div>
                <div class="col-12 mt-3">
                    <label for="Notice" class="form-label">Notice Title</label>
                    <input type="text" name="noticetitle" class="form-control" id="Notice"
                        placeholder="Farewell Program">
                </div>
                <div class="col-12 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Enter Notice Here</label>
                    <textarea class="form-control" name="noticemessage" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>


        <div class="cardWrapper mt-4">
            <div class="card">
                <div class="card-header">
                    Notice/Events
                </div>

                <table id="NoticeEvent" class=" table table-striped text-dark mt-4">
                    <tr>
                        <th>Notice Date</th>
                        <th>Notice Title </th>
                        <th> Action </th>
                    </tr>

                </table>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: '<?= $base_url ?>?r=noticeEvent',
                dataType: 'json',
                success: function (data) {
                    var table = $('#NoticeEvent');
                    $.each(data, function (index, noticeVar) {
                        table.append(
                            `
                            <tr>
                                <td> ${noticeVar.monthyear} </td>
                                <td> ${noticeVar.noticetitle}</td>
                                <td>
                                    <button class="btn btn-danger"> Delete</button>
                                </td>
                            </tr>
                            `
                        );
                    });
                }
            });
        });
    </script>













    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js"
        crossorigin="anonymous"></script>

    <script>
        $('.date-picker').nepaliDatePicker({
            dateFormat: '%d',
            closeOnDateSelect: true
        });

        $('.monthyear-picker').nepaliDatePicker({
            dateFormat: "%D, %M, %y",
            closeOnDateSelect: true,
        });


    </script>



</body>

</html>