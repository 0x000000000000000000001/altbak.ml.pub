<?php

namespace Data\Enum;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Enum_apply
$Data_Enum_apply = ($Control_Apply_apply)($Control_Apply_applyFn);

// Data_Enum_append
$Data_Enum_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Enum_show
$Data_Enum_show = ($Data_Show_show)($Data_Show_showInt);

// Data_Enum_lessThan
$Data_Enum_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_Enum_map
$Data_Enum_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Enum_compose
$Data_Enum_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Enum_top
$Data_Enum_top = ($Data_Bounded_top)($Data_Bounded_boundedInt);

// Data_Enum_add
$Data_Enum_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Enum_greaterThan
$Data_Enum_greaterThan = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_Enum_bottom
$Data_Enum_bottom = ($Data_Bounded_bottom)($Data_Bounded_boundedInt);

// Data_Enum_sub
$Data_Enum_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Enum_bind
$Data_Enum_bind = ($Control_Bind_bind)($Data_Maybe_bindMaybe);

// Data_Enum_voidLeft
$Data_Enum_voidLeft = ($Data_Functor_voidLeft)($Data_Maybe_functorMaybe);

// Data_Enum_guard
$Data_Enum_guard = ($Control_Alternative_guard)($Data_Maybe_alternativeMaybe);

// Data_Enum_lessThanOrEq
$Data_Enum_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Enum_composeFlipped
$Data_Enum_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Enum_fromJust
$Data_Enum_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Enum_eq
$Data_Enum_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Enum_conj
$Data_Enum_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Enum_greaterThanOrEq
$Data_Enum_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_Enum_bottom1
$Data_Enum_bottom1 = ($Data_Bounded_bottom)($Data_Bounded_boundedChar);

// Data_Enum_top1
$Data_Enum_top1 = ($Data_Bounded_top)($Data_Bounded_boundedChar);

