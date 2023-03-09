<?php include_once("db.php");?>
<?php 
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
if(!empty($name) && !empty($mobile) && !empty($email) && !empty($city)){
    $sql="INSERT INTO `student`(`name`,`mobile`,`email`,`city`) VALUES ('$name','$mobile','$email','$city')";
    if(mysqli_query($conn,$sql)){
     echo "Save Successfully...";
    }else{
        echo"Not Save ";
    }
}else{
    echo "Please Fill All Details...";
}
?>