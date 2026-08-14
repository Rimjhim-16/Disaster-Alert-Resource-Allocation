<?php
require_once "../algorithms/dijkstra.php";
require_once "../algorithms/bfs.php";

$graph = [
    "Dehradun" => ["Rishikesh" => 45, "Mussoorie" => 35],
    "Rishikesh" => ["Dehradun" => 45, "Haridwar" => 25],
    "Mussoorie" => ["Dehradun" => 35],
    "Haridwar" => ["Rishikesh" => 25]
];

print_r(dijkstra($graph, "Dehradun"));
print_r(bfs($graph, "Dehradun"));
?>
