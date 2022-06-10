<?php 

$conn=new mysqli("localhost", "root", "root","notice");
if ($conn->connect_error) {
    die("Connection failed: " . $result->connect_error);
    
  }
  $sql = "select * from USERNAME";
  $result = $conn->query($sql);

  echo '<table border="1px">
  <tr>
  <th>Notification</th>
  </tr>';
  if (!empty($result) && $result->num_rows > 0) {
    // output data of each row
   
      
    while($row = $result->fetch_assoc()) {
      echo '<tr><td><a href="adnot.php">';
      echo $row["USERNAME"];
      echo '</a><td>';
      echo '<td><form action="adnot.php" method="get">
      <BR>
         <input hidden type="text" name="name" value="Deepthi"><BR>
          <input type="submit">
     </form>';
      
      echo '<td></tr>';
      
    }
    
  } else {
    echo "0 results";
  }
  echo '</table>';

?>