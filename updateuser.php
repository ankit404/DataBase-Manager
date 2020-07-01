<?php
$servername="localhost";
$username="root";
$password="ankitrai@4498";
$dbname="mywebsite";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error in connection:").$conn->connect_error;
}
$fname=val($_POST["fname"]);
$lname=val($_POST["lname"]);
$email=val($_POST["email"]);
$id=val($_POST["id"]);

function val($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
$sql="UPDATE users SET firstname='$fname',lastname='$lname',email='$email' WHERE id='$id' ";

if($conn->query($sql)===true){
    header("location:delete.php?message=success&id=".$id);

}else{
    echo "error updating record: ".$conn->error;
}
$conn->close();
?>