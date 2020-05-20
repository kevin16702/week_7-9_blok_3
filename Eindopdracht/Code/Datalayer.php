<?php

//Gets the link and turns it into an useable variable
$link = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER["REQUEST_URI"]; 

//Makes an connection to the Database
function OpenCon(){

    //variables of the connection
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "mysql";
    $db = "databank_php";
    global $conn;

    //makes the connection
    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    //Displays an error code if the connection fails
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
        return $conn;
}

//Gets all Data and puts it in an array
function getAllData($conn){

    //gets all Character Data
    global $row;
    $sql = "SELECT * FROM games";
    $result = $conn->query($sql);
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
}


function Getgamecard($i, $row){
    for($i = 0; $i < count($row); $i++){
        include "./Includes/Game.php";
    }
}

// Gets overview of boardgames sorted on time
function getGameData($conn){

    global $gamerow;
    $sql = "SELECT * FROM gameplanning";
    $result = $conn->query($sql);
    $gamerow = $result->fetchAll(PDO::FETCH_ASSOC);
}

function planningsoverzicht($conn, $gamerow){
    $id = $_GET['id'];
    $name = $gamerow[$id]['name'];
    global $gameitemrow;
    $sql = "SELECT * FROM games WHERE name = :name";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $gameitemrow = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

OpenCon();
getAllData($conn);
getGameData($conn);
planningsoverzicht($conn, $gamerow);
$error = "";
if(isset($_POST["submit$id"])){
    $error = "";
    if(empty($_POST["meespelen$id"]) || empty($_POST["starttijd$id"]) || empty($_POST["uitleg$id"])){
        $error = "Niet alles is ingevuld";
    }
    else{
    //Puts Name and request in database
    $name = $row[$id]['name'];

    $meespelen = $_POST["meespelen$id"];
    $meespelen = trim($meespelen);
    $meespelen = stripslashes($meespelen);
    $meespelen = htmlspecialchars($meespelen);

    $starttijd = $_POST["starttijd$id"];
    $speeltijd = $row[$id]['play_minutes'];

    $uitleg = $_POST["uitleg$id"];
    $uitleg = trim($uitleg);
    $uitleg = stripslashes($uitleg);
    $uitleg = htmlspecialchars($uitleg);



    $sql =  "INSERT INTO gameplanning (name, starttijd, speeltijd, spelers, uitleg) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $starttijd, $speeltijd, $meespelen, $uitleg]);
    header('Location: ./successcreate.php?id=' . $id);
    }
}
if(isset($_POST["remove"])){
    $value = $_POST["remove"];
    echo $value;
    $sql = "DELETE FROM gameplanning WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$value]);
    header('Location: ./successdelete.php');
}
if(isset($_POST["change"])){
    $idvalue = $gamerow[$id]['id'];
    $meespelen = $_POST["spelers"];
    $meespelen = trim($meespelen);
    $meespelen = stripslashes($meespelen);
    $meespelen = htmlspecialchars($meespelen);

    $starttijd = $_POST["time"];

    $uitleg = $_POST["uitleg"];
    $uitleg = trim($uitleg);
    $uitleg = stripslashes($uitleg);
    $uitleg = htmlspecialchars($uitleg);

    $sql =  "UPDATE gameplanning SET starttijd = ?, spelers = ?, uitleg = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$starttijd, $meespelen, $uitleg, $idvalue]);    
    header('Location: ./successchange.php?id=' . $id);
}
?>
