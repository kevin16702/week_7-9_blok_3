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
    <div class="container border border-info">
    <a href="../index.php" class="btn btn-info w-100">  terug </a> 
    <?php     for($w=0; $w<count($gamerow); $w++){
        include "OverzichtInclude.php";   
    }?>
    </div>
</body>
</html>