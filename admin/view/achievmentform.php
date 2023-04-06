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

    <style>
        .stdAchievmentPhoto {
            height: 200px;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="contact-form">
        <form action="<?= $base_url ?>?r=studentAchievment" method="post" enctype="multipart/form-data">
            <div>
                <input type="text" name="stdname" placeholder="Student Name" required>
            </div>
            <div>
                <input type="text" name="stdgpa" placeholder="GPA" required>
            </div>
            <div>
                <input type="text" name="stdachievment" placeholder="Achievment/Post" required>
            </div>
            <div>
                <input class="form-control" name="stdimg" type="file" id="formFileMultiple" multiple required>
            </div>
            <div>
                <input type="text" name="stdquote" placeholder="Quote regarding thier progress" class="input_message"
                    required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn_on-hover">
                    Send
                </button>
            </div>
        </form>
    </div>

    <table id="stdAchievment" class=" table table-striped text-light mt-4">
        <tr>

            <th>Name</th>
            <th> GPA </th>
            <th> Achievment </th>
            <th> Action </th>

        </tr>



    </table>


    <script>

        $(document).ready(function () {
            $.ajax({
                url: '<?= $base_url ?>?r=stdAchievmentJsonData',
                dataType: 'json',
                success: function (data) {
                    var table = $('#stdAchievment');
                    $.each(data, function (index, achievment) {
                        table.append(`
                        <tr>
                        <td>${achievment.name}</td>
                        <td>${achievment.gpa}</td>
                        <td>${achievment.achievmemt}</td>
                        <td> <img class="stdAchievmentPhoto" src= "./uploads/${achievment.image}"> </td>
                        <td>
                        <form action="<?= $base_url ?>?r=stdAchievmentDelete" method="POST">
                        <input type="hidden" name="id" value="${achievment.id}" >
                        <button class="btn btn-danger" type="submit"> Delete </button>
                        </form>
                        </td>
                        </tr>
                    `
                        );

                    });
                }

            });
        });
    </script>
</body>

</html>