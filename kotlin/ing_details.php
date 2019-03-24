<?php
include '../includes/dbcon.php';
if(isset($_GET['track_id'])){
    $pid = $_GET['track_id'];
    $response = array();
    $query1 = "Select * from ingredients where pid='$pid'";
    $query2 = "SELECT ing_name FROM `ingredients` WHERE pid='$pid'";
    if($result = $con->query($query1) or die($con->error)){
        $row = $result->fetch_assoc();
        $ferts = $con->query($query2);
        $response=$row;
        //$response['fertilizers'] = array();
        while($fert = $ferts->fetch_assoc()){
            array_push($response,$fert['ing_name']);
        }        
        echo json_encode($response);
    }else{
        die($con->error);
    }
}