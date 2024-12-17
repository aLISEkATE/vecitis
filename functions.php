<?php

//Dump and Die
function dd($data){
    foreach ($data as $x) {
         
    $letter = $x['letter_text'] ? $x['letter_text'] : 'No letter assigned.';
    echo '<div style="border: 5px solid green; padding: 10px; margin-bottom: 10px; width: 500px;">';
    echo '<p><strong class="meow">Name:</strong> ' . $x['firstname'] . " " . $x['surname'] . '</p>';
    echo '<p><strong class="meow">Age:</strong> ' . $x['age'] . ' gadi</p>';
    echo '<p><strong class="meow">Letter:</strong> ' . $letter . '</p>';
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
