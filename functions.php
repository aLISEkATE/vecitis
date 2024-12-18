<?php

//Dump and Die

// Dump and Die - highlighting words that match
function dd($data, $gifts = []) {
    echo '<div class="grid-container">';
    
    foreach ($data as $x) {
        $letter = $x['letter_text'] ? $x['letter_text'] : 'No letter assigned.';

        echo '<div id="ya" class="grid-item" style="padding: 10px; margin-bottom: 10px; width: 500px;">';
        echo '<p><strong class="meow">Vārds:</strong> ' . $x['firstname'] . " " . $x['middlename'] . " " . $x['surname'] . '</p>';
        echo '<p><strong class="meow">Vecums:</strong> ' . $x['age'] . ' gadi</p>';
        echo '<p><strong class="meow">Vēstule:</strong> ' . $letter . '</p>';
        echo '</div>';
    }

    echo '</div>';
    die();
}
function dnd($data){
    echo '<div class="grid-container">';
    foreach ($data as $x) {
    echo '<div id="ya" class="grid-item" style="padding: 10px; margin-bottom: 10px; width: 500px;">';
    echo '<p><strong class="meow">Lieta:</strong> ' . $x['name'] . '</p>';
    echo '<p><strong class="meow">Daudzums: </strong> ' . $x['count_available'] . '</p>';
    echo '</div>';
    }echo '</div>';
    die();
    }
        
?>
