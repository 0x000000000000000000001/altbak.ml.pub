<?php

namespace Data\List;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
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
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_map
$Data_List_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_List_sub
$Data_List_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_List_foldr
$Data_List_foldr = ($Data_Foldable_foldr)($Data_List_Types_foldableList);

// Data_List_tailRecM2
$Data_List_tailRecM2 = ($Control_Monad_Rec_Class_tailRecM2)($Control_Monad_Rec_Class_monadRecMaybe);

// Data_List_eq
$Data_List_eq = ($Data_Eq_eq)($Data_Ordering_eqOrdering);

// Data_List_notEq
$Data_List_notEq = ($Data_Eq_notEq)($Data_Ordering_eqOrdering);

// Data_List_compose
$Data_List_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_List_append
$Data_List_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_List_lessThan
$Data_List_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_List_sequence
$Data_List_sequence = ($Data_Traversable_sequence)($Data_List_Types_traversableList);

// Data_List_eq1
$Data_List_eq1 = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_List_add
$Data_List_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_List_greaterThan
$Data_List_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_List_negate
$Data_List_negate = ($Data_Ring_negate)($Data_Ring_ringInt);

// Data_List_bimap
$Data_List_bimap = ($Data_Bifunctor_bimap)($Control_Monad_Rec_Class_bifunctorStep);

// Data_List_foldl
$Data_List_foldl = ($Data_Foldable_foldl)($Data_List_Types_foldableList);

