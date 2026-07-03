<?php

namespace Data\Map\Internal;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Map_Internal_add
$Data_Map_Internal_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Map_Internal_greaterThan
$Data_Map_Internal_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_Map_Internal_lessThanOrEq
$Data_Map_Internal_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Map_Internal_append
$Data_Map_Internal_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Map_Internal_show
$Data_Map_Internal_show = ($Data_Show_show)($Data_Show_showInt);

// Data_Map_Internal_map
$Data_Map_Internal_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Map_Internal_compose
$Data_Map_Internal_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Map_Internal_conj
$Data_Map_Internal_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Map_Internal_identity
$Data_Map_Internal_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Map_Internal_eq
$Data_Map_Internal_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Map_Internal_lessThan
$Data_Map_Internal_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_Map_Internal_abs
$Data_Map_Internal_abs = ($Data_Ord_abs)($Data_Ord_ordInt, $Data_Ring_ringInt);

// Data_Map_Internal_sub
$Data_Map_Internal_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Map_Internal_disj
$Data_Map_Internal_disj = ($Data_HeytingAlgebra_disj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Map_Internal_Leaf
$Data_Map_Internal_Leaf = (object)["tag" => "Leaf", "values" => []];

// Data_Map_Internal_Node
$Data_Map_Internal_Node = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Node", "values" => [$value0, $value1, $value2, $value3, $value4, $value5]];
    if ($__num > 6) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_IterLeaf
$Data_Map_Internal_IterLeaf = (object)["tag" => "IterLeaf", "values" => []];

// Data_Map_Internal_IterEmit
$Data_Map_Internal_IterEmit = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "IterEmit", "values" => [$value0, $value1, $value2]];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_IterNode
$Data_Map_Internal_IterNode = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "IterNode", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_IterDone
$Data_Map_Internal_IterDone = (object)["tag" => "IterDone", "values" => []];

// Data_Map_Internal_IterNext
$Data_Map_Internal_IterNext = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "IterNext", "values" => [$value0, $value1, $value2]];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_Split
$Data_Map_Internal_Split = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Split", "values" => [$value0, $value1, $value2]];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_SplitLast
$Data_Map_Internal_SplitLast = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "SplitLast", "values" => [$value0, $value1, $value2]];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_unsafeNode
$Data_Map_Internal_unsafeNode = ($Data_Function_Uncurried_mkFn4)((function() use (&$Data_Map_Internal_Node, &$Data_Map_Internal_add, &$Data_Map_Internal_greaterThan) {
  $__body = function($k, $v, $l, $r) use (&$Data_Map_Internal_Node, &$Data_Map_Internal_add, &$Data_Map_Internal_greaterThan) {
    $__case_0 = $l;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_Node)(1, 1, $k, $v, $l, $r);
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h2 = ($__case_0)->values[0];
$s2 = ($__case_0)->values[1];
return ($Data_Map_Internal_Node)(($Data_Map_Internal_add)(1, $h2), ($Data_Map_Internal_add)(1, $s2), $k, $v, $l, $r);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$h1 = ($__case_0)->values[0];
$s1 = ($__case_0)->values[1];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_Node)(($Data_Map_Internal_add)(1, $h1), ($Data_Map_Internal_add)(1, $s1), $k, $v, $l, $r);
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h2 = ($__case_0)->values[0];
$s2 = ($__case_0)->values[1];
return ($Data_Map_Internal_Node)(($Data_Map_Internal_add)(1, (function() use (&$Data_Map_Internal_greaterThan, $h1, $h2) {
$__case_0 = ($Data_Map_Internal_greaterThan)($h1, $h2);
if (($__case_0 === true)) {
return $h1;
} else {
;
};
if (true) {
return $h2;
} else {
;
};
throw new \Exception("Pattern match failure");
})()), ($Data_Map_Internal_add)(($Data_Map_Internal_add)(1, $s1), $s2), $k, $v, $l, $r);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$Data_Map_Internal_Node, &$Data_Map_Internal_add, &$Data_Map_Internal_greaterThan, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($k, $v, $l, $r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($k, $v, $l, $r);
  };
  return $__fn;
})());

// Data_Map_Internal_toMapIter
$Data_Map_Internal_toMapIter = ($Data_Function_flip)($Data_Map_Internal_IterNode, $Data_Map_Internal_IterLeaf);

// Data_Map_Internal_stepWith
$Data_Map_Internal_stepWith = (function() use (&$Data_Unit_unit, &$Data_Function_Uncurried_runFn3) {
  $__fn = function($f, $next = null, $done = null) use (&$Data_Unit_unit, &$Data_Function_Uncurried_runFn3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($done, &$Data_Unit_unit, &$Data_Function_Uncurried_runFn3, $next, &$go, $f) {
  $__fn = function($v) use ($done, &$Data_Unit_unit, &$Data_Function_Uncurried_runFn3, $next, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($done, &$Data_Unit_unit, &$Data_Function_Uncurried_runFn3, $next, &$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "IterLeaf")) {
return ($done)($Data_Unit_unit);
} else {
;
};
if ((($__case_0)->tag === "IterEmit")) {
$k = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
$iter = ($__case_0)->values[2];
return ($Data_Function_Uncurried_runFn3)($next, $k, $v1, $iter);
} else {
;
};
if ((($__case_0)->tag === "IterNode")) {
$m = ($__case_0)->values[0];
$iter = ($__case_0)->values[1];
$__tco_tmp_0 = ($f)($iter, $m);
$v = $__tco_tmp_0;
continue;
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
    $__res = $go;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_size
$Data_Map_Internal_size = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return 0;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$s = ($__case_0)->values[1];
return $s;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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

// Data_Map_Internal_singleton
$Data_Map_Internal_singleton = (function() use (&$Data_Map_Internal_Node, &$Data_Map_Internal_Leaf) {
  $__fn = function($k, $v = null) use (&$Data_Map_Internal_Node, &$Data_Map_Internal_Leaf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_Node)(1, 1, $k, $v, $Data_Map_Internal_Leaf, $Data_Map_Internal_Leaf);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_unsafeBalancedNode
$Data_Map_Internal_unsafeBalancedNode = (function() use (&$Data_Function_Uncurried_mkFn7, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode, &$Data_Function_Uncurried_mkFn4, &$Data_Map_Internal_singleton) {
$height = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return 0;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
return $h;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
$rotateLeft = ($Data_Function_Uncurried_mkFn7)((function() use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode) {
  $__body = function($k, $v, $l, $rk, $rv, $rl, $rr) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode) {
    $__case_0 = $rl;
    if ((($__case_0)->tag === "Node")) {
$lh = ($__case_0)->values[0];
$lk = ($__case_0)->values[2];
$lv = ($__case_0)->values[3];
$ll = ($__case_0)->values[4];
$lr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if (true) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeNode, $rk, $rv, ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeNode, $k, $v, $l, $rl), $rr);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($k, $v = null, $l = null, $rk = null, $rv = null, $rl = null, $rr = null) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 7) {
      $__res = $__body($k, $v, $l, $rk, $rv, $rl, $rr);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__body($k, $v, $l, $rk, $rv, $rl, $rr);
  };
  return $__fn;
})());
$rotateRight = ($Data_Function_Uncurried_mkFn7)((function() use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode) {
  $__body = function($k, $v, $lk, $lv, $ll, $lr, $r) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode) {
    $__case_0 = $lr;
    if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if (true) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeNode, $lk, $lv, $ll, ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeNode, $k, $v, $lr, $r));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($k, $v = null, $lk = null, $lv = null, $ll = null, $lr = null, $r = null) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 7) {
      $__res = $__body($k, $v, $lk, $lv, $ll, $lr, $r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__body($k, $v, $lk, $lv, $ll, $lr, $r);
  };
  return $__fn;
})());
return ($Data_Function_Uncurried_mkFn4)((function() use (&$Data_Map_Internal_singleton, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode) {
  $__body = function($k, $v, $l, $r) use (&$Data_Map_Internal_singleton, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode) {
    $__case_0 = $l;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_singleton)($k, $v);
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeNode, $k, $v, $l, $r);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$lh = ($__case_0)->values[0];
$lk = ($__case_0)->values[2];
$lv = ($__case_0)->values[3];
$ll = ($__case_0)->values[4];
$lr = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if ((($__case_0)->tag === "Leaf")) {
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeNode, $k, $v, $l, $r);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$Data_Map_Internal_singleton, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($k, $v, $l, $r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($k, $v, $l, $r);
  };
  return $__fn;
})());
})();

