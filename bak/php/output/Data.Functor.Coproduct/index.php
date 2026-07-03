<?php

namespace Data\Functor\Coproduct;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Coproduct_append
$Data_Functor_Coproduct_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Functor_Coproduct_bimap
$Data_Functor_Coproduct_bimap = ($Data_Bifunctor_bimap)($Data_Bifunctor_bifunctorEither);

// Data_Functor_Coproduct_compose
$Data_Functor_Coproduct_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Coproduct_Coproduct
$Data_Functor_Coproduct_Coproduct = (function() {
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

// Data_Functor_Coproduct_showCoproduct
$Data_Functor_Coproduct_showCoproduct = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Coproduct_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Coproduct_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Coproduct_append, $show) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Coproduct_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Functor_Coproduct_append, $show, $show1) {
  $__body = function($v) use (&$Data_Functor_Coproduct_append, $show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$fa = ($__case_0)->values[0];
return ($Data_Functor_Coproduct_append)("(left ", ($Data_Functor_Coproduct_append)(($show)($fa), ")"));
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$ga = ($__case_0)->values[0];
return ($Data_Functor_Coproduct_append)("(right ", ($Data_Functor_Coproduct_append)(($show1)($ga), ")"));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Coproduct_append, $show, $show1, $__body, &$__fn) {
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

// Data_Functor_Coproduct_right
$Data_Functor_Coproduct_right = (function() use (&$Data_Functor_Coproduct_Coproduct, &$Data_Either_Right) {
  $__fn = function($ga) use (&$Data_Functor_Coproduct_Coproduct, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_Coproduct)(($Data_Either_Right)($ga));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_newtypeCoproduct
$Data_Functor_Coproduct_newtypeCoproduct = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Functor_Coproduct_left
$Data_Functor_Coproduct_left = (function() use (&$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left) {
  $__fn = function($fa) use (&$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_Coproduct)(($Data_Either_Left)($fa));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_functorCoproduct
$Data_Functor_Coproduct_functorCoproduct = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap, $map) {
  $__fn = function($dictFunctor1) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor1);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap, $map, $map1) {
  $__body = function($f, $v) use (&$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($Data_Functor_Coproduct_Coproduct)(($Data_Functor_Coproduct_bimap)(($map)($f1), ($map1)($f1), $e));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap, $map, $map1, $__body, &$__fn) {
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

// Data_Functor_Coproduct_eq1Coproduct
$Data_Functor_Coproduct_eq1Coproduct = (function() use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq1)($dictEq1);
    $__res = (function() use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict, $eq1) {
  $__fn = function($dictEq11) use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq11 = ($Data_Eq_eq1)($dictEq11);
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use ($eq1, $eq11) {
  $__fn = function($dictEq) use ($eq1, $eq11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq12 = ($eq1)($dictEq);
$eq13 = ($eq11)($dictEq);
    $__res = (function() use ($eq12, $eq13) {
  $__body = function($v, $v1) use ($eq12, $eq13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($eq12)($fa, $ga);
} else {
;
};
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($eq13)($fa, $ga);
} else {
;
};
if (true) {
return false;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($eq12, $eq13, $__body, &$__fn) {
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
})();
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

// Data_Functor_Coproduct_eqCoproduct
$Data_Functor_Coproduct_eqCoproduct = (function() use (&$Data_Functor_Coproduct_eq1Coproduct, &$Data_Eq_eq1, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq1) use (&$Data_Functor_Coproduct_eq1Coproduct, &$Data_Eq_eq1, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1Coproduct1 = ($Data_Functor_Coproduct_eq1Coproduct)($dictEq1);
    $__res = (function() use (&$Data_Eq_eq1, $eq1Coproduct1, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq11) use (&$Data_Eq_eq1, $eq1Coproduct1, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq1)(($eq1Coproduct1)($dictEq11));
    $__res = (function() use (&$Data_Eq_Eq__dollar__Dict, $eq1) {
  $__fn = function($dictEq) use (&$Data_Eq_Eq__dollar__Dict, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => ($eq1)($dictEq)]);
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

// Data_Functor_Coproduct_ord1Coproduct
$Data_Functor_Coproduct_ord1Coproduct = (function() use (&$Data_Ord_compare1, &$Data_Functor_Coproduct_eq1Coproduct, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare1, &$Data_Functor_Coproduct_eq1Coproduct, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare1)($dictOrd1);
$eq1Coproduct1 = ($Data_Functor_Coproduct_eq1Coproduct)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare1, $eq1Coproduct1, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, $compare1, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd11) use (&$Data_Ord_compare1, $eq1Coproduct1, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, $compare1, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare11 = ($Data_Ord_compare1)($dictOrd11);
$eq1Coproduct2 = ($eq1Coproduct1)((($dictOrd11)->Eq10)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use ($compare1, $compare11, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use ($compare1, $compare11, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare12 = ($compare1)($dictOrd);
$compare13 = ($compare11)($dictOrd);
    $__res = (function() use ($compare12, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare13) {
  $__body = function($v, $v1) use ($compare12, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($compare12)($fa, $ga);
} else {
;
};
if ((($__case_0)->tag === "Left")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_1)->tag === "Left")) {
return $Data_Ordering_GT;
} else {
;
};
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($compare13)($fa, $ga);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($compare12, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare13, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Coproduct2) {
  $__fn = function($__dollar____unused) use ($eq1Coproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1Coproduct2;
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

// Data_Functor_Coproduct_ordCoproduct
$Data_Functor_Coproduct_ordCoproduct = (function() use (&$Data_Functor_Coproduct_ord1Coproduct, &$Data_Functor_Coproduct_eqCoproduct, &$Prim_undefined, &$Data_Ord_compare1, &$Data_Ord_Ord__dollar__Dict) {
  $__fn = function($dictOrd1) use (&$Data_Functor_Coproduct_ord1Coproduct, &$Data_Functor_Coproduct_eqCoproduct, &$Prim_undefined, &$Data_Ord_compare1, &$Data_Ord_Ord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ord1Coproduct1 = ($Data_Functor_Coproduct_ord1Coproduct)($dictOrd1);
$eqCoproduct1 = ($Data_Functor_Coproduct_eqCoproduct)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare1, $ord1Coproduct1, $eqCoproduct1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict) {
  $__fn = function($dictOrd11) use (&$Data_Ord_compare1, $ord1Coproduct1, $eqCoproduct1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare1)(($ord1Coproduct1)($dictOrd11));
$eqCoproduct2 = ($eqCoproduct1)((($dictOrd11)->Eq10)($Prim_undefined));
    $__res = (function() use ($eqCoproduct2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare1) {
  $__fn = function($dictOrd) use ($eqCoproduct2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqCoproduct3 = ($eqCoproduct2)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($compare1)($dictOrd), "Eq0" => (function() use ($eqCoproduct3) {
  $__fn = function($__dollar____unused) use ($eqCoproduct3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqCoproduct3;
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_coproduct
$Data_Functor_Coproduct_coproduct = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$f = $__case_0;
$a = ($__case_2)->values[0];
return ($f)($a);
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$g = $__case_1;
$b = ($__case_2)->values[0];
return ($g)($b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_extendCoproduct
$Data_Functor_Coproduct_extendCoproduct = (function() use (&$Control_Extend_extend, &$Data_Functor_Coproduct_functorCoproduct, &$Prim_undefined, &$Control_Extend_Extend__dollar__Dict, &$Data_Functor_Coproduct_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_coproduct, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictExtend) use (&$Control_Extend_extend, &$Data_Functor_Coproduct_functorCoproduct, &$Prim_undefined, &$Control_Extend_Extend__dollar__Dict, &$Data_Functor_Coproduct_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_coproduct, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extend = ($Control_Extend_extend)($dictExtend);
$functorCoproduct1 = ($Data_Functor_Coproduct_functorCoproduct)((($dictExtend)->Functor0)($Prim_undefined));
    $__res = (function() use (&$Control_Extend_extend, $functorCoproduct1, &$Prim_undefined, &$Control_Extend_Extend__dollar__Dict, &$Data_Functor_Coproduct_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_coproduct, &$Data_Either_Left, $extend, &$Data_Either_Right) {
  $__fn = function($dictExtend1) use (&$Control_Extend_extend, $functorCoproduct1, &$Prim_undefined, &$Control_Extend_Extend__dollar__Dict, &$Data_Functor_Coproduct_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_coproduct, &$Data_Either_Left, $extend, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extend1 = ($Control_Extend_extend)($dictExtend1);
$functorCoproduct2 = ($functorCoproduct1)((($dictExtend1)->Functor0)($Prim_undefined));
    $__res = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Data_Functor_Coproduct_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_coproduct, &$Data_Either_Left, $extend, &$Data_Either_Right, $extend1) {
  $__fn = function($f) use (&$Data_Functor_Coproduct_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_coproduct, &$Data_Either_Left, $extend, &$Data_Either_Right, $extend1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_compose)($Data_Functor_Coproduct_Coproduct, ($Data_Functor_Coproduct_coproduct)(($Data_Functor_Coproduct_compose)($Data_Either_Left, ($extend)(($Data_Functor_Coproduct_compose)($f, ($Data_Functor_Coproduct_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Left)))), ($Data_Functor_Coproduct_compose)($Data_Either_Right, ($extend1)(($Data_Functor_Coproduct_compose)($f, ($Data_Functor_Coproduct_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Right))))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct2) {
  $__fn = function($__dollar____unused) use ($functorCoproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorCoproduct2;
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

// Data_Functor_Coproduct_comonadCoproduct
$Data_Functor_Coproduct_comonadCoproduct = (function() use (&$Control_Comonad_extract, &$Data_Functor_Coproduct_extendCoproduct, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, &$Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictComonad) use (&$Control_Comonad_extract, &$Data_Functor_Coproduct_extendCoproduct, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, &$Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extract = ($Control_Comonad_extract)($dictComonad);
$extendCoproduct1 = ($Data_Functor_Coproduct_extendCoproduct)((($dictComonad)->Extend0)($Prim_undefined));
    $__res = (function() use ($extendCoproduct1, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, &$Data_Functor_Coproduct_coproduct, $extract, &$Control_Comonad_extract) {
  $__fn = function($dictComonad1) use ($extendCoproduct1, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, &$Data_Functor_Coproduct_coproduct, $extract, &$Control_Comonad_extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extendCoproduct2 = ($extendCoproduct1)((($dictComonad1)->Extend0)($Prim_undefined));
    $__res = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => ($Data_Functor_Coproduct_coproduct)($extract, ($Control_Comonad_extract)($dictComonad1)), "Extend0" => (function() use ($extendCoproduct2) {
  $__fn = function($__dollar____unused) use ($extendCoproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $extendCoproduct2;
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

// Data_Functor_Coproduct_bihoistCoproduct
$Data_Functor_Coproduct_bihoistCoproduct = (function() use (&$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap) {
  $__body = function($natF, $natG, $v) use (&$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap) {
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
return ($Data_Functor_Coproduct_Coproduct)(($Data_Functor_Coproduct_bimap)($natF1, $natG1, $e));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($natF, $natG = null, $v = null) use (&$Data_Functor_Coproduct_Coproduct, &$Data_Functor_Coproduct_bimap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($natF, $natG, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($natF, $natG, $v);
  };
  return $__fn;
})();

