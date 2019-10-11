<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
  $msg = "You are already logged in";
  header("location: dashboard.php?message=$msg");
}?>
<header>
			<div class="wrapper">
				<h1 href="index.php" class="logo">heracles</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(isset($_SESSION["loggedin"]) ){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="dashboard.php">Networth</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<button style="#"><a href="signin.php">Login</a></button>
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="dashboard.php">Networth</a></li>
								</ul>
					<a href="includes/logout.inc.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>