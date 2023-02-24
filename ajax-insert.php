<?php
include('db.php');

?>
<?php
$f_name=$_POST['f_name'];
$e_email=$_POST['e_email'];
$m_mobile=$_POST['m_mobile'];
$c_city=$_POST['c_city'];

$sql="INSERT INTO `student`(`name`, `mobile`, `email`, `city`) VALUES ('{$f_name}','$e_email','$m_mobile','$c_city')";
// $res=mysqli_query($conn,$sql) or die('failed data load');
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
?>