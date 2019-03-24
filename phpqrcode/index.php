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

include "qrlib.php";

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



include '../includes/dbcon.php';
$query = "Select * from product";
$result = $con->query($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Trac - Generate QR Code</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="keywords" content="food tracking, product tracking, item tracking" />
        <meta name="description" content="Trac is the solution of tracking your food." />
        <link rel="icon" href="images/logo_tab.png" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/font-awesome.min.css" />
        <script src="../js/jquery-3.3.1.min.js" type="text/javascript" defer></script>
        <script src="../js/bootstrap.bundle.min.js" type="text/javascript" defer></script>
        <link href="../css/custom.css" rel="stylesheet" type="text/css">
        <style>
            #content{
                height: 300px;
                width: 100%;
            }
            #carouselExampleCaptions{
                width: 100%;
                color: #eee;
            }
            #carouselExampleCaptions .carousel-item{
                height: 300px;
            }
            @media(max-width:768px){
                #content{
                    height:200px;
                }
                #carouselExampleCaptions .carousel-item{
                    height: 200px;
                }
            }
        </style>
    </head>  
    <body style="margin-top: 60px;">
        <?php include '../includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-body text-center">
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>QR Code</th>
                                    <th>Fertilizers</th>
                                    <th>Download QR</th>
                                </tr>
                                <?php
                                $fertilizers = "";
                                while ($row = $result->fetch_assoc()) {
                                    $filename = $PNG_TEMP_DIR . $row['pid'] . ".png";
                                    $query2 = "Select fertilizers from ingredients where pid='" . $row['pid'] . "'";
                                    $result2 = $con->query($query2);
                                    while ($fert = $result2->fetch_assoc()) {
                                        $fertilizers .= " " . $fert['fertilizers'];
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $row['pid']; ?></td>
                                        <td><?php echo $row['pname']; ?></td>
                                        <td><?php echo $row['category']; ?></td>
                                        <td><?php echo $row['quantity'], $row['unit']; ?></td>
                                        <td><?php
                                            QRcode::png($row['pid'] . "/" . $row['pname'] . "/" . $row['location'] . "/" . $row['date'] . "/" . $fertilizers, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
                                            //display generated file
                                            echo '<img src="' . $PNG_WEB_DIR . basename($filename) . '" />';
                                            ?></td>
                                        <td><?php echo $fertilizers; ?></td>
                                        <td><a class="btn btn-sm btn-primary" href="<?php echo $PNG_WEB_DIR . basename($filename); ?>" download="">Download QR</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4" />
        <?php include '../includes/footer.php'; ?>
    </body>
</html>