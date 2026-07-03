<?php

namespace Data\Array;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_sequence
$Data_Array_sequence = ($Data_Traversable_sequence)($Data_Traversable_traversableArray);

// Data_Array_traverse_
$Data_Array_traverse_ = ($Data_Foldable_traverse_)($Control_Monad_ST_Internal_applicativeST);

// Data_Array_lessThan
$Data_Array_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_Array_add
$Data_Array_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Array_negate
$Data_Array_negate = ($Data_Ring_negate)($Data_Ring_ringInt);

// Data_Array_lessThanOrEq
$Data_Array_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Array_eq
$Data_Array_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Array_bind
$Data_Array_bind = ($Control_Bind_bind)($Control_Monad_ST_Internal_bindST);

// Data_Array_discard
$Data_Array_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Control_Monad_ST_Internal_bindST);

// Data_Array_void
$Data_Array_void = ($Data_Functor_void)($Control_Monad_ST_Internal_functorST);

// Data_Array_pure
$Data_Array_pure = ($Control_Applicative_pure)($Control_Monad_ST_Internal_applicativeST);

// Data_Array_intercalate1
$Data_Array_intercalate1 = ($Data_Foldable_intercalate)($Data_Foldable_foldableArray);

// Data_Array_zero
$Data_Array_zero = ($Data_Semiring_zero)($Data_Semiring_semiringInt);

// Data_Array_sub
$Data_Array_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Array_one
$Data_Array_one = ($Data_Semiring_one)($Data_Semiring_semiringInt);

// Data_Array_apply
$Data_Array_apply = ($Control_Apply_apply)($Data_Maybe_applyMaybe);

// Data_Array_map
$Data_Array_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Array_map1
$Data_Array_map1 = ($Data_Functor_map)($Data_Functor_functorArray);

// Data_Array_map2
$Data_Array_map2 = ($Data_Functor_map)($Control_Monad_ST_Internal_functorST);

// Data_Array_compose
$Data_Array_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Array_fromJust
$Data_Array_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Array_when
$Data_Array_when = ($Control_Applicative_when)($Control_Monad_ST_Internal_applicativeST);

// Data_Array_notEq
$Data_Array_notEq = ($Data_Eq_notEq)($Data_Ordering_eqOrdering);

// Data_Array_eq1
$Data_Array_eq1 = ($Data_Eq_eq)($Data_Ordering_eqOrdering);

// Data_Array_greaterThanOrEq
$Data_Array_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_Array_foldMap1
$Data_Array_foldMap1 = ($Data_Foldable_foldMap)($Data_Foldable_foldableArray);

// Data_Array_fold1
$Data_Array_fold1 = ($Data_Foldable_fold)($Data_Foldable_foldableArray);

// Data_Array_append
$Data_Array_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupArray);

// Data_Array_composeFlipped
$Data_Array_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Array_traverse
$Data_Array_traverse = ($Data_Traversable_traverse)($Data_Traversable_traversableArray);

// Data_Array_not
$Data_Array_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Array_zipWith
$Data_Array_zipWith = ($Data_Function_Uncurried_runFn3)($Data_Array_zipWithImpl);

