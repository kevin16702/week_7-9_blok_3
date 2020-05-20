<?php
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
    <div class="container border border-info row mx-auto"> 
    <h1 class="col-10"> <?= $gameitemrow[0]['name'];?> </h1>
    <a href="./Overzicht.php" class="btn btn-success col-2"> terug </a>
    <img class="img-thumbnail col-4" src=<?= "../Images/" . $gameitemrow[0]['image']; ?>>
    <?= $gameitemrow[0]['description'];?>
    <h3 class="col-3"> expansions: </h3>
    <div class="col-9">
    <?= $gameitemrow[0]['expansions']; ?>;
    </div>
    <h3 class="col-3"> skills </h3>
    <div class="col-9">
    <?= $gameitemrow[0]['skills']; ?>
    </div>
    <a class="col-12" href=<?= $gameitemrow[0]['url'];?>> <?= $gameitemrow[0]['url'];?> </a>

    <div class="col-12 ">
    <?= $gameitemrow[0]['youtube'];?>
    </div> 
    <ul>
        <li>min players: <?= $gameitemrow[0]['min_players'];?> </li>
        <li>max players: <?= $gameitemrow[0]['max_players'];?> </li>
        <li>play minutes: <?= $gameitemrow[0]['play_minutes'];?> </li>
        <li>explain minutes: <?= $gameitemrow[0]['explain_minutes'];?> </li>
    <ul>
</body>
</html>