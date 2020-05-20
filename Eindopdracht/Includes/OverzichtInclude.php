<?php
$id = $w;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../Stylesheet.css">
</head>
<body>
    <div class="m-3 row" style="border-bottom: 1px solid black">

        <div class="col-4 mr-auto">
            <?= $gamerow[$w]["name"] . "<br>" . $gamerow[$w]["starttijd"] . "<br>" . $gamerow[$w]["speeltijd"] . "<br>" . $gamerow[$w]["uitleg"] . "<br>" . $gamerow[$w]["spelers"]; ?>
        </div>

        <div class="col-6 row" style="display:none" id='<?= $w; ?>'> 
                <h3 class="col-12"> weet u het zeker </h3>
            <form class="col-5 removeform" method="post" action=''>
                <button class="btn btn-danger w-100" name="remove" value=<?= $gamerow[$w]['id']; ?>> ja </button> 
            </form>
                <button class="col-3 btn btn-dark" onclick="document.getElementById(<?= $w; ?>).style.display = 'none'"> nee </button> 
        </div>

            <ul style="list-style:none" class="col-2">
                <button class="btn btn-danger" onclick="document.getElementById(<?= $w; ?>).style.display = 'block'"> verwijder</button>
                <a href=<?= "./Change.php?id=$w";?> class="btn btn-success">bewerken</a> 
            <a class="btn btn-info" href=<?= './OverzichtGame.php?id=' . $id; ?>> gameoverzicht </a>
            </ul>
            
    </div>
</body>
</html>