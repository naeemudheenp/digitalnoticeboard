<?php 

$conn=new mysqli("localhost", "root", "root","notice");
if ($conn->connect_error) {
    die("Connection failed: " . $result->connect_error);
    
  }
  $sql = "select * from notification";
  $result = $conn->query($sql);

  echo '<table>
  <tr>
  <th>Notification</th>
  </tr>';
  if (!empty($result) && $result->num_rows > 0) {
    // output data of each row
   
      
    while($row = $result->fetch_assoc()) {
      echo '<tr><td>';
      echo $row["notification"];
      echo '<td></tr>';
      
    }
    
  } else {
    echo "0 results";
  }
  echo '</table>';

?>