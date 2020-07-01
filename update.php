<?php
$servername="localhost";
$username="root";
$password="ankitrai@4498";
$dbname="mywebsite";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error in connection:").$conn->connect_error;
}
$id =$_GET["id"];

$sql = "SELECT * From users where id='$id' ";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row =$result->fetch_assoc()){
        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $email=$row["email"];
    }
}else{
    echo "0 results";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Update Database!</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
    <form action="updateuser.php" method="post">
    <div id="update">
    <h3>&nbsp;&nbsp;Update Form!</h3>
    <br>
    
     <label><h5>FirstName :</h5></label>
   <input type="text" name="fname" value="<?php echo $fname; ?>">
   <label><h5>LastName :</h5></label>
   <input type="text" name="lname" value="<?php echo $lname; ?>">
   <label><h5>Email :</h5></label>
   <input type="Email" name="email" value="<?php echo $email; ?>">
    <br><br>
    <input  type="submit" name="" value="Update  details" onclick="alert('Detalis will be Updated'');">
    
    </div>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    </form>
</body>
</html>

<?php $conn->close() ?>