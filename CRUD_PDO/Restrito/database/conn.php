<?php
include "../php/validar.php";
//API PDO do php

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crudphp');

try {
  $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // prepared statements / declarações preparadas

  $stmt = $conn->prepare('SELECT * FROM clientes');
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
  exit();
}
