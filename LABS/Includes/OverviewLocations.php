<?php
include "../Code/datalayer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheet.css">
</head>
<body>
    <div class="container">
    <h1 class='h1'> Alle 7 Locaties van de Database </h1>
        <h3> Name </h3>
        <ul class="list">
            <?php LocationOverview($locationrow); ?>
        <ul>
        <button class="locationinput"><a href="./LocationInput.php"> Locatie toevoegen </a></button>
    </div>
</body>
</html>