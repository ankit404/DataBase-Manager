<?php
$servername="localhost";
$username="root";
$password="ankitrai@4498";
$dbname="mywebsite";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error:".$conn->connect_error);
}
$id=$_GET["id"];
$sql="DELETE From users where id='$id' ";
if($conn->query($sql)===true){
    header("location:delete.php?message=delete");
}else{
    echo "error".$conn->error;
}
$conn->close();
?>

