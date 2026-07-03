<?php

namespace Test\LazyEvaluation;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.LazyEvaluation/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_LazyEvaluation_sub
$Test_LazyEvaluation_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_LazyEvaluation_add
$Test_LazyEvaluation_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_LazyEvaluation_Lazy
$Test_LazyEvaluation_Lazy = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $x;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_LazyEvaluation_force
$Test_LazyEvaluation_force = (function() use (&$Data_Unit_unit) {
  $__body = function($v) use (&$Data_Unit_unit) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($f)($Data_Unit_unit);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v);
  };
  return $__fn;
})();

// Test_LazyEvaluation_describe
$Test_LazyEvaluation_describe = ($Effect_Console_log)("Lazy Evaluation (1M Thunks Forced, 1k Depth):");

// Test_LazyEvaluation_defer
$Test_LazyEvaluation_defer = (function() use (&$Test_LazyEvaluation_Lazy) {
  $__fn = function($f) use (&$Test_LazyEvaluation_Lazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_LazyEvaluation_Lazy)($f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_LazyEvaluation_buildThunks
$Test_LazyEvaluation_buildThunks = (function() use (&$Test_LazyEvaluation_buildThunks, &$Test_LazyEvaluation_sub, &$Test_LazyEvaluation_defer, &$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force) {
  $__fn = function($v, $v1 = null) use (&$Test_LazyEvaluation_buildThunks, &$Test_LazyEvaluation_sub, &$Test_LazyEvaluation_defer, &$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_LazyEvaluation_buildThunks, &$Test_LazyEvaluation_sub, &$Test_LazyEvaluation_defer, &$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force) {
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
$__tco_tmp_0 = ($Test_LazyEvaluation_sub)($n, 1);
$__tco_tmp_1 = ($Test_LazyEvaluation_defer)((function() use (&$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force, $acc) {
  $__fn = function($v2) use (&$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_LazyEvaluation_add)(($Test_LazyEvaluation_force)($acc), 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
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

// Test_LazyEvaluation_runManyTimes
$Test_LazyEvaluation_runManyTimes = (function() use (&$Test_LazyEvaluation_runManyTimes, &$Test_LazyEvaluation_sub, &$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force, &$Test_LazyEvaluation_buildThunks, &$Test_LazyEvaluation_defer) {
  $__fn = function($v, $v1 = null) use (&$Test_LazyEvaluation_runManyTimes, &$Test_LazyEvaluation_sub, &$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force, &$Test_LazyEvaluation_buildThunks, &$Test_LazyEvaluation_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_LazyEvaluation_runManyTimes, &$Test_LazyEvaluation_sub, &$Test_LazyEvaluation_add, &$Test_LazyEvaluation_force, &$Test_LazyEvaluation_buildThunks, &$Test_LazyEvaluation_defer) {
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
$__tco_tmp_0 = ($Test_LazyEvaluation_sub)($n, 1);
$__tco_tmp_1 = ($Test_LazyEvaluation_add)($acc, ($Test_LazyEvaluation_force)(($Test_LazyEvaluation_buildThunks)(1000, ($Test_LazyEvaluation_defer)((function() {
  $__fn = function($v2) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = 0;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()))));
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

// Test_LazyEvaluation_act
$Test_LazyEvaluation_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_LazyEvaluation_runManyTimes)(1000, 0));

