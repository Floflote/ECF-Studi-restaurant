<?php
$type = 'mysql:host=localhost;dbname=restaurant_qa';
$user = 'root';
$password = 'root';

try {
  $pdo = new PDO($type, $user, $password);
} catch (PDOException $e) {
  /* file_put_contents('dblogs.log', $e->getMessage() . '<br>');
  echo 'Une erreur est survenue'; */
  exit('Erreur : ' . $e->getMessage());
}