<?php
function sum_row() {
    $n = 0;
    for ($i=0; $i < 10; $i++) { 
        $n++;
        $q = $n * $n;
        echo $q;
    }
}

sum_row();