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
        <h1>Record List</h1>
        <table>
            <tr>
                <td id="table-load">
                    <input type="button" id="load-button" value="load Data" class="btn btn-success">
                </td>
            </tr>
            <tr>
                <td id="table-data">
                    <table class="table" width="100" cellspacing="0" cellpadding="10px">

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                        </tr>
                        <tr>
                        <th scope="col">#</th>
                            <td scope="col">Name</td>
                            <td scope="col">Mobile</td>
                            <td scope="col">Email</td>
                            <td scope="col">City</td>
                        </tr>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>


    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $("#load-button").on("click", function(e) {
        $.ajax({
            url: "function.php", // Read/insert/update/delete
            type: "POST", // GET/Post
            // data: 'action',//string/array/Object 
            success: function(data) {
                $("#table-data").html(data);
            }
        });
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>

</html>