<?php

//Dump and Die
function dd($data){
    foreach ($data as $x) {
         
    $letter = $x['letter_text'] ? $x['letter_text'] : 'No letter assigned.';
    echo '<div style="border: 1px solid black; padding: 10px; margin-bottom: 10px; width: 200px;">';
    echo '<p><strong>Name:</strong> ' . $x['firstname'] . " " . $x['surname'] . '</p>';
    echo '<p><strong>Age:</strong> ' . $x['age'] . ' gadi</p>';
    echo '<p><strong>Letter:</strong> ' . $letter . '</p>';
    echo '</div>';
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
