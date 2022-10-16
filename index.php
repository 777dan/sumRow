<?php
function sum_row()
{
    $sum = 0;
    for ($i = 1; $i < 10; $i++) {
        echo $sum += $i * $i;
        echo "\n";
    }
}

sum_row();
