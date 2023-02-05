<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['submit'])){

$name = $_POST['name'];
$patientsid = $_POST['patientsid'];
$age = $_POST['age'];
$phone  = $_POST['phone'];
$status = $_POST['status'];
$keen = $_POST['keen'];
$date = $_POST['date'];

$query ="INSERT INTO mother VALUES(null,'$name','$patientsid','$age','$phone','$status','$keen','$date')";
$query_run = mysqli_query($conn,$query);

if($query_run){
    echo("<script LANGUAGE='JavaScript'> window.alert('Successfully Registered');window.location.href='schedule.php';</script>");
//    header('Location: mother.php');
}
else{
    echo'<script>alert("Not Registered"); </script>';   
}


}



?> 