<?php

namespace Data\List\NonEmpty;

require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_NonEmpty_sequence1
$Data_List_NonEmpty_sequence1 = ($Data_Semigroup_Traversable_sequence1)($Data_List_Types_traversable1NonEmptyList);

// Data_List_NonEmpty_append
$Data_List_NonEmpty_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_List_NonEmpty_eq
$Data_List_NonEmpty_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_List_NonEmpty_map
$Data_List_NonEmpty_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_List_NonEmpty_compose
$Data_List_NonEmpty_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_List_NonEmpty_sub
$Data_List_NonEmpty_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_List_NonEmpty_map1
$Data_List_NonEmpty_map1 = ($Data_Functor_map)($Data_List_Types_functorNonEmptyList);

// Data_List_NonEmpty_add
$Data_List_NonEmpty_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_List_NonEmpty_bind
$Data_List_NonEmpty_bind = ($Control_Bind_bind)($Data_List_Types_bindNonEmptyList);

// Data_List_NonEmpty_identity
$Data_List_NonEmpty_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_List_NonEmpty_append1
$Data_List_NonEmpty_append1 = ($Data_Semigroup_append)($Data_List_Types_semigroupList);

// Data_List_NonEmpty_zipWith
$Data_List_NonEmpty_zipWith = (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_zipWith) {
  $__body = function($f, $v, $v1) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_zipWith) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (((($__case_1)->tag === "NonEmpty") && (($__case_2)->tag === "NonEmpty"))) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)(($f1)($x, $y), ($Data_List_zipWith)($f1, $xs, $ys)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_zipWith, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $v, $v1);
  };
  return $__fn;
})();

