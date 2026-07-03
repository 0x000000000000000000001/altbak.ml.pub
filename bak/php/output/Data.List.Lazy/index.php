<?php

namespace Data\List\Lazy;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_Lazy_apply
$Data_List_Lazy_apply = ($Control_Apply_apply)($Data_Lazy_applyLazy);

// Data_List_Lazy_map
$Data_List_Lazy_map = ($Data_Functor_map)($Data_Lazy_functorLazy);

// Data_List_Lazy_unwrap
$Data_List_Lazy_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_List_Lazy_sequence
$Data_List_Lazy_sequence = ($Data_Traversable_sequence)($Data_List_Lazy_Types_traversableList);

// Data_List_Lazy_sub
$Data_List_Lazy_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_List_Lazy_foldr
$Data_List_Lazy_foldr = ($Data_Foldable_foldr)($Data_List_Lazy_Types_foldableList);

// Data_List_Lazy_map1
$Data_List_Lazy_map1 = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_List_Lazy_compose
$Data_List_Lazy_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_List_Lazy_lessThanOrEq
$Data_List_Lazy_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_List_Lazy_tailRecM2
$Data_List_Lazy_tailRecM2 = ($Control_Monad_Rec_Class_tailRecM2)($Control_Monad_Rec_Class_monadRecMaybe);

// Data_List_Lazy_append
$Data_List_Lazy_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_List_Lazy_defer
$Data_List_Lazy_defer = ($Control_Lazy_defer)($Data_List_Lazy_Types_lazyList);

// Data_List_Lazy_foldl
$Data_List_Lazy_foldl = ($Data_Foldable_foldl)($Data_List_Lazy_Types_foldableList);

// Data_List_Lazy_lessThan
$Data_List_Lazy_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_List_Lazy_one
$Data_List_Lazy_one = ($Data_Semiring_one)($Data_Semiring_semiringInt);

// Data_List_Lazy_fix
$Data_List_Lazy_fix = ($Control_Lazy_fix)($Data_List_Lazy_Types_lazyList);

// Data_List_Lazy_greaterThan
$Data_List_Lazy_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_List_Lazy_greaterThanOrEq
$Data_List_Lazy_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_List_Lazy_unfoldr
$Data_List_Lazy_unfoldr = ($Data_Unfoldable_unfoldr)($Data_List_Lazy_Types_unfoldableList);

// Data_List_Lazy_add
$Data_List_Lazy_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_List_Lazy_map2
$Data_List_Lazy_map2 = ($Data_Functor_map)($Data_List_Lazy_Types_functorList);

// Data_List_Lazy_bind
$Data_List_Lazy_bind = ($Control_Bind_bind)($Data_Maybe_bindMaybe);

// Data_List_Lazy_pure
$Data_List_Lazy_pure = ($Control_Applicative_pure)($Data_Maybe_applicativeMaybe);

// Data_List_Lazy_any
$Data_List_Lazy_any = ($Data_Foldable_any)($Data_List_Lazy_Types_foldableList, $Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_List_Lazy_not
$Data_List_Lazy_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_List_Lazy_append1
$Data_List_Lazy_append1 = ($Data_Semigroup_append)($Data_List_Lazy_Types_semigroupList);

// Data_List_Lazy_bind1
$Data_List_Lazy_bind1 = ($Control_Bind_bind)($Data_List_Lazy_Types_bindList);

// Data_List_Lazy_identity
$Data_List_Lazy_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_List_Lazy_Pattern
$Data_List_Lazy_Pattern = (function() {
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

// Data_List_Lazy_zipWith
$Data_List_Lazy_zipWith = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_zipWith, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_apply, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($f, $xs = null, $ys = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_zipWith, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_apply, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($f, $xs, $ys) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_zipWith, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_apply, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $f, &$Data_List_Lazy_zipWith) {
  $__body = function($v, $v1) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $f, &$Data_List_Lazy_zipWith) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_1)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$b = ($__case_1)->values[0];
$bs = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_Cons)(($f)($a, $b), ($Data_List_Lazy_zipWith)($f, $as, $bs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $f, &$Data_List_Lazy_zipWith, $__body, &$__fn) {
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
})();
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_apply)(($Data_List_Lazy_map)($go, ($Data_List_Lazy_unwrap)($xs)), ($Data_List_Lazy_unwrap)($ys)));
}
})($f, $xs, $ys);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_zipWithA
$Data_List_Lazy_zipWithA = (function() use (&$Data_List_Lazy_sequence, &$Data_List_Lazy_zipWith) {
  $__fn = function($dictApplicative) use (&$Data_List_Lazy_sequence, &$Data_List_Lazy_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence1 = ($Data_List_Lazy_sequence)($dictApplicative);
    $__res = (function() use ($sequence1, &$Data_List_Lazy_zipWith) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$Data_List_Lazy_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence1)(($Data_List_Lazy_zipWith)($f, $xs, $ys));
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

// Data_List_Lazy_zip
$Data_List_Lazy_zip = ($Data_List_Lazy_zipWith)($Data_Tuple_Tuple);

// Data_List_Lazy_updateAt
$Data_List_Lazy_updateAt = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_updateAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($n, $x = null, $xs = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_updateAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($n, $x, $xs) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_updateAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_updateAt, &$Data_List_Lazy_sub) {
  $__body = function($v, $v1) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_updateAt, &$Data_List_Lazy_sub) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_Cons)($x, $ys);
} else {
;
};
    if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_Cons)($y, ($Data_List_Lazy_updateAt)(($Data_List_Lazy_sub)($n__prime__, 1), $x, $ys));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_updateAt, &$Data_List_Lazy_sub, $__body, &$__fn) {
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
})();
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)(($go)($n), ($Data_List_Lazy_unwrap)($xs)));
}
})($n, $x, $xs);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_unzip
$Data_List_Lazy_unzip = ($Data_List_Lazy_foldr)((function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_cons) {
  $__body = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_cons) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_cons, $a, $b) {
  $__body = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_cons, $a, $b) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$as = ($__case_0)->values[0];
