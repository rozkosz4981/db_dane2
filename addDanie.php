<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nazwa = $_POST['nazwa'];
  $cena = $_POST['cena'];
  $opis = $_POST['opis'];
  
  $stmt = $pdo->prepare('INSERT INTO dania (nazwa, cena, opis) VALUES (?, ?, ?)');
  $stmt->execute([$nazwa, $cena, $opis]);

  header('Location: dania.php');
  exit();
}
?>
