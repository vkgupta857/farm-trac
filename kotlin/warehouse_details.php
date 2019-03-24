<?php

include '../includes/dbcon.php';
if (isset($_GET['track_id'])) {
    $p_id = $_GET['track_id'];
    $response = array();
    $query1 = "Select * from `temp` where p_id='$p_id' && substr(`to`,1,1) = 'w'";
    $result = $con->query($query1) or die($con->error);
    $row = $result->fetch_assoc();
    $date1 = $row['date_time'];
    
    $query2 = "SELECT * FROM `temp` WHERE p_id='$p_id' && substr(`from`,1,1) = 'w'";
    $result2 = $con->query($query2) or die($con->error);
    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $date2 = date($row2['date_time']);
    } else {
        $date2 = date("Y-m-d H:i:s");
        echo $date2;
    }
    $query2 = "SELECT * FROM warehouse WHERE w_id='" . $row['to'] . "'";
    $result2 = $con->query($query2) or die($con->error);
    $warehouse = $result2->fetch_assoc();
    //$duration = date_diff($date2, $date1);
    $response = $warehouse;
    $response['duration'] = "13";
    echo json_encode($response);
    $con->close();
}