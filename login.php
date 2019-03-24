<?php require 'includes/dbcon.php';  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trac - Login</title>
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
        <?php include 'includes/header.php';?>
        <div class="container">
            <div class="row">
                <h4 class="my-3 w-100 text-center"><i class="fa fa-user-circle"> </i> Enter Credentials to login</h4>
                <div class="card w-100">
                    <div class="card-header text-center">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item pt-2 mr-3"><b>You are a </b></li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-farmer" data-toggle="tab">Farmer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-mediocre" data-toggle="tab">Mediocre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-industry" data-toggle="tab">Industry</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body w-100">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tab-farmer" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <p class="text-danger">Enter Details of Farmer</p>
                                        <hr />
                                        <form method="post" action="login_script.php">
                                            <div class="form-group">
                                                <label class="control-label" for="id">Farmer ID</label>
                                                <input class="form-control form-control-sm" placeholder="e.g. FMP190001" name="f_id" type="text" id="f_id" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="password">Password</label>
                                                <input class="form-control form-control-sm" placeholder="Enter Password" name="f_password" id="f_password" type="password" required />
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-light btn-sm pull-left text-info" type="button" >Forgot Password?</button>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm pull-right" type="submit" name="f_submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-mediocre" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <p class="text-danger">Enter the Details of Mediocre</p>
                                        <hr />
                                        <form method="post" action="login_script.php">
                                            <div class="form-group">
                                                <label class="control-label" for="id">Mediocre ID</label>
                                                <input class="form-control form-control-sm" placeholder="e.g. MMP190001" name="m_id" type="text" id="id" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="password">Password</label>
                                                <input class="form-control form-control-sm" placeholder="Enter Password" name="m_password" id="password" type="password" required />
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-light btn-sm pull-left text-info" type="button" >Forgot Password?</button>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm pull-right" type="submit" name="m_submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-industry" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3"><p class="text-danger">Enter the Details of Industry</p>
                                        <hr />    
                                        <form method="post" action="login_script.php">
                                            <div class="form-group">
                                                <label class="control-label" for="id">Industry ID</label>
                                                <input class="form-control form-control-sm" placeholder="e.g. IMP190001" name="i_id" type="text" id="id" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="password">Password</label>
                                                <input class="form-control form-control-sm" placeholder="Enter Password" name="i_password" id="password" type="password" required />
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-light btn-sm pull-left text-info" type="button" >Forgot Password?</button>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm pull-right" type="submit" name="i_submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
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