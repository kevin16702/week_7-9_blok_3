<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet.css">
</head>
<body>
<a class="item" href=<?= "./includes/Characters.php?id=" . $row["id"]; ?>>
        <div class="left">
            <img class="avatar" src=<?=  "./images/" . $row["avatar"]; ?>>
        </div>
        <div class="right">
            <h2><?= $row["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?= $row["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $row["attack"]; ?> </li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $row["defense"] ?> </li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>