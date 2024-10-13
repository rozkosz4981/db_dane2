<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Dodaj Danie</title>
</head>
<body>
  <h1>Dodaj Danie</h1>
  <form action="addDanie.php" method="POST">
    <label for="nazwa">Nazwa:</label>
    <input type="text" name="nazwa" required><br>

    <label for="cena">Cena</label>
    <input type="text" name="cena" required><br>

    <label for="opis">Opis:</label>
    <textarea name="opis" required></textarea><br>

    <input type="submit" value="Dodaj Danie">
  </form>
</body>
</html>
