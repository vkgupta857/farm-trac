<?php
include '../includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $response = array();
    $fname = $_GET['fname'];
    $mobile = $_GET['mobile'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $scale = $_GET['scale'];
    $query = "Select max(substr(f_id,6,4)) as max_id from farmer";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['max_id']+1;
    $f_id = "FMP19".sprintf("%04d",$max);
    $query = "Insert into farmer values('$f_id','$fname','$mobile','$city','$state',sysdate(),'$scale')";
    if($con->query($query)){
        $response['msg'] = "Registered Successfully";
        $response['f_id'] = $f_id;
        $response['fname'] = $fname;
        echo json_encode($response);
    }
    else{
        echo "Error Occurred".$con->error;
    }
}