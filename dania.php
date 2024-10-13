<?php
include 'db_connect.php';

$stmt = $pdo->query('SELECT * FROM dania');
$dania = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>MENU RESTAURACJI</title>
</head>
<body>
  <h1>MENU RESTAURACJI</h1>
  <a href="addFormDanie.php"><button>Dodaj Danie</button></a>

  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nazwa</th>
      <th>Cena</th>
      <th>Opis</th>
      <th>Akcje</th>
    </tr>
    <?php foreach ($dania as $danie): ?>
    <tr>
      <td><?= $danie['id'] ?></td>
      <td><?= $danie['nazwa'] ?></td>
      <td><?= $danie['cena'] ?></td>
      <td><?= $danie['opis'] ?></td>
      <td>
        <a href="editFormDanie.php?id=<?= $danie['id'] ?>"><button>Edycja</button></a>
        <a href="deleteDanie.php?id=<?= $danie['id'] ?>"><button>Usuń</button></a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
