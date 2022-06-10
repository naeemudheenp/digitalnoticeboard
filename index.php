<?php
$name=$_POST['name'];

$password=$_POST['password'];

$conn=new mysqli("localhost", "root", "root","notice");
if ($conn->connect_error) {
    die("Connection failed: " . $result->connect_error);
    
  }
  $sql = "select * from USERNAME";
  $result = $conn->query($sql);
  
  
  
  if (!empty($result) && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
       if($row['USERNAME']==$name)
       {
           if($password==$row['PASSWORD'])
           {
               echo 'Admin Panel<br>';
               echo '<a href="adnot.html"><button>Add Notification</button></a>';

           }
           else
           {
               echo 'error password';

           }
           
        
       }else{
           echo 'incorrect username';
       }
    
      
    }
  } else {
    echo "0 results";
  }

 
?>