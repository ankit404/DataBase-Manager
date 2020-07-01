<?php
$servername="localhost";
$username="root";
$password="ankitrai@4498";
$dbname="mywebsite";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error:".$conn->connect_error);
}
if(isset($_POST["submit"])){
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $email=$_POST["email"];
    $sql="INSERT INTO users(firstname,lastname,email) VALUES('$firstname','$lastname','$email')";
    $result=$conn->query($sql);
    if($conn->query($sql)===true){
        header("location:delete.php?message=Row added Sucessfuly!");
    }else{
        echo "Error in adding:".$conn->error;
    }
}else{
    echo "Error:".$conn->error;

}
$conn->close();
?>
