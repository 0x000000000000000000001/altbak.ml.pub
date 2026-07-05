<?php
$start = microtime(true);
for($i=0; $i<1000; $i++) {
    file_put_contents("/tmp/test_file_$i.php", "<?php \$GLOBALS['f_$i'] = function() { return 1; };\n");
}
for($i=0; $i<1000; $i++) {
    require_once "/tmp/test_file_$i.php";
}
echo "1000 requires: " . (microtime(true) - $start) . "\n";
