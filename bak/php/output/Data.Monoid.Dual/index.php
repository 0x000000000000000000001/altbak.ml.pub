<?php

namespace Data\Monoid\Dual;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Dual_append
$Data_Monoid_Dual_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Monoid_Dual_Dual
$Data_Monoid_Dual_Dual = (function() {
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

// Data_Monoid_Dual_showDual
$Data_Monoid_Dual_showDual = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Dual_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Dual_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Monoid_Dual_append, $show) {
  $__body = function($v) use (&$Data_Monoid_Dual_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Monoid_Dual_append)("(Dual ", ($Data_Monoid_Dual_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Monoid_Dual_append, $show, $__body, &$__fn) {
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

// Data_Monoid_Dual_semigroupDual
$Data_Monoid_Dual_semigroupDual = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Dual_Dual) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Dual_Dual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Monoid_Dual_Dual, $append1) {
  $__body = function($v, $v1) use (&$Data_Monoid_Dual_Dual, $append1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Monoid_Dual_Dual)(($append1)($y, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Dual_Dual, $append1, $__body, &$__fn) {
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

// Data_Monoid_Dual_ordDual
$Data_Monoid_Dual_ordDual = (function() {
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

// Data_Monoid_Dual_monoidDual
$Data_Monoid_Dual_monoidDual = (function() use (&$Data_Monoid_Dual_semigroupDual, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Dual_Dual, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_Dual_semigroupDual, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Dual_Dual, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupDual1 = ($Data_Monoid_Dual_semigroupDual)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Monoid_Dual_Dual)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupDual1) {
  $__fn = function($__dollar____unused) use ($semigroupDual1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupDual1;
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

// Data_Monoid_Dual_functorDual
$Data_Monoid_Dual_functorDual = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Monoid_Dual_Dual) {
  $__body = function($f, $m) use (&$Data_Monoid_Dual_Dual) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return ($Data_Monoid_Dual_Dual)(($f)($v));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Monoid_Dual_Dual, $__body, &$__fn) {
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

// Data_Monoid_Dual_eqDual
$Data_Monoid_Dual_eqDual = (function() {
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

// Data_Monoid_Dual_eq1Dual
$Data_Monoid_Dual_eq1Dual = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Monoid_Dual_eqDual) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Monoid_Dual_eqDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Monoid_Dual_eqDual)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Dual_ord1Dual
$Data_Monoid_Dual_ord1Dual = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Monoid_Dual_ordDual) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Monoid_Dual_ordDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Monoid_Dual_ordDual)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Monoid_Dual_eq1Dual) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Dual_eq1Dual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Dual_eq1Dual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Dual_boundedDual
$Data_Monoid_Dual_boundedDual = (function() {
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

// Data_Monoid_Dual_applyDual
$Data_Monoid_Dual_applyDual = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Monoid_Dual_Dual) {
  $__body = function($v, $v1) use (&$Data_Monoid_Dual_Dual) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Monoid_Dual_Dual)(($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Dual_Dual, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Dual_functorDual) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Dual_functorDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Dual_functorDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Dual_bindDual
$Data_Monoid_Dual_bindDual = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() {
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
})(), "Apply0" => (function() use (&$Data_Monoid_Dual_applyDual) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Dual_applyDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Dual_applyDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Dual_applicativeDual
$Data_Monoid_Dual_applicativeDual = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Data_Monoid_Dual_Dual, "Apply0" => (function() use (&$Data_Monoid_Dual_applyDual) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Dual_applyDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Dual_applyDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Dual_monadDual
$Data_Monoid_Dual_monadDual = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Monoid_Dual_applicativeDual) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Dual_applicativeDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Dual_applicativeDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Monoid_Dual_bindDual) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Dual_bindDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Dual_bindDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

