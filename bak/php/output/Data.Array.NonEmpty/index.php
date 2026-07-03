<?php

namespace Data\Array\NonEmpty;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Array_NonEmpty_compose
$Data_Array_NonEmpty_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Array_NonEmpty_coerce
$Data_Array_NonEmpty_coerce = ($Safe_Coerce_coerce)($Prim_undefined);

// Data_Array_NonEmpty_max
$Data_Array_NonEmpty_max = ($Data_Ord_max)($Data_Ord_ordInt);

// Data_Array_NonEmpty_append
$Data_Array_NonEmpty_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupArray);

// Data_Array_NonEmpty_intercalate1
$Data_Array_NonEmpty_intercalate1 = ($Data_Semigroup_Foldable_intercalate)($Data_Array_NonEmpty_Internal_foldable1NonEmptyArray);

// Data_Array_NonEmpty_greaterThan
$Data_Array_NonEmpty_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_Array_NonEmpty_foldMap11
$Data_Array_NonEmpty_foldMap11 = ($Data_Semigroup_Foldable_foldMap1)($Data_Array_NonEmpty_Internal_foldable1NonEmptyArray);

// Data_Array_NonEmpty_fold11
$Data_Array_NonEmpty_fold11 = ($Data_Semigroup_Foldable_fold1)($Data_Array_NonEmpty_Internal_foldable1NonEmptyArray);

// Data_Array_NonEmpty_fromJust
$Data_Array_NonEmpty_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Array_NonEmpty_unsafeIndex1
$Data_Array_NonEmpty_unsafeIndex1 = ($Data_Array_unsafeIndex)($Prim_undefined);

// Data_Array_NonEmpty_lessThan
$Data_Array_NonEmpty_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_Array_NonEmpty_sub
$Data_Array_NonEmpty_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Array_NonEmpty_add
$Data_Array_NonEmpty_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Array_NonEmpty_unsafeFromArrayF
$Data_Array_NonEmpty_unsafeFromArrayF = $Unsafe_Coerce_unsafeCoerce;

// Data_Array_NonEmpty_unsafeFromArray
$Data_Array_NonEmpty_unsafeFromArray = $Data_Array_NonEmpty_Internal_NonEmptyArray;

// Data_Array_NonEmpty_transpose
$Data_Array_NonEmpty_transpose = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_coerce, ($Data_Array_NonEmpty_compose)($Data_Array_transpose, $Data_Array_NonEmpty_coerce));

// Data_Array_NonEmpty_toArray
$Data_Array_NonEmpty_toArray = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
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

