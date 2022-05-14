<?php
function how_much($fuel, $per_truc, $rest = false) {
    $num_truck_per_route = $fuel / $per_truc;
    $rest = $fuel % $per_truc;
    if($rest) {
        return $rest;
    } else {
        return floor($num_truck_per_route);
    }
}
echo "kad je flag false:" . "<br>";
echo how_much(1248, 75) . ' kamiona prelaze zadatu rutu.';
echo '<br>';
echo "kad flag nije false:" . "<br>";
echo how_much(92, 25, true) . ' litara goriva ostaje.';
?>



