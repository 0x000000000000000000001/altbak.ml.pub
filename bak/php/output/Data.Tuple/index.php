<?php

namespace Data\Tuple;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Tuple_append
$Data_Tuple_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Tuple_conj
$Data_Tuple_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Tuple_Tuple
$Data_Tuple_Tuple = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Tuple", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_uncurry
$Data_Tuple_uncurry = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($f1)($a, $b);
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

// Data_Tuple_swap
$Data_Tuple_swap = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)($b, $a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
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

// Data_Tuple_snd
$Data_Tuple_snd = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$b = ($__case_0)->values[1];
return $b;
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

// Data_Tuple_showTuple
$Data_Tuple_showTuple = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Tuple_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Tuple_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Tuple_append, $show) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Tuple_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Tuple_append, $show, $show1) {
  $__body = function($v) use (&$Data_Tuple_append, $show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Tuple_append)("(Tuple ", ($Data_Tuple_append)(($show)($a), ($Data_Tuple_append)(" ", ($Data_Tuple_append)(($show1)($b), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_append, $show, $show1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_semiringTuple
$Data_Tuple_semiringTuple = (function() use (&$Data_Semiring_add, &$Data_Semiring_one, &$Data_Semiring_mul, &$Data_Semiring_zero, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Tuple_Tuple) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semiring_one, &$Data_Semiring_mul, &$Data_Semiring_zero, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add = ($Data_Semiring_add)($dictSemiring);
$one = ($Data_Semiring_one)($dictSemiring);
$mul = ($Data_Semiring_mul)($dictSemiring);
$zero = ($Data_Semiring_zero)($dictSemiring);
    $__res = (function() use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Tuple_Tuple, $add, $one, &$Data_Semiring_one, $mul, $zero, &$Data_Semiring_zero) {
  $__fn = function($dictSemiring1) use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Tuple_Tuple, $add, $one, &$Data_Semiring_one, $mul, $zero, &$Data_Semiring_zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add1 = ($Data_Semiring_add)($dictSemiring1);
$mul1 = ($Data_Semiring_mul)($dictSemiring1);
    $__res = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => (function() use (&$Data_Tuple_Tuple, $add, $add1) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $add, $add1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($add)($x1, $x2), ($add1)($y1, $y2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $add, $add1, $__body, &$__fn) {
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
})(), "one" => ($Data_Tuple_Tuple)($one, ($Data_Semiring_one)($dictSemiring1)), "mul" => (function() use (&$Data_Tuple_Tuple, $mul, $mul1) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $mul, $mul1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($mul)($x1, $x2), ($mul1)($y1, $y2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $mul, $mul1, $__body, &$__fn) {
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
})(), "zero" => ($Data_Tuple_Tuple)($zero, ($Data_Semiring_zero)($dictSemiring1))]);
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

// Data_Tuple_semigroupoidTuple
$Data_Tuple_semigroupoidTuple = ($Control_Semigroupoid_Semigroupoid__dollar__Dict)((object)["compose" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$c = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
return ($Data_Tuple_Tuple)($a, $c);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
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

// Data_Tuple_semigroupTuple
$Data_Tuple_semigroupTuple = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Tuple_Tuple) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Tuple_Tuple, $append1) {
  $__fn = function($dictSemigroup1) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Tuple_Tuple, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append2 = ($Data_Semigroup_append)($dictSemigroup1);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Tuple_Tuple, $append1, $append2) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $append1, $append2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($append1)($a1, $a2), ($append2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $append1, $append2, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_ringTuple
$Data_Tuple_ringTuple = (function() use (&$Data_Ring_sub, &$Data_Tuple_semiringTuple, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Tuple_Tuple) {
  $__fn = function($dictRing) use (&$Data_Ring_sub, &$Data_Tuple_semiringTuple, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sub = ($Data_Ring_sub)($dictRing);
$semiringTuple1 = ($Data_Tuple_semiringTuple)((($dictRing)->Semiring0)($Prim_undefined));
    $__res = (function() use (&$Data_Ring_sub, $semiringTuple1, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Tuple_Tuple, $sub) {
  $__fn = function($dictRing1) use (&$Data_Ring_sub, $semiringTuple1, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Tuple_Tuple, $sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sub1 = ($Data_Ring_sub)($dictRing1);
$semiringTuple2 = ($semiringTuple1)((($dictRing1)->Semiring0)($Prim_undefined));
    $__res = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => (function() use (&$Data_Tuple_Tuple, $sub, $sub1) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $sub, $sub1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($sub)($x1, $x2), ($sub1)($y1, $y2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $sub, $sub1, $__body, &$__fn) {
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
})(), "Semiring0" => (function() use ($semiringTuple2) {
  $__fn = function($__dollar____unused) use ($semiringTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semiringTuple2;
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

// Data_Tuple_monoidTuple
$Data_Tuple_monoidTuple = (function() use (&$Data_Monoid_mempty, &$Data_Tuple_semigroupTuple, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Tuple_semigroupTuple, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$semigroupTuple1 = ($Data_Tuple_semigroupTuple)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($semigroupTuple1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Tuple_Tuple, $mempty, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid1) use ($semigroupTuple1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Tuple_Tuple, $mempty, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupTuple2 = ($semigroupTuple1)((($dictMonoid1)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Tuple_Tuple)($mempty, ($Data_Monoid_mempty)($dictMonoid1)), "Semigroup0" => (function() use ($semigroupTuple2) {
  $__fn = function($__dollar____unused) use ($semigroupTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupTuple2;
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

// Data_Tuple_heytingAlgebraTuple
$Data_Tuple_heytingAlgebraTuple = (function() use (&$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_Tuple_Tuple) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tt = ($Data_HeytingAlgebra_tt)($dictHeytingAlgebra);
$ff = ($Data_HeytingAlgebra_ff)($dictHeytingAlgebra);
$implies = ($Data_HeytingAlgebra_implies)($dictHeytingAlgebra);
$conj1 = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
$disj = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
$not = ($Data_HeytingAlgebra_not)($dictHeytingAlgebra);
    $__res = (function() use (&$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_Tuple_Tuple, $tt, &$Data_HeytingAlgebra_tt, $ff, &$Data_HeytingAlgebra_ff, $implies, $conj1, $disj, $not) {
  $__fn = function($dictHeytingAlgebra1) use (&$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_Tuple_Tuple, $tt, &$Data_HeytingAlgebra_tt, $ff, &$Data_HeytingAlgebra_ff, $implies, $conj1, $disj, $not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$implies1 = ($Data_HeytingAlgebra_implies)($dictHeytingAlgebra1);
$conj2 = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra1);
$disj1 = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra1);
$not1 = ($Data_HeytingAlgebra_not)($dictHeytingAlgebra1);
    $__res = ($Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict)((object)["tt" => ($Data_Tuple_Tuple)($tt, ($Data_HeytingAlgebra_tt)($dictHeytingAlgebra1)), "ff" => ($Data_Tuple_Tuple)($ff, ($Data_HeytingAlgebra_ff)($dictHeytingAlgebra1)), "implies" => (function() use (&$Data_Tuple_Tuple, $implies, $implies1) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $implies, $implies1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($implies)($x1, $x2), ($implies1)($y1, $y2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $implies, $implies1, $__body, &$__fn) {
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
})(), "conj" => (function() use (&$Data_Tuple_Tuple, $conj1, $conj2) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $conj1, $conj2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($conj1)($x1, $x2), ($conj2)($y1, $y2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $conj1, $conj2, $__body, &$__fn) {
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
})(), "disj" => (function() use (&$Data_Tuple_Tuple, $disj, $disj1) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $disj, $disj1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($disj)($x1, $x2), ($disj1)($y1, $y2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $disj, $disj1, $__body, &$__fn) {
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
})(), "not" => (function() use (&$Data_Tuple_Tuple, $not, $not1) {
  $__body = function($v) use (&$Data_Tuple_Tuple, $not, $not1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)(($not)($x), ($not1)($y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_Tuple, $not, $not1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_genericTuple
$Data_Tuple_genericTuple = ($Data_Generic_Rep_Generic__dollar__Dict)((object)["to" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($x) use (&$Data_Tuple_Tuple) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Product")) {
$arg = ($__case_0)->values[0];
$arg1 = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)($arg, $arg1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "from" => (function() use (&$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_Product, &$Data_Generic_Rep_Argument) {
  $__body = function($x) use (&$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_Product, &$Data_Generic_Rep_Argument) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Tuple")) {
$arg = ($__case_0)->values[0];
$arg1 = ($__case_0)->values[1];
return ($Data_Generic_Rep_Constructor)(($Data_Generic_Rep_Product)(($Data_Generic_Rep_Argument)($arg), ($Data_Generic_Rep_Argument)($arg1)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use (&$Data_Generic_Rep_Constructor, &$Data_Generic_Rep_Product, &$Data_Generic_Rep_Argument, $__body, &$__fn) {
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
})()]);

// Data_Tuple_functorTuple
$Data_Tuple_functorTuple = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($f, $m) use (&$Data_Tuple_Tuple) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Tuple")) {
$v = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)($v, ($f)($v1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $m);
  };
  return $__fn;
})()]);

// Data_Tuple_invariantTuple
$Data_Tuple_invariantTuple = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Tuple_functorTuple)]);

// Data_Tuple_fst
$Data_Tuple_fst = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
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
})();

// Data_Tuple_lazyTuple
$Data_Tuple_lazyTuple = (function() use (&$Control_Lazy_defer, &$Control_Lazy_Lazy__dollar__Dict, &$Data_Tuple_Tuple, &$Data_Tuple_fst, &$Data_Unit_unit, &$Data_Tuple_snd) {
  $__fn = function($dictLazy) use (&$Control_Lazy_defer, &$Control_Lazy_Lazy__dollar__Dict, &$Data_Tuple_Tuple, &$Data_Tuple_fst, &$Data_Unit_unit, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$defer = ($Control_Lazy_defer)($dictLazy);
    $__res = (function() use (&$Control_Lazy_defer, &$Control_Lazy_Lazy__dollar__Dict, &$Data_Tuple_Tuple, $defer, &$Data_Tuple_fst, &$Data_Unit_unit, &$Data_Tuple_snd) {
  $__fn = function($dictLazy1) use (&$Control_Lazy_defer, &$Control_Lazy_Lazy__dollar__Dict, &$Data_Tuple_Tuple, $defer, &$Data_Tuple_fst, &$Data_Unit_unit, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$defer1 = ($Control_Lazy_defer)($dictLazy1);
    $__res = ($Control_Lazy_Lazy__dollar__Dict)((object)["defer" => (function() use (&$Data_Tuple_Tuple, $defer, &$Data_Tuple_fst, &$Data_Unit_unit, $defer1, &$Data_Tuple_snd) {
  $__fn = function($f) use (&$Data_Tuple_Tuple, $defer, &$Data_Tuple_fst, &$Data_Unit_unit, $defer1, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($defer)((function() use (&$Data_Tuple_fst, $f, &$Data_Unit_unit) {
  $__fn = function($v) use (&$Data_Tuple_fst, $f, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_fst)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), ($defer1)((function() use (&$Data_Tuple_snd, $f, &$Data_Unit_unit) {
  $__fn = function($v) use (&$Data_Tuple_snd, $f, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_snd)(($f)($Data_Unit_unit));
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

// Data_Tuple_extendTuple
$Data_Tuple_extendTuple = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($f, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$t = $__case_1;
$a = ($__case_1)->values[0];
return ($Data_Tuple_Tuple)($a, ($f1)($t));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Tuple_functorTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Tuple_functorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Tuple_functorTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Tuple_eqTuple
$Data_Tuple_eqTuple = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Tuple_conj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Tuple_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Tuple_conj, $eq) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Tuple_conj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq1);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Tuple_conj, $eq, $eq1) {
  $__body = function($x, $y) use (&$Data_Tuple_conj, $eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_Tuple_conj)(($eq)($l, $r), ($eq1)($l1, $r1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Tuple_conj, $eq, $eq1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_ordTuple
$Data_Tuple_ordTuple = (function() use (&$Data_Ord_compare, &$Data_Tuple_eqTuple, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Tuple_eqTuple, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$eqTuple1 = ($Data_Tuple_eqTuple)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $eqTuple1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $eqTuple1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare)($dictOrd1);
$eqTuple2 = ($eqTuple1)((($dictOrd1)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
  $__body = function($x, $y) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($compare1)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1, $__body, &$__fn) {
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
})(), "Eq0" => (function() use ($eqTuple2) {
  $__fn = function($__dollar____unused) use ($eqTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqTuple2;
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

// Data_Tuple_eq1Tuple
$Data_Tuple_eq1Tuple = (function() use (&$Data_Tuple_eqTuple, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Tuple_eqTuple, &$Data_Eq_Eq1__dollar__Dict, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqTuple1 = ($Data_Tuple_eqTuple)($dictEq);
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, $eqTuple1) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, $eqTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($eqTuple1)($dictEq1));
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

// Data_Tuple_ord1Tuple
$Data_Tuple_ord1Tuple = (function() use (&$Data_Tuple_ordTuple, &$Data_Tuple_eq1Tuple, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Tuple_ordTuple, &$Data_Tuple_eq1Tuple, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordTuple1 = ($Data_Tuple_ordTuple)($dictOrd);
$eq1Tuple1 = ($Data_Tuple_eq1Tuple)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, $ordTuple1) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $ordTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($ordTuple1)($dictOrd1));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Tuple1) {
  $__fn = function($__dollar____unused) use ($eq1Tuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1Tuple1;
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

// Data_Tuple_curry
$Data_Tuple_curry = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($f, $a = null, $b = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Tuple_Tuple)($a, $b));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_comonadTuple
$Data_Tuple_comonadTuple = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => $Data_Tuple_snd, "Extend0" => (function() use (&$Data_Tuple_extendTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Tuple_extendTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Tuple_extendTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Tuple_commutativeRingTuple
$Data_Tuple_commutativeRingTuple = (function() use (&$Data_Tuple_ringTuple, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict) {
  $__fn = function($dictCommutativeRing) use (&$Data_Tuple_ringTuple, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringTuple1 = ($Data_Tuple_ringTuple)((($dictCommutativeRing)->Ring0)($Prim_undefined));
    $__res = (function() use ($ringTuple1, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict) {
  $__fn = function($dictCommutativeRing1) use ($ringTuple1, &$Prim_undefined, &$Data_CommutativeRing_CommutativeRing__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ringTuple2 = ($ringTuple1)((($dictCommutativeRing1)->Ring0)($Prim_undefined));
    $__res = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use ($ringTuple2) {
  $__fn = function($__dollar____unused) use ($ringTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ringTuple2;
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

// Data_Tuple_boundedTuple
$Data_Tuple_boundedTuple = (function() use (&$Data_Bounded_top, &$Data_Bounded_bottom, &$Data_Tuple_ordTuple, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Tuple_Tuple) {
  $__fn = function($dictBounded) use (&$Data_Bounded_top, &$Data_Bounded_bottom, &$Data_Tuple_ordTuple, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$top = ($Data_Bounded_top)($dictBounded);
$bottom = ($Data_Bounded_bottom)($dictBounded);
$ordTuple1 = ($Data_Tuple_ordTuple)((($dictBounded)->Ord0)($Prim_undefined));
    $__res = (function() use ($ordTuple1, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Tuple_Tuple, $top, &$Data_Bounded_top, $bottom, &$Data_Bounded_bottom) {
  $__fn = function($dictBounded1) use ($ordTuple1, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Tuple_Tuple, $top, &$Data_Bounded_top, $bottom, &$Data_Bounded_bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordTuple2 = ($ordTuple1)((($dictBounded1)->Ord0)($Prim_undefined));
    $__res = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => ($Data_Tuple_Tuple)($top, ($Data_Bounded_top)($dictBounded1)), "bottom" => ($Data_Tuple_Tuple)($bottom, ($Data_Bounded_bottom)($dictBounded1)), "Ord0" => (function() use ($ordTuple2) {
  $__fn = function($__dollar____unused) use ($ordTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordTuple2;
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

// Data_Tuple_booleanAlgebraTuple
$Data_Tuple_booleanAlgebraTuple = (function() use (&$Data_Tuple_heytingAlgebraTuple, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict) {
  $__fn = function($dictBooleanAlgebra) use (&$Data_Tuple_heytingAlgebraTuple, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraTuple1 = ($Data_Tuple_heytingAlgebraTuple)((($dictBooleanAlgebra)->HeytingAlgebra0)($Prim_undefined));
    $__res = (function() use ($heytingAlgebraTuple1, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict) {
  $__fn = function($dictBooleanAlgebra1) use ($heytingAlgebraTuple1, &$Prim_undefined, &$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$heytingAlgebraTuple2 = ($heytingAlgebraTuple1)((($dictBooleanAlgebra1)->HeytingAlgebra0)($Prim_undefined));
    $__res = ($Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict)((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraTuple2) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $heytingAlgebraTuple2;
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

// Data_Tuple_applyTuple
$Data_Tuple_applyTuple = (function() use (&$Data_Semigroup_append, &$Control_Apply_Apply__dollar__Dict, &$Data_Tuple_Tuple, &$Data_Tuple_functorTuple) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Control_Apply_Apply__dollar__Dict, &$Data_Tuple_Tuple, &$Data_Tuple_functorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Tuple_Tuple, $append1) {
  $__body = function($v, $v1) use (&$Data_Tuple_Tuple, $append1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->values[0];
$f = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($append1)($a1, $a2), ($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Tuple_Tuple, $append1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Tuple_functorTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Tuple_functorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Tuple_functorTuple;
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

// Data_Tuple_bindTuple
$Data_Tuple_bindTuple = (function() use (&$Data_Semigroup_append, &$Data_Tuple_applyTuple, &$Control_Bind_Bind__dollar__Dict, &$Data_Tuple_Tuple) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Tuple_applyTuple, &$Control_Bind_Bind__dollar__Dict, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
$applyTuple1 = ($Data_Tuple_applyTuple)($dictSemigroup);
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Tuple_Tuple, $append1) {
  $__body = function($v, $f) use (&$Data_Tuple_Tuple, $append1) {
    $__case_0 = $v;
    $__case_1 = $f;
    if ((($__case_0)->tag === "Tuple")) {
$a1 = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$f1 = $__case_1;
$v1 = ($f1)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Tuple")) {
$a2 = ($__case_0)->values[0];
$c = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)(($append1)($a1, $a2), $c);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $f = null) use (&$Data_Tuple_Tuple, $append1, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyTuple1) {
  $__fn = function($__dollar____unused) use ($applyTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyTuple1;
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

// Data_Tuple_applicativeTuple
$Data_Tuple_applicativeTuple = (function() use (&$Data_Tuple_applyTuple, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Tuple_Tuple, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Tuple_applyTuple, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Tuple_Tuple, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyTuple1 = ($Data_Tuple_applyTuple)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Data_Tuple_Tuple)(($Data_Monoid_mempty)($dictMonoid)), "Apply0" => (function() use ($applyTuple1) {
  $__fn = function($__dollar____unused) use ($applyTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyTuple1;
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

// Data_Tuple_monadTuple
$Data_Tuple_monadTuple = (function() use (&$Data_Tuple_applicativeTuple, &$Data_Tuple_bindTuple, &$Prim_undefined, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Data_Tuple_applicativeTuple, &$Data_Tuple_bindTuple, &$Prim_undefined, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeTuple1 = ($Data_Tuple_applicativeTuple)($dictMonoid);
$bindTuple1 = ($Data_Tuple_bindTuple)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeTuple1) {
  $__fn = function($__dollar____unused) use ($applicativeTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeTuple1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindTuple1) {
  $__fn = function($__dollar____unused) use ($bindTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindTuple1;
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

