<?php
include 'includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['i_submit'])){
    $iname = $_POST['iname'];
    $mobile = $_POST['imobile'];
    $email = $_POST['iemail'];
    $city = $_POST['icity'];
    $state = $_POST['istate'];
    $scale = $_POST['iscale'];
    $query = "SELECT MAX(substr(i_id,6,4)) as maximum FROM industrialist";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $i_id = "IMP19".sprintf('%04u', $max);
    $query = "Insert into industrialist values('$i_id','$iname','$mobile','$city','$state',sysdate(),'$scale')";
    if ($con->query($query)) {
        //echo 'Data Inserted Successfully';
        $_SESSION['industrialist'] = $i_id;
        $_SESSION['iname'] = $iname;
        header("location:idash.php");
    } else{
        echo "Error Occurred \n\n".$con->error;
    }
}
else{
    echo 'Redirecting...';
    header("refresh:5;url=register.php");
}