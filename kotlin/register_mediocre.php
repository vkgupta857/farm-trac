<?php
include '../includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $response = array();
    $mname = $_GET['mname'];
    $mobile = $_GET['mobile'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $scale = $_GET['scale'];
    $work = $_GET['workArea'];    
    $query = "Select MAX(substr(m_id,6,4)) as maximum from mediocre";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $m_id = "MMP19".sprintf('%04u', $max);
    $query = "Insert into mediocre values('$m_id','$mname','$mobile','$city','$state',sysdate(),'$scale','$work')";
    if($con->query($query)){
        $response['msg'] = "Registered Successfully";
        $response['m_id'] = $m_id;
        $response['mname'] = $mname;
        echo json_encode($response);
    }
    else{
        echo "Error Occurred".$con->error;
    }
    $con->close();
}