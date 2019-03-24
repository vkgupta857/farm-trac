<?php include 'includes/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trac - Search Results</title>
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
        <?php include_once 'includes/dash_header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="card w-100">                    
                    <div class="card-header text-center">Search Results of products</div>
                    <div class="card-body w-100">
                        <div class = "tab-pane fade show" id = "tab-search" role = "tabpanel" aria-labelledby = "tab-search">
                            <h5 class="text-center">Industrialist List</h5>
                            <div class="row text-center">
                                <div class="card-body">
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $search = $_POST['search'];
                                        $query = "SELECT r_id from productreg where name = '$search'";
                                        $result = $con->query($query) or die($con->error);
                                        $mediocres = array();
                                        $industrialist = array();
                                        while($row = $result->fetch_assoc()){
                                           array_push($mediocres,$row['r_id']);
                                        }
                                        foreach ($mediocres as $med){
                                            if($med[0]=='m' || $med[0]=='M'){
                                                $search = $_POST['search'];
                                                $query = "SELECT `to` from temp where `from` = '$med'";
                                                $result = $con->query($query) or die($con->error);
                                                $row = $result->fetch_assoc();
                                                array_push($industrialist,$row['to']);
                                            }
                                        }
                                        if($industrialist == null){
                                            echo 'No Industrialists found';
                                        }
                                        else{ ?>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Industrialist Name</th>
                                                        <th>Industrialist Scale</th>
                                                        <th>Mobile Number</th>
                                                    </tr>                                           
                                            
                                                    <?php
                                                     foreach ($industrialist as $ind){
                                                        $fquery = "Select name,scale,number from industrialist where i_id = '$ind'";
                                                        $inds = $con->query($fquery);
                                                        $ind = $inds->fetch_assoc();
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $ind['name']; ?></td>
                                                                <td><?php echo $ind['scale']; ?></td>
                                                                <td><?php echo $ind['number']; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <?php
                                        }
                                    ?>
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