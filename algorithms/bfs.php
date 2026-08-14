<?php
function bfs(array $graph, string $start): array {
    $queue = [$start];
    $visited = [$start => true];
    $order = [];

    while (!empty($queue)) {
        $node = array_shift($queue);
        $order[] = $node;

        foreach ($graph[$node] ?? [] as $neighbor => $unused) {
            if (!isset($visited[$neighbor])) {
                $visited[$neighbor] = true;
                $queue[] = $neighbor;
            }
        }
    }

    return $order;
}
?>
