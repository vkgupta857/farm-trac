<?php
include '../includes/dbcon.php';
$response = array();
$location = array();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $product_to_search = $_GET['track_id'];
    $query = "Select r_id from productreg where p_id = '$product_to_search'";
    $l = $con->query($query) or die($con->error);
    $row = $l->fetch_assoc();
    $owner_id = $row['r_id'];  //owner_id
    

    $query = "Select name,location,regBy from productreg where p_id = '$product_to_search'";
    $o = $con->query($query) or die($con->error);
    $row = $o->fetch_assoc(); 
    array_push($location,$row['location']);

    $pname = $row['name'];
    $plocation = $row['location'];

    if ($row['regBy'] == 'I' || $row['regBy'] == 'i') {
        $q = "Select name from industrialist where i_id = '$owner_id'"; //owner Name
        $result = $con->query($q);
        $row = $result->fetch_assoc();
    } elseif ($row['regBy'] == 'M' || $row['regBy'] == 'm') {
        $q = "Select name from mediocre where m_id = '$owner_id'";
        $result = $con->query($q);
        $row = $result->fetch_assoc();
    } else {
        $q = "Select name from farmer where f_id = '$owner_id'";
        $result = $con->query($q);
        $row = $result->fetch_assoc();
    }
    
    $mediocre = array();
    $farmers = array();
    $q2 = "Select `from` from temp where `to` = '$owner_id'";  //find next lower level
    $result = $con->query($q2) or die($con->error);
    while ($row = $result->fetch_assoc()) {
        array_push($mediocre, $row['from']);
    }
    
    foreach ($mediocre as $med) {
        $owner_id = $med;
        $product_to_search = $med;
        $query = "Select name,location,regBy from productreg where r_id = '$product_to_search'";
        $l = $con->query($query) or die($con->error);
        $row = $l->fetch_assoc();
    array_push($location,$row['location']);        
        
        if ($row['regBy'] == 'I' || $row['regBy'] == 'i') {
            $q = "Select name from industrialist where i_id = '$owner_id'"; //owner Name
            $result = $con->query($q);
            $row2 = $result->fetch_assoc();
        } elseif ($row['regBy'] == 'M' || $row['regBy'] == 'm') {
            $q = "Select name from mediocre where m_id = '$owner_id'";
            $result = $con->query($q);
            $row2 = $result->fetch_assoc();
        } else {
            $q = "Select name from farmer where f_id = '$owner_id'";
            $result = $con->query($q);
            $row2 = $result->fetch_assoc();
        }        
        
        $q3 = "Select `from` from temp where `to` = '$owner_id'";
        $result3 = $con->query($q3);
        while ($row3 = $result3->fetch_assoc()) {
            array_push($farmers, $row3['from']);
        }
    }
    
    foreach ($farmers as $med) {
        $owner_id = $med;
        $product_to_search = $med;
        $query = "Select name,location,regBy from productreg where r_id = '$product_to_search'";
        $l = $con->query($query) or die($con->error);
        $row = $l->fetch_assoc();   
        array_push($location,$row['location']);
        
        if ($row['regBy'] == 'I' || $row['regBy'] == 'i') {
            $q = "Select name from industrialist where i_id = '$owner_id'"; //owner Name
            $result = $con->query($q);
            $row2 = $result->fetch_assoc();
        } elseif ($row['regBy'] == 'M' || $row['regBy'] == 'm') {
            $q = "Select name from mediocre where m_id = '$owner_id'";
            $result = $con->query($q);
            $row2 = $result->fetch_assoc();
        } else {
            $q = "Select name from farmer where f_id = '$owner_id'";
            $result = $con->query($q);
            $row2 = $result->fetch_assoc();
        }
    }
    $response['location'] = $location;
    echo json_encode($response);
}