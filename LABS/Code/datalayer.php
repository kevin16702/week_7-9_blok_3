<?php

$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI']; 
  
echo $link; 

function OpenCon(){

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
function locationData($conn){
    global $locationrow;
    $sql = "SELECT * FROM locations";
    $result = $conn->query($sql);
    $locationrow = $result->fetchAll(PDO::FETCH_ASSOC);
    var_dump($locationrow);
}
function GetLocationDataInSelect($locationrow, $i){
    $locationrow = $locationrow[$i];
    echo "<option>" . $locationrow["name"] . "</option>"; 
}
function getDataByID($row, $i, $link){ 
    $row = $row[$i];
    echo "<option value=$link/Includes/CharacterSheet.php?=$i>" . $row['name'] . "</option>";
}
?>