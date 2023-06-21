<?php
$servername = "localhost";
$username = "Bader";
$password = "admin";
$dbname = "login_sample_db";

$conn = new mysqli($servername, $username , $password, $dbname);

if($conn->connect_error){
    die("connection failed:". $conn->connect_error);
}


// $name = $_POST['name'];
// $rate = $_POST['rate'];
// $comment = $_POST['comment'];

$sql = "INSERT INTO rating (username, rate, comment) VALUES ('bader', '3', 'good')";

if($conn->$query($sql) == TRUE){
    echo "added successfully";
}
else{
    echo "error".$sql."<br/>". $conn->error;
}
$conn->close();
?>

