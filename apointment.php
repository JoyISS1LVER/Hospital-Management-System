<?php
include 'config.php';

?>


<!Doc type - Login site>
<html>
<head>

<link rel ="stylesheet" href="login.css"> </link>

<title> Welcome </title>


<h2 class="h" align="center" > Welcome to Hospital management System </h2>
<h2 class="h" align="center" > Add Apointment </h2>


</head>
<body id="b">
<div id="d" > 
<form action= "apointment.php" method="POST" align="center" >
<center>
<img src="login.png" class="img" > </img></center>
<b>
<br><br>
<form action="form.php" method="post">
 <center>
 Patient Name:<br>
  <input type="text" name="pname">
  <br>
  Date of Apointment:<br>
  <input type="text" name="doe">
  <br>
  doctors id:<br>
  <input type="text" name="did">
  <br>
  <input type="submit" value="Submit" name="submit">
</form> 
</center>



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
$sql = "INSERT INTO apointment (patient_name,date_of_apointment,doctors_id) VALUES ('$_POST[pname]','$_POST[doe]','$_POST[did]')";
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