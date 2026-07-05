<?php
$GLOBALS['x'] = 5;
function phpurs_global($id) {
    if (!isset($GLOBALS[$id])) {
        $GLOBALS[$id] = $GLOBALS['__phpurs_thunks'][$id]();
    }
    return $GLOBALS[$id];
}

$t0 = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $a = phpurs_global('x');
}
echo "Getter with isset: " . (microtime(true) - $t0) . "\n";
