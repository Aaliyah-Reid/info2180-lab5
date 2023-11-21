<?php


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

if (isset($_GET['country'])){
  $country = $_GET['country'];

  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%';");
  

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if($results){
    foreach ($results as $row){
      echo "<h2>{$row['name']}</h2>";
      echo "<p>Ruled by: {$row['head_of_state']}</p>";
    }
    
  } else {
    echo "Country not found.";
  }

}
?>






