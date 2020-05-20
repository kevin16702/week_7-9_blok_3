<head>
<link href="./stylesheet.css" rel="stylesheet"/>
</head>
    <a class="item" href=<?= "./includes/CharacterPage.php?id=$IdInLink" ?>>
        <div class="left">
            <img class="avatar" src=<?=  "./images/" . $row[$o]["avatar"]; ?>>
        </div>
        <div class="right">
            <h2><?= $row[$o]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?= $row[$o]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $row[$o]["attack"]; ?> </li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $row[$o]["defense"] ?> </li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>