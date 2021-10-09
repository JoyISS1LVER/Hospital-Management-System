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
<h2 class="h" align="center" > Add Doctors Name </h2>


</head>
<body id="b">
<div id="d" > 
<form action= "doctors.php" method="POST" align="center" >
<center>
<img src="login.png" class="img" > </img></center>
<b>
<br><br>
<form action="form.php" method="post">
<center>
  Doctors Name:<br>
  <input type="text" name="dname">
  <br>
  Field of Expertise:<br>
  <input type="text" name="foe">
  <br>
  doctors id:<br>
  <input type="text" name="pid">
  <br>
  <input type="submit" value="Submit" name="submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

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
$sql = "INSERT INTO doctor (doctors_name,field_of_expertise,doctors_id) VALUES ('$_POST[dname]','$_POST[foe]','$_POST[pid]')";
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