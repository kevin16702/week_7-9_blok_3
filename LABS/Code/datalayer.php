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
    $sql = "SELECT * FROM characters";
    $result = $conn->query($sql);
    $row = $result->fetchAll(PDO::FETCH_ASSOC);

    //gets all Location Data
    global $locationrow;
    $sql = "SELECT * FROM locations";
    $result = $conn->query($sql);
    $locationrow = $result->fetchAll(PDO::FETCH_ASSOC);
}

//Puts the location data from getAllData() into the option of the select
function GetLocationDataInSelect($locationrow, $e){
    for($e = 0; $e < count($locationrow); $e++){
        $value = $locationrow[$e]["id"];
    echo "<option name=name value=$value>" . $locationrow[$e]["name"] . "</option>"; 
    }
}

//Gets all data and makes it usable for the Character page
function getDataByID($row, $i, $link){ 
    for($i = 0; $i < count($row); $i++){
    echo "<option value=./includes/CharacterPage.php?id=$i>" . $row[$i]['name'] . "</option>";
    }
}

//Loads the overview page
function getOverview($o, $row){
    for($o = 0; $o < count($row); $o++){
        $IdInLink = $o + 1;
        include "./Includes/CharacterBanner.php";
    }
}

//Opens the Connection
OpenCon();

//Gets all Data
GetAllData($conn);

//Gets overview of locations
function LocationOverview($locationrow){
    for($k = 0; $k < count($locationrow); $k++){
        echo "<span style=display:block>" . "<li class='li' style=display:inline-block>"  . $locationrow[$k]["name"]  . "</li>" . "<button onclick=document.getElementById('$k').style.display='block'>" . "Delete" . "</button>" .  "</span>";
        echo "<div id=$k style=display:none class=exit-prompt>" . "<h4>" . "Weet je het zeker" . "</h4>" . "<button class='button' onclick=document.getElementById('$k').style.display='none'>" . "Nee" . "</button>" .
        "<form action='' method='post'>" . "<button type='submit' name=locationdelete value='$k'>" . "ja" . "</button>" .  "</form>" . "</div>";
    }
}


//Gets ID
$id = $_GET['id'];

//Updates Option Values to Databases
if(isset($_POST['update'])){
    $id = $_GET['id'];
    $value = $_POST['LocationUpdateDB'];
    $sql = "UPDATE characters SET location = :loc WHERE id = :id";
   $stmt = $conn->prepare($sql);
   $stmt->execute(['loc' => $value, 'id' => $id]);
}
if(isset($_POST['locationupdate'])){
    $value = $_POST['locationinput'];
    $sql = "INSERT INTO locations (name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$value]);
}
    if (isset($_POST['locationdelete'])) {
        $value = $_POST['locationdelete'];
        $value = $value + 1;
        $sql = "DELETE FROM locations WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$value]);
}
$conn = NULL;
?>