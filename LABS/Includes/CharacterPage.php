<?php
include "../Code/datalayer.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../stylesheet.css" rel="stylesheet"/>
</head>
<body>
    <header><h1><?= $row[$id - 1]["name"]; ?></h1>
    <a class="backbutton" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src=<?= "../images/" . $row[$id - 1]["avatar"]; ?>>
            <div class="stats" style="background-color: <?= $row[$id - 1]["color"]; ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $row[$id - 1]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $row[$id - 1]["attack"]; ?> </li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $row[$id - 1]["defense"]; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>:<?= $row[$id - 1]["weapon"]; ?></li>
                    <li><b>Armor</b>: <?= $row[$id - 1]["armor"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
            <?= $row[$id - 1]["bio"] ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
    <form action = "" method="post">
  <label for="location"><b>Huidige Locatie:</b></label>
  <select name="LocationUpdateDB"> 
      <?php GetLocationDataInSelect($locationrow, $e); ?>
</select>
<input type="submit" name="update" value="update">
</form>
</div>
<footer>&copy;  Kevin Bouwmeester  2020</footer>
</body>
</html>