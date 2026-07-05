<?php
function get_x() {
    static $v;
    static $init = false;
    if (!$init) { $v = 5; $init = true; }
    return $v;
}

$t0 = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $a = get_x();
}
echo "Static getter: " . (microtime(true) - $t0) . "\n";
