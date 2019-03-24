<?php
include '../includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $name = $_GET['name'];
    $location = $_GET['city'];
    $description = $_GET['description'];
    $i_id = $_GET['i_id'];  
    $rating = $_GET['rating']; 
    
    $query = "SELECT MAX(substr(w_id,2)) as maximum FROM warehouse";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $w_id = "W"."$max";
    
    $query = "Insert into warehouse values('$w_id','$name','$capacity','$location','$rating',sysdate())";
    if($con->query($query)){
        echo 'Registered Successfully';
    }
    else{
        echo "Error Occurred \n\n".$con->error;
    }
}
$con->close();