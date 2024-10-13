<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nazwa = $_POST['nazwa'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];

    $stmt = $pdo->prepare('UPDATE dania SET nazwa = ?, cena = ?, opis = ? WHERE id = ?');
    $stmt->execute([$nazwa, $cena, $opis, $id]);

    header('Location: dania.php');
    exit();
}
?>
