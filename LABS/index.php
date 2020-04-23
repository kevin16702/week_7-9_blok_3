<?php
include "./Code/datalayer.php";
OpenCon();
getAllData($conn);
locationData($conn);
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
    <div class="container bg-white">
    <select onchange = "location = this.value">
    <?php for($i = 0; $i < count($row); $i++){
    getDataByID($row, $i, $link);
    }?>
    </select>
    </div>
</body>
</html>