<?php
include 'header.php';
// include 'model/dbmodule.php';
// $obj = new Database();
// $obj->select("contact_message", "*", null, null, null, null);
// $cmessage = $obj->getResult();
?>

<table id="contact-message" class=" table table-striped text-light mt-4">
    <tr>
        <th> id </th>
        <th> Name </th>
        <th> Email </th>
        <th> Message </th>
    </tr>

    <?php
    // foreach ($cmessage as list("id" => $Id, "name" => $Name, "email" => $Email, "message" => $Message)) {
    //     echo '
    //     <tr>
    //         <td> ' . $Id . ' </td>
    //         <td> ' . $Name . ' </td>
    //         <td> ' . $Email . ' </td>
    //         <td> ' . $Message . ' </td>
    //     </tr>
    //     ';
    // }
    ?>
</table>

<script>

    $(document).ready(function () {
        $.ajax({
            url: '<?= $base_url ?>?r=contactJson',
            dataType: 'json',
            success: function (data) {
                var table = $('#contact-message');
                $.each(data, function (index, apple) {
                    table.append(`
                        <tr>
                        <td>${apple.id}</td>
                        <td>${apple.name}</td>
                        <td>${apple.email}</td>
                        <td>${apple.message}</td>
                        <td>
                        <form action="<?= $base_url ?>?r=deleteaction" method="POST">
                        <input type="hidden" name="id" value="${apple.id}" >
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