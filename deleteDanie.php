<?php
include 'db_connect.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM dania WHERE id = ?');
$stmt->execute([$id]);

header('Location: dania.php');
exit();
?>
