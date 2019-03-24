<?php
include '../includes/dbcon.php';
if(isset($_GET['track_id'])){
    $pid = $_GET['track_id'];
    $response = array();
    $query = "Select city from product p right join transaction t on p.pid = t.pid where p.pid='$pid'";
    if($result = $con->query($query)){
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }else{
        die($con->error);
    }
}