// Data_List_NonEmpty_zipWithA
$Data_List_NonEmpty_zipWithA = (function() use (&$Data_List_NonEmpty_sequence1, &$Prim_undefined, &$Data_List_NonEmpty_zipWith) {
  $__fn = function($dictApplicative) use (&$Data_List_NonEmpty_sequence1, &$Prim_undefined, &$Data_List_NonEmpty_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence11 = ($Data_List_NonEmpty_sequence1)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = (function() use ($sequence11, &$Data_List_NonEmpty_zipWith) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence11, &$Data_List_NonEmpty_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence11)(($Data_List_NonEmpty_zipWith)($f, $xs, $ys));
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

// Data_List_NonEmpty_zip
$Data_List_NonEmpty_zip = ($Data_List_NonEmpty_zipWith)($Data_Tuple_Tuple);

// Data_List_NonEmpty_wrappedOperation2
$Data_List_NonEmpty_wrappedOperation2 = (function() use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_NonEmpty_append) {
  $__body = function($name, $f, $v, $v1) use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_NonEmpty_append) {
    $__case_0 = $name;
    $__case_1 = $f;
    $__case_2 = $v;
    $__case_3 = $v1;
    if (((($__case_2)->tag === "NonEmpty") && (($__case_3)->tag === "NonEmpty"))) {
$name1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$y = ($__case_3)->values[0];
$ys = ($__case_3)->values[1];
$v2 = ($f1)(($Data_List_Types_Cons)($x, $xs), ($Data_List_Types_Cons)($y, $ys));
$__case_0 = $v2;
if ((($__case_0)->tag === "Cons")) {
$x__prime__ = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x__prime__, $xs__prime__));
} else {
;
};
if ((($__case_0)->tag === "Nil")) {
return ($Partial_Unsafe_unsafeCrashWith)(($Data_List_NonEmpty_append)("Impossible: empty list in NonEmptyList ", $name1));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($name, $f = null, $v = null, $v1 = null) use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_NonEmpty_append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($name, $f, $v, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($name, $f, $v, $v1);
  };
  return $__fn;
})();

// Data_List_NonEmpty_wrappedOperation
$Data_List_NonEmpty_wrappedOperation = (function() use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_NonEmpty_append) {
  $__body = function($name, $f, $v) use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_NonEmpty_append) {
    $__case_0 = $name;
    $__case_1 = $f;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$name1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$v1 = ($f1)(($Data_List_Types_Cons)($x, $xs));
$__case_0 = $v1;
if ((($__case_0)->tag === "Cons")) {
$x__prime__ = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x__prime__, $xs__prime__));
} else {
;
};
if ((($__case_0)->tag === "Nil")) {
return ($Partial_Unsafe_unsafeCrashWith)(($Data_List_NonEmpty_append)("Impossible: empty list in NonEmptyList ", $name1));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($name, $f = null, $v = null) use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Partial_Unsafe_unsafeCrashWith, &$Data_List_NonEmpty_append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($name, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($name, $f, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_updateAt
$Data_List_NonEmpty_updateAt = (function() {
  $__body = function($i, $a, $v) {
    $__case_0 = $i;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$i1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($i, $a = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($i, $a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($i, $a, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_unzip
$Data_List_NonEmpty_unzip = (function() use (&$Data_Tuple_Tuple, &$Data_List_NonEmpty_map1, &$Data_Tuple_fst, &$Data_Tuple_snd) {
  $__fn = function($ts) use (&$Data_Tuple_Tuple, &$Data_List_NonEmpty_map1, &$Data_Tuple_fst, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_List_NonEmpty_map1)($Data_Tuple_fst, $ts), ($Data_List_NonEmpty_map1)($Data_Tuple_snd, $ts));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_unsnoc
$Data_List_NonEmpty_unsnoc = (function() use (&$Data_List_unsnoc, &$Data_List_Types_Nil, &$Data_List_Types_Cons) {
  $__body = function($v) use (&$Data_List_unsnoc, &$Data_List_Types_Nil, &$Data_List_Types_Cons) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$v1 = ($Data_List_unsnoc)($xs);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return (object)["init" => $Data_List_Types_Nil, "last" => $x];
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$un = ($__case_0)->values[0];
return (object)["init" => ($Data_List_Types_Cons)($x, ($un)->init), "last" => ($un)->last];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_unsnoc, &$Data_List_Types_Nil, &$Data_List_Types_Cons, $__body, &$__fn) {
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

// Data_List_NonEmpty_unionBy
$Data_List_NonEmpty_unionBy = ($Data_List_NonEmpty_compose)(($Data_List_NonEmpty_wrappedOperation2)("unionBy"), $Data_List_unionBy);

// Data_List_NonEmpty_union
$Data_List_NonEmpty_union = (function() use (&$Data_List_NonEmpty_wrappedOperation2, &$Data_List_union) {
  $__fn = function($dictEq) use (&$Data_List_NonEmpty_wrappedOperation2, &$Data_List_union, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_wrappedOperation2)("union", ($Data_List_union)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_uncons
$Data_List_NonEmpty_uncons = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return (object)["head" => $x, "tail" => $xs];
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

// Data_List_NonEmpty_toList
$Data_List_NonEmpty_toList = (function() use (&$Data_List_Types_Cons) {
  $__body = function($v) use (&$Data_List_Types_Cons) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_List_Types_Cons)($x, $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Types_Cons, $__body, &$__fn) {
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

// Data_List_NonEmpty_toUnfoldable
$Data_List_NonEmpty_toUnfoldable = (function() use (&$Data_List_NonEmpty_compose, &$Data_Unfoldable_unfoldr, &$Data_List_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_uncons, &$Data_List_NonEmpty_toList) {
  $__fn = function($dictUnfoldable) use (&$Data_List_NonEmpty_compose, &$Data_Unfoldable_unfoldr, &$Data_List_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_uncons, &$Data_List_NonEmpty_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_compose)(($Data_Unfoldable_unfoldr)($dictUnfoldable, (function() use (&$Data_List_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_uncons) {
  $__fn = function($xs) use (&$Data_List_NonEmpty_map, &$Data_Tuple_Tuple, &$Data_List_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_map)((function() use (&$Data_Tuple_Tuple) {
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
})()), $Data_List_NonEmpty_toList);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_tail
$Data_List_NonEmpty_tail = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return $xs;
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

// Data_List_NonEmpty_sortBy
$Data_List_NonEmpty_sortBy = ($Data_List_NonEmpty_compose)(($Data_List_NonEmpty_wrappedOperation)("sortBy"), $Data_List_sortBy);

// Data_List_NonEmpty_sort
$Data_List_NonEmpty_sort = (function() use (&$Data_Ord_compare, &$Data_List_NonEmpty_sortBy) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_List_NonEmpty_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_List_NonEmpty_sortBy, $compare) {
  $__fn = function($xs) use (&$Data_List_NonEmpty_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_sortBy)($compare, $xs);
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

// Data_List_NonEmpty_snoc
$Data_List_NonEmpty_snoc = (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_snoc) {
  $__body = function($v, $y) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_snoc) {
    $__case_0 = $v;
    $__case_1 = $y;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$y1 = $__case_1;
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x, ($Data_List_snoc)($xs, $y1)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $y = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_snoc, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $y);
  };
  return $__fn;
})();

// Data_List_NonEmpty_singleton
$Data_List_NonEmpty_singleton = ($Data_List_NonEmpty_compose)($Data_List_Types_NonEmptyList, ($Data_NonEmpty_singleton)($Data_List_Types_plusList));

// Data_List_NonEmpty_snoc'
$Data_List_NonEmpty_snoc__prime__ = (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_snoc, &$Data_List_NonEmpty_singleton) {
  $__body = function($v, $v1) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_snoc, &$Data_List_NonEmpty_singleton) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$y = $__case_1;
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x, ($Data_List_snoc)($xs, $y)));
} else {
;
};
    if ((($__case_0)->tag === "Nil")) {
$y = $__case_1;
return ($Data_List_NonEmpty_singleton)($y);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_snoc, &$Data_List_NonEmpty_singleton, $__body, &$__fn) {
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

// Data_List_NonEmpty_reverse
$Data_List_NonEmpty_reverse = ($Data_List_NonEmpty_wrappedOperation)("reverse", $Data_List_reverse);

// Data_List_NonEmpty_nubEq
$Data_List_NonEmpty_nubEq = (function() use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_nubEq) {
  $__fn = function($dictEq) use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_nubEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_wrappedOperation)("nubEq", ($Data_List_nubEq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_nubByEq
$Data_List_NonEmpty_nubByEq = ($Data_List_NonEmpty_compose)(($Data_List_NonEmpty_wrappedOperation)("nubByEq"), $Data_List_nubByEq);

// Data_List_NonEmpty_nubBy
$Data_List_NonEmpty_nubBy = ($Data_List_NonEmpty_compose)(($Data_List_NonEmpty_wrappedOperation)("nubBy"), $Data_List_nubBy);

// Data_List_NonEmpty_nub
$Data_List_NonEmpty_nub = (function() use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_nub) {
  $__fn = function($dictOrd) use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_nub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_wrappedOperation)("nub", ($Data_List_nub)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_modifyAt
$Data_List_NonEmpty_modifyAt = (function() {
  $__body = function($i, $f, $v) {
    $__case_0 = $i;
    $__case_1 = $f;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$i1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($i, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($i, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($i, $f, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_lift
$Data_List_NonEmpty_lift = (function() use (&$Data_List_Types_Cons) {
  $__body = function($f, $v) use (&$Data_List_Types_Cons) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($f1)(($Data_List_Types_Cons)($x, $xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_List_Types_Cons, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_mapMaybe
$Data_List_NonEmpty_mapMaybe = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_mapMaybe);

// Data_List_NonEmpty_partition
$Data_List_NonEmpty_partition = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_partition);

// Data_List_NonEmpty_span
$Data_List_NonEmpty_span = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_span);

// Data_List_NonEmpty_take
$Data_List_NonEmpty_take = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_take);

// Data_List_NonEmpty_takeWhile
$Data_List_NonEmpty_takeWhile = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_takeWhile);

// Data_List_NonEmpty_length
$Data_List_NonEmpty_length = (function() use (&$Data_List_NonEmpty_add, &$Data_List_length) {
  $__body = function($v) use (&$Data_List_NonEmpty_add, &$Data_List_length) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return ($Data_List_NonEmpty_add)(1, ($Data_List_length)($xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_NonEmpty_add, &$Data_List_length, $__body, &$__fn) {
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

// Data_List_NonEmpty_last
$Data_List_NonEmpty_last = (function() use (&$Data_Maybe_fromMaybe, &$Data_List_last) {
  $__body = function($v) use (&$Data_Maybe_fromMaybe, &$Data_List_last) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_fromMaybe)($x, ($Data_List_last)($xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_fromMaybe, &$Data_List_last, $__body, &$__fn) {
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

// Data_List_NonEmpty_intersectBy
$Data_List_NonEmpty_intersectBy = ($Data_List_NonEmpty_compose)(($Data_List_NonEmpty_wrappedOperation2)("intersectBy"), $Data_List_intersectBy);

// Data_List_NonEmpty_intersect
$Data_List_NonEmpty_intersect = (function() use (&$Data_List_NonEmpty_wrappedOperation2, &$Data_List_intersect) {
  $__fn = function($dictEq) use (&$Data_List_NonEmpty_wrappedOperation2, &$Data_List_intersect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_wrappedOperation2)("intersect", ($Data_List_intersect)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_insertAt
$Data_List_NonEmpty_insertAt = (function() {
  $__body = function($i, $a, $v) {
    $__case_0 = $i;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$i1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($i, $a = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($i, $a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($i, $a, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_init
$Data_List_NonEmpty_init = (function() use (&$Data_Maybe_maybe, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_init) {
  $__body = function($v) use (&$Data_Maybe_maybe, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_init) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_maybe)($Data_List_Types_Nil, (function() use (&$Data_List_Types_Cons, $x) {
  $__fn = function($v1) use (&$Data_List_Types_Cons, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)($x, $v1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_List_init)($xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_maybe, &$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_init, $__body, &$__fn) {
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

// Data_List_NonEmpty_index
$Data_List_NonEmpty_index = (function() {
  $__body = function($v, $i) {
    $__case_0 = $v;
    $__case_1 = $i;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$i1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $i = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $i);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $i);
  };
  return $__fn;
})();

// Data_List_NonEmpty_head
$Data_List_NonEmpty_head = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
return $x;
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

// Data_List_NonEmpty_groupBy
$Data_List_NonEmpty_groupBy = ($Data_List_NonEmpty_compose)(($Data_List_NonEmpty_wrappedOperation)("groupBy"), $Data_List_groupBy);

// Data_List_NonEmpty_groupAllBy
$Data_List_NonEmpty_groupAllBy = ($Data_List_NonEmpty_compose)(($Data_List_NonEmpty_wrappedOperation)("groupAllBy"), $Data_List_groupAllBy);

// Data_List_NonEmpty_groupAll
$Data_List_NonEmpty_groupAll = (function() use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_groupAll) {
  $__fn = function($dictOrd) use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_groupAll, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_wrappedOperation)("groupAll", ($Data_List_groupAll)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_group
$Data_List_NonEmpty_group = (function() use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_group) {
  $__fn = function($dictEq) use (&$Data_List_NonEmpty_wrappedOperation, &$Data_List_group, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_wrappedOperation)("group", ($Data_List_group)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_fromList
$Data_List_NonEmpty_fromList = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty) {
  $__body = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_Just)(($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x, $xs)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, $__body, &$__fn) {
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

// Data_List_NonEmpty_fromFoldable
$Data_List_NonEmpty_fromFoldable = (function() use (&$Data_List_NonEmpty_compose, &$Data_List_NonEmpty_fromList, &$Data_List_fromFoldable) {
  $__fn = function($dictFoldable) use (&$Data_List_NonEmpty_compose, &$Data_List_NonEmpty_fromList, &$Data_List_fromFoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_fromList, ($Data_List_fromFoldable)($dictFoldable));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_foldM
$Data_List_NonEmpty_foldM = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Data_List_foldM) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Data_List_foldM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind1 = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$foldM1 = ($Data_List_foldM)($dictMonad);
    $__res = (function() use ($bind1, $foldM1) {
  $__body = function($f, $b, $v) use ($bind1, $foldM1) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->values[0];
$as = ($__case_2)->values[1];
return ($bind1)(($f1)($b1, $a), (function() use ($foldM1, $f1, $as) {
  $__fn = function($b__prime__) use ($foldM1, $f1, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldM1)($f1, $b__prime__, $as);
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
  $__fn = function($f, $b = null, $v = null) use ($bind1, $foldM1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $b, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $b, $v);
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

// Data_List_NonEmpty_findLastIndex
$Data_List_NonEmpty_findLastIndex = (function() use (&$Data_List_findLastIndex, &$Data_Maybe_Just, &$Data_List_NonEmpty_add) {
  $__body = function($f, $v) use (&$Data_List_findLastIndex, &$Data_Maybe_Just, &$Data_List_NonEmpty_add) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$v1 = ($Data_List_findLastIndex)($f1, $xs);
$__case_0 = $v1;
if ((($__case_0)->tag === "Just")) {
$i = ($__case_0)->values[0];
return ($Data_Maybe_Just)(($Data_List_NonEmpty_add)($i, 1));
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return "/* Unsupported: Guards not supported */";
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_List_findLastIndex, &$Data_Maybe_Just, &$Data_List_NonEmpty_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_findIndex
$Data_List_NonEmpty_findIndex = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_filterM
$Data_List_NonEmpty_filterM = (function() use (&$Data_List_NonEmpty_compose, &$Data_List_NonEmpty_lift, &$Data_List_filterM) {
  $__fn = function($dictMonad) use (&$Data_List_NonEmpty_compose, &$Data_List_NonEmpty_lift, &$Data_List_filterM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, ($Data_List_filterM)($dictMonad));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_filter
$Data_List_NonEmpty_filter = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_filter);

// Data_List_NonEmpty_elemLastIndex
$Data_List_NonEmpty_elemLastIndex = (function() use (&$Data_Eq_eq, &$Data_List_NonEmpty_findLastIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_NonEmpty_findLastIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_NonEmpty_findLastIndex, $eq1) {
  $__fn = function($x) use (&$Data_List_NonEmpty_findLastIndex, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_findLastIndex)((function() use ($eq1, $x) {
  $__fn = function($v) use ($eq1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eq1)($v, $x);
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

// Data_List_NonEmpty_elemIndex
$Data_List_NonEmpty_elemIndex = (function() use (&$Data_Eq_eq, &$Data_List_NonEmpty_findIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_NonEmpty_findIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_NonEmpty_findIndex, $eq1) {
  $__fn = function($x) use (&$Data_List_NonEmpty_findIndex, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_findIndex)((function() use ($eq1, $x) {
  $__fn = function($v) use ($eq1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($eq1)($v, $x);
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

// Data_List_NonEmpty_dropWhile
$Data_List_NonEmpty_dropWhile = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_dropWhile);

// Data_List_NonEmpty_drop
$Data_List_NonEmpty_drop = ($Data_List_NonEmpty_compose)($Data_List_NonEmpty_lift, $Data_List_drop);

// Data_List_NonEmpty_cons'
$Data_List_NonEmpty_cons__prime__ = (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty) {
  $__fn = function($x, $xs = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x, $xs));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_cons
$Data_List_NonEmpty_cons = (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_Cons) {
  $__body = function($y, $v) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_Cons) {
    $__case_0 = $y;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$y1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($y1, ($Data_List_Types_Cons)($x, $xs)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($y, $v = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_Cons, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($y, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($y, $v);
  };
  return $__fn;
})();

// Data_List_NonEmpty_concatMap
$Data_List_NonEmpty_concatMap = ($Data_Function_flip)($Data_List_NonEmpty_bind);

// Data_List_NonEmpty_concat
$Data_List_NonEmpty_concat = (function() use (&$Data_List_NonEmpty_bind, &$Data_List_NonEmpty_identity) {
  $__fn = function($v) use (&$Data_List_NonEmpty_bind, &$Data_List_NonEmpty_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_NonEmpty_bind)($v, $Data_List_NonEmpty_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_catMaybes
$Data_List_NonEmpty_catMaybes = ($Data_List_NonEmpty_lift)($Data_List_catMaybes);

// Data_List_NonEmpty_appendFoldable
$Data_List_NonEmpty_appendFoldable = (function() use (&$Data_List_fromFoldable, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_NonEmpty_append1) {
  $__fn = function($dictFoldable) use (&$Data_List_fromFoldable, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_NonEmpty_append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromFoldable1 = ($Data_List_fromFoldable)($dictFoldable);
    $__res = (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_NonEmpty_append1, $fromFoldable1) {
  $__body = function($v, $ys) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_NonEmpty_append1, $fromFoldable1) {
    $__case_0 = $v;
    $__case_1 = $ys;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$ys1 = $__case_1;
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($x, ($Data_List_NonEmpty_append1)($xs, ($fromFoldable1)($ys1))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $ys = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_NonEmpty_append1, $fromFoldable1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $ys);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $ys);
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

