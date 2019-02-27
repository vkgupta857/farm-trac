<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Farm Trac - Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="images/logo_tab.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.3.1.min.js" type="text/javascript" defer></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript" defer></script>
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" async="">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async></script>
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
                        </ul>
                    </div>
                    <div class="card-body w-100">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tab-farmer" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h1 class="display-1"><i class="fa fa-industry"> </i></h1>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="text-danger">Enter Details of Farmer</h5>
                                        <hr class="my-3"/>
                                        <form action="">
                                            <div class="form-group row">
                                                <label for="farmer-name" class="col-sm-4 col-form-label">Farmer's Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-sm" name="farmer-name" id="farmer-name" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-4 col-form-label">Mobile Number</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control form-control-sm" name="mobile" id="mobile" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-sm" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-sm" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control form-control-sm" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-light text-info mr-4" type="submit">Reset</button>
                                                <button class="btn btn-sm btn-primary" type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-mediocre" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h1 class="display-1"><i class="fa fa-industry"> </i></h1>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="text-danger">Enter the Details of Mediocre</h5>
                                        <hr class="my-3"/>
                                        <form>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab-industry" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h1 class="display-1"><i class="fa fa-industry"> </i></h1>
                                    </div>
                                    <div class="col-md-7"><h5 class="text-danger">Enter the Details of Industry</h5>
                                        <hr class="my-3"/>    
                                        <form>

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