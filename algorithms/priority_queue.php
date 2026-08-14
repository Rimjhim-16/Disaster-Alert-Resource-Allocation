<?php
function prioritizeDisasters(array $disasters): array {
    usort($disasters, function ($a, $b) {
        return $b['severity'] <=> $a['severity'];
    });
    return $disasters;
}
?>
