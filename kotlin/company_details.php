<?php
include '../includes/dbcon.php';
if(isset($_GET['track_id'])){
    $p_id = $_GET['track_id'];
    $response = array();
    $query1 = "Select r_id from productreg where p_id='$p_id' && substr(r_id,1,1) = 'i'";    
    $result = $con->query($query1) or die($con->error);
    if($result->num_rows>0){    
        $row = $result->fetch_assoc();
        $query2 = "SELECT * FROM company WHERE i_id='".$row['r_id']."'";
        $result2 = $con->query($query2) or die($con->error);
        $company = $result2->fetch_assoc();
        $response = $company;     
        echo json_encode($response);
    }
    $con->close();
}