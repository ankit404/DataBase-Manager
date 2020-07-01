<?php
$servername="localhost";
$username="root";
$password="ankitrai@4498";
$dbname="mywebsite";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error in connection:").$conn->connect_error;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login in Database</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
 <div id="login">
  <h2>Login Form</h2>
  <form action="adddetails.php" method="post">
   <label><h5>FirstName :</h5></label>
   <input id="" name="fname" placeholder="firstname" type="text">
   <label><h5>LastName :</h5></label>
   <input id="" name="lname" placeholder="lastname" type="text">
   <label><h5>Email :</h5></label>
   <input id="" name="email" placeholder="email" type="email">
    <br><br>
   <input  type="submit" name="submit" value=" Add details " onclick="alert('Detalis will be Added');">

   
  </form>
 </div>
</body>
</html>
<?php
$conn->close();
?>