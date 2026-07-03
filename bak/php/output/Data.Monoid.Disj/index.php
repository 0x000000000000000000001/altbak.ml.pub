<?php

namespace Data\Monoid\Disj;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Disj_append
$Data_Monoid_Disj_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Monoid_Disj_Disj
$Data_Monoid_Disj_Disj = (function() {
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

// Data_Monoid_Disj_showDisj
$Data_Monoid_Disj_showDisj = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Disj_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Disj_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Monoid_Disj_append, $show) {
  $__body = function($v) use (&$Data_Monoid_Disj_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Monoid_Disj_append)("(Disj ", ($Data_Monoid_Disj_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Monoid_Disj_append, $show, $__body, &$__fn) {
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

// Data_Monoid_Disj_semiringDisj
$Data_Monoid_Disj_semiringDisj = (function() use (&$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_conj, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Monoid_Disj_Disj, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_conj, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Monoid_Disj_Disj, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$disj = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
$conj = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
    $__res = ($Data_Semiring_Semiring__dollar__Dict)((object)["zero" => ($Data_Monoid_Disj_Disj)(($Data_HeytingAlgebra_ff)($dictHeytingAlgebra)), "one" => ($Data_Monoid_Disj_Disj)(($Data_HeytingAlgebra_tt)($dictHeytingAlgebra)), "add" => (function() use (&$Data_Monoid_Disj_Disj, $disj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Disj_Disj, $disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Disj_Disj)(($disj)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Disj_Disj, $disj, $__body, &$__fn) {
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
})(), "mul" => (function() use (&$Data_Monoid_Disj_Disj, $conj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Disj_Disj, $conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Disj_Disj)(($conj)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Disj_Disj, $conj, $__body, &$__fn) {
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

// Data_Monoid_Disj_semigroupDisj
$Data_Monoid_Disj_semigroupDisj = (function() use (&$Data_HeytingAlgebra_disj, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Disj_Disj) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_disj, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$disj = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Monoid_Disj_Disj, $disj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Disj_Disj, $disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Disj_Disj)(($disj)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Disj_Disj, $disj, $__body, &$__fn) {
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

// Data_Monoid_Disj_ordDisj
$Data_Monoid_Disj_ordDisj = (function() {
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

// Data_Monoid_Disj_monoidDisj
$Data_Monoid_Disj_monoidDisj = (function() use (&$Data_Monoid_Disj_semigroupDisj, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Disj_Disj, &$Data_HeytingAlgebra_ff) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_Monoid_Disj_semigroupDisj, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Disj_Disj, &$Data_HeytingAlgebra_ff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupDisj1 = ($Data_Monoid_Disj_semigroupDisj)($dictHeytingAlgebra);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Monoid_Disj_Disj)(($Data_HeytingAlgebra_ff)($dictHeytingAlgebra)), "Semigroup0" => (function() use ($semigroupDisj1) {
  $__fn = function($__dollar____unused) use ($semigroupDisj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupDisj1;
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

// Data_Monoid_Disj_functorDisj
$Data_Monoid_Disj_functorDisj = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Monoid_Disj_Disj) {
  $__body = function($f, $m) use (&$Data_Monoid_Disj_Disj) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return ($Data_Monoid_Disj_Disj)(($f)($v));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Monoid_Disj_Disj, $__body, &$__fn) {
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

// Data_Monoid_Disj_eqDisj
$Data_Monoid_Disj_eqDisj = (function() {
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

// Data_Monoid_Disj_eq1Disj
$Data_Monoid_Disj_eq1Disj = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Monoid_Disj_eqDisj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Monoid_Disj_eqDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Monoid_Disj_eqDisj)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Disj_ord1Disj
$Data_Monoid_Disj_ord1Disj = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Monoid_Disj_ordDisj) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Monoid_Disj_ordDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Monoid_Disj_ordDisj)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Monoid_Disj_eq1Disj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Disj_eq1Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Disj_eq1Disj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Disj_boundedDisj
$Data_Monoid_Disj_boundedDisj = (function() {
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

// Data_Monoid_Disj_applyDisj
$Data_Monoid_Disj_applyDisj = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Monoid_Disj_Disj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Disj_Disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Monoid_Disj_Disj)(($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Disj_Disj, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Disj_functorDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Disj_functorDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Disj_functorDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Disj_bindDisj
$Data_Monoid_Disj_bindDisj = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() {
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
})(), "Apply0" => (function() use (&$Data_Monoid_Disj_applyDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Disj_applyDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Disj_applyDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Disj_applicativeDisj
$Data_Monoid_Disj_applicativeDisj = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Data_Monoid_Disj_Disj, "Apply0" => (function() use (&$Data_Monoid_Disj_applyDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Disj_applyDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Disj_applyDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Disj_monadDisj
$Data_Monoid_Disj_monadDisj = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Monoid_Disj_applicativeDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Disj_applicativeDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Disj_applicativeDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Monoid_Disj_bindDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Disj_bindDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Disj_bindDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

