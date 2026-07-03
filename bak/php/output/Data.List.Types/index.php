<?php

namespace Data\List\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_Types_compose
$Data_List_Types_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_List_Types_add
$Data_List_Types_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_List_Types_sub
$Data_List_Types_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_List_Types_append
$Data_List_Types_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_List_Types_identity
$Data_List_Types_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_List_Types_conj
$Data_List_Types_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_List_Types_Nil
$Data_List_Types_Nil = (object)["tag" => "Nil", "values" => []];

// Data_List_Types_Cons
$Data_List_Types_Cons = (function() {
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

// Data_List_Types_NonEmptyList
$Data_List_Types_NonEmptyList = (function() {
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

// Data_List_Types_toList
$Data_List_Types_toList = (function() use (&$Data_List_Types_Cons) {
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

// Data_List_Types_newtypeNonEmptyList
$Data_List_Types_newtypeNonEmptyList = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_List_Types_nelCons
$Data_List_Types_nelCons = (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_Cons) {
  $__body = function($a, $v) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_Cons) {
    $__case_0 = $a;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$a1 = $__case_0;
$b = ($__case_1)->values[0];
$bs = ($__case_1)->values[1];
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($a1, ($Data_List_Types_Cons)($b, $bs)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $v = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_Cons, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $v);
  };
  return $__fn;
})();

// Data_List_Types_listMap
$Data_List_Types_listMap = (function() use (&$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($f) use (&$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$chunkedRevMap = (function() use (&$chunkedRevMap, &$Data_List_Types_Cons, $f, &$Data_List_Types_Nil) {
  $__fn = function($v, $v1 = null) use (&$chunkedRevMap, &$Data_List_Types_Cons, $f, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$chunkedRevMap, &$Data_List_Types_Cons, $f, &$Data_List_Types_Nil) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && (((($__case_1)->values[1])->tag === "Cons") && (((($__case_1)->values[1])->values[1])->tag === "Cons")))) {
$chunksAcc = $__case_0;
$chunk = $__case_1;
$xs = ((($__case_1)->values[1])->values[1])->values[1];
$__tco_tmp_0 = ($Data_List_Types_Cons)($chunk, $chunksAcc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
if (true) {
$chunksAcc = $__case_0;
$xs = $__case_1;
$unrolledMap = (function() use (&$Data_List_Types_Cons, $f, &$Data_List_Types_Nil) {
  $__body = function($v2) use (&$Data_List_Types_Cons, $f, &$Data_List_Types_Nil) {
    $__case_0 = $v2;
    if (((($__case_0)->tag === "Cons") && (((($__case_0)->values[1])->tag === "Cons") && (((($__case_0)->values[1])->values[1])->tag === "Nil")))) {
$x1 = ($__case_0)->values[0];
$x2 = (($__case_0)->values[1])->values[0];
return ($Data_List_Types_Cons)(($f)($x1), ($Data_List_Types_Cons)(($f)($x2), $Data_List_Types_Nil));
} else {
;
};
    if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x1 = ($__case_0)->values[0];
return ($Data_List_Types_Cons)(($f)($x1), $Data_List_Types_Nil);
} else {
;
};
    if (true) {
return $Data_List_Types_Nil;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v2) use (&$Data_List_Types_Cons, $f, &$Data_List_Types_Nil, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v2);
  };
  return $__fn;
})();
$reverseUnrolledMap = (function() use ($reverseUnrolledMap, &$Data_List_Types_Cons, $f) {
  $__fn = function($v2, $v3 = null) use ($reverseUnrolledMap, &$Data_List_Types_Cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v2, $v3) use ($reverseUnrolledMap, &$Data_List_Types_Cons, $f) {
while (true) {
$__case_0 = $v2;
$__case_1 = $v3;
if (((($__case_0)->tag === "Cons") && (((($__case_0)->values[0])->tag === "Cons") && ((((($__case_0)->values[0])->values[1])->tag === "Cons") && ((((($__case_0)->values[0])->values[1])->values[1])->tag === "Cons"))))) {
$x1 = (($__case_0)->values[0])->values[0];
$x2 = ((($__case_0)->values[0])->values[1])->values[0];
$x3 = (((($__case_0)->values[0])->values[1])->values[1])->values[0];
$cs = ($__case_0)->values[1];
$acc = $__case_1;
$__tco_tmp_0 = $cs;
$__tco_tmp_1 = ($Data_List_Types_Cons)(($f)($x1), ($Data_List_Types_Cons)(($f)($x2), ($Data_List_Types_Cons)(($f)($x3), $acc)));
$v2 = $__tco_tmp_0;
$v3 = $__tco_tmp_1;
continue;
} else {
;
};
if (true) {
$acc = $__case_1;
return $acc;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v2, $v3);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
return ($reverseUnrolledMap)($chunksAcc, ($unrolledMap)($xs));
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
    $__res = ($chunkedRevMap)($Data_List_Types_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Types_functorList
$Data_List_Types_functorList = ($Data_Functor_Functor__dollar__Dict)((object)["map" => $Data_List_Types_listMap]);

// Data_List_Types_map
$Data_List_Types_map = ($Data_Functor_map)($Data_List_Types_functorList);

// Data_List_Types_functorNonEmptyList
$Data_List_Types_functorNonEmptyList = ($Data_NonEmpty_functorNonEmpty)($Data_List_Types_functorList);

// Data_List_Types_foldableList
$Data_List_Types_foldableList = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_List_Types_compose, &$Data_Foldable_foldl, &$Data_List_Types_foldableList, &$Data_Function_flip) {
  $__fn = function($f, $b = null) use (&$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_List_Types_compose, &$Data_Foldable_foldl, &$Data_List_Types_foldableList, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$rev = (function() use (&$Data_List_Types_Cons, &$Data_List_Types_Nil) {
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
    $__res = ($Data_List_Types_compose)(($Data_Foldable_foldl)($Data_List_Types_foldableList, ($Data_Function_flip)($f), $b), $rev);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, $f) {
  $__fn = function($b, $v = null) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($b, $v) use (&$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $b;
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$__tco_tmp_0 = ($f)($b, $a);
$__tco_tmp_1 = $as;
$b = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($b, $v);
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
})(), "foldMap" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Foldable_foldl, &$Data_List_Types_foldableList, &$Data_List_Types_compose) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Foldable_foldl, &$Data_List_Types_foldableList, &$Data_List_Types_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append2 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use (&$Data_Foldable_foldl, &$Data_List_Types_foldableList, &$Data_List_Types_compose, $append2, $mempty) {
  $__fn = function($f) use (&$Data_Foldable_foldl, &$Data_List_Types_foldableList, &$Data_List_Types_compose, $append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldl)($Data_List_Types_foldableList, (function() use (&$Data_List_Types_compose, $append2, $f) {
  $__fn = function($acc) use (&$Data_List_Types_compose, $append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_compose)(($append2)($acc), $f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $mempty);
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

// Data_List_Types_foldl
$Data_List_Types_foldl = ($Data_Foldable_foldl)($Data_List_Types_foldableList);

// Data_List_Types_foldr
$Data_List_Types_foldr = ($Data_Foldable_foldr)($Data_List_Types_foldableList);

// Data_List_Types_intercalate
$Data_List_Types_intercalate = ($Data_Foldable_intercalate)($Data_List_Types_foldableList, $Data_Monoid_monoidString);

// Data_List_Types_foldableNonEmptyList
$Data_List_Types_foldableNonEmptyList = ($Data_NonEmpty_foldableNonEmpty)($Data_List_Types_foldableList);

// Data_List_Types_foldableWithIndexList
$Data_List_Types_foldableWithIndexList = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_List_Types_foldl, &$Data_Tuple_Tuple, &$Data_List_Types_add, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_Tuple_snd, &$Data_List_Types_sub) {
  $__body = function($f, $b, $xs) use (&$Data_List_Types_foldl, &$Data_Tuple_Tuple, &$Data_List_Types_add, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_Tuple_snd, &$Data_List_Types_sub) {
    $v = (function() use (&$Data_List_Types_foldl, &$Data_Tuple_Tuple, &$Data_List_Types_add, &$Data_List_Types_Cons, &$Data_List_Types_Nil, $xs) {
$rev = ($Data_List_Types_foldl)((function() use (&$Data_Tuple_Tuple, &$Data_List_Types_add, &$Data_List_Types_Cons) {
  $__body = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Types_add, &$Data_List_Types_Cons) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$acc = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Types_add, $i, &$Data_List_Types_Cons, $acc) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_List_Types_add, $i, &$Data_List_Types_Cons, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_List_Types_add)($i, 1), ($Data_List_Types_Cons)($a, $acc));
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
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Types_add, &$Data_List_Types_Cons, $__body, &$__fn) {
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
})());
return ($rev)(($Data_Tuple_Tuple)(0, $Data_List_Types_Nil), $xs);
})();
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$len = ($__case_0)->values[0];
$revList = ($__case_0)->values[1];
return ($Data_Tuple_snd)(($Data_List_Types_foldl)((function() use (&$Data_Tuple_Tuple, &$Data_List_Types_sub, $f) {
  $__body = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Types_sub, $f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b__prime__ = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Types_sub, $i, $f, $b__prime__) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_List_Types_sub, $i, $f, $b__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_List_Types_sub)($i, 1), ($f)(($Data_List_Types_sub)($i, 1), $a, $b__prime__));
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
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Types_sub, $f, $__body, &$__fn) {
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
})(), ($Data_Tuple_Tuple)($len, $b), $revList));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $xs = null) use (&$Data_List_Types_foldl, &$Data_Tuple_Tuple, &$Data_List_Types_add, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_Tuple_snd, &$Data_List_Types_sub, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use (&$Data_List_Types_compose, &$Data_Tuple_snd, &$Data_List_Types_foldl, &$Data_Tuple_Tuple, &$Data_List_Types_add) {
  $__fn = function($f, $acc = null) use (&$Data_List_Types_compose, &$Data_Tuple_snd, &$Data_List_Types_foldl, &$Data_Tuple_Tuple, &$Data_List_Types_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_compose)($Data_Tuple_snd, ($Data_List_Types_foldl)((function() use (&$Data_Tuple_Tuple, &$Data_List_Types_add, $f) {
  $__body = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Types_add, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Types_add, $i, $f, $b) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_List_Types_add, $i, $f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_List_Types_add)($i, 1), ($f)($i, $b, $a));
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
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Types_add, $f, $__body, &$__fn) {
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
})(), ($Data_Tuple_Tuple)(0, $acc)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Types_foldableWithIndexList, &$Data_List_Types_compose) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Types_foldableWithIndexList, &$Data_List_Types_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append2 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Types_foldableWithIndexList, &$Data_List_Types_compose, $append2, $mempty) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Types_foldableWithIndexList, &$Data_List_Types_compose, $append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldlWithIndex)($Data_List_Types_foldableWithIndexList, (function() use (&$Data_List_Types_compose, $append2, $f) {
  $__fn = function($i, $acc = null) use (&$Data_List_Types_compose, $append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_compose)(($append2)($acc), ($f)($i));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $mempty);
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
})(), "Foldable0" => (function() use (&$Data_List_Types_foldableList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_foldableList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_foldableList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_foldableWithIndexNonEmpty
$Data_List_Types_foldableWithIndexNonEmpty = ($Data_NonEmpty_foldableWithIndexNonEmpty)($Data_List_Types_foldableWithIndexList);

// Data_List_Types_foldMapWithIndex
$Data_List_Types_foldMapWithIndex = ($Data_FoldableWithIndex_foldMapWithIndex)($Data_List_Types_foldableWithIndexNonEmpty);

// Data_List_Types_foldlWithIndex
$Data_List_Types_foldlWithIndex = ($Data_FoldableWithIndex_foldlWithIndex)($Data_List_Types_foldableWithIndexNonEmpty);

// Data_List_Types_foldrWithIndex
$Data_List_Types_foldrWithIndex = ($Data_FoldableWithIndex_foldrWithIndex)($Data_List_Types_foldableWithIndexNonEmpty);

// Data_List_Types_foldrWithIndex1
$Data_List_Types_foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($Data_List_Types_foldableWithIndexList);

// Data_List_Types_foldlWithIndex1
$Data_List_Types_foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($Data_List_Types_foldableWithIndexList);

// Data_List_Types_foldableWithIndexNonEmptyList
$Data_List_Types_foldableWithIndexNonEmptyList = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldMapWithIndex" => (function() use (&$Data_List_Types_foldMapWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
  $__fn = function($dictMonoid) use (&$Data_List_Types_foldMapWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_List_Types_foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
  $__body = function($f, $v) use ($foldMapWithIndex1, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($foldMapWithIndex1)(($Data_List_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Types_add)(1))), $ne);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_List_Types_foldlWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
  $__body = function($f, $b, $v) use (&$Data_List_Types_foldlWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($Data_List_Types_foldlWithIndex)(($Data_List_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Types_add)(1))), $b1, $ne);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use (&$Data_List_Types_foldlWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add, $__body, &$__fn) {
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
})(), "foldrWithIndex" => (function() use (&$Data_List_Types_foldrWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
  $__body = function($f, $b, $v) use (&$Data_List_Types_foldrWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($Data_List_Types_foldrWithIndex)(($Data_List_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Types_add)(1))), $b1, $ne);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use (&$Data_List_Types_foldrWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use (&$Data_List_Types_foldableNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_foldableNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_foldableNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_functorWithIndexList
$Data_List_Types_functorWithIndexList = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_List_Types_foldrWithIndex1, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($f) use (&$Data_List_Types_foldrWithIndex1, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_foldrWithIndex1)((function() use (&$Data_List_Types_Cons, $f) {
  $__fn = function($i, $x = null, $acc = null) use (&$Data_List_Types_Cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_Cons)(($f)($i, $x), $acc);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_List_Types_Nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_List_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_mapWithIndex
$Data_List_Types_mapWithIndex = ($Data_FunctorWithIndex_mapWithIndex)(($Data_NonEmpty_functorWithIndex)($Data_List_Types_functorWithIndexList));

// Data_List_Types_functorWithIndexNonEmptyList
$Data_List_Types_functorWithIndexNonEmptyList = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_List_Types_NonEmptyList, &$Data_List_Types_mapWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
  $__body = function($fn, $v) use (&$Data_List_Types_NonEmptyList, &$Data_List_Types_mapWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
    $__case_0 = $fn;
    $__case_1 = $v;
    if (true) {
$fn1 = $__case_0;
$ne = $__case_1;
return ($Data_List_Types_NonEmptyList)(($Data_List_Types_mapWithIndex)(($Data_List_Types_compose)($fn1, ($Data_Maybe_maybe)(0, ($Data_List_Types_add)(1))), $ne));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($fn, $v = null) use (&$Data_List_Types_NonEmptyList, &$Data_List_Types_mapWithIndex, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($fn, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($fn, $v);
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_List_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_semigroupList
$Data_List_Types_semigroupList = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_List_Types_foldr, &$Data_List_Types_Cons) {
  $__fn = function($xs, $ys = null) use (&$Data_List_Types_foldr, &$Data_List_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_foldr)($Data_List_Types_Cons, $ys, $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_append1
$Data_List_Types_append1 = ($Data_Semigroup_append)($Data_List_Types_semigroupList);

// Data_List_Types_monoidList
$Data_List_Types_monoidList = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Data_List_Types_Nil, "Semigroup0" => (function() use (&$Data_List_Types_semigroupList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_semigroupList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_semigroupList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_semigroupNonEmptyList
$Data_List_Types_semigroupNonEmptyList = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_toList) {
  $__body = function($v, $as__prime__) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_toList) {
    $__case_0 = $v;
    $__case_1 = $as__prime__;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$as__prime__1 = $__case_1;
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($a, ($Data_List_Types_append1)($as, ($Data_List_Types_toList)($as__prime__1))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $as__prime__ = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_toList, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $as__prime__);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $as__prime__);
  };
  return $__fn;
})()]);

// Data_List_Types_showList
$Data_List_Types_showList = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_List_Types_append, &$Data_List_Types_intercalate, &$Data_List_Types_map) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_List_Types_append, &$Data_List_Types_intercalate, &$Data_List_Types_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_Types_append, &$Data_List_Types_intercalate, &$Data_List_Types_map, $show) {
  $__body = function($v) use (&$Data_List_Types_append, &$Data_List_Types_intercalate, &$Data_List_Types_map, $show) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return "Nil";
} else {
;
};
    if (true) {
$xs = $__case_0;
return ($Data_List_Types_append)("(", ($Data_List_Types_append)(($Data_List_Types_intercalate)(" : ", ($Data_List_Types_map)($show, $xs)), " : Nil)"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Types_append, &$Data_List_Types_intercalate, &$Data_List_Types_map, $show, $__body, &$__fn) {
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

// Data_List_Types_showNonEmptyList
$Data_List_Types_showNonEmptyList = (function() use (&$Data_Show_show, &$Data_NonEmpty_showNonEmpty, &$Data_List_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Types_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_NonEmpty_showNonEmpty, &$Data_List_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Types_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_NonEmpty_showNonEmpty)($dictShow, ($Data_List_Types_showList)($dictShow)));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_Types_append, $show) {
  $__body = function($v) use (&$Data_List_Types_append, $show) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($Data_List_Types_append)("(NonEmptyList ", ($Data_List_Types_append)(($show)($nel), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Types_append, $show, $__body, &$__fn) {
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

// Data_List_Types_traversableList
$Data_List_Types_traversableList = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Prim_undefined, &$Data_Functor_map, &$Control_Apply_lift2, &$Control_Applicative_pure, &$Data_List_Types_compose, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Data_Functor_map, &$Control_Apply_lift2, &$Control_Applicative_pure, &$Data_List_Types_compose, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$map1 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$lift2 = ($Control_Apply_lift2)($Apply0);
$pure1 = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Data_List_Types_compose, $map1, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, $lift2, $pure1) {
  $__fn = function($f) use (&$Data_List_Types_compose, $map1, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, $lift2, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_compose)(($map1)(($Data_List_Types_foldl)(($Data_Function_flip)($Data_List_Types_Cons), $Data_List_Types_Nil)), ($Data_List_Types_foldl)((function() use (&$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_Cons, $f) {
  $__fn = function($acc) use (&$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_Cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_compose)(($lift2)(($Data_Function_flip)($Data_List_Types_Cons), $acc), $f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($pure1)($Data_List_Types_Nil)));
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
})(), "sequence" => (function() use (&$Data_Traversable_traverse, &$Data_List_Types_traversableList, &$Data_List_Types_identity) {
  $__fn = function($dictApplicative) use (&$Data_Traversable_traverse, &$Data_List_Types_traversableList, &$Data_List_Types_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_traverse)($Data_List_Types_traversableList, $dictApplicative, $Data_List_Types_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_List_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_List_Types_foldableList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_foldableList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_foldableList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_traversableNonEmptyList
$Data_List_Types_traversableNonEmptyList = ($Data_NonEmpty_traversableNonEmpty)($Data_List_Types_traversableList);

// Data_List_Types_traversableWithIndexList
$Data_List_Types_traversableWithIndexList = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Prim_undefined, &$Data_Functor_map, &$Control_Apply_lift2, &$Control_Applicative_pure, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_List_Types_compose, &$Data_List_Types_foldlWithIndex1) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Data_Functor_map, &$Control_Apply_lift2, &$Control_Applicative_pure, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_List_Types_compose, &$Data_List_Types_foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$map1 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$lift2 = ($Control_Apply_lift2)($Apply0);
$pure1 = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_List_Types_compose, $map1, &$Data_List_Types_foldlWithIndex1, $lift2, $pure1) {
  $__fn = function($f) use (&$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$Data_List_Types_compose, $map1, &$Data_List_Types_foldlWithIndex1, $lift2, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$rev = ($Data_List_Types_foldl)(($Data_Function_flip)($Data_List_Types_Cons), $Data_List_Types_Nil);
    $__res = ($Data_List_Types_compose)(($map1)($rev), ($Data_List_Types_foldlWithIndex1)((function() use (&$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_Cons, $f) {
  $__fn = function($i, $acc = null) use (&$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_Cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_compose)(($lift2)(($Data_Function_flip)($Data_List_Types_Cons), $acc), ($f)($i));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), ($pure1)($Data_List_Types_Nil)));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_List_Types_functorWithIndexList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorWithIndexList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorWithIndexList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_List_Types_foldableWithIndexList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_foldableWithIndexList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_foldableWithIndexList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_List_Types_traversableList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_traversableList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_traversableList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_traverseWithIndex
$Data_List_Types_traverseWithIndex = ($Data_TraversableWithIndex_traverseWithIndex)(($Data_NonEmpty_traversableWithIndexNonEmpty)($Data_List_Types_traversableWithIndexList));

// Data_List_Types_traversableWithIndexNonEmptyList
$Data_List_Types_traversableWithIndexNonEmptyList = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Types_traverseWithIndex, &$Data_List_Types_NonEmptyList, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Types_traverseWithIndex, &$Data_List_Types_NonEmptyList, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverseWithIndex1 = ($Data_List_Types_traverseWithIndex)($dictApplicative);
    $__res = (function() use ($map1, &$Data_List_Types_NonEmptyList, $traverseWithIndex1, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
  $__body = function($f, $v) use ($map1, &$Data_List_Types_NonEmptyList, $traverseWithIndex1, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($map1)($Data_List_Types_NonEmptyList, ($traverseWithIndex1)(($Data_List_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Types_add)(1))), $ne));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map1, &$Data_List_Types_NonEmptyList, $traverseWithIndex1, &$Data_List_Types_compose, &$Data_Maybe_maybe, &$Data_List_Types_add, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use (&$Data_List_Types_functorWithIndexNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorWithIndexNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorWithIndexNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_List_Types_foldableWithIndexNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_foldableWithIndexNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_foldableWithIndexNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_List_Types_traversableNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_traversableNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_traversableNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_unfoldable1List
$Data_List_Types_unfoldable1List = ($Data_Unfoldable1_Unfoldable1__dollar__Dict)((object)["unfoldr1" => (function() use (&$Data_List_Types_Cons, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Nil) {
  $__fn = function($f, $b = null) use (&$Data_List_Types_Cons, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($f, &$go, &$Data_List_Types_Cons, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Nil) {
  $__fn = function($source, $memo = null) use ($f, &$go, &$Data_List_Types_Cons, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($source, $memo) use ($f, &$go, &$Data_List_Types_Cons, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Nil) {
while (true) {
$v = ($f)($source);
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Just"))) {
$one = ($__case_0)->values[0];
$rest = (($__case_0)->values[1])->values[0];
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = ($Data_List_Types_Cons)($one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
continue;
} else {
;
};
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Nothing"))) {
$one = ($__case_0)->values[0];
return ($Data_List_Types_foldl)(($Data_Function_flip)($Data_List_Types_Cons), $Data_List_Types_Nil, ($Data_List_Types_Cons)($one, $memo));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($source, $memo);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)($b, $Data_List_Types_Nil);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_unfoldableList
$Data_List_Types_unfoldableList = ($Data_Unfoldable_Unfoldable__dollar__Dict)((object)["unfoldr" => (function() use (&$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__fn = function($f, $b = null) use (&$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($f, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$go) {
  $__fn = function($source, $memo = null) use ($f, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($source, $memo) use ($f, &$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_Cons, &$Data_List_Types_Nil, &$go) {
while (true) {
$v = ($f)($source);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_List_Types_foldl)(($Data_Function_flip)($Data_List_Types_Cons), $Data_List_Types_Nil, $memo);
} else {
;
};
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$one = (($__case_0)->values[0])->values[0];
$rest = (($__case_0)->values[0])->values[1];
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = ($Data_List_Types_Cons)($one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($source, $memo);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)($b, $Data_List_Types_Nil);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() use (&$Data_List_Types_unfoldable1List) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_unfoldable1List, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_unfoldable1List;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_unfoldable1NonEmptyList
$Data_List_Types_unfoldable1NonEmptyList = ($Data_NonEmpty_unfoldable1NonEmpty)($Data_List_Types_unfoldableList);

// Data_List_Types_foldable1NonEmptyList
$Data_List_Types_foldable1NonEmptyList = ($Data_NonEmpty_foldable1NonEmpty)($Data_List_Types_foldableList);

// Data_List_Types_extendNonEmptyList
$Data_List_Types_extendNonEmptyList = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_foldr, &$Data_List_Types_Nil) {
  $__body = function($f, $v) use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_foldr, &$Data_List_Types_Nil) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$w = $__case_1;
$as = ($__case_1)->values[1];
$go = (function() use (&$Data_List_Types_Cons, $f1, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty) {
  $__body = function($a, $v1) use (&$Data_List_Types_Cons, $f1, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty) {
    $__case_0 = $a;
    $__case_1 = $v1;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
return (object)["val" => ($Data_List_Types_Cons)(($f1)(($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($a1, $acc))), $val), "acc" => ($Data_List_Types_Cons)($a1, $acc)];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $v1 = null) use (&$Data_List_Types_Cons, $f1, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $v1);
  };
  return $__fn;
})();
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)(($f1)($w), (($Data_List_Types_foldr)($go, (object)["val" => $Data_List_Types_Nil, "acc" => $Data_List_Types_Nil], $as))->val));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_List_Types_Cons, &$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_foldr, &$Data_List_Types_Nil, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_extendList
$Data_List_Types_extendList = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Types_foldr) {
  $__body = function($v, $v1) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Types_foldr) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
    if ((($__case_1)->tag === "Cons")) {
$f = $__case_0;
$l = $__case_1;
$as = ($__case_1)->values[1];
$go = (function() use (&$Data_List_Types_Cons, $f) {
  $__body = function($a__prime__, $v2) use (&$Data_List_Types_Cons, $f) {
    $__case_0 = $a__prime__;
    $__case_1 = $v2;
    if ((is_object)($__case_1)) {
$a__prime__1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = ($Data_List_Types_Cons)($a__prime__1, $acc);
return (object)["val" => ($Data_List_Types_Cons)(($f)($acc__prime__), $val), "acc" => $acc__prime__];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a__prime__, $v2 = null) use (&$Data_List_Types_Cons, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a__prime__, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a__prime__, $v2);
  };
  return $__fn;
})();
return ($Data_List_Types_Cons)(($f)($l), (($Data_List_Types_foldr)($go, (object)["val" => $Data_List_Types_Nil, "acc" => $Data_List_Types_Nil], $as))->val);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_Nil, &$Data_List_Types_Cons, &$Data_List_Types_foldr, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_eq1List
$Data_List_Types_eq1List = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_List_Types_conj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_Types_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_Types_conj, $eq) {
  $__fn = function($xs, $ys = null) use (&$Data_List_Types_conj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, &$Data_List_Types_conj, $eq) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$Data_List_Types_conj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1, $v2) use (&$go, &$Data_List_Types_conj, $eq) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_2 === false)) {
return false;
} else {
;
};
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
$acc = $__case_2;
return $acc;
} else {
;
};
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$ys__prime__ = ($__case_1)->values[1];
$acc = $__case_2;
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
$__tco_tmp_2 = ($Data_List_Types_conj)($acc, ($eq)($y, $x));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
;
};
if (true) {
return false;
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
    $__res = ($go)($xs, $ys, true);
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
})()]);

// Data_List_Types_eq1
$Data_List_Types_eq1 = ($Data_Eq_eq1)($Data_List_Types_eq1List);

// Data_List_Types_eqNonEmpty
$Data_List_Types_eqNonEmpty = ($Data_NonEmpty_eqNonEmpty)($Data_List_Types_eq1List);

// Data_List_Types_eq1NonEmptyList
$Data_List_Types_eq1NonEmptyList = ($Data_NonEmpty_eq1NonEmpty)($Data_List_Types_eq1List);

// Data_List_Types_eqList
$Data_List_Types_eqList = (function() use (&$Data_Eq_Eq__dollar__Dict, &$Data_List_Types_eq1) {
  $__fn = function($dictEq) use (&$Data_Eq_Eq__dollar__Dict, &$Data_List_Types_eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => ($Data_List_Types_eq1)($dictEq)]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Types_eqNonEmptyList
$Data_List_Types_eqNonEmptyList = (function() use (&$Data_List_Types_eqNonEmpty) {
  $__fn = function($dictEq) use (&$Data_List_Types_eqNonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_eqNonEmpty)($dictEq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Types_ord1List
$Data_List_Types_ord1List = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare) {
  $__fn = function($xs, $ys = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$go) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$go) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return $Data_Ordering_EQ;
} else {
;
};
if ((($__case_0)->tag === "Nil")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_1)->tag === "Nil")) {
return $Data_Ordering_GT;
} else {
;
};
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$ys__prime__ = ($__case_1)->values[1];
$v2 = ($compare)($x, $y);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
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
    $__res = ($go)($xs, $ys);
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
})(), "Eq10" => (function() use (&$Data_List_Types_eq1List) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_eq1List, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_eq1List;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_compare1
$Data_List_Types_compare1 = ($Data_Ord_compare1)($Data_List_Types_ord1List);

// Data_List_Types_ordNonEmpty
$Data_List_Types_ordNonEmpty = ($Data_NonEmpty_ordNonEmpty)($Data_List_Types_ord1List);

// Data_List_Types_ord1NonEmptyList
$Data_List_Types_ord1NonEmptyList = ($Data_NonEmpty_ord1NonEmpty)($Data_List_Types_ord1List);

// Data_List_Types_ordList
$Data_List_Types_ordList = (function() use (&$Data_List_Types_eqList, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_List_Types_compare1) {
  $__fn = function($dictOrd) use (&$Data_List_Types_eqList, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_List_Types_compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqList1 = ($Data_List_Types_eqList)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_List_Types_compare1)($dictOrd), "Eq0" => (function() use ($eqList1) {
  $__fn = function($__dollar____unused) use ($eqList1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqList1;
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

// Data_List_Types_ordNonEmptyList
$Data_List_Types_ordNonEmptyList = (function() use (&$Data_List_Types_ordNonEmpty) {
  $__fn = function($dictOrd) use (&$Data_List_Types_ordNonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_ordNonEmpty)($dictOrd);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Types_comonadNonEmptyList
$Data_List_Types_comonadNonEmptyList = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
return $a;
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
})(), "Extend0" => (function() use (&$Data_List_Types_extendNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_extendNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_extendNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_applyList
$Data_List_Types_applyList = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_List_Types_Nil, &$Data_List_Types_append1, &$Data_List_Types_map, &$Control_Apply_apply, &$Data_List_Types_applyList) {
  $__body = function($v, $v1) use (&$Data_List_Types_Nil, &$Data_List_Types_append1, &$Data_List_Types_map, &$Control_Apply_apply, &$Data_List_Types_applyList) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$f = ($__case_0)->values[0];
$fs = ($__case_0)->values[1];
$xs = $__case_1;
return ($Data_List_Types_append1)(($Data_List_Types_map)($f, $xs), ($Control_Apply_apply)($Data_List_Types_applyList, $fs, $xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_Nil, &$Data_List_Types_append1, &$Data_List_Types_map, &$Control_Apply_apply, &$Data_List_Types_applyList, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_apply
$Data_List_Types_apply = ($Control_Apply_apply)($Data_List_Types_applyList);

// Data_List_Types_applyNonEmptyList
$Data_List_Types_applyNonEmptyList = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_apply, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
  $__body = function($v, $v1) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_apply, &$Data_List_Types_Cons, &$Data_List_Types_Nil) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->values[0];
$fs = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)(($f)($a), ($Data_List_Types_append1)(($Data_List_Types_apply)($fs, ($Data_List_Types_Cons)($a, $Data_List_Types_Nil)), ($Data_List_Types_apply)(($Data_List_Types_Cons)($f, $fs), $as))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_apply, &$Data_List_Types_Cons, &$Data_List_Types_Nil, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_bindList
$Data_List_Types_bindList = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_List_Types_Nil, &$Data_List_Types_append1, &$Control_Bind_bind, &$Data_List_Types_bindList) {
  $__body = function($v, $v1) use (&$Data_List_Types_Nil, &$Data_List_Types_append1, &$Control_Bind_bind, &$Data_List_Types_bindList) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$f = $__case_1;
return ($Data_List_Types_append1)(($f)($x), ($Control_Bind_bind)($Data_List_Types_bindList, $xs, $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_List_Types_Nil, &$Data_List_Types_append1, &$Control_Bind_bind, &$Data_List_Types_bindList, $__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Data_List_Types_applyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_applyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_applyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_bind
$Data_List_Types_bind = ($Control_Bind_bind)($Data_List_Types_bindList);

// Data_List_Types_bindNonEmptyList
$Data_List_Types_bindNonEmptyList = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_bind, &$Data_List_Types_compose, &$Data_List_Types_toList) {
  $__body = function($v, $f) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_bind, &$Data_List_Types_compose, &$Data_List_Types_toList) {
    $__case_0 = $v;
    $__case_1 = $f;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$f1 = $__case_1;
$v1 = ($f1)($a);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$b = ($__case_0)->values[0];
$bs = ($__case_0)->values[1];
return ($Data_List_Types_NonEmptyList)(($Data_NonEmpty_NonEmpty)($b, ($Data_List_Types_append1)($bs, ($Data_List_Types_bind)($as, ($Data_List_Types_compose)($Data_List_Types_toList, $f1)))));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $f = null) use (&$Data_List_Types_NonEmptyList, &$Data_NonEmpty_NonEmpty, &$Data_List_Types_append1, &$Data_List_Types_bind, &$Data_List_Types_compose, &$Data_List_Types_toList, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $f);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $f);
  };
  return $__fn;
})(), "Apply0" => (function() use (&$Data_List_Types_applyNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_applyNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_applyNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_applicativeList
$Data_List_Types_applicativeList = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_List_Types_Cons, &$Data_List_Types_Nil) {
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
})(), "Apply0" => (function() use (&$Data_List_Types_applyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_applyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_applyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_monadList
$Data_List_Types_monadList = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_List_Types_applicativeList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_applicativeList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_applicativeList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_List_Types_bindList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_bindList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_bindList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_altNonEmptyList
$Data_List_Types_altNonEmptyList = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => ($Data_Semigroup_append)($Data_List_Types_semigroupNonEmptyList), "Functor0" => (function() use (&$Data_List_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_altList
$Data_List_Types_altList = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => $Data_List_Types_append1, "Functor0" => (function() use (&$Data_List_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_plusList
$Data_List_Types_plusList = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => $Data_List_Types_Nil, "Alt0" => (function() use (&$Data_List_Types_altList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_altList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_altList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_alternativeList
$Data_List_Types_alternativeList = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_List_Types_applicativeList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_applicativeList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_applicativeList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Data_List_Types_plusList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_plusList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_plusList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_monadPlusList
$Data_List_Types_monadPlusList = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use (&$Data_List_Types_monadList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_monadList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_monadList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use (&$Data_List_Types_alternativeList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_alternativeList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_alternativeList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_applicativeNonEmptyList
$Data_List_Types_applicativeNonEmptyList = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Data_List_Types_compose)($Data_List_Types_NonEmptyList, ($Data_NonEmpty_singleton)($Data_List_Types_plusList)), "Apply0" => (function() use (&$Data_List_Types_applyNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_applyNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_applyNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_pure
$Data_List_Types_pure = ($Control_Applicative_pure)($Data_List_Types_applicativeNonEmptyList);

// Data_List_Types_monadNonEmptyList
$Data_List_Types_monadNonEmptyList = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_List_Types_applicativeNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_applicativeNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_applicativeNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_List_Types_bindNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_bindNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_bindNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_traversable1NonEmptyList
$Data_List_Types_traversable1NonEmptyList = ($Data_Semigroup_Traversable_Traversable1__dollar__Dict)((object)["traverse1" => (function() use (&$Prim_undefined, &$Data_Functor_mapFlipped, &$Control_Apply_lift2, &$Data_Functor_map, &$Data_List_Types_foldl, &$Data_List_Types_compose, &$Data_Function_flip, &$Data_List_Types_nelCons, &$Data_List_Types_pure) {
  $__fn = function($dictApply) use (&$Prim_undefined, &$Data_Functor_mapFlipped, &$Control_Apply_lift2, &$Data_Functor_map, &$Data_List_Types_foldl, &$Data_List_Types_compose, &$Data_Function_flip, &$Data_List_Types_nelCons, &$Data_List_Types_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Functor0 = (($dictApply)->Functor0)($Prim_undefined);
$mapFlipped = ($Data_Functor_mapFlipped)($Functor0);
$lift2 = ($Control_Apply_lift2)($dictApply);
$map1 = ($Data_Functor_map)($Functor0);
    $__res = (function() use ($mapFlipped, &$Data_List_Types_foldl, &$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_nelCons, $map1, &$Data_List_Types_pure) {
  $__body = function($f, $v) use ($mapFlipped, &$Data_List_Types_foldl, &$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_nelCons, $map1, &$Data_List_Types_pure) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
return ($mapFlipped)(($Data_List_Types_foldl)((function() use (&$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_nelCons, $f1) {
  $__fn = function($acc) use (&$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_nelCons, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Types_compose)(($lift2)(($Data_Function_flip)($Data_List_Types_nelCons), $acc), $f1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($map1)($Data_List_Types_pure, ($f1)($a)), $as), (function() use (&$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_nelCons, &$Data_List_Types_pure) {
  $__body = function($v1) use (&$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_nelCons, &$Data_List_Types_pure) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_List_Types_foldl)(($Data_Function_flip)($Data_List_Types_nelCons), ($Data_List_Types_pure)($x), $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_List_Types_foldl, &$Data_Function_flip, &$Data_List_Types_nelCons, &$Data_List_Types_pure, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($mapFlipped, &$Data_List_Types_foldl, &$Data_List_Types_compose, $lift2, &$Data_Function_flip, &$Data_List_Types_nelCons, $map1, &$Data_List_Types_pure, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "sequence1" => (function() use (&$Data_Semigroup_Traversable_traverse1, &$Data_List_Types_traversable1NonEmptyList, &$Data_List_Types_identity) {
  $__fn = function($dictApply) use (&$Data_Semigroup_Traversable_traverse1, &$Data_List_Types_traversable1NonEmptyList, &$Data_List_Types_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Traversable_traverse1)($Data_List_Types_traversable1NonEmptyList, $dictApply, $Data_List_Types_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() use (&$Data_List_Types_foldable1NonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_foldable1NonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_foldable1NonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() use (&$Data_List_Types_traversableNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Types_traversableNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Types_traversableNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

