<?php
include 'config.php';

?>


<!Doc type - Login site>
<html>
<head>

<link rel ="stylesheet" href="login.css"> </link>

<title> Login </title>

<h2 class="h" align="center" > Welcome to Login Page of Medical Management System </h2>


</head>
<body id="b">
<div id="d" > 
<form action= "login.php" method="POST" align="center" >
<center>
<img src="login.png" class="img" > </img></center>
<b>
<br> <br>


<label> User-Name:</label>
<input name="name" type="text" id="form" placeholder="Enter Your Name" ></input>
<br>
<b>

<label> Password: </label>
<input name="pass" type="password" id="form" placeholder="Enter Password" ></input>

<input name="login" type="submit" id="button" value="Login"> </input>



</form></center>
</center>


<?php

if(isset($_POST['login'])){

		

		$name= $_POST['name'];

		$pass= $_POST['pass'];

		

		$check = "select*from log where user='$name' AND password ='$pass'";

		$check_work= mysqli_query($con,$check);

		

		if($check_work){

			if(mysqli_num_rows($check_work) > 0 ){

				

				echo"

				<script>

				alert('You are Successfully  Logged in');

				window.location.href='Editorialpage.php';

				</script>

				";

				

			}else{

				

				echo"

				<script>

				alert('Password Wrong :D ');


				</script>

				";

			}

			

			

		}else{

			

			

				echo"

				<script>

				alert('Database Error  ');


				</script>

				";

		}

		

		

		

	}else{

		

		

	}











?>
</div>


</body>


</html>