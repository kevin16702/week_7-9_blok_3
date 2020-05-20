<?php
$id = $_GET['id'];
include "../Code/Datalayer.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
       <div class="containeer border border-muted">
            <h2> de waardes zijn </h2>
            <h4> startijd </h4>
            <?= $gamerow[$id]['starttijd']; ?>
            <h4> uitleg </h4>
            <?= $gamerow[$id]['uitleg']; ?>
            <h4> spelers </h4>
            <?= $gamerow[$id]['spelers']; ?>
            <a href = <?= './Change.php?id=' . $id; ?> class="btn btn-success"> OK </a>
        </div>