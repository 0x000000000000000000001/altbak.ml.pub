<?php
namespace Data\List;
$GLOBALS['x'] = 5;
function get_y() { return 10; }

$t0 = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $a = isset($GLOBALS['x']) ? $GLOBALS['x'] : \Data\List\get_x();
    $b = isset($GLOBALS['y']) ? $GLOBALS['y'] : \Data\List\get_y();
}
echo "Ternary isset: " . (microtime(true) - $t0) . "\n";