// Data_Map_Internal_unsafeSplit
$Data_Map_Internal_unsafeSplit = ($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Map_Internal_Split, &$Data_Maybe_Nothing, &$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Maybe_Just) {
  $__body = function($comp, $k, $m) use (&$Data_Map_Internal_Split, &$Data_Maybe_Nothing, &$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Maybe_Just) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_Split)($Data_Maybe_Nothing, $Data_Map_Internal_Leaf, $Data_Map_Internal_Leaf);
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v = ($comp)($k, $mk);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
$v1 = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeSplit, $comp, $k, $ml);
$__case_0 = $v1;
if ((($__case_0)->tag === "Split")) {
$b = ($__case_0)->values[0];
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
return ($Data_Map_Internal_Split)($b, $ll, ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $lr, $mr));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "GT")) {
$v1 = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeSplit, $comp, $k, $mr);
$__case_0 = $v1;
if ((($__case_0)->tag === "Split")) {
$b = ($__case_0)->values[0];
$rl = ($__case_0)->values[1];
$rr = ($__case_0)->values[2];
return ($Data_Map_Internal_Split)($b, ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, $rl), $rr);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Map_Internal_Split)(($Data_Maybe_Just)($mv), $ml, $mr);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($comp, $k = null, $m = null) use (&$Data_Map_Internal_Split, &$Data_Maybe_Nothing, &$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Maybe_Just, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($comp, $k, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($comp, $k, $m);
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeSplitLast
$Data_Map_Internal_unsafeSplitLast = ($Data_Function_Uncurried_mkFn4)((function() use (&$Data_Map_Internal_SplitLast, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeSplitLast, &$Data_Map_Internal_unsafeBalancedNode) {
  $__body = function($k, $v, $l, $r) use (&$Data_Map_Internal_SplitLast, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeSplitLast, &$Data_Map_Internal_unsafeBalancedNode) {
    $__case_0 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_SplitLast)($k, $v, $l);
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
$v1 = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeSplitLast, $rk, $rv, $rl, $rr);
$__case_0 = $v1;
if ((($__case_0)->tag === "SplitLast")) {
$k__prime__ = ($__case_0)->values[0];
$v__prime__ = ($__case_0)->values[1];
$t__prime__ = ($__case_0)->values[2];
return ($Data_Map_Internal_SplitLast)($k__prime__, $v__prime__, ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $k, $v, $l, $t__prime__));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$Data_Map_Internal_SplitLast, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeSplitLast, &$Data_Map_Internal_unsafeBalancedNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($k, $v, $l, $r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($k, $v, $l, $r);
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeJoinNodes
$Data_Map_Internal_unsafeJoinNodes = ($Data_Function_Uncurried_mkFn2)((function() use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeSplitLast, &$Data_Map_Internal_unsafeBalancedNode) {
  $__body = function($v, $v1) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeSplitLast, &$Data_Map_Internal_unsafeBalancedNode) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Leaf")) {
$b = $__case_1;
return $b;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$lk = ($__case_0)->values[2];
$lv = ($__case_0)->values[3];
$ll = ($__case_0)->values[4];
$lr = ($__case_0)->values[5];
$r = $__case_1;
$v2 = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeSplitLast, $lk, $lv, $ll, $lr);
$__case_0 = $v2;
if ((($__case_0)->tag === "SplitLast")) {
$k = ($__case_0)->values[0];
$v3 = ($__case_0)->values[1];
$l = ($__case_0)->values[2];
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $k, $v3, $l, $r);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeSplitLast, &$Data_Map_Internal_unsafeBalancedNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $v1);
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeDifference
$Data_Map_Internal_unsafeDifference = ($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Map_Internal_unsafeDifference, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__body = function($comp, $l, $r) use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Map_Internal_unsafeDifference, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
    if ((($__case_1)->tag === "Leaf")) {
return $l;
} else {
;
};
    if ((($__case_1)->tag === "Node")) {
$rk = ($__case_1)->values[2];
$rl = ($__case_1)->values[4];
$rr = ($__case_1)->values[5];
$v = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
if ((($__case_0)->tag === "Split")) {
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
$l__prime__ = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeDifference, $comp, $ll, $rl);
$r__prime__ = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeDifference, $comp, $lr, $rr);
return ($Data_Function_Uncurried_runFn2)($Data_Map_Internal_unsafeJoinNodes, $l__prime__, $r__prime__);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($comp, $l = null, $r = null) use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Map_Internal_unsafeDifference, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($comp, $l, $r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($comp, $l, $r);
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeIntersectionWith
$Data_Map_Internal_unsafeIntersectionWith = ($Data_Function_Uncurried_mkFn4)((function() use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeIntersectionWith, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__body = function($comp, $app, $l, $r) use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeIntersectionWith, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
    if ((($__case_1)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
    if ((($__case_1)->tag === "Node")) {
$rk = ($__case_1)->values[2];
$rv = ($__case_1)->values[3];
$rl = ($__case_1)->values[4];
$rr = ($__case_1)->values[5];
$v = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
if ((($__case_0)->tag === "Split")) {
$lv = ($__case_0)->values[0];
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
$l__prime__ = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeIntersectionWith, $comp, $app, $ll, $rl);
$r__prime__ = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeIntersectionWith, $comp, $app, $lr, $rr);
$__case_0 = $lv;
if ((($__case_0)->tag === "Just")) {
$lv__prime__ = ($__case_0)->values[0];
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Function_Uncurried_runFn2)($Data_Map_Internal_unsafeJoinNodes, $l__prime__, $r__prime__);
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
  };
  $__fn = function($comp, $app = null, $l = null, $r = null) use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeIntersectionWith, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($comp, $app, $l, $r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($comp, $app, $l, $r);
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeUnionWith
$Data_Map_Internal_unsafeUnionWith = ($Data_Function_Uncurried_mkFn4)((function() use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeUnionWith, &$Data_Map_Internal_unsafeBalancedNode) {
  $__body = function($comp, $app, $l, $r) use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeUnionWith, &$Data_Map_Internal_unsafeBalancedNode) {
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return $r;
} else {
;
};
    if ((($__case_1)->tag === "Leaf")) {
return $l;
} else {
;
};
    if ((($__case_1)->tag === "Node")) {
$rk = ($__case_1)->values[2];
$rv = ($__case_1)->values[3];
$rl = ($__case_1)->values[4];
$rr = ($__case_1)->values[5];
$v = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
if ((($__case_0)->tag === "Split")) {
$lv = ($__case_0)->values[0];
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
$l__prime__ = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeUnionWith, $comp, $app, $ll, $rl);
$r__prime__ = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeUnionWith, $comp, $app, $lr, $rr);
$__case_0 = $lv;
if ((($__case_0)->tag === "Just")) {
$lv__prime__ = ($__case_0)->values[0];
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $rk, $rv, $l__prime__, $r__prime__);
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
  };
  $__fn = function($comp, $app = null, $l = null, $r = null) use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeUnionWith, &$Data_Map_Internal_unsafeBalancedNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($comp, $app, $l, $r);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($comp, $app, $l, $r);
  };
  return $__fn;
})());

// Data_Map_Internal_unionWith
$Data_Map_Internal_unionWith = (function() use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeUnionWith) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeUnionWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeUnionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
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

// Data_Map_Internal_union
$Data_Map_Internal_union = (function() use (&$Data_Map_Internal_unionWith, &$Data_Function_const) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_unionWith, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_unionWith)($dictOrd, $Data_Function_const);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_update
$Data_Map_Internal_update = (function() use (&$Data_Ord_compare, &$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Map_Internal_Node) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Map_Internal_Leaf, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Map_Internal_Node) {
  $__fn = function($f, $k = null) use (&$Data_Map_Internal_Leaf, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_Leaf, $compare, $k, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, $f, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Map_Internal_Node) {
  $__fn = function($v) use (&$Data_Map_Internal_Leaf, $compare, $k, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, $f, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_Leaf, $compare, $k, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, $f, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Map_Internal_Node) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mh = ($__case_0)->values[0];
$ms = ($__case_0)->values[1];
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
$v2 = ($f)($mv);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Function_Uncurried_runFn2)($Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$mv__prime__ = ($__case_0)->values[0];
return ($Data_Map_Internal_Node)($mh, $ms, $mk, $mv__prime__, $ml, $mr);
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
    $__res = $go;
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

// Data_Map_Internal_showTree
$Data_Map_Internal_showTree = (function() use (&$Data_Show_show, &$Data_Map_Internal_append, &$Data_Map_Internal_show) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Map_Internal_append, &$Data_Map_Internal_show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Map_Internal_append, &$Data_Map_Internal_show, $show1) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Map_Internal_append, &$Data_Map_Internal_show, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show2 = ($Data_Show_show)($dictShow1);
$go = (function() use (&$Data_Map_Internal_append, &$Data_Map_Internal_show, $show1, $show2, &$go) {
  $__fn = function($ind, $v = null) use (&$Data_Map_Internal_append, &$Data_Map_Internal_show, $show1, $show2, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($ind, $v) use (&$Data_Map_Internal_append, &$Data_Map_Internal_show, $show1, $show2, &$go) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_append)($ind, "Leaf");
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($Data_Map_Internal_append)(($Data_Map_Internal_append)($ind, ($Data_Map_Internal_append)("[", ($Data_Map_Internal_append)(($Data_Map_Internal_show)($h), ($Data_Map_Internal_append)("] ", ($Data_Map_Internal_append)(($show1)($k), ($Data_Map_Internal_append)(" => ", ($Data_Map_Internal_append)(($show2)($v1), "
"))))))), ($Data_Map_Internal_append)(($Data_Map_Internal_append)(($go)(($Data_Map_Internal_append)($ind, "    "), $l), "
"), ($go)(($Data_Map_Internal_append)($ind, "    "), $r)));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($ind, $v);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)("");
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_semigroupMap
$Data_Map_Internal_semigroupMap = (function() use (&$Data_Map_Internal_unionWith, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($__dollar____unused, $dictOrd = null) use (&$Data_Map_Internal_unionWith, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unionWith1 = ($Data_Map_Internal_unionWith)($dictOrd);
    $__res = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, $unionWith1, &$Data_Semigroup_append) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_Semigroup__dollar__Dict, $unionWith1, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($unionWith1)(($Data_Semigroup_append)($dictSemigroup))]);
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

// Data_Map_Internal_semigroupMap1
$Data_Map_Internal_semigroupMap1 = ($Data_Map_Internal_semigroupMap)($Prim_undefined);

// Data_Map_Internal_pop
$Data_Map_Internal_pop = (function() use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Map_Internal_map, &$Data_Tuple_Tuple, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Map_Internal_map, &$Data_Tuple_Tuple, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, $compare, &$Data_Map_Internal_map, &$Data_Tuple_Tuple, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__body = function($k, $m) use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, $compare, &$Data_Map_Internal_map, &$Data_Tuple_Tuple, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
    $v = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeSplit, $compare, $k, $m);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Split")) {
$x = ($__case_0)->values[0];
$l = ($__case_0)->values[1];
$r = ($__case_0)->values[2];
return ($Data_Map_Internal_map)((function() use (&$Data_Tuple_Tuple, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, $l, $r) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, $l, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Function_Uncurried_runFn2)($Data_Map_Internal_unsafeJoinNodes, $l, $r));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($k, $m = null) use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, $compare, &$Data_Map_Internal_map, &$Data_Tuple_Tuple, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($k, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($k, $m);
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

// Data_Map_Internal_member
$Data_Map_Internal_member = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($compare, $k, &$go) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return false;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return true;
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_mapMaybeWithKey
$Data_Map_Internal_mapMaybeWithKey = (function() use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($dictOrd, $f = null) use (&$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_Leaf, $f, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use (&$Data_Map_Internal_Leaf, $f, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_Leaf, $f, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
if ((($__case_0)->tag === "Just")) {
$v__prime__ = ($__case_0)->values[0];
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, ($go)($l), ($go)($r));
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Function_Uncurried_runFn2)($Data_Map_Internal_unsafeJoinNodes, ($go)($l), ($go)($r));
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
    $__res = $go;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_mapMaybe
$Data_Map_Internal_mapMaybe = (function() use (&$Data_Map_Internal_compose, &$Data_Map_Internal_mapMaybeWithKey, &$Data_Function_const) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_compose, &$Data_Map_Internal_mapMaybeWithKey, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_compose)(($Data_Map_Internal_mapMaybeWithKey)($dictOrd), $Data_Function_const);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookupLE
$Data_Map_Internal_lookupLE = (function() use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just) {
  $__fn = function($k) use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Maybe_Nothing;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
$v2 = ($go)($mr);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Maybe_Just)((object)["key" => $mk, "value" => $mv]);
} else {
;
};
if (true) {
$other = $__case_0;
return $other;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Maybe_Just)((object)["key" => $mk, "value" => $mv]);
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_lookupGE
$Data_Map_Internal_lookupGE = (function() use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just) {
  $__fn = function($k) use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Maybe_Nothing;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$v2 = ($go)($ml);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Maybe_Just)((object)["key" => $mk, "value" => $mv]);
} else {
;
};
if (true) {
$other = $__case_0;
return $other;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Maybe_Just)((object)["key" => $mk, "value" => $mv]);
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_lookup
$Data_Map_Internal_lookup = (function() use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just) {
  $__fn = function($k) use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Maybe_Nothing;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Maybe_Just)($mv);
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_iterMapU
$Data_Map_Internal_iterMapU = (function() use (&$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
  $__body = function($iter, $v) use (&$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return $iter;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $l;
if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_IterEmit)($k, $v1, $iter);
} else {
;
};
if (true) {
return ($Data_Map_Internal_IterEmit)($k, $v1, ($Data_Map_Internal_IterNode)($r, $iter));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if (true) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_IterEmit)($k, $v1, ($Data_Map_Internal_IterNode)($l, $iter));
} else {
;
};
if (true) {
return ($Data_Map_Internal_IterEmit)($k, $v1, ($Data_Map_Internal_IterNode)($l, ($Data_Map_Internal_IterNode)($r, $iter)));
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
  };
  $__fn = function($iter, $v = null) use (&$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($iter, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($iter, $v);
  };
  return $__fn;
})();

// Data_Map_Internal_stepUnorderedCps
$Data_Map_Internal_stepUnorderedCps = ($Data_Map_Internal_stepWith)($Data_Map_Internal_iterMapU);

// Data_Map_Internal_stepUnfoldrUnordered
$Data_Map_Internal_stepUnfoldrUnordered = (function() use (&$Data_Function_Uncurried_mkFn3, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Map_Internal_stepUnorderedCps, &$Data_Maybe_Nothing) {
$step = ($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Maybe_Just, &$Data_Tuple_Tuple) {
  $__fn = function($k, $v = null, $next = null) use (&$Data_Maybe_Just, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_Just)(($Data_Tuple_Tuple)(($Data_Tuple_Tuple)($k, $v), $next));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})());
return ($Data_Map_Internal_stepUnorderedCps)($step, (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Nothing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
})();

// Data_Map_Internal_toUnfoldableUnordered
$Data_Map_Internal_toUnfoldableUnordered = (function() use (&$Data_Map_Internal_compose, &$Data_Unfoldable_unfoldr, &$Data_Map_Internal_stepUnfoldrUnordered, &$Data_Map_Internal_toMapIter) {
  $__fn = function($dictUnfoldable) use (&$Data_Map_Internal_compose, &$Data_Unfoldable_unfoldr, &$Data_Map_Internal_stepUnfoldrUnordered, &$Data_Map_Internal_toMapIter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_compose)(($Data_Unfoldable_unfoldr)($dictUnfoldable, $Data_Map_Internal_stepUnfoldrUnordered), $Data_Map_Internal_toMapIter);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_stepUnordered
$Data_Map_Internal_stepUnordered = ($Data_Map_Internal_stepUnorderedCps)(($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Map_Internal_IterNext) {
  $__fn = function($k, $v = null, $next = null) use (&$Data_Map_Internal_IterNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_IterNext)($k, $v, $next);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()), ($Data_Function_const)($Data_Map_Internal_IterDone));

// Data_Map_Internal_iterMapR
$Data_Map_Internal_iterMapR = (function() use (&$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
$go = (function() use (&$go, &$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
  $__fn = function($iter, $v = null) use (&$go, &$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($iter, $v) use (&$go, &$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $iter;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
$__tco_tmp_0 = ($Data_Map_Internal_IterEmit)($k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue;
} else {
;
};
if (true) {
$__tco_tmp_0 = ($Data_Map_Internal_IterEmit)($k, $v1, ($Data_Map_Internal_IterNode)($l, $iter));
$__tco_tmp_1 = $r;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
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
})($iter, $v);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
return $go;
})();

// Data_Map_Internal_stepDescCps
$Data_Map_Internal_stepDescCps = ($Data_Map_Internal_stepWith)($Data_Map_Internal_iterMapR);

// Data_Map_Internal_stepDesc
$Data_Map_Internal_stepDesc = ($Data_Map_Internal_stepDescCps)(($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Map_Internal_IterNext) {
  $__fn = function($k, $v = null, $next = null) use (&$Data_Map_Internal_IterNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_IterNext)($k, $v, $next);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()), ($Data_Function_const)($Data_Map_Internal_IterDone));

// Data_Map_Internal_iterMapL
$Data_Map_Internal_iterMapL = (function() use (&$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
$go = (function() use (&$go, &$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
  $__fn = function($iter, $v = null) use (&$go, &$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($iter, $v) use (&$go, &$Data_Map_Internal_IterEmit, &$Data_Map_Internal_IterNode) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $iter;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
$__tco_tmp_0 = ($Data_Map_Internal_IterEmit)($k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue;
} else {
;
};
if (true) {
$__tco_tmp_0 = ($Data_Map_Internal_IterEmit)($k, $v1, ($Data_Map_Internal_IterNode)($r, $iter));
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
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
})($iter, $v);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
return $go;
})();

// Data_Map_Internal_stepAscCps
$Data_Map_Internal_stepAscCps = ($Data_Map_Internal_stepWith)($Data_Map_Internal_iterMapL);

// Data_Map_Internal_stepAsc
$Data_Map_Internal_stepAsc = ($Data_Map_Internal_stepAscCps)(($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Map_Internal_IterNext) {
  $__fn = function($k, $v = null, $next = null) use (&$Data_Map_Internal_IterNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_IterNext)($k, $v, $next);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()), ($Data_Function_const)($Data_Map_Internal_IterDone));

// Data_Map_Internal_eqMapIter
$Data_Map_Internal_eqMapIter = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Map_Internal_stepAsc) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq1);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Map_Internal_stepAsc) {
$go = (function() use (&$Data_Map_Internal_stepAsc) {
  $__fn = function($a, $b = null) use (&$Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($a, $b) use (&$Data_Map_Internal_stepAsc) {
while (true) {
$v = ($Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
if ((($__case_0)->tag === "IterNext")) {
$k1 = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
$a__prime__ = ($__case_0)->values[2];
$v2 = ($Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
if ((($__case_0)->tag === "IterNext")) {
$k2 = ($__case_0)->values[0];
$v21 = ($__case_0)->values[1];
$b__prime__ = ($__case_0)->values[2];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return false;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "IterDone")) {
return true;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($a, $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
return $go;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_ordMapIter
$Data_Map_Internal_ordMapIter = (function() use (&$Data_Ord_compare, &$Data_Map_Internal_eqMapIter, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Map_Internal_stepAsc, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Map_Internal_eqMapIter, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Map_Internal_stepAsc, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$eqMapIter1 = ($Data_Map_Internal_eqMapIter)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $eqMapIter1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Map_Internal_stepAsc, $compare, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $eqMapIter1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Map_Internal_stepAsc, $compare, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare)($dictOrd1);
$eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Map_Internal_stepAsc, $compare, $compare1, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
$go = (function() use (&$Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($a, $b = null) use (&$Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($a, $b) use (&$Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
while (true) {
$v = ($Data_Map_Internal_stepAsc)($b);
$v1 = ($Data_Map_Internal_stepAsc)($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->values[0];
$v11 = ($__case_0)->values[1];
$a__prime__ = ($__case_0)->values[2];
$k2 = ($__case_1)->values[0];
$v2 = ($__case_1)->values[1];
$b__prime__ = ($__case_1)->values[2];
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
if ((($__case_0)->tag === "EQ")) {
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
if ((($__case_0)->tag === "EQ")) {
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue;
} else {
;
};
if (true) {
$other = $__case_0;
return $other;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if (true) {
$other = $__case_0;
return $other;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
if ((($__case_0)->tag === "IterDone")) {
return $Data_Ordering_EQ;
} else {
;
};
if (true) {
return $Data_Ordering_LT;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_1)->tag === "IterDone")) {
return $Data_Ordering_GT;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($a, $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
return $go;
})(), "Eq0" => (function() use ($eqMapIter2) {
  $__fn = function($__dollar____unused) use ($eqMapIter2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqMapIter2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_stepUnfoldr
$Data_Map_Internal_stepUnfoldr = (function() use (&$Data_Function_Uncurried_mkFn3, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Map_Internal_stepAscCps, &$Data_Maybe_Nothing) {
$step = ($Data_Function_Uncurried_mkFn3)((function() use (&$Data_Maybe_Just, &$Data_Tuple_Tuple) {
  $__fn = function($k, $v = null, $next = null) use (&$Data_Maybe_Just, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_Just)(($Data_Tuple_Tuple)(($Data_Tuple_Tuple)($k, $v), $next));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})());
return ($Data_Map_Internal_stepAscCps)($step, (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Nothing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
})();

// Data_Map_Internal_toUnfoldable
$Data_Map_Internal_toUnfoldable = (function() use (&$Data_Map_Internal_compose, &$Data_Unfoldable_unfoldr, &$Data_Map_Internal_stepUnfoldr, &$Data_Map_Internal_toMapIter) {
  $__fn = function($dictUnfoldable) use (&$Data_Map_Internal_compose, &$Data_Unfoldable_unfoldr, &$Data_Map_Internal_stepUnfoldr, &$Data_Map_Internal_toMapIter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_compose)(($Data_Unfoldable_unfoldr)($dictUnfoldable, $Data_Map_Internal_stepUnfoldr), $Data_Map_Internal_toMapIter);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_toUnfoldable1
$Data_Map_Internal_toUnfoldable1 = ($Data_Map_Internal_toUnfoldable)($Data_Unfoldable_unfoldableArray);

// Data_Map_Internal_showMap
$Data_Map_Internal_showMap = (function() use (&$Data_Tuple_showTuple, &$Data_Show_show, &$Data_Show_showArray, &$Data_Show_Show__dollar__Dict, &$Data_Map_Internal_append, &$Data_Map_Internal_toUnfoldable1) {
  $__fn = function($dictShow) use (&$Data_Tuple_showTuple, &$Data_Show_show, &$Data_Show_showArray, &$Data_Show_Show__dollar__Dict, &$Data_Map_Internal_append, &$Data_Map_Internal_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$showTuple = ($Data_Tuple_showTuple)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_showArray, $showTuple, &$Data_Show_Show__dollar__Dict, &$Data_Map_Internal_append, &$Data_Map_Internal_toUnfoldable1) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_showArray, $showTuple, &$Data_Show_Show__dollar__Dict, &$Data_Map_Internal_append, &$Data_Map_Internal_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)(($Data_Show_showArray)(($showTuple)($dictShow1)));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Map_Internal_append, $show1, &$Data_Map_Internal_toUnfoldable1) {
  $__fn = function($as) use (&$Data_Map_Internal_append, $show1, &$Data_Map_Internal_toUnfoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_append)("(fromFoldable ", ($Data_Map_Internal_append)(($show1)(($Data_Map_Internal_toUnfoldable1)($as)), ")"));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_isSubmap
$Data_Map_Internal_isSubmap = (function() use (&$Data_Map_Internal_lookup, &$Data_Eq_eq, &$Data_Map_Internal_conj) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_lookup, &$Data_Eq_eq, &$Data_Map_Internal_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lookup1 = ($Data_Map_Internal_lookup)($dictOrd);
    $__res = (function() use (&$Data_Eq_eq, $lookup1, &$Data_Map_Internal_conj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, $lookup1, &$Data_Map_Internal_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq);
$go = (function() use ($lookup1, &$Data_Map_Internal_conj, $eq1, &$go) {
  $__fn = function($m1, $m2 = null) use ($lookup1, &$Data_Map_Internal_conj, $eq1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($m1, $m2) use ($lookup1, &$Data_Map_Internal_conj, $eq1, &$go) {
while (true) {
$__case_0 = $m1;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$v1 = ($lookup1)($k, $m2);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return false;
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$v__prime__ = ($__case_0)->values[0];
return ($Data_Map_Internal_conj)(($eq1)($v, $v__prime__), ($Data_Map_Internal_conj)(($go)($l, $m2), ($go)($r, $m2)));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($m1, $m2);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_isEmpty
$Data_Map_Internal_isEmpty = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
;
};
    if (true) {
return false;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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

// Data_Map_Internal_intersectionWith
$Data_Map_Internal_intersectionWith = (function() use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeIntersectionWith) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeIntersectionWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeIntersectionWith, $compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use (&$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
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

// Data_Map_Internal_intersection
$Data_Map_Internal_intersection = (function() use (&$Data_Map_Internal_intersectionWith, &$Data_Function_const) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_intersectionWith, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_intersectionWith)($dictOrd, $Data_Function_const);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_insertWith
$Data_Map_Internal_insertWith = (function() use (&$Data_Ord_compare, &$Data_Map_Internal_singleton, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Map_Internal_singleton, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Map_Internal_singleton, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node) {
  $__fn = function($app, $k = null, $v = null) use (&$Data_Map_Internal_singleton, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_singleton, $k, $v, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Map_Internal_Node, $app) {
  $__fn = function($v1) use (&$Data_Map_Internal_singleton, $k, $v, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Map_Internal_Node, $app, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v1) use (&$Data_Map_Internal_singleton, $k, $v, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Map_Internal_Node, $app) {
while (true) {
$__case_0 = $v1;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_singleton)($k, $v);
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mh = ($__case_0)->values[0];
$ms = ($__case_0)->values[1];
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
if ((($__case_0)->tag === "LT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Map_Internal_Node)($mh, $ms, $k, ($app)($mv, $v), $ml, $mr);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $go;
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

// Data_Map_Internal_insert
$Data_Map_Internal_insert = (function() use (&$Data_Ord_compare, &$Data_Map_Internal_singleton, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Map_Internal_singleton, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Map_Internal_singleton, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node) {
  $__fn = function($k, $v = null) use (&$Data_Map_Internal_singleton, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_singleton, $k, $v, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Map_Internal_Node) {
  $__fn = function($v1) use (&$Data_Map_Internal_singleton, $k, $v, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v1) use (&$Data_Map_Internal_singleton, $k, $v, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Map_Internal_Node) {
while (true) {
$__case_0 = $v1;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_singleton)($k, $v);
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mh = ($__case_0)->values[0];
$ms = ($__case_0)->values[1];
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
if ((($__case_0)->tag === "LT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Map_Internal_Node)($mh, $ms, $k, $v, $ml, $mr);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $go;
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

// Data_Map_Internal_functorMap
$Data_Map_Internal_functorMap = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node) {
  $__fn = function($f) use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, $f, &$go) {
  $__fn = function($v) use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, $f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, $f, &$go) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($Data_Map_Internal_Node)($h, $s, $k, ($f)($v1), ($go)($l), ($go)($r));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_functorWithIndexMap
$Data_Map_Internal_functorWithIndexMap = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node) {
  $__fn = function($f) use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, $f, &$go) {
  $__fn = function($v) use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, $f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, $f, &$go) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($Data_Map_Internal_Node)($h, $s, $k, ($f)($k, $v1), ($go)($l), ($go)($r));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_functorMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_foldableMap
$Data_Map_Internal_foldableMap = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2) {
  $__fn = function($f, $z = null) use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = ($Data_Function_Uncurried_mkFn2)((function() use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($m__prime__, $z__prime__) use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($Data_Function_Uncurried_runFn2)($go, $l, ($f)($v, ($Data_Function_Uncurried_runFn2)($go, $r, $z__prime__)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($m__prime__, $z__prime__ = null) use (&$Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($m__prime__, $z__prime__);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($m__prime__, $z__prime__);
  };
  return $__fn;
})());
    $__res = (function() use (&$Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use (&$Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn2)($go, $m, $z);
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
})(), "foldl" => (function() use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2) {
  $__fn = function($f, $z = null) use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = ($Data_Function_Uncurried_mkFn2)((function() use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($z__prime__, $m__prime__) use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($Data_Function_Uncurried_runFn2)($go, ($f)(($Data_Function_Uncurried_runFn2)($go, $z__prime__, $l), $v), $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($z__prime__, $m__prime__ = null) use (&$Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($z__prime__, $m__prime__);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($z__prime__, $m__prime__);
  };
  return $__fn;
})());
    $__res = (function() use (&$Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use (&$Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn2)($go, $z, $m);
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
})(), "foldMap" => (function() use (&$Data_Monoid_mempty, &$Data_Semigroup_append, &$Prim_undefined) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Semigroup_append, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$append1 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($mempty, $append1) {
  $__fn = function($f) use ($mempty, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($mempty, $append1, &$go, $f) {
  $__fn = function($v) use ($mempty, $append1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($mempty, $append1, &$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $mempty;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($append1)(($go)($l), ($append1)(($f)($v1), ($go)($r)));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})()]);

// Data_Map_Internal_foldableWithIndexMap
$Data_Map_Internal_foldableWithIndexMap = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2) {
  $__fn = function($f, $z = null) use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = ($Data_Function_Uncurried_mkFn2)((function() use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($m__prime__, $z__prime__) use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($Data_Function_Uncurried_runFn2)($go, $l, ($f)($k, $v, ($Data_Function_Uncurried_runFn2)($go, $r, $z__prime__)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($m__prime__, $z__prime__ = null) use (&$Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($m__prime__, $z__prime__);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($m__prime__, $z__prime__);
  };
  return $__fn;
})());
    $__res = (function() use (&$Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use (&$Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn2)($go, $m, $z);
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
})(), "foldlWithIndex" => (function() use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2) {
  $__fn = function($f, $z = null) use (&$Data_Function_Uncurried_mkFn2, &$Data_Function_Uncurried_runFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = ($Data_Function_Uncurried_mkFn2)((function() use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
  $__body = function($z__prime__, $m__prime__) use (&$Data_Function_Uncurried_runFn2, &$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($Data_Function_Uncurried_runFn2)($go, ($f)($k, ($Data_Function_Uncurried_runFn2)($go, $z__prime__, $l), $v), $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($z__prime__, $m__prime__ = null) use (&$Data_Function_Uncurried_runFn2, &$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($z__prime__, $m__prime__);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($z__prime__, $m__prime__);
  };
  return $__fn;
})());
    $__res = (function() use (&$Data_Function_Uncurried_runFn2, &$go, $z) {
  $__fn = function($m) use (&$Data_Function_Uncurried_runFn2, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn2)($go, $z, $m);
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
})(), "foldMapWithIndex" => (function() use (&$Data_Monoid_mempty, &$Data_Semigroup_append, &$Prim_undefined) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Semigroup_append, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$append1 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($mempty, $append1) {
  $__fn = function($f) use ($mempty, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($mempty, $append1, &$go, $f) {
  $__fn = function($v) use ($mempty, $append1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($mempty, $append1, &$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $mempty;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($append1)(($go)($l), ($append1)(($f)($k, $v1), ($go)($r)));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})(), "Foldable0" => (function() use (&$Data_Map_Internal_foldableMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_foldableMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_foldableMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_keys
$Data_Map_Internal_keys = ($Data_FoldableWithIndex_foldrWithIndex)($Data_Map_Internal_foldableWithIndexMap, (function() use (&$Data_List_Types_Cons) {
  $__fn = function($k, $v = null, $acc = null) use (&$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($k, $acc);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_List_Types_Nil);

// Data_Map_Internal_traversableMap
$Data_Map_Internal_traversableMap = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map1 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node) {
  $__fn = function($f) use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$go, $f) {
  $__fn = function($v) use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return ($pure)($Data_Map_Internal_Leaf);
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($apply)(($apply)(($map1)((function() use (&$Data_Map_Internal_Node, $h, $s, $k) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use (&$Data_Map_Internal_Node, $h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_Node)($h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($v1)), ($go)($r));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})(), "sequence" => (function() use (&$Data_Traversable_traverse, &$Data_Map_Internal_traversableMap, &$Data_Map_Internal_identity) {
  $__fn = function($dictApplicative) use (&$Data_Traversable_traverse, &$Data_Map_Internal_traversableMap, &$Data_Map_Internal_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_traverse)($Data_Map_Internal_traversableMap, $dictApplicative, $Data_Map_Internal_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_functorMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Map_Internal_foldableMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_foldableMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_foldableMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_traversableWithIndexMap
$Data_Map_Internal_traversableWithIndexMap = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Data_Map_Internal_Leaf, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply = ($Control_Apply_apply)($Apply0);
$map1 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node) {
  $__fn = function($f) use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$go, $f) {
  $__fn = function($v) use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($pure, &$Data_Map_Internal_Leaf, $apply, $map1, &$Data_Map_Internal_Node, &$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return ($pure)($Data_Map_Internal_Leaf);
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($apply)(($apply)(($map1)((function() use (&$Data_Map_Internal_Node, $h, $s, $k) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use (&$Data_Map_Internal_Node, $h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_Node)($h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($k, $v1)), ($go)($r));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_Map_Internal_functorWithIndexMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_functorWithIndexMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_functorWithIndexMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_Map_Internal_foldableWithIndexMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_foldableWithIndexMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_foldableWithIndexMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Map_Internal_traversableMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_traversableMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_traversableMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_values
$Data_Map_Internal_values = ($Data_Foldable_foldr)($Data_Map_Internal_foldableMap, $Data_List_Types_Cons, $Data_List_Types_Nil);

// Data_Map_Internal_foldSubmapBy
$Data_Map_Internal_foldSubmapBy = (function() use (&$Data_Ord_lessThan, &$Data_Ord_greaterThan, &$Data_Ord_lessThanOrEq, &$Data_Function_const, &$Data_Map_Internal_conj) {
  $__fn = function($dictOrd) use (&$Data_Ord_lessThan, &$Data_Ord_greaterThan, &$Data_Ord_lessThanOrEq, &$Data_Function_const, &$Data_Map_Internal_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lessThan1 = ($Data_Ord_lessThan)($dictOrd);
$greaterThan1 = ($Data_Ord_greaterThan)($dictOrd);
$lessThanOrEq1 = ($Data_Ord_lessThanOrEq)($dictOrd);
    $__res = (function() use ($lessThan1, &$Data_Function_const, $greaterThan1, &$Data_Map_Internal_conj, $lessThanOrEq1) {
  $__fn = function($appendFn, $memptyValue = null, $kmin = null, $kmax = null, $f = null) use ($lessThan1, &$Data_Function_const, $greaterThan1, &$Data_Map_Internal_conj, $lessThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tooSmall = (function() use ($kmin, $lessThan1, &$Data_Function_const) {
$__case_0 = $kmin;
if ((($__case_0)->tag === "Just")) {
$kmin__prime__ = ($__case_0)->values[0];
return (function() use ($lessThan1, $kmin__prime__) {
  $__fn = function($k) use ($lessThan1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lessThan1)($k, $kmin__prime__);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Function_const)(false);
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$tooLarge = (function() use ($kmax, $greaterThan1, &$Data_Function_const) {
$__case_0 = $kmax;
if ((($__case_0)->tag === "Just")) {
$kmax__prime__ = ($__case_0)->values[0];
return (function() use ($greaterThan1, $kmax__prime__) {
  $__fn = function($k) use ($greaterThan1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($greaterThan1)($k, $kmax__prime__);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Function_const)(false);
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$inBounds = (function() use ($kmin, $kmax, &$Data_Map_Internal_conj, $lessThanOrEq1, &$Data_Function_const) {
$__case_0 = $kmin;
$__case_1 = $kmax;
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$kmin__prime__ = ($__case_0)->values[0];
$kmax__prime__ = ($__case_1)->values[0];
return (function() use (&$Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__) {
  $__fn = function($k) use (&$Data_Map_Internal_conj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_conj)(($lessThanOrEq1)($kmin__prime__, $k), ($lessThanOrEq1)($k, $kmax__prime__));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
} else {
;
};
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Nothing"))) {
$kmin__prime__ = ($__case_0)->values[0];
return (function() use ($lessThanOrEq1, $kmin__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lessThanOrEq1)($kmin__prime__, $k);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
} else {
;
};
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Just"))) {
$kmax__prime__ = ($__case_1)->values[0];
return (function() use ($lessThanOrEq1, $kmax__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lessThanOrEq1)($k, $kmax__prime__);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
} else {
;
};
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
return ($Data_Function_const)(true);
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$go = (function() use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge) {
  $__fn = function($v) use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $memptyValue;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$left = ($__case_0)->values[4];
$right = ($__case_0)->values[5];
return ($appendFn)(($appendFn)((function() use ($tooSmall, $k, $memptyValue, &$go, $left) {
$__case_0 = ($tooSmall)($k);
if (($__case_0 === true)) {
return $memptyValue;
} else {
;
};
if (true) {
return ($go)($left);
} else {
;
};
throw new \Exception("Pattern match failure");
})(), (function() use ($inBounds, $k, $f, $v1, $memptyValue) {
$__case_0 = ($inBounds)($k);
if (($__case_0 === true)) {
return ($f)($k, $v1);
} else {
;
};
if (true) {
return $memptyValue;
} else {
;
};
throw new \Exception("Pattern match failure");
})()), (function() use ($tooLarge, $k, $memptyValue, &$go, $right) {
$__case_0 = ($tooLarge)($k);
if (($__case_0 === true)) {
return $memptyValue;
} else {
;
};
if (true) {
return ($go)($right);
} else {
;
};
throw new \Exception("Pattern match failure");
})());
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
    $__res = $go;
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
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

// Data_Map_Internal_foldSubmap
$Data_Map_Internal_foldSubmap = (function() use (&$Data_Map_Internal_foldSubmapBy, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_foldSubmapBy, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldSubmapBy1 = ($Data_Map_Internal_foldSubmapBy)($dictOrd);
    $__res = (function() use ($foldSubmapBy1, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use ($foldSubmapBy1, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldSubmapBy1)(($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined)), ($Data_Monoid_mempty)($dictMonoid));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_findMin
$Data_Map_Internal_findMin = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMin) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMin) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Maybe_Nothing;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$__case_0 = $l;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Maybe_Just)((object)["key" => $k, "value" => $v1]);
} else {
;
};
if (true) {
$__tco_tmp_0 = $l;
$v = $__tco_tmp_0;
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
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookupGT
$Data_Map_Internal_lookupGT = (function() use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMin) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just, &$Data_Map_Internal_findMin) {
  $__fn = function($k) use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just, &$Data_Map_Internal_findMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$Data_Map_Internal_findMin) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$Data_Map_Internal_findMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$Data_Map_Internal_findMin) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Maybe_Nothing;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$v2 = ($go)($ml);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Maybe_Just)((object)["key" => $mk, "value" => $mv]);
} else {
;
};
if (true) {
$other = $__case_0;
return $other;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Map_Internal_findMin)($mr);
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_findMax
$Data_Map_Internal_findMax = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMax) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMax) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Maybe_Nothing;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$r = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Maybe_Just)((object)["key" => $k, "value" => $v1]);
} else {
;
};
if (true) {
$__tco_tmp_0 = $r;
$v = $__tco_tmp_0;
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
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookupLT
$Data_Map_Internal_lookupLT = (function() use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMax) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Map_Internal_findMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just, &$Data_Map_Internal_findMax) {
  $__fn = function($k) use (&$Data_Maybe_Nothing, $compare, &$Data_Maybe_Just, &$Data_Map_Internal_findMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$Data_Map_Internal_findMax) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$Data_Map_Internal_findMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing, $compare, $k, &$go, &$Data_Maybe_Just, &$Data_Map_Internal_findMax) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Maybe_Nothing;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
$v2 = ($go)($mr);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Maybe_Just)((object)["key" => $mk, "value" => $mv]);
} else {
;
};
if (true) {
$other = $__case_0;
return $other;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Map_Internal_findMax)($ml);
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_filterWithKey
$Data_Map_Internal_filterWithKey = (function() use (&$Data_Map_Internal_Leaf) {
  $__fn = function($dictOrd, $f = null) use (&$Data_Map_Internal_Leaf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_Leaf) {
  $__fn = function($v) use (&$Data_Map_Internal_Leaf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_Leaf) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
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
    $__res = $go;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_filterKeys
$Data_Map_Internal_filterKeys = (function() use (&$Data_Map_Internal_Leaf) {
  $__fn = function($dictOrd, $f = null) use (&$Data_Map_Internal_Leaf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_Leaf) {
  $__fn = function($v) use (&$Data_Map_Internal_Leaf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_Leaf) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
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
    $__res = $go;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_filter
$Data_Map_Internal_filter = (function() use (&$Data_Map_Internal_compose, &$Data_Map_Internal_filterWithKey, &$Data_Function_const) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_compose, &$Data_Map_Internal_filterWithKey, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_compose)(($Data_Map_Internal_filterWithKey)($dictOrd), $Data_Function_const);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_eqMap
$Data_Map_Internal_eqMap = (function() use (&$Data_Map_Internal_eqMapIter, &$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Map_Internal_eqMapIter, &$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqMapIter1 = ($Data_Map_Internal_eqMapIter)($dictEq);
    $__res = (function() use (&$Data_Eq_eq, $eqMapIter1, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, $eqMapIter1, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)(($eqMapIter1)($dictEq1));
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $ys;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
;
};
if (true) {
return false;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Node")) {
$s1 = ($__case_0)->values[1];
$__case_0 = $ys;
if ((($__case_0)->tag === "Node")) {
$s2 = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return false;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($xs, $ys);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($xs, $ys);
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_ordMap
$Data_Map_Internal_ordMap = (function() use (&$Data_Map_Internal_ordMapIter, &$Data_Map_Internal_eqMap, &$Prim_undefined, &$Data_Ord_compare, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Map_Internal_toMapIter) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_ordMapIter, &$Data_Map_Internal_eqMap, &$Prim_undefined, &$Data_Ord_compare, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Map_Internal_toMapIter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordMapIter1 = ($Data_Map_Internal_ordMapIter)($dictOrd);
$eqMap1 = ($Data_Map_Internal_eqMap)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $ordMapIter1, $eqMap1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Map_Internal_toMapIter) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $ordMapIter1, $eqMap1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Map_Internal_toMapIter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)(($ordMapIter1)($dictOrd1));
$eqMap2 = ($eqMap1)((($dictOrd1)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$Data_Map_Internal_toMapIter) {
  $__body = function($xs, $ys) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$Data_Map_Internal_toMapIter) {
    $__case_0 = $xs;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $ys;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Ordering_EQ;
} else {
;
};
if (true) {
return $Data_Ordering_LT;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if (true) {
$__case_0 = $ys;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($compare)(($Data_Map_Internal_toMapIter)($xs), ($Data_Map_Internal_toMapIter)($ys));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($xs, $ys = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$Data_Map_Internal_toMapIter, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($xs, $ys);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($xs, $ys);
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqMap2) {
  $__fn = function($__dollar____unused) use ($eqMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqMap2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_eq1Map
$Data_Map_Internal_eq1Map = (function() use (&$Data_Map_Internal_eqMap, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Map_Internal_eqMap, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqMap1 = ($Data_Map_Internal_eqMap)($dictEq);
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, $eqMap1) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, $eqMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($eqMap1)($dictEq1));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_ord1Map
$Data_Map_Internal_ord1Map = (function() use (&$Data_Map_Internal_ordMap, &$Data_Map_Internal_eq1Map, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_ordMap, &$Data_Map_Internal_eq1Map, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordMap1 = ($Data_Map_Internal_ordMap)($dictOrd);
$eq1Map1 = ($Data_Map_Internal_eq1Map)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, $ordMap1) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $ordMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($ordMap1)($dictOrd1));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Map1) {
  $__fn = function($__dollar____unused) use ($eq1Map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1Map1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_empty
$Data_Map_Internal_empty = $Data_Map_Internal_Leaf;

// Data_Map_Internal_fromFoldable
$Data_Map_Internal_fromFoldable = (function() use (&$Data_Map_Internal_insert, &$Data_Foldable_foldl, &$Data_Map_Internal_empty) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_insert, &$Data_Foldable_foldl, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insert1 = ($Data_Map_Internal_insert)($dictOrd);
    $__res = (function() use (&$Data_Foldable_foldl, $insert1, &$Data_Map_Internal_empty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, $insert1, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldl)($dictFoldable, (function() use ($insert1) {
  $__body = function($m, $v) use ($insert1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$k = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
return ($insert1)($k, $v1, $m);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($m, $v = null) use ($insert1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($m, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($m, $v);
  };
  return $__fn;
})(), $Data_Map_Internal_empty);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_fromFoldableWith
$Data_Map_Internal_fromFoldableWith = (function() use (&$Data_Map_Internal_insertWith, &$Data_Foldable_foldl, &$Data_Function_flip, &$Data_Map_Internal_empty) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_insertWith, &$Data_Foldable_foldl, &$Data_Function_flip, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insertWith1 = ($Data_Map_Internal_insertWith)($dictOrd);
    $__res = (function() use (&$Data_Foldable_foldl, $insertWith1, &$Data_Function_flip, &$Data_Map_Internal_empty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, $insertWith1, &$Data_Function_flip, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use ($insertWith1, &$Data_Function_flip, $foldl, &$Data_Map_Internal_empty) {
  $__fn = function($f) use ($insertWith1, &$Data_Function_flip, $foldl, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$f__prime__ = ($insertWith1)(($Data_Function_flip)($f));
    $__res = ($foldl)((function() use ($f__prime__) {
  $__body = function($m, $v) use ($f__prime__) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$k = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
return ($f__prime__)($k, $v1, $m);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($m, $v = null) use ($f__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($m, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($m, $v);
  };
  return $__fn;
})(), $Data_Map_Internal_empty);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_fromFoldableWithIndex
$Data_Map_Internal_fromFoldableWithIndex = (function() use (&$Data_Map_Internal_insert, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_Map_Internal_empty) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_insert, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insert1 = ($Data_Map_Internal_insert)($dictOrd);
    $__res = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, $insert1, &$Data_Map_Internal_empty) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldlWithIndex, $insert1, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex, (function() use ($insert1) {
  $__fn = function($k, $m = null, $v = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($insert1)($k, $v, $m);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_Map_Internal_empty);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_monoidSemigroupMap
$Data_Map_Internal_monoidSemigroupMap = (function() use (&$Data_Map_Internal_semigroupMap1, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_Internal_empty) {
  $__fn = function($__dollar____unused, $dictOrd = null) use (&$Data_Map_Internal_semigroupMap1, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupMap2 = ($Data_Map_Internal_semigroupMap1)($dictOrd);
    $__res = (function() use ($semigroupMap2, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_Internal_empty) {
  $__fn = function($dictSemigroup) use ($semigroupMap2, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupMap3 = ($semigroupMap2)($dictSemigroup);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Data_Map_Internal_empty, "Semigroup0" => (function() use ($semigroupMap3) {
  $__fn = function($__dollar____unused) use ($semigroupMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupMap3;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

// Data_Map_Internal_submap
$Data_Map_Internal_submap = (function() use (&$Data_Map_Internal_foldSubmapBy, &$Data_Map_Internal_union, &$Data_Map_Internal_empty, &$Data_Map_Internal_singleton) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_foldSubmapBy, &$Data_Map_Internal_union, &$Data_Map_Internal_empty, &$Data_Map_Internal_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldSubmapBy1 = ($Data_Map_Internal_foldSubmapBy)($dictOrd);
$union1 = ($Data_Map_Internal_union)($dictOrd);
    $__res = (function() use ($foldSubmapBy1, $union1, &$Data_Map_Internal_empty, &$Data_Map_Internal_singleton) {
  $__fn = function($kmin, $kmax = null) use ($foldSubmapBy1, $union1, &$Data_Map_Internal_empty, &$Data_Map_Internal_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldSubmapBy1)($union1, $Data_Map_Internal_empty, $kmin, $kmax, $Data_Map_Internal_singleton);
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

// Data_Map_Internal_unions
$Data_Map_Internal_unions = (function() use (&$Data_Map_Internal_union, &$Data_Foldable_foldl, &$Data_Map_Internal_empty) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_union, &$Data_Foldable_foldl, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$union1 = ($Data_Map_Internal_union)($dictOrd);
    $__res = (function() use (&$Data_Foldable_foldl, $union1, &$Data_Map_Internal_empty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, $union1, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldl)($dictFoldable, $union1, $Data_Map_Internal_empty);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_difference
$Data_Map_Internal_difference = (function() use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeDifference) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeDifference, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeDifference, $compare) {
  $__fn = function($m1, $m2 = null) use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
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

// Data_Map_Internal_delete
$Data_Map_Internal_delete = (function() use (&$Data_Ord_compare, &$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Map_Internal_Leaf, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Map_Internal_Leaf, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($k) use (&$Data_Map_Internal_Leaf, $compare, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_Leaf, $compare, $k, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
  $__fn = function($v) use (&$Data_Map_Internal_Leaf, $compare, $k, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_Leaf, $compare, $k, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$go, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $Data_Map_Internal_Leaf;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
} else {
;
};
if ((($__case_0)->tag === "EQ")) {
return ($Data_Function_Uncurried_runFn2)($Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Data_Map_Internal_checkValid
$Data_Map_Internal_checkValid = (function() use (&$Data_Ord_greaterThan, &$Data_Ord_lessThan, &$Data_Map_Internal_conj, &$Data_Map_Internal_eq, &$Data_Map_Internal_greaterThan, &$Data_Map_Internal_lessThan, &$Data_Map_Internal_abs, &$Data_Map_Internal_sub, &$Data_Map_Internal_add) {
  $__fn = function($dictOrd) use (&$Data_Ord_greaterThan, &$Data_Ord_lessThan, &$Data_Map_Internal_conj, &$Data_Map_Internal_eq, &$Data_Map_Internal_greaterThan, &$Data_Map_Internal_lessThan, &$Data_Map_Internal_abs, &$Data_Map_Internal_sub, &$Data_Map_Internal_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$greaterThan1 = ($Data_Ord_greaterThan)($dictOrd);
$lessThan1 = ($Data_Ord_lessThan)($dictOrd);
$go = (function() use (&$Data_Map_Internal_conj, &$Data_Map_Internal_eq, &$Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, &$Data_Map_Internal_lessThan, &$Data_Map_Internal_abs, &$Data_Map_Internal_sub, &$Data_Map_Internal_add) {
  $__fn = function($v) use (&$Data_Map_Internal_conj, &$Data_Map_Internal_eq, &$Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, &$Data_Map_Internal_lessThan, &$Data_Map_Internal_abs, &$Data_Map_Internal_sub, &$Data_Map_Internal_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_conj, &$Data_Map_Internal_eq, &$Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, &$Data_Map_Internal_lessThan, &$Data_Map_Internal_abs, &$Data_Map_Internal_sub, &$Data_Map_Internal_add) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $l;
if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rs = ($__case_0)->values[1];
$rk = ($__case_0)->values[2];
return ($Data_Map_Internal_conj)(($Data_Map_Internal_eq)($h, 2), ($Data_Map_Internal_conj)(($Data_Map_Internal_eq)($rh, 1), ($Data_Map_Internal_conj)(($Data_Map_Internal_greaterThan)($s, $rs), ($Data_Map_Internal_conj)(($greaterThan1)($rk, $k), ($go)($r)))));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$lh = ($__case_0)->values[0];
$ls = ($__case_0)->values[1];
$lk = ($__case_0)->values[2];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($Data_Map_Internal_conj)(($Data_Map_Internal_eq)($h, 2), ($Data_Map_Internal_conj)(($Data_Map_Internal_eq)($lh, 1), ($Data_Map_Internal_conj)(($Data_Map_Internal_greaterThan)($s, $ls), ($Data_Map_Internal_conj)(($lessThan1)($lk, $k), ($go)($l)))));
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rs = ($__case_0)->values[1];
$rk = ($__case_0)->values[2];
return ($Data_Map_Internal_conj)(($Data_Map_Internal_greaterThan)($h, $rh), ($Data_Map_Internal_conj)(($greaterThan1)($rk, $k), ($Data_Map_Internal_conj)(($Data_Map_Internal_greaterThan)($h, $lh), ($Data_Map_Internal_conj)(($lessThan1)($lk, $k), ($Data_Map_Internal_conj)(($Data_Map_Internal_lessThan)(($Data_Map_Internal_abs)(($Data_Map_Internal_sub)($rh, $lh)), 2), ($Data_Map_Internal_conj)(($Data_Map_Internal_eq)(($Data_Map_Internal_add)(($Data_Map_Internal_add)($rs, $ls), 1), $s), ($Data_Map_Internal_conj)(($go)($l), ($go)($r))))))));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_catMaybes
$Data_Map_Internal_catMaybes = (function() use (&$Data_Map_Internal_mapMaybe, &$Data_Map_Internal_identity) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_mapMaybe, &$Data_Map_Internal_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_mapMaybe)($dictOrd, $Data_Map_Internal_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_applyMap
$Data_Map_Internal_applyMap = (function() use (&$Control_Apply_Apply__dollar__Dict, &$Data_Map_Internal_intersectionWith, &$Data_Map_Internal_identity, &$Data_Map_Internal_functorMap) {
  $__fn = function($dictOrd) use (&$Control_Apply_Apply__dollar__Dict, &$Data_Map_Internal_intersectionWith, &$Data_Map_Internal_identity, &$Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Data_Map_Internal_intersectionWith)($dictOrd, $Data_Map_Internal_identity), "Functor0" => (function() use (&$Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_functorMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_bindMap
$Data_Map_Internal_bindMap = (function() use (&$Data_Map_Internal_mapMaybeWithKey, &$Data_Map_Internal_lookup, &$Data_Map_Internal_applyMap, &$Control_Bind_Bind__dollar__Dict, &$Data_Map_Internal_compose) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_mapMaybeWithKey, &$Data_Map_Internal_lookup, &$Data_Map_Internal_applyMap, &$Control_Bind_Bind__dollar__Dict, &$Data_Map_Internal_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapMaybeWithKey1 = ($Data_Map_Internal_mapMaybeWithKey)($dictOrd);
$lookup1 = ($Data_Map_Internal_lookup)($dictOrd);
$applyMap1 = ($Data_Map_Internal_applyMap)($dictOrd);
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use ($mapMaybeWithKey1, &$Data_Map_Internal_compose, $lookup1) {
  $__fn = function($m, $f = null) use ($mapMaybeWithKey1, &$Data_Map_Internal_compose, $lookup1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mapMaybeWithKey1)((function() use (&$Data_Map_Internal_compose, $lookup1, $f) {
  $__fn = function($k) use (&$Data_Map_Internal_compose, $lookup1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Map_Internal_compose)(($lookup1)($k), $f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $m);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyMap1) {
  $__fn = function($__dollar____unused) use ($applyMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyMap1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_anyWithKey
$Data_Map_Internal_anyWithKey = (function() use (&$Data_Map_Internal_disj) {
  $__fn = function($predicate) use (&$Data_Map_Internal_disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_disj, $predicate, &$go) {
  $__fn = function($v) use (&$Data_Map_Internal_disj, $predicate, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_disj, $predicate, &$go) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return false;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
return ($Data_Map_Internal_disj)(($predicate)($mk, $mv), ($Data_Map_Internal_disj)(($go)($ml), ($go)($mr)));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_any
$Data_Map_Internal_any = (function() use (&$Data_Map_Internal_disj) {
  $__fn = function($predicate) use (&$Data_Map_Internal_disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Map_Internal_disj, $predicate, &$go) {
  $__fn = function($v) use (&$Data_Map_Internal_disj, $predicate, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Map_Internal_disj, $predicate, &$go) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return false;
} else {
;
};
if ((($__case_0)->tag === "Node")) {
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
return ($Data_Map_Internal_disj)(($predicate)($mv), ($Data_Map_Internal_disj)(($go)($ml), ($go)($mr)));
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
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_alter
$Data_Map_Internal_alter = (function() use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, $compare, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode) {
  $__body = function($f, $k, $m) use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, $compare, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode) {
    $v = ($Data_Function_Uncurried_runFn3)($Data_Map_Internal_unsafeSplit, $compare, $k, $m);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Split")) {
$v1 = ($__case_0)->values[0];
$l = ($__case_0)->values[1];
$r = ($__case_0)->values[2];
$v2 = ($f)($v1);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Function_Uncurried_runFn2)($Data_Map_Internal_unsafeJoinNodes, $l, $r);
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$v__prime__ = ($__case_0)->values[0];
return ($Data_Function_Uncurried_runFn4)($Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, $l, $r);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $k = null, $m = null) use (&$Data_Function_Uncurried_runFn3, &$Data_Map_Internal_unsafeSplit, $compare, &$Data_Function_Uncurried_runFn2, &$Data_Map_Internal_unsafeJoinNodes, &$Data_Function_Uncurried_runFn4, &$Data_Map_Internal_unsafeBalancedNode, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $k, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $k, $m);
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

// Data_Map_Internal_altMap
$Data_Map_Internal_altMap = (function() use (&$Control_Alt_Alt__dollar__Dict, &$Data_Map_Internal_union, &$Data_Map_Internal_functorMap) {
  $__fn = function($dictOrd) use (&$Control_Alt_Alt__dollar__Dict, &$Data_Map_Internal_union, &$Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => ($Data_Map_Internal_union)($dictOrd), "Functor0" => (function() use (&$Data_Map_Internal_functorMap) {
  $__fn = function($__dollar____unused) use (&$Data_Map_Internal_functorMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Map_Internal_functorMap;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_plusMap
$Data_Map_Internal_plusMap = (function() use (&$Data_Map_Internal_altMap, &$Control_Plus_Plus__dollar__Dict, &$Data_Map_Internal_empty) {
  $__fn = function($dictOrd) use (&$Data_Map_Internal_altMap, &$Control_Plus_Plus__dollar__Dict, &$Data_Map_Internal_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$altMap1 = ($Data_Map_Internal_altMap)($dictOrd);
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => $Data_Map_Internal_empty, "Alt0" => (function() use ($altMap1) {
  $__fn = function($__dollar____unused) use ($altMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altMap1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

