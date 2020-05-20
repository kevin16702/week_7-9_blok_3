<?php
$id = $_GET['id'];
include "../Code/Datalayer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container border border-muted">
        <h2> <?= "Bewerken" . $gamerow[$id]['name']; ?> </h2>
        <form action = '' method = 'post'>
            <h3> starttijd </h3>
            <input type="time" name="time" value=<?= $gamerow[$id]['starttijd']; ?>>
            <h3> uitleg </h3>
            <input type='text' name="uitleg" value=<?= $gamerow[$id]['uitleg']; ?>>
            <h3> spelers </h3>
            <input type='text' name='spelers' value=<?= $gamerow[$id]['spelers']; ?>>
            <input type='submit' name='change' value='opslaan'>
            <a href="./Overzicht.php" class="btn btn-success"> terug </a>
            <hr>

    </div>
</body>
</html>