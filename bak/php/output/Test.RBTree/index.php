<?php

namespace Test\RBTree;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.RBTree/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_RBTree_greaterThan
$Test_RBTree_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Test_RBTree_add
$Test_RBTree_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_RBTree_lessThan
$Test_RBTree_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Test_RBTree_sub
$Test_RBTree_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_RBTree_R
$Test_RBTree_R = (object)["tag" => "R", "values" => []];

// Test_RBTree_B
$Test_RBTree_B = (object)["tag" => "B", "values" => []];

// Test_RBTree_E
$Test_RBTree_E = (object)["tag" => "E", "values" => []];

// Test_RBTree_T
$Test_RBTree_T = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "T", "values" => [$value0, $value1, $value2, $value3]];
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_RBTree_max
$Test_RBTree_max = (function() use (&$Test_RBTree_greaterThan) {
  $__body = function($x, $y) use (&$Test_RBTree_greaterThan) {
    $__case_0 = ($Test_RBTree_greaterThan)($x, $y);
    if (($__case_0 === true)) {
return $x;
} else {
;
};
    if (true) {
return $y;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Test_RBTree_greaterThan, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
  };
  return $__fn;
})();

// Test_RBTree_describe
$Test_RBTree_describe = ($Effect_Console_log)("Red-Black Tree (100k Worst-Case Insertions):");

// Test_RBTree_depth
$Test_RBTree_depth = (function() use (&$Test_RBTree_add, &$Test_RBTree_max, &$Test_RBTree_depth) {
  $__fn = function($v) use (&$Test_RBTree_add, &$Test_RBTree_max, &$Test_RBTree_depth, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_RBTree_add, &$Test_RBTree_max, &$Test_RBTree_depth) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "E")) {
return 0;
} else {
;
};
if ((($__case_0)->tag === "T")) {
$a = ($__case_0)->values[1];
$b = ($__case_0)->values[3];
return ($Test_RBTree_add)(1, ($Test_RBTree_max)(($Test_RBTree_depth)($a), ($Test_RBTree_depth)($b)));
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

// Test_RBTree_balance
$Test_RBTree_balance = (function() use (&$Test_RBTree_T, &$Test_RBTree_R, &$Test_RBTree_B) {
  $__body = function($v, $v1, $v2, $v3) use (&$Test_RBTree_T, &$Test_RBTree_R, &$Test_RBTree_B) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if (((($__case_0)->tag === "B") && (((($__case_1)->tag === "T") && ((($__case_1)->values[0])->tag === "R")) && (((($__case_1)->values[1])->tag === "T") && (((($__case_1)->values[1])->values[0])->tag === "R"))))) {
$a = (($__case_1)->values[1])->values[1];
$x = (($__case_1)->values[1])->values[2];
$b = (($__case_1)->values[1])->values[3];
$y = ($__case_1)->values[2];
$c = ($__case_1)->values[3];
$z = $__case_2;
$d = $__case_3;
return ($Test_RBTree_T)($Test_RBTree_R, ($Test_RBTree_T)($Test_RBTree_B, $a, $x, $b), $y, ($Test_RBTree_T)($Test_RBTree_B, $c, $z, $d));
} else {
;
};
    if (((($__case_0)->tag === "B") && (((($__case_1)->tag === "T") && ((($__case_1)->values[0])->tag === "R")) && (((($__case_1)->values[3])->tag === "T") && (((($__case_1)->values[3])->values[0])->tag === "R"))))) {
$a = ($__case_1)->values[1];
$x = ($__case_1)->values[2];
$b = (($__case_1)->values[3])->values[1];
$y = (($__case_1)->values[3])->values[2];
$c = (($__case_1)->values[3])->values[3];
$z = $__case_2;
$d = $__case_3;
return ($Test_RBTree_T)($Test_RBTree_R, ($Test_RBTree_T)($Test_RBTree_B, $a, $x, $b), $y, ($Test_RBTree_T)($Test_RBTree_B, $c, $z, $d));
} else {
;
};
    if (((($__case_0)->tag === "B") && (((($__case_3)->tag === "T") && ((($__case_3)->values[0])->tag === "R")) && (((($__case_3)->values[1])->tag === "T") && (((($__case_3)->values[1])->values[0])->tag === "R"))))) {
$a = $__case_1;
$x = $__case_2;
$b = (($__case_3)->values[1])->values[1];
$y = (($__case_3)->values[1])->values[2];
$c = (($__case_3)->values[1])->values[3];
$z = ($__case_3)->values[2];
$d = ($__case_3)->values[3];
return ($Test_RBTree_T)($Test_RBTree_R, ($Test_RBTree_T)($Test_RBTree_B, $a, $x, $b), $y, ($Test_RBTree_T)($Test_RBTree_B, $c, $z, $d));
} else {
;
};
    if (((($__case_0)->tag === "B") && (((($__case_3)->tag === "T") && ((($__case_3)->values[0])->tag === "R")) && (((($__case_3)->values[3])->tag === "T") && (((($__case_3)->values[3])->values[0])->tag === "R"))))) {
$a = $__case_1;
$x = $__case_2;
$b = ($__case_3)->values[1];
$y = ($__case_3)->values[2];
$c = (($__case_3)->values[3])->values[1];
$z = (($__case_3)->values[3])->values[2];
$d = (($__case_3)->values[3])->values[3];
return ($Test_RBTree_T)($Test_RBTree_R, ($Test_RBTree_T)($Test_RBTree_B, $a, $x, $b), $y, ($Test_RBTree_T)($Test_RBTree_B, $c, $z, $d));
} else {
;
};
    if (true) {
$color = $__case_0;
$a = $__case_1;
$x = $__case_2;
$b = $__case_3;
return ($Test_RBTree_T)($color, $a, $x, $b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use (&$Test_RBTree_T, &$Test_RBTree_R, &$Test_RBTree_B, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($v, $v1, $v2, $v3);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($v, $v1, $v2, $v3);
  };
  return $__fn;
})();

// Test_RBTree_insert
$Test_RBTree_insert = (function() use (&$Test_RBTree_T, &$Test_RBTree_B, &$Test_RBTree_E, &$Test_RBTree_R, &$Test_RBTree_lessThan, &$Test_RBTree_balance, &$Test_RBTree_greaterThan) {
  $__fn = function($x, $s = null) use (&$Test_RBTree_T, &$Test_RBTree_B, &$Test_RBTree_E, &$Test_RBTree_R, &$Test_RBTree_lessThan, &$Test_RBTree_balance, &$Test_RBTree_greaterThan, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$makeBlack = (function() use (&$Test_RBTree_T, &$Test_RBTree_B, &$Test_RBTree_E) {
  $__body = function($v) use (&$Test_RBTree_T, &$Test_RBTree_B, &$Test_RBTree_E) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "T")) {
$a = ($__case_0)->values[1];
$y = ($__case_0)->values[2];
$b = ($__case_0)->values[3];
return ($Test_RBTree_T)($Test_RBTree_B, $a, $y, $b);
} else {
;
};
    if ((($__case_0)->tag === "E")) {
return $Test_RBTree_E;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Test_RBTree_T, &$Test_RBTree_B, &$Test_RBTree_E, $__body, &$__fn) {
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
$ins = (function() use (&$Test_RBTree_T, &$Test_RBTree_R, &$Test_RBTree_E, $x, &$Test_RBTree_lessThan, &$Test_RBTree_balance, &$ins, &$Test_RBTree_greaterThan) {
  $__fn = function($v) use (&$Test_RBTree_T, &$Test_RBTree_R, &$Test_RBTree_E, $x, &$Test_RBTree_lessThan, &$Test_RBTree_balance, &$ins, &$Test_RBTree_greaterThan, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_RBTree_T, &$Test_RBTree_R, &$Test_RBTree_E, $x, &$Test_RBTree_lessThan, &$Test_RBTree_balance, &$ins, &$Test_RBTree_greaterThan) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "E")) {
return ($Test_RBTree_T)($Test_RBTree_R, $Test_RBTree_E, $x, $Test_RBTree_E);
} else {
;
};
if ((($__case_0)->tag === "T")) {
$color = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
$y = ($__case_0)->values[2];
$b = ($__case_0)->values[3];
$__case_0 = ($Test_RBTree_lessThan)($x, $y);
if (($__case_0 === true)) {
return ($Test_RBTree_balance)($color, ($ins)($a), $y, $b);
} else {
;
};
if (true) {
$__case_0 = ($Test_RBTree_greaterThan)($x, $y);
if (($__case_0 === true)) {
return ($Test_RBTree_balance)($color, $a, $y, ($ins)($b));
} else {
;
};
if (true) {
return ($Test_RBTree_T)($color, $a, $y, $b);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
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
    $__res = ($makeBlack)(($ins)($s));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_RBTree_buildTree
$Test_RBTree_buildTree = (function() use (&$Test_RBTree_buildTree, &$Test_RBTree_sub, &$Test_RBTree_insert) {
  $__fn = function($v, $v1 = null) use (&$Test_RBTree_buildTree, &$Test_RBTree_sub, &$Test_RBTree_insert, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_RBTree_buildTree, &$Test_RBTree_sub, &$Test_RBTree_insert) {
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
$__tco_tmp_0 = ($Test_RBTree_sub)($n, 1);
$__tco_tmp_1 = ($Test_RBTree_insert)($n, $acc);
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

// Test_RBTree_act
$Test_RBTree_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_RBTree_depth)(($Test_RBTree_buildTree)(100000, $Test_RBTree_E)));

