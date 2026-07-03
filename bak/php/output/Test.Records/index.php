<?php

namespace Test\Records;

require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Records/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_Records_sub
$Test_Records_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_Records_add
$Test_Records_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_Records_mod
$Test_Records_mod = ($Data_EuclideanRing_mod)($Data_EuclideanRing_euclideanRingInt);

// Test_Records_updateRec
$Test_Records_updateRec = (function() use (&$Test_Records_updateRec, &$Test_Records_sub, &$Test_Records_add, &$Test_Records_mod) {
  $__fn = function($v, $v1 = null) use (&$Test_Records_updateRec, &$Test_Records_sub, &$Test_Records_add, &$Test_Records_mod, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_Records_updateRec, &$Test_Records_sub, &$Test_Records_add, &$Test_Records_mod) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$r = $__case_1;
return $r;
} else {
;
};
if (true) {
$n = $__case_0;
$r = $__case_1;
$__tco_tmp_0 = ($Test_Records_sub)($n, 1);
$__tco_tmp_1 = (function() use ($r, &$Test_Records_add, &$Test_Records_mod, $n) {
$v2 = $r;
return (function($__e, $__v0, $__v1) { $__obj = clone $__e; $__obj->a = $__v0; $__obj->b = $__v1; return $__obj; })($v2, ($Test_Records_add)(($r)->a, 1), (function() use ($r, &$Test_Records_add, &$Test_Records_mod, $n) {
$v3 = ($r)->b;
return (function($__e, $__v0, $__v1) { $__obj = clone $__e; $__obj->c = $__v0; $__obj->d = $__v1; return $__obj; })($v3, ($Test_Records_add)((($r)->b)->c, 2), (function() use ($r, &$Test_Records_add, &$Test_Records_mod, $n) {
$v4 = (($r)->b)->d;
return (function($__e, $__v0, $__v1) { $__obj = clone $__e; $__obj->e = $__v0; $__obj->f = $__v1; return $__obj; })($v4, ($Test_Records_add)(((($r)->b)->d)->e, 3), ($Test_Records_add)(((($r)->b)->d)->f, ($Test_Records_mod)($n, 5)));
})());
})());
})();
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

// Test_Records_initial
$Test_Records_initial = (object)["a" => 0, "b" => (object)["c" => 0, "d" => (object)["e" => 0, "f" => 0]]];

// Test_Records_describe
$Test_Records_describe = ($Effect_Console_log)("Deep Record Updates (10k iterations):");

// Test_Records_act
$Test_Records_act = ($Effect_Console_logShow)($Data_Show_showInt, (((($Test_Records_updateRec)(10000, $Test_Records_initial))->b)->d)->f);

