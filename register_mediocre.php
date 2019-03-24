<?php
include 'includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['m_submit'])){
    $mname = $_POST['mname'];
    $mobile = $_POST['mmobile'];
    $email = $_POST['memail'];
    $city = $_POST['mcity'];
    $state = $_POST['mstate'];
    $area = "";
    $scale = $_POST['mscale'];
    $query = "Select MAX(substr(m_id,6,4)) as maximum from mediocre";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $m_id = "MMP19".sprintf('%04u', $max);
    $query = "Insert into mediocre values('$m_id','$mname','$mobile','$city','$state',sysdate(),'$scale','$area')";
    if($con->query($query)){
        //echo 'Data Inserted Successfully';
        $_SESSION['mediocre'] = $m_id;
        $_SESSION['mname'] = $mname;
        header("location:mdash.php");
    }
    else{
        echo "Error Occurred \n\n".$con->error;
    }
}
else{
    echo 'Redirecting...';
    header("refresh:5;url=register.php");
}