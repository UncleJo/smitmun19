<?php
// note - the credentials of the table and its information have been changed for sec purposes
   define('DB_SERVER', 'local');
   define('DB_USERNAME', 'smitm_smun');
   define('DB_PASSWORD', 'Rq:8m8T75F');
   define('DB_DATABASE', 'smitmase');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
    $sql="SELECT * FROM regi";
    
  $result = mysqli_query($db,$sql);

//num of rows


while($row = mysqli_fetch_array($result))
{
    echo "<table border='1'>";
    
echo "<tr>";
echo "<td>NAME - " . $row['me'] ." ". $row['l_name'] . "</td>";
echo "<td>EMAIL - " . $row['eml_id'] . "</td>";
echo "<td>PHONE - " . $row['gae'] . "</td>";
echo "<td>PAID - " . $row['pd'] . "</td>";
echo "</tr>";
echo "<br><br><br><br>";
}
echo "</table>";



?>