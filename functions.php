<?php

//Dump and Die
function dd($data){
    foreach ($data as $x) {
        $letter = $x['letter_text'] ? $x['letter_text'] : 'No letter assigned.';
        echo "<li>" . $x['firstname'] . " " . $x['middlename'] . " " . $x['surname'] . ", " . $x['age'] . " gadi. ";
        echo "Letter: " . $letter . "</li>";
    }
    die();
    }

function dnd($data){
    echo "<ul>";
    foreach($data as $x){ 
    echo"<li>" . $x["name"] . " " . $x["count_available"] . "</li>";
    } 
    echo "</ul>";
    die();
    }
        
?>
