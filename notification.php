<?php
$notification1 =$_POST['NOTIFICATION'];

$conn=new mysqli("localhost", "root", "root","notice");
if ($conn->connect_error) {
    die("Connection failed: " . $result->connect_error);
    
  }
  $sql = "INSERT INTO notification(notification, user) VALUES ('$notification1','DEEPTHI')";
$result = $conn->query($sql);

if ($result ) {
  // output data of each row
  echo "ok";
} else {
  echo "0 results".$result.$conn->error;
}
?>