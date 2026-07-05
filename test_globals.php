<?php
$start = microtime(true);
for($i=0; $i<10000; $i++) {
    $GLOBALS["Func_$i"] = "\\Func_$i";
}
echo "10k String globals: " . (microtime(true) - $start) . "\n";

$start = microtime(true);
for($i=0; $i<10000; $i++) {
    $GLOBALS["Clos_$i"] = function() { return 1; };
}
echo "10k Closure globals: " . (microtime(true) - $start) . "\n";