// Data_Array_NonEmpty_unionBy'
$Data_Array_NonEmpty_unionBy__prime__ = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_unionBy, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($eq, $xs = null) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_unionBy, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArray, ($Data_Array_unionBy)($eq, ($Data_Array_NonEmpty_toArray)($xs)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_union'
$Data_Array_NonEmpty_union__prime__ = (function() use (&$Data_Array_NonEmpty_unionBy__prime__, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_NonEmpty_unionBy__prime__, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unionBy__prime__)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unionBy
$Data_Array_NonEmpty_unionBy = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unionBy__prime__, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($eq, $xs = null) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unionBy__prime__, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)(($Data_Array_NonEmpty_unionBy__prime__)($eq, $xs), $Data_Array_NonEmpty_toArray);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_union
$Data_Array_NonEmpty_union = (function() use (&$Data_Array_NonEmpty_unionBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_NonEmpty_unionBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unionBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unzip
$Data_Array_NonEmpty_unzip = ($Data_Array_NonEmpty_compose)(($Data_Bifunctor_bimap)($Data_Bifunctor_bifunctorTuple, $Data_Array_NonEmpty_unsafeFromArray, $Data_Array_NonEmpty_unsafeFromArray), ($Data_Array_NonEmpty_compose)($Data_Array_unzip, $Data_Array_NonEmpty_toArray));

// Data_Array_NonEmpty_updateAt
$Data_Array_NonEmpty_updateAt = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_updateAt, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($i, $x = null) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_updateAt, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArrayF, ($Data_Array_NonEmpty_compose)(($Data_Array_updateAt)($i, $x), $Data_Array_NonEmpty_toArray));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_zip
$Data_Array_NonEmpty_zip = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_zip, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($xs, $ys = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_zip, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_zip)(($Data_Array_NonEmpty_toArray)($xs), ($Data_Array_NonEmpty_toArray)($ys)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_zipWith
$Data_Array_NonEmpty_zipWith = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_zipWith, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($f, $xs = null, $ys = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_zipWith, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_zipWith)($f, ($Data_Array_NonEmpty_toArray)($xs), ($Data_Array_NonEmpty_toArray)($ys)));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_zipWithA
$Data_Array_NonEmpty_zipWithA = (function() use (&$Data_Array_zipWithA, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($dictApplicative) use (&$Data_Array_zipWithA, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$zipWithA1 = ($Data_Array_zipWithA)($dictApplicative);
    $__res = (function() use (&$Data_Array_NonEmpty_unsafeFromArrayF, $zipWithA1, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($f, $xs = null, $ys = null) use (&$Data_Array_NonEmpty_unsafeFromArrayF, $zipWithA1, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArrayF)(($zipWithA1)($f, ($Data_Array_NonEmpty_toArray)($xs), ($Data_Array_NonEmpty_toArray)($ys)));
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

// Data_Array_NonEmpty_splitAt
$Data_Array_NonEmpty_splitAt = (function() use (&$Data_Array_splitAt, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($i, $xs = null) use (&$Data_Array_splitAt, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_splitAt)($i, ($Data_Array_NonEmpty_toArray)($xs));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_some
$Data_Array_NonEmpty_some = (function() use (&$Data_Array_some, &$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF) {
  $__fn = function($dictAlternative) use (&$Data_Array_some, &$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$some1 = ($Data_Array_some)($dictAlternative);
    $__res = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, $some1) {
  $__fn = function($dictLazy) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, $some1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArrayF, ($some1)($dictLazy));
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

// Data_Array_NonEmpty_snoc'
$Data_Array_NonEmpty_snoc__prime__ = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_snoc) {
  $__fn = function($xs, $x = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_snoc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_snoc)($xs, $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_snoc
$Data_Array_NonEmpty_snoc = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_snoc, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($xs, $x = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_snoc, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_snoc)(($Data_Array_NonEmpty_toArray)($xs), $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_singleton
$Data_Array_NonEmpty_singleton = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArray, $Data_Array_singleton);

// Data_Array_NonEmpty_replicate
$Data_Array_NonEmpty_replicate = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_replicate, &$Data_Array_NonEmpty_max) {
  $__fn = function($i, $x = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_replicate, &$Data_Array_NonEmpty_max, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_replicate)(($Data_Array_NonEmpty_max)(1, $i), $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_range
$Data_Array_NonEmpty_range = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_range) {
  $__fn = function($x, $y = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_range, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_range)($x, $y));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_prependArray
$Data_Array_NonEmpty_prependArray = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_NonEmpty_append, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($xs, $ys = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_NonEmpty_append, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_NonEmpty_append)($xs, ($Data_Array_NonEmpty_toArray)($ys)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_modifyAt
$Data_Array_NonEmpty_modifyAt = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_modifyAt, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($i, $f = null) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_modifyAt, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArrayF, ($Data_Array_NonEmpty_compose)(($Data_Array_modifyAt)($i, $f), $Data_Array_NonEmpty_toArray));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersectBy'
$Data_Array_NonEmpty_intersectBy__prime__ = (function() use (&$Data_Array_intersectBy, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($eq, $xs = null) use (&$Data_Array_intersectBy, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_intersectBy)($eq, ($Data_Array_NonEmpty_toArray)($xs));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersectBy
$Data_Array_NonEmpty_intersectBy = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_intersectBy__prime__, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($eq, $xs = null) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_intersectBy__prime__, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)(($Data_Array_NonEmpty_intersectBy__prime__)($eq, $xs), $Data_Array_NonEmpty_toArray);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersect'
$Data_Array_NonEmpty_intersect__prime__ = (function() use (&$Data_Array_NonEmpty_intersectBy__prime__, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_NonEmpty_intersectBy__prime__, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_intersectBy__prime__)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersect
$Data_Array_NonEmpty_intersect = (function() use (&$Data_Array_NonEmpty_intersectBy, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Array_NonEmpty_intersectBy, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_intersectBy)(($Data_Eq_eq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intercalate
$Data_Array_NonEmpty_intercalate = (function() use (&$Data_Array_NonEmpty_intercalate1) {
  $__fn = function($dictSemigroup) use (&$Data_Array_NonEmpty_intercalate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_intercalate1)($dictSemigroup);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_insertAt
$Data_Array_NonEmpty_insertAt = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_insertAt, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($i, $x = null) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArrayF, &$Data_Array_insertAt, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArrayF, ($Data_Array_NonEmpty_compose)(($Data_Array_insertAt)($i, $x), $Data_Array_NonEmpty_toArray));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fromFoldable1
$Data_Array_NonEmpty_fromFoldable1 = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_fromFoldable, &$Prim_undefined) {
  $__fn = function($dictFoldable1) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_fromFoldable, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArray, ($Data_Array_fromFoldable)((($dictFoldable1)->Foldable0)($Prim_undefined)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fromArray
$Data_Array_NonEmpty_fromArray = (function() {
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

// Data_Array_NonEmpty_fromFoldable
$Data_Array_NonEmpty_fromFoldable = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_fromArray, &$Data_Array_fromFoldable) {
  $__fn = function($dictFoldable) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_fromArray, &$Data_Array_fromFoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_fromArray, ($Data_Array_fromFoldable)($dictFoldable));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_transpose'
$Data_Array_NonEmpty_transpose__prime__ = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_fromArray, ($Data_Array_NonEmpty_compose)($Data_Array_transpose, $Data_Array_NonEmpty_coerce));

// Data_Array_NonEmpty_foldr1
$Data_Array_NonEmpty_foldr1 = ($Data_Semigroup_Foldable_foldr1)($Data_Array_NonEmpty_Internal_foldable1NonEmptyArray);

// Data_Array_NonEmpty_foldl1
$Data_Array_NonEmpty_foldl1 = ($Data_Semigroup_Foldable_foldl1)($Data_Array_NonEmpty_Internal_foldable1NonEmptyArray);

// Data_Array_NonEmpty_foldMap1
$Data_Array_NonEmpty_foldMap1 = (function() use (&$Data_Array_NonEmpty_foldMap11) {
  $__fn = function($dictSemigroup) use (&$Data_Array_NonEmpty_foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_foldMap11)($dictSemigroup);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fold1
$Data_Array_NonEmpty_fold1 = (function() use (&$Data_Array_NonEmpty_fold11) {
  $__fn = function($dictSemigroup) use (&$Data_Array_NonEmpty_fold11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_fold11)($dictSemigroup);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_difference'
$Data_Array_NonEmpty_difference__prime__ = (function() use (&$Data_Array_difference, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($dictEq) use (&$Data_Array_difference, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$difference1 = ($Data_Array_difference)($dictEq);
    $__res = (function() use ($difference1, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($xs) use ($difference1, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($difference1)(($Data_Array_NonEmpty_toArray)($xs));
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

// Data_Array_NonEmpty_cons'
$Data_Array_NonEmpty_cons__prime__ = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_cons) {
  $__fn = function($x, $xs = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_cons)($x, $xs));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fromNonEmpty
$Data_Array_NonEmpty_fromNonEmpty = (function() use (&$Data_Array_NonEmpty_cons__prime__) {
  $__body = function($v) use (&$Data_Array_NonEmpty_cons__prime__) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Array_NonEmpty_cons__prime__)($x, $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Array_NonEmpty_cons__prime__, $__body, &$__fn) {
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

// Data_Array_NonEmpty_concatMap
$Data_Array_NonEmpty_concatMap = ($Data_Function_flip)(($Control_Bind_bind)($Data_Array_NonEmpty_Internal_bindNonEmptyArray));

// Data_Array_NonEmpty_concat
$Data_Array_NonEmpty_concat = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArray, ($Data_Array_NonEmpty_compose)($Data_Array_concat, ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_toArray, ($Data_Functor_map)($Data_Array_NonEmpty_Internal_functorNonEmptyArray, $Data_Array_NonEmpty_toArray))));

// Data_Array_NonEmpty_appendArray
$Data_Array_NonEmpty_appendArray = (function() use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_NonEmpty_append, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($xs, $ys = null) use (&$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_NonEmpty_append, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeFromArray)(($Data_Array_NonEmpty_append)(($Data_Array_NonEmpty_toArray)($xs), $ys));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_alterAt
$Data_Array_NonEmpty_alterAt = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_alterAt, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($i, $f = null) use (&$Data_Array_NonEmpty_compose, &$Data_Array_alterAt, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)(($Data_Array_alterAt)($i, $f), $Data_Array_NonEmpty_toArray);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_adaptMaybe
$Data_Array_NonEmpty_adaptMaybe = (function() use (&$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_fromJust, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($f) use (&$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_fromJust, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_fromJust, $f, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($__dollar____unused) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_fromJust, $f, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_fromJust, ($Data_Array_NonEmpty_compose)($f, $Data_Array_NonEmpty_toArray));
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

// Data_Array_NonEmpty_head
$Data_Array_NonEmpty_head = ($Data_Array_NonEmpty_adaptMaybe)($Data_Array_head);

// Data_Array_NonEmpty_init
$Data_Array_NonEmpty_init = ($Data_Array_NonEmpty_adaptMaybe)($Data_Array_init);

// Data_Array_NonEmpty_last
$Data_Array_NonEmpty_last = ($Data_Array_NonEmpty_adaptMaybe)($Data_Array_last);

// Data_Array_NonEmpty_tail
$Data_Array_NonEmpty_tail = ($Data_Array_NonEmpty_adaptMaybe)($Data_Array_tail);

// Data_Array_NonEmpty_uncons
$Data_Array_NonEmpty_uncons = ($Data_Array_NonEmpty_adaptMaybe)($Data_Array_uncons);

// Data_Array_NonEmpty_toNonEmpty
$Data_Array_NonEmpty_toNonEmpty = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn, $Data_Array_NonEmpty_uncons, (function() use (&$Data_NonEmpty_NonEmpty) {
  $__body = function($v) use (&$Data_NonEmpty_NonEmpty) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$x = ($__case_0)->head;
$xs = ($__case_0)->tail;
return ($Data_NonEmpty_NonEmpty)($x, $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_NonEmpty_NonEmpty, $__body, &$__fn) {
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

// Data_Array_NonEmpty_unsnoc
$Data_Array_NonEmpty_unsnoc = ($Data_Array_NonEmpty_adaptMaybe)($Data_Array_unsnoc);

// Data_Array_NonEmpty_adaptAny
$Data_Array_NonEmpty_adaptAny = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_toArray) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_toArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($f, $Data_Array_NonEmpty_toArray);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_all
$Data_Array_NonEmpty_all = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_all) {
  $__fn = function($p) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_all, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_all)($p));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_any
$Data_Array_NonEmpty_any = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_any) {
  $__fn = function($p) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_any, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_any)($p));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_catMaybes
$Data_Array_NonEmpty_catMaybes = ($Data_Array_NonEmpty_adaptAny)($Data_Array_catMaybes);

// Data_Array_NonEmpty_delete
$Data_Array_NonEmpty_delete = (function() use (&$Data_Array_delete, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictEq) use (&$Data_Array_delete, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$delete1 = ($Data_Array_delete)($dictEq);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $delete1) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_adaptAny, $delete1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($delete1)($x));
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

// Data_Array_NonEmpty_deleteAt
$Data_Array_NonEmpty_deleteAt = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_deleteAt) {
  $__fn = function($i) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_deleteAt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_deleteAt)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_deleteBy
$Data_Array_NonEmpty_deleteBy = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_deleteBy) {
  $__fn = function($f, $x = null) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_deleteBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_deleteBy)($f, $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_difference
$Data_Array_NonEmpty_difference = (function() use (&$Data_Array_NonEmpty_difference__prime__, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictEq) use (&$Data_Array_NonEmpty_difference__prime__, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$difference__prime__1 = ($Data_Array_NonEmpty_difference__prime__)($dictEq);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $difference__prime__1) {
  $__fn = function($xs) use (&$Data_Array_NonEmpty_adaptAny, $difference__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($difference__prime__1)($xs));
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

// Data_Array_NonEmpty_drop
$Data_Array_NonEmpty_drop = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_drop) {
  $__fn = function($i) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_drop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_drop)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_dropEnd
$Data_Array_NonEmpty_dropEnd = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_dropEnd) {
  $__fn = function($i) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_dropEnd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_dropEnd)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_dropWhile
$Data_Array_NonEmpty_dropWhile = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_dropWhile) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_dropWhile, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_dropWhile)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_elem
$Data_Array_NonEmpty_elem = (function() use (&$Data_Array_elem, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictEq) use (&$Data_Array_elem, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elem1 = ($Data_Array_elem)($dictEq);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $elem1) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_adaptAny, $elem1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($elem1)($x));
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

// Data_Array_NonEmpty_elemIndex
$Data_Array_NonEmpty_elemIndex = (function() use (&$Data_Array_elemIndex, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictEq) use (&$Data_Array_elemIndex, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elemIndex1 = ($Data_Array_elemIndex)($dictEq);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $elemIndex1) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_adaptAny, $elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($elemIndex1)($x));
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

// Data_Array_NonEmpty_elemLastIndex
$Data_Array_NonEmpty_elemLastIndex = (function() use (&$Data_Array_elemLastIndex, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictEq) use (&$Data_Array_elemLastIndex, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elemLastIndex1 = ($Data_Array_elemLastIndex)($dictEq);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $elemLastIndex1) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_adaptAny, $elemLastIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($elemLastIndex1)($x));
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

// Data_Array_NonEmpty_filter
$Data_Array_NonEmpty_filter = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_filter) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_filter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_filter)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_filterA
$Data_Array_NonEmpty_filterA = (function() use (&$Data_Array_filterA, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictApplicative) use (&$Data_Array_filterA, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$filterA1 = ($Data_Array_filterA)($dictApplicative);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $filterA1) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_adaptAny, $filterA1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($filterA1)($f));
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

// Data_Array_NonEmpty_find
$Data_Array_NonEmpty_find = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_find) {
  $__fn = function($p) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_find, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_find)($p));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_findIndex
$Data_Array_NonEmpty_findIndex = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_findIndex) {
  $__fn = function($p) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_findIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_findIndex)($p));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_findLastIndex
$Data_Array_NonEmpty_findLastIndex = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_findLastIndex) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_findLastIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_findLastIndex)($x));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_findMap
$Data_Array_NonEmpty_findMap = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_findMap) {
  $__fn = function($p) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_findMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_findMap)($p));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_foldM
$Data_Array_NonEmpty_foldM = (function() use (&$Data_Array_foldM, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictMonad) use (&$Data_Array_foldM, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldM1 = ($Data_Array_foldM)($dictMonad);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $foldM1) {
  $__fn = function($f, $acc = null) use (&$Data_Array_NonEmpty_adaptAny, $foldM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($foldM1)($f, $acc));
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

// Data_Array_NonEmpty_foldRecM
$Data_Array_NonEmpty_foldRecM = (function() use (&$Data_Array_foldRecM, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictMonadRec) use (&$Data_Array_foldRecM, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldRecM1 = ($Data_Array_foldRecM)($dictMonadRec);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $foldRecM1) {
  $__fn = function($f, $acc = null) use (&$Data_Array_NonEmpty_adaptAny, $foldRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($foldRecM1)($f, $acc));
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

// Data_Array_NonEmpty_index
$Data_Array_NonEmpty_index = ($Data_Array_NonEmpty_adaptAny)($Data_Array_index);

// Data_Array_NonEmpty_length
$Data_Array_NonEmpty_length = ($Data_Array_NonEmpty_adaptAny)($Data_Array_length);

// Data_Array_NonEmpty_mapMaybe
$Data_Array_NonEmpty_mapMaybe = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_mapMaybe) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_mapMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_mapMaybe)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_notElem
$Data_Array_NonEmpty_notElem = (function() use (&$Data_Array_notElem, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($dictEq) use (&$Data_Array_notElem, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$notElem1 = ($Data_Array_notElem)($dictEq);
    $__res = (function() use (&$Data_Array_NonEmpty_adaptAny, $notElem1) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_adaptAny, $notElem1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($notElem1)($x));
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

// Data_Array_NonEmpty_partition
$Data_Array_NonEmpty_partition = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_partition) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_partition, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_partition)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_slice
$Data_Array_NonEmpty_slice = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_slice) {
  $__fn = function($start, $end = null) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_slice, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_slice)($start, $end));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_span
$Data_Array_NonEmpty_span = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_span) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_span, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_span)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_take
$Data_Array_NonEmpty_take = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_take) {
  $__fn = function($i) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_take, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_take)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_takeEnd
$Data_Array_NonEmpty_takeEnd = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_takeEnd) {
  $__fn = function($i) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_takeEnd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_takeEnd)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_takeWhile
$Data_Array_NonEmpty_takeWhile = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_takeWhile) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_takeWhile, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_takeWhile)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_toUnfoldable
$Data_Array_NonEmpty_toUnfoldable = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_toUnfoldable) {
  $__fn = function($dictUnfoldable) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_toUnfoldable, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)(($Data_Array_toUnfoldable)($dictUnfoldable));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unsafeAdapt
$Data_Array_NonEmpty_unsafeAdapt = (function() use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_NonEmpty_adaptAny) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_compose, &$Data_Array_NonEmpty_unsafeFromArray, &$Data_Array_NonEmpty_adaptAny, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_compose)($Data_Array_NonEmpty_unsafeFromArray, ($Data_Array_NonEmpty_adaptAny)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_cons
$Data_Array_NonEmpty_cons = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_cons) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_cons)($x));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_group
$Data_Array_NonEmpty_group = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_group) {
  $__fn = function($dictEq) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_group, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_group)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_groupAllBy
$Data_Array_NonEmpty_groupAllBy = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_groupAllBy) {
  $__fn = function($op) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_groupAllBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_groupAllBy)($op));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_groupAll
$Data_Array_NonEmpty_groupAll = (function() use (&$Data_Array_NonEmpty_groupAllBy, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Array_NonEmpty_groupAllBy, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_groupAllBy)(($Data_Ord_compare)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_groupBy
$Data_Array_NonEmpty_groupBy = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_groupBy) {
  $__fn = function($op) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_groupBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_groupBy)($op));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_insert
$Data_Array_NonEmpty_insert = (function() use (&$Data_Array_insert, &$Data_Array_NonEmpty_unsafeAdapt) {
  $__fn = function($dictOrd) use (&$Data_Array_insert, &$Data_Array_NonEmpty_unsafeAdapt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$insert1 = ($Data_Array_insert)($dictOrd);
    $__res = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, $insert1) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_unsafeAdapt, $insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($insert1)($x));
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

// Data_Array_NonEmpty_insertBy
$Data_Array_NonEmpty_insertBy = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_insertBy) {
  $__fn = function($f, $x = null) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_insertBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_insertBy)($f, $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersperse
$Data_Array_NonEmpty_intersperse = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_intersperse) {
  $__fn = function($x) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_intersperse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_intersperse)($x));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_mapWithIndex
$Data_Array_NonEmpty_mapWithIndex = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_mapWithIndex) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_mapWithIndex)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_modifyAtIndices
$Data_Array_NonEmpty_modifyAtIndices = (function() use (&$Data_Array_modifyAtIndices, &$Data_Array_NonEmpty_unsafeAdapt) {
  $__fn = function($dictFoldable) use (&$Data_Array_modifyAtIndices, &$Data_Array_NonEmpty_unsafeAdapt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$modifyAtIndices1 = ($Data_Array_modifyAtIndices)($dictFoldable);
    $__res = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, $modifyAtIndices1) {
  $__fn = function($is, $f = null) use (&$Data_Array_NonEmpty_unsafeAdapt, $modifyAtIndices1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($modifyAtIndices1)($is, $f));
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

// Data_Array_NonEmpty_nub
$Data_Array_NonEmpty_nub = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nub) {
  $__fn = function($dictOrd) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_nub)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_nubBy
$Data_Array_NonEmpty_nubBy = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nubBy) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nubBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_nubBy)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_nubByEq
$Data_Array_NonEmpty_nubByEq = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nubByEq) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nubByEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_nubByEq)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_nubEq
$Data_Array_NonEmpty_nubEq = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nubEq) {
  $__fn = function($dictEq) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_nubEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_nubEq)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_reverse
