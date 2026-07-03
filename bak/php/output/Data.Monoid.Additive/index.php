<?php

namespace Data\Monoid\Additive;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Monoid_Additive_append
$Data_Monoid_Additive_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Monoid_Additive_Additive
$Data_Monoid_Additive_Additive = (function() {
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

// Data_Monoid_Additive_showAdditive
$Data_Monoid_Additive_showAdditive = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Additive_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Monoid_Additive_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Monoid_Additive_append, $show) {
  $__body = function($v) use (&$Data_Monoid_Additive_append, $show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Monoid_Additive_append)("(Additive ", ($Data_Monoid_Additive_append)(($show)($a), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Monoid_Additive_append, $show, $__body, &$__fn) {
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

// Data_Monoid_Additive_semigroupAdditive
$Data_Monoid_Additive_semigroupAdditive = (function() use (&$Data_Semiring_add, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Additive_Additive) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Monoid_Additive_Additive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add = ($Data_Semiring_add)($dictSemiring);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Monoid_Additive_Additive, $add) {
  $__body = function($v, $v1) use (&$Data_Monoid_Additive_Additive, $add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($Data_Monoid_Additive_Additive)(($add)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Additive_Additive, $add, $__body, &$__fn) {
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

// Data_Monoid_Additive_ordAdditive
$Data_Monoid_Additive_ordAdditive = (function() {
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

// Data_Monoid_Additive_monoidAdditive
$Data_Monoid_Additive_monoidAdditive = (function() use (&$Data_Monoid_Additive_semigroupAdditive, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Additive_Additive, &$Data_Semiring_zero) {
  $__fn = function($dictSemiring) use (&$Data_Monoid_Additive_semigroupAdditive, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_Additive_Additive, &$Data_Semiring_zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupAdditive1 = ($Data_Monoid_Additive_semigroupAdditive)($dictSemiring);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Data_Monoid_Additive_Additive)(($Data_Semiring_zero)($dictSemiring)), "Semigroup0" => (function() use ($semigroupAdditive1) {
  $__fn = function($__dollar____unused) use ($semigroupAdditive1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupAdditive1;
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

// Data_Monoid_Additive_functorAdditive
$Data_Monoid_Additive_functorAdditive = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Monoid_Additive_Additive) {
  $__body = function($f, $m) use (&$Data_Monoid_Additive_Additive) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return ($Data_Monoid_Additive_Additive)(($f)($v));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Monoid_Additive_Additive, $__body, &$__fn) {
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

// Data_Monoid_Additive_eqAdditive
$Data_Monoid_Additive_eqAdditive = (function() {
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

// Data_Monoid_Additive_eq1Additive
$Data_Monoid_Additive_eq1Additive = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Monoid_Additive_eqAdditive) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Monoid_Additive_eqAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Monoid_Additive_eqAdditive)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Additive_ord1Additive
$Data_Monoid_Additive_ord1Additive = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Monoid_Additive_ordAdditive) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Monoid_Additive_ordAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Monoid_Additive_ordAdditive)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Monoid_Additive_eq1Additive) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Additive_eq1Additive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Additive_eq1Additive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Additive_boundedAdditive
$Data_Monoid_Additive_boundedAdditive = (function() {
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

// Data_Monoid_Additive_applyAdditive
$Data_Monoid_Additive_applyAdditive = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Monoid_Additive_Additive) {
  $__body = function($v, $v1) use (&$Data_Monoid_Additive_Additive) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$x = $__case_1;
return ($Data_Monoid_Additive_Additive)(($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Monoid_Additive_Additive, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Additive_functorAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Additive_functorAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Additive_functorAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Additive_bindAdditive
$Data_Monoid_Additive_bindAdditive = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() {
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
})(), "Apply0" => (function() use (&$Data_Monoid_Additive_applyAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Additive_applyAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Additive_applyAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Additive_applicativeAdditive
$Data_Monoid_Additive_applicativeAdditive = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Data_Monoid_Additive_Additive, "Apply0" => (function() use (&$Data_Monoid_Additive_applyAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Additive_applyAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Additive_applyAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_Additive_monadAdditive
$Data_Monoid_Additive_monadAdditive = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Monoid_Additive_applicativeAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Additive_applicativeAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Additive_applicativeAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Monoid_Additive_bindAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Additive_bindAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Additive_bindAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

