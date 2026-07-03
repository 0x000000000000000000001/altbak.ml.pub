<?php

namespace Test\Primes;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Primes/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Test_Primes_add
$Test_Primes_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Test_Primes_lessThan
$Test_Primes_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Test_Primes_sub
$Test_Primes_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Test_Primes_notEq
$Test_Primes_notEq = ($Data_Eq_notEq)($Data_Eq_eqInt);

// Test_Primes_mod
$Test_Primes_mod = ($Data_EuclideanRing_mod)($Data_EuclideanRing_euclideanRingInt);

// Test_Primes_Nil
$Test_Primes_Nil = (object)["tag" => "Nil", "values" => []];

// Test_Primes_Cons
$Test_Primes_Cons = (function() {
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

// Test_Primes_sumList
$Test_Primes_sumList = (function() use (&$Test_Primes_add) {
  $__fn = function($lst) use (&$Test_Primes_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, &$Test_Primes_add) {
  $__fn = function($v, $v1 = null) use (&$go, &$Test_Primes_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$go, &$Test_Primes_add) {
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
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($Test_Primes_add)($acc, $x);
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
    $__res = ($go)($lst, 0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Primes_reverse
$Test_Primes_reverse = (function() use (&$Test_Primes_Cons, &$Test_Primes_Nil) {
  $__fn = function($lst) use (&$Test_Primes_Cons, &$Test_Primes_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, &$Test_Primes_Cons) {
  $__fn = function($v, $v1 = null) use (&$go, &$Test_Primes_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$go, &$Test_Primes_Cons) {
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
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($Test_Primes_Cons)($x, $acc);
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
    $__res = ($go)($lst, $Test_Primes_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Primes_range
$Test_Primes_range = (function() use (&$Test_Primes_lessThan, &$Test_Primes_sub, &$Test_Primes_Cons, &$Test_Primes_Nil) {
  $__fn = function($start, $end = null) use (&$Test_Primes_lessThan, &$Test_Primes_sub, &$Test_Primes_Cons, &$Test_Primes_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Test_Primes_lessThan, $start, &$go, &$Test_Primes_sub, &$Test_Primes_Cons) {
  $__fn = function($curr, $acc = null) use (&$Test_Primes_lessThan, $start, &$go, &$Test_Primes_sub, &$Test_Primes_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($curr, $acc) use (&$Test_Primes_lessThan, $start, &$go, &$Test_Primes_sub, &$Test_Primes_Cons) {
while (true) {
$__case_0 = ($Test_Primes_lessThan)($curr, $start);
if (($__case_0 === true)) {
return $acc;
} else {
;
};
if (true) {
$__tco_tmp_0 = ($Test_Primes_sub)($curr, 1);
$__tco_tmp_1 = ($Test_Primes_Cons)($curr, $acc);
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
    $__res = ($go)($end, $Test_Primes_Nil);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Primes_filter
$Test_Primes_filter = (function() use (&$Test_Primes_reverse, &$Test_Primes_Cons, &$Test_Primes_Nil) {
  $__fn = function($p, $lst = null) use (&$Test_Primes_reverse, &$Test_Primes_Cons, &$Test_Primes_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Test_Primes_reverse, $p, &$go, &$Test_Primes_Cons) {
  $__fn = function($v, $v1 = null) use (&$Test_Primes_reverse, $p, &$go, &$Test_Primes_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Test_Primes_reverse, $p, &$go, &$Test_Primes_Cons) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_1;
return ($Test_Primes_reverse)($acc);
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$acc = $__case_1;
$__case_0 = ($p)($x);
if (($__case_0 === true)) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($Test_Primes_Cons)($x, $acc);
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
    $__res = ($go)($lst, $Test_Primes_Nil);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Test_Primes_sieve
$Test_Primes_sieve = (function() use (&$Test_Primes_Nil, &$Test_Primes_Cons, &$Test_Primes_sieve, &$Test_Primes_filter, &$Test_Primes_notEq, &$Test_Primes_mod) {
  $__fn = function($v) use (&$Test_Primes_Nil, &$Test_Primes_Cons, &$Test_Primes_sieve, &$Test_Primes_filter, &$Test_Primes_notEq, &$Test_Primes_mod, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Test_Primes_Nil, &$Test_Primes_Cons, &$Test_Primes_sieve, &$Test_Primes_filter, &$Test_Primes_notEq, &$Test_Primes_mod) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $Test_Primes_Nil;
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$p = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Test_Primes_Cons)($p, ($Test_Primes_sieve)(($Test_Primes_filter)((function() use (&$Test_Primes_notEq, &$Test_Primes_mod, $p) {
  $__fn = function($x) use (&$Test_Primes_notEq, &$Test_Primes_mod, $p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Test_Primes_notEq)(($Test_Primes_mod)($x, $p), 0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs)));
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

// Test_Primes_describe
$Test_Primes_describe = ($Effect_Console_log)("Prime Sieve (sum primes up to 500):");

// Test_Primes_act
$Test_Primes_act = ($Effect_Console_logShow)($Data_Show_showInt, ($Test_Primes_sumList)(($Test_Primes_sieve)(($Test_Primes_range)(2, 500))));

