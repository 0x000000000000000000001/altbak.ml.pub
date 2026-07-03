<?php

namespace Data\Unfoldable1;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Unfoldable1_fromJust
$Data_Unfoldable1_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Unfoldable1_lessThanOrEq
$Data_Unfoldable1_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Unfoldable1_sub
$Data_Unfoldable1_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Unfoldable1_add
$Data_Unfoldable1_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Unfoldable1_eq
$Data_Unfoldable1_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Unfoldable1_greaterThanOrEq
$Data_Unfoldable1_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_Unfoldable1_negate
$Data_Unfoldable1_negate = ($Data_Ring_negate)($Data_Ring_ringInt);

// Data_Unfoldable1_greaterThan
$Data_Unfoldable1_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_Unfoldable1_Unfoldable1$Dict
$Data_Unfoldable1_Unfoldable1__dollar__Dict = (function() {
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

// Data_Unfoldable1_unfoldr1
$Data_Unfoldable1_unfoldr1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->unfoldr1;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dict);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dict);
  };
  return $__fn;
})();

// Data_Unfoldable1_unfoldable1Maybe
$Data_Unfoldable1_unfoldable1Maybe = ($Data_Unfoldable1_Unfoldable1__dollar__Dict)((object)["unfoldr1" => (function() use (&$Data_Maybe_Just, &$Data_Tuple_fst) {
  $__fn = function($f, $b = null) use (&$Data_Maybe_Just, &$Data_Tuple_fst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_Just)(($Data_Tuple_fst)(($f)($b)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Unfoldable1_unfoldable1Array
$Data_Unfoldable1_unfoldable1Array = ($Data_Unfoldable1_Unfoldable1__dollar__Dict)((object)["unfoldr1" => ($Data_Unfoldable1_unfoldr1ArrayImpl)($Data_Maybe_isNothing, ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Unfoldable1_fromJust) {
  $__fn = function($__dollar____unused) use (&$Data_Unfoldable1_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Unfoldable1_fromJust;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), $Data_Tuple_fst, $Data_Tuple_snd)]);

// Data_Unfoldable1_replicate1
$Data_Unfoldable1_replicate1 = (function() use (&$Data_Unfoldable1_unfoldr1, &$Data_Unfoldable1_sub) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_unfoldr1, &$Data_Unfoldable1_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr11 = ($Data_Unfoldable1_unfoldr1)($dictUnfoldable1);
    $__res = (function() use ($unfoldr11, &$Data_Unfoldable1_sub) {
  $__fn = function($n, $v = null) use ($unfoldr11, &$Data_Unfoldable1_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$step = (function() {
  $__body = function($i) {
    $__case_0 = $i;
    if (true) {
$i1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($i) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($i);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($i);
  };
  return $__fn;
})();
    $__res = ($unfoldr11)($step, ($Data_Unfoldable1_sub)($n, 1));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_replicate1A
$Data_Unfoldable1_replicate1A = (function() use (&$Data_Unfoldable1_replicate1, &$Data_Semigroup_Traversable_sequence1) {
  $__fn = function($dictApply, $dictUnfoldable1 = null) use (&$Data_Unfoldable1_replicate1, &$Data_Semigroup_Traversable_sequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$replicate11 = ($Data_Unfoldable1_replicate1)($dictUnfoldable1);
    $__res = (function() use (&$Data_Semigroup_Traversable_sequence1, $dictApply, $replicate11) {
  $__fn = function($dictTraversable1) use (&$Data_Semigroup_Traversable_sequence1, $dictApply, $replicate11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence1 = ($Data_Semigroup_Traversable_sequence1)($dictTraversable1, $dictApply);
    $__res = (function() use ($sequence1, $replicate11) {
  $__fn = function($n, $m = null) use ($sequence1, $replicate11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence1)(($replicate11)($n, $m));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_singleton
$Data_Unfoldable1_singleton = (function() use (&$Data_Unfoldable1_replicate1) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_replicate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable1_replicate1)($dictUnfoldable1, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_range
$Data_Unfoldable1_range = (function() use (&$Data_Unfoldable1_unfoldr1, &$Data_Unfoldable1_add, &$Data_Tuple_Tuple, &$Data_Unfoldable1_eq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Unfoldable1_greaterThanOrEq, &$Data_Unfoldable1_negate) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_unfoldr1, &$Data_Unfoldable1_add, &$Data_Tuple_Tuple, &$Data_Unfoldable1_eq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Unfoldable1_greaterThanOrEq, &$Data_Unfoldable1_negate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr11 = ($Data_Unfoldable1_unfoldr1)($dictUnfoldable1);
    $__res = (function() use (&$Data_Unfoldable1_add, &$Data_Tuple_Tuple, &$Data_Unfoldable1_eq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Unfoldable1_greaterThanOrEq, &$Data_Unfoldable1_negate, $unfoldr11) {
  $__fn = function($start, $end = null) use (&$Data_Unfoldable1_add, &$Data_Tuple_Tuple, &$Data_Unfoldable1_eq, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Unfoldable1_greaterThanOrEq, &$Data_Unfoldable1_negate, $unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Unfoldable1_add, &$Data_Tuple_Tuple, &$Data_Unfoldable1_eq, $end, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__fn = function($delta, $i = null) use (&$Data_Unfoldable1_add, &$Data_Tuple_Tuple, &$Data_Unfoldable1_eq, $end, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$i__prime__ = ($Data_Unfoldable1_add)($i, $delta);
    $__res = ($Data_Tuple_Tuple)($i, (function() use (&$Data_Unfoldable1_eq, $i, $end, &$Data_Maybe_Nothing, &$Data_Maybe_Just, $i__prime__) {
$__case_0 = ($Data_Unfoldable1_eq)($i, $end);
if (($__case_0 === true)) {
return $Data_Maybe_Nothing;
} else {
;
};
if (true) {
return ($Data_Maybe_Just)($i__prime__);
} else {
;
};
throw new \Exception("Pattern match failure");
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
$delta = (function() use (&$Data_Unfoldable1_greaterThanOrEq, $end, $start, &$Data_Unfoldable1_negate) {
$__case_0 = ($Data_Unfoldable1_greaterThanOrEq)($end, $start);
if (($__case_0 === true)) {
return 1;
} else {
;
};
if (true) {
return ($Data_Unfoldable1_negate)(1);
} else {
;
};
throw new \Exception("Pattern match failure");
})();
    $__res = ($unfoldr11)(($go)($delta), $start);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_iterateN
$Data_Unfoldable1_iterateN = (function() use (&$Data_Unfoldable1_unfoldr1, &$Data_Tuple_Tuple, &$Data_Unfoldable1_greaterThan, &$Data_Maybe_Just, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_unfoldr1, &$Data_Tuple_Tuple, &$Data_Unfoldable1_greaterThan, &$Data_Maybe_Just, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr11 = ($Data_Unfoldable1_unfoldr1)($dictUnfoldable1);
    $__res = (function() use (&$Data_Tuple_Tuple, &$Data_Unfoldable1_greaterThan, &$Data_Maybe_Just, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing, $unfoldr11) {
  $__fn = function($n, $f = null, $s = null) use (&$Data_Tuple_Tuple, &$Data_Unfoldable1_greaterThan, &$Data_Maybe_Just, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing, $unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Tuple_Tuple, &$Data_Unfoldable1_greaterThan, &$Data_Maybe_Just, $f, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Tuple_Tuple, &$Data_Unfoldable1_greaterThan, &$Data_Maybe_Just, $f, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$n__prime__ = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)($x, (function() use (&$Data_Unfoldable1_greaterThan, $n__prime__, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $f, $x, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing) {
$__case_0 = ($Data_Unfoldable1_greaterThan)($n__prime__, 0);
if (($__case_0 === true)) {
return ($Data_Maybe_Just)(($Data_Tuple_Tuple)(($f)($x), ($Data_Unfoldable1_sub)($n__prime__, 1)));
} else {
;
};
if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
throw new \Exception("Pattern match failure");
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_Tuple, &$Data_Unfoldable1_greaterThan, &$Data_Maybe_Just, $f, &$Data_Unfoldable1_sub, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
    $__res = ($unfoldr11)($go, ($Data_Tuple_Tuple)($s, ($Data_Unfoldable1_sub)($n, 1)));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

