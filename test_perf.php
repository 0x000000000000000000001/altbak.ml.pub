<?php
$start = microtime(true);
for($i=0; $i<1000000; $i++) {
    ("\strlen")("abc");
}
echo "String call: " . (microtime(true) - $start) . "\n";

$start = microtime(true);
for($i=0; $i<1000000; $i++) {
    \strlen("abc");
}
echo "Direct call: " . (microtime(true) - $start) . "\n";
