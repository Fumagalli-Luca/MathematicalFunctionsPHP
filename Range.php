<?php
echo "<h2> Funzione RANGE (min, max) </h2>";

foreach(range(1,20) as $num){
    echo "$num ";
}

echo "<h2> Funzione RANGE (min,max,gap) </h2>";

foreach(range(1,20,3) as $num){
    echo "$num ";
}

echo "<h2> Funzione RANGE (min,max,gap) </h2>";

foreach(range(1,2,0.1) as $num){
    echo "$num ";
}
?>