$bs = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)(($Data_List_Lazy_Types_cons)($a, $as), ($Data_List_Lazy_Types_cons)($b, $bs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_cons, $a, $b, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v1);
  };
  return $__fn;
})();
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
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
})(), ($Data_Tuple_Tuple)($Data_List_Lazy_Types_nil, $Data_List_Lazy_Types_nil));

// Data_List_Lazy_uncons
$Data_List_Lazy_uncons = (function() use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__body = function($xs) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
    $v = ($Data_List_Lazy_Types_step)($xs);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($Data_Maybe_Just)((object)["head" => $x, "tail" => $xs__prime__]);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($xs) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Nothing, &$Data_Maybe_Just, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($xs);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($xs);
  };
  return $__fn;
})();

// Data_List_Lazy_toUnfoldable
$Data_List_Lazy_toUnfoldable = (function() use (&$Data_Unfoldable_unfoldr, &$Data_List_Lazy_map1, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_List_Lazy_map1, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_unfoldr)($dictUnfoldable, (function() use (&$Data_List_Lazy_map1, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons) {
  $__fn = function($xs) use (&$Data_List_Lazy_map1, &$Data_Tuple_Tuple, &$Data_List_Lazy_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_map1)((function() use (&$Data_Tuple_Tuple) {
  $__fn = function($rec) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($rec)->head, ($rec)->tail);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_Lazy_uncons)($xs));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_takeWhile
$Data_List_Lazy_takeWhile = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($p) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($p) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Nil) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if (true) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, $__body, &$__fn) {
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
return ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Data_List_Lazy_compose)(($Data_List_Lazy_map)($go), $Data_List_Lazy_unwrap));
}
})($p);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_take
$Data_List_Lazy_take = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_take, &$Data_List_Lazy_sub, &$Data_List_Lazy_lessThanOrEq, &$Data_Function_const, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($n) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_take, &$Data_List_Lazy_sub, &$Data_List_Lazy_lessThanOrEq, &$Data_Function_const, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($n) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_take, &$Data_List_Lazy_sub, &$Data_List_Lazy_lessThanOrEq, &$Data_Function_const, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_take, &$Data_List_Lazy_sub) {
  $__body = function($v, $v1) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_take, &$Data_List_Lazy_sub) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_Cons)($x, ($Data_List_Lazy_take)(($Data_List_Lazy_sub)($n__prime__, 1), $xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_take, &$Data_List_Lazy_sub, $__body, &$__fn) {
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
})();
$__case_0 = ($Data_List_Lazy_lessThanOrEq)($n, 0);
if (($__case_0 === true)) {
return ($Data_Function_const)($Data_List_Lazy_Types_nil);
} else {
;
};
if (true) {
return ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Data_List_Lazy_compose)(($Data_List_Lazy_map)(($go)($n)), $Data_List_Lazy_unwrap));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($n);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_tail
$Data_List_Lazy_tail = (function() use (&$Data_List_Lazy_map1, &$Data_List_Lazy_uncons) {
  $__fn = function($xs) use (&$Data_List_Lazy_map1, &$Data_List_Lazy_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_map1)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v)->tail;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_Lazy_uncons)($xs));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_stripPrefix
$Data_List_Lazy_stripPrefix = (function() use (&$Data_Eq_eq, &$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_Lazy_tailRecM2) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_Lazy_tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_Lazy_tailRecM2) {
  $__body = function($v, $s) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_Lazy_tailRecM2) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$p__prime__ = $__case_0;
