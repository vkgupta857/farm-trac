<?php
session_start();
if(isset($_SESSION['mediocre'])){
    header("location:mdash.php");
}
if(isset($_SESSION['farmer'])){
    header("location:fdash.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Farm Trac - Know your food</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="keywords" content="food tracking, product tracking, item tracking" />
        <meta name="description" content="Trac is the solution of tracking your food." />
        <link rel="icon" href="images/logo_tab.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <script src="js/jquery-3.3.1.min.js" type="text/javascript" defer></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript" defer></script>
        <link href="css/custom.css" rel="stylesheet" type="text/css">
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
        <?php include 'includes/header.php'; ?>
        <hr class="my-4" />
        <div class="container">
            <h4 class="text-center my-4"><b>Features</b></h4>
            <div class="row justify-content-center">
                <div class="card-deck">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-search fa-2x mb-2" src="..." alt="Card image cap"></i>
                            <h4 class="card-title text-info">Track Your Food</h4>
                            <p class="card-text">Track your food to get the details like place of production, farm etc.</p>
                        </div>
                        <div class="card-footer">
                            <a href="track.php"><button class="btn btn-sm btn-block btn-primary" type="button">Track</button></a>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-user-circle fa-2x mb-2" src="..." alt="Card image cap"></i>
                            <h4 class="card-title text-info">Register Yourself</h4>
                            <p class="card-text">Unlock many exciting features after registration.</p>
                        </div>
                        <div class="card-footer">
                            <a href="register.php"><button class="btn btn-sm btn-block btn-primary" type="button">Go to Registration</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4" />
        <?php include 'includes/footer.php'; ?>
    </body>
</html>