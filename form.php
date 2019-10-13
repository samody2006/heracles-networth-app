	<?php
						if(isset($_POST['Submit'])){
							include 'includes/dbconnection.php';
							$firstname = $_POST['firstname'];
							$lastname = $_POST['lastname'];
							$country = $_POST['country'];
							$subject = $_POST['subject'];
							
							$query = "INSERT INTO contact (firstname, lastname, country, subject) 
         							 VALUES('$firstname', '$lastname', '$country', '$subject')";
    						mysqli_query($con, $query);
							if($query == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Sent Successfully.\");
											window.location = (\"contactus.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"contactus.php\")
											</script>";
							}
						}
						
					  ?>