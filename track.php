<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Terms &amp; Conditions | NoBag</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="images/logo_tab.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.3.1.min.js" type="text/javascript" defer></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript" defer></script>
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <script>
            function openQRCamera(node) {
                var reader = new FileReader();
                reader.onload = function() {
                    node.value = "";
                    qrcode.callback = function(res) {
                        if(res instanceof Error) {
                            alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
                        } else {
                            node.parentNode.previousElementSibling.value = res;
                        }
                    };
                    qrcode.decode(reader.result);
                };
                reader.readAsDataURL(node.files[0]);
            }
        </script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="row text-center"> 
                <div class="card mb-3 w-100">
                    <div class="card-body col-md-6 offset-3">
                        <div class="card mb-3 w-100">   
                            <h5 class="card-header">Track your food by entering Tracking ID</h5>
                            <div class="card-body">
                            <form action="" method="get">
                                <div class="form-group">
                                    <label for="track_id" class="control-label">Tracking ID</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control form-control-sm" accept="image/*" capture="enviroment" onchange="openQRCamera(this);" tabindex="-1" placeholder="Enter tracking ID e.g. 123456" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-light border-secondary" type="button" id="button-addon2">Scan <i class="fa fa-qrcode"> </i></button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-sm btn-dark">Submit</button>
                                </div>
                                <hr />
                                <p class="form-text">Don't know tracking ID? Find it <a href="#find"><b>here...</b></a></p>
                            </form>
                        </div>
                        </div>
                        <div class="text-center" id="#find">
                            <h4>How to find Tracking ID?</h4>
                            <img class="img-fluid img-thumbnail" alt="Image with Tracking ID" src="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>