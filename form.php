<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];  // Võtab sisendi vormist
    file_put_contents('sisendid.txt', $input . PHP_EOL, FILE_APPEND);  // Salvestab sisendi faili
    echo "Sisend salvestatud!";
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisendi vorm</title>
</head>
<body>
    <h1>Palun sisesta midagi:</h1>
    <form method="POST" action="form.php">
        <input type="text" name="input" required>
        <button type="submit">Saada</button>
    </form>
</body>
</html>
