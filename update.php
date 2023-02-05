<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['update'])){

$id = $_POST['updateid'];
$name = $_POST['name'];
$patientsid = $_POST['patientsid'];
$age = $_POST['age'];
$phone  = $_POST['phone'];
$status = $_POST['status'];
$keen = $_POST['keen'];
$date = $_POST['date'];

$query ="UPDATE mother SET name='$name',patientsid='$patientsid',age='$age',phone='$phone',status='$status',keen='$keen' ,date='$date' WHERE id='$id' ";
$query_run = mysqli_query($conn, $query);

if($query_run){
    echo("<script LANGUAGE='JavaScript'> window.alert('Data updated successfully');window.location.href='schedule.php';</script>");
//    header('Location: mother.php');
}
else{
    echo'<script>alert("Failed to update"); </script>';   
}


}



?> 