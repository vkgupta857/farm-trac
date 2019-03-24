<?php
include 'includes/dbcon.php';
$response = array();
$location = array();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['track_id']) {
    $track_id = $_GET['track_id'];
    $product_to_search = $_GET['track_id'];
    $query = "Select r_id from productreg where p_id = '$product_to_search'";
    $l = $con->query($query) or die($con->error);
    $row = $l->fetch_assoc();
    $owner_id = $row['r_id'];  //owner_id
    

    $query = "Select name,location,regBy from productreg where p_id = '$product_to_search'";
    $o = $con->query($query) or die($con->error);
    $row = $o->fetch_assoc(); 
    array_push($location,$row['location']);

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
}else{
    header("location:track.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trac - Tracking Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="images/logo_tab.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.3.1.min.js" type="text/javascript" defer></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript" defer></script>
        <link href="css/custom.css" rel="stylesheet" type="text/css">        
    </head>
    <body id="body">
        <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="row text-center">
                <h4 class="my-3 text-center w-100"><i class="fa fa-search-plus"> </i> Tracking Details of <?php echo "''$track_id''"; ?></h4>
                <div class="card w-100">
                    <div class="card-header text-center">
                        <ul class="nav nav-pills justify-content-between" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-farmer" data-toggle="tab">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-mediocre" data-toggle="tab">Warehousing Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-shipment" data-toggle="tab">Shipment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-industry" data-toggle="tab">Company</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body w-100">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tab-farmer" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <?php
                                    $query1 = "Select * from productreg where p_id='$track_id'";
                                    $query2 = "SELECT fertilizers FROM `fertilizer` WHERE p_id='$track_id'";
                                    if ($result = $con->query($query1) or die($con->error)) {
                                        $row = $result->fetch_assoc();
                                        $ferts = $con->query($query2) or die($con->error);
                                        $fert = $ferts->fetch_assoc();
                                        $response['category'] = $row['category'];
                                        $response['fertilizers'] = $fert['fertilizers'];
                                    } else {
                                        die($con->error);
                                    }
                                    ?>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Product ID: </th>
                                                <td><?php echo $row['p_id']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Product Name: </th>
                                                <td><?php echo $row['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Product Category: </th>
                                                <td><?php echo $row['category']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Net Quantity: </th>
                                                <td><?php echo $row['qty'] ; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ingredients / fertilizers: </th>
                                                <td><?php echo $fert['fertilizers']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-mediocre" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <?php
                                    $query1 = "Select * from `temp` where p_id='$track_id' && substr(`to`,1,1) = 'w'";
                                    $result = $con->query($query1) or die($con->error);
                                    $row = $result->fetch_assoc();
                                    $date1 = $row['date_time'];

                                    $query2 = "SELECT * FROM `temp` WHERE p_id='$track_id' && substr(`from`,1,1) = 'w'";
                                    $result2 = $con->query($query2) or die($con->error);
                                    if ($result2->num_rows > 0) {
                                        $row2 = $result2->fetch_assoc();
                                        $date2 = date($row2['date_time']);
                                    } else {
                                        $date2 = date("Y-m-d H:i:s");
                                        echo $date2;
                                    }
                                    $query2 = "SELECT * FROM warehouse WHERE w_id='" . $row['to'] . "'";
                                    $result2 = $con->query($query2) or die($con->error);
                                    $warehouse = $result2->fetch_assoc();
                                    $response['duration'] = "13";
                                    ?>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Warehouse Name: </th>
                                                <td><?php echo $warehouse['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Total Capacity: </th>
                                                <td><?php echo $warehouse['rating']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Location: </th>
                                                <td><?php echo $warehouse['location']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Rating: </th>
                                                <td><?php echo $warehouse['rating']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-shipment" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row text-center w-100 justify-content-center">
                                    <ul style="list-style: none;" class="d-inline">
                                        <?php
                                        foreach ($location as $loc) {
                                            echo '<li><i class="fa fa-2x fa-map-marker text-success"></i></li>'.$loc;
                                            echo '<br /><br />';
                                        }
                                        ?>
                                    </ul>                                  
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-industry" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">                                    
                                    <h6>Company Details</h6>
                                    <?php
                                    $p_id = $_GET['track_id'];
                                    $response = array();
                                    $query1 = "Select r_id from productreg where p_id='$p_id' && substr(r_id,1,1) = 'i'";
                                    $result = $con->query($query1) or die($con->error);
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $query2 = "SELECT * FROM company WHERE i_id='" . $row['r_id'] . "'";
                                        $result2 = $con->query($query2) or die($con->error);
                                        $company = $result2->fetch_assoc();
                                       ?>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Company Name: </th>
                                                <td><?php echo $company['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Description: </th>
                                                <td><?php echo $company['description']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Location: </th>
                                                <td><?php echo $company['location']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Rating: </th>
                                                <td><?php echo $company['rating']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php }else{     echo '<br /><br />No Company Associated'; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4"/>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>