// Data_Array_zipWithA
$Data_Array_zipWithA = (function() use (&$Data_Array_sequence, &$Data_Array_zipWith) {
  $__fn = function($dictApplicative) use (&$Data_Array_sequence, &$Data_Array_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence1 = ($Data_Array_sequence)($dictApplicative);
    $__res = (function() use ($sequence1, &$Data_Array_zipWith) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$Data_Array_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence1)(($Data_Array_zipWith)($f, $xs, $ys));
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

// Data_Array_zip
$Data_Array_zip = ($Data_Array_zipWith)($Data_Tuple_Tuple);

// Data_Array_updateAtIndices
$Data_Array_updateAtIndices = (function() use (&$Data_Array_traverse_, &$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, &$Data_Array_ST_poke) {
  $__fn = function($dictFoldable) use (&$Data_Array_traverse_, &$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, &$Data_Array_ST_poke, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse_1 = ($Data_Array_traverse_)($dictFoldable);
    $__res = (function() use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, $traverse_1, &$Data_Array_ST_poke) {
  $__fn = function($us, $xs = null) use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, $traverse_1, &$Data_Array_ST_poke, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_run)(($Data_Array_ST_withArray)((function() use ($traverse_1, &$Data_Array_ST_poke, $us) {
  $__fn = function($res) use ($traverse_1, &$Data_Array_ST_poke, $us, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse_1)((function() use (&$Data_Array_ST_poke, $res) {
  $__body = function($v) use (&$Data_Array_ST_poke, $res) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
return ($Data_Array_ST_poke)($i, $a, $res);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Array_ST_poke, $res, $__body, &$__fn) {
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
})(), $us);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs));
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

// Data_Array_updateAt
$Data_Array_updateAt = ($Data_Function_Uncurried_runFn5)($Data_Array__updateAt, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_unsafeIndex
$Data_Array_unsafeIndex = (function() use (&$Data_Function_Uncurried_runFn2, &$Data_Array_unsafeIndexImpl) {
  $__fn = function($__dollar____unused) use (&$Data_Function_Uncurried_runFn2, &$Data_Array_unsafeIndexImpl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn2)($Data_Array_unsafeIndexImpl);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_unsafeIndex1
$Data_Array_unsafeIndex1 = ($Data_Array_unsafeIndex)($Prim_undefined);

// Data_Array_uncons
$Data_Array_uncons = ($Data_Function_Uncurried_runFn3)($Data_Array_unconsImpl, ($Data_Function_const)($Data_Maybe_Nothing), (function() use (&$Data_Maybe_Just) {
  $__fn = function($x, $xs = null) use (&$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_Just)((object)["head" => $x, "tail" => $xs]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());

// Data_Array_toUnfoldable
$Data_Array_toUnfoldable = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Array_length) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr = ($Data_Unfoldable_unfoldr)($dictUnfoldable);
    $__res = (function() use (&$Data_Array_length, $unfoldr) {
  $__fn = function($xs) use (&$Data_Array_length, $unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$len = ($Data_Array_length)($xs);
$f = (function() {
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
    $__res = ($unfoldr)($f, 0);
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

// Data_Array_tail
$Data_Array_tail = ($Data_Function_Uncurried_runFn3)($Data_Array_unconsImpl, ($Data_Function_const)($Data_Maybe_Nothing), (function() use (&$Data_Maybe_Just) {
  $__fn = function($v, $xs = null) use (&$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_Just)($xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());

// Data_Array_sortBy
$Data_Array_sortBy = (function() use (&$Data_Function_Uncurried_runFn3, &$Data_Array_sortByImpl, &$Data_Array_negate) {
  $__fn = function($comp) use (&$Data_Function_Uncurried_runFn3, &$Data_Array_sortByImpl, &$Data_Array_negate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn3)($Data_Array_sortByImpl, $comp, (function() use (&$Data_Array_negate) {
  $__body = function($v) use (&$Data_Array_negate) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return 1;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return 0;
} else {
;
};
    if ((($__case_0)->tag === "LT")) {
return ($Data_Array_negate)(1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Array_negate, $__body, &$__fn) {
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_sortWith
$Data_Array_sortWith = (function() use (&$Data_Ord_comparing, &$Data_Array_sortBy) {
  $__fn = function($dictOrd) use (&$Data_Ord_comparing, &$Data_Array_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comparing = ($Data_Ord_comparing)($dictOrd);
    $__res = (function() use (&$Data_Array_sortBy, $comparing) {
  $__fn = function($f) use (&$Data_Array_sortBy, $comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_sortBy)(($comparing)($f));
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

// Data_Array_sortWith1
$Data_Array_sortWith1 = ($Data_Array_sortWith)($Data_Ord_ordInt);

// Data_Array_sort
$Data_Array_sort = (function() use (&$Data_Ord_compare, &$Data_Array_sortBy) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Array_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Array_sortBy, $compare) {
  $__fn = function($xs) use (&$Data_Array_sortBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_sortBy)($compare, $xs);
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

// Data_Array_snoc
$Data_Array_snoc = (function() use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, &$Data_Array_ST_push) {
  $__fn = function($xs, $x = null) use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, &$Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_run)(($Data_Array_ST_withArray)(($Data_Array_ST_push)($x), $xs));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_slice
$Data_Array_slice = ($Data_Function_Uncurried_runFn3)($Data_Array_sliceImpl);

// Data_Array_splitAt
$Data_Array_splitAt = (function() use (&$Data_Array_slice, &$Data_Array_length) {
  $__body = function($v, $v1) use (&$Data_Array_slice, &$Data_Array_length) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$i = $__case_0;
$xs = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if (true) {
$i = $__case_0;
$xs = $__case_1;
return (object)["before" => ($Data_Array_slice)(0, $i, $xs), "after" => ($Data_Array_slice)($i, ($Data_Array_length)($xs), $xs)];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Array_slice, &$Data_Array_length, $__body, &$__fn) {
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

// Data_Array_take
$Data_Array_take = (function() use (&$Data_Array_lessThan, &$Data_Array_slice) {
  $__body = function($n, $xs) use (&$Data_Array_lessThan, &$Data_Array_slice) {
    $__case_0 = ($Data_Array_lessThan)($n, 1);
    if (($__case_0 === true)) {
return [];
} else {
;
};
    if (true) {
return ($Data_Array_slice)(0, $n, $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n, $xs = null) use (&$Data_Array_lessThan, &$Data_Array_slice, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($n, $xs);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($n, $xs);
  };
  return $__fn;
})();

// Data_Array_singleton
$Data_Array_singleton = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = [$a];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_scanr
$Data_Array_scanr = ($Data_Function_Uncurried_runFn3)($Data_Array_scanrImpl);

// Data_Array_scanl
$Data_Array_scanl = ($Data_Function_Uncurried_runFn3)($Data_Array_scanlImpl);

// Data_Array_replicate
$Data_Array_replicate = ($Data_Function_Uncurried_runFn2)($Data_Array_replicateImpl);

// Data_Array_range
$Data_Array_range = ($Data_Function_Uncurried_runFn2)($Data_Array_rangeImpl);

// Data_Array_partition
$Data_Array_partition = ($Data_Function_Uncurried_runFn2)($Data_Array_partitionImpl);

// Data_Array_null
$Data_Array_null = (function() use (&$Data_Array_eq, &$Data_Array_length) {
  $__fn = function($xs) use (&$Data_Array_eq, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_eq)(($Data_Array_length)($xs), 0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_modifyAtIndices
$Data_Array_modifyAtIndices = (function() use (&$Data_Array_traverse_, &$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, &$Data_Array_ST_modify) {
  $__fn = function($dictFoldable) use (&$Data_Array_traverse_, &$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, &$Data_Array_ST_modify, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse_1 = ($Data_Array_traverse_)($dictFoldable);
    $__res = (function() use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, $traverse_1, &$Data_Array_ST_modify) {
  $__fn = function($is, $f = null, $xs = null) use (&$Control_Monad_ST_Internal_run, &$Data_Array_ST_withArray, $traverse_1, &$Data_Array_ST_modify, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_run)(($Data_Array_ST_withArray)((function() use ($traverse_1, &$Data_Array_ST_modify, $f, $is) {
  $__fn = function($res) use ($traverse_1, &$Data_Array_ST_modify, $f, $is, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse_1)((function() use (&$Data_Array_ST_modify, $f, $res) {
  $__fn = function($i) use (&$Data_Array_ST_modify, $f, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_modify)($i, $f, $res);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $is);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs));
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

// Data_Array_mapWithIndex
$Data_Array_mapWithIndex = ($Data_FunctorWithIndex_mapWithIndex)($Data_FunctorWithIndex_functorWithIndexArray);

// Data_Array_intersperse
$Data_Array_intersperse = (function() use (&$Data_Array_length) {
  $__body = function($a, $arr) use (&$Data_Array_length) {
    $v = ($Data_Array_length)($arr);
    $__case_0 = $v;
    if (true) {
$len = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $arr = null) use (&$Data_Array_length, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $arr);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $arr);
  };
  return $__fn;
})();

// Data_Array_intercalate
$Data_Array_intercalate = (function() use (&$Data_Array_intercalate1) {
  $__fn = function($dictMonoid) use (&$Data_Array_intercalate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_intercalate1)($dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_insertAt
$Data_Array_insertAt = ($Data_Function_Uncurried_runFn5)($Data_Array__insertAt, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_init
$Data_Array_init = (function() {
  $__body = function($xs) {
    $__case_0 = $xs;
    if (true) {
$xs1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($xs) use ($__body, &$__fn) {
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

// Data_Array_index
$Data_Array_index = ($Data_Function_Uncurried_runFn4)($Data_Array_indexImpl, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_last
$Data_Array_last = (function() use (&$Data_Array_index, &$Data_Array_sub, &$Data_Array_length) {
  $__fn = function($xs) use (&$Data_Array_index, &$Data_Array_sub, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_index)($xs, ($Data_Array_sub)(($Data_Array_length)($xs), 1));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_unsnoc
$Data_Array_unsnoc = (function() use (&$Data_Array_apply, &$Data_Array_map, &$Data_Array_init, &$Data_Array_last) {
  $__fn = function($xs) use (&$Data_Array_apply, &$Data_Array_map, &$Data_Array_init, &$Data_Array_last, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_apply)(($Data_Array_map)((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["init" => $v, "last" => $v1];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Array_init)($xs)), ($Data_Array_last)($xs));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_modifyAt
$Data_Array_modifyAt = (function() use (&$Data_Array_updateAt, &$Data_Maybe_maybe, &$Data_Maybe_Nothing, &$Data_Array_index) {
  $__fn = function($i, $f = null, $xs = null) use (&$Data_Array_updateAt, &$Data_Maybe_maybe, &$Data_Maybe_Nothing, &$Data_Array_index, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Array_updateAt, $i, $f, $xs) {
  $__fn = function($x) use (&$Data_Array_updateAt, $i, $f, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_updateAt)($i, ($f)($x), $xs);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($Data_Maybe_maybe)($Data_Maybe_Nothing, $go, ($Data_Array_index)($xs, $i));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_span
$Data_Array_span = (function() use (&$Data_Array_index, &$Data_Array_add, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_Array_slice, &$Data_Array_length) {
  $__body = function($p, $arr) use (&$Data_Array_index, &$Data_Array_add, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_Array_slice, &$Data_Array_length) {
    $go = (function() use (&$Data_Array_index, $arr, $p, &$go, &$Data_Array_add, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($i) use (&$Data_Array_index, $arr, $p, &$go, &$Data_Array_add, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($i) use (&$Data_Array_index, $arr, $p, &$go, &$Data_Array_add, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
while (true) {
$v = ($Data_Array_index)($arr, $i);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
$__case_0 = ($p)($x);
if (($__case_0 === true)) {
$__tco_tmp_0 = ($Data_Array_add)($i, 1);
$i = $__tco_tmp_0;
continue;
} else {
;
};
if (true) {
return ($Data_Maybe_Just)($i);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return $Data_Maybe_Nothing;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($i);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $breakIndex = ($go)(0);
    $__case_0 = $breakIndex;
    if (((($__case_0)->tag === "Just") && (($__case_0)->values[0] === 0))) {
return (object)["init" => [], "rest" => $arr];
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$i = ($__case_0)->values[0];
return (object)["init" => ($Data_Array_slice)(0, $i, $arr), "rest" => ($Data_Array_slice)($i, ($Data_Array_length)($arr), $arr)];
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return (object)["init" => $arr, "rest" => []];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($p, $arr = null) use (&$Data_Array_index, &$Data_Array_add, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_Array_slice, &$Data_Array_length, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($p, $arr);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($p, $arr);
  };
  return $__fn;
})();

// Data_Array_takeWhile
$Data_Array_takeWhile = (function() use (&$Data_Array_span) {
  $__fn = function($p, $xs = null) use (&$Data_Array_span, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (($Data_Array_span)($p, $xs))->init;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_unzip
$Data_Array_unzip = (function() use (&$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple) {
  $__fn = function($xs) use (&$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_run)(($Data_Array_bind)($Data_Array_ST_new, (function() use (&$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, $xs, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple) {
  $__fn = function($fsts) use (&$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, $xs, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)($Data_Array_ST_new, (function() use (&$Data_Array_bind, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, $xs, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, $fsts, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple) {
  $__fn = function($snds) use (&$Data_Array_bind, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, $xs, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, $fsts, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)(($Data_Array_ST_Iterator_iterator)((function() use (&$Data_Array_index, $xs) {
  $__fn = function($v) use (&$Data_Array_index, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_index)($xs, $v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), (function() use (&$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, $fsts, $snds, &$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple) {
  $__fn = function($iter) use (&$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, $fsts, $snds, &$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, &$Data_Array_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_discard)(($Data_Array_ST_Iterator_iterate)($iter, (function() use (&$Data_Array_discard, &$Data_Array_void, &$Data_Array_ST_push, $fsts, $snds) {
  $__body = function($v) use (&$Data_Array_discard, &$Data_Array_void, &$Data_Array_ST_push, $fsts, $snds) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$fst = ($__case_0)->values[0];
$snd = ($__case_0)->values[1];
return ($Data_Array_discard)(($Data_Array_void)(($Data_Array_ST_push)($fst, $fsts)), (function() use (&$Data_Array_void, &$Data_Array_ST_push, $snd, $snds) {
  $__fn = function($__dollar____unused) use (&$Data_Array_void, &$Data_Array_ST_push, $snd, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_void)(($Data_Array_ST_push)($snd, $snds));
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
  $__fn = function($v) use (&$Data_Array_discard, &$Data_Array_void, &$Data_Array_ST_push, $fsts, $snds, $__body, &$__fn) {
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
})()), (function() use (&$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, $fsts, $snds, &$Data_Array_pure, &$Data_Tuple_Tuple) {
  $__fn = function($__dollar____unused) use (&$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, $fsts, $snds, &$Data_Array_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)(($Data_Array_ST_unsafeFreeze)($fsts), (function() use (&$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, $snds, &$Data_Array_pure, &$Data_Tuple_Tuple) {
  $__fn = function($fsts__prime__) use (&$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, $snds, &$Data_Array_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)(($Data_Array_ST_unsafeFreeze)($snds), (function() use (&$Data_Array_pure, &$Data_Tuple_Tuple, $fsts__prime__) {
  $__fn = function($snds__prime__) use (&$Data_Array_pure, &$Data_Tuple_Tuple, $fsts__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_pure)(($Data_Tuple_Tuple)($fsts__prime__, $snds__prime__));
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
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_head
$Data_Array_head = (function() use (&$Data_Array_index) {
  $__fn = function($xs) use (&$Data_Array_index, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_index)($xs, 0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_nubBy
$Data_Array_nubBy = (function() use (&$Data_Array_sortBy, &$Data_Tuple_snd, &$Data_Array_mapWithIndex, &$Data_Tuple_Tuple, &$Data_Array_head, &$Data_Array_map1, &$Data_Array_sortWith1, &$Data_Tuple_fst, &$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_unsafeThaw, &$Data_Array_singleton, &$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, &$Data_Array_map2, &$Data_Array_compose, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_notEq, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push) {
  $__body = function($comp, $xs) use (&$Data_Array_sortBy, &$Data_Tuple_snd, &$Data_Array_mapWithIndex, &$Data_Tuple_Tuple, &$Data_Array_head, &$Data_Array_map1, &$Data_Array_sortWith1, &$Data_Tuple_fst, &$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_unsafeThaw, &$Data_Array_singleton, &$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, &$Data_Array_map2, &$Data_Array_compose, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_notEq, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push) {
    $indexedAndSorted = ($Data_Array_sortBy)((function() use ($comp, &$Data_Tuple_snd) {
  $__fn = function($x, $y = null) use ($comp, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($comp)(($Data_Tuple_snd)($x), ($Data_Tuple_snd)($y));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Array_mapWithIndex)($Data_Tuple_Tuple, $xs));
    $v = ($Data_Array_head)($indexedAndSorted);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return [];
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($Data_Array_map1)($Data_Tuple_snd, ($Data_Array_sortWith1)($Data_Tuple_fst, ($Control_Monad_ST_Internal_run)(($Data_Array_bind)(($Data_Array_ST_unsafeThaw)(($Data_Array_singleton)($x)), (function() use (&$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, $indexedAndSorted, &$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Tuple_snd, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_notEq, $comp, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push) {
  $__fn = function($result) use (&$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, $indexedAndSorted, &$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Tuple_snd, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_notEq, $comp, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_discard)(($Control_Monad_ST_Internal_foreach)($indexedAndSorted, (function() use (&$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Tuple_snd, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, $result, &$Data_Array_when, &$Data_Array_notEq, $comp, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push) {
  $__body = function($v1) use (&$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Tuple_snd, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, $result, &$Data_Array_when, &$Data_Array_notEq, $comp, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$pair = $__case_0;
$x__prime__ = ($__case_0)->values[1];
return ($Data_Array_bind)(($Data_Array_map2)(($Data_Array_compose)($Data_Tuple_snd, ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Array_compose, &$Data_Array_fromJust, &$Data_Array_last) {
  $__fn = function($__dollar____unused) use (&$Data_Array_compose, &$Data_Array_fromJust, &$Data_Array_last, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_compose)($Data_Array_fromJust, $Data_Array_last);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())), ($Data_Array_ST_unsafeFreeze)($result)), (function() use (&$Data_Array_when, &$Data_Array_notEq, $comp, $x__prime__, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push, $pair, $result) {
  $__fn = function($lst) use (&$Data_Array_when, &$Data_Array_notEq, $comp, $x__prime__, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push, $pair, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_when)(($Data_Array_notEq)(($comp)($lst, $x__prime__), $Data_Ordering_EQ), ($Data_Array_void)(($Data_Array_ST_push)($pair, $result)));
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
  $__fn = function($v1) use (&$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Tuple_snd, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, $result, &$Data_Array_when, &$Data_Array_notEq, $comp, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push, $__body, &$__fn) {
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
})()), (function() use (&$Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($__dollar____unused) use (&$Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_unsafeFreeze)($result);
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
})()))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($comp, $xs = null) use (&$Data_Array_sortBy, &$Data_Tuple_snd, &$Data_Array_mapWithIndex, &$Data_Tuple_Tuple, &$Data_Array_head, &$Data_Array_map1, &$Data_Array_sortWith1, &$Data_Tuple_fst, &$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_unsafeThaw, &$Data_Array_singleton, &$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, &$Data_Array_map2, &$Data_Array_compose, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_last, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_notEq, &$Data_Ordering_EQ, &$Data_Array_void, &$Data_Array_ST_push, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($comp, $xs);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($comp, $xs);
  };
  return $__fn;
})();

// Data_Array_nub
$Data_Array_nub = (function() use (&$Data_Array_nubBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Array_nubBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_nubBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_groupBy
$Data_Array_groupBy = (function() use (&$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, &$Data_Array_ST_Iterator_pushWhile, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray) {
  $__fn = function($op, $xs = null) use (&$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_push, &$Data_Array_ST_Iterator_pushWhile, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_run)(($Data_Array_bind)($Data_Array_ST_new, (function() use (&$Data_Array_bind, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, $xs, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_new, &$Data_Array_ST_push, &$Data_Array_ST_Iterator_pushWhile, $op, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray) {
  $__fn = function($result) use (&$Data_Array_bind, &$Data_Array_ST_Iterator_iterator, &$Data_Array_index, $xs, &$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_ST_new, &$Data_Array_ST_push, &$Data_Array_ST_Iterator_pushWhile, $op, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)(($Data_Array_ST_Iterator_iterator)((function() use (&$Data_Array_index, $xs) {
  $__fn = function($v) use (&$Data_Array_index, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_index)($xs, $v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), (function() use (&$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_push, &$Data_Array_ST_Iterator_pushWhile, $op, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result) {
  $__fn = function($iter) use (&$Data_Array_discard, &$Data_Array_ST_Iterator_iterate, &$Data_Array_void, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_push, &$Data_Array_ST_Iterator_pushWhile, $op, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_discard)(($Data_Array_ST_Iterator_iterate)($iter, (function() use (&$Data_Array_void, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_push, &$Data_Array_discard, &$Data_Array_ST_Iterator_pushWhile, $op, $iter, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result) {
  $__fn = function($x) use (&$Data_Array_void, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_ST_push, &$Data_Array_discard, &$Data_Array_ST_Iterator_pushWhile, $op, $iter, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_void)(($Data_Array_bind)($Data_Array_ST_new, (function() use (&$Data_Array_bind, &$Data_Array_ST_push, $x, &$Data_Array_discard, &$Data_Array_ST_Iterator_pushWhile, $op, $iter, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result) {
  $__fn = function($sub1) use (&$Data_Array_bind, &$Data_Array_ST_push, $x, &$Data_Array_discard, &$Data_Array_ST_Iterator_pushWhile, $op, $iter, &$Data_Array_ST_unsafeFreeze, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)(($Data_Array_ST_push)($x, $sub1), (function() use (&$Data_Array_discard, &$Data_Array_ST_Iterator_pushWhile, $op, $x, $iter, $sub1, &$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, &$Data_Array_ST_push, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result) {
  $__fn = function($__dollar____unused) use (&$Data_Array_discard, &$Data_Array_ST_Iterator_pushWhile, $op, $x, $iter, $sub1, &$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, &$Data_Array_ST_push, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_discard)(($Data_Array_ST_Iterator_pushWhile)(($op)($x), $iter, $sub1), (function() use (&$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, $sub1, &$Data_Array_ST_push, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result) {
  $__fn = function($__dollar____unused) use (&$Data_Array_bind, &$Data_Array_ST_unsafeFreeze, $sub1, &$Data_Array_ST_push, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)(($Data_Array_ST_unsafeFreeze)($sub1), (function() use (&$Data_Array_ST_push, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result) {
  $__fn = function($grp) use (&$Data_Array_ST_push, &$Data_Array_NonEmpty_Internal_NonEmptyArray, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_push)(($Data_Array_NonEmpty_Internal_NonEmptyArray)($grp), $result);
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
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), (function() use (&$Data_Array_ST_unsafeFreeze, $result) {
  $__fn = function($__dollar____unused) use (&$Data_Array_ST_unsafeFreeze, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_unsafeFreeze)($result);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_groupAllBy
$Data_Array_groupAllBy = (function() use (&$Data_Array_compose, &$Data_Array_groupBy, &$Data_Array_eq1, &$Data_Ordering_EQ, &$Data_Array_sortBy) {
  $__fn = function($cmp) use (&$Data_Array_compose, &$Data_Array_groupBy, &$Data_Array_eq1, &$Data_Ordering_EQ, &$Data_Array_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_compose)(($Data_Array_groupBy)((function() use (&$Data_Array_eq1, $cmp, &$Data_Ordering_EQ) {
  $__fn = function($x, $y = null) use (&$Data_Array_eq1, $cmp, &$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_eq1)(($cmp)($x, $y), $Data_Ordering_EQ);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), ($Data_Array_sortBy)($cmp));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_groupAll
$Data_Array_groupAll = (function() use (&$Data_Array_groupAllBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Array_groupAllBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_groupAllBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_group
$Data_Array_group = (function() use (&$Data_Eq_eq, &$Data_Array_groupBy) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Array_groupBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Array_groupBy, $eq2) {
  $__fn = function($xs) use (&$Data_Array_groupBy, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_groupBy)($eq2, $xs);
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

// Data_Array_fromFoldable
$Data_Array_fromFoldable = (function() use (&$Data_Function_Uncurried_runFn2, &$Data_Array_fromFoldableImpl, &$Data_Foldable_foldr) {
  $__fn = function($dictFoldable) use (&$Data_Function_Uncurried_runFn2, &$Data_Array_fromFoldableImpl, &$Data_Foldable_foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn2)($Data_Array_fromFoldableImpl, ($Data_Foldable_foldr)($dictFoldable));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_foldr
$Data_Array_foldr = ($Data_Foldable_foldr)($Data_Foldable_foldableArray);

// Data_Array_foldl
$Data_Array_foldl = ($Data_Foldable_foldl)($Data_Foldable_foldableArray);

// Data_Array_transpose
$Data_Array_transpose = (function() use (&$Data_Function_flip, &$Data_Array_foldl, &$Data_Maybe_Nothing, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Array_snoc, &$Data_Array_index, &$Data_Array_add) {
  $__fn = function($xs) use (&$Data_Function_flip, &$Data_Array_foldl, &$Data_Maybe_Nothing, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Array_snoc, &$Data_Array_index, &$Data_Array_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$buildNext = (function() use (&$Data_Function_flip, &$Data_Array_foldl, &$Data_Maybe_Nothing, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Array_snoc, &$Data_Array_index, $xs) {
  $__fn = function($idx) use (&$Data_Function_flip, &$Data_Array_foldl, &$Data_Maybe_Nothing, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Array_snoc, &$Data_Array_index, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)($Data_Array_foldl, $Data_Maybe_Nothing, (function() use (&$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Function_flip, &$Data_Array_snoc, &$Data_Array_index, $idx) {
  $__fn = function($acc, $nextArr = null) use (&$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Function_flip, &$Data_Array_snoc, &$Data_Array_index, $idx, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_maybe)($acc, (function() use (&$Data_Maybe_Just, &$Data_Maybe_maybe, &$Data_Function_flip, &$Data_Array_snoc, $acc) {
  $__fn = function($el) use (&$Data_Maybe_Just, &$Data_Maybe_maybe, &$Data_Function_flip, &$Data_Array_snoc, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_Just)(($Data_Maybe_maybe)([$el], ($Data_Function_flip)($Data_Array_snoc, $el), $acc));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Array_index)($nextArr, $idx));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $xs);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
$go = (function() use ($buildNext, &$go, &$Data_Array_add, &$Data_Array_snoc) {
  $__fn = function($idx, $allArrays = null) use ($buildNext, &$go, &$Data_Array_add, &$Data_Array_snoc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($idx, $allArrays) use ($buildNext, &$go, &$Data_Array_add, &$Data_Array_snoc) {
while (true) {
$v = ($buildNext)($idx);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $allArrays;
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$next = ($__case_0)->values[0];
$__tco_tmp_0 = ($Data_Array_add)($idx, 1);
$__tco_tmp_1 = ($Data_Array_snoc)($allArrays, $next);
$idx = $__tco_tmp_0;
$allArrays = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($idx, $allArrays);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)(0, []);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_foldRecM
$Data_Array_foldRecM = (function() use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Control_Monad_Rec_Class_tailRecM2) {
  $__fn = function($dictMonadRec) use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Control_Monad_Rec_Class_tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadRec)->Monad0)($Prim_undefined);
$pure1 = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$bind1 = ($Control_Bind_bind)((($Monad0)->Bind1)($Prim_undefined));
$tailRecM2 = ($Control_Monad_Rec_Class_tailRecM2)($dictMonadRec);
    $__res = (function() use ($tailRecM2) {
  $__fn = function($f, $b = null, $array = null) use ($tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() {
  $__body = function($res, $i) {
    $__case_0 = $res;
    $__case_1 = $i;
    if (true) {
$res1 = $__case_0;
$i1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($res, $i = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($res, $i);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($res, $i);
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($go, $b, 0);
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

// Data_Array_foldMap
$Data_Array_foldMap = (function() use (&$Data_Array_foldMap1) {
  $__fn = function($dictMonoid) use (&$Data_Array_foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_foldMap1)($dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_foldM
$Data_Array_foldM = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_Function_Uncurried_runFn3, &$Data_Array_unconsImpl, &$Data_Array_foldM) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_Function_Uncurried_runFn3, &$Data_Array_unconsImpl, &$Data_Array_foldM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_Function_Uncurried_runFn3, &$Data_Array_unconsImpl, &$Data_Array_foldM) {
while (true) {
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind1 = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return (function() use (&$Data_Function_Uncurried_runFn3, &$Data_Array_unconsImpl, $pure1, $bind1, &$Data_Array_foldM, $dictMonad) {
  $__fn = function($f, $b = null) use (&$Data_Function_Uncurried_runFn3, &$Data_Array_unconsImpl, $pure1, $bind1, &$Data_Array_foldM, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn3)($Data_Array_unconsImpl, (function() use ($pure1, $b) {
  $__fn = function($v) use ($pure1, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure1)($b);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), (function() use ($bind1, $f, $b, &$Data_Array_foldM, $dictMonad) {
  $__fn = function($a, $as = null) use ($bind1, $f, $b, &$Data_Array_foldM, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind1)(($f)($b, $a), (function() use (&$Data_Array_foldM, $dictMonad, $f, $as) {
  $__fn = function($b__prime__) use (&$Data_Array_foldM, $dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_foldM)($dictMonad, $f, $b__prime__, $as);
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
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
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

// Data_Array_fold
$Data_Array_fold = (function() use (&$Data_Array_fold1) {
  $__fn = function($dictMonoid) use (&$Data_Array_fold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_fold1)($dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_findMap
$Data_Array_findMap = ($Data_Function_Uncurried_runFn4)($Data_Array_findMapImpl, $Data_Maybe_Nothing, $Data_Maybe_isJust);

// Data_Array_findLastIndex
$Data_Array_findLastIndex = ($Data_Function_Uncurried_runFn4)($Data_Array_findLastIndexImpl, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_insertBy
$Data_Array_insertBy = (function() use (&$Data_Maybe_maybe, &$Data_Array_add, &$Data_Array_findLastIndex, &$Data_Array_eq1, &$Data_Ordering_GT, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_insertAt) {
  $__fn = function($cmp, $x = null, $ys = null) use (&$Data_Maybe_maybe, &$Data_Array_add, &$Data_Array_findLastIndex, &$Data_Array_eq1, &$Data_Ordering_GT, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_insertAt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$i = ($Data_Maybe_maybe)(0, (function() use (&$Data_Array_add) {
  $__fn = function($v) use (&$Data_Array_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_add)($v, 1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Array_findLastIndex)((function() use (&$Data_Array_eq1, $cmp, $x, &$Data_Ordering_GT) {
  $__fn = function($y) use (&$Data_Array_eq1, $cmp, $x, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_eq1)(($cmp)($x, $y), $Data_Ordering_GT);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $ys));
    $__res = ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Array_fromJust, &$Data_Array_insertAt, $i, $x, $ys) {
  $__fn = function($__dollar____unused) use (&$Data_Array_fromJust, &$Data_Array_insertAt, $i, $x, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_fromJust)(($Data_Array_insertAt)($i, $x, $ys));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_insert
$Data_Array_insert = (function() use (&$Data_Array_insertBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Array_insertBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_insertBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_findIndex
$Data_Array_findIndex = ($Data_Function_Uncurried_runFn4)($Data_Array_findIndexImpl, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_find
$Data_Array_find = (function() use (&$Data_Array_map, &$Partial_Unsafe_unsafePartial, &$Data_Array_unsafeIndex1, &$Data_Array_findIndex) {
  $__fn = function($f, $xs = null) use (&$Data_Array_map, &$Partial_Unsafe_unsafePartial, &$Data_Array_unsafeIndex1, &$Data_Array_findIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_map)(($Partial_Unsafe_unsafePartial)((function() use (&$Data_Array_unsafeIndex1, $xs) {
  $__fn = function($__dollar____unused) use (&$Data_Array_unsafeIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_unsafeIndex1)($xs);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), ($Data_Array_findIndex)($f, $xs));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_filter
$Data_Array_filter = ($Data_Function_Uncurried_runFn2)($Data_Array_filterImpl);

// Data_Array_intersectBy
$Data_Array_intersectBy = (function() use (&$Data_Array_filter, &$Data_Maybe_isJust, &$Data_Array_findIndex) {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$Data_Array_filter, &$Data_Maybe_isJust, &$Data_Array_findIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_filter)((function() use (&$Data_Maybe_isJust, &$Data_Array_findIndex, $eq2, $ys) {
  $__fn = function($x) use (&$Data_Maybe_isJust, &$Data_Array_findIndex, $eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_isJust)(($Data_Array_findIndex)(($eq2)($x), $ys));
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

// Data_Array_intersect
$Data_Array_intersect = (function() use (&$Data_Array_intersectBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_intersectBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_intersectBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_elemLastIndex
$Data_Array_elemLastIndex = (function() use (&$Data_Eq_eq, &$Data_Array_findLastIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Array_findLastIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Array_findLastIndex, $eq2) {
  $__fn = function($x) use (&$Data_Array_findLastIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_findLastIndex)((function() use ($eq2, $x) {
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

// Data_Array_elemIndex
$Data_Array_elemIndex = (function() use (&$Data_Eq_eq, &$Data_Array_findIndex) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Array_findIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Array_findIndex, $eq2) {
  $__fn = function($x) use (&$Data_Array_findIndex, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_findIndex)((function() use ($eq2, $x) {
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

// Data_Array_notElem
$Data_Array_notElem = (function() use (&$Data_Array_elemIndex, &$Data_Maybe_isNothing) {
  $__fn = function($dictEq) use (&$Data_Array_elemIndex, &$Data_Maybe_isNothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elemIndex1 = ($Data_Array_elemIndex)($dictEq);
    $__res = (function() use (&$Data_Maybe_isNothing, $elemIndex1) {
  $__fn = function($a, $arr = null) use (&$Data_Maybe_isNothing, $elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_isNothing)(($elemIndex1)($a, $arr));
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

// Data_Array_elem
$Data_Array_elem = (function() use (&$Data_Array_elemIndex, &$Data_Maybe_isJust) {
  $__fn = function($dictEq) use (&$Data_Array_elemIndex, &$Data_Maybe_isJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elemIndex1 = ($Data_Array_elemIndex)($dictEq);
    $__res = (function() use (&$Data_Maybe_isJust, $elemIndex1) {
  $__fn = function($a, $arr = null) use (&$Data_Maybe_isJust, $elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_isJust)(($elemIndex1)($a, $arr));
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

// Data_Array_dropWhile
$Data_Array_dropWhile = (function() use (&$Data_Array_span) {
  $__fn = function($p, $xs = null) use (&$Data_Array_span, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (($Data_Array_span)($p, $xs))->rest;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_dropEnd
$Data_Array_dropEnd = (function() use (&$Data_Array_take, &$Data_Array_sub, &$Data_Array_length) {
  $__fn = function($n, $xs = null) use (&$Data_Array_take, &$Data_Array_sub, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_take)(($Data_Array_sub)(($Data_Array_length)($xs), $n), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_drop
$Data_Array_drop = (function() use (&$Data_Array_lessThan, &$Data_Array_slice, &$Data_Array_length) {
  $__body = function($n, $xs) use (&$Data_Array_lessThan, &$Data_Array_slice, &$Data_Array_length) {
    $__case_0 = ($Data_Array_lessThan)($n, 1);
    if (($__case_0 === true)) {
return $xs;
} else {
;
};
    if (true) {
return ($Data_Array_slice)($n, ($Data_Array_length)($xs), $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n, $xs = null) use (&$Data_Array_lessThan, &$Data_Array_slice, &$Data_Array_length, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($n, $xs);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($n, $xs);
  };
  return $__fn;
})();

// Data_Array_takeEnd
$Data_Array_takeEnd = (function() use (&$Data_Array_drop, &$Data_Array_sub, &$Data_Array_length) {
  $__fn = function($n, $xs = null) use (&$Data_Array_drop, &$Data_Array_sub, &$Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_drop)(($Data_Array_sub)(($Data_Array_length)($xs), $n), $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_deleteAt
$Data_Array_deleteAt = ($Data_Function_Uncurried_runFn4)($Data_Array__deleteAt, $Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Array_deleteBy
$Data_Array_deleteBy = (function() use (&$Data_Maybe_maybe, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_deleteAt, &$Data_Array_findIndex) {
  $__body = function($v, $v1, $v2) use (&$Data_Maybe_maybe, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_deleteAt, &$Data_Array_findIndex) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if (($__case_2 === /* ArrayLiteral */)) {
return [];
} else {
;
};
    if (true) {
$eq2 = $__case_0;
$x = $__case_1;
$ys = $__case_2;
return ($Data_Maybe_maybe)($ys, (function() use (&$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_deleteAt, $ys) {
  $__fn = function($i) use (&$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_deleteAt, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Array_fromJust, &$Data_Array_deleteAt, $i, $ys) {
  $__fn = function($__dollar____unused) use (&$Data_Array_fromJust, &$Data_Array_deleteAt, $i, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_fromJust)(($Data_Array_deleteAt)($i, $ys));
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
})(), ($Data_Array_findIndex)(($eq2)($x), $ys));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Maybe_maybe, &$Partial_Unsafe_unsafePartial, &$Data_Array_fromJust, &$Data_Array_deleteAt, &$Data_Array_findIndex, $__body, &$__fn) {
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

// Data_Array_delete
$Data_Array_delete = (function() use (&$Data_Array_deleteBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_deleteBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_deleteBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_difference
$Data_Array_difference = (function() use (&$Data_Array_foldr, &$Data_Array_delete) {
  $__fn = function($dictEq) use (&$Data_Array_foldr, &$Data_Array_delete, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_foldr)(($Data_Array_delete)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_cons
$Data_Array_cons = (function() use (&$Data_Array_append) {
  $__fn = function($x, $xs = null) use (&$Data_Array_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_append)([$x], $xs);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_some
$Data_Array_some = (function() use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_Array_cons, &$Data_Array_many) {
  $__fn = function($dictAlternative) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_Array_cons, &$Data_Array_many, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictAlternative) use (&$Control_Apply_apply, &$Prim_undefined, &$Data_Functor_map, &$Control_Lazy_defer, &$Data_Array_cons, &$Data_Array_many) {
while (true) {
$apply1 = ($Control_Apply_apply)((((($dictAlternative)->Applicative0)($Prim_undefined))->Apply0)($Prim_undefined));
$map3 = ($Data_Functor_map)((((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Lazy_defer, $apply1, $map3, &$Data_Array_cons, &$Data_Array_many, $dictAlternative) {
  $__fn = function($dictLazy) use (&$Control_Lazy_defer, $apply1, $map3, &$Data_Array_cons, &$Data_Array_many, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$defer = ($Control_Lazy_defer)($dictLazy);
    $__res = (function() use ($apply1, $map3, &$Data_Array_cons, $defer, &$Data_Array_many, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, &$Data_Array_cons, $defer, &$Data_Array_many, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($map3)($Data_Array_cons, $v), ($defer)((function() use (&$Data_Array_many, $dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use (&$Data_Array_many, $dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_many)($dictAlternative, $dictLazy, $v);
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

// Data_Array_many
$Data_Array_many = (function() use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Array_some) {
  $__fn = function($dictAlternative) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Array_some, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictAlternative) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Array_some) {
while (true) {
$alt = ($Control_Alt_alt)((((($dictAlternative)->Plus1)($Prim_undefined))->Alt0)($Prim_undefined));
$pure1 = ($Control_Applicative_pure)((($dictAlternative)->Applicative0)($Prim_undefined));
return (function() use ($alt, &$Data_Array_some, $dictAlternative, $pure1) {
  $__fn = function($dictLazy, $v = null) use ($alt, &$Data_Array_some, $dictAlternative, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($Data_Array_some)($dictAlternative, $dictLazy, $v), ($pure1)([]));
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

// Data_Array_concatMap
$Data_Array_concatMap = ($Data_Function_flip)(($Control_Bind_bind)($Control_Bind_bindArray));

// Data_Array_mapMaybe
$Data_Array_mapMaybe = (function() use (&$Data_Array_concatMap, &$Data_Array_compose, &$Data_Maybe_maybe, &$Data_Array_singleton) {
  $__fn = function($f) use (&$Data_Array_concatMap, &$Data_Array_compose, &$Data_Maybe_maybe, &$Data_Array_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_concatMap)(($Data_Array_compose)(($Data_Maybe_maybe)([], $Data_Array_singleton), $f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_filterA
$Data_Array_filterA = (function() use (&$Data_Array_traverse, &$Data_Functor_map, &$Prim_undefined, &$Data_Array_composeFlipped, &$Data_Tuple_Tuple, &$Data_Array_mapMaybe, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictApplicative) use (&$Data_Array_traverse, &$Data_Functor_map, &$Prim_undefined, &$Data_Array_composeFlipped, &$Data_Tuple_Tuple, &$Data_Array_mapMaybe, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse1 = ($Data_Array_traverse)($dictApplicative);
$map3 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use (&$Data_Array_composeFlipped, $traverse1, $map3, &$Data_Tuple_Tuple, &$Data_Array_mapMaybe, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($p) use (&$Data_Array_composeFlipped, $traverse1, $map3, &$Data_Tuple_Tuple, &$Data_Array_mapMaybe, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_composeFlipped)(($traverse1)((function() use ($map3, &$Data_Tuple_Tuple, $p) {
  $__fn = function($x) use ($map3, &$Data_Tuple_Tuple, $p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map3)(($Data_Tuple_Tuple)($x), ($p)($x));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), ($map3)(($Data_Array_mapMaybe)((function() use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$__case_0 = $b;
if (($__case_0 === true)) {
return ($Data_Maybe_Just)($x);
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
  $__fn = function($v) use (&$Data_Maybe_Just, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})())));
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

// Data_Array_catMaybes
$Data_Array_catMaybes = ($Data_Array_mapMaybe)(($Control_Category_identity)($Control_Category_categoryFn));

// Data_Array_any
$Data_Array_any = ($Data_Function_Uncurried_runFn2)($Data_Array_anyImpl);

// Data_Array_nubByEq
$Data_Array_nubByEq = (function() use (&$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, &$Data_Array_map2, &$Data_Array_compose, &$Data_Array_not, &$Data_Array_any, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push) {
  $__fn = function($eq2, $xs = null) use (&$Control_Monad_ST_Internal_run, &$Data_Array_bind, &$Data_Array_ST_new, &$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, &$Data_Array_map2, &$Data_Array_compose, &$Data_Array_not, &$Data_Array_any, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_run)(($Data_Array_bind)($Data_Array_ST_new, (function() use (&$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, $xs, &$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Array_not, &$Data_Array_any, $eq2, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push) {
  $__fn = function($arr) use (&$Data_Array_discard, &$Control_Monad_ST_Internal_foreach, $xs, &$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Array_not, &$Data_Array_any, $eq2, &$Data_Array_ST_unsafeFreeze, &$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_discard)(($Control_Monad_ST_Internal_foreach)($xs, (function() use (&$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Array_not, &$Data_Array_any, $eq2, &$Data_Array_ST_unsafeFreeze, $arr, &$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push) {
  $__fn = function($x) use (&$Data_Array_bind, &$Data_Array_map2, &$Data_Array_compose, &$Data_Array_not, &$Data_Array_any, $eq2, &$Data_Array_ST_unsafeFreeze, $arr, &$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_bind)(($Data_Array_map2)(($Data_Array_compose)($Data_Array_not, ($Data_Array_any)((function() use ($eq2, $x) {
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
})())), ($Data_Array_ST_unsafeFreeze)($arr)), (function() use (&$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push, $x, $arr) {
  $__fn = function($e) use (&$Data_Array_when, &$Data_Array_void, &$Data_Array_ST_push, $x, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_when)($e, ($Data_Array_void)(($Data_Array_ST_push)($x, $arr)));
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
})()), (function() use (&$Data_Array_ST_unsafeFreeze, $arr) {
  $__fn = function($__dollar____unused) use (&$Data_Array_ST_unsafeFreeze, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_ST_unsafeFreeze)($arr);
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
})()));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_nubEq
$Data_Array_nubEq = (function() use (&$Data_Array_nubByEq, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_nubByEq, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_nubByEq)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_unionBy
$Data_Array_unionBy = (function() use (&$Data_Array_append, &$Data_Array_foldl, &$Data_Function_flip, &$Data_Array_deleteBy, &$Data_Array_nubByEq) {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$Data_Array_append, &$Data_Array_foldl, &$Data_Function_flip, &$Data_Array_deleteBy, &$Data_Array_nubByEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_append)($xs, ($Data_Array_foldl)(($Data_Function_flip)(($Data_Array_deleteBy)($eq2)), ($Data_Array_nubByEq)($eq2, $ys), $xs));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_union
$Data_Array_union = (function() use (&$Data_Array_unionBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_unionBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_unionBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_alterAt
$Data_Array_alterAt = (function() use (&$Data_Array_deleteAt, &$Data_Array_updateAt, &$Data_Maybe_maybe, &$Data_Maybe_Nothing, &$Data_Array_index) {
  $__fn = function($i, $f = null, $xs = null) use (&$Data_Array_deleteAt, &$Data_Array_updateAt, &$Data_Maybe_maybe, &$Data_Maybe_Nothing, &$Data_Array_index, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($f, &$Data_Array_deleteAt, $i, $xs, &$Data_Array_updateAt) {
  $__body = function($x) use ($f, &$Data_Array_deleteAt, $i, $xs, &$Data_Array_updateAt) {
    $v = ($f)($x);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($Data_Array_deleteAt)($i, $xs);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
return ($Data_Array_updateAt)($i, $x__prime__, $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use ($f, &$Data_Array_deleteAt, $i, $xs, &$Data_Array_updateAt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($x);
  };
  return $__fn;
})();
    $__res = ($Data_Maybe_maybe)($Data_Maybe_Nothing, $go, ($Data_Array_index)($xs, $i));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_all
$Data_Array_all = ($Data_Function_Uncurried_runFn2)($Data_Array_allImpl);

