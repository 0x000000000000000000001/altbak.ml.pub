<?php

namespace Test\Church;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Church/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_Church_add
$Test_Church_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_Church_sub
$Test_Church_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_Church_zeroC
$Test_Church_zeroC = (function() {
  $__fn = function($v, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $x;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Church_toInt
$Test_Church_toInt = (function() use (&$Test_Church_add) {
  $__fn = function($n) use (&$Test_Church_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($n)((function() use (&$Test_Church_add) {
  $__fn = function($x) use (&$Test_Church_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Church_add)($x, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), 0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Church_succC
$Test_Church_succC = (function() {
  $__fn = function($n, $f = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($n)($f, $x));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Church_mulC
$Test_Church_mulC = (function() {
  $__fn = function($m, $n = null, $f = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($m)(($n)($f), $x);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Church_fromInt
$Test_Church_fromInt = (function() use (&$Test_Church_zeroC, &$Test_Church_succC, &$Test_Church_fromInt, &$Test_Church_sub) {
  $__fn = function($v) use (&$Test_Church_zeroC, &$Test_Church_succC, &$Test_Church_fromInt, &$Test_Church_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_Church_zeroC, &$Test_Church_succC, &$Test_Church_fromInt, &$Test_Church_sub) {
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return $Test_Church_zeroC;
} else {
;
};
if (true) {
$n = $__case_0;
return ($Test_Church_succC)(($Test_Church_fromInt)(($Test_Church_sub)($n, 1)));
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

// Test_Church_describe
$Test_Church_describe = ($Effect_Console_log)("Church Numerals (100k Closure Applications):");

// Test_Church_c10
$Test_Church_c10 = ($Test_Church_fromInt)(10);

// Test_Church_c100
$Test_Church_c100 = ($Test_Church_mulC)($Test_Church_c10, $Test_Church_c10);

// Test_Church_c10k
$Test_Church_c10k = ($Test_Church_mulC)($Test_Church_c100, $Test_Church_c100);

// Test_Church_c100k
$Test_Church_c100k = ($Test_Church_mulC)($Test_Church_c10k, $Test_Church_c10);

// Test_Church_addC
$Test_Church_addC = (function() {
  $__fn = function($m, $n = null, $f = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($m)($f, ($n)($f, $x));
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Church_act
$Test_Church_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_Church_toInt)($Test_Church_c100k));

