<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['submit'])){

$name = $_POST['name'];
$age = $_POST['age'];
$gender  = $_POST['gender'];
$date1 = $_POST['date1'];
$place = $_POST['place'];
$vaccine = $_POST['vaccine'];

$query ="INSERT INTO child VALUES(null,'$name','$age','$gender','$date1','$place','$vaccine')";
$query_run = mysqli_query($conn,$query);

if($query_run){
    echo("<script LANGUAGE='JavaScript'> window.alert('Succesfully Registered');window.location.href='child.php';</script>");
//    header('Location: mother.php');
}
else{
    echo'<script>alert("Not Registered"); </script>';   
}


}



?> 