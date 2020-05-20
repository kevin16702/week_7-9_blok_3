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
    <div class="container mx-auto row border border-secondary">
    <h2 class="inline-block col-6"> plannen van <?= $row[$id]['name'];?> </h2>
        <a href='../index.php' class='btn btn-primary col-1 m-3'>terug</a> 
        <form class="col-12" method='post' action=''>

            <h4> De starttijd </h4>
            <input type='time' name=<?= 'starttijd' . $id;?>>
            
            <h4> Wie legt het spel uit </h4>
            <input type='text' name=<?= 'uitleg' . $id;?>>

            <h4> Wie spelen er allemaal mee </h4>
            <input type='text' name=<?= 'meespelen' . $id;?>>

            <input type='submit' name=<?= 'submit' . $id;?> value='submit'> <?= $error; ?>
        </form>
    </div>
</body>
</html>