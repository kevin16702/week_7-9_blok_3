<?php
function OpenCon($conn){

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mysql";
$db = "databank_php";
global $conn;

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
    return $conn;
}
function getAllData($conn){
    global $row;
    $sql = "SELECT * FROM characters";
    $result = $conn->query($sql);
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
   // var_dump($row);
}

function getDataByID($row, $i){ 
    $row = $row[$i];
    include "./Includes/CharacterSheet.php";
}
?>