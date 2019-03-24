<?php
include '../includes/dbcon.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $regBy = $_GET['regBy'];
    $r_id = $_GET['rid'];
    $p_name = $_GET['p_name'];
    $qty = $_GET['qty'];
    $category = $_GET['category']; 
    $location = $_GET['location'];
    if(isset($_GET['expiry'])){
        $expiry = $_GET['expiry'];
        $duration = "";
    }else{
        $today = date("Y-m-d");
        $duration = $_GET['duration'];
        $expiry = date('Y-m-d', strtotime("+$duration months", strtotime($today)));
    }
    
    $query = "SELECT MAX(cast(substr(p_id,2) as INT )) as maximum FROM productreg";
    $result = $con->query($query) or die($con->error);
    $row = $result->fetch_assoc();
    $max = $row['maximum'];
    $max++;
    $p_id = "P"."$max";
    $query = "Insert into productreg values('$p_id','$regBy','$r_id','$p_name','$qty','$category',sysdate(),'$location','$duration','$expiry')";
    if($con->query($query)){
        echo 'Data Inserted Successfully';
    }
    else{
        echo "Error Occurred \n\n".$con->error;
    }
}
$con->close();