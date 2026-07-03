<?php

namespace Data\Divide;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Divide/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Op/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Predicate/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Divide_conj
$Data_Divide_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Divide_append
$Data_Divide_append = ($Data_Semigroup_append)($Data_Ordering_semigroupOrdering);

// Data_Divide_identity
$Data_Divide_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Divide_Divide$Dict
$Data_Divide_Divide__dollar__Dict = (function() {
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

// Data_Divide_dividePredicate
$Data_Divide_dividePredicate = ($Data_Divide_Divide__dollar__Dict)((object)["divide" => (function() use (&$Data_Predicate_Predicate, &$Data_Divide_conj) {
  $__body = function($f, $v, $v1) use (&$Data_Predicate_Predicate, &$Data_Divide_conj) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Predicate_Predicate)((function() use ($f1, &$Data_Divide_conj, $g, $h) {
  $__body = function($a) use ($f1, &$Data_Divide_conj, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Tuple")) {
$b = ($__case_0)->values[0];
$c = ($__case_0)->values[1];
return ($Data_Divide_conj)(($g)($b), ($h)($c));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($f1, &$Data_Divide_conj, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($a);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($a);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Predicate_Predicate, &$Data_Divide_conj, $__body, &$__fn) {
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
})(), "Contravariant0" => (function() use (&$Data_Predicate_contravariantPredicate) {
  $__fn = function($__dollar____unused) use (&$Data_Predicate_contravariantPredicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Predicate_contravariantPredicate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Divide_divideOp
$Data_Divide_divideOp = (function() use (&$Data_Semigroup_append, &$Data_Divide_Divide__dollar__Dict, &$Data_Op_Op, &$Data_Op_contravariantOp) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Divide_Divide__dollar__Dict, &$Data_Op_Op, &$Data_Op_contravariantOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Divide_Divide__dollar__Dict)((object)["divide" => (function() use (&$Data_Op_Op, $append1) {
  $__body = function($f, $v, $v1) use (&$Data_Op_Op, $append1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Op_Op)((function() use ($f1, $append1, $g, $h) {
  $__body = function($a) use ($f1, $append1, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Tuple")) {
$b = ($__case_0)->values[0];
$c = ($__case_0)->values[1];
return ($append1)(($g)($b), ($h)($c));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($f1, $append1, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($a);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($a);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Op_Op, $append1, $__body, &$__fn) {
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
})(), "Contravariant0" => (function() use (&$Data_Op_contravariantOp) {
  $__fn = function($__dollar____unused) use (&$Data_Op_contravariantOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Op_contravariantOp;
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

// Data_Divide_divideEquivalence
$Data_Divide_divideEquivalence = ($Data_Divide_Divide__dollar__Dict)((object)["divide" => (function() use (&$Data_Equivalence_Equivalence, &$Data_Divide_conj) {
  $__body = function($f, $v, $v1) use (&$Data_Equivalence_Equivalence, &$Data_Divide_conj) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Equivalence_Equivalence)((function() use ($f1, &$Data_Divide_conj, $g, $h) {
  $__body = function($a, $b) use ($f1, &$Data_Divide_conj, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Tuple")) {
$a__prime__ = ($__case_0)->values[0];
$a__prime____prime__ = ($__case_0)->values[1];
$v3 = ($f1)($b);
$__case_0 = $v3;
if ((($__case_0)->tag === "Tuple")) {
$b__prime__ = ($__case_0)->values[0];
$b__prime____prime__ = ($__case_0)->values[1];
return ($Data_Divide_conj)(($g)($a__prime__, $b__prime__), ($h)($a__prime____prime__, $b__prime____prime__));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null) use ($f1, &$Data_Divide_conj, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $b);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $b);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Equivalence_Equivalence, &$Data_Divide_conj, $__body, &$__fn) {
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
})(), "Contravariant0" => (function() use (&$Data_Equivalence_contravariantEquivalence) {
  $__fn = function($__dollar____unused) use (&$Data_Equivalence_contravariantEquivalence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Equivalence_contravariantEquivalence;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Divide_divideComparison
$Data_Divide_divideComparison = ($Data_Divide_Divide__dollar__Dict)((object)["divide" => (function() use (&$Data_Comparison_Comparison, &$Data_Divide_append) {
  $__body = function($f, $v, $v1) use (&$Data_Comparison_Comparison, &$Data_Divide_append) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Comparison_Comparison)((function() use ($f1, &$Data_Divide_append, $g, $h) {
  $__body = function($a, $b) use ($f1, &$Data_Divide_append, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Tuple")) {
$a__prime__ = ($__case_0)->values[0];
$a__prime____prime__ = ($__case_0)->values[1];
$v3 = ($f1)($b);
$__case_0 = $v3;
if ((($__case_0)->tag === "Tuple")) {
$b__prime__ = ($__case_0)->values[0];
$b__prime____prime__ = ($__case_0)->values[1];
return ($Data_Divide_append)(($g)($a__prime__, $b__prime__), ($h)($a__prime____prime__, $b__prime____prime__));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null) use ($f1, &$Data_Divide_append, $g, $h, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $b);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $b);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Comparison_Comparison, &$Data_Divide_append, $__body, &$__fn) {
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
})(), "Contravariant0" => (function() use (&$Data_Comparison_contravariantComparison) {
  $__fn = function($__dollar____unused) use (&$Data_Comparison_contravariantComparison, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Comparison_contravariantComparison;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Divide_divide
$Data_Divide_divide = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->divide;
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

// Data_Divide_divided
$Data_Divide_divided = (function() use (&$Data_Divide_divide, &$Data_Divide_identity) {
  $__fn = function($dictDivide) use (&$Data_Divide_divide, &$Data_Divide_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Divide_divide)($dictDivide, $Data_Divide_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

