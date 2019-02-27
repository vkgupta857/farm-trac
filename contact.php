<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us | Nobag</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="images/logo_tab.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.3.1.min.js" type="text/javascript" defer></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript" defer></script>
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            var captcha;
            function generateCaptcha()
            {
                var first_number = Math.floor((Math.random() * 9) + 1);
                var second_number = Math.floor((Math.random() * 9) + 1);
                captcha = first_number + second_number;
                document.getElementById("captcha").innerHTML = "The result of " + first_number + " + " + second_number;
            }
            function validateCaptcha()
            {
                if (document.getElementById("captcha_input").value != captcha)
                {
                    alert("Invalid Captcha");
                    generateCaptcha();
                    return false;
                }
            }
        </script>
    </head>
    <body onload="generateCaptcha();">
        <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="row">                
                <div class="card w-100">                         
                    <div class="card-header"><h4>We are here to help you</h4></div>
                    <div class="card-body">
                        <div class="col-md-4"></div>
                        <p class="text-info text-center text-uppercase"><b>Our Support team is available 24&times;7 to help you. You can contact us using Phone or Email.</b></p>
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Send your queries at</h5>
                                    <dl>
                                        <br />
                                        <dt><i class="fa fa-address-book"> </i> Address:</dt>
                                        <dd>Gokalpur Jabalpur MP 482011</dd>
                                        <br />
                                        <dt><i class="fa fa-inbox"> </i> Email ID:</dt>
                                        <dd><a href="mailto:support@nobag.co.in" style="color: inherit;">support@nobag.co.in</a></dd>
                                        <br />
                                        <dt><i class="fa fa-phone"> </i> Contact Number:</dt>
                                        <dd><a href="tel:+91 9926131113" style="color: inherit;">+91 9926131113</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-danger">Fill up this form for support through Email</h5>
                                    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Name</label>
                                                <input class="form-control form-control-sm" name="name" id="name" type="text" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input class="form-control form-control-sm" name="email" id="email" type="email" required>
                                            </div>
                                        </div>                           
                                        <div class="form-group">
                                            <label for="desc">Description</label>
                                            <textarea id="desc" class="form-control form-control-sm" name="desc" required></textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                                <p class="form-control form-control-sm text-center" id="captcha" style="font-weight:700;"></p>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <input type="number" id="captcha_input" class="form-control form-control-sm" name="captcha" placeholder="Enter Result" onchange="validateCaptcha()" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 text-center">
                                            <button class="btn btn-sm btn-outline-danger" type="submit">Send</button>
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
    <br />
    <?php include 'includes/footer.php'; ?>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    if ($name == NULL) {
        die('<script>alert("Please Enter Name");</script>');
    }
    if ($email == NULL) {
        die('<script>alert("Please Enter Email ID");</script>');
    }
    if ($desc == NULL) {
        die('<script>alert("Please Add Description");</script>');
    }
    
    $subject = "Query to NoBag Support Team";
    $body = '<html>
        <head>
        <title>Query to NoBag Support Team</title>
        </head>
        <body>
        <p>Following information is sent to NoBag Support Team-</p>
        <table>
        <tr>
        <th>Name:</th>
        <td>'.$name.'</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>'.$email.'</td>
        </tr>
        <tr>
        <th>Query</th>
        <td>'.$desc.'</td>
        </tr>
        </table>
        </body>
        </html>';
        
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: NoBag Support Team <support@nobag.co.in>" . "\r\n";
    
    if(mail($email, $subject, $message, $headers."ReplyTo: NoBag Support Team <support@nobag.co.in>") && 
        mail("NoBag Support Team <support@nobag.co.in>",$subject,$message,$headers."ReplyTo:".$email)){
        echo '<script>alert("Your Query has been sent successfully.");</script>';
    }
    else{
        echo '<script>alert("Sorry! Please Try Again");</script>';
    }
}
?>