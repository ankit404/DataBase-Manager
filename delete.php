<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database</title>
	<script>
		function myFunctio() {
    alert("Are you Sure!");
}
		function myFunction() {
    alert("This row will be updated");
}
	</script>
</head>
<style>
table {
 font-family:arial, sans-serif;
 border-collapse:collapse;
 width:100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
	
<?php
$servername="localhost";
$username="root";
$password="ankitrai@4498";
$dbname="mywebsite";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error in connection:").$conn->connect_error;
}
if(isset($_GET["message"])){
	if(($_GET["message"])=="delete"){
		echo "Record was deleted! <br>";
		echo "<br>";
	}elseif($_GET["message"]=="Row added Sucessfuly!"){
		echo "Record was added! <br>";
		echo "<br>";
	}
}

$sql="SELECT id,firstname,lastname,email From users";
$result=$conn->query($sql);
?>
<table width="800" border="1" cellpadding="10" cellspacing="1" class="responsive-table" >

	<tr>
<th>ID:</td>
<th>FirstName:</th>
<th>LastName:</th>
<th>Email:</th>
<th>Options:</th>
</tr>
<?php
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
		?>
       <tr>
		
		<td><?php echo $row["id"]; ?></td>
		

	
		
		<td><?php echo $row["firstname"]; ?></td>
		
	  
		
		<td><?php echo $row["lastname"]; ?></td>
		
	 
		
		<td><?php echo $row["email"]; ?></td>

		<td><a href="deluser.php?id=<?php echo $row["id"]; ?>"><button onclick="myFunctio()">Delete</button></a>&nbsp;&nbsp;
		<a href="update.php?id=<?php echo $row["id"]; ?>"><button onclick="myFunction()">Update</button></a></td>
		
	  </tr>
    

        
	<?php
        }
    ?>
        </table>
<?php
    }else{
        echo "0 Results found";
    }
    
    $conn->close();
?>



</body>
</html>
