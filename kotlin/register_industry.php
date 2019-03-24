<?php
include '../includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $response = array();
    $iname = $_GET['iname'];
    $mobile = $_GET['mobile'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $scale = $_GET['scale'];
    $query = "SELECT MAX(substr(i_id,6,4)) as maximum FROM industrialist";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $i_id = "IMP19".sprintf('%04u', $max);
    $query = "Insert into industrialist values('$i_id','$iname','$mobile','$city','$state',sysdate(),'$scale')";
    if($con->query($query)){
        $response['msg'] = "Registered Successfully";
        $response['i_id'] = $i_id;
        $response['iname'] = $iname;
        echo json_encode($response);
    }
    else{
        echo "Error Occurred \n\n".$con->error;
    }
}