// Data_List_any
$Data_List_any = ($Data_Foldable_any)($Data_List_Types_foldableList, $Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_List_not
$Data_List_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_List_append1
$Data_List_append1 = ($Data_Semigroup_append)($Data_List_Types_semigroupList);

// Data_List_bind
$Data_List_bind = ($Control_Bind_bind)($Data_List_Types_bindList);

// Data_List_identity
$Data_List_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_List_Pattern
$Data_List_Pattern = (function() {
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

// Data_List_updateAt
$Data_List_updateAt = (function() use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_updateAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_updateAt, &$Data_List_sub, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_updateAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$x = $__case_1;
$xs = ($__case_2)->values[1];
return ($Data_Maybe_Just)(($Data_List_Types_Cons)($x, $xs));
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$x = $__case_1;
$x1 = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return ($Data_List_map)((function() use (&$Data_List_Types_Cons, $x1) {
  $__fn = function($v3) use (&$Data_List_Types_Cons, $x1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($x1, $v3);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_updateAt)(($Data_List_sub)($n, 1), $x, $xs));
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
})($v, $v1, $v2);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_unzip
$Data_List_unzip = ($Data_List_foldr)((function() use (&$Data_Tuple_Tuple, &$Data_List_Types_Cons) {
  $__body = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Types_Cons) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Types_Cons, $a, $b) {
  $__body = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Types_Cons, $a, $b) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$as = ($__case_0)->values[0];
$bs = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)(($Data_List_Types_Cons)($a, $as), ($Data_List_Types_Cons)($b, $bs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Types_Cons, $a, $b, $__body, &$__fn) {
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
  $__fn = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Types_Cons, $__body, &$__fn) {
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
})(), ($Data_Tuple_Tuple)($Data_List_Types_Nil, $Data_List_Types_Nil));

// Data_List_uncons
$Data_List_uncons = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__body = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_Just)((object)["head" => $x, "tail" => $xs]);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $__body, &$__fn) {
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

// Data_List_toUnfoldable
$Data_List_toUnfoldable = (function() use (&$Data_Unfoldable_unfoldr, &$Data_List_map, &$Data_Tuple_Tuple, &$Data_List_uncons) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_List_map, &$Data_Tuple_Tuple, &$Data_List_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_unfoldr)($dictUnfoldable, (function() use (&$Data_List_map, &$Data_Tuple_Tuple, &$Data_List_uncons) {
  $__fn = function($xs) use (&$Data_List_map, &$Data_Tuple_Tuple, &$Data_List_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_map)((function() use (&$Data_Tuple_Tuple) {
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
})(), ($Data_List_uncons)($xs));
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

// Data_List_tail
$Data_List_tail = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__body = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
return ($Data_Maybe_Just)($xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $__body, &$__fn) {
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

// Data_List_stripPrefix
$Data_List_stripPrefix = (function() use (&$Data_Eq_eq, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_tailRecM2) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_tailRecM2) {
  $__body = function($v, $s) use (&$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_tailRecM2) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$p__prime__ = $__case_0;
$s1 = $__case_1;
$go = (function() use (&$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing) {
  $__body = function($prefix, $input) use (&$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing) {
    $__case_0 = $prefix;
    $__case_1 = $input;
    if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$p = ($__case_0)->values[0];
$ps = ($__case_0)->values[1];
$i = ($__case_1)->values[0];
$is = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if ((($__case_0)->tag === "Nil")) {
$is = $__case_1;
return ($Data_Maybe_Just)(($Control_Monad_Rec_Class_Done)($is));
} else {
;
};
    if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($prefix, $input = null) use (&$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
return ($Data_List_tailRecM2)($go, $p__prime__, $s1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use (&$Data_Maybe_Just, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Data_List_tailRecM2, $__body, &$__fn) {
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

// Data_List_span
$Data_List_span = (function() use (&$Data_List_Types_Nil) {
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_Types_Nil) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Cons")) {
$p = $__case_0;
$x = ($__case_1)->values[0];
$xs__prime__ = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
$xs = $__case_1;
return (object)["init" => $Data_List_Types_Nil, "rest" => $xs];
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

// Data_List_snoc
$Data_List_snoc = (function() use (&$Data_List_foldr, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($xs, $x = null) use (&$Data_List_foldr, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_foldr)($Data_List_Types_Cons, ($Data_List_Types_Cons)($x, $Data_List_Types_Nil), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_singleton
$Data_List_singleton = (function() use (&$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($a) use (&$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($a, $Data_List_Types_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_sortBy
$Data_List_sortBy = (function() use (&$Data_List_Types_Cons, &$Data_List_singleton, &$Data_List_compose) {
  $__fn = function($cmp) use (&$Data_List_Types_Cons, &$Data_List_singleton, &$Data_List_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$merge = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$as = $__case_0;
$a = ($__case_0)->values[0];
$as__prime__ = ($__case_0)->values[1];
$bs = $__case_1;
$b = ($__case_1)->values[0];
$bs__prime__ = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if ((($__case_0)->tag === "Nil")) {
$bs = $__case_1;
return $bs;
} else {
;
};
if ((($__case_1)->tag === "Nil")) {
$as = $__case_0;
return $as;
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
$mergePairs = (function() use (&$Data_List_Types_Cons, &$merge, &$mergePairs) {
  $__fn = function($v) use (&$Data_List_Types_Cons, &$merge, &$mergePairs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_List_Types_Cons, &$merge, &$mergePairs) {
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$b = (($__case_0)->values[1])->values[0];
$xs = (($__case_0)->values[1])->values[1];
return ($Data_List_Types_Cons)(($merge)($a, $b), ($mergePairs)($xs));
} else {
;
};
if (true) {
$xs = $__case_0;
return $xs;
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
$mergeAll = (function() use (&$mergeAll, &$mergePairs) {
  $__fn = function($v) use (&$mergeAll, &$mergePairs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$mergeAll, &$mergePairs) {
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
return $x;
} else {
;
};
if (true) {
$xs = $__case_0;
$__tco_tmp_0 = ($mergePairs)($xs);
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
$sequences = (function() use (&$Data_List_singleton) {
  $__fn = function($v) use (&$Data_List_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_List_singleton) {
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$b = (($__case_0)->values[1])->values[0];
$xs = (($__case_0)->values[1])->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
$xs = $__case_0;
return ($Data_List_singleton)($xs);
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
$descending = (function() use (&$Data_List_Types_Cons, &$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_Types_Cons, &$sequences, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_List_Types_Cons, &$sequences) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Cons")) {
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->values[0];
$bs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return ($Data_List_Types_Cons)(($Data_List_Types_Cons)($a, $as), ($sequences)($bs));
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
$ascending = (function() use (&$Data_List_Types_Cons, &$Data_List_singleton, &$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_Types_Cons, &$Data_List_singleton, &$sequences, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_List_Types_Cons, &$Data_List_singleton, &$sequences) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Cons")) {
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->values[0];
$bs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return ($Data_List_Types_Cons)(($as)(($Data_List_singleton)($a)), ($sequences)($bs));
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
    $__res = ($Data_List_compose)($mergeAll, $sequences);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_sort
$Data_List_sort = (function() use (&$Data_Ord_compare, &$Data_List_sortBy) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_List_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_List_sortBy, $compare) {
  $__fn = function($xs) use (&$Data_List_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_sortBy)($compare, $xs);
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

// Data_List_tails
$Data_List_tails = (function() use (&$Data_List_singleton, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_tails) {
  $__fn = function($v) use (&$Data_List_singleton, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_tails, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_List_singleton, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_tails) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return ($Data_List_singleton)($Data_List_Types_Nil);
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$list = $__case_0;
$tl = ($__case_0)->values[1];
return ($Data_List_Types_Cons)($list, ($Data_List_tails)($tl));
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

// Data_List_showPattern
$Data_List_showPattern = (function() use (&$Data_Show_show, &$Data_List_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_List_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_List_Types_showList)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_append, $show) {
  $__body = function($v) use (&$Data_List_append, $show) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($Data_List_append)("(Pattern ", ($Data_List_append)(($show)($s), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_append, $show, $__body, &$__fn) {
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

// Data_List_reverse
$Data_List_reverse = (function() use (&$Data_List_Types_Cons, &$Data_List_Types_Nil) {
$go = (function() use (&$go, &$Data_List_Types_Cons) {
  $__fn = function($v, $v1 = null) use (&$go, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$go, &$Data_List_Types_Cons) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_0;
return $acc;
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$__tco_tmp_0 = ($Data_List_Types_Cons)($x, $acc);
$__tco_tmp_1 = $xs;
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
return ($go)($Data_List_Types_Nil);
})();

// Data_List_take
$Data_List_take = (function() use (&$Data_List_reverse, &$Data_List_Types_Cons, &$Data_List_sub, &$Data_List_Types_Nil) {
$go = (function() use (&$Data_List_reverse, &$go, &$Data_List_Types_Cons, &$Data_List_sub) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_reverse, &$go, &$Data_List_Types_Cons, &$Data_List_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_List_reverse, &$go, &$Data_List_Types_Cons, &$Data_List_sub) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (true) {
$acc = $__case_0;
$n = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
if ((($__case_2)->tag === "Nil")) {
$acc = $__case_0;
return ($Data_List_reverse)($acc);
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$acc = $__case_0;
$n = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$__tco_tmp_0 = ($Data_List_Types_Cons)($x, $acc);
$__tco_tmp_1 = ($Data_List_sub)($n, 1);
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
return ($go)($Data_List_Types_Nil);
})();

// Data_List_takeWhile
$Data_List_takeWhile = (function() use (&$Data_List_reverse, &$Data_List_Types_Nil) {
  $__fn = function($p) use (&$Data_List_reverse, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_reverse) {
  $__fn = function($v, $v1 = null) use (&$Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_reverse) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if (true) {
$acc = $__case_0;
return ($Data_List_reverse)($acc);
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
    $__res = ($go)($Data_List_Types_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_unsnoc
$Data_List_unsnoc = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_reverse, &$Data_List_Types_Nil) {
  $__fn = function($lst) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_reverse, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$go, &$Data_List_Types_Cons) {
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$go, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$go, &$Data_List_Types_Cons) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
$acc = $__case_1;
return ($Data_Maybe_Just)((object)["revInit" => $acc, "last" => $x]);
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$acc = $__case_1;
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($Data_List_Types_Cons)($x, $acc);
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
    $__res = ($Data_List_map)((function() use (&$Data_List_reverse) {
  $__fn = function($h) use (&$Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["init" => ($Data_List_reverse)(($h)->revInit), "last" => ($h)->last];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($go)($lst, $Data_List_Types_Nil));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_zipWith
$Data_List_zipWith = (function() use (&$Data_List_Types_Cons, &$Data_List_reverse, &$Data_List_Types_Nil) {
  $__fn = function($f, $xs = null, $ys = null) use (&$Data_List_Types_Cons, &$Data_List_reverse, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, &$Data_List_Types_Cons, $f) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$Data_List_Types_Cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$go, &$Data_List_Types_Cons, $f) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_2;
return $acc;
} else {
;
};
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_2;
return $acc;
} else {
;
};
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$b = ($__case_1)->values[0];
$bs = ($__case_1)->values[1];
$acc = $__case_2;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = $bs;
$__tco_tmp_2 = ($Data_List_Types_Cons)(($f)($a, $b), $acc);
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
    $__res = ($Data_List_reverse)(($go)($xs, $ys, $Data_List_Types_Nil));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_zip
$Data_List_zip = ($Data_List_zipWith)($Data_Tuple_Tuple);

// Data_List_zipWithA
$Data_List_zipWithA = (function() use (&$Data_List_sequence, &$Data_List_zipWith) {
  $__fn = function($dictApplicative) use (&$Data_List_sequence, &$Data_List_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence1 = ($Data_List_sequence)($dictApplicative);
    $__res = (function() use ($sequence1, &$Data_List_zipWith) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$Data_List_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence1)(($Data_List_zipWith)($f, $xs, $ys));
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

// Data_List_range
$Data_List_range = (function() {
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

// Data_List_partition
$Data_List_partition = (function() use (&$Data_List_Types_Cons, &$Data_List_foldr, &$Data_List_Types_Nil) {
  $__fn = function($p, $xs = null) use (&$Data_List_Types_Cons, &$Data_List_foldr, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$select = (function() use ($p, &$Data_List_Types_Cons) {
  $__body = function($x, $v) use ($p, &$Data_List_Types_Cons) {
    $__case_0 = $x;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$x1 = $__case_0;
$no = ($__case_1)->no;
$yes = ($__case_1)->yes;
$__case_0 = ($p)($x1);
if (($__case_0 === true)) {
return (object)["no" => $no, "yes" => ($Data_List_Types_Cons)($x1, $yes)];
} else {
;
};
if (true) {
return (object)["no" => ($Data_List_Types_Cons)($x1, $no), "yes" => $yes];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $v = null) use ($p, &$Data_List_Types_Cons, $__body, &$__fn) {
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
    $__res = ($Data_List_foldr)($select, (object)["no" => $Data_List_Types_Nil, "yes" => $Data_List_Types_Nil], $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_null
$Data_List_null = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
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

// Data_List_nubBy
$Data_List_nubBy = (function() use (&$Data_List_Internal_insertAndLookupBy, &$Data_List_Types_Cons, &$Data_List_compose, &$Data_List_reverse, &$Data_List_Internal_emptySet, &$Data_List_Types_Nil) {
  $__fn = function($p) use (&$Data_List_Internal_insertAndLookupBy, &$Data_List_Types_Cons, &$Data_List_compose, &$Data_List_reverse, &$Data_List_Internal_emptySet, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Internal_insertAndLookupBy, $p, &$go, &$Data_List_Types_Cons) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_Internal_insertAndLookupBy, $p, &$go, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_List_Internal_insertAndLookupBy, $p, &$go, &$Data_List_Types_Cons) {
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
$s = $__case_0;
$acc = $__case_1;
$a = ($__case_2)->values[0];
$as = ($__case_2)->values[1];
$v3 = ($Data_List_Internal_insertAndLookupBy)($p, $a, $s);
$__case_0 = $v3;
if ((is_object)($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
if (($__case_0 === true)) {
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = $acc;
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
;
};
if (true) {
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = ($Data_List_Types_Cons)($a, $acc);
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
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
})($v, $v1, $v2);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($Data_List_compose)($Data_List_reverse, ($go)($Data_List_Internal_emptySet, $Data_List_Types_Nil));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_nub
$Data_List_nub = (function() use (&$Data_List_nubBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_List_nubBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_nubBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_newtypePattern
$Data_List_newtypePattern = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_List_mapMaybe
$Data_List_mapMaybe = (function() use (&$Data_List_reverse, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($f) use (&$Data_List_reverse, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_reverse, $f, &$go, &$Data_List_Types_Cons) {
  $__fn = function($v, $v1 = null) use (&$Data_List_reverse, $f, &$go, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_reverse, $f, &$go, &$Data_List_Types_Cons) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_0;
return ($Data_List_reverse)($acc);
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$v2 = ($f)($x);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$y = ($__case_0)->values[0];
$__tco_tmp_0 = ($Data_List_Types_Cons)($y, $acc);
$__tco_tmp_1 = $xs;
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
    $__res = ($go)($Data_List_Types_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_manyRec
$Data_List_manyRec = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Rec_Class_tailRecM, &$Control_Alt_alt, &$Data_Functor_map, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse, &$Data_List_Types_Nil) {
  $__fn = function($dictMonadRec) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Rec_Class_tailRecM, &$Control_Alt_alt, &$Data_Functor_map, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind1 = ($Control_Bind_bind)((((($dictMonadRec)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined));
$tailRecM = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
    $__res = (function() use (&$Prim_undefined, &$Control_Alt_alt, &$Data_Functor_map, &$Control_Applicative_pure, $bind1, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse, $tailRecM, &$Data_List_Types_Nil) {
  $__fn = function($dictAlternative) use (&$Prim_undefined, &$Control_Alt_alt, &$Data_Functor_map, &$Control_Applicative_pure, $bind1, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse, $tailRecM, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Alt0 = (((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined);
$alt = ($Control_Alt_alt)($Alt0);
$map1 = ($Data_Functor_map)((($Alt0)->Functor0)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictAlternative)->Applicative0)($Prim_undefined));
    $__res = (function() use ($bind1, $alt, $map1, &$Control_Monad_Rec_Class_Loop, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse, $tailRecM, &$Data_List_Types_Nil) {
  $__fn = function($p) use ($bind1, $alt, $map1, &$Control_Monad_Rec_Class_Loop, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse, $tailRecM, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($bind1, $alt, $map1, &$Control_Monad_Rec_Class_Loop, $p, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse) {
  $__fn = function($acc) use ($bind1, $alt, $map1, &$Control_Monad_Rec_Class_Loop, $p, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Unit_unit, &$Data_List_bimap, &$Data_List_Types_Cons, &$Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind1)(($alt)(($map1)($Control_Monad_Rec_Class_Loop, $p), ($pure)(($Control_Monad_Rec_Class_Done)($Data_Unit_unit))), (function() use ($pure, &$Data_List_bimap, &$Data_List_Types_Cons, $acc, &$Data_List_reverse) {
  $__fn = function($aa) use ($pure, &$Data_List_bimap, &$Data_List_Types_Cons, $acc, &$Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Data_List_bimap)((function() use (&$Data_List_Types_Cons, $acc) {
  $__fn = function($v) use (&$Data_List_Types_Cons, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($v, $acc);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), (function() use (&$Data_List_reverse, $acc) {
  $__fn = function($v) use (&$Data_List_reverse, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_reverse)($acc);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $aa));
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
    $__res = ($tailRecM)($go, $Data_List_Types_Nil);
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

// Data_List_someRec
$Data_List_someRec = (function() use (&$Data_List_manyRec, &$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Data_List_Types_Cons) {
  $__fn = function($dictMonadRec) use (&$Data_List_manyRec, &$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$manyRec1 = ($Data_List_manyRec)($dictMonadRec);
    $__res = (function() use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, $manyRec1, &$Data_List_Types_Cons) {
  $__fn = function($dictAlternative) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, $manyRec1, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)((((($dictAlternative)->Applicative0)($Prim_undefined))->Apply0)($Prim_undefined));
$map1 = ($Data_Functor_map)((((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined))->Functor0)($Prim_undefined));
$manyRec2 = ($manyRec1)($dictAlternative);
    $__res = (function() use ($apply, $map1, &$Data_List_Types_Cons, $manyRec2) {
  $__fn = function($v) use ($apply, $map1, &$Data_List_Types_Cons, $manyRec2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply)(($map1)($Data_List_Types_Cons, $v), ($manyRec2)($v));
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

// Data_List_some
$Data_List_some = (function() use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_List_Types_Cons, &$Data_List_many) {
  $__fn = function($dictAlternative) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_List_Types_Cons, &$Data_List_many, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictAlternative) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_List_Types_Cons, &$Data_List_many) {
while (true) {
$apply = ($Control_Apply_apply)((((($dictAlternative)->Applicative0)($Prim_undefined))->Apply0)($Prim_undefined));
$map1 = ($Data_Functor_map)((((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Lazy_defer, $apply, $map1, &$Data_List_Types_Cons, &$Data_List_many, $dictAlternative) {
  $__fn = function($dictLazy) use (&$Control_Lazy_defer, $apply, $map1, &$Data_List_Types_Cons, &$Data_List_many, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$defer = ($Control_Lazy_defer)($dictLazy);
    $__res = (function() use ($apply, $map1, &$Data_List_Types_Cons, $defer, &$Data_List_many, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply, $map1, &$Data_List_Types_Cons, $defer, &$Data_List_many, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply)(($map1)($Data_List_Types_Cons, $v), ($defer)((function() use (&$Data_List_many, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use (&$Data_List_many, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_many)($dictAlternative, $dictLazy, $v);
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

// Data_List_many
$Data_List_many = (function() use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_List_some, &$Data_List_Types_Nil) {
  $__fn = function($dictAlternative) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_List_some, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictAlternative) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_List_some, &$Data_List_Types_Nil) {
while (true) {
$alt = ($Control_Alt_alt)((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictAlternative)->Applicative0)($Prim_undefined));
return (function() use ($alt, &$Data_List_some, $dictAlternative, $pure, &$Data_List_Types_Nil) {
  $__fn = function($dictLazy, $v = null) use ($alt, &$Data_List_some, $dictAlternative, $pure, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($Data_List_some)($dictAlternative, $dictLazy, $v), ($pure)($Data_List_Types_Nil));
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

// Data_List_length
$Data_List_length = ($Data_List_foldl)((function() use (&$Data_List_add) {
  $__fn = function($acc, $v = null) use (&$Data_List_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_add)($acc, 1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), 0);

// Data_List_last
$Data_List_last = (function() use (&$Data_Maybe_Just, &$Data_List_last, &$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Just, &$Data_List_last, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_Maybe_Just, &$Data_List_last, &$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
return ($Data_Maybe_Just)($x);
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
$__tco_tmp_0 = $xs;
$v = $__tco_tmp_0;
continue;
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

// Data_List_insertBy
$Data_List_insertBy = (function() use (&$Data_List_singleton, &$Data_List_Types_Cons, &$Data_List_insertBy) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_singleton, &$Data_List_Types_Cons, &$Data_List_insertBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_List_singleton, &$Data_List_Types_Cons, &$Data_List_insertBy) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Nil")) {
$x = $__case_1;
return ($Data_List_singleton)($x);
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$cmp = $__case_0;
$x = $__case_1;
$ys = $__case_2;
$y = ($__case_2)->values[0];
$ys__prime__ = ($__case_2)->values[1];
$v3 = ($cmp)($x, $y);
$__case_0 = $v3;
if ((($__case_0)->tag === "GT")) {
return ($Data_List_Types_Cons)($y, ($Data_List_insertBy)($cmp, $x, $ys__prime__));
} else {
;
};
if (true) {
return ($Data_List_Types_Cons)($x, $ys);
} else {
;
};
throw new \Exception("Pattern match failure");
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

// Data_List_insertAt
$Data_List_insertAt = (function() use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_insertAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_insertAt, &$Data_List_sub, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_insertAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_0 === 0)) {
$x = $__case_1;
$xs = $__case_2;
return ($Data_Maybe_Just)(($Data_List_Types_Cons)($x, $xs));
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$x = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($Data_List_map)((function() use (&$Data_List_Types_Cons, $y) {
  $__fn = function($v3) use (&$Data_List_Types_Cons, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($y, $v3);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_insertAt)(($Data_List_sub)($n, 1), $x, $ys));
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
})($v, $v1, $v2);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_insert
$Data_List_insert = (function() use (&$Data_List_insertBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_List_insertBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_insertBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_init
$Data_List_init = (function() use (&$Data_List_map, &$Data_List_unsnoc) {
  $__fn = function($lst) use (&$Data_List_map, &$Data_List_unsnoc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_map)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v)->init;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_unsnoc)($lst));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_index
$Data_List_index = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_index, &$Data_List_sub) {
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_index, &$Data_List_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_index, &$Data_List_sub) {
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
$__tco_tmp_0 = $as;
$__tco_tmp_1 = ($Data_List_sub)($i, 1);
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

// Data_List_head
$Data_List_head = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__body = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
return ($Data_Maybe_Just)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $__body, &$__fn) {
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

// Data_List_transpose
$Data_List_transpose = (function() use (&$Data_List_Types_Nil, &$Data_List_transpose, &$Data_List_Types_Cons, &$Data_List_mapMaybe, &$Data_List_head, &$Data_List_tail) {
  $__fn = function($v) use (&$Data_List_Types_Nil, &$Data_List_transpose, &$Data_List_Types_Cons, &$Data_List_mapMaybe, &$Data_List_head, &$Data_List_tail, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$Data_List_Types_Nil, &$Data_List_transpose, &$Data_List_Types_Cons, &$Data_List_mapMaybe, &$Data_List_head, &$Data_List_tail) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[0])->tag === "Nil"))) {
$xss = ($__case_0)->values[1];
$__tco_tmp_0 = $xss;
$v = $__tco_tmp_0;
continue;
} else {
;
};
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[0])->tag === "Cons"))) {
$x = (($__case_0)->values[0])->values[0];
$xs = (($__case_0)->values[0])->values[1];
$xss = ($__case_0)->values[1];
return ($Data_List_Types_Cons)(($Data_List_Types_Cons)($x, ($Data_List_mapMaybe)($Data_List_head, $xss)), ($Data_List_transpose)(($Data_List_Types_Cons)($xs, ($Data_List_mapMaybe)($Data_List_tail, $xss))));
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

// Data_List_groupBy
$Data_List_groupBy = (function() use (&$Data_List_Types_Nil, &$Data_List_span, &$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_groupBy) {
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_Nil, &$Data_List_span, &$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_groupBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_Types_Nil, &$Data_List_span, &$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_groupBy) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$eq2 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$v2 = ($Data_List_span)(($eq2)($x), $xs);
$__case_0 = $v2;
if ((is_object)($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
return ($Data_List_Types_Cons)(($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x, $ys)), ($Data_List_groupBy)($eq2, $zs));
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

// Data_List_groupAllBy
$Data_List_groupAllBy = (function() use (&$Data_List_compose, &$Data_List_groupBy, &$Data_List_eq, &$Data_Ordering_EQ, &$Data_List_sortBy) {
  $__fn = function($p) use (&$Data_List_compose, &$Data_List_groupBy, &$Data_List_eq, &$Data_Ordering_EQ, &$Data_List_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_compose)(($Data_List_groupBy)((function() use (&$Data_List_eq, $p, &$Data_Ordering_EQ) {
  $__fn = function($x, $y = null) use (&$Data_List_eq, $p, &$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_eq)(($p)($x, $y), $Data_Ordering_EQ);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), ($Data_List_sortBy)($p));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_group
$Data_List_group = (function() use (&$Data_List_groupBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_groupBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_groupBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_groupAll
$Data_List_groupAll = (function() use (&$Data_List_compose, &$Data_List_group, &$Prim_undefined, &$Data_List_sort) {
  $__fn = function($dictOrd) use (&$Data_List_compose, &$Data_List_group, &$Prim_undefined, &$Data_List_sort, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_compose)(($Data_List_group)((($dictOrd)->Eq0)($Prim_undefined)), ($Data_List_sort)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_fromFoldable
$Data_List_fromFoldable = (function() use (&$Data_Foldable_foldr, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldr)($dictFoldable, $Data_List_Types_Cons, $Data_List_Types_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_foldM
$Data_List_foldM = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_foldM) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_foldM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_foldM) {
while (true) {
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind1 = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return (function() use ($pure, $bind1, &$Data_List_foldM, $dictMonad) {
  $__body = function($v, $v1, $v2) use ($pure, $bind1, &$Data_List_foldM, $dictMonad) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Nil")) {
$b = $__case_1;
return ($pure)($b);
} else {
;
};
    if ((($__case_2)->tag === "Cons")) {
$f = $__case_0;
$b = $__case_1;
$a = ($__case_2)->values[0];
$as = ($__case_2)->values[1];
return ($bind1)(($f)($b, $a), (function() use (&$Data_List_foldM, $dictMonad, $f, $as) {
  $__fn = function($b__prime__) use (&$Data_List_foldM, $dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_foldM)($dictMonad, $f, $b__prime__, $as);
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
  $__fn = function($v, $v1 = null, $v2 = null) use ($pure, $bind1, &$Data_List_foldM, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
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

// Data_List_findIndex
$Data_List_findIndex = (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($fn) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Cons")) {
$n = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if ((($__case_1)->tag === "Nil")) {
return $Data_Maybe_Nothing;
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
    $__res = ($go)(0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_findLastIndex
$Data_List_findLastIndex = (function() use (&$Data_List_map, &$Data_List_sub, &$Data_List_length, &$Data_List_findIndex, &$Data_List_reverse) {
  $__fn = function($fn, $xs = null) use (&$Data_List_map, &$Data_List_sub, &$Data_List_length, &$Data_List_findIndex, &$Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_map)((function() use (&$Data_List_sub, &$Data_List_length, $xs) {
  $__fn = function($v) use (&$Data_List_sub, &$Data_List_length, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_sub)(($Data_List_sub)(($Data_List_length)($xs), 1), $v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_findIndex)($fn, ($Data_List_reverse)($xs)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_filterM
$Data_List_filterM = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Types_Nil, &$Data_List_filterM, &$Data_List_Types_Cons) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Types_Nil, &$Data_List_filterM, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_List_Types_Nil, &$Data_List_filterM, &$Data_List_Types_Cons) {
while (true) {
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind1 = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return (function() use ($pure, &$Data_List_Types_Nil, $bind1, &$Data_List_filterM, $dictMonad, &$Data_List_Types_Cons) {
  $__body = function($v, $v1) use ($pure, &$Data_List_Types_Nil, $bind1, &$Data_List_filterM, $dictMonad, &$Data_List_Types_Cons) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return ($pure)($Data_List_Types_Nil);
} else {
;
};
    if ((($__case_1)->tag === "Cons")) {
$p = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($bind1)(($p)($x), (function() use ($bind1, &$Data_List_filterM, $dictMonad, $p, $xs, $pure, &$Data_List_Types_Cons, $x) {
  $__fn = function($b) use ($bind1, &$Data_List_filterM, $dictMonad, $p, $xs, $pure, &$Data_List_Types_Cons, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind1)(($Data_List_filterM)($dictMonad, $p, $xs), (function() use ($pure, $b, &$Data_List_Types_Cons, $x) {
  $__fn = function($xs__prime__) use ($pure, $b, &$Data_List_Types_Cons, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)((function() use ($b, &$Data_List_Types_Cons, $x, $xs__prime__) {
$__case_0 = $b;
if (($__case_0 === true)) {
return ($Data_List_Types_Cons)($x, $xs__prime__);
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
  $__fn = function($v, $v1 = null) use ($pure, &$Data_List_Types_Nil, $bind1, &$Data_List_filterM, $dictMonad, &$Data_List_Types_Cons, $__body, &$__fn) {
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

// Data_List_filter
$Data_List_filter = (function() use (&$Data_List_reverse, &$Data_List_Types_Nil) {
  $__fn = function($p) use (&$Data_List_reverse, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_reverse) {
  $__fn = function($v, $v1 = null) use (&$Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_reverse) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_0;
return ($Data_List_reverse)($acc);
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
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
    $__res = ($go)($Data_List_Types_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_intersectBy
$Data_List_intersectBy = (function() use (&$Data_List_Types_Nil, &$Data_List_filter, &$Data_List_any) {
  $__body = function($v, $v1, $v2) use (&$Data_List_Types_Nil, &$Data_List_filter, &$Data_List_any) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
    if ((($__case_2)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
    if (true) {
$eq2 = $__case_0;
$xs = $__case_1;
$ys = $__case_2;
return ($Data_List_filter)((function() use (&$Data_List_any, $eq2, $ys) {
  $__fn = function($x) use (&$Data_List_any, $eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_any)(($eq2)($x), $ys);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_Types_Nil, &$Data_List_filter, &$Data_List_any, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})();

// Data_List_intersect
$Data_List_intersect = (function() use (&$Data_List_intersectBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_intersectBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_intersectBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_nubByEq
$Data_List_nubByEq = (function() use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_nubByEq, &$Data_List_filter, &$Data_List_not) {
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_nubByEq, &$Data_List_filter, &$Data_List_not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_nubByEq, &$Data_List_filter, &$Data_List_not) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$eq__prime__ = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($Data_List_Types_Cons)($x, ($Data_List_nubByEq)($eq__prime__, ($Data_List_filter)((function() use (&$Data_List_not, $eq__prime__, $x) {
  $__fn = function($y) use (&$Data_List_not, $eq__prime__, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_not)(($eq__prime__)($x, $y));
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
})($v, $v1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_nubEq
$Data_List_nubEq = (function() use (&$Data_List_nubByEq, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_nubByEq, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_nubByEq)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_eqPattern
$Data_List_eqPattern = (function() use (&$Data_Eq_eq, &$Data_List_Types_eqList, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_Types_eqList, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)(($Data_List_Types_eqList)($dictEq));
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use ($eq2) {
  $__body = function($x, $y) use ($eq2) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq2)($l, $r);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($eq2, $__body, &$__fn) {
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

// Data_List_ordPattern
$Data_List_ordPattern = (function() use (&$Data_Ord_compare, &$Data_List_Types_ordList, &$Data_List_eqPattern, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_List_Types_ordList, &$Data_List_eqPattern, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)(($Data_List_Types_ordList)($dictOrd));
$eqPattern1 = ($Data_List_eqPattern)((($dictOrd)->Eq0)($Prim_undefined));
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

// Data_List_elemLastIndex
$Data_List_elemLastIndex = (function() use (&$Data_Eq_eq, &$Data_List_findLastIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_findLastIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_findLastIndex, $eq2) {
  $__fn = function($x) use (&$Data_List_findLastIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_findLastIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eq2)($v, $x);
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

// Data_List_elemIndex
$Data_List_elemIndex = (function() use (&$Data_Eq_eq, &$Data_List_findIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_findIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_findIndex, $eq2) {
  $__fn = function($x) use (&$Data_List_findIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_findIndex)((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eq2)($v, $x);
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

// Data_List_dropWhile
$Data_List_dropWhile = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) {
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
return $xs;
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

// Data_List_dropEnd
$Data_List_dropEnd = (function() use (&$Data_List_take, &$Data_List_sub, &$Data_List_length) {
  $__fn = function($n, $xs = null) use (&$Data_List_take, &$Data_List_sub, &$Data_List_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_take)(($Data_List_sub)(($Data_List_length)($xs), $n), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_drop
$Data_List_drop = (function() use (&$Data_List_Types_Nil, &$Data_List_drop, &$Data_List_sub) {
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_Nil, &$Data_List_drop, &$Data_List_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_List_Types_Nil, &$Data_List_drop, &$Data_List_sub) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (true) {
$n = $__case_0;
$xs = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
if ((($__case_1)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$n = $__case_0;
$xs = ($__case_1)->values[1];
$__tco_tmp_0 = ($Data_List_sub)($n, 1);
$__tco_tmp_1 = $xs;
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

// Data_List_slice
$Data_List_slice = (function() use (&$Data_List_take, &$Data_List_sub, &$Data_List_drop) {
  $__fn = function($start, $end = null, $xs = null) use (&$Data_List_take, &$Data_List_sub, &$Data_List_drop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_take)(($Data_List_sub)($end, $start), ($Data_List_drop)($start, $xs));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_takeEnd
$Data_List_takeEnd = (function() use (&$Data_List_drop, &$Data_List_sub, &$Data_List_length) {
  $__fn = function($n, $xs = null) use (&$Data_List_drop, &$Data_List_sub, &$Data_List_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_drop)(($Data_List_sub)(($Data_List_length)($xs), $n), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_deleteBy
$Data_List_deleteBy = (function() use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_deleteBy) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_deleteBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_deleteBy) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($Data_List_Types_Cons)($y, ($Data_List_deleteBy)($eq__prime__, $x, $ys));
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

// Data_List_unionBy
$Data_List_unionBy = (function() use (&$Data_List_append1, &$Data_List_foldl, &$Data_Function_flip, &$Data_List_deleteBy, &$Data_List_nubByEq) {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$Data_List_append1, &$Data_List_foldl, &$Data_Function_flip, &$Data_List_deleteBy, &$Data_List_nubByEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_append1)($xs, ($Data_List_foldl)(($Data_Function_flip)(($Data_List_deleteBy)($eq2)), ($Data_List_nubByEq)($eq2, $ys), $xs));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_union
$Data_List_union = (function() use (&$Data_List_unionBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_unionBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_unionBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_deleteAt
$Data_List_deleteAt = (function() use (&$Data_Maybe_Just, &$Data_List_map, &$Data_List_Types_Cons, &$Data_List_deleteAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Just, &$Data_List_map, &$Data_List_Types_Cons, &$Data_List_deleteAt, &$Data_List_sub, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_Maybe_Just, &$Data_List_map, &$Data_List_Types_Cons, &$Data_List_deleteAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->values[1];
return ($Data_Maybe_Just)($ys);
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$n = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($Data_List_map)((function() use (&$Data_List_Types_Cons, $y) {
  $__fn = function($v2) use (&$Data_List_Types_Cons, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($y, $v2);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_deleteAt)(($Data_List_sub)($n, 1), $ys));
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
})($v, $v1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_delete
$Data_List_delete = (function() use (&$Data_List_deleteBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_List_deleteBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_deleteBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_difference
$Data_List_difference = (function() use (&$Data_List_foldl, &$Data_Function_flip, &$Data_List_delete) {
  $__fn = function($dictEq) use (&$Data_List_foldl, &$Data_Function_flip, &$Data_List_delete, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_foldl)(($Data_Function_flip)(($Data_List_delete)($dictEq)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_concatMap
$Data_List_concatMap = ($Data_Function_flip)($Data_List_bind);

// Data_List_concat
$Data_List_concat = (function() use (&$Data_List_bind, &$Data_List_identity) {
  $__fn = function($v) use (&$Data_List_bind, &$Data_List_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_bind)($v, $Data_List_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_catMaybes
$Data_List_catMaybes = ($Data_List_mapMaybe)($Data_List_identity);

// Data_List_alterAt
$Data_List_alterAt = (function() use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_alterAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_alterAt, &$Data_List_sub, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$Data_Maybe_Just, &$Data_List_Types_Cons, &$Data_List_map, &$Data_List_alterAt, &$Data_List_sub, &$Data_Maybe_Nothing) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$f = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($Data_Maybe_Just)((function() use ($f, $y, $ys, &$Data_List_Types_Cons) {
$v3 = ($f)($y);
return (function() use ($v3, $ys, &$Data_List_Types_Cons) {
$__case_0 = $v3;
if ((($__case_0)->tag === "Nothing")) {
return $ys;
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$y__prime__ = ($__case_0)->values[0];
return ($Data_List_Types_Cons)($y__prime__, $ys);
} else {
;
};
throw new \Exception("Pattern match failure");
})();
})());
} else {
;
};
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$f = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($Data_List_map)((function() use (&$Data_List_Types_Cons, $y) {
  $__fn = function($v3) use (&$Data_List_Types_Cons, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($y, $v3);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_alterAt)(($Data_List_sub)($n, 1), $f, $ys));
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
})($v, $v1, $v2);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_modifyAt
$Data_List_modifyAt = (function() use (&$Data_List_alterAt, &$Data_List_compose, &$Data_Maybe_Just) {
  $__fn = function($n, $f = null) use (&$Data_List_alterAt, &$Data_List_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_alterAt)($n, ($Data_List_compose)($Data_Maybe_Just, $f));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

