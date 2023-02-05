<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['submit'])){

$weight = $_POST['weight'];
$height = $_POST['height'];
$temp  = $_POST['temp'];
$age = $_POST['age'];
$vaccine1 = $_POST['vaccine1'];
$date2 = $_POST['date2'];

$query ="INSERT INTO nextapp VALUES(null,'$weight','$height','$temp','$age','$vaccine1','$date2')";
$query_run = mysqli_query($conn,$query);

if($query_run){
    echo("<script LANGUAGE='JavaScript'> window.alert('Succesfully Checked');window.location.href='nextapp.php';</script>");
//    header('Location: mother.php');
}
else{
    echo'<script>alert("Not Registered"); </script>';   
}


}
?> 