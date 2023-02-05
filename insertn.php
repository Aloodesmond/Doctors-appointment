<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['submit'])){

$appid = $_POST['appid'];
$mname = $_POST['mname'];
$cname = $_POST['cname'];
$phone  = $_POST['phone'];
$datev = $_POST['datev'];



$query ="INSERT INTO visit VALUES(null,'$appid','$mname','$cname','$phone','$datev')";
$query_run = mysqli_query($conn,$query);

if($query_run){
    echo("<script LANGUAGE='JavaScript'> window.alert('Appointment Created');window.location.href='visit.php';</script>");
//    header('Location: mother.php');
}
else{
    echo'<script>alert("Not Registered"); </script>';   
}


}



?> 