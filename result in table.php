<html>
<head>
<style>
table,th,td{
	border:1px solid black;
	border-collapse: collapse;
}
</style>
</head>
<body>
	<table>
		<tr>
	<th>ID</th>
	<th>EMAIL</th>
	<tr>
	<br>
<?php
if(isset($_POST['submit'])){
	$name=$_POST['search'];
	//echo $name;
$link = mysqli_connect("localhost", "root", "", "yolo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$query = mysqli_query($link,"SELECT * FROM persons WHERE first_name LIKE '%$name%'"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($query);
	//echo $count;
	if($count == "0"){
		//$output = '<h2>No result found!</h2>';
		echo "no result";
	}else{
		while($row = mysqli_fetch_array($query)){
			$s=$row['ID'];
			$t=$row['email'];
			

		echo '<tr>';
		echo '<td>'.$s.'</td>';
		//echo " ";
		echo '<td>'.$t.'</td>';
		//echo "<br>";// Replace column_to_display with the column you want the results from
				//$output .= '<h2>'.$s.'</h2><br>';
			}
		}
 
// Close connection
mysqli_close($link);
}
?>
</table>
</body>
</html>