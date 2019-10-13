<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/contactus.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="index.php" class="navbar-brand"><img class="heracles-logo" src="https://res.cloudinary.com/benjee/image/upload/v1569459183/Heracles_Logo_2_qve8nw.svg" alt="Heracles"> </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="sashboard.php" class="nav-item nav-link">Networth</a>
            <a href="contactus.php" class="nav-item nav-link active">Contact Us</a>
            <a href="faqs.php" class="nav-item nav-link">FAQs</a>
            <a href="team.php" class="nav-item nav-link">Team</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="signin.php" class="nav-item nav-link">Login</a>
            <a href="signup.php" class="nav-item nav-link">Sign Up</a>
        </div>
    </div>
</nav>
<body>
        <div class="container">
            <div style="text-align:center">
                  <h2 style="color: #26255B";>Contact Us</h2>
                  <p style="color: #26255B";>Have a question or suggestion? You can leave us a message:</p>
            </div>
            
            <div class="row">
                <div class="column">
                        <div class="column">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15856.334481934015!2d3.3627260269792587!3d6.511099574643041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.5137963!2d3.3691252!4m5!1s0x103b8c58aa4e0931%3A0x9ddabc4518c15d14!2sHotels.ng%2C%203%20Birrel%20Ave%2C%20Yaba%2C%20Lagos!3m2!1d6.509180799999999!2d3.3795045999999997!5e0!3m2!1sen!2sng!4v1570995205250!5m2!1sen!2sng" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                </div>
                <div class="column">
                    <form action="form.php" method="post">
                      <label for="fname">First Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="Your name..">
                      <label for="lname">Last Name</label>
                      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                      <label for="country">Country</label>
                      <select id="country" name="country">
                        <option value="nigeria">Nigeria</option>
                        <option value="ghana">Canada</option>
                        <option value="south africa">South Africa</option>
                        <option value="others">Others</option>
                      </select>
                      <label for="subject">Message</label>
                      <textarea id="subject" name="subject" placeholder="Say something nice..." style="height:170px"></textarea>
                      <input type="submit" value="Submit" name="Submit">
                    </form>

                </div>
            </div>
            </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
      
<script>
    // scrolltop
$('.scrollup').click(function (){
$("html,body").animate({
scrollTop: 0
}, 1000);
return false;
});
</script>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">


  <!-- Copyright -->
<div class="footer-copyright text-center py-3" >Copyright &copy; 2019 All Rights Reserved | Redesigned by Team Make-Up
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
 <script type="text/javascript" src="js/top.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/top.js"></script>
</body>
</html>