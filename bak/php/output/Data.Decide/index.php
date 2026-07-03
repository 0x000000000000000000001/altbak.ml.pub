<?php

namespace Data\Decide;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Decide/index.php';
require_once __DIR__ . '/../Data.Divide/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Op/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Predicate/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Decide_compose
$Data_Decide_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Decide_identity
$Data_Decide_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Decide_Decide$Dict
$Data_Decide_Decide__dollar__Dict = (function() {
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

// Data_Decide_choosePredicate
$Data_Decide_choosePredicate = ($Data_Decide_Decide__dollar__Dict)((object)["choose" => (function() use (&$Data_Predicate_Predicate, &$Data_Decide_compose, &$Data_Either_either) {
  $__body = function($f, $v, $v1) use (&$Data_Predicate_Predicate, &$Data_Decide_compose, &$Data_Either_either) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Predicate_Predicate)(($Data_Decide_compose)(($Data_Either_either)($g, $h), $f1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Predicate_Predicate, &$Data_Decide_compose, &$Data_Either_either, $__body, &$__fn) {
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
})(), "Divide0" => (function() use (&$Data_Divide_dividePredicate) {
  $__fn = function($__dollar____unused) use (&$Data_Divide_dividePredicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divide_dividePredicate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Decide_chooseOp
$Data_Decide_chooseOp = (function() use (&$Data_Divide_divideOp, &$Data_Decide_Decide__dollar__Dict, &$Data_Op_Op, &$Data_Decide_compose, &$Data_Either_either) {
  $__fn = function($dictSemigroup) use (&$Data_Divide_divideOp, &$Data_Decide_Decide__dollar__Dict, &$Data_Op_Op, &$Data_Decide_compose, &$Data_Either_either, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$divideOp = ($Data_Divide_divideOp)($dictSemigroup);
    $__res = ($Data_Decide_Decide__dollar__Dict)((object)["choose" => (function() use (&$Data_Op_Op, &$Data_Decide_compose, &$Data_Either_either) {
  $__body = function($f, $v, $v1) use (&$Data_Op_Op, &$Data_Decide_compose, &$Data_Either_either) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Op_Op)(($Data_Decide_compose)(($Data_Either_either)($g, $h), $f1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Op_Op, &$Data_Decide_compose, &$Data_Either_either, $__body, &$__fn) {
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
})(), "Divide0" => (function() use ($divideOp) {
  $__fn = function($__dollar____unused) use ($divideOp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $divideOp;
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

// Data_Decide_chooseEquivalence
$Data_Decide_chooseEquivalence = ($Data_Decide_Decide__dollar__Dict)((object)["choose" => (function() use (&$Data_Equivalence_Equivalence) {
  $__body = function($f, $v, $v1) use (&$Data_Equivalence_Equivalence) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Equivalence_Equivalence)((function() use ($f1, $g, $h) {
  $__body = function($a, $b) use ($f1, $g, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Left")) {
$c = ($__case_0)->values[0];
$v3 = ($f1)($b);
$__case_0 = $v3;
if ((($__case_0)->tag === "Left")) {
$d = ($__case_0)->values[0];
return ($g)($c, $d);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
return false;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$c = ($__case_0)->values[0];
$v3 = ($f1)($b);
$__case_0 = $v3;
if ((($__case_0)->tag === "Left")) {
return false;
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$d = ($__case_0)->values[0];
return ($h)($c, $d);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null) use ($f1, $g, $h, $__body, &$__fn) {
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
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Equivalence_Equivalence, $__body, &$__fn) {
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
})(), "Divide0" => (function() use (&$Data_Divide_divideEquivalence) {
  $__fn = function($__dollar____unused) use (&$Data_Divide_divideEquivalence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divide_divideEquivalence;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Decide_chooseComparison
$Data_Decide_chooseComparison = ($Data_Decide_Decide__dollar__Dict)((object)["choose" => (function() use (&$Data_Comparison_Comparison, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($f, $v, $v1) use (&$Data_Comparison_Comparison, &$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
$h = $__case_2;
return ($Data_Comparison_Comparison)((function() use ($f1, $g, &$Data_Ordering_LT, &$Data_Ordering_GT, $h) {
  $__body = function($a, $b) use ($f1, $g, &$Data_Ordering_LT, &$Data_Ordering_GT, $h) {
    $v2 = ($f1)($a);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Left")) {
$c = ($__case_0)->values[0];
$v3 = ($f1)($b);
$__case_0 = $v3;
if ((($__case_0)->tag === "Left")) {
$d = ($__case_0)->values[0];
return ($g)($c, $d);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
return $Data_Ordering_LT;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$c = ($__case_0)->values[0];
$v3 = ($f1)($b);
$__case_0 = $v3;
if ((($__case_0)->tag === "Left")) {
return $Data_Ordering_GT;
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$d = ($__case_0)->values[0];
return ($h)($c, $d);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null) use ($f1, $g, &$Data_Ordering_LT, &$Data_Ordering_GT, $h, $__body, &$__fn) {
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
  $__fn = function($f, $v = null, $v1 = null) use (&$Data_Comparison_Comparison, &$Data_Ordering_LT, &$Data_Ordering_GT, $__body, &$__fn) {
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
})(), "Divide0" => (function() use (&$Data_Divide_divideComparison) {
  $__fn = function($__dollar____unused) use (&$Data_Divide_divideComparison, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Divide_divideComparison;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Decide_choose
$Data_Decide_choose = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->choose;
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

// Data_Decide_chosen
$Data_Decide_chosen = (function() use (&$Data_Decide_choose, &$Data_Decide_identity) {
  $__fn = function($dictDecide) use (&$Data_Decide_choose, &$Data_Decide_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Decide_choose)($dictDecide, $Data_Decide_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

