<?php

namespace Data\Const;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Const_append
$Data_Const_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Const_Const
$Data_Const_Const = (function() {
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

// Data_Const_showConst
$Data_Const_showConst = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Const_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Const_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Const_append, $show) {
  $__body = function($v) use (&$Data_Const_append, $show) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Const_append)("(Const ", ($Data_Const_append)(($show)($x), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Const_append, $show, $__body, &$__fn) {
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

// Data_Const_semiringConst
$Data_Const_semiringConst = (function() {
  $__fn = function($dictSemiring) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictSemiring;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_semigroupoidConst
$Data_Const_semigroupoidConst = ($Control_Semigroupoid_Semigroupoid__dollar__Dict)((object)["compose" => (function() use (&$Data_Const_Const) {
  $__body = function($v, $v1) use (&$Data_Const_Const) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($Data_Const_Const)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Const_Const, $__body, &$__fn) {
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

// Data_Const_semigroupConst
$Data_Const_semigroupConst = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictSemigroup;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_ringConst
$Data_Const_ringConst = (function() {
  $__fn = function($dictRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictRing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_ordConst
$Data_Const_ordConst = (function() {
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

// Data_Const_newtypeConst
$Data_Const_newtypeConst = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Const_monoidConst
$Data_Const_monoidConst = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictMonoid;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_heytingAlgebraConst
$Data_Const_heytingAlgebraConst = (function() {
  $__fn = function($dictHeytingAlgebra) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictHeytingAlgebra;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_functorConst
$Data_Const_functorConst = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Const_Const) {
  $__body = function($f, $m) use (&$Data_Const_Const) {
    $__case_0 = $m;
    if (true) {
$v = $__case_0;
return ($Data_Const_Const)($v);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Data_Const_Const, $__body, &$__fn) {
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

// Data_Const_invariantConst
$Data_Const_invariantConst = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Const_functorConst)]);

// Data_Const_euclideanRingConst
$Data_Const_euclideanRingConst = (function() {
  $__fn = function($dictEuclideanRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictEuclideanRing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_eqConst
$Data_Const_eqConst = (function() {
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

// Data_Const_eq1Const
$Data_Const_eq1Const = (function() use (&$Data_Eq_eq, &$Data_Const_eqConst, &$Data_Eq_Eq1__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Const_eqConst, &$Data_Eq_Eq1__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)(($Data_Const_eqConst)($dictEq));
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use ($eq) {
  $__fn = function($dictEq1) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq;
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

// Data_Const_ord1Const
$Data_Const_ord1Const = (function() use (&$Data_Ord_compare, &$Data_Const_ordConst, &$Data_Const_eq1Const, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Const_ordConst, &$Data_Const_eq1Const, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)(($Data_Const_ordConst)($dictOrd));
$eq1Const1 = ($Data_Const_eq1Const)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use ($compare) {
  $__fn = function($dictOrd1) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $compare;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Const1) {
  $__fn = function($__dollar____unused) use ($eq1Const1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1Const1;
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

// Data_Const_commutativeRingConst
$Data_Const_commutativeRingConst = (function() {
  $__fn = function($dictCommutativeRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictCommutativeRing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_boundedConst
$Data_Const_boundedConst = (function() {
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

// Data_Const_booleanAlgebraConst
$Data_Const_booleanAlgebraConst = (function() {
  $__fn = function($dictBooleanAlgebra) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictBooleanAlgebra;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Const_applyConst
$Data_Const_applyConst = (function() use (&$Data_Semigroup_append, &$Control_Apply_Apply__dollar__Dict, &$Data_Const_Const, &$Data_Const_functorConst) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Control_Apply_Apply__dollar__Dict, &$Data_Const_Const, &$Data_Const_functorConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Const_Const, $append1) {
  $__body = function($v, $v1) use (&$Data_Const_Const, $append1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Const_Const)(($append1)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Const_Const, $append1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Const_functorConst) {
  $__fn = function($__dollar____unused) use (&$Data_Const_functorConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Const_functorConst;
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

// Data_Const_applicativeConst
$Data_Const_applicativeConst = (function() use (&$Data_Monoid_mempty, &$Data_Const_applyConst, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Const_Const) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Const_applyConst, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Const_Const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$applyConst1 = ($Data_Const_applyConst)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Const_Const, $mempty) {
  $__fn = function($v) use (&$Data_Const_Const, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Const_Const)($mempty);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyConst1) {
  $__fn = function($__dollar____unused) use ($applyConst1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyConst1;
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

