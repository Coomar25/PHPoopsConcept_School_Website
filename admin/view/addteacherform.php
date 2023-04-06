<?php
include 'header.php';
include 'model/dbmodule.php';
$obj = new Database();
$obj->select("teacher_forum", "*", null, null, null, null);
$teacherRecord = $obj->getResult();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .radio-category {
            max-width: 400px;
            border: 2px solid dotted;
            border-color: white;
            border-radius: 4rem;
            margin: 1rem;
        }

        .h-teach {
            color: antiquewhite;
            margin-top: 4rem;
            text-align: center;
        }

        .teacherImage {
            height: 100px;
            width: 100px;
            border-radius: 1rem;
        }
    </style>
</head>


<body>
    <div class="h-teach">
        <h2> Add Teacher Post

    </div>
    <div class="contact-form">
        <form action="<?= $base_url ?>?r=teacherforum" method="POST" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            </div>
            <div>
                <input type="text" name="tname" placeholder="Teacher Name" required class="optional-input">
            </div>
            <div>
                <input type="text" name="tpost" placeholder="Post" required class="optional-input">
            </div>
            <div>
                <input class="form-control" name="timage" type="file" id="formFileMultiple" multiple required>
            </div>
            <div class="radio-category">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tvalue" value="static" id="flexRadioDefault1"
                        required>
                    <label class="form-check-label text-white" for="flexRadioDefault1">
                        Static
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tvalue" value="dynamic" id="flexRadioDefault2"
                        required>
                    <label class="form-check-label text-white" for="flexRadioDefault2">
                        Dynamic
                    </label>
                </div>
            </div>

            <div>
                <textarea name="tquote" placeholder="Quote regarding teacher perspective"
                    class="input_message optional-input"></textarea>

            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn_on-hover">
                    Send
                </button>
            </div>
        </form>
    </div>


    <table id="teacherRecordtable" class=" table table-striped text-light mt-4">
        <tr>

            <th>Image</th>
            <th> Name </th>
            <th> Category </th>
            <th> Action </th>
        </tr>


    </table>


    <!-- I can show data from json too -->

    <script>

        $(document).ready(function () {
            $.ajax({
                url: '<?= $base_url ?>?r=teacherRecord',
                dataType: 'json',
                success: function (data) {
                    var table = $('#teacherRecordtable');
                    $.each(data, function (index, variable) {
                        table.append(
                            `
                            <tr>
                                <td> <img class=" teacherImage" src=" uploads/${variable.image}" alt="${variable.image}"> </td>
                                <td>  ${variable.name}</td>
                                <td> ${variable.category}</td>
                                <td>
                                    <form action="<?= $base_url ?>?r=addTeacherDelete" method="POST">
                                    <input type="hidden" name="id" value="${variable.id}" >
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