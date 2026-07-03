<?php

namespace Test\ListOps;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.ListOps/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_ListOps_lessThan
$Test_ListOps_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Test_ListOps_sub
$Test_ListOps_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_ListOps_eq
$Test_ListOps_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Test_ListOps_mod
$Test_ListOps_mod = ($Data_EuclideanRing_mod)($Data_EuclideanRing_euclideanRingInt);

// Test_ListOps_Nil
$Test_ListOps_Nil = (object)["tag" => "Nil", "values" => []];

// Test_ListOps_Cons
$Test_ListOps_Cons = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Cons", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_ListOps_range
$Test_ListOps_range = (function() use (&$Test_ListOps_lessThan, &$Test_ListOps_sub, &$Test_ListOps_Cons, &$Test_ListOps_Nil) {
  $__fn = function($start, $end = null) use (&$Test_ListOps_lessThan, &$Test_ListOps_sub, &$Test_ListOps_Cons, &$Test_ListOps_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Test_ListOps_lessThan, $start, &$go, &$Test_ListOps_sub, &$Test_ListOps_Cons) {
  $__fn = function($curr, $acc = null) use (&$Test_ListOps_lessThan, $start, &$go, &$Test_ListOps_sub, &$Test_ListOps_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($curr, $acc) use (&$Test_ListOps_lessThan, $start, &$go, &$Test_ListOps_sub, &$Test_ListOps_Cons) {
while (true) {
$__case_0 = ($Test_ListOps_lessThan)($curr, $start);
if (($__case_0 === true)) {
return $acc;
} else {
;
};
if (true) {
$__tco_tmp_0 = ($Test_ListOps_sub)($curr, 1);
$__tco_tmp_1 = ($Test_ListOps_Cons)($curr, $acc);
$curr = $__tco_tmp_0;
$acc = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($curr, $acc);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)($end, $Test_ListOps_Nil);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_ListOps_foldl
$Test_ListOps_foldl = (function() use (&$Test_ListOps_foldl) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Test_ListOps_foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Test_ListOps_foldl) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Nil")) {
$acc = $__case_1;
return $acc;
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$f = $__case_0;
$acc = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$__tco_tmp_0 = $f;
$__tco_tmp_1 = ($f)($acc, $x);
$__tco_tmp_2 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v, $v1, $v2);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_ListOps_filterEvens
$Test_ListOps_filterEvens = (function() use (&$Test_ListOps_eq, &$Test_ListOps_mod, &$Test_ListOps_Cons, &$Test_ListOps_Nil) {
  $__fn = function($lst) use (&$Test_ListOps_eq, &$Test_ListOps_mod, &$Test_ListOps_Cons, &$Test_ListOps_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Test_ListOps_eq, &$Test_ListOps_mod, &$go, &$Test_ListOps_Cons) {
  $__fn = function($v, $v1 = null) use (&$Test_ListOps_eq, &$Test_ListOps_mod, &$go, &$Test_ListOps_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_ListOps_eq, &$Test_ListOps_mod, &$go, &$Test_ListOps_Cons) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_1;
return $acc;
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$acc = $__case_1;
$__case_0 = ($Test_ListOps_eq)(($Test_ListOps_mod)($x, 2), 0);
if (($__case_0 === true)) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($Test_ListOps_Cons)($x, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
if (true) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = $acc;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
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
    $__res = ($go)($lst, $Test_ListOps_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_ListOps_sumEvens
$Test_ListOps_sumEvens = ($Test_ListOps_foldl)(($Data_Semiring_add)($Data_Semiring_semiringInt), 0, ($Test_ListOps_filterEvens)(($Test_ListOps_range)(1, 900)));

// Test_ListOps_describe
$Test_ListOps_describe = ($Effect_Console_log)("List Processing (900 elements):");

// Test_ListOps_act
$Test_ListOps_act = ($Effect_Console_logShow)($Data_Show_showInt, $Test_ListOps_sumEvens);

