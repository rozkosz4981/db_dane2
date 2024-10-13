<?php
include 'db_connect.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM dania WHERE id = ?');
$stmt->execute([$id]);
$danie = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Edytuj Danie</title>
</head>
<body>
  <h1>Edytuj Danie</h1>
  <form action="updateDanie.php" method="POST">
    <input type="hidden" name="id" value="<?= $danie['id'] ?>">

    <label for="nazwa">Nazwa:</label>
    <input type="text" name="nazwa" value="<?= $danie['nazwa'] ?>" required><br>

    <label for="cena">Cena:</label>
    <input type="text" name="cena" value="<?= $danie['cena'] ?>" required><br>

    <label for="opis">Opis:</label>
    <textarea name="opis" required><?= $danie['opis'] ?></textarea><br>

    <input type="submit" value="Zapisz Zmiany">
  </form>
</body>
