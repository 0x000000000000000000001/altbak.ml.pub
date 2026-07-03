<?php

namespace Test\Fib;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Fib/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_Fib_add
$Test_Fib_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_Fib_sub
$Test_Fib_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_Fib_fib
$Test_Fib_fib = (function() use (&$Test_Fib_add, &$Test_Fib_fib, &$Test_Fib_sub) {
  $__fn = function($v) use (&$Test_Fib_add, &$Test_Fib_fib, &$Test_Fib_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_Fib_add, &$Test_Fib_fib, &$Test_Fib_sub) {
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return 0;
} else {
;
};
if (($__case_0 === 1)) {
return 1;
} else {
;
};
if (true) {
$n = $__case_0;
return ($Test_Fib_add)(($Test_Fib_fib)(($Test_Fib_sub)($n, 1)), ($Test_Fib_fib)(($Test_Fib_sub)($n, 2)));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Fib_describe
$Test_Fib_describe = ($Effect_Console_log)("Fibonacci:");

// Test_Fib_act
$Test_Fib_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_Fib_fib)(10));

