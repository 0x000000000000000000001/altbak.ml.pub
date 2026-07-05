<?php
namespace Data\List;
function Data_List_filter($x) { return $x + 1; }
$GLOBALS['Data_List_filter'] = __NAMESPACE__ . '\\Data_List_filter';

namespace Other;
echo $GLOBALS['Data_List_filter'](5) . "\n";
