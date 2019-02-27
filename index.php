<?php
session_start();
if(isset($_SESSION['school_email'])){
    header("location:school/school_dashboard.php");
}
if(isset($_SESSION['admin_name'])){
    header("location:admin/admin_dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Farm Trac - Track your food</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="keywords" content="food tracking, product tracking, item tracking" />
        <meta name="description" content="Farm Trac is the solution of tracking your food." />
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
                background: linear-gradient(to right, #e52d27, #b31217);
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
            .card:hover{
                border:1px solid #e52d27;
            }
        </style>
    </head>  
    <body style="margin-top: 60px;">
        <div id="content">
            <?php include 'includes/header.php'; ?>
            <div class="container-fluid">
                <div class="row">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h3 class="text-center d-none d-sm-none d-md-block" style="padding-top:100px;"><i class="fa fa-users fa-3x"> </i> </h3>
                                <div class="carousel-caption d-block">
                                    <h5>Everything at one place</h5>
                                    <p>Principals, Teachers and Students can interact at one place.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h3 class="text-center d-none d-sm-none d-md-block" style="padding-top:100px;"><i class="fa fa-briefcase fa-3x"> </i> </h3>
                                <div class="carousel-caption d-block">
                                    <h5>NoBag Required</h5>
                                    <p>No need to carry bag of papers. This load is managed on web/app.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h3 class="text-center d-none d-sm-none d-md-block" style="padding-top:100px;"><i class="fa fa-clock-o fa-3x"> </i> </h3>
                                <div class="carousel-caption d-block">
                                    <div class="col">
                                        <h5>24x7 Availability</h5>
                                        <p>Access all the school related information any time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4" />
        <div class="container">
            <h4 class="text-center my-4"><b>Features</b></h4>
            <div class="row justify-content-center">
                <div class="card-deck">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-briefcase fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h4 class="card-title text-danger">No bag Required</h4>
                            <p class="card-text">Principals, Teachers and Students do not require any bag for carrying document.</p>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-book fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h4 class="card-title text-danger">Online Books</h4>
                            <p class="card-text">Access to bunch of online books of all boards (CBSE, State Boards etc.)</p>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-group fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h4 class="card-title text-danger">Discussion Forum</h4>
                            <p class="card-text">Students can clear their doubts with teachers and classmates.</p>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-clock-o fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h4 class="card-title text-danger">24&times;7 Availability</h4>
                            <p class="card-text">Students can access their results and details any time.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <!--<div class="row">
                <div class="card-deck">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-group fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h5 class="card-title text-danger">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-group fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h5 class="card-title text-danger">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-group fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h5 class="card-title text-danger">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <i class="fa fa-group fa-3x text-danger" src="..." alt="Card image cap"></i>
                            <h5 class="card-title text-danger">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                    </div>
                </div>
            </div>-->
            <hr />
            <h4 class="text-center"><b>Why Nobag <i class="fa fa-question-circle-o"> </i></b></h4>
            <div class="row justify-content-center">
                <video width="320" height="240" controls>
                    <source src="Nobag_official.mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
            </div>
            <hr class="my-4" Why/>
            <div class="row">
                <div class="card w-100 text-center border-danger">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 w-100">
                            <p>This platform is very useful for schools.</p>
                            <span class="blockquote-footer">Deepak, Nikhil, Vinod</span>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4" />
        <?php include 'includes/footer.php'; ?>
    </body>
</html>