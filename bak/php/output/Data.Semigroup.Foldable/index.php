<?php

namespace Data\Semigroup\Foldable;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord.Max/index.php';
require_once __DIR__ . '/../Data.Ord.Min/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Semigroup_Foldable_eq
$Data_Semigroup_Foldable_eq = ($Data_Eq_eq)($Data_Ordering_eqOrdering);

// Data_Semigroup_Foldable_composeFlipped
$Data_Semigroup_Foldable_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Semigroup_Foldable_compose
$Data_Semigroup_Foldable_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Semigroup_Foldable_alaF
$Data_Semigroup_Foldable_alaF = ($Data_Newtype_alaF)($Prim_undefined, $Prim_undefined, $Prim_undefined, $Prim_undefined);

// Data_Semigroup_Foldable_identity
$Data_Semigroup_Foldable_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Semigroup_Foldable_ala
$Data_Semigroup_Foldable_ala = ($Data_Newtype_ala)($Prim_undefined, $Prim_undefined, $Prim_undefined);

// Data_Semigroup_Foldable_JoinWith
$Data_Semigroup_Foldable_JoinWith = (function() {
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

// Data_Semigroup_Foldable_Foldable1$Dict
$Data_Semigroup_Foldable_Foldable1__dollar__Dict = (function() {
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

// Data_Semigroup_Foldable_FoldRight1
$Data_Semigroup_Foldable_FoldRight1 = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "FoldRight1", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_Act
$Data_Semigroup_Foldable_Act = (function() {
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

// Data_Semigroup_Foldable_semigroupJoinWith
$Data_Semigroup_Foldable_semigroupJoinWith = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_Foldable_JoinWith) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_Foldable_JoinWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Semigroup_Foldable_JoinWith, $append) {
  $__body = function($v, $v1) use (&$Data_Semigroup_Foldable_JoinWith, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Semigroup_Foldable_JoinWith)((function() use ($append, $a, $b) {
  $__fn = function($j) use ($append, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($a)($j), ($append)($j, ($b)($j)));
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
  $__fn = function($v, $v1 = null) use (&$Data_Semigroup_Foldable_JoinWith, $append, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_semigroupAct
$Data_Semigroup_Foldable_semigroupAct = (function() use (&$Control_Apply_applySecond, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_Foldable_Act) {
  $__fn = function($dictApply) use (&$Control_Apply_applySecond, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applySecond = ($Control_Apply_applySecond)($dictApply);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Semigroup_Foldable_Act, $applySecond) {
  $__body = function($v, $v1) use (&$Data_Semigroup_Foldable_Act, $applySecond) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Semigroup_Foldable_Act)(($applySecond)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Semigroup_Foldable_Act, $applySecond, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_runFoldRight1
$Data_Semigroup_Foldable_runFoldRight1 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "FoldRight1")) {
$f = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
return ($f)($a);
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

// Data_Semigroup_Foldable_mkFoldRight1
$Data_Semigroup_Foldable_mkFoldRight1 = ($Data_Semigroup_Foldable_FoldRight1)($Data_Function_const);

// Data_Semigroup_Foldable_joinee
$Data_Semigroup_Foldable_joinee = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
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

// Data_Semigroup_Foldable_getAct
$Data_Semigroup_Foldable_getAct = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return $f;
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

// Data_Semigroup_Foldable_foldr1
$Data_Semigroup_Foldable_foldr1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldr1;
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

// Data_Semigroup_Foldable_foldl1
$Data_Semigroup_Foldable_foldl1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldl1;
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

// Data_Semigroup_Foldable_maximumBy
$Data_Semigroup_Foldable_maximumBy = (function() use (&$Data_Semigroup_Foldable_foldl1, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_GT) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldl1, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl11 = ($Data_Semigroup_Foldable_foldl1)($dictFoldable1);
    $__res = (function() use ($foldl11, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_GT) {
  $__fn = function($cmp) use ($foldl11, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldl11)((function() use (&$Data_Semigroup_Foldable_eq, $cmp, &$Data_Ordering_GT) {
  $__body = function($x, $y) use (&$Data_Semigroup_Foldable_eq, $cmp, &$Data_Ordering_GT) {
    $__case_0 = ($Data_Semigroup_Foldable_eq)(($cmp)($x, $y), $Data_Ordering_GT);
    if (($__case_0 === true)) {
return $x;
} else {
;
};
    if (true) {
return $y;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Semigroup_Foldable_eq, $cmp, &$Data_Ordering_GT, $__body, &$__fn) {
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

// Data_Semigroup_Foldable_minimumBy
$Data_Semigroup_Foldable_minimumBy = (function() use (&$Data_Semigroup_Foldable_foldl1, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_LT) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldl1, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_LT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl11 = ($Data_Semigroup_Foldable_foldl1)($dictFoldable1);
    $__res = (function() use ($foldl11, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_LT) {
  $__fn = function($cmp) use ($foldl11, &$Data_Semigroup_Foldable_eq, &$Data_Ordering_LT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldl11)((function() use (&$Data_Semigroup_Foldable_eq, $cmp, &$Data_Ordering_LT) {
  $__body = function($x, $y) use (&$Data_Semigroup_Foldable_eq, $cmp, &$Data_Ordering_LT) {
    $__case_0 = ($Data_Semigroup_Foldable_eq)(($cmp)($x, $y), $Data_Ordering_LT);
    if (($__case_0 === true)) {
return $x;
} else {
;
};
    if (true) {
return $y;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Semigroup_Foldable_eq, $cmp, &$Data_Ordering_LT, $__body, &$__fn) {
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

// Data_Semigroup_Foldable_foldableTuple
$Data_Semigroup_Foldable_foldableTuple = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[1];
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictSemigroup, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictSemigroup, $f, $v);
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Tuple")) {
$x = ($__case_1)->values[1];
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Tuple")) {
$x = ($__case_1)->values[1];
return $x;
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldableMultiplicative
$Data_Semigroup_Foldable_foldableMultiplicative = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictSemigroup, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictSemigroup, $f, $v);
  };
  return $__fn;
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldableIdentity
$Data_Semigroup_Foldable_foldableIdentity = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictSemigroup, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictSemigroup, $f, $v);
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldableDual
$Data_Semigroup_Foldable_foldableDual = ($Data_Semigroup_Foldable_Foldable1__dollar__Dict)((object)["foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictSemigroup, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictSemigroup, $f, $v);
  };
  return $__fn;
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableDual) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldRight1Semigroup
$Data_Semigroup_Foldable_foldRight1Semigroup = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Semigroup_Foldable_FoldRight1) {
  $__body = function($v, $v1) use (&$Data_Semigroup_Foldable_FoldRight1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "FoldRight1") && (($__case_1)->tag === "FoldRight1"))) {
$lf = ($__case_0)->values[0];
$lr = ($__case_0)->values[1];
$rf = ($__case_1)->values[0];
$rr = ($__case_1)->values[1];
return ($Data_Semigroup_Foldable_FoldRight1)((function() use ($lf, $lr, $rf) {
  $__fn = function($a, $f = null) use ($lf, $lr, $rf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lf)(($f)($lr, ($rf)($a, $f)), $f);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $rr);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Semigroup_Foldable_FoldRight1, $__body, &$__fn) {
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
})()]);

// Data_Semigroup_Foldable_semigroupDual
$Data_Semigroup_Foldable_semigroupDual = ($Data_Monoid_Dual_semigroupDual)($Data_Semigroup_Foldable_foldRight1Semigroup);

// Data_Semigroup_Foldable_foldMap1DefaultR
$Data_Semigroup_Foldable_foldMap1DefaultR = (function() use (&$Data_Semigroup_Foldable_foldr1, &$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldr1, &$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr11 = ($Data_Semigroup_Foldable_foldr1)($dictFoldable1);
    $__res = (function() use (&$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $foldr11) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $foldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $map, $foldr11) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $map, $foldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use (&$Data_Semigroup_Foldable_composeFlipped, $map, $foldr11, $append) {
  $__fn = function($f) use (&$Data_Semigroup_Foldable_composeFlipped, $map, $foldr11, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_composeFlipped)(($map)($f), ($foldr11)($append));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_foldMap1DefaultL
$Data_Semigroup_Foldable_foldMap1DefaultL = (function() use (&$Data_Semigroup_Foldable_foldl1, &$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldl1, &$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl11 = ($Data_Semigroup_Foldable_foldl1)($dictFoldable1);
    $__res = (function() use (&$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $foldl11) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $map, $foldl11) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use (&$Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, $append) {
  $__fn = function($f) use (&$Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_composeFlipped)(($map)($f), ($foldl11)($append));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_foldMap1
$Data_Semigroup_Foldable_foldMap1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMap1;
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

// Data_Semigroup_Foldable_foldl1Default
$Data_Semigroup_Foldable_foldl1Default = (function() use (&$Data_Semigroup_Foldable_compose, &$Data_Function_flip, &$Data_Semigroup_Foldable_runFoldRight1, &$Data_Semigroup_Foldable_alaF, &$Data_Monoid_Dual_Dual, &$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_semigroupDual, &$Data_Semigroup_Foldable_mkFoldRight1) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_compose, &$Data_Function_flip, &$Data_Semigroup_Foldable_runFoldRight1, &$Data_Semigroup_Foldable_alaF, &$Data_Monoid_Dual_Dual, &$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_semigroupDual, &$Data_Semigroup_Foldable_mkFoldRight1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_compose)(($Data_Function_flip)(($Data_Semigroup_Foldable_compose)($Data_Semigroup_Foldable_runFoldRight1, ($Data_Semigroup_Foldable_alaF)($Data_Monoid_Dual_Dual, ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1, $Data_Semigroup_Foldable_semigroupDual), $Data_Semigroup_Foldable_mkFoldRight1))), $Data_Function_flip);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_foldr1Default
$Data_Semigroup_Foldable_foldr1Default = (function() use (&$Data_Function_flip, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_runFoldRight1, &$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_foldRight1Semigroup, &$Data_Semigroup_Foldable_mkFoldRight1) {
  $__fn = function($dictFoldable1) use (&$Data_Function_flip, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_runFoldRight1, &$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_foldRight1Semigroup, &$Data_Semigroup_Foldable_mkFoldRight1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)(($Data_Semigroup_Foldable_compose)($Data_Semigroup_Foldable_runFoldRight1, ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1, $Data_Semigroup_Foldable_foldRight1Semigroup, $Data_Semigroup_Foldable_mkFoldRight1)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_intercalateMap
$Data_Semigroup_Foldable_intercalateMap = (function() use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_semigroupJoinWith, &$Data_Semigroup_Foldable_joinee, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_JoinWith, &$Data_Function_const) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_semigroupJoinWith, &$Data_Semigroup_Foldable_joinee, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_JoinWith, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap11 = ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1);
    $__res = (function() use ($foldMap11, &$Data_Semigroup_Foldable_semigroupJoinWith, &$Data_Semigroup_Foldable_joinee, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_JoinWith, &$Data_Function_const) {
  $__fn = function($dictSemigroup) use ($foldMap11, &$Data_Semigroup_Foldable_semigroupJoinWith, &$Data_Semigroup_Foldable_joinee, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_JoinWith, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap12 = ($foldMap11)(($Data_Semigroup_Foldable_semigroupJoinWith)($dictSemigroup));
    $__res = (function() use (&$Data_Semigroup_Foldable_joinee, $foldMap12, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_JoinWith, &$Data_Function_const) {
  $__fn = function($j, $f = null, $foldable = null) use (&$Data_Semigroup_Foldable_joinee, $foldMap12, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_JoinWith, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_joinee)(($foldMap12)(($Data_Semigroup_Foldable_compose)($Data_Semigroup_Foldable_JoinWith, ($Data_Semigroup_Foldable_compose)($Data_Function_const, $f)), $foldable), $j);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_intercalate
$Data_Semigroup_Foldable_intercalate = (function() use (&$Data_Semigroup_Foldable_intercalateMap, &$Data_Function_flip, &$Data_Semigroup_Foldable_identity) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_intercalateMap, &$Data_Function_flip, &$Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$intercalateMap1 = ($Data_Semigroup_Foldable_intercalateMap)($dictFoldable1);
    $__res = (function() use (&$Data_Function_flip, $intercalateMap1, &$Data_Semigroup_Foldable_identity) {
  $__fn = function($dictSemigroup) use (&$Data_Function_flip, $intercalateMap1, &$Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)(($intercalateMap1)($dictSemigroup), $Data_Semigroup_Foldable_identity);
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

// Data_Semigroup_Foldable_maximum
$Data_Semigroup_Foldable_maximum = (function() use (&$Data_Ord_Max_semigroupMax, &$Data_Semigroup_Foldable_ala, &$Data_Ord_Max_Max, &$Data_Semigroup_Foldable_foldMap1) {
  $__fn = function($dictOrd) use (&$Data_Ord_Max_semigroupMax, &$Data_Semigroup_Foldable_ala, &$Data_Ord_Max_Max, &$Data_Semigroup_Foldable_foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupMax = ($Data_Ord_Max_semigroupMax)($dictOrd);
    $__res = (function() use (&$Data_Semigroup_Foldable_ala, &$Data_Ord_Max_Max, &$Data_Semigroup_Foldable_foldMap1, $semigroupMax) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_ala, &$Data_Ord_Max_Max, &$Data_Semigroup_Foldable_foldMap1, $semigroupMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_ala)($Data_Ord_Max_Max, ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1, $semigroupMax));
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

// Data_Semigroup_Foldable_minimum
$Data_Semigroup_Foldable_minimum = (function() use (&$Data_Ord_Min_semigroupMin, &$Data_Semigroup_Foldable_ala, &$Data_Ord_Min_Min, &$Data_Semigroup_Foldable_foldMap1) {
  $__fn = function($dictOrd) use (&$Data_Ord_Min_semigroupMin, &$Data_Semigroup_Foldable_ala, &$Data_Ord_Min_Min, &$Data_Semigroup_Foldable_foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupMin = ($Data_Ord_Min_semigroupMin)($dictOrd);
    $__res = (function() use (&$Data_Semigroup_Foldable_ala, &$Data_Ord_Min_Min, &$Data_Semigroup_Foldable_foldMap1, $semigroupMin) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_ala, &$Data_Ord_Min_Min, &$Data_Semigroup_Foldable_foldMap1, $semigroupMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Foldable_ala)($Data_Ord_Min_Min, ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1, $semigroupMin));
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

// Data_Semigroup_Foldable_traverse1_
$Data_Semigroup_Foldable_traverse1_ = (function() use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Functor_voidRight, &$Prim_undefined, &$Data_Semigroup_Foldable_semigroupAct, &$Data_Unit_unit, &$Data_Semigroup_Foldable_getAct, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_Act) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Functor_voidRight, &$Prim_undefined, &$Data_Semigroup_Foldable_semigroupAct, &$Data_Unit_unit, &$Data_Semigroup_Foldable_getAct, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap11 = ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1);
    $__res = (function() use (&$Data_Functor_voidRight, &$Prim_undefined, $foldMap11, &$Data_Semigroup_Foldable_semigroupAct, &$Data_Unit_unit, &$Data_Semigroup_Foldable_getAct, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_Act) {
  $__fn = function($dictApply) use (&$Data_Functor_voidRight, &$Prim_undefined, $foldMap11, &$Data_Semigroup_Foldable_semigroupAct, &$Data_Unit_unit, &$Data_Semigroup_Foldable_getAct, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$voidRight = ($Data_Functor_voidRight)((($dictApply)->Functor0)($Prim_undefined));
$foldMap12 = ($foldMap11)(($Data_Semigroup_Foldable_semigroupAct)($dictApply));
    $__res = (function() use ($voidRight, &$Data_Unit_unit, &$Data_Semigroup_Foldable_getAct, $foldMap12, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_Act) {
  $__fn = function($f, $t = null) use ($voidRight, &$Data_Unit_unit, &$Data_Semigroup_Foldable_getAct, $foldMap12, &$Data_Semigroup_Foldable_compose, &$Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($voidRight)($Data_Unit_unit, ($Data_Semigroup_Foldable_getAct)(($foldMap12)(($Data_Semigroup_Foldable_compose)($Data_Semigroup_Foldable_Act, $f), $t)));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_for1_
$Data_Semigroup_Foldable_for1_ = (function() use (&$Data_Semigroup_Foldable_traverse1_, &$Data_Function_flip) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_traverse1_, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse1_1 = ($Data_Semigroup_Foldable_traverse1_)($dictFoldable1);
    $__res = (function() use (&$Data_Function_flip, $traverse1_1) {
  $__fn = function($dictApply) use (&$Data_Function_flip, $traverse1_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)(($traverse1_1)($dictApply));
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

// Data_Semigroup_Foldable_sequence1_
$Data_Semigroup_Foldable_sequence1_ = (function() use (&$Data_Semigroup_Foldable_traverse1_, &$Data_Semigroup_Foldable_identity) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_traverse1_, &$Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse1_1 = ($Data_Semigroup_Foldable_traverse1_)($dictFoldable1);
    $__res = (function() use ($traverse1_1, &$Data_Semigroup_Foldable_identity) {
  $__fn = function($dictApply) use ($traverse1_1, &$Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse1_1)($dictApply, $Data_Semigroup_Foldable_identity);
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

// Data_Semigroup_Foldable_fold1
$Data_Semigroup_Foldable_fold1 = (function() use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_identity) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap11 = ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1);
    $__res = (function() use ($foldMap11, &$Data_Semigroup_Foldable_identity) {
  $__fn = function($dictSemigroup) use ($foldMap11, &$Data_Semigroup_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap11)($dictSemigroup, $Data_Semigroup_Foldable_identity);
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

