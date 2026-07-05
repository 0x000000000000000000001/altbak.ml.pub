<?php
$GLOBALS['__phpurs_lazy_cache'] = [
    'Data_List_filter' => '\Data\List\Data_List_filter'
];
$GLOBALS['__phpurs_lazy'] = [
    'Data_List_notEq' => function() { return "notEq"; }
];
function phpurs_get($id) {
    if (!array_key_exists($id, $GLOBALS['__phpurs_lazy_cache'])) {
        $GLOBALS['__phpurs_lazy_cache'][$id] = $GLOBALS['__phpurs_lazy'][$id]();
    }
    return $GLOBALS['__phpurs_lazy_cache'][$id];
}

$t0 = microtime(true);
for ($i = 0; $i < 10000000; $i++) {
    $a = phpurs_get('Data_List_filter');
    $b = phpurs_get('Data_List_notEq');
}
echo "phpurs_get: " . (microtime(true) - $t0) . "\n";