$s1 = $__case_1;
$go = (function() use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing) {
  $__body = function($prefix, $input) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing) {
    $v1 = ($Data_List_Lazy_Types_step)($prefix);
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return ($Data_Maybe_Just)(($Control_Monad_Rec_Class_Done)($input));
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$p = ($__case_0)->values[0];
$ps = ($__case_0)->values[1];
$v2 = ($Data_List_Lazy_Types_step)($input);
$__case_0 = $v2;
if ((($__case_0)->tag === "Cons")) {
$i = ($__case_0)->values[0];
$is = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($prefix, $input = null) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($prefix, $input);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($prefix, $input);
  };
  return $__fn;
})();
return ($Data_List_Lazy_tailRecM2)($go, $p__prime__, $s1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use (&$Data_List_Lazy_Types_step, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_Lazy_tailRecM2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $s);
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

// Data_List_Lazy_span
$Data_List_Lazy_span = (function() use (&$Data_List_Lazy_uncons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($p, $xs = null) use (&$Data_List_Lazy_uncons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($p, $xs) use (&$Data_List_Lazy_uncons, &$Data_List_Lazy_Types_nil) {
while (true) {
$v = ($Data_List_Lazy_uncons)($xs);
$__case_0 = $v;
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$x = (($__case_0)->values[0])->head;
$xs__prime__ = (($__case_0)->values[0])->tail;
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return (object)["init" => $Data_List_Lazy_Types_nil, "rest" => $xs];
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($p, $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_snoc
$Data_List_Lazy_snoc = (function() use (&$Data_List_Lazy_foldr, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($xs, $x = null) use (&$Data_List_Lazy_foldr, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_foldr)($Data_List_Lazy_Types_cons, ($Data_List_Lazy_Types_cons)($x, $Data_List_Lazy_Types_nil), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_singleton
$Data_List_Lazy_singleton = (function() use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($a) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_cons)($a, $Data_List_Lazy_Types_nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_showPattern
$Data_List_Lazy_showPattern = (function() use (&$Data_Show_show, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_List_Lazy_Types_showList)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_Lazy_append, $show) {
  $__body = function($v) use (&$Data_List_Lazy_append, $show) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($Data_List_Lazy_append)("(Pattern ", ($Data_List_Lazy_append)(($show)($s), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_append, $show, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_scanlLazy
$Data_List_Lazy_scanlLazy = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_scanlLazy, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($f, $acc = null, $xs = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_scanlLazy, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($f, $acc, $xs) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_scanlLazy, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, $f, $acc, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_scanlLazy) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Nil, $f, $acc, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_scanlLazy) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$acc__prime__ = ($f)($acc, $x);
return ($Data_List_Lazy_Types_Cons)($acc__prime__, ($Data_List_Lazy_scanlLazy)($f, $acc__prime__, $xs__prime__));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, $f, $acc, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_scanlLazy, $__body, &$__fn) {
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
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)($go, ($Data_List_Lazy_unwrap)($xs)));
}
})($f, $acc, $xs);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_reverse
$Data_List_Lazy_reverse = (function() use (&$Data_List_Lazy_defer, &$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($xs) use (&$Data_List_Lazy_defer, &$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_defer)((function() use (&$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, $xs) {
  $__fn = function($v) use (&$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_foldl)(($Data_Function_flip)($Data_List_Lazy_Types_cons), $Data_List_Lazy_Types_nil, $xs);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_replicateM
$Data_List_Lazy_replicateM = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind) {
while (true) {
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind2 = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return (function() {
  $__body = function($n, $m) {
    $__case_0 = $n;
    $__case_1 = $m;
    if (true) {
$n1 = $__case_0;
$m1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($n, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($n, $m);
  };
  return $__fn;
})();
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_repeat
$Data_List_Lazy_repeat = (function() use (&$Data_List_Lazy_fix, &$Data_List_Lazy_Types_cons) {
  $__fn = function($x) use (&$Data_List_Lazy_fix, &$Data_List_Lazy_Types_cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_fix)((function() use (&$Data_List_Lazy_Types_cons, $x) {
  $__fn = function($xs) use (&$Data_List_Lazy_Types_cons, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_cons)($x, $xs);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_replicate
$Data_List_Lazy_replicate = (function() use (&$Data_List_Lazy_take, &$Data_List_Lazy_repeat) {
  $__fn = function($i, $xs = null) use (&$Data_List_Lazy_take, &$Data_List_Lazy_repeat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_take)($i, ($Data_List_Lazy_repeat)($xs));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_range
$Data_List_Lazy_range = (function() {
  $__body = function($start, $end) {
    $__case_0 = $start;
    $__case_1 = $end;
    if (true) {
$start1 = $__case_0;
$end1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($start, $end = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($start, $end);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($start, $end);
  };
  return $__fn;
})();

// Data_List_Lazy_partition
$Data_List_Lazy_partition = (function() use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_foldr, &$Data_List_Lazy_Types_nil) {
  $__fn = function($f) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_foldr, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($f, &$Data_List_Lazy_Types_cons) {
  $__body = function($x, $v) use ($f, &$Data_List_Lazy_Types_cons) {
    $__case_0 = $x;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$x1 = $__case_0;
$ys = ($__case_1)->yes;
$ns = ($__case_1)->no;
$__case_0 = ($f)($x1);
if (($__case_0 === true)) {
return (object)["yes" => ($Data_List_Lazy_Types_cons)($x1, $ys), "no" => $ns];
} else {
;
};
if (true) {
return (object)["yes" => $ys, "no" => ($Data_List_Lazy_Types_cons)($x1, $ns)];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $v = null) use ($f, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $v);
  };
  return $__fn;
})();
    $__res = ($Data_List_Lazy_foldr)($go, (object)["yes" => $Data_List_Lazy_Types_nil, "no" => $Data_List_Lazy_Types_nil]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_null
$Data_List_Lazy_null = ($Data_List_Lazy_compose)($Data_Maybe_isNothing, $Data_List_Lazy_uncons);

// Data_List_Lazy_nubBy
$Data_List_Lazy_nubBy = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Internal_insertAndLookupBy, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Internal_emptySet) {
  $__fn = function($p) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Internal_insertAndLookupBy, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Internal_emptySet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$goStep = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Internal_insertAndLookupBy, $p, &$Data_List_Lazy_Types_step, &$go, &$Data_List_Lazy_Types_Cons) {
  $__fn = function($v, $v1 = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Internal_insertAndLookupBy, $p, &$Data_List_Lazy_Types_step, &$go, &$Data_List_Lazy_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Internal_insertAndLookupBy, $p, &$Data_List_Lazy_Types_step, &$go, &$Data_List_Lazy_Types_Cons) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$s = $__case_0;
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
$v2 = ($Data_List_Internal_insertAndLookupBy)($p, $a, $s);
$__case_0 = $v2;
if ((is_object)($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
if (($__case_0 === true)) {
return ($Data_List_Lazy_Types_step)(($go)($s__prime__, $as));
} else {
;
};
if (true) {
return ($Data_List_Lazy_Types_Cons)($a, ($go)($s__prime__, $as));
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
})($v, $v1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
$go = (function() use (&$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$goStep) {
  $__fn = function($s, $v = null) use (&$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$goStep, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($s, $v) use (&$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$goStep) {
while (true) {
$__case_0 = $s;
$__case_1 = $v;
if (true) {
$s1 = $__case_0;
$l = $__case_1;
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)(($goStep)($s1), $l));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($s, $v);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)($Data_List_Internal_emptySet);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_nub
$Data_List_Lazy_nub = (function() use (&$Data_List_Lazy_nubBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_List_Lazy_nubBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_nubBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_newtypePattern
$Data_List_Lazy_newtypePattern = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Prim_undefined;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_mapMaybe
$Data_List_Lazy_mapMaybe = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_mapMaybe, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($f) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_mapMaybe, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($f) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_mapMaybe, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, $f, $go, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_mapMaybe) {
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, $f, $go, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_mapMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_List_Lazy_Types_Nil, $f, $go, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_mapMaybe) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$v1 = ($f)($x);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = ($Data_List_Lazy_Types_step)($xs);
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$y = ($__case_0)->values[0];
return ($Data_List_Lazy_Types_Cons)($y, ($Data_List_Lazy_mapMaybe)($f, $xs));
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
return ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Data_List_Lazy_compose)(($Data_List_Lazy_map)($go), $Data_List_Lazy_unwrap));
}
})($f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_some
$Data_List_Lazy_some = (function() use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_many) {
  $__fn = function($dictAlternative) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_many, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictAlternative) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_many) {
while (true) {
$apply1 = ($Control_Apply_apply)((((($dictAlternative)->Applicative0)($Prim_undefined))->Apply0)($Prim_undefined));
$map3 = ($Data_Functor_map)((((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Lazy_defer, $apply1, $map3, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_many, $dictAlternative) {
  $__fn = function($dictLazy) use (&$Control_Lazy_defer, $apply1, $map3, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_many, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$defer1 = ($Control_Lazy_defer)($dictLazy);
    $__res = (function() use ($apply1, $map3, &$Data_List_Lazy_Types_cons, $defer1, &$Data_List_Lazy_many, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, &$Data_List_Lazy_Types_cons, $defer1, &$Data_List_Lazy_many, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($map3)($Data_List_Lazy_Types_cons, $v), ($defer1)((function() use (&$Data_List_Lazy_many, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use (&$Data_List_Lazy_many, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_many)($dictAlternative, $dictLazy, $v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
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
}
})($dictAlternative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_many
$Data_List_Lazy_many = (function() use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_List_Lazy_some, &$Data_List_Lazy_Types_nil) {
  $__fn = function($dictAlternative) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_List_Lazy_some, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictAlternative) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_List_Lazy_some, &$Data_List_Lazy_Types_nil) {
while (true) {
$alt = ($Control_Alt_alt)((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined));
$pure1 = ($Control_Applicative_pure)((($dictAlternative)->Applicative0)($Prim_undefined));
return (function() use ($alt, &$Data_List_Lazy_some, $dictAlternative, $pure1, &$Data_List_Lazy_Types_nil) {
  $__fn = function($dictLazy, $v = null) use ($alt, &$Data_List_Lazy_some, $dictAlternative, $pure1, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($Data_List_Lazy_some)($dictAlternative, $dictLazy, $v), ($pure1)($Data_List_Lazy_Types_nil));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictAlternative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_length
$Data_List_Lazy_length = ($Data_List_Lazy_foldl)((function() use (&$Data_List_Lazy_add) {
  $__fn = function($l, $v = null) use (&$Data_List_Lazy_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_add)($l, 1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), 0);

// Data_List_Lazy_last
$Data_List_Lazy_last = (function() use (&$Data_Maybe_Nothing, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_step) {
$go = (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return $Data_Maybe_Nothing;
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
return ($Data_List_Lazy_compose)($go, $Data_List_Lazy_Types_step);
})();

// Data_List_Lazy_iterate
$Data_List_Lazy_iterate = (function() use (&$Data_List_Lazy_fix, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_map2) {
  $__fn = function($f, $x = null) use (&$Data_List_Lazy_fix, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_fix)((function() use (&$Data_List_Lazy_Types_cons, $x, &$Data_List_Lazy_map2, $f) {
  $__fn = function($xs) use (&$Data_List_Lazy_Types_cons, $x, &$Data_List_Lazy_map2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_cons)($x, ($Data_List_Lazy_map2)($f, $xs));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_insertAt
$Data_List_Lazy_insertAt = (function() use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_0 === 0)) {
$x = $__case_1;
$xs = $__case_2;
return ($Data_List_Lazy_Types_cons)($x, $xs);
} else {
;
};
if (true) {
$n = $__case_0;
$x = $__case_1;
$xs = $__case_2;
$go = (function() use (&$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertAt, &$Data_List_Lazy_sub, $n) {
  $__body = function($v3) use (&$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertAt, &$Data_List_Lazy_sub, $n) {
    $__case_0 = $v3;
    if ((($__case_0)->tag === "Nil")) {
return ($Data_List_Lazy_Types_Cons)($x, $Data_List_Lazy_Types_nil);
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$y = ($__case_0)->values[0];
$ys = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_Cons)($y, ($Data_List_Lazy_insertAt)(($Data_List_Lazy_sub)($n, 1), $x, $ys));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v3) use (&$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertAt, &$Data_List_Lazy_sub, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v3);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v3);
  };
  return $__fn;
})();
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)($go, ($Data_List_Lazy_unwrap)($xs)));
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

// Data_List_Lazy_init
$Data_List_Lazy_init = (function() use (&$Data_Maybe_Nothing, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_step) {
$go = (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
return $Data_Maybe_Nothing;
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
return ($Data_List_Lazy_compose)($go, $Data_List_Lazy_Types_step);
})();

// Data_List_Lazy_index
$Data_List_Lazy_index = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_sub) {
  $__fn = function($xs) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$go, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_sub) {
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$go, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$go, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_sub) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->values[0];
return ($Data_Maybe_Just)($a);
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$as = ($__case_0)->values[1];
$i = $__case_1;
$__tco_tmp_0 = ($Data_List_Lazy_Types_step)($as);
$__tco_tmp_1 = ($Data_List_Lazy_sub)($i, 1);
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
    $__res = ($go)(($Data_List_Lazy_Types_step)($xs));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_head
$Data_List_Lazy_head = (function() use (&$Data_List_Lazy_map1, &$Data_List_Lazy_uncons) {
  $__fn = function($xs) use (&$Data_List_Lazy_map1, &$Data_List_Lazy_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_map1)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v)->head;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_Lazy_uncons)($xs));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_transpose
$Data_List_Lazy_transpose = (function() use (&$Data_List_Lazy_uncons, &$Data_List_Lazy_transpose, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_mapMaybe, &$Data_List_Lazy_head, &$Data_List_Lazy_tail) {
  $__fn = function($xs) use (&$Data_List_Lazy_uncons, &$Data_List_Lazy_transpose, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_mapMaybe, &$Data_List_Lazy_head, &$Data_List_Lazy_tail, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($xs) use (&$Data_List_Lazy_uncons, &$Data_List_Lazy_transpose, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_mapMaybe, &$Data_List_Lazy_head, &$Data_List_Lazy_tail) {
while (true) {
$v = ($Data_List_Lazy_uncons)($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $xs;
} else {
;
};
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$h = (($__case_0)->values[0])->head;
$xss = (($__case_0)->values[0])->tail;
$v1 = ($Data_List_Lazy_uncons)($h);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = $xss;
$xs = $__tco_tmp_0;
continue;
} else {
;
};
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$x = (($__case_0)->values[0])->head;
$xs__prime__ = (($__case_0)->values[0])->tail;
return ($Data_List_Lazy_Types_cons)(($Data_List_Lazy_Types_cons)($x, ($Data_List_Lazy_mapMaybe)($Data_List_Lazy_head, $xss)), ($Data_List_Lazy_transpose)(($Data_List_Lazy_Types_cons)($xs__prime__, ($Data_List_Lazy_mapMaybe)($Data_List_Lazy_tail, $xss))));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($xs);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_groupBy
$Data_List_Lazy_groupBy = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_span, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_groupBy, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($eq) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_span, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_groupBy, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($eq) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_span, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_groupBy, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_span, $eq, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_groupBy) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_span, $eq, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_groupBy) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$v1 = ($Data_List_Lazy_span)(($eq)($x), $xs);
$__case_0 = $v1;
if ((is_object)($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
return ($Data_List_Lazy_Types_Cons)(($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $x, $ys) {
  $__fn = function($v2) use (&$Data_NonEmpty_NonEmpty, $x, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($x, $ys);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())), ($Data_List_Lazy_groupBy)($eq, $zs));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_span, $eq, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_groupBy, $__body, &$__fn) {
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
return ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Data_List_Lazy_compose)(($Data_List_Lazy_map)($go), $Data_List_Lazy_unwrap));
}
})($eq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_group
$Data_List_Lazy_group = (function() use (&$Data_List_Lazy_groupBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_groupBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_groupBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_fromStep
$Data_List_Lazy_fromStep = ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Control_Applicative_pure)($Data_Lazy_applicativeLazy));

// Data_List_Lazy_insertBy
$Data_List_Lazy_insertBy = (function() use (&$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertBy, &$Data_List_Lazy_fromStep, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($cmp, $x = null, $xs = null) use (&$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertBy, &$Data_List_Lazy_fromStep, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($cmp, $x, $xs) use (&$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_insertBy, &$Data_List_Lazy_fromStep, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_Types_nil, $cmp, &$Data_List_Lazy_insertBy, &$Data_List_Lazy_fromStep) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_Types_nil, $cmp, &$Data_List_Lazy_insertBy, &$Data_List_Lazy_fromStep) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return ($Data_List_Lazy_Types_Cons)($x, $Data_List_Lazy_Types_nil);
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$ys = $__case_0;
$y = ($__case_0)->values[0];
$ys__prime__ = ($__case_0)->values[1];
$v1 = ($cmp)($x, $y);
$__case_0 = $v1;
if ((($__case_0)->tag === "GT")) {
return ($Data_List_Lazy_Types_Cons)($y, ($Data_List_Lazy_insertBy)($cmp, $x, $ys__prime__));
} else {
;
};
if (true) {
return ($Data_List_Lazy_Types_Cons)($x, ($Data_List_Lazy_fromStep)($ys));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Cons, $x, &$Data_List_Lazy_Types_nil, $cmp, &$Data_List_Lazy_insertBy, &$Data_List_Lazy_fromStep, $__body, &$__fn) {
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
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)($go, ($Data_List_Lazy_unwrap)($xs)));
}
})($cmp, $x, $xs);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_insert
$Data_List_Lazy_insert = (function() use (&$Data_List_Lazy_insertBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_List_Lazy_insertBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_insertBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_fromFoldable
$Data_List_Lazy_fromFoldable = (function() use (&$Data_Foldable_foldr, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldr)($dictFoldable, $Data_List_Lazy_Types_cons, $Data_List_Lazy_Types_nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_foldrLazy
$Data_List_Lazy_foldrLazy = (function() use (&$Control_Lazy_defer, &$Data_List_Lazy_Types_step) {
  $__fn = function($dictLazy) use (&$Control_Lazy_defer, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$defer1 = ($Control_Lazy_defer)($dictLazy);
    $__res = (function() use (&$Data_List_Lazy_Types_step, $defer1) {
  $__fn = function($op, $z = null) use (&$Data_List_Lazy_Types_step, $defer1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_Types_step, $defer1, $op, &$go, $z) {
  $__fn = function($xs) use (&$Data_List_Lazy_Types_step, $defer1, $op, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($xs) use (&$Data_List_Lazy_Types_step, $defer1, $op, &$go, $z) {
while (true) {
$v = ($Data_List_Lazy_Types_step)($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($defer1)((function() use ($op, $x, &$go, $xs__prime__) {
  $__fn = function($v1) use ($op, $x, &$go, $xs__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($op)($x, ($go)($xs__prime__));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
if ((($__case_0)->tag === "Nil")) {
return $z;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($xs);
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

// Data_List_Lazy_foldM
$Data_List_Lazy_foldM = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_foldM) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_foldM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_foldM) {
while (true) {
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind2 = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return (function() use (&$Data_List_Lazy_uncons, $pure1, $bind2, &$Data_List_Lazy_foldM, $dictMonad) {
  $__body = function($f, $b, $xs) use (&$Data_List_Lazy_uncons, $pure1, $bind2, &$Data_List_Lazy_foldM, $dictMonad) {
    $v = ($Data_List_Lazy_uncons)($xs);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
;
};
    if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$a = (($__case_0)->values[0])->head;
$as = (($__case_0)->values[0])->tail;
return ($bind2)(($f)($b, $a), (function() use (&$Data_List_Lazy_foldM, $dictMonad, $f, $as) {
  $__fn = function($b__prime__) use (&$Data_List_Lazy_foldM, $dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_foldM)($dictMonad, $f, $b__prime__, $as);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $xs = null) use (&$Data_List_Lazy_uncons, $pure1, $bind2, &$Data_List_Lazy_foldM, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $b, $xs);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $b, $xs);
  };
  return $__fn;
})();
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_findIndex
$Data_List_Lazy_findIndex = (function() use (&$Data_List_Lazy_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_pure, &$Data_List_Lazy_add) {
  $__fn = function($fn) use (&$Data_List_Lazy_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_pure, &$Data_List_Lazy_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_bind, &$Data_List_Lazy_uncons, $fn, &$Data_List_Lazy_pure, &$go, &$Data_List_Lazy_add) {
  $__fn = function($n, $list = null) use (&$Data_List_Lazy_bind, &$Data_List_Lazy_uncons, $fn, &$Data_List_Lazy_pure, &$go, &$Data_List_Lazy_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($n, $list) use (&$Data_List_Lazy_bind, &$Data_List_Lazy_uncons, $fn, &$Data_List_Lazy_pure, &$go, &$Data_List_Lazy_add) {
while (true) {
return ($Data_List_Lazy_bind)(($Data_List_Lazy_uncons)($list), (function() use ($fn, &$Data_List_Lazy_pure, $n, &$go, &$Data_List_Lazy_add) {
  $__body = function($o) use ($fn, &$Data_List_Lazy_pure, $n, &$go, &$Data_List_Lazy_add) {
    $__case_0 = ($fn)(($o)->head);
    if (($__case_0 === true)) {
return ($Data_List_Lazy_pure)($n);
} else {
;
};
    if (true) {
return ($go)(($Data_List_Lazy_add)($n, 1), ($o)->tail);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o) use ($fn, &$Data_List_Lazy_pure, $n, &$go, &$Data_List_Lazy_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($o);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($o);
  };
  return $__fn;
})());
}
})($n, $list);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)(0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_findLastIndex
$Data_List_Lazy_findLastIndex = (function() use (&$Data_List_Lazy_map1, &$Data_List_Lazy_sub, &$Data_List_Lazy_length, &$Data_List_Lazy_findIndex, &$Data_List_Lazy_reverse) {
  $__fn = function($fn, $xs = null) use (&$Data_List_Lazy_map1, &$Data_List_Lazy_sub, &$Data_List_Lazy_length, &$Data_List_Lazy_findIndex, &$Data_List_Lazy_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_map1)((function() use (&$Data_List_Lazy_sub, &$Data_List_Lazy_length, $xs) {
  $__fn = function($v) use (&$Data_List_Lazy_sub, &$Data_List_Lazy_length, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_sub)(($Data_List_Lazy_sub)(($Data_List_Lazy_length)($xs), 1), $v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_Lazy_findIndex)($fn, ($Data_List_Lazy_reverse)($xs)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_filterM
$Data_List_Lazy_filterM = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_filterM, &$Data_List_Lazy_Types_cons) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_filterM, &$Data_List_Lazy_Types_cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Lazy_uncons, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_filterM, &$Data_List_Lazy_Types_cons) {
while (true) {
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind2 = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return (function() use (&$Data_List_Lazy_uncons, $pure1, &$Data_List_Lazy_Types_nil, $bind2, &$Data_List_Lazy_filterM, $dictMonad, &$Data_List_Lazy_Types_cons) {
  $__body = function($p, $list) use (&$Data_List_Lazy_uncons, $pure1, &$Data_List_Lazy_Types_nil, $bind2, &$Data_List_Lazy_filterM, $dictMonad, &$Data_List_Lazy_Types_cons) {
    $v = ($Data_List_Lazy_uncons)($list);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($Data_List_Lazy_Types_nil);
} else {
;
};
    if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$x = (($__case_0)->values[0])->head;
$xs = (($__case_0)->values[0])->tail;
return ($bind2)(($p)($x), (function() use ($bind2, &$Data_List_Lazy_filterM, $dictMonad, $p, $xs, $pure1, &$Data_List_Lazy_Types_cons, $x) {
  $__fn = function($b) use ($bind2, &$Data_List_Lazy_filterM, $dictMonad, $p, $xs, $pure1, &$Data_List_Lazy_Types_cons, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind2)(($Data_List_Lazy_filterM)($dictMonad, $p, $xs), (function() use ($pure1, $b, &$Data_List_Lazy_Types_cons, $x) {
  $__fn = function($xs__prime__) use ($pure1, $b, &$Data_List_Lazy_Types_cons, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure1)((function() use ($b, &$Data_List_Lazy_Types_cons, $x, $xs__prime__) {
$__case_0 = $b;
if (($__case_0 === true)) {
return ($Data_List_Lazy_Types_cons)($x, $xs__prime__);
} else {
;
};
if (true) {
return $xs__prime__;
} else {
;
};
throw new \Exception("Pattern match failure");
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($p, $list = null) use (&$Data_List_Lazy_uncons, $pure1, &$Data_List_Lazy_Types_nil, $bind2, &$Data_List_Lazy_filterM, $dictMonad, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($p, $list);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($p, $list);
  };
  return $__fn;
})();
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_filter
$Data_List_Lazy_filter = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($p) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($p) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil) {
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_List_Lazy_Types_Nil) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
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
return ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Data_List_Lazy_compose)(($Data_List_Lazy_map)($go), $Data_List_Lazy_unwrap));
}
})($p);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_intersectBy
$Data_List_Lazy_intersectBy = (function() use (&$Data_List_Lazy_filter, &$Data_List_Lazy_any) {
  $__fn = function($eq, $xs = null, $ys = null) use (&$Data_List_Lazy_filter, &$Data_List_Lazy_any, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_filter)((function() use (&$Data_List_Lazy_any, $eq, $ys) {
  $__fn = function($x) use (&$Data_List_Lazy_any, $eq, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_any)(($eq)($x), $ys);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_intersect
$Data_List_Lazy_intersect = (function() use (&$Data_List_Lazy_intersectBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_intersectBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_intersectBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_nubByEq
$Data_List_Lazy_nubByEq = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_nubByEq, &$Data_List_Lazy_filter, &$Data_List_Lazy_not, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($eq) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_nubByEq, &$Data_List_Lazy_filter, &$Data_List_Lazy_not, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($eq) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_nubByEq, &$Data_List_Lazy_filter, &$Data_List_Lazy_not, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_nubByEq, $eq, &$Data_List_Lazy_filter, &$Data_List_Lazy_not) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_nubByEq, $eq, &$Data_List_Lazy_filter, &$Data_List_Lazy_not) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_Cons)($x, ($Data_List_Lazy_nubByEq)($eq, ($Data_List_Lazy_filter)((function() use (&$Data_List_Lazy_not, $eq, $x) {
  $__fn = function($y) use (&$Data_List_Lazy_not, $eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_not)(($eq)($x, $y));
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
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_nubByEq, $eq, &$Data_List_Lazy_filter, &$Data_List_Lazy_not, $__body, &$__fn) {
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
return ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Data_List_Lazy_compose)(($Data_List_Lazy_map)($go), $Data_List_Lazy_unwrap));
}
})($eq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_nubEq
$Data_List_Lazy_nubEq = (function() use (&$Data_List_Lazy_nubByEq, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_nubByEq, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_nubByEq)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_eqPattern
$Data_List_Lazy_eqPattern = (function() use (&$Data_Eq_eq, &$Data_List_Lazy_Types_eqList, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_Lazy_Types_eqList, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)(($Data_List_Lazy_Types_eqList)($dictEq));
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use ($eq) {
  $__body = function($x, $y) use ($eq) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($eq, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_ordPattern
$Data_List_Lazy_ordPattern = (function() use (&$Data_Ord_compare, &$Data_List_Lazy_Types_ordList, &$Data_List_Lazy_eqPattern, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_List_Lazy_Types_ordList, &$Data_List_Lazy_eqPattern, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)(($Data_List_Lazy_Types_ordList)($dictOrd));
$eqPattern1 = ($Data_List_Lazy_eqPattern)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare) {
  $__body = function($x, $y) use ($compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($compare)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqPattern1) {
  $__fn = function($__dollar____unused) use ($eqPattern1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqPattern1;
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

// Data_List_Lazy_elemLastIndex
$Data_List_Lazy_elemLastIndex = (function() use (&$Data_Eq_eq, &$Data_List_Lazy_findLastIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_Lazy_findLastIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_Lazy_findLastIndex, $eq) {
  $__fn = function($x) use (&$Data_List_Lazy_findLastIndex, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_findLastIndex)((function() use ($eq, $x) {
  $__fn = function($v) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eq)($v, $x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
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

// Data_List_Lazy_elemIndex
$Data_List_Lazy_elemIndex = (function() use (&$Data_Eq_eq, &$Data_List_Lazy_findIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_Lazy_findIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_Lazy_findIndex, $eq) {
  $__fn = function($x) use (&$Data_List_Lazy_findIndex, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_findIndex)((function() use ($eq, $x) {
  $__fn = function($v) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eq)($v, $x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
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

// Data_List_Lazy_dropWhile
$Data_List_Lazy_dropWhile = (function() use (&$Data_List_Lazy_fromStep, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_step) {
  $__fn = function($p) use (&$Data_List_Lazy_fromStep, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_fromStep) {
  $__fn = function($v) use (&$Data_List_Lazy_fromStep, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_List_Lazy_fromStep) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
$xs = $__case_0;
return ($Data_List_Lazy_fromStep)($xs);
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
    $__res = ($Data_List_Lazy_compose)($go, $Data_List_Lazy_Types_step);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_drop
$Data_List_Lazy_drop = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($n) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_compose, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$go, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_step) {
  $__fn = function($v, $v1 = null) use (&$Data_List_Lazy_Types_Nil, &$go, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_Lazy_Types_Nil, &$go, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_step) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$xs = $__case_1;
return $xs;
} else {
;
};
if ((($__case_1)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$xs = ($__case_1)->values[1];
$__tco_tmp_0 = ($Data_List_Lazy_sub)($n__prime__, 1);
$__tco_tmp_1 = ($Data_List_Lazy_Types_step)($xs);
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
    $__res = ($Data_List_Lazy_compose)($Data_List_Lazy_Types_List, ($Data_List_Lazy_compose)(($Data_List_Lazy_map)(($go)($n)), $Data_List_Lazy_unwrap));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_slice
$Data_List_Lazy_slice = (function() use (&$Data_List_Lazy_take, &$Data_List_Lazy_sub, &$Data_List_Lazy_drop) {
  $__fn = function($start, $end = null, $xs = null) use (&$Data_List_Lazy_take, &$Data_List_Lazy_sub, &$Data_List_Lazy_drop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_take)(($Data_List_Lazy_sub)($end, $start), ($Data_List_Lazy_drop)($start, $xs));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_deleteBy
$Data_List_Lazy_deleteBy = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($eq, $x = null, $xs = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($eq, $x, $xs) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Nil) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$y = ($__case_0)->values[0];
$ys = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, $__body, &$__fn) {
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
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)($go, ($Data_List_Lazy_unwrap)($xs)));
}
})($eq, $x, $xs);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_unionBy
$Data_List_Lazy_unionBy = (function() use (&$Data_List_Lazy_append1, &$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_deleteBy, &$Data_List_Lazy_nubByEq) {
  $__fn = function($eq, $xs = null, $ys = null) use (&$Data_List_Lazy_append1, &$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_deleteBy, &$Data_List_Lazy_nubByEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_append1)($xs, ($Data_List_Lazy_foldl)(($Data_Function_flip)(($Data_List_Lazy_deleteBy)($eq)), ($Data_List_Lazy_nubByEq)($eq, $ys), $xs));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_union
$Data_List_Lazy_union = (function() use (&$Data_List_Lazy_unionBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_unionBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_unionBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_deleteAt
$Data_List_Lazy_deleteAt = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_deleteAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($n, $xs = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_deleteAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($n, $xs) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_deleteAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_deleteAt, &$Data_List_Lazy_sub) {
  $__body = function($v, $v1) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_deleteAt, &$Data_List_Lazy_sub) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_step)($ys);
} else {
;
};
    if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_Cons)($y, ($Data_List_Lazy_deleteAt)(($Data_List_Lazy_sub)($n__prime__, 1), $ys));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_deleteAt, &$Data_List_Lazy_sub, $__body, &$__fn) {
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
})();
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)(($go)($n), ($Data_List_Lazy_unwrap)($xs)));
}
})($n, $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_delete
$Data_List_Lazy_delete = (function() use (&$Data_List_Lazy_deleteBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_deleteBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_deleteBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_difference
$Data_List_Lazy_difference = (function() use (&$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_delete) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_foldl, &$Data_Function_flip, &$Data_List_Lazy_delete, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_foldl)(($Data_Function_flip)(($Data_List_Lazy_delete)($dictEq)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_cycle
$Data_List_Lazy_cycle = (function() use (&$Data_List_Lazy_fix, &$Data_List_Lazy_append1) {
  $__fn = function($xs) use (&$Data_List_Lazy_fix, &$Data_List_Lazy_append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_fix)((function() use (&$Data_List_Lazy_append1, $xs) {
  $__fn = function($ys) use (&$Data_List_Lazy_append1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_append1)($xs, $ys);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_concatMap
$Data_List_Lazy_concatMap = ($Data_Function_flip)($Data_List_Lazy_bind1);

// Data_List_Lazy_concat
$Data_List_Lazy_concat = (function() use (&$Data_List_Lazy_bind1, &$Data_List_Lazy_identity) {
  $__fn = function($v) use (&$Data_List_Lazy_bind1, &$Data_List_Lazy_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_bind1)($v, $Data_List_Lazy_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_catMaybes
$Data_List_Lazy_catMaybes = ($Data_List_Lazy_mapMaybe)($Data_List_Lazy_identity);

// Data_List_Lazy_alterAt
$Data_List_Lazy_alterAt = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_alterAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
  $__fn = function($n, $f = null, $xs = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_alterAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($n, $f, $xs) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_alterAt, &$Data_List_Lazy_sub, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_map, &$Data_List_Lazy_unwrap) {
while (true) {
$go = (function() use (&$Data_List_Lazy_Types_Nil, $f, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_alterAt, &$Data_List_Lazy_sub) {
  $__body = function($v, $v1) use (&$Data_List_Lazy_Types_Nil, $f, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_alterAt, &$Data_List_Lazy_sub) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
$v2 = ($f)($y);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_List_Lazy_Types_step)($ys);
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$y__prime__ = ($__case_0)->values[0];
return ($Data_List_Lazy_Types_Cons)($y__prime__, $ys);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_Cons)($y, ($Data_List_Lazy_alterAt)(($Data_List_Lazy_sub)($n__prime__, 1), $f, $ys));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Lazy_Types_Nil, $f, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_List_Lazy_alterAt, &$Data_List_Lazy_sub, $__body, &$__fn) {
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
})();
return ($Data_List_Lazy_Types_List)(($Data_List_Lazy_map)(($go)($n), ($Data_List_Lazy_unwrap)($xs)));
}
})($n, $f, $xs);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_modifyAt
$Data_List_Lazy_modifyAt = (function() use (&$Data_List_Lazy_alterAt, &$Data_List_Lazy_compose, &$Data_Maybe_Just) {
  $__fn = function($n, $f = null) use (&$Data_List_Lazy_alterAt, &$Data_List_Lazy_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_alterAt)($n, ($Data_List_Lazy_compose)($Data_Maybe_Just, $f));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

