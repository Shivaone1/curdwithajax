<?php include_once('db.php');?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Curd Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Add Record with php & Ajax</h1>
        <tr>
            <td>
                Name : <input type="text" id="name">&nbsp;
                Mobile : <input type="text" id="mobile">&nbsp;
                Email : <input type="text" id="email">&nbsp;
                City : <input type="text" id="city">&nbsp;
                <input type="submit" id="save-data" value="Save" class="btn btn-success">
            </td>
        </tr>

    </div>
</body>

<script type="text/javascript">
$(document).ready(function() {
    function loadTable() {
        $.ajax({
            url: "function.php", // Read/insert/update/delete
            type: "POST", // GET/Post
            success: function(data) {
                $("#table-data").html(data);
            }
        });
    }
});
// loadTable();
$("#save-data").on("click", function(e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var city = $("#city").val();
    $.ajax({
        url: "ajax-insert.php",
        type: "POST",
        data: {
            f_name: name,
            e_email: email,
            m_mobile: mobile,
            c_city: city
        },
        success: function(data) {
            if (data == 1) {
                loadTable();
            } else {
                alert('Data Not Found...');
            }
            loadTable();
        }

    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>

</html>