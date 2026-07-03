<?php

namespace Test\Ackermann;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Ackermann/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_Ackermann_add
$Test_Ackermann_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_Ackermann_sub
$Test_Ackermann_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_Ackermann_describe
$Test_Ackermann_describe = ($Effect_Console_log)("Ackermann (3, 4):");

// Test_Ackermann_ackermann
$Test_Ackermann_ackermann = (function() use (&$Test_Ackermann_add, &$Test_Ackermann_ackermann, &$Test_Ackermann_sub) {
  $__fn = function($v, $v1 = null) use (&$Test_Ackermann_add, &$Test_Ackermann_ackermann, &$Test_Ackermann_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_Ackermann_add, &$Test_Ackermann_ackermann, &$Test_Ackermann_sub) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$n = $__case_1;
return ($Test_Ackermann_add)($n, 1);
} else {
;
};
if (($__case_1 === 0)) {
$m = $__case_0;
$__tco_tmp_0 = ($Test_Ackermann_sub)($m, 1);
$__tco_tmp_1 = 1;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
if (true) {
$m = $__case_0;
$n = $__case_1;
$__tco_tmp_0 = ($Test_Ackermann_sub)($m, 1);
$__tco_tmp_1 = ($Test_Ackermann_ackermann)($m, ($Test_Ackermann_sub)($n, 1));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v, $v1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Ackermann_act
$Test_Ackermann_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_Ackermann_ackermann)(3, 4));

