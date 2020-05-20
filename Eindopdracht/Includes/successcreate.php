<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> item is aangemaakt </h3>
    <a href=<?= "./userinput.php?id=" . $id; ?>> terug </a>
</body>
</html>