<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trac - Register Yourself</title>
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
                <h4 class="my-3 text-center w-100"><i class="fa fa-user-circle"> </i> Get more benefits after registration</h4>
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
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-warehouse" data-toggle="tab">Warehouse</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body w-100">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tab-farmer" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h1 class="display-1"><i class="fa fa-user"> </i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="text-danger">Enter Details of Farmer</h5>
                                        <hr class="my-3"/>
                                        <form action="register_farmer.php" method="post">
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-4 col-form-label">Farmer's Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="fname" id="farmer-name" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fmobile" class="col-sm-4 col-form-label">Mobile Number</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control form-control-sm" name="fmobile" id="mobile" maxlength="10"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="femail" class="col-sm-4 col-form-label">Email ID</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-sm" name="femail" id="femail"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fcity" class="col-sm-4 col-form-label">City / Village</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="fcity" id="fcity" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fstate" class="col-sm-4 col-form-label">State</label>
                                                <div class="col-sm-8">
                                                    <select id="fstate" name="fstate" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Chhatisgarh">Chhatisgarh</option>
                                                        <option value="Odisha">Odisha</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fscale" class="col-sm-4 col-form-label">Scale</label>                                                
                                                <div class="col-sm-8">
                                                    <select id="fscale" name="fscale" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Small">Small</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Large">Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-light text-info mr-4" type="reset">Reset</button>
                                                <button class="btn btn-sm btn-primary" type="submit" name="f_submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-mediocre" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h1 class="display-1"><i class="fa fa-shopping-cart"> </i></h1>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="text-danger">Enter the Details of Mediocre</h5>
                                        <hr class="my-3"/>
                                        <form action="register_mediocre.php" method="post">
                                            <div class="form-group row">
                                                <label for="mname" class="col-sm-4 col-form-label">Mediocre's Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="mname" id="mname" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mmobile" class="col-sm-4 col-form-label">Mobile Number</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control form-control-sm" name="mmobile" id="mmobile" maxlength="10"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="memail" class="col-sm-4 col-form-label">Email ID</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-sm" name="memail" id="memail"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mcity" class="col-sm-4 col-form-label">City / Village</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="mcity" id="mcity" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mstate" class="col-sm-4 col-form-label">State</label>
                                                <div class="col-sm-8">
                                                    <select id="mstate" name="mstate" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Chhatisgarh">Chhatisgarh</option>
                                                        <option value="Odisha">Odisha</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mscale" class="col-sm-4 col-form-label">Scale</label>                                                
                                                <div class="col-sm-8">
                                                    <select id="mscale" name="mscale" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Small">Small</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Large">Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--<div class="form-group row">
                                                <label for="marea" class="col-sm-4 col-form-label">Work Area</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control-sm form-control" name="marea" id="marea" />
                                                </div>
                                            </div>-->
                                            <hr />
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-light text-info mr-4" type="reset">Reset</button>
                                                <button class="btn btn-sm btn-primary" type="submit" name="m_submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-industry" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h1 class="display-1"><i class="fa fa-gears"> </i></h1>
                                    </div>
                                    <div class="col-md-8"><h5 class="text-danger">Enter the Details of Industry</h5>
                                        <hr class="my-3"/>    
                                        <form action="register_industry.php" method="post">
                                            <div class="form-group row">
                                                <label for="iname" class="col-sm-4 col-form-label">Your Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="iname" id="iname" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="imobile" class="col-sm-4 col-form-label">Mobile Number</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control form-control-sm" name="imobile" id="imobile" maxlength="10"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="iemail" class="col-sm-4 col-form-label">Email ID</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-sm" name="iemail" id="iemail"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="icity" class="col-sm-4 col-form-label">City / Village</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="icity" id="icity" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="istate" class="col-sm-4 col-form-label">State</label>
                                                <div class="col-sm-8">
                                                    <select id="istate" name="istate" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Chhatisgarh">Chhatisgarh</option>
                                                        <option value="Odisha">Odisha</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="iscale" class="col-sm-4 col-form-label">Scale</label>                                                
                                                <div class="col-sm-8">
                                                    <select id="iscale" name="iscale" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Small">Small</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Large">Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-light text-info mr-4" type="reset">Reset</button>
                                                <button class="btn btn-sm btn-primary" type="submit" name="i_submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-warehouse" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h1 class="display-1"><i class="fa fa-home"> </i></h1>
                                    </div>
                                    <div class="col-md-8"><h5 class="text-danger">Enter the Details of Warehouse</h5>
                                        <hr class="my-3"/>    
                                        <form action="register_warehouse.php" method="post">
                                            <div class="form-group row">
                                                <label for="iname" class="col-sm-4 col-form-label">Your Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="iname" id="iname" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="imobile" class="col-sm-4 col-form-label">Mobile Number</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control form-control-sm" name="imobile" id="imobile" maxlength="10"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="iemail" class="col-sm-4 col-form-label">Email ID</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-sm" name="iemail" id="iemail"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="icity" class="col-sm-4 col-form-label">City / Village</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="icity" id="icity" required=""/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="istate" class="col-sm-4 col-form-label">State</label>
                                                <div class="col-sm-8">
                                                    <select id="istate" name="istate" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Chhatisgarh">Chhatisgarh</option>
                                                        <option value="Odisha">Odisha</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="iscale" class="col-sm-4 col-form-label">Scale</label>                                                
                                                <div class="col-sm-8">
                                                    <select id="iscale" name="iscale" class="form-control form-control-sm">
                                                        <option selected="">-Select-</option>
                                                        <option value="Small">Small</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Large">Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-light text-info mr-4" type="reset">Reset</button>
                                                <button class="btn btn-sm btn-primary" type="submit" name="i_submit">Register</button>
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