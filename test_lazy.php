<?php
$GLOBALS['x'] = 5;
function get_x() { return $GLOBALS['x']; }

$t0 = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $a = $GLOBALS['x'];
}
echo "Direct: " . (microtime(true) - $t0) . "\n";

$t0 = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $a = get_x();
}
echo "Getter: " . (microtime(true) - $t0) . "\n";
