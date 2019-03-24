<?php
/*

 * 
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
$PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;

//html PNG location prefix
$PNG_WEB_DIR = 'temp/';

include "phpqrcode/qrlib.php";

//ofcourse we need rights to create temp dir
if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);


$filename = $PNG_TEMP_DIR . 'test.png';

//processing form input
//remember to sanitize user input in real-life solution !!!
$errorCorrectionLevel = 'L';

$matrixPointSize = 4;




//ofcourse we need rights to create temp dir
if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);




//processing form input
//remember to sanitize user input in real-life solution !!!
$errorCorrectionLevel = 'L';

$matrixPointSize = 4;



include 'includes/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trac - Farmer Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="images/logo_tab.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.3.1.min.js" type="text/javascript" defer></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript" defer></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js" defer=""></script>
        <script type="text/javascript" defer="">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work', 10],
                    ['Eat', 3],
                    ['Commute', 3],
                    ['Watch TV', 3],
                    ['Sleep', 7]
                ]);

                var options = {
                    title: 'My stats'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>
        <link href="css/custom.css" rel="stylesheet" type="text/css">        
    </head>
    <body id="body">
        <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="card w-100">                    
                    <div class="card-header text-center">
                        <ul class="nav nav-pills justify-content-between" role="tablist">
                            <li class="nav-item pt-2 mr-3"><b>Welcome, <?php echo $_SESSION['farmer']; ?> </b></li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-profile" data-toggle="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-products" data-toggle="tab">My Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-add" data-toggle="tab">Add Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-search" data-toggle="tab">Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-stats" data-toggle="tab">Statistics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body w-100">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tab-profile" role="tabpanel" aria-labelledby="tab-profile">
                                <div class="row w-100">
                                    <div class="col-md-4">
                                        <h1 class="display-1"><i class="fa fa-user"> </i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tbody>
                                                <?php
                                                $query = "Select * from farmer where f_id='" . $_SESSION['farmer'] . "'";
                                                $result = $con->query($query);
                                                $row = $result->fetch_assoc();
                                                ?>
                                                <tr>
                                                    <th>Farmer ID</th>
                                                    <td><?php echo $row['f_id']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Farmer Name</th>
                                                    <td><?php echo $row['Name']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Mobile Number</th>
                                                    <td><?php echo $row['Number']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>City</th>
                                                    <td><?php echo $row['City']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td><?php echo $row['State']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Scale</th>
                                                    <td><?php echo $row['Scale']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php
                                        if (file_exists("uploads/" .$_SESSION['farmer']. ".pdf")) { 
                                        echo '<a href="uploads/'.$_SESSION['farmer'].'.pdf" target="_blank">View Soil Sample Report</a>';
                                         } else {
                                            ?>
                                            <form class="card" action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group card-body">
                                                    <label for="soil" class="control-label">Upload Soil Sample Report:</label>
                                                    <input type="file" id="soil" class="text-center form-control-sm form-control-file" name="soil" />
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Upload File</button>
                                            </form>
                                        <?php } ?>
                                    </div>

                                    <?php
                                    if (isset($_FILES['soil'])) {
                                        $target_dir = "uploads/";
                                        $temp = explode(".", $_FILES["soil"]["name"]);
                                        $newname = $_SESSION['farmer'] . "." . $temp[1];
                                        $target_file = $target_dir . $newname;
                                        $uploadOk = 1;
                                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if file already exists
                                        if (file_exists($target_file)) {
                                            echo " Sorry, file already exists.";
                                            $uploadOk = 0;
                                        }
// Check file size
                                        elseif ($_FILES["soil"]["size"] > 500000) {
                                            echo " Sorry, your file is too large.";
                                            $uploadOk = 0;
                                        }
// Allow certain file formats
                                        elseif ($imageFileType != "pdf") {
                                            echo " Sorry, only PDF files are allowed.";
                                            $uploadOk = 0;
                                        }
// Check if $uploadOk is set to 0 by an error
                                        if ($uploadOk == 0) {
                                            echo " Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                                        } else {
                                            if (move_uploaded_file($_FILES["soil"]["tmp_name"], $target_file)) {
                                                echo '<script>alert("The file ' . $newname . ' has been uploaded.");</script>';
                                            } else {
                                                echo " Sorry, there was an error uploading your file.";
                                            }
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="tab-pane fade show" id="tab-products" role="tabpanel" aria-labelledby="tab-products">
                                <div class="row">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Fertilizers</th>
                                                <th>QR Code</th>
                                                <th>Download QR</th>
                                            </tr>
                                            <?php
                                            $fertilizers = "";
                                            $query = "Select * from productreg P inner join farmer F on P.r_id=F.f_id where r_id='" . $_SESSION['farmer'] . "' order by cast(substr(P.p_id,2)as INT) ";
                                            $products = $con->query($query);
                                            while ($product = $products->fetch_assoc()) {
                                                $filename = $PNG_TEMP_DIR . $product['p_id'] . ".png";
                                                $query2 = "Select * from fertilizer where p_id='" . $product['p_id'] . "'";
                                                $result2 = $con->query($query2) or die($con->error);
                                                $fertilizers = $result2->fetch_assoc();
                                                ?>
                                                <tr>
                                                    <td><?php echo $product['p_id']; ?></td>
                                                    <td><?php echo $product['name']; ?></td>
                                                    <td><?php echo $product['category']; ?></td>
                                                    <td><?php echo $product['qty']; ?></td>                                                    
                                                    <td><?php echo $fertilizers['fertilizers']; ?></td>
                                                    <td><?php
                                                        QRcode::png($product['p_id'] . "/" . $product['name'] . "/" . $product['expiry date'] . "/" . $product['City'] . ", " . $product['State'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);
                                                        //display generated file
                                                        echo '<img src="' . $PNG_WEB_DIR . basename($filename) . '" />';
                                                        ?></td>
                                                    <td><a class="btn btn-sm btn-primary" href="<?php echo $PNG_WEB_DIR . basename($filename); ?>" download="">Download QR</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="tab-add" role="tabpanel" aria-labelledby="tab-add">
                                <div class="row">                                    
                                    <h5 class="text-danger w-100 text-center">Add Product</h5>
                                    <hr class="my-3" />
                                    <div class="col-md-8 offset-md-2">
                                        <form action="" method="post" class=" w-100">
                                            <div class="form-group row">
                                                <label for="p_name" class="col-sm-4 col-form-label">Product Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="p_name" id="p_name" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="qty" class="col-sm-4 col-form-label">Quantity</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control form-control-sm" name="qty" id="qty" maxlength="10"/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-control form-control-sm" name="unit">
                                                        <option value="Kilograms">Kilograms</option>
                                                        <option value="Litres">Litres</option>
                                                        <option value="Dozens">Dozens</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="category" class="col-sm-4 col-form-label">Category</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control form-control-sm" name="category" id="category">
                                                        <option selected="">-Select-</option>
                                                        <option value="Grain">Grain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="location" class="col-sm-4 col-form-label">Location</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="location" id="location"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="duration" class="col-sm-4 col-form-label">Duration</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="duration" id="duration"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="form-text ml-auto mr-auto">---OR---</p>
                                            </div>
                                            <div class="form-group row">
                                                <label for="expiry" class="col-sm-4 col-form-label">Expiry Date</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control form-control-sm" name="expiry" id="expiry"/>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-light text-info mr-4" type="reset">Reset</button>
                                                <button class="btn btn-sm btn-primary" type="submit" name="add_product">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_product'])) {
                                            $regBy = "F";
                                            $r_id = $_SESSION['farmer'];

                                        $p_name = $_POST['p_name'];
                                        $qty = $_POST['qty'] . " " . $_POST['unit'];
                                        $category = $_POST['category'];
                                        $location = $_POST['location'];

                                        $query = "SELECT MAX(cast(substr(p_id,2) as INT )) as maximum FROM productreg";
                                        $result = $con->query($query) or die($con->error);
                                        $row = $result->fetch_assoc();
                                        $max = $row['maximum'];
                                        $max++;
                                        $p_id = "P" . $max;
                                        if (isset($_POST['expiry'])) {
                                            $expiry = $_POST['expiry'];
                                            $duration = "";
                                            $query = "Insert into productreg values('$p_id','$regBy','$r_id','$p_name','$qty','$category',sysdate(),'$location','$duration','$expiry')";
                                        } else {
                                            $duration = $_POST['duration'];
                                            $expiry = "";
                                            $query = "Insert into productreg values('$p_id','$regBy','$r_id','$p_name','$qty','$category',sysdate(),'$location','$duration',DATE_ADD(sysdate(), INTERVAL 3 MONTH))";
                                        }
                                        
                                        if ($con->query($query)) {
                                            echo '<script>alert("Added Successfully");</script>';
                                        } else {
                                            echo '<script>alert("' . $con->error . '");</script>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class = "tab-pane fade show" id = "tab-search" role = "tabpanel" aria-labelledby = "tab-search">
                                <h5 class="text-center">Search for industries</h5>
                                <div class="row text-center">
                                    <div class="card-body">
                                        <form method="post" action="search_industry.php">
                                            <div class="form-group row">
                                                <label for="search" class="col-form-label col-md-4 text-right">Search Industries</label>
                                                <div class="col-md-4">
                                                    <input class="form-control form-control-sm" id="search" name="search" type="text" required=""/>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-sm btn-primary" ><i class="fa fa-search"> </i> Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class = "tab-pane fade show" id = "tab-stats" role = "tabpanel" aria-labelledby = "tab-stats">
                                <div class = "row">
                                    Statistics here
                                    <div id = "piechart" style = "width: 900px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class = "my-4"/>
<?php
$con->close();
include 'includes/footer.php';
?>
    </body>
</html>