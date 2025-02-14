<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
  $msg = "You are already logged in";
  header("location: dashboard.php?message=$msg");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hercules | Home</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.2.95/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </head>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="index.php" class="navbar-brand"><img class="heracles-logo" src="https://res.cloudinary.com/benjee/image/upload/v1569459183/Heracles_Logo_2_qve8nw.svg" alt="Heracles"> </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="dashboard.php" class="nav-item nav-link">Networth</a>
            <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
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

    <!-- NOTE: IF YOU WANT TO ADD ANY CONTRIBUTION PLEASE MAKE SURE IT IS WITHIN THE COMMENTS SO THAT WE CAN KEEP TRACK OF THE CHANGES MADE -->
    
    <main class="container">
        <section class="jumbotron">
            <header>
                <h2>Know your worth<br>with Heracles App!</h2>
            </header>
            <article class="article">
                <p>If you sold all your assets and paid all your debts,</p>
                <p>What would be left?</p>
                <p>That's your net worth, Calculate it here.</p>
            </article>
            <div class="action">
                <a href="signup.php" id="get-started">Get started</a>
                <a href="signin.php" id="login">Log In</a>
            </div>
        </section>
        <footer><?php include 'footer.php';?></footer>
           </main>

    </body>


</html>
