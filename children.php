<link rel='stylesheet' href='style.css' type='text/css'>
<body>
<h1>BĒRNI</h1>
<?php
require "functions.php";
require "Database.php";

$config= require("config.php");




//1. database +
//2. savienot PHP ar DB

    //Ar PDO pieslegties
    //host, lietotajvards, parole, ports, DB nosaukums
    // data source name

$db= new Database($config["database"]);
    //iegut bloga ierakstus
$posts1=$db->query("SELECT * FROM gifts")->fetchAll();
$posts2=$db->query("SELECT * FROM children")->fetchAll();
$posts=$db->query("SELECT 
    children.firstname, 
    children.middlename, 
    children.surname, 
    children.age, 
    letters.letter_text
FROM 
    children
LEFT JOIN 
    letters ON children.id = letters.sender_id"
    )->fetchAll();


    //$comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);
    //$user = $db->query("SELECT * FROM users WHERE usetId = $id")->fetch(PDO::FETCH_ASSOC);
    //$db->query("INSERT INTO posts ...");

dd($posts);

//API foreach

?>
</body>