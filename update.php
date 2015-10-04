<?php
  date_default_timezone_set('America/Vancouver');
  include 'config.php';

  $json = file_get_contents('https://reserve.cdn-apple.com/CA/en_CA/reserve/iPhone/availability.json');
  $obj = json_decode($json,true);
  $jsonString = serialize($obj);
  if ($obj == null) {
    $lastUpdated = date('Y-m-d H:i:s');
  }
  else {
    $lastUpdated = date('Y-m-d H:i:s', substr($obj['updated'], 0,10));
  }
  $dateInserted = date('Y-m-d H:i:s');
  $sql = "INSERT INTO canada (json, published_time, date_inserted) VALUES ('$jsonString', '$lastUpdated', '$dateInserted')";
  if ($mysqli->query($sql)) {
    echo "Data Last Updated: " . $lastUpdated;
  }

?>