<?php
include '../includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $location = $_POST['city'];
    $description = $_POST['description'];
    $i_id = $_POST['i_id'];  
    $rating = $_POST['rating']; 
    
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