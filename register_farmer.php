<?php
include 'includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['f_submit'])){
    $fname = $_POST['fname'];
    $mobile = $_POST['fmobile'];
    $email = $_POST['femail'];
    $city = $_POST['fcity'];
    $state = $_POST['fstate'];
    $date = date("Y-m-d");
    $scale = $_POST['fscale'];
    $query = "SELECT MAX(substr(f_id,6,4)) as maximum FROM farmer";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $f_id = "FMP19".sprintf('%04u', $max);
    $query = "Insert into farmer values('$f_id','$fname','$mobile','$city','$state',sysdate(),'$scale')";
    if($con->query($query)){
        //echo 'Data Inserted Successfully';
        $_SESSION['farmer'] = $f_id;
        $_SESSION['fname'] = $fname;
        header("location:fdash.php");
    }
    else{
        echo "Error Occurred \n\n".$con->error;
    }
}
else{
    echo 'Redirecting...';
    header("refresh:5;url=register.php");
}