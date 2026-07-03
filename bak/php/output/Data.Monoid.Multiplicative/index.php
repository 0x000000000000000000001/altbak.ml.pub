<?php

namespace Data\Monoid\Multiplicative;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Multiplicative_append
$Data_Monoid_Multiplicative_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Monoid_Multiplicative_Multiplicative
$Data_Monoid_Multiplicative_Multiplicative = (function() {
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

// Data_Monoid_Multiplicative_showMultiplicative
$Data_Monoid_Multiplicative_showMultiplicative = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Multiplicative_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Multiplicative_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Monoid_Multiplicative_append, $show) {
  $__body = function($v) use (&$Data_Monoid_Multiplicative_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Monoid_Multiplicative_append)("(Multiplicative ", ($Data_Monoid_Multiplicative_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Monoid_Multiplicative_append, $show, $__body, &$__fn) {
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

// Data_Monoid_Multiplicative_semigroupMultiplicative
$Data_Monoid_Multiplicative_semigroupMultiplicative = (function() use (&$Data_Semiring_mul, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Multiplicative_Multiplicative) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_mul, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Multiplicative_Multiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mul = ($Data_Semiring_mul)($dictSemiring);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Monoid_Multiplicative_Multiplicative, $mul) {
  $__body = function($v, $v1) use (&$Data_Monoid_Multiplicative_Multiplicative, $mul) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Multiplicative_Multiplicative)(($mul)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Multiplicative_Multiplicative, $mul, $__body, &$__fn) {
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

// Data_Monoid_Multiplicative_ordMultiplicative
$Data_Monoid_Multiplicative_ordMultiplicative = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictOrd;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Monoid_Multiplicative_monoidMultiplicative
$Data_Monoid_Multiplicative_monoidMultiplicative = (function() use (&$Data_Monoid_Multiplicative_semigroupMultiplicative, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Multiplicative_Multiplicative, &$Data_Semiring_one) {
  $__fn = function($dictSemiring) use (&$Data_Monoid_Multiplicative_semigroupMultiplicative, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Multiplicative_Multiplicative, &$Data_Semiring_one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupMultiplicative1 = ($Data_Monoid_Multiplicative_semigroupMultiplicative)($dictSemiring);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Monoid_Multiplicative_Multiplicative)(($Data_Semiring_one)($dictSemiring)), "Semigroup0" => (function() use ($semigroupMultiplicative1) {
  $__fn = function($__dollar____unused) use ($semigroupMultiplicative1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupMultiplicative1;
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

// Data_Monoid_Multiplicative_functorMultiplicative
$Data_Monoid_Multiplicative_functorMultiplicative = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Monoid_Multiplicative_Multiplicative) {
  $__body = function($f, $m) use (&$Data_Monoid_Multiplicative_Multiplicative) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return ($Data_Monoid_Multiplicative_Multiplicative)(($f)($v));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Monoid_Multiplicative_Multiplicative, $__body, &$__fn) {
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

// Data_Monoid_Multiplicative_eqMultiplicative
$Data_Monoid_Multiplicative_eqMultiplicative = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictEq;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Monoid_Multiplicative_eq1Multiplicative
$Data_Monoid_Multiplicative_eq1Multiplicative = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Monoid_Multiplicative_eqMultiplicative) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Monoid_Multiplicative_eqMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Monoid_Multiplicative_eqMultiplicative)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Multiplicative_ord1Multiplicative
$Data_Monoid_Multiplicative_ord1Multiplicative = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Monoid_Multiplicative_ordMultiplicative) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Monoid_Multiplicative_ordMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Monoid_Multiplicative_ordMultiplicative)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Monoid_Multiplicative_eq1Multiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_eq1Multiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_eq1Multiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Multiplicative_boundedMultiplicative
$Data_Monoid_Multiplicative_boundedMultiplicative = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictBounded;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Monoid_Multiplicative_applyMultiplicative
$Data_Monoid_Multiplicative_applyMultiplicative = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Monoid_Multiplicative_Multiplicative) {
  $__body = function($v, $v1) use (&$Data_Monoid_Multiplicative_Multiplicative) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Monoid_Multiplicative_Multiplicative)(($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Multiplicative_Multiplicative, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Multiplicative_functorMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_functorMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_functorMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Multiplicative_bindMultiplicative
$Data_Monoid_Multiplicative_bindMultiplicative = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() {
  $__body = function($v, $f) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $f = null) use ($__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Data_Monoid_Multiplicative_applyMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_applyMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_applyMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Multiplicative_applicativeMultiplicative
$Data_Monoid_Multiplicative_applicativeMultiplicative = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Data_Monoid_Multiplicative_Multiplicative, "Apply0" => (function() use (&$Data_Monoid_Multiplicative_applyMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_applyMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_applyMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Multiplicative_monadMultiplicative
$Data_Monoid_Multiplicative_monadMultiplicative = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Monoid_Multiplicative_applicativeMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_applicativeMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_applicativeMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Monoid_Multiplicative_bindMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_bindMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_bindMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

