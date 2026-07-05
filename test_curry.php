<?php
namespace Data\List;
function Data_List_filter($x, $y = null) {
    $__num = func_num_args();
    $__fn = __NAMESPACE__ . '\\Data_List_filter';
    if ($__num < 2) {
        return function($y) use ($x, $__fn) { return $__fn($x, $y); };
    }
    return $x + $y;
}
echo Data_List_filter(5)(10) . "\n";
