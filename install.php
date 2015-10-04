<?php
  include 'config.php';

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS canada (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      json TEXT NOT NULL
    )";

    if ($mysqli->query($sql) === TRUE) {
        echo "Table canada created successfully";
    } else {
        echo "Error creating table: " . $mysqli->error;
    }

        // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS hongkong (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      json TEXT NOT NULL
    )";

    if ($mysqli->query($sql) === TRUE) {
        echo "Table hongkong created successfully";
    } else {
        echo "Error creating table: " . $mysqli->error;
    }

?>