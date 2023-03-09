<?php include_once("db.php");?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD with ajax & PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-4">
        <h1><span><button class="btn btn-primary">Add Student</button></span></h1>
        <form action="" method="post" id="myform">
            <label>Name</label>
            <input class="form-control" type="text" id="name">
            <label>Mobile</label>
            <input class="form-control" type="text" id="mobile">
            <label>Email ID</label>
            <input class="form-control" type="text" id="email">
            <label>City</label>
            <input class="form-control" type="text" id="city">
            <button type="submit" id="add" class="form-control btn btn-success">Save</button>
        </form>
        <div id="msg" class="text-success"></div>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#add").click(function(e) {
                e.preventDefault();
                let name= $("#name").val();
                let mobile= $("#mobile").val();
                let email= $("#email").val();
                let city= $("#city").val();
                // mydata = {name:name,mobile:mobile,email:email,city:city};
                // console.log(mydata);
                $.ajax({
                    url: "save.php",
                    method: "POST",
                    // data:JSON.stringify(mydata);
                    data:{ name, mobile, email, city },
                    success: function(data) {
                        // console.log(data);
                        msg="<div>"+data+"</div>";
                        $("#msg").html(msg);
                        $("#myform")[0].reset();

                    }   
                });
            });
        });
        </script>
    </div>
    <div class="container">
        <h1><span><button class="btn btn-primary">Student Details</button></span></h1>
        <?php 
        $sql="select * from student ORDER BY ID DESC";
        $res=mysqli_query($conn,$sql) or die("SQL Query failed..."); 
        if(mysqli_num_rows($res)>0) :
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email ID</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $s=1;
                    while($row=mysqli_fetch_assoc($res)) { 
                    ?>
                <tr>
                    <td><?php echo $s++; ?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td>Edit / Delete</td>
                </tr>
                <?php } endif ?>
            </tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
    </script>
</body>

</html>