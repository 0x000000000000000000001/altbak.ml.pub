<?php
$t0 = microtime(true);
require __DIR__ . '/output/vendor/autoload.php';
$t1 = microtime(true);
require __DIR__ . '/output/main.php';
$t2 = microtime(true);
echo "Autoload: " . ($t1 - $t0) . "s\n";
echo "Main require: " . ($t2 - $t1) . "s\n";
