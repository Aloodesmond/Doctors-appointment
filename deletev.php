<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['delete'])){

    $id = $_POST['deleteid'];

    $query = "DELETE FROM visit WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);

if($query_run){
    echo("<script LANGUAGE='JavaScript'> window.alert('Data Deleted');window.location.href='visit.php';</script>");
//    header('Location: mother.php');
}
else{
    echo'<script>alert("Failed to delete"); </script>';   
}

}


















?>