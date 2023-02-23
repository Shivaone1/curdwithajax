<?php 
    include_once("db.php");
?>
<?php 
$sql= "select * from student";
$res=mysqli_query($conn,$sql) or die("SQL Query failed...");
$output="";
if(mysqli_num_rows($res)>0){
    $output='<table border="1" width="100" cellspacing="0" cellpadding="10px">
    <tr>
        <th>name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>City</th>
    </tr>';
    while($row=mysqli_fetch_assoc($res)){
        $output.="
        <tr>
        <td>{$row["name"]}</td>
        <td>{$row["mobile"]}</td>
        <td>{$row["email"]}</td>
        <td>{$row["city"]}</td>
        </tr>";
    }
    $output.="<table>";
    echo $output;
}else{
 echo"<h2>Record Not Found</h2>";
}
?>