<?php require_once ("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heracles | Signup</title>
    <link rel="icon" href="images/Heracles.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="style/signup.css">
    <?php include('mail.php') ?>
</head>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="index.php" class="navbar-brand"><img class="heracles-logo" src="https://res.cloudinary.com/benjee/image/upload/v1569459183/Heracles_Logo_2_qve8nw.svg" alt="Heracles"> </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="Dashboard.php" class="nav-item nav-link">Networth</a>
            <a href="Contactus.html" class="nav-item nav-link">Contact Us</a>
            <a href="faqs.html" class="nav-item nav-link">FAQs</a>
            <a href="team.html" class="nav-item nav-link">Team</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="signin.php" class="nav-item nav-link">Login</a>
            <a href="signup.php" class="nav-item nav-link active">Sign Up</a>
        </div>
    </div>
</nav>
<body>
    <div class="login-container">
            <div class="login-bg">
                    <div class="login-content">
                 
                    <div class="signup-form animated slideInLeft">
                    
                   
                         <form method="POST" name="form">
                            <div class="form-header">
                                    <img class="heracles-logo" src="https://res.cloudinary.com/benjee/image/upload/v1569459183/Heracles_Logo_2_qve8nw.svg" alt="Heracles">    
                                    <h1>Create Your Account</h1>
                                    <?php include ("error.php"); ?>
                                </div>
                            <div class="form-group">
                                <input type="text" value="<?php echo $fullname ?>" class="login-control" id="fullname" placeholder="Fullname"  name="fullname" required>
                                </div>
                            <div class="form-group" >
                                <div class="input-control">
                                    <input type="email" value="<?php echo $email ?>" class="login-control" id="email" name="email"placeholder="Email Address" required>
                                    <input type="number" value="<?php echo $phone ?>" class="login-control" id="mobile" name="mobile" placeholder="Phone number" required>
                                </div>
                                </div>
                            <div class="form-group">
                                <div class="input-control">
                                    <input type="password" value="<?php echo $password ?>" class="login-control" id="password" placeholder="Password"   name="password" required>
                                    <input type="password" value="<?php echo $confirmPassword ?>" class="login-control" id="Cpassword"name="confirmPassword" placeholder="Confirm Password"  required>
                                </div>
                            </div>
                           <div class="g-recaptcha" data-sitekey="6LdsHr0UAAAAAI0xzrDZs8Qgwgh9ahb1NWKfoHax" name="captcha"></div>
                            <button type="submit" name="regBtn"class="btn signup-btn">Create Account</button>
                            <div class="register d-flex">
                                    <p class="mx-auto"> Already have an account?
                                        <a class="nav-item text-danger" href="signin.php">Login</a>
                                    </p>
                                </div>
                        </form> 
                    </div>        
                    </div>
                    
                </div>
            </div>
    </div>

 <footer style="z-index:-1;"><?php include 'footer.php';?></footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script type ='text/javascript' src = 'js/signup.js'></script> -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- <script src='main.js'></script> -->
</body>
</html>
