<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="col-5 border-solid border-info border mx-auto my-2 gamecard">
        <h2>
            <?= $row[$i]['name'];?>
        </h2>

        <img alt="img" class='gameimage' src=<?= "./Images/" . $row[$i]['image'];?>>
        <div>
            <?= $row[$i]['description'];?>
        </div>
        <a href=<?= $row[$i]['url'];?>><?= $row[$i]['url'];?></a>

        <div class="col-12 planbutton position-absolute row">
        <a class="btn btn-info  w-100 my-3" href=<?= "./includes/userinput.php?id=" . $i;?>>plannen</a> 
        </div>

    </div>
</body>
</html>