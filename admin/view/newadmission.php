<?php

include 'header.php';
// include 'model/dbmodule.php';
// $obj = new Database();
// // select($table, $rows = "*", $join = null, $where = null, $order = null, $limit = null)
// $obj->select('new_admission', '*', null, null, null, null);
// $admissionresult = $obj->getResult();

?>

<table id="admission-table" class=" table table-striped text-light mt-4">
    <tr>
        <th> id </th>
        <th> Student Name </th>
        <th> Mother Name </th>
        <th> Father Name </th>
        <th> Address </th>
        <th> Age </th>
        <th> Gender </th>
        <th> Prevoius School </th>
        <th> Previous Class </th>
        <th> Class Enrollment </th>
        <th> Terms And Services </th>
        <th> Admission Progress </th>
        <th> Status </th>
    </tr>

    <?php

    // foreach ($admissionresult as list("id" => $Id, "stdname" => $stdName, "mname" => $mName, "fname" => $fName, "address" => $Address, "age" => $Age, "gender" => $Gender, "csei" => $csei, "ccei" => $ccei, "cemebs" => $cemebs, "aggrement" => $Aggrement)) {
    
    //     echo '
    //     <tr>
    //     <td>' . $Id . '</td>
    //     <td> ' . $stdName . '</td>
    //     <td>' . $mName . '</td>
    //     <td>' . $fName . '</td>
    //     <td> ' . $Address . '</td>
    //     <td>' . $Age . '</td>
    //     <td>' . $Gender . '</td>
    //     <td>' . $csei . '</td>
    //     <td>' . $ccei . '</td>
    //     <td>' . $cemebs . '</td>
    //     <td>' . $Aggrement . '</td>
    //     <td>
    //     <form action="<?php echo $base_url ?>?r=admissionstatus" method="POST">
    <!-- // <select class="form-select" name="status" aria-label="Default select example">
        // <option selected>Select Status</option>
        // <option value="Pending">Pending</option>
        // <option value="Completed">Completed</option>
        // </select>
    // <button type="submit" class="btn btn-primary mt-2"> Submit </button>
    // </form>
    // </td>
    // </tr>
    // ';
    // }
    ?> -->

</table>



<script>

    $(document).ready(function () {
        $.ajax({
            url: '<?= $base_url ?>?r=admissiondJson',
            dataType: 'json',
            success: function (data) {
                var table = $('#admission-table');
                $.each(data, function (index, value) {
                    table.append(
                        `
                            <tr>
                                <td>${value.id}</>
                                <td>${value.stdname}</>
                                <td>${value.mname}</>
                                <td>${value.fname}</>
                                <td>${value.address}</>
                                <td>${value.age}</>
                                <td>${value.gender}</>
                                <td>${value.csei}</>
                                <td>${value.ccei}</>
                                <td>${value.cemebs}</>
                                <td>${value.aggrement}</>
                                <td> 
                                    <form action="<?php echo $base_url ?>?r=admissionstatus" method="POST">
                                        <input name="id" value = ${value.id} type="hidden">
                                        <select class="form-select" name="admissionstatus" aria-label="Default select example">
                                            <option selected>Select Status</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Completed">Completed</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-2"> Submit </button>
                                    </form>
                                </td>
                                <td>${value.status}</td>
                             </tr>
                        `
                    );
                });
            }
        });
    });



</script>