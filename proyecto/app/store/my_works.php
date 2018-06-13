<?php
require_once './app/store/conn.php';
$sql = "SELECT * FROM works";
$result = $conn->query($sql);
$data = array();

while($row = $result->fetch_assoc()) {
  array_push($data, $row);
}

$conn->close();

//var_dump($data);
