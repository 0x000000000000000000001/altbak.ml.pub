<?php

namespace Test\TCO;

require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.TCO/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_TCO_sub
$Test_TCO_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_TCO_add
$Test_TCO_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_TCO_mod
$Test_TCO_mod = ($Data_EuclideanRing_mod)($Data_EuclideanRing_euclideanRingInt);

// Test_TCO_describe
$Test_TCO_describe = ($Effect_Console_log)("Tail Call Optimization (100k calls):");

// Test_TCO_deepTailRec
$Test_TCO_deepTailRec = (function() use (&$Test_TCO_deepTailRec, &$Test_TCO_sub, &$Test_TCO_add, &$Test_TCO_mod) {
  $__fn = function($v, $v1 = null) use (&$Test_TCO_deepTailRec, &$Test_TCO_sub, &$Test_TCO_add, &$Test_TCO_mod, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_TCO_deepTailRec, &$Test_TCO_sub, &$Test_TCO_add, &$Test_TCO_mod) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$acc = $__case_1;
return $acc;
} else {
;
};
if (true) {
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($Test_TCO_sub)($n, 1);
$__tco_tmp_1 = ($Test_TCO_add)($acc, ($Test_TCO_mod)($n, 3));
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

// Test_TCO_act
$Test_TCO_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_TCO_deepTailRec)(100000, 0));

