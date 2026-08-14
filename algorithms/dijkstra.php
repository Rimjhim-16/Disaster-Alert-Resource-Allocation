<?php
function dijkstra(array $graph, string $source): array {
    $dist = [];
    $visited = [];

    foreach ($graph as $node => $edges) {
        $dist[$node] = INF;
        $visited[$node] = false;
    }
    $dist[$source] = 0;

    foreach ($graph as $unused => $edges) {
        $current = null;
        $best = INF;

        foreach ($dist as $node => $distance) {
            if (!$visited[$node] && $distance < $best) {
                $best = $distance;
                $current = $node;
            }
        }

        if ($current === null) break;
        $visited[$current] = true;

        foreach ($graph[$current] as $neighbor => $weight) {
            $newDistance = $dist[$current] + $weight;
            if ($newDistance < $dist[$neighbor]) {
                $dist[$neighbor] = $newDistance;
            }
        }
    }

    return $dist;
}
?>
