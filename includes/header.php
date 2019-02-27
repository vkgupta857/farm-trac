<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><b>Farm Trac</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav1" aria-controls="nav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>                    
        <div class="collapse navbar-collapse" id="nav1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" id="google_translate_element"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="track.php"><b>Track</b></a>
                </li>
                <?php if (1) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><b>Login</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-light btn" href="register.php"><b>Register</b></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-danger" href="#">Action</a>
                            <a class="dropdown-item text-danger" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Something else here</a>
                            <a class="dropdown-item text-danger" href="#">Something else here</a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav> 
<!--
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
    <div class="modal-dialog" role="modal-diaglog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-label="hidden">&times;</span></button>
                <div class="col-md-10 offset-md-1">
                    <div class="card bg-dark mb-4 text-center text-light"><h4><b>Farm Trac</b></h4></div>                    
                    <h5 style="text-align:center;">Sign In</h5>
                    <p style="text-align:center;">with your Nobag Account</p>
                    <?php
                    /*if($_SERVER['REQUEST_METHOD']=='GET'){
                        if(isset($_GET['error'])){
                            echo '<script>alert("'.$_GET['error'].'");</script>';
                        }
                    }*/
                    ?>
                    <form method="post" action="school/school_login_script.php" enctype="form-data">
                        <br />
                        <div class="form-group">
                            <label class="control-label" for="school_email">School's Email ID</label>
                            <input class="form-control form-control-sm" placeholder="e.g. example@example.com" name="school_email" type="email" autofocus required />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="school_password">Password</label>
                            <input class="form-control form-control-sm" placeholder="Enter Password" name="school_password" type="password" required />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-light btn-sm pull-left" type="button" ><span class="text-dark">Forgot Password?</span></button>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark btn-sm pull-right" type="submit" >Login</button>
                        </div>
                        <br class="my-3" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<noscript>
<h4 class="alert alert-danger">Sorry, Your browser does not support JavaScript. Some or more functions may not work properly.</h4>
</noscript>