<?php
include '../includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $name = $_GET['name'];
    $location = $_GET['city'];
    $description = $_GET['description'];
    $i_id = $_GET['i_id'];  
    $rating = $_GET['rating'];    
    $query = "SELECT MAX(substr(c_id,2)) as maximum FROM company";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $c_id = "C"."$max";
    $query = "Insert into company values('$c_id','$i_id','$name','$description','$location','$rating',sysdate())";
    if($con->query($query)){
        echo 'Registered Successfully';
    }
    else{
        echo "Error Occurred \n\n".$con->error;
    }
}
$con->close();