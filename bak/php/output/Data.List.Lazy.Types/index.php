<?php

namespace Data\List\Lazy\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
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
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
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
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_List_Lazy_Types_compose
$Data_List_Lazy_Types_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_List_Lazy_Types_unwrap
$Data_List_Lazy_Types_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_List_Lazy_Types_map
$Data_List_Lazy_Types_map = ($Data_Functor_map)($Data_Lazy_functorLazy);

// Data_List_Lazy_Types_eq1
$Data_List_Lazy_Types_eq1 = ($Data_Eq_eq1)($Data_Lazy_eq1Lazy);

// Data_List_Lazy_Types_compare1
$Data_List_Lazy_Types_compare1 = ($Data_Ord_compare1)($Data_Lazy_ord1Lazy);

// Data_List_Lazy_Types_append
$Data_List_Lazy_Types_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_List_Lazy_Types_add
$Data_List_Lazy_Types_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_List_Lazy_Types_sub
$Data_List_Lazy_Types_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_List_Lazy_Types_identity
$Data_List_Lazy_Types_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_List_Lazy_Types_List
$Data_List_Lazy_Types_List = (function() {
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

// Data_List_Lazy_Types_Nil
$Data_List_Lazy_Types_Nil = (object)["tag" => "Nil", "values" => []];

// Data_List_Lazy_Types_Cons
$Data_List_Lazy_Types_Cons = (function() {
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

// Data_List_Lazy_Types_NonEmptyList
$Data_List_Lazy_Types_NonEmptyList = (function() {
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

// Data_List_Lazy_Types_nil
$Data_List_Lazy_Types_nil = ($Data_List_Lazy_Types_List)(($Data_Lazy_defer)((function() use (&$Data_List_Lazy_Types_Nil) {
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_Nil;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));

// Data_List_Lazy_Types_newtypeNonEmptyList
$Data_List_Lazy_Types_newtypeNonEmptyList = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_List_Lazy_Types_newtypeList
$Data_List_Lazy_Types_newtypeList = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_List_Lazy_Types_step
$Data_List_Lazy_Types_step = ($Data_List_Lazy_Types_compose)($Data_Lazy_force, $Data_List_Lazy_Types_unwrap);

// Data_List_Lazy_Types_semigroupList
$Data_List_Lazy_Types_semigroupList = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_Semigroup_append, &$Data_List_Lazy_Types_semigroupList, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_unwrap) {
  $__fn = function($xs, $ys = null) use (&$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_Cons, &$Data_Semigroup_append, &$Data_List_Lazy_Types_semigroupList, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_Types_step, $ys, &$Data_List_Lazy_Types_Cons, &$Data_Semigroup_append, &$Data_List_Lazy_Types_semigroupList) {
  $__body = function($v) use (&$Data_List_Lazy_Types_step, $ys, &$Data_List_Lazy_Types_Cons, &$Data_Semigroup_append, &$Data_List_Lazy_Types_semigroupList) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return ($Data_List_Lazy_Types_step)($ys);
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_Cons)($x, ($Data_Semigroup_append)($Data_List_Lazy_Types_semigroupList, $xs__prime__, $ys));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_step, $ys, &$Data_List_Lazy_Types_Cons, &$Data_Semigroup_append, &$Data_List_Lazy_Types_semigroupList, $__body, &$__fn) {
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
    $__res = ($Data_List_Lazy_Types_List)(($Data_List_Lazy_Types_map)($go, ($Data_List_Lazy_Types_unwrap)($xs)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_append1
$Data_List_Lazy_Types_append1 = ($Data_Semigroup_append)($Data_List_Lazy_Types_semigroupList);

// Data_List_Lazy_Types_monoidList
$Data_List_Lazy_Types_monoidList = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Data_List_Lazy_Types_nil, "Semigroup0" => (function() use (&$Data_List_Lazy_Types_semigroupList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_semigroupList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_semigroupList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_lazyList
$Data_List_Lazy_Types_lazyList = ($Control_Lazy_Lazy__dollar__Dict)((object)["defer" => (function() use (&$Data_List_Lazy_Types_List, &$Data_Lazy_defer, &$Data_List_Lazy_Types_compose, &$Data_List_Lazy_Types_step) {
  $__fn = function($f) use (&$Data_List_Lazy_Types_List, &$Data_Lazy_defer, &$Data_List_Lazy_Types_compose, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_List)(($Data_Lazy_defer)(($Data_List_Lazy_Types_compose)($Data_List_Lazy_Types_step, $f)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_defer
$Data_List_Lazy_Types_defer = ($Control_Lazy_defer)($Data_List_Lazy_Types_lazyList);

// Data_List_Lazy_Types_functorList
$Data_List_Lazy_Types_functorList = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_Functor_map, &$Data_List_Lazy_Types_functorList, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_unwrap) {
  $__fn = function($f, $xs = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, &$Data_Functor_map, &$Data_List_Lazy_Types_functorList, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $f, &$Data_Functor_map, &$Data_List_Lazy_Types_functorList) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $f, &$Data_Functor_map, &$Data_List_Lazy_Types_functorList) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_Cons)(($f)($x), ($Data_Functor_map)($Data_List_Lazy_Types_functorList, $f, $xs__prime__));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_Cons, $f, &$Data_Functor_map, &$Data_List_Lazy_Types_functorList, $__body, &$__fn) {
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
    $__res = ($Data_List_Lazy_Types_List)(($Data_List_Lazy_Types_map)($go, ($Data_List_Lazy_Types_unwrap)($xs)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_map1
$Data_List_Lazy_Types_map1 = ($Data_Functor_map)(($Data_NonEmpty_functorNonEmpty)($Data_List_Lazy_Types_functorList));

// Data_List_Lazy_Types_functorNonEmptyList
$Data_List_Lazy_Types_functorNonEmptyList = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_map1) {
  $__body = function($f, $v) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($Data_List_Lazy_Types_NonEmptyList)(($Data_List_Lazy_Types_map)(($Data_List_Lazy_Types_map1)($f1), $nel));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_map1, $__body, &$__fn) {
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
})()]);

// Data_List_Lazy_Types_eq1List
$Data_List_Lazy_Types_eq1List = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_List_Lazy_Types_step) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_List_Lazy_Types_step) {
  $__fn = function($xs, $ys = null) use (&$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() {
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
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return true;
} else {
;
};
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$ys__prime__ = ($__case_1)->values[1];
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
    $__res = ($go)(($Data_List_Lazy_Types_step)($xs), ($Data_List_Lazy_Types_step)($ys));
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

// Data_List_Lazy_Types_eqNonEmpty
$Data_List_Lazy_Types_eqNonEmpty = ($Data_NonEmpty_eqNonEmpty)($Data_List_Lazy_Types_eq1List);

// Data_List_Lazy_Types_eq11
$Data_List_Lazy_Types_eq11 = ($Data_Eq_eq1)($Data_List_Lazy_Types_eq1List);

// Data_List_Lazy_Types_eq1NonEmptyList
$Data_List_Lazy_Types_eq1NonEmptyList = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_List_Lazy_Types_eq1, &$Data_List_Lazy_Types_eqNonEmpty) {
  $__fn = function($dictEq) use (&$Data_List_Lazy_Types_eq1, &$Data_List_Lazy_Types_eqNonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq12 = ($Data_List_Lazy_Types_eq1)(($Data_List_Lazy_Types_eqNonEmpty)($dictEq));
    $__res = (function() use ($eq12) {
  $__body = function($v, $v1) use ($eq12) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
return ($eq12)($lhs, $rhs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($eq12, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_eqList
$Data_List_Lazy_Types_eqList = (function() use (&$Data_Eq_Eq__dollar__Dict, &$Data_List_Lazy_Types_eq11) {
  $__fn = function($dictEq) use (&$Data_Eq_Eq__dollar__Dict, &$Data_List_Lazy_Types_eq11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => ($Data_List_Lazy_Types_eq11)($dictEq)]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_eqNonEmptyList
$Data_List_Lazy_Types_eqNonEmptyList = (function() use (&$Data_Lazy_eqLazy, &$Data_List_Lazy_Types_eqNonEmpty) {
  $__fn = function($dictEq) use (&$Data_Lazy_eqLazy, &$Data_List_Lazy_Types_eqNonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_eqLazy)(($Data_List_Lazy_Types_eqNonEmpty)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_ord1List
$Data_List_Lazy_Types_ord1List = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_List_Lazy_Types_step) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$Data_List_Lazy_Types_step) {
  $__fn = function($xs, $ys = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$go, &$Data_List_Lazy_Types_step) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$go, &$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare, &$go, &$Data_List_Lazy_Types_step) {
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
$__tco_tmp_0 = ($Data_List_Lazy_Types_step)($xs__prime__);
$__tco_tmp_1 = ($Data_List_Lazy_Types_step)($ys__prime__);
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
    $__res = ($go)(($Data_List_Lazy_Types_step)($xs), ($Data_List_Lazy_Types_step)($ys));
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
})(), "Eq10" => (function() use (&$Data_List_Lazy_Types_eq1List) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_eq1List, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_eq1List;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_ordNonEmpty
$Data_List_Lazy_Types_ordNonEmpty = ($Data_NonEmpty_ordNonEmpty)($Data_List_Lazy_Types_ord1List);

// Data_List_Lazy_Types_compare11
$Data_List_Lazy_Types_compare11 = ($Data_Ord_compare1)($Data_List_Lazy_Types_ord1List);

// Data_List_Lazy_Types_ord1NonEmptyList
$Data_List_Lazy_Types_ord1NonEmptyList = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_List_Lazy_Types_compare1, &$Data_List_Lazy_Types_ordNonEmpty) {
  $__fn = function($dictOrd) use (&$Data_List_Lazy_Types_compare1, &$Data_List_Lazy_Types_ordNonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare12 = ($Data_List_Lazy_Types_compare1)(($Data_List_Lazy_Types_ordNonEmpty)($dictOrd));
    $__res = (function() use ($compare12) {
  $__body = function($v, $v1) use ($compare12) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
return ($compare12)($lhs, $rhs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($compare12, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_List_Lazy_Types_eq1NonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_eq1NonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_eq1NonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_ordList
$Data_List_Lazy_Types_ordList = (function() use (&$Data_List_Lazy_Types_eqList, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_List_Lazy_Types_compare11) {
  $__fn = function($dictOrd) use (&$Data_List_Lazy_Types_eqList, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_List_Lazy_Types_compare11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqList1 = ($Data_List_Lazy_Types_eqList)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_List_Lazy_Types_compare11)($dictOrd), "Eq0" => (function() use ($eqList1) {
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

// Data_List_Lazy_Types_ordNonEmptyList
$Data_List_Lazy_Types_ordNonEmptyList = (function() use (&$Data_Lazy_ordLazy, &$Data_List_Lazy_Types_ordNonEmpty) {
  $__fn = function($dictOrd) use (&$Data_Lazy_ordLazy, &$Data_List_Lazy_Types_ordNonEmpty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Lazy_ordLazy)(($Data_List_Lazy_Types_ordNonEmpty)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_cons
$Data_List_Lazy_Types_cons = (function() use (&$Data_List_Lazy_Types_List, &$Data_Lazy_defer, &$Data_List_Lazy_Types_Cons) {
  $__fn = function($x, $xs = null) use (&$Data_List_Lazy_Types_List, &$Data_Lazy_defer, &$Data_List_Lazy_Types_Cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_List)(($Data_Lazy_defer)((function() use (&$Data_List_Lazy_Types_Cons, $x, $xs) {
  $__fn = function($v) use (&$Data_List_Lazy_Types_Cons, $x, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_Cons)($x, $xs);
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

// Data_List_Lazy_Types_foldableList
$Data_List_Lazy_Types_foldableList = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_Foldable_foldl, &$Data_List_Lazy_Types_foldableList, &$Data_Function_flip, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($op, $z = null, $xs = null) use (&$Data_Foldable_foldl, &$Data_List_Lazy_Types_foldableList, &$Data_Function_flip, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$rev = ($Data_Foldable_foldl)($Data_List_Lazy_Types_foldableList, ($Data_Function_flip)($Data_List_Lazy_Types_cons), $Data_List_Lazy_Types_nil);
    $__res = ($Data_Foldable_foldl)($Data_List_Lazy_Types_foldableList, ($Data_Function_flip)($op), $z, ($rev)($xs));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$Data_List_Lazy_Types_step) {
  $__fn = function($op) use (&$Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_Types_step, &$go, $op) {
  $__fn = function($b, $xs = null) use (&$Data_List_Lazy_Types_step, &$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($b, $xs) use (&$Data_List_Lazy_Types_step, &$go, $op) {
while (true) {
$v = ($Data_List_Lazy_Types_step)($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $b;
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$hd = ($__case_0)->values[0];
$tl = ($__case_0)->values[1];
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
continue;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($b, $xs);
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
})(), "foldMap" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Foldable_foldl, &$Data_List_Lazy_Types_foldableList) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_Foldable_foldl, &$Data_List_Lazy_Types_foldableList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append2 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use (&$Data_Foldable_foldl, &$Data_List_Lazy_Types_foldableList, $append2, $mempty) {
  $__fn = function($f) use (&$Data_Foldable_foldl, &$Data_List_Lazy_Types_foldableList, $append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldl)($Data_List_Lazy_Types_foldableList, (function() use ($append2, $f) {
  $__fn = function($b, $a = null) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append2)($b, ($f)($a));
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
})()]);

// Data_List_Lazy_Types_foldr
$Data_List_Lazy_Types_foldr = ($Data_Foldable_foldr)($Data_List_Lazy_Types_foldableList);

// Data_List_Lazy_Types_foldableNonEmpty
$Data_List_Lazy_Types_foldableNonEmpty = ($Data_NonEmpty_foldableNonEmpty)($Data_List_Lazy_Types_foldableList);

// Data_List_Lazy_Types_foldr1
$Data_List_Lazy_Types_foldr1 = ($Data_Foldable_foldr)($Data_List_Lazy_Types_foldableNonEmpty);

// Data_List_Lazy_Types_foldl
$Data_List_Lazy_Types_foldl = ($Data_Foldable_foldl)($Data_List_Lazy_Types_foldableNonEmpty);

// Data_List_Lazy_Types_foldMap
$Data_List_Lazy_Types_foldMap = ($Data_Foldable_foldMap)($Data_List_Lazy_Types_foldableNonEmpty);

// Data_List_Lazy_Types_foldl1
$Data_List_Lazy_Types_foldl1 = ($Data_Foldable_foldl)($Data_List_Lazy_Types_foldableList);

// Data_List_Lazy_Types_extendList
$Data_List_Lazy_Types_extendList = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_foldr) {
  $__body = function($f, $l) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_foldr) {
    $go = (function() use (&$Data_List_Lazy_Types_cons, $f) {
  $__body = function($a, $v) use (&$Data_List_Lazy_Types_cons, $f) {
    $__case_0 = $a;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = ($Data_List_Lazy_Types_cons)($a1, $acc);
return (object)["val" => ($Data_List_Lazy_Types_cons)(($f)($acc__prime__), $val), "acc" => $acc__prime__];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $v = null) use (&$Data_List_Lazy_Types_cons, $f, $__body, &$__fn) {
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
    $v = ($Data_List_Lazy_Types_step)($l);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$as = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_cons)(($f)($l), (($Data_List_Lazy_Types_foldr)($go, (object)["val" => $Data_List_Lazy_Types_nil, "acc" => $Data_List_Lazy_Types_nil], $as))->val);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $l = null) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $l);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $l);
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_extendNonEmptyList
$Data_List_Lazy_Types_extendNonEmptyList = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_Lazy_force, &$Data_List_Lazy_Types_foldr, &$Data_List_Lazy_Types_nil) {
  $__body = function($f, $v) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_Lazy_force, &$Data_List_Lazy_Types_foldr, &$Data_List_Lazy_Types_nil) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
$nel = $__case_1;
$go = (function() use (&$Data_List_Lazy_Types_cons, $f1, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty) {
  $__body = function($a, $v1) use (&$Data_List_Lazy_Types_cons, $f1, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty) {
    $__case_0 = $a;
    $__case_1 = $v1;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
return (object)["val" => ($Data_List_Lazy_Types_cons)(($f1)(($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $a1, $acc) {
  $__fn = function($v2) use (&$Data_NonEmpty_NonEmpty, $a1, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($a1, $acc);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()))), $val), "acc" => ($Data_List_Lazy_Types_cons)($a1, $acc)];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $v1 = null) use (&$Data_List_Lazy_Types_cons, $f1, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, $__body, &$__fn) {
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
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$as = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $f1, $w, &$Data_List_Lazy_Types_foldr, $go, &$Data_List_Lazy_Types_nil, $as) {
  $__fn = function($v2) use (&$Data_NonEmpty_NonEmpty, $f1, $w, &$Data_List_Lazy_Types_foldr, $go, &$Data_List_Lazy_Types_nil, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)(($f1)($w), (($Data_List_Lazy_Types_foldr)($go, (object)["val" => $Data_List_Lazy_Types_nil, "acc" => $Data_List_Lazy_Types_nil], $as))->val);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_Lazy_force, &$Data_List_Lazy_Types_foldr, &$Data_List_Lazy_Types_nil, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_foldableNonEmptyList
$Data_List_Lazy_Types_foldableNonEmptyList = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_List_Lazy_Types_foldr1, &$Data_Lazy_force) {
  $__body = function($f, $b, $v) use (&$Data_List_Lazy_Types_foldr1, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
return ($Data_List_Lazy_Types_foldr1)($f1, $b1, ($Data_Lazy_force)($nel));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use (&$Data_List_Lazy_Types_foldr1, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "foldl" => (function() use (&$Data_List_Lazy_Types_foldl, &$Data_Lazy_force) {
  $__body = function($f, $b, $v) use (&$Data_List_Lazy_Types_foldl, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
return ($Data_List_Lazy_Types_foldl)($f1, $b1, ($Data_Lazy_force)($nel));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use (&$Data_List_Lazy_Types_foldl, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "foldMap" => (function() use (&$Data_List_Lazy_Types_foldMap, &$Data_Lazy_force) {
  $__fn = function($dictMonoid) use (&$Data_List_Lazy_Types_foldMap, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap1 = ($Data_List_Lazy_Types_foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1, &$Data_Lazy_force) {
  $__body = function($f, $v) use ($foldMap1, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($foldMap1)($f1, ($Data_Lazy_force)($nel));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMap1, &$Data_Lazy_force, $__body, &$__fn) {
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
})()]);

// Data_List_Lazy_Types_showList
$Data_List_Lazy_Types_showList = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_Types_append, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_foldl1) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_Types_append, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_foldl1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_Lazy_Types_append, &$Data_List_Lazy_Types_step, $show, &$Data_List_Lazy_Types_foldl1) {
  $__fn = function($xs) use (&$Data_List_Lazy_Types_append, &$Data_List_Lazy_Types_step, $show, &$Data_List_Lazy_Types_foldl1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_append)("(fromFoldable [", ($Data_List_Lazy_Types_append)((function() use (&$Data_List_Lazy_Types_step, $xs, &$Data_List_Lazy_Types_append, $show, &$Data_List_Lazy_Types_foldl1) {
$v = ($Data_List_Lazy_Types_step)($xs);
return (function() use ($v, &$Data_List_Lazy_Types_append, $show, &$Data_List_Lazy_Types_foldl1) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return "";
} else {
;
};
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_append)(($show)($x), ($Data_List_Lazy_Types_foldl1)((function() use (&$Data_List_Lazy_Types_append, $show) {
  $__fn = function($shown, $x__prime__ = null) use (&$Data_List_Lazy_Types_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_append)($shown, ($Data_List_Lazy_Types_append)(",", ($show)($x__prime__)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "", $xs__prime__));
} else {
;
};
throw new \Exception("Pattern match failure");
})();
})(), "])"));
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

// Data_List_Lazy_Types_showNonEmptyList
$Data_List_Lazy_Types_showNonEmptyList = (function() use (&$Data_Show_show, &$Data_Lazy_showLazy, &$Data_NonEmpty_showNonEmpty, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_Types_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Lazy_showLazy, &$Data_NonEmpty_showNonEmpty, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_Types_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)(($Data_Lazy_showLazy)(($Data_NonEmpty_showNonEmpty)($dictShow, ($Data_List_Lazy_Types_showList)($dictShow))));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_Lazy_Types_append, $show) {
  $__body = function($v) use (&$Data_List_Lazy_Types_append, $show) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($Data_List_Lazy_Types_append)("(NonEmptyList ", ($Data_List_Lazy_Types_append)(($show)($nel), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_append, $show, $__body, &$__fn) {
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

// Data_List_Lazy_Types_showStep
$Data_List_Lazy_Types_showStep = (function() use (&$Data_Show_show, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_Types_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_List_Lazy_Types_showList, &$Data_Show_Show__dollar__Dict, &$Data_List_Lazy_Types_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
$show1 = ($Data_Show_show)(($Data_List_Lazy_Types_showList)($dictShow));
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_List_Lazy_Types_append, $show, $show1) {
  $__body = function($v) use (&$Data_List_Lazy_Types_append, $show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return "Nil";
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_append)("(", ($Data_List_Lazy_Types_append)(($show)($x), ($Data_List_Lazy_Types_append)(" : ", ($Data_List_Lazy_Types_append)(($show1)($xs), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_append, $show, $show1, $__body, &$__fn) {
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

// Data_List_Lazy_Types_foldableWithIndexList
$Data_List_Lazy_Types_foldableWithIndexList = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_List_Lazy_Types_foldl1, &$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$Data_Tuple_snd, &$Data_List_Lazy_Types_sub) {
  $__body = function($f, $b, $xs) use (&$Data_List_Lazy_Types_foldl1, &$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$Data_Tuple_snd, &$Data_List_Lazy_Types_sub) {
    $v = (function() use (&$Data_List_Lazy_Types_foldl1, &$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, $xs) {
$rev = ($Data_List_Lazy_Types_foldl1)((function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$Data_List_Lazy_Types_cons) {
  $__body = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$Data_List_Lazy_Types_cons) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$acc = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, $i, &$Data_List_Lazy_Types_cons, $acc) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, $i, &$Data_List_Lazy_Types_cons, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_List_Lazy_Types_add)($i, 1), ($Data_List_Lazy_Types_cons)($a, $acc));
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
  $__fn = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
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
return ($rev)(($Data_Tuple_Tuple)(0, $Data_List_Lazy_Types_nil), $xs);
})();
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$len = ($__case_0)->values[0];
$revList = ($__case_0)->values[1];
return ($Data_Tuple_snd)(($Data_List_Lazy_Types_foldl1)((function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_sub, $f) {
  $__body = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_sub, $f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b__prime__ = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_sub, $i, $f, $b__prime__) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_sub, $i, $f, $b__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_List_Lazy_Types_sub)($i, 1), ($f)(($Data_List_Lazy_Types_sub)($i, 1), $a, $b__prime__));
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
  $__fn = function($v1) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_sub, $f, $__body, &$__fn) {
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
  $__fn = function($f, $b = null, $xs = null) use (&$Data_List_Lazy_Types_foldl1, &$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$Data_Tuple_snd, &$Data_List_Lazy_Types_sub, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use (&$Data_List_Lazy_Types_compose, &$Data_Tuple_snd, &$Data_List_Lazy_Types_foldl1, &$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add) {
  $__fn = function($f, $acc = null) use (&$Data_List_Lazy_Types_compose, &$Data_Tuple_snd, &$Data_List_Lazy_Types_foldl1, &$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_compose)($Data_Tuple_snd, ($Data_List_Lazy_Types_foldl1)((function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, $f) {
  $__body = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return (function() use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, $i, $f, $b) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, $i, $f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_List_Lazy_Types_add)($i, 1), ($f)($i, $b, $a));
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
  $__fn = function($v) use (&$Data_Tuple_Tuple, &$Data_List_Lazy_Types_add, $f, $__body, &$__fn) {
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
})(), "foldMapWithIndex" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Lazy_Types_foldableWithIndexList, &$Data_List_Lazy_Types_compose) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Lazy_Types_foldableWithIndexList, &$Data_List_Lazy_Types_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append2 = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Lazy_Types_foldableWithIndexList, &$Data_List_Lazy_Types_compose, $append2, $mempty) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_List_Lazy_Types_foldableWithIndexList, &$Data_List_Lazy_Types_compose, $append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldlWithIndex)($Data_List_Lazy_Types_foldableWithIndexList, (function() use (&$Data_List_Lazy_Types_compose, $append2, $f) {
  $__fn = function($i, $acc = null) use (&$Data_List_Lazy_Types_compose, $append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_compose)(($append2)($acc), ($f)($i));
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
})(), "Foldable0" => (function() use (&$Data_List_Lazy_Types_foldableList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_foldableList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_foldableList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_foldableWithIndexNonEmpty
$Data_List_Lazy_Types_foldableWithIndexNonEmpty = ($Data_NonEmpty_foldableWithIndexNonEmpty)($Data_List_Lazy_Types_foldableWithIndexList);

// Data_List_Lazy_Types_foldMapWithIndex
$Data_List_Lazy_Types_foldMapWithIndex = ($Data_FoldableWithIndex_foldMapWithIndex)($Data_List_Lazy_Types_foldableWithIndexNonEmpty);

// Data_List_Lazy_Types_foldlWithIndex
$Data_List_Lazy_Types_foldlWithIndex = ($Data_FoldableWithIndex_foldlWithIndex)($Data_List_Lazy_Types_foldableWithIndexNonEmpty);

// Data_List_Lazy_Types_foldrWithIndex
$Data_List_Lazy_Types_foldrWithIndex = ($Data_FoldableWithIndex_foldrWithIndex)($Data_List_Lazy_Types_foldableWithIndexNonEmpty);

// Data_List_Lazy_Types_foldrWithIndex1
$Data_List_Lazy_Types_foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($Data_List_Lazy_Types_foldableWithIndexList);

// Data_List_Lazy_Types_foldableWithIndexNonEmptyList
$Data_List_Lazy_Types_foldableWithIndexNonEmptyList = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldMapWithIndex" => (function() use (&$Data_List_Lazy_Types_foldMapWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
  $__fn = function($dictMonoid) use (&$Data_List_Lazy_Types_foldMapWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_List_Lazy_Types_foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
  $__body = function($f, $v) use ($foldMapWithIndex1, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($foldMapWithIndex1)(($Data_List_Lazy_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Lazy_Types_add)(1))), ($Data_Lazy_force)($ne));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use (&$Data_List_Lazy_Types_foldlWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
  $__body = function($f, $b, $v) use (&$Data_List_Lazy_Types_foldlWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($Data_List_Lazy_Types_foldlWithIndex)(($Data_List_Lazy_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Lazy_Types_add)(1))), $b1, ($Data_Lazy_force)($ne));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use (&$Data_List_Lazy_Types_foldlWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "foldrWithIndex" => (function() use (&$Data_List_Lazy_Types_foldrWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
  $__body = function($f, $b, $v) use (&$Data_List_Lazy_Types_foldrWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($Data_List_Lazy_Types_foldrWithIndex)(($Data_List_Lazy_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Lazy_Types_add)(1))), $b1, ($Data_Lazy_force)($ne));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $b = null, $v = null) use (&$Data_List_Lazy_Types_foldrWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use (&$Data_List_Lazy_Types_foldableNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_foldableNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_foldableNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_functorWithIndexList
$Data_List_Lazy_Types_functorWithIndexList = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_List_Lazy_Types_foldrWithIndex1, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($f) use (&$Data_List_Lazy_Types_foldrWithIndex1, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_foldrWithIndex1)((function() use (&$Data_List_Lazy_Types_cons, $f) {
  $__fn = function($i, $x = null, $acc = null) use (&$Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_cons)(($f)($i, $x), $acc);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_List_Lazy_Types_nil);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_mapWithIndex
$Data_List_Lazy_Types_mapWithIndex = ($Data_FunctorWithIndex_mapWithIndex)(($Data_NonEmpty_functorWithIndex)($Data_List_Lazy_Types_functorWithIndexList));

// Data_List_Lazy_Types_functorWithIndexNonEmptyList
$Data_List_Lazy_Types_functorWithIndexNonEmptyList = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_mapWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
  $__body = function($f, $v) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_mapWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_List_Lazy_Types_mapWithIndex, &$Data_List_Lazy_Types_compose, $f1, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, $ne) {
  $__fn = function($v1) use (&$Data_List_Lazy_Types_mapWithIndex, &$Data_List_Lazy_Types_compose, $f1, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, $ne, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_mapWithIndex)(($Data_List_Lazy_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Lazy_Types_add)(1))), ($Data_Lazy_force)($ne));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_mapWithIndex, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_toList
$Data_List_Lazy_Types_toList = (function() use (&$Data_List_Lazy_Types_defer, &$Data_Lazy_force, &$Data_List_Lazy_Types_cons) {
  $__body = function($v) use (&$Data_List_Lazy_Types_defer, &$Data_Lazy_force, &$Data_List_Lazy_Types_cons) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($Data_List_Lazy_Types_defer)((function() use (&$Data_Lazy_force, $nel, &$Data_List_Lazy_Types_cons) {
  $__body = function($v1) use (&$Data_Lazy_force, $nel, &$Data_List_Lazy_Types_cons) {
    $v2 = ($Data_Lazy_force)($nel);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_cons)($x, $xs);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Lazy_force, $nel, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
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
  $__fn = function($v) use (&$Data_List_Lazy_Types_defer, &$Data_Lazy_force, &$Data_List_Lazy_Types_cons, $__body, &$__fn) {
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

// Data_List_Lazy_Types_semigroupNonEmptyList
$Data_List_Lazy_Types_semigroupNonEmptyList = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Lazy_force, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_toList) {
  $__body = function($v, $as__prime__) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_toList) {
    $__case_0 = $v;
    $__case_1 = $as__prime__;
    if (true) {
$neas = $__case_0;
$as__prime__1 = $__case_1;
$v1 = ($Data_Lazy_force)($neas);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $a, &$Data_List_Lazy_Types_append1, $as, &$Data_List_Lazy_Types_toList, $as__prime__1) {
  $__fn = function($v2) use (&$Data_NonEmpty_NonEmpty, $a, &$Data_List_Lazy_Types_append1, $as, &$Data_List_Lazy_Types_toList, $as__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($a, ($Data_List_Lazy_Types_append1)($as, ($Data_List_Lazy_Types_toList)($as__prime__1)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $as__prime__ = null) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_toList, $__body, &$__fn) {
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

// Data_List_Lazy_Types_traversableList
$Data_List_Lazy_Types_traversableList = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_List_Lazy_Types_foldr, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_List_Lazy_Types_foldr, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply1 = ($Control_Apply_apply)($Apply0);
$map2 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Data_List_Lazy_Types_foldr, $apply1, $map2, &$Data_List_Lazy_Types_cons, $pure, &$Data_List_Lazy_Types_nil) {
  $__fn = function($f) use (&$Data_List_Lazy_Types_foldr, $apply1, $map2, &$Data_List_Lazy_Types_cons, $pure, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_foldr)((function() use ($apply1, $map2, &$Data_List_Lazy_Types_cons, $f) {
  $__fn = function($a, $b = null) use ($apply1, $map2, &$Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($map2)($Data_List_Lazy_Types_cons, ($f)($a)), $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), ($pure)($Data_List_Lazy_Types_nil));
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
})(), "sequence" => (function() use (&$Data_Traversable_traverse, &$Data_List_Lazy_Types_traversableList, &$Data_List_Lazy_Types_identity) {
  $__fn = function($dictApplicative) use (&$Data_Traversable_traverse, &$Data_List_Lazy_Types_traversableList, &$Data_List_Lazy_Types_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_traverse)($Data_List_Lazy_Types_traversableList, $dictApplicative, $Data_List_Lazy_Types_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_List_Lazy_Types_foldableList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_foldableList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_foldableList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_traversableNonEmpty
$Data_List_Lazy_Types_traversableNonEmpty = ($Data_NonEmpty_traversableNonEmpty)($Data_List_Lazy_Types_traversableList);

// Data_List_Lazy_Types_traverse
$Data_List_Lazy_Types_traverse = ($Data_Traversable_traverse)($Data_List_Lazy_Types_traversableNonEmpty);

// Data_List_Lazy_Types_sequence
$Data_List_Lazy_Types_sequence = ($Data_Traversable_sequence)($Data_List_Lazy_Types_traversableNonEmpty);

// Data_List_Lazy_Types_traversableNonEmptyList
$Data_List_Lazy_Types_traversableNonEmptyList = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Lazy_Types_traverse, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Lazy_Types_traverse, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse1 = ($Data_List_Lazy_Types_traverse)($dictApplicative);
    $__res = (function() use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $traverse1, &$Data_Lazy_force) {
  $__body = function($f, $v) use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $traverse1, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($map2)((function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer) {
  $__fn = function($xxs) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $xxs;
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
})(), ($traverse1)($f1, ($Data_Lazy_force)($nel)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $traverse1, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Lazy_Types_sequence, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_Lazy_force) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Lazy_Types_sequence, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sequence1 = ($Data_List_Lazy_Types_sequence)($dictApplicative);
    $__res = (function() use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $sequence1, &$Data_Lazy_force) {
  $__body = function($v) use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $sequence1, &$Data_Lazy_force) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($map2)((function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer) {
  $__fn = function($xxs) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $xxs;
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
})(), ($sequence1)(($Data_Lazy_force)($nel)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $sequence1, &$Data_Lazy_force, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_List_Lazy_Types_foldableNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_foldableNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_foldableNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_traversableWithIndexList
$Data_List_Lazy_Types_traversableWithIndexList = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_List_Lazy_Types_foldrWithIndex1, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_List_Lazy_Types_foldrWithIndex1, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
$apply1 = ($Control_Apply_apply)($Apply0);
$map2 = ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined));
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Data_List_Lazy_Types_foldrWithIndex1, $apply1, $map2, &$Data_List_Lazy_Types_cons, $pure, &$Data_List_Lazy_Types_nil) {
  $__fn = function($f) use (&$Data_List_Lazy_Types_foldrWithIndex1, $apply1, $map2, &$Data_List_Lazy_Types_cons, $pure, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_foldrWithIndex1)((function() use ($apply1, $map2, &$Data_List_Lazy_Types_cons, $f) {
  $__fn = function($i, $a = null, $b = null) use ($apply1, $map2, &$Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($map2)($Data_List_Lazy_Types_cons, ($f)($i, $a)), $b);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), ($pure)($Data_List_Lazy_Types_nil));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_List_Lazy_Types_functorWithIndexList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorWithIndexList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorWithIndexList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_List_Lazy_Types_foldableWithIndexList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_foldableWithIndexList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_foldableWithIndexList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_List_Lazy_Types_traversableList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_traversableList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_traversableList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_traverseWithIndex
$Data_List_Lazy_Types_traverseWithIndex = ($Data_TraversableWithIndex_traverseWithIndex)(($Data_NonEmpty_traversableWithIndexNonEmpty)($Data_List_Lazy_Types_traversableWithIndexList));

// Data_List_Lazy_Types_traversableWithIndexNonEmptyList
$Data_List_Lazy_Types_traversableWithIndexNonEmptyList = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Lazy_Types_traverseWithIndex, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_List_Lazy_Types_traverseWithIndex, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverseWithIndex1 = ($Data_List_Lazy_Types_traverseWithIndex)($dictApplicative);
    $__res = (function() use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $traverseWithIndex1, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
  $__body = function($f, $v) use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $traverseWithIndex1, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($map2)((function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer) {
  $__fn = function($xxs) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $xxs;
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
})(), ($traverseWithIndex1)(($Data_List_Lazy_Types_compose)($f1, ($Data_Maybe_maybe)(0, ($Data_List_Lazy_Types_add)(1))), ($Data_Lazy_force)($ne)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map2, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, $traverseWithIndex1, &$Data_List_Lazy_Types_compose, &$Data_Maybe_maybe, &$Data_List_Lazy_Types_add, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use (&$Data_List_Lazy_Types_functorWithIndexNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorWithIndexNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorWithIndexNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_List_Lazy_Types_foldableWithIndexNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_foldableWithIndexNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_foldableWithIndexNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_List_Lazy_Types_traversableNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_traversableNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_traversableNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_unfoldable1List
$Data_List_Lazy_Types_unfoldable1List = ($Data_Unfoldable1_Unfoldable1__dollar__Dict)((object)["unfoldr1" => (function() use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
$go = (function() use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_cons, &$go, &$Data_List_Lazy_Types_nil) {
  $__fn = function($f, $b = null) use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_cons, &$go, &$Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($f, $b) use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_cons, &$go, &$Data_List_Lazy_Types_nil) {
while (true) {
return ($Data_List_Lazy_Types_defer)((function() use ($f, $b, &$Data_List_Lazy_Types_cons, &$go, &$Data_List_Lazy_Types_nil) {
  $__body = function($v) use ($f, $b, &$Data_List_Lazy_Types_cons, &$go, &$Data_List_Lazy_Types_nil) {
    $v1 = ($f)($b);
    $__case_0 = $v1;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Just"))) {
$a = ($__case_0)->values[0];
$b__prime__ = (($__case_0)->values[1])->values[0];
return ($Data_List_Lazy_Types_cons)($a, ($go)($f, $b__prime__));
} else {
;
};
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Nothing"))) {
$a = ($__case_0)->values[0];
return ($Data_List_Lazy_Types_cons)($a, $Data_List_Lazy_Types_nil);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($f, $b, &$Data_List_Lazy_Types_cons, &$go, &$Data_List_Lazy_Types_nil, $__body, &$__fn) {
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
}
})($f, $b);
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

// Data_List_Lazy_Types_unfoldableList
$Data_List_Lazy_Types_unfoldableList = ($Data_Unfoldable_Unfoldable__dollar__Dict)((object)["unfoldr" => (function() use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons) {
$go = (function() use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$go) {
  $__fn = function($f, $b = null) use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($f, $b) use (&$Data_List_Lazy_Types_defer, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$go) {
while (true) {
return ($Data_List_Lazy_Types_defer)((function() use ($f, $b, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$go) {
  $__body = function($v) use ($f, $b, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$go) {
    $v1 = ($f)($b);
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return $Data_List_Lazy_Types_nil;
} else {
;
};
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$b__prime__ = (($__case_0)->values[0])->values[1];
return ($Data_List_Lazy_Types_cons)($a, ($go)($f, $b__prime__));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($f, $b, &$Data_List_Lazy_Types_nil, &$Data_List_Lazy_Types_cons, &$go, $__body, &$__fn) {
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
}
})($f, $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
return $go;
})(), "Unfoldable10" => (function() use (&$Data_List_Lazy_Types_unfoldable1List) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_unfoldable1List, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_unfoldable1List;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_unfoldr1
$Data_List_Lazy_Types_unfoldr1 = ($Data_Unfoldable1_unfoldr1)(($Data_NonEmpty_unfoldable1NonEmpty)($Data_List_Lazy_Types_unfoldableList));

// Data_List_Lazy_Types_unfoldable1NonEmptyList
$Data_List_Lazy_Types_unfoldable1NonEmptyList = ($Data_Unfoldable1_Unfoldable1__dollar__Dict)((object)["unfoldr1" => (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_unfoldr1) {
  $__fn = function($f, $b = null) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_unfoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_List_Lazy_Types_unfoldr1, $f, $b) {
  $__fn = function($v) use (&$Data_List_Lazy_Types_unfoldr1, $f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_unfoldr1)($f, $b);
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
})()]);

// Data_List_Lazy_Types_comonadNonEmptyList
$Data_List_Lazy_Types_comonadNonEmptyList = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => (function() use (&$Data_NonEmpty_head, &$Data_Lazy_force) {
  $__body = function($v) use (&$Data_NonEmpty_head, &$Data_Lazy_force) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($Data_NonEmpty_head)(($Data_Lazy_force)($nel));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_NonEmpty_head, &$Data_Lazy_force, $__body, &$__fn) {
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
})(), "Extend0" => (function() use (&$Data_List_Lazy_Types_extendNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_extendNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_extendNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_monadList
$Data_List_Lazy_Types_monadList = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_List_Lazy_Types_applicativeList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_applicativeList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_applicativeList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_List_Lazy_Types_bindList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_bindList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_bindList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_bindList
$Data_List_Lazy_Types_bindList = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_append1, &$Control_Bind_bind, &$Data_List_Lazy_Types_bindList, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_unwrap) {
  $__fn = function($xs, $f = null) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_append1, &$Control_Bind_bind, &$Data_List_Lazy_Types_bindList, &$Data_List_Lazy_Types_List, &$Data_List_Lazy_Types_map, &$Data_List_Lazy_Types_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_append1, $f, &$Control_Bind_bind, &$Data_List_Lazy_Types_bindList) {
  $__body = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_append1, $f, &$Control_Bind_bind, &$Data_List_Lazy_Types_bindList) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_List_Lazy_Types_Nil;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_step)(($Data_List_Lazy_Types_append1)(($f)($x), ($Control_Bind_bind)($Data_List_Lazy_Types_bindList, $xs__prime__, $f)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_List_Lazy_Types_Nil, &$Data_List_Lazy_Types_step, &$Data_List_Lazy_Types_append1, $f, &$Control_Bind_bind, &$Data_List_Lazy_Types_bindList, $__body, &$__fn) {
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
    $__res = ($Data_List_Lazy_Types_List)(($Data_List_Lazy_Types_map)($go, ($Data_List_Lazy_Types_unwrap)($xs)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use (&$Data_List_Lazy_Types_applyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_applyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_applyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_applicativeList
$Data_List_Lazy_Types_applicativeList = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
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
})(), "Apply0" => (function() use (&$Data_List_Lazy_Types_applyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_applyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_applyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_applyList
$Data_List_Lazy_Types_applyList = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Control_Monad_ap)($Data_List_Lazy_Types_monadList), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_apply
$Data_List_Lazy_Types_apply = ($Control_Apply_apply)($Data_List_Lazy_Types_applyList);

// Data_List_Lazy_Types_bind
$Data_List_Lazy_Types_bind = ($Control_Bind_bind)($Data_List_Lazy_Types_bindList);

// Data_List_Lazy_Types_applyNonEmptyList
$Data_List_Lazy_Types_applyNonEmptyList = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Lazy_force, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_apply, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
  $__body = function($v, $v1) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_apply, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$nefs = $__case_0;
$neas = $__case_1;
$v2 = ($Data_Lazy_force)($neas);
$v3 = ($Data_Lazy_force)($nefs);
$__case_0 = $v3;
$__case_1 = $v2;
if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->values[0];
$fs = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
return ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $f, $a, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_apply, $fs, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, $as) {
  $__fn = function($v4) use (&$Data_NonEmpty_NonEmpty, $f, $a, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_apply, $fs, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)(($f)($a), ($Data_List_Lazy_Types_append1)(($Data_List_Lazy_Types_apply)($fs, ($Data_List_Lazy_Types_cons)($a, $Data_List_Lazy_Types_nil)), ($Data_List_Lazy_Types_apply)(($Data_List_Lazy_Types_cons)($f, $fs), $as)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_apply, &$Data_List_Lazy_Types_cons, &$Data_List_Lazy_Types_nil, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_bindNonEmptyList
$Data_List_Lazy_Types_bindNonEmptyList = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Lazy_force, &$Data_List_Lazy_Types_unwrap, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_bind, &$Data_List_Lazy_Types_compose, &$Data_List_Lazy_Types_toList) {
  $__body = function($v, $f) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_unwrap, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_bind, &$Data_List_Lazy_Types_compose, &$Data_List_Lazy_Types_toList) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$nel = $__case_0;
$f1 = $__case_1;
$v1 = ($Data_Lazy_force)($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$v2 = ($Data_Lazy_force)(($Data_List_Lazy_Types_unwrap)(($f1)($a)));
$__case_0 = $v2;
if ((($__case_0)->tag === "NonEmpty")) {
$b = ($__case_0)->values[0];
$bs = ($__case_0)->values[1];
return ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_NonEmpty_NonEmpty, $b, &$Data_List_Lazy_Types_append1, $bs, &$Data_List_Lazy_Types_bind, $as, &$Data_List_Lazy_Types_compose, &$Data_List_Lazy_Types_toList, $f1) {
  $__fn = function($v3) use (&$Data_NonEmpty_NonEmpty, $b, &$Data_List_Lazy_Types_append1, $bs, &$Data_List_Lazy_Types_bind, $as, &$Data_List_Lazy_Types_compose, &$Data_List_Lazy_Types_toList, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_NonEmpty_NonEmpty)($b, ($Data_List_Lazy_Types_append1)($bs, ($Data_List_Lazy_Types_bind)($as, ($Data_List_Lazy_Types_compose)($Data_List_Lazy_Types_toList, $f1))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
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
  $__fn = function($v, $f = null) use (&$Data_Lazy_force, &$Data_List_Lazy_Types_unwrap, &$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_NonEmpty_NonEmpty, &$Data_List_Lazy_Types_append1, &$Data_List_Lazy_Types_bind, &$Data_List_Lazy_Types_compose, &$Data_List_Lazy_Types_toList, $__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Data_List_Lazy_Types_applyNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_applyNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_applyNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_altNonEmptyList
$Data_List_Lazy_Types_altNonEmptyList = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => ($Data_Semigroup_append)($Data_List_Lazy_Types_semigroupNonEmptyList), "Functor0" => (function() use (&$Data_List_Lazy_Types_functorNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_altList
$Data_List_Lazy_Types_altList = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => $Data_List_Lazy_Types_append1, "Functor0" => (function() use (&$Data_List_Lazy_Types_functorList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_functorList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_functorList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_plusList
$Data_List_Lazy_Types_plusList = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => $Data_List_Lazy_Types_nil, "Alt0" => (function() use (&$Data_List_Lazy_Types_altList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_altList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_altList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_singleton
$Data_List_Lazy_Types_singleton = ($Data_NonEmpty_singleton)($Data_List_Lazy_Types_plusList);

// Data_List_Lazy_Types_alternativeList
$Data_List_Lazy_Types_alternativeList = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_List_Lazy_Types_applicativeList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_applicativeList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_applicativeList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Data_List_Lazy_Types_plusList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_plusList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_plusList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_monadPlusList
$Data_List_Lazy_Types_monadPlusList = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use (&$Data_List_Lazy_Types_monadList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_monadList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_monadList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use (&$Data_List_Lazy_Types_alternativeList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_alternativeList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_alternativeList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_applicativeNonEmptyList
$Data_List_Lazy_Types_applicativeNonEmptyList = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_singleton) {
  $__fn = function($a) use (&$Data_List_Lazy_Types_NonEmptyList, &$Data_Lazy_defer, &$Data_List_Lazy_Types_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_NonEmptyList)(($Data_Lazy_defer)((function() use (&$Data_List_Lazy_Types_singleton, $a) {
  $__fn = function($v) use (&$Data_List_Lazy_Types_singleton, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_List_Lazy_Types_singleton)($a);
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
})(), "Apply0" => (function() use (&$Data_List_Lazy_Types_applyNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_applyNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_applyNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_monadNonEmptyList
$Data_List_Lazy_Types_monadNonEmptyList = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_List_Lazy_Types_applicativeNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_applicativeNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_applicativeNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_List_Lazy_Types_bindNonEmptyList) {
  $__fn = function($__dollar____unused) use (&$Data_List_Lazy_Types_bindNonEmptyList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_List_Lazy_Types_bindNonEmptyList;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