$Data_Array_NonEmpty_reverse = ($Data_Array_NonEmpty_unsafeAdapt)($Data_Array_reverse);

// Data_Array_NonEmpty_scanl
$Data_Array_NonEmpty_scanl = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_scanl) {
  $__fn = function($f, $x = null) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_scanl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_scanl)($f, $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_scanr
$Data_Array_NonEmpty_scanr = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_scanr) {
  $__fn = function($f, $x = null) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_scanr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_scanr)($f, $x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_sort
$Data_Array_NonEmpty_sort = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_sort) {
  $__fn = function($dictOrd) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_sort, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_sort)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_sortBy
$Data_Array_NonEmpty_sortBy = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_sortBy) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_unsafeAdapt, &$Data_Array_sortBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($Data_Array_sortBy)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_sortWith
$Data_Array_NonEmpty_sortWith = (function() use (&$Data_Array_sortWith, &$Data_Array_NonEmpty_unsafeAdapt) {
  $__fn = function($dictOrd) use (&$Data_Array_sortWith, &$Data_Array_NonEmpty_unsafeAdapt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sortWith1 = ($Data_Array_sortWith)($dictOrd);
    $__res = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, $sortWith1) {
  $__fn = function($f) use (&$Data_Array_NonEmpty_unsafeAdapt, $sortWith1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($sortWith1)($f));
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

// Data_Array_NonEmpty_updateAtIndices
$Data_Array_NonEmpty_updateAtIndices = (function() use (&$Data_Array_updateAtIndices, &$Data_Array_NonEmpty_unsafeAdapt) {
  $__fn = function($dictFoldable) use (&$Data_Array_updateAtIndices, &$Data_Array_NonEmpty_unsafeAdapt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$updateAtIndices1 = ($Data_Array_updateAtIndices)($dictFoldable);
    $__res = (function() use (&$Data_Array_NonEmpty_unsafeAdapt, $updateAtIndices1) {
  $__fn = function($pairs) use (&$Data_Array_NonEmpty_unsafeAdapt, $updateAtIndices1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_unsafeAdapt)(($updateAtIndices1)($pairs));
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

// Data_Array_NonEmpty_unsafeIndex
$Data_Array_NonEmpty_unsafeIndex = (function() use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_NonEmpty_unsafeIndex1) {
  $__fn = function($__dollar____unused) use (&$Data_Array_NonEmpty_adaptAny, &$Data_Array_NonEmpty_unsafeIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Array_NonEmpty_adaptAny)($Data_Array_NonEmpty_unsafeIndex1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unsafeIndex2
$Data_Array_NonEmpty_unsafeIndex2 = ($Data_Array_NonEmpty_unsafeIndex)($Prim_undefined);

// Data_Array_NonEmpty_toUnfoldable1
$Data_Array_NonEmpty_toUnfoldable1 = (function() use (&$Data_Unfoldable1_unfoldr1, &$Data_Array_NonEmpty_length, &$Data_Tuple_Tuple, &$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_unsafeIndex2, &$Data_Array_NonEmpty_lessThan, &$Data_Array_NonEmpty_sub, &$Data_Maybe_Just, &$Data_Array_NonEmpty_add, &$Data_Maybe_Nothing) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_unfoldr1, &$Data_Array_NonEmpty_length, &$Data_Tuple_Tuple, &$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_unsafeIndex2, &$Data_Array_NonEmpty_lessThan, &$Data_Array_NonEmpty_sub, &$Data_Maybe_Just, &$Data_Array_NonEmpty_add, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr1 = ($Data_Unfoldable1_unfoldr1)($dictUnfoldable1);
    $__res = (function() use (&$Data_Array_NonEmpty_length, &$Data_Tuple_Tuple, &$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_unsafeIndex2, &$Data_Array_NonEmpty_lessThan, &$Data_Array_NonEmpty_sub, &$Data_Maybe_Just, &$Data_Array_NonEmpty_add, &$Data_Maybe_Nothing, $unfoldr1) {
  $__fn = function($xs) use (&$Data_Array_NonEmpty_length, &$Data_Tuple_Tuple, &$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_unsafeIndex2, &$Data_Array_NonEmpty_lessThan, &$Data_Array_NonEmpty_sub, &$Data_Maybe_Just, &$Data_Array_NonEmpty_add, &$Data_Maybe_Nothing, $unfoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$len = ($Data_Array_NonEmpty_length)($xs);
$f = (function() use (&$Data_Tuple_Tuple, &$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_unsafeIndex2, $xs, &$Data_Array_NonEmpty_lessThan, &$Data_Array_NonEmpty_sub, $len, &$Data_Maybe_Just, &$Data_Array_NonEmpty_add, &$Data_Maybe_Nothing) {
  $__fn = function($i) use (&$Data_Tuple_Tuple, &$Partial_Unsafe_unsafePartial, &$Data_Array_NonEmpty_unsafeIndex2, $xs, &$Data_Array_NonEmpty_lessThan, &$Data_Array_NonEmpty_sub, $len, &$Data_Maybe_Just, &$Data_Array_NonEmpty_add, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Partial_Unsafe_unsafePartial)((function() use (&$Data_Array_NonEmpty_unsafeIndex2) {
  $__fn = function($__dollar____unused) use (&$Data_Array_NonEmpty_unsafeIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Array_NonEmpty_unsafeIndex2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs, $i), (function() use (&$Data_Array_NonEmpty_lessThan, $i, &$Data_Array_NonEmpty_sub, $len, &$Data_Maybe_Just, &$Data_Array_NonEmpty_add, &$Data_Maybe_Nothing) {
$__case_0 = ($Data_Array_NonEmpty_lessThan)($i, ($Data_Array_NonEmpty_sub)($len, 1));
if (($__case_0 === true)) {
return ($Data_Maybe_Just)(($Data_Array_NonEmpty_add)($i, 1));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr1)($f, 0);
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

