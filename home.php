<?php
include 'config.php';

?>


<!Doc type - Login site>
<html>
<head>

<link rel ="stylesheet" href="login.css"> </link>

<title> Welcome </title>

<h2 class="h" align="center" > Logged IN </h2>
<h2 class="h" align="center" > Welcome to Hospital management System </h2>
<h2 class="h" align="center" > Add Patient Name </h2>


</head>
<body id="b">
<div id="d" > 
<form action= "home.php" method="POST" align="center" >
<center>
<img src="home.png" class="img1" > </img></center>
<b>
<br><br>
<form action="form.php" method="post">
<center>
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <br>
  Age:<br>
  <input type="text" name="age">
  <br>
  Gender:<br>
  <input type="text" name="gender">
  <br>
  address:<br>
  <input type="text" name="address">
  <br>
  phonenum:<br>
  <input type="text" name="phonenum">
  <br><br>
  <input type="submit" value="Submit" name="submit">
  </center>
</form> 



</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */
if(isset($_POST['submit'])){
$link = mysqli_connect("localhost", "root", "", "medi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO patient (first_name,last_name,age,gender,address,phonenum) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]','$_POST[gender]','$_POST[address]','$_POST[phonenum]')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
?>


</form>


</div>


</body>


</html>