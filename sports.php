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

$sql = "SELECT rank_id, sport name, famous player, country from famous sports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["Rank_ID"]?></td>
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
   
    
    <a class="btn btn-primary" href="page2.html" role="button">Page 2</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