// Data_Enum_Enum$Dict
$Data_Enum_Enum__dollar__Dict = (function() {
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

// Data_Enum_Cardinality
$Data_Enum_Cardinality = (function() {
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

// Data_Enum_BoundedEnum$Dict
$Data_Enum_BoundedEnum__dollar__Dict = (function() {
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

// Data_Enum_toEnum
$Data_Enum_toEnum = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->toEnum;
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

// Data_Enum_succ
$Data_Enum_succ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->succ;
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

// Data_Enum_upFromIncluding
$Data_Enum_upFromIncluding = (function() use (&$Data_Enum_succ, &$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple) {
  $__fn = function($dictEnum) use (&$Data_Enum_succ, &$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$succ1 = ($Data_Enum_succ)($dictEnum);
    $__res = (function() use (&$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple, $succ1) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple, $succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable1_unfoldr1)($dictUnfoldable1, ($Data_Enum_apply)($Data_Tuple_Tuple, $succ1));
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

// Data_Enum_showCardinality
$Data_Enum_showCardinality = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Enum_append, &$Data_Enum_show) {
  $__body = function($v) use (&$Data_Enum_append, &$Data_Enum_show) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($Data_Enum_append)("(Cardinality ", ($Data_Enum_append)(($Data_Enum_show)($n), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Enum_append, &$Data_Enum_show, $__body, &$__fn) {
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

// Data_Enum_pred
$Data_Enum_pred = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pred;
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

// Data_Enum_ordCardinality
$Data_Enum_ordCardinality = $Data_Ord_ordInt;

// Data_Enum_newtypeCardinality
$Data_Enum_newtypeCardinality = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Enum_fromEnum
$Data_Enum_fromEnum = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->fromEnum;
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

// Data_Enum_toEnumWithDefaults
$Data_Enum_toEnumWithDefaults = (function() use (&$Data_Enum_toEnum, &$Data_Enum_fromEnum, &$Data_Bounded_bottom, &$Prim_undefined, &$Data_Enum_lessThan) {
  $__fn = function($dictBoundedEnum) use (&$Data_Enum_toEnum, &$Data_Enum_fromEnum, &$Data_Bounded_bottom, &$Prim_undefined, &$Data_Enum_lessThan, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$toEnum1 = ($Data_Enum_toEnum)($dictBoundedEnum);
$fromEnum1 = ($Data_Enum_fromEnum)($dictBoundedEnum);
$bottom2 = ($Data_Bounded_bottom)((($dictBoundedEnum)->Bounded0)($Prim_undefined));
    $__res = (function() use ($toEnum1, &$Data_Enum_lessThan, $fromEnum1, $bottom2) {
  $__body = function($low, $high, $x) use ($toEnum1, &$Data_Enum_lessThan, $fromEnum1, $bottom2) {
    $v = ($toEnum1)($x);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$enum = ($__case_0)->values[0];
return $enum;
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
$__case_0 = ($Data_Enum_lessThan)($x, ($fromEnum1)($bottom2));
if (($__case_0 === true)) {
return $low;
} else {
;
};
if (true) {
return $high;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($low, $high = null, $x = null) use ($toEnum1, &$Data_Enum_lessThan, $fromEnum1, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($low, $high, $x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($low, $high, $x);
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

// Data_Enum_eqCardinality
$Data_Enum_eqCardinality = $Data_Eq_eqInt;

// Data_Enum_enumUnit
$Data_Enum_enumUnit = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Function_const)($Data_Maybe_Nothing), "pred" => ($Data_Function_const)($Data_Maybe_Nothing), "Ord0" => (function() use (&$Data_Ord_ordUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_enumTuple
$Data_Enum_enumTuple = (function() use (&$Data_Enum_succ, &$Data_Enum_pred, &$Data_Tuple_ordTuple, &$Prim_undefined, &$Data_Bounded_bottom, &$Data_Bounded_top, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, &$Data_Enum_compose, &$Data_Maybe_Just) {
  $__fn = function($dictEnum) use (&$Data_Enum_succ, &$Data_Enum_pred, &$Data_Tuple_ordTuple, &$Prim_undefined, &$Data_Bounded_bottom, &$Data_Bounded_top, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, &$Data_Enum_compose, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$succ1 = ($Data_Enum_succ)($dictEnum);
$pred1 = ($Data_Enum_pred)($dictEnum);
$ordTuple = ($Data_Tuple_ordTuple)((($dictEnum)->Ord0)($Prim_undefined));
    $__res = (function() use (&$Prim_undefined, &$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Bounded_top, &$Data_Enum_pred, $ordTuple, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $succ1, &$Data_Enum_compose, &$Data_Maybe_Just, $pred1) {
  $__fn = function($dictBoundedEnum) use (&$Prim_undefined, &$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Bounded_top, &$Data_Enum_pred, $ordTuple, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $succ1, &$Data_Enum_compose, &$Data_Maybe_Just, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Bounded0 = (($dictBoundedEnum)->Bounded0)($Prim_undefined);
$bottom2 = ($Data_Bounded_bottom)($Bounded0);
$Enum1 = (($dictBoundedEnum)->Enum1)($Prim_undefined);
$succ2 = ($Data_Enum_succ)($Enum1);
$top2 = ($Data_Bounded_top)($Bounded0);
$pred2 = ($Data_Enum_pred)($Enum1);
$ordTuple1 = ($ordTuple)((($Enum1)->Ord0)($Prim_undefined));
    $__res = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => (function() use (&$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $bottom2, $succ1, &$Data_Enum_compose, &$Data_Maybe_Just, $succ2) {
  $__body = function($v) use (&$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $bottom2, $succ1, &$Data_Enum_compose, &$Data_Maybe_Just, $succ2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Maybe_maybe)(($Data_Enum_map)(($Data_Function_flip)($Data_Tuple_Tuple, $bottom2), ($succ1)($a)), ($Data_Enum_compose)($Data_Maybe_Just, ($Data_Tuple_Tuple)($a)), ($succ2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $bottom2, $succ1, &$Data_Enum_compose, &$Data_Maybe_Just, $succ2, $__body, &$__fn) {
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
})(), "pred" => (function() use (&$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $top2, $pred1, &$Data_Enum_compose, &$Data_Maybe_Just, $pred2) {
  $__body = function($v) use (&$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $top2, $pred1, &$Data_Enum_compose, &$Data_Maybe_Just, $pred2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Maybe_maybe)(($Data_Enum_map)(($Data_Function_flip)($Data_Tuple_Tuple, $top2), ($pred1)($a)), ($Data_Enum_compose)($Data_Maybe_Just, ($Data_Tuple_Tuple)($a)), ($pred2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_maybe, &$Data_Enum_map, &$Data_Function_flip, &$Data_Tuple_Tuple, $top2, $pred1, &$Data_Enum_compose, &$Data_Maybe_Just, $pred2, $__body, &$__fn) {
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
})(), "Ord0" => (function() use ($ordTuple1) {
  $__fn = function($__dollar____unused) use ($ordTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordTuple1;
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

// Data_Enum_enumOrdering
$Data_Enum_enumOrdering = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => (function() use (&$Data_Maybe_Just, &$Data_Ordering_EQ, &$Data_Ordering_GT, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Ordering_EQ, &$Data_Ordering_GT, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return ($Data_Maybe_Just)($Data_Ordering_EQ);
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return ($Data_Maybe_Just)($Data_Ordering_GT);
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Just, &$Data_Ordering_EQ, &$Data_Ordering_GT, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "pred" => (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Ordering_LT, &$Data_Ordering_EQ) {
  $__body = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Ordering_LT, &$Data_Ordering_EQ) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return ($Data_Maybe_Just)($Data_Ordering_LT);
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return ($Data_Maybe_Just)($Data_Ordering_EQ);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Ordering_LT, &$Data_Ordering_EQ, $__body, &$__fn) {
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
})(), "Ord0" => (function() use (&$Data_Ord_ordOrdering) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordOrdering, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordOrdering;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_enumMaybe
$Data_Enum_enumMaybe = (function() use (&$Data_Bounded_bottom, &$Prim_undefined, &$Data_Enum_succ, &$Data_Enum_pred, &$Data_Maybe_ordMaybe, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_Just, &$Data_Enum_map, &$Data_Maybe_Nothing) {
  $__fn = function($dictBoundedEnum) use (&$Data_Bounded_bottom, &$Prim_undefined, &$Data_Enum_succ, &$Data_Enum_pred, &$Data_Maybe_ordMaybe, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_Just, &$Data_Enum_map, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bottom2 = ($Data_Bounded_bottom)((($dictBoundedEnum)->Bounded0)($Prim_undefined));
$Enum1 = (($dictBoundedEnum)->Enum1)($Prim_undefined);
$succ1 = ($Data_Enum_succ)($Enum1);
$pred1 = ($Data_Enum_pred)($Enum1);
$ordMaybe = ($Data_Maybe_ordMaybe)((($Enum1)->Ord0)($Prim_undefined));
    $__res = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => (function() use (&$Data_Maybe_Just, $bottom2, &$Data_Enum_map, $succ1) {
  $__body = function($v) use (&$Data_Maybe_Just, $bottom2, &$Data_Enum_map, $succ1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($Data_Maybe_Just)(($Data_Maybe_Just)($bottom2));
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($Data_Enum_map)($Data_Maybe_Just, ($succ1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Just, $bottom2, &$Data_Enum_map, $succ1, $__body, &$__fn) {
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
})(), "pred" => (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $pred1) {
  $__body = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $pred1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($Data_Maybe_Just)(($pred1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, $pred1, $__body, &$__fn) {
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
})(), "Ord0" => (function() use ($ordMaybe) {
  $__fn = function($__dollar____unused) use ($ordMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordMaybe;
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

// Data_Enum_enumInt
$Data_Enum_enumInt = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => (function() use (&$Data_Enum_lessThan, &$Data_Enum_top, &$Data_Maybe_Just, &$Data_Enum_add, &$Data_Maybe_Nothing) {
  $__body = function($n) use (&$Data_Enum_lessThan, &$Data_Enum_top, &$Data_Maybe_Just, &$Data_Enum_add, &$Data_Maybe_Nothing) {
    $__case_0 = ($Data_Enum_lessThan)($n, $Data_Enum_top);
    if (($__case_0 === true)) {
return ($Data_Maybe_Just)(($Data_Enum_add)($n, 1));
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
  $__fn = function($n) use (&$Data_Enum_lessThan, &$Data_Enum_top, &$Data_Maybe_Just, &$Data_Enum_add, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
  };
  return $__fn;
})(), "pred" => (function() use (&$Data_Enum_greaterThan, &$Data_Enum_bottom, &$Data_Maybe_Just, &$Data_Enum_sub, &$Data_Maybe_Nothing) {
  $__body = function($n) use (&$Data_Enum_greaterThan, &$Data_Enum_bottom, &$Data_Maybe_Just, &$Data_Enum_sub, &$Data_Maybe_Nothing) {
    $__case_0 = ($Data_Enum_greaterThan)($n, $Data_Enum_bottom);
    if (($__case_0 === true)) {
return ($Data_Maybe_Just)(($Data_Enum_sub)($n, 1));
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
  $__fn = function($n) use (&$Data_Enum_greaterThan, &$Data_Enum_bottom, &$Data_Maybe_Just, &$Data_Enum_sub, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
  };
  return $__fn;
})(), "Ord0" => (function() use (&$Data_Ord_ordInt) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordInt;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_enumFromTo
$Data_Enum_enumFromTo = (function() use (&$Prim_undefined, &$Data_Eq_eq, &$Data_Ord_lessThan, &$Data_Enum_succ, &$Data_Ord_lessThanOrEq, &$Data_Enum_pred, &$Data_Ord_greaterThanOrEq, &$Data_Unfoldable1_singleton, &$Data_Unfoldable1_unfoldr1, &$Data_Tuple_Tuple, &$Data_Enum_bind, &$Data_Enum_voidLeft, &$Data_Enum_guard) {
  $__fn = function($dictEnum) use (&$Prim_undefined, &$Data_Eq_eq, &$Data_Ord_lessThan, &$Data_Enum_succ, &$Data_Ord_lessThanOrEq, &$Data_Enum_pred, &$Data_Ord_greaterThanOrEq, &$Data_Unfoldable1_singleton, &$Data_Unfoldable1_unfoldr1, &$Data_Tuple_Tuple, &$Data_Enum_bind, &$Data_Enum_voidLeft, &$Data_Enum_guard, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Ord0 = (($dictEnum)->Ord0)($Prim_undefined);
$eq1 = ($Data_Eq_eq)((($Ord0)->Eq0)($Prim_undefined));
$lessThan1 = ($Data_Ord_lessThan)($Ord0);
$succ1 = ($Data_Enum_succ)($dictEnum);
$lessThanOrEq1 = ($Data_Ord_lessThanOrEq)($Ord0);
$pred1 = ($Data_Enum_pred)($dictEnum);
$greaterThanOrEq1 = ($Data_Ord_greaterThanOrEq)($Ord0);
    $__res = (function() use (&$Data_Unfoldable1_singleton, &$Data_Unfoldable1_unfoldr1, &$Data_Tuple_Tuple, &$Data_Enum_bind, &$Data_Enum_voidLeft, &$Data_Enum_guard) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_singleton, &$Data_Unfoldable1_unfoldr1, &$Data_Tuple_Tuple, &$Data_Enum_bind, &$Data_Enum_voidLeft, &$Data_Enum_guard, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$singleton = ($Data_Unfoldable1_singleton)($dictUnfoldable1);
$unfoldr1 = ($Data_Unfoldable1_unfoldr1)($dictUnfoldable1);
$go = (function() use (&$Data_Tuple_Tuple, &$Data_Enum_bind, &$Data_Enum_voidLeft, &$Data_Enum_guard) {
  $__fn = function($step, $op = null, $to = null, $a = null) use (&$Data_Tuple_Tuple, &$Data_Enum_bind, &$Data_Enum_voidLeft, &$Data_Enum_guard, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Enum_bind)(($step)($a), (function() use (&$Data_Enum_voidLeft, &$Data_Enum_guard, $op, $to) {
  $__fn = function($a__prime__) use (&$Data_Enum_voidLeft, &$Data_Enum_guard, $op, $to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_voidLeft)(($Data_Enum_guard)(($op)($a__prime__, $to)), $a__prime__);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$from = $__case_0;
$to = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_enumFromThenTo
$Data_Enum_enumFromThenTo = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Functor_map, &$Data_Enum_fromEnum, &$Data_Enum_toEnum, &$Partial_Unsafe_unsafePartial, &$Data_Enum_composeFlipped, &$Data_Enum_fromJust, &$Data_Enum_sub) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Functor_map, &$Data_Enum_fromEnum, &$Data_Enum_toEnum, &$Partial_Unsafe_unsafePartial, &$Data_Enum_composeFlipped, &$Data_Enum_fromJust, &$Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr = ($Data_Unfoldable_unfoldr)($dictUnfoldable);
    $__res = (function() use (&$Data_Functor_map, &$Data_Enum_fromEnum, &$Data_Enum_toEnum, &$Partial_Unsafe_unsafePartial, &$Data_Enum_composeFlipped, &$Data_Enum_fromJust, $unfoldr, &$Data_Enum_sub) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Enum_fromEnum, &$Data_Enum_toEnum, &$Partial_Unsafe_unsafePartial, &$Data_Enum_composeFlipped, &$Data_Enum_fromJust, $unfoldr, &$Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Enum_fromEnum, &$Data_Enum_toEnum, &$Partial_Unsafe_unsafePartial, $map1, &$Data_Enum_composeFlipped, &$Data_Enum_fromJust, $unfoldr, &$Data_Enum_sub) {
  $__fn = function($dictBoundedEnum) use (&$Data_Enum_fromEnum, &$Data_Enum_toEnum, &$Partial_Unsafe_unsafePartial, $map1, &$Data_Enum_composeFlipped, &$Data_Enum_fromJust, $unfoldr, &$Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromEnum1 = ($Data_Enum_fromEnum)($dictBoundedEnum);
$toEnum1 = ($Data_Enum_toEnum)($dictBoundedEnum);
$go = (function() {
  $__body = function($step, $to, $e) {
    $__case_0 = $step;
    $__case_1 = $to;
    $__case_2 = $e;
    if (true) {
$step1 = $__case_0;
$to1 = $__case_1;
$e1 = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($step, $to = null, $e = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($step, $to, $e);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($step, $to, $e);
  };
  return $__fn;
})();
    $__res = ($Partial_Unsafe_unsafePartial)((function() use ($fromEnum1, $map1, &$Data_Enum_composeFlipped, $toEnum1, &$Data_Enum_fromJust, $unfoldr, $go, &$Data_Enum_sub) {
  $__fn = function($__dollar____unused, $a = null, $b = null, $c = null) use ($fromEnum1, $map1, &$Data_Enum_composeFlipped, $toEnum1, &$Data_Enum_fromJust, $unfoldr, $go, &$Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$c__prime__ = ($fromEnum1)($c);
$b__prime__ = ($fromEnum1)($b);
$a__prime__ = ($fromEnum1)($a);
    $__res = ($map1)(($Data_Enum_composeFlipped)($toEnum1, $Data_Enum_fromJust), ($unfoldr)(($go)(($Data_Enum_sub)($b__prime__, $a__prime__), $c__prime__), $a__prime__));
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_enumEither
$Data_Enum_enumEither = (function() use (&$Prim_undefined, &$Data_Enum_succ, &$Data_Enum_pred, &$Data_Bounded_top, &$Data_Either_ordEither, &$Data_Bounded_bottom, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Either_Right, &$Data_Enum_compose, &$Data_Either_Left, &$Data_Maybe_Nothing) {
  $__fn = function($dictBoundedEnum) use (&$Prim_undefined, &$Data_Enum_succ, &$Data_Enum_pred, &$Data_Bounded_top, &$Data_Either_ordEither, &$Data_Bounded_bottom, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Either_Right, &$Data_Enum_compose, &$Data_Either_Left, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Enum1 = (($dictBoundedEnum)->Enum1)($Prim_undefined);
$succ1 = ($Data_Enum_succ)($Enum1);
$pred1 = ($Data_Enum_pred)($Enum1);
$top2 = ($Data_Bounded_top)((($dictBoundedEnum)->Bounded0)($Prim_undefined));
$ordEither = ($Data_Either_ordEither)((($Enum1)->Ord0)($Prim_undefined));
    $__res = (function() use (&$Data_Bounded_bottom, &$Prim_undefined, &$Data_Enum_succ, &$Data_Enum_pred, $ordEither, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Either_Right, &$Data_Enum_compose, &$Data_Either_Left, $succ1, &$Data_Maybe_Nothing, $pred1, $top2) {
  $__fn = function($dictBoundedEnum1) use (&$Data_Bounded_bottom, &$Prim_undefined, &$Data_Enum_succ, &$Data_Enum_pred, $ordEither, &$Data_Enum_Enum__dollar__Dict, &$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Either_Right, &$Data_Enum_compose, &$Data_Either_Left, $succ1, &$Data_Maybe_Nothing, $pred1, $top2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bottom2 = ($Data_Bounded_bottom)((($dictBoundedEnum1)->Bounded0)($Prim_undefined));
$Enum11 = (($dictBoundedEnum1)->Enum1)($Prim_undefined);
$succ2 = ($Data_Enum_succ)($Enum11);
$pred2 = ($Data_Enum_pred)($Enum11);
$ordEither1 = ($ordEither)((($Enum11)->Ord0)($Prim_undefined));
    $__res = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => (function() use (&$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Either_Right, $bottom2, &$Data_Enum_compose, &$Data_Either_Left, $succ1, &$Data_Maybe_Nothing, $succ2) {
  $__body = function($v) use (&$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Either_Right, $bottom2, &$Data_Enum_compose, &$Data_Either_Left, $succ1, &$Data_Maybe_Nothing, $succ2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$a = ($__case_0)->values[0];
return ($Data_Maybe_maybe)(($Data_Maybe_Just)(($Data_Either_Right)($bottom2)), ($Data_Enum_compose)($Data_Maybe_Just, $Data_Either_Left), ($succ1)($a));
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$b = ($__case_0)->values[0];
return ($Data_Maybe_maybe)($Data_Maybe_Nothing, ($Data_Enum_compose)($Data_Maybe_Just, $Data_Either_Right), ($succ2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_maybe, &$Data_Maybe_Just, &$Data_Either_Right, $bottom2, &$Data_Enum_compose, &$Data_Either_Left, $succ1, &$Data_Maybe_Nothing, $succ2, $__body, &$__fn) {
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
})(), "pred" => (function() use (&$Data_Maybe_maybe, &$Data_Maybe_Nothing, &$Data_Enum_compose, &$Data_Maybe_Just, &$Data_Either_Left, $pred1, $top2, &$Data_Either_Right, $pred2) {
  $__body = function($v) use (&$Data_Maybe_maybe, &$Data_Maybe_Nothing, &$Data_Enum_compose, &$Data_Maybe_Just, &$Data_Either_Left, $pred1, $top2, &$Data_Either_Right, $pred2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$a = ($__case_0)->values[0];
return ($Data_Maybe_maybe)($Data_Maybe_Nothing, ($Data_Enum_compose)($Data_Maybe_Just, $Data_Either_Left), ($pred1)($a));
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$b = ($__case_0)->values[0];
return ($Data_Maybe_maybe)(($Data_Maybe_Just)(($Data_Either_Left)($top2)), ($Data_Enum_compose)($Data_Maybe_Just, $Data_Either_Right), ($pred2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_maybe, &$Data_Maybe_Nothing, &$Data_Enum_compose, &$Data_Maybe_Just, &$Data_Either_Left, $pred1, $top2, &$Data_Either_Right, $pred2, $__body, &$__fn) {
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
})(), "Ord0" => (function() use ($ordEither1) {
  $__fn = function($__dollar____unused) use ($ordEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordEither1;
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

// Data_Enum_enumBoolean
$Data_Enum_enumBoolean = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => (function() use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (($__case_0 === false)) {
return ($Data_Maybe_Just)(true);
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
})(), "pred" => (function() use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return ($Data_Maybe_Just)(false);
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
})(), "Ord0" => (function() use (&$Data_Ord_ordBoolean) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordBoolean, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordBoolean;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_downFromIncluding
$Data_Enum_downFromIncluding = (function() use (&$Data_Enum_pred, &$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple) {
  $__fn = function($dictEnum) use (&$Data_Enum_pred, &$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pred1 = ($Data_Enum_pred)($dictEnum);
    $__res = (function() use (&$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple, $pred1) {
  $__fn = function($dictUnfoldable1) use (&$Data_Unfoldable1_unfoldr1, &$Data_Enum_apply, &$Data_Tuple_Tuple, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable1_unfoldr1)($dictUnfoldable1, ($Data_Enum_apply)($Data_Tuple_Tuple, $pred1));
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

// Data_Enum_diag
$Data_Enum_diag = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, $a);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_downFrom
$Data_Enum_downFrom = (function() use (&$Data_Enum_pred, &$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag) {
  $__fn = function($dictEnum) use (&$Data_Enum_pred, &$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pred1 = ($Data_Enum_pred)($dictEnum);
    $__res = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag, $pred1) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_unfoldr)($dictUnfoldable, ($Data_Enum_compose)(($Data_Enum_map)($Data_Enum_diag), $pred1));
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

// Data_Enum_upFrom
$Data_Enum_upFrom = (function() use (&$Data_Enum_succ, &$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag) {
  $__fn = function($dictEnum) use (&$Data_Enum_succ, &$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$succ1 = ($Data_Enum_succ)($dictEnum);
    $__res = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag, $succ1) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Enum_compose, &$Data_Enum_map, &$Data_Enum_diag, $succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Unfoldable_unfoldr)($dictUnfoldable, ($Data_Enum_compose)(($Data_Enum_map)($Data_Enum_diag), $succ1));
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

// Data_Enum_defaultToEnum
$Data_Enum_defaultToEnum = (function() use (&$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_eq, &$Data_Maybe_Just, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$Data_Enum_lessThan) {
  $__fn = function($dictBounded) use (&$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_eq, &$Data_Maybe_Just, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$Data_Enum_lessThan, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bottom2 = ($Data_Bounded_bottom)($dictBounded);
    $__res = (function() use (&$Data_Enum_succ, &$Data_Enum_eq, &$Data_Maybe_Just, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$Data_Enum_lessThan, $bottom2) {
  $__fn = function($dictEnum) use (&$Data_Enum_succ, &$Data_Enum_eq, &$Data_Maybe_Just, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$Data_Enum_lessThan, $bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$succ1 = ($Data_Enum_succ)($dictEnum);
    $__res = (function() use (&$Data_Enum_eq, &$Data_Maybe_Just, $succ1, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$Data_Enum_lessThan, $bottom2) {
  $__body = function($i__prime__) use (&$Data_Enum_eq, &$Data_Maybe_Just, $succ1, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$Data_Enum_lessThan, $bottom2) {
    $go = (function() use (&$Data_Enum_eq, &$Data_Maybe_Just, $succ1, &$go, &$Data_Enum_sub, &$Data_Maybe_Nothing) {
  $__fn = function($i, $x = null) use (&$Data_Enum_eq, &$Data_Maybe_Just, $succ1, &$go, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($i, $x) use (&$Data_Enum_eq, &$Data_Maybe_Just, $succ1, &$go, &$Data_Enum_sub, &$Data_Maybe_Nothing) {
while (true) {
$__case_0 = ($Data_Enum_eq)($i, 0);
if (($__case_0 === true)) {
return ($Data_Maybe_Just)($x);
} else {
;
};
if (true) {
$v = ($succ1)($x);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
$__tco_tmp_0 = ($Data_Enum_sub)($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue;
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return $Data_Maybe_Nothing;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($i, $x);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__case_0 = ($Data_Enum_lessThan)($i__prime__, 0);
    if (($__case_0 === true)) {
return $Data_Maybe_Nothing;
} else {
;
};
    if (true) {
return ($go)($i__prime__, $bottom2);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($i__prime__) use (&$Data_Enum_eq, &$Data_Maybe_Just, $succ1, &$Data_Enum_sub, &$Data_Maybe_Nothing, &$Data_Enum_lessThan, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($i__prime__);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($i__prime__);
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

// Data_Enum_defaultSucc
$Data_Enum_defaultSucc = (function() use (&$Data_Enum_add) {
  $__fn = function($toEnum__prime__, $fromEnum__prime__ = null, $a = null) use (&$Data_Enum_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($toEnum__prime__)(($Data_Enum_add)(($fromEnum__prime__)($a), 1));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_defaultPred
$Data_Enum_defaultPred = (function() use (&$Data_Enum_sub) {
  $__fn = function($toEnum__prime__, $fromEnum__prime__ = null, $a = null) use (&$Data_Enum_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($toEnum__prime__)(($Data_Enum_sub)(($fromEnum__prime__)($a), 1));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_defaultFromEnum
$Data_Enum_defaultFromEnum = (function() use (&$Data_Enum_pred, &$Data_Enum_add) {
  $__fn = function($dictEnum) use (&$Data_Enum_pred, &$Data_Enum_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pred1 = ($Data_Enum_pred)($dictEnum);
$go = (function() use ($pred1, &$go, &$Data_Enum_add) {
  $__fn = function($i, $x = null) use ($pred1, &$go, &$Data_Enum_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($i, $x) use ($pred1, &$go, &$Data_Enum_add) {
while (true) {
$v = ($pred1)($x);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
$__tco_tmp_0 = ($Data_Enum_add)($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue;
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return $i;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($i, $x);
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

// Data_Enum_defaultCardinality
$Data_Enum_defaultCardinality = (function() use (&$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_add, &$Data_Enum_Cardinality) {
  $__fn = function($dictBounded) use (&$Data_Bounded_bottom, &$Data_Enum_succ, &$Data_Enum_add, &$Data_Enum_Cardinality, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bottom2 = ($Data_Bounded_bottom)($dictBounded);
    $__res = (function() use (&$Data_Enum_succ, &$Data_Enum_add, &$Data_Enum_Cardinality, $bottom2) {
  $__fn = function($dictEnum) use (&$Data_Enum_succ, &$Data_Enum_add, &$Data_Enum_Cardinality, $bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$succ1 = ($Data_Enum_succ)($dictEnum);
$go = (function() use ($succ1, &$go, &$Data_Enum_add) {
  $__fn = function($i, $x = null) use ($succ1, &$go, &$Data_Enum_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($i, $x) use ($succ1, &$go, &$Data_Enum_add) {
while (true) {
$v = ($succ1)($x);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
$__tco_tmp_0 = ($Data_Enum_add)($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue;
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return $i;
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($i, $x);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($Data_Enum_Cardinality)(($go)(1, $bottom2));
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

// Data_Enum_charToEnum
$Data_Enum_charToEnum = (function() use (&$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
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
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, $__body, &$__fn) {
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

// Data_Enum_enumChar
$Data_Enum_enumChar = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => ($Data_Enum_defaultSucc)($Data_Enum_charToEnum, $Data_Enum_toCharCode), "pred" => ($Data_Enum_defaultPred)($Data_Enum_charToEnum, $Data_Enum_toCharCode), "Ord0" => (function() use (&$Data_Ord_ordChar) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordChar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordChar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_cardinality
$Data_Enum_cardinality = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->cardinality;
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

// Data_Enum_boundedEnumUnit
$Data_Enum_boundedEnumUnit = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(1), "toEnum" => (function() use (&$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return ($Data_Maybe_Just)($Data_Unit_unit);
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
  $__fn = function($v) use (&$Data_Maybe_Just, &$Data_Unit_unit, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "fromEnum" => ($Data_Function_const)(0), "Bounded0" => (function() use (&$Data_Bounded_boundedUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Bounded_boundedUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bounded_boundedUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Enum_enumUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Enum_enumUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Enum_enumUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_boundedEnumOrdering
$Data_Enum_boundedEnumOrdering = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(3), "toEnum" => (function() use (&$Data_Maybe_Just, &$Data_Ordering_LT, &$Data_Ordering_EQ, &$Data_Ordering_GT, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Ordering_LT, &$Data_Ordering_EQ, &$Data_Ordering_GT, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return ($Data_Maybe_Just)($Data_Ordering_LT);
} else {
;
};
    if (($__case_0 === 1)) {
return ($Data_Maybe_Just)($Data_Ordering_EQ);
} else {
;
};
    if (($__case_0 === 2)) {
return ($Data_Maybe_Just)($Data_Ordering_GT);
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
  $__fn = function($v) use (&$Data_Maybe_Just, &$Data_Ordering_LT, &$Data_Ordering_EQ, &$Data_Ordering_GT, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return 0;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return 1;
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return 2;
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
})(), "Bounded0" => (function() use (&$Data_Bounded_boundedOrdering) {
  $__fn = function($__dollar____unused) use (&$Data_Bounded_boundedOrdering, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bounded_boundedOrdering;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Enum_enumOrdering) {
  $__fn = function($__dollar____unused) use (&$Data_Enum_enumOrdering, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Enum_enumOrdering;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_boundedEnumChar
$Data_Enum_boundedEnumChar = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(($Data_Enum_sub)(($Data_Enum_toCharCode)($Data_Enum_top1), ($Data_Enum_toCharCode)($Data_Enum_bottom1))), "toEnum" => $Data_Enum_charToEnum, "fromEnum" => $Data_Enum_toCharCode, "Bounded0" => (function() use (&$Data_Bounded_boundedChar) {
  $__fn = function($__dollar____unused) use (&$Data_Bounded_boundedChar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bounded_boundedChar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Enum_enumChar) {
  $__fn = function($__dollar____unused) use (&$Data_Enum_enumChar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Enum_enumChar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_boundedEnumBoolean
$Data_Enum_boundedEnumBoolean = ($Data_Enum_BoundedEnum__dollar__Dict)((object)["cardinality" => ($Data_Enum_Cardinality)(2), "toEnum" => (function() use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return ($Data_Maybe_Just)(false);
} else {
;
};
    if (($__case_0 === 1)) {
return ($Data_Maybe_Just)(true);
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === false)) {
return 0;
} else {
;
};
    if (($__case_0 === true)) {
return 1;
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
})(), "Bounded0" => (function() use (&$Data_Bounded_boundedBoolean) {
  $__fn = function($__dollar____unused) use (&$Data_Bounded_boundedBoolean, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Bounded_boundedBoolean;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Enum1" => (function() use (&$Data_Enum_enumBoolean) {
  $__fn = function($__dollar____unused) use (&$Data_Enum_enumBoolean, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Enum_enumBoolean;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

