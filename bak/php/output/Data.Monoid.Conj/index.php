<?php

namespace Data\Monoid\Conj;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Conj_append
$Data_Monoid_Conj_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Monoid_Conj_Conj
$Data_Monoid_Conj_Conj = (function() {
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

// Data_Monoid_Conj_showConj
$Data_Monoid_Conj_showConj = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Conj_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Conj_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Monoid_Conj_append, $show) {
  $__body = function($v) use (&$Data_Monoid_Conj_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Monoid_Conj_append)("(Conj ", ($Data_Monoid_Conj_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Monoid_Conj_append, $show, $__body, &$__fn) {
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

// Data_Monoid_Conj_semiringConj
$Data_Monoid_Conj_semiringConj = (function() use (&$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Monoid_Conj_Conj, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_ff) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_Semiring_Semiring__dollar__Dict, &$Data_Monoid_Conj_Conj, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_ff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$conj = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
$disj = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
    $__res = ($Data_Semiring_Semiring__dollar__Dict)((object)["zero" => ($Data_Monoid_Conj_Conj)(($Data_HeytingAlgebra_tt)($dictHeytingAlgebra)), "one" => ($Data_Monoid_Conj_Conj)(($Data_HeytingAlgebra_ff)($dictHeytingAlgebra)), "add" => (function() use (&$Data_Monoid_Conj_Conj, $conj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Conj_Conj, $conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Conj_Conj)(($conj)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Conj_Conj, $conj, $__body, &$__fn) {
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
})(), "mul" => (function() use (&$Data_Monoid_Conj_Conj, $disj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Conj_Conj, $disj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Conj_Conj)(($disj)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Conj_Conj, $disj, $__body, &$__fn) {
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

// Data_Monoid_Conj_semigroupConj
$Data_Monoid_Conj_semigroupConj = (function() use (&$Data_HeytingAlgebra_conj, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Conj_Conj) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_conj, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$conj = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Monoid_Conj_Conj, $conj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Conj_Conj, $conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Conj_Conj)(($conj)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Conj_Conj, $conj, $__body, &$__fn) {
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

// Data_Monoid_Conj_ordConj
$Data_Monoid_Conj_ordConj = (function() {
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

// Data_Monoid_Conj_monoidConj
$Data_Monoid_Conj_monoidConj = (function() use (&$Data_Monoid_Conj_semigroupConj, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Conj_Conj, &$Data_HeytingAlgebra_tt) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_Monoid_Conj_semigroupConj, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Conj_Conj, &$Data_HeytingAlgebra_tt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupConj1 = ($Data_Monoid_Conj_semigroupConj)($dictHeytingAlgebra);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Monoid_Conj_Conj)(($Data_HeytingAlgebra_tt)($dictHeytingAlgebra)), "Semigroup0" => (function() use ($semigroupConj1) {
  $__fn = function($__dollar____unused) use ($semigroupConj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupConj1;
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

// Data_Monoid_Conj_functorConj
$Data_Monoid_Conj_functorConj = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Monoid_Conj_Conj) {
  $__body = function($f, $m) use (&$Data_Monoid_Conj_Conj) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return ($Data_Monoid_Conj_Conj)(($f)($v));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Monoid_Conj_Conj, $__body, &$__fn) {
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

// Data_Monoid_Conj_eqConj
$Data_Monoid_Conj_eqConj = (function() {
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

// Data_Monoid_Conj_eq1Conj
$Data_Monoid_Conj_eq1Conj = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Monoid_Conj_eqConj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Monoid_Conj_eqConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Monoid_Conj_eqConj)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Conj_ord1Conj
$Data_Monoid_Conj_ord1Conj = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Monoid_Conj_ordConj) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Monoid_Conj_ordConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Monoid_Conj_ordConj)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Monoid_Conj_eq1Conj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Conj_eq1Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Conj_eq1Conj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Conj_boundedConj
$Data_Monoid_Conj_boundedConj = (function() {
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

// Data_Monoid_Conj_applyConj
$Data_Monoid_Conj_applyConj = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Monoid_Conj_Conj) {
  $__body = function($v, $v1) use (&$Data_Monoid_Conj_Conj) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Monoid_Conj_Conj)(($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Conj_Conj, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Conj_functorConj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Conj_functorConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Conj_functorConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Conj_bindConj
$Data_Monoid_Conj_bindConj = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() {
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
})(), "Apply0" => (function() use (&$Data_Monoid_Conj_applyConj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Conj_applyConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Conj_applyConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Conj_applicativeConj
$Data_Monoid_Conj_applicativeConj = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Data_Monoid_Conj_Conj, "Apply0" => (function() use (&$Data_Monoid_Conj_applyConj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Conj_applyConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Conj_applyConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Conj_monadConj
$Data_Monoid_Conj_monadConj = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Monoid_Conj_applicativeConj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Conj_applicativeConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Conj_applicativeConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Monoid_Conj_bindConj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Conj_bindConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Conj_bindConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

