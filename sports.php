<?php require_once('header.php');?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>RANK </th>
      <th>Sport Name </th>
      <th>Famous Player</th>
      <th>Country</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "nrupenou_suser";
$password = "rVZk3)Cfu.2T";
$dbname = "nrupenou_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT rank_id,sport,player,country FROM `famous sports`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["rank_ID"]?></td>
    <td><?=$row["sport name"]?></td>
    <td><?=$row["famous player"]?></td>
    <td><?=$row["country"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
   
    
</body>
</html>
