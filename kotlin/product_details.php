<?php
include '../includes/dbcon.php';
if(isset($_GET['track_id'])){
    $p_id = $_GET['track_id'];
    $response = array();
    $query1 = "Select category from productreg where p_id='$p_id'";
    $query2 = "SELECT fertilizers FROM `fertilizer` WHERE p_id='$p_id'";
    if($result = $con->query($query1) or die($con->error)){
        $row = $result->fetch_assoc();
        $ferts = $con->query($query2) or die($con->error);
        $fert = $ferts->fetch_assoc();
        $response['category'] = $row['category'];
        $response['fertilizers'] = $fert['fertilizers'];      
        echo json_encode($response);
    }else{
        die($con->error);
    }
}