<?php

include '../includes/dbcon.php';
$response = array();
if (isset($_GET['r_id'])) {
    $r_id = $_GET['r_id'];
    if ($r_id[0] == 'f' || $r_id[0] == 'F') {
        $fertilizers = "";    
        $query = "Select * from productreg P inner join farmer F on P.r_id=F.f_id where r_id='" . $_GET['r_id'] . "' order by cast(substr(P.p_id,2)as INT) ";
        $products = $con->query($query) or die($con->error);
        while ($product = $products->fetch_assoc()) {
            $query2 = "Select * from fertilizer where p_id='" . $product['p_id'] . "'";
            $result2 = $con->query($query2) or die($con->error);
            $fertilizers = $result2->fetch_assoc();
            $product['fertilizers'] = $fertilizers['fertilizers'];
            array_push($response,$product);  
        }
        echo json_encode($response);
    } elseif ($r_id[0] == 'm' || $r_id[0] == 'M') {
        $query = "Select * from productreg P inner join mediocre M on P.r_id=M.m_id where r_id='" . $_GET['r_id'] . "' order by cast(substr(P.p_id,2)as INT) ";
        $products = $con->query($query) or die($con->error);
        while ($product = $products->fetch_assoc()) {
            array_push($response,$product);
        }
        echo json_encode($response);
    } else {
        $query = "Select * from productreg P inner join industrialist I on P.r_id=I.i_id where r_id='" . $_GET['r_id'] . "' order by cast(substr(P.p_id,2)as INT) ";
        $products = $con->query($query) or die($con->error);
        while ($product = $products->fetch_assoc()) {
            array_push($response,$product);
        }
        echo json_encode($response);
    }
    $con->close();
}    