<?php

namespace Data\Functor\Product;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Product_append
$Data_Functor_Product_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Functor_Product_bimap
$Data_Functor_Product_bimap = ($Data_Bifunctor_bimap)($Data_Bifunctor_bifunctorTuple);

// Data_Functor_Product_conj
$Data_Functor_Product_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Functor_Product_compose
$Data_Functor_Product_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Product_unwrap
$Data_Functor_Product_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Functor_Product_Product
$Data_Functor_Product_Product = (function() {
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

// Data_Functor_Product_showProduct
$Data_Functor_Product_showProduct = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product_append, $show) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Functor_Product_append, $show, $show1) {
  $__body = function($v) use (&$Data_Functor_Product_append, $show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$fa = ($__case_0)->values[0];
$ga = ($__case_0)->values[1];
return ($Data_Functor_Product_append)("(product ", ($Data_Functor_Product_append)(($show)($fa), ($Data_Functor_Product_append)(" ", ($Data_Functor_Product_append)(($show1)($ga), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Product_append, $show, $show1, $__body, &$__fn) {
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

// Data_Functor_Product_product
$Data_Functor_Product_product = (function() use (&$Data_Functor_Product_Product, &$Data_Tuple_Tuple) {
  $__fn = function($fa, $ga = null) use (&$Data_Functor_Product_Product, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_Product)(($Data_Tuple_Tuple)($fa, $ga));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_newtypeProduct
$Data_Functor_Product_newtypeProduct = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Functor_Product_functorProduct
$Data_Functor_Product_functorProduct = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product_Product, &$Data_Functor_Product_bimap) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product_Product, &$Data_Functor_Product_bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product_Product, &$Data_Functor_Product_bimap, $map) {
  $__fn = function($dictFunctor1) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product_Product, &$Data_Functor_Product_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor1);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Product_Product, &$Data_Functor_Product_bimap, $map, $map1) {
  $__body = function($f, $v) use (&$Data_Functor_Product_Product, &$Data_Functor_Product_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($Data_Functor_Product_Product)(($Data_Functor_Product_bimap)(($map)($f1), ($map1)($f1), $fga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Product_Product, &$Data_Functor_Product_bimap, $map, $map1, $__body, &$__fn) {
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

// Data_Functor_Product_eq1Product
$Data_Functor_Product_eq1Product = (function() use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict, &$Data_Functor_Product_conj) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict, &$Data_Functor_Product_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq1)($dictEq1);
    $__res = (function() use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict, $eq1, &$Data_Functor_Product_conj) {
  $__fn = function($dictEq11) use (&$Data_Eq_eq1, &$Data_Eq_Eq1__dollar__Dict, $eq1, &$Data_Functor_Product_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq11 = ($Data_Eq_eq1)($dictEq11);
    $__res = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use ($eq1, $eq11, &$Data_Functor_Product_conj) {
  $__fn = function($dictEq) use ($eq1, $eq11, &$Data_Functor_Product_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq12 = ($eq1)($dictEq);
$eq13 = ($eq11)($dictEq);
    $__res = (function() use (&$Data_Functor_Product_conj, $eq12, $eq13) {
  $__body = function($v, $v1) use (&$Data_Functor_Product_conj, $eq12, $eq13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->values[0];
$r1 = ($__case_0)->values[1];
$l2 = ($__case_1)->values[0];
$r2 = ($__case_1)->values[1];
return ($Data_Functor_Product_conj)(($eq12)($l1, $l2), ($eq13)($r1, $r2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Product_conj, $eq12, $eq13, $__body, &$__fn) {
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

// Data_Functor_Product_eqProduct
$Data_Functor_Product_eqProduct = (function() use (&$Data_Functor_Product_eq1Product, &$Data_Eq_eq1, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq1) use (&$Data_Functor_Product_eq1Product, &$Data_Eq_eq1, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1Product1 = ($Data_Functor_Product_eq1Product)($dictEq1);
    $__res = (function() use (&$Data_Eq_eq1, $eq1Product1, &$Data_Eq_Eq__dollar__Dict) {
  $__fn = function($dictEq11) use (&$Data_Eq_eq1, $eq1Product1, &$Data_Eq_Eq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq1)(($eq1Product1)($dictEq11));
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

// Data_Functor_Product_ord1Product
$Data_Functor_Product_ord1Product = (function() use (&$Data_Ord_compare1, &$Data_Functor_Product_eq1Product, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare1, &$Data_Functor_Product_eq1Product, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare1)($dictOrd1);
$eq1Product1 = ($Data_Functor_Product_eq1Product)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare1, $eq1Product1, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, $compare1) {
  $__fn = function($dictOrd11) use (&$Data_Ord_compare1, $eq1Product1, &$Prim_undefined, &$Data_Ord_Ord1__dollar__Dict, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare11 = ($Data_Ord_compare1)($dictOrd11);
$eq1Product2 = ($eq1Product1)((($dictOrd11)->Eq10)($Prim_undefined));
    $__res = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use ($compare1, $compare11) {
  $__fn = function($dictOrd) use ($compare1, $compare11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare12 = ($compare1)($dictOrd);
$compare13 = ($compare11)($dictOrd);
    $__res = (function() use ($compare12, $compare13) {
  $__body = function($v, $v1) use ($compare12, $compare13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->values[0];
$r1 = ($__case_0)->values[1];
$l2 = ($__case_1)->values[0];
$r2 = ($__case_1)->values[1];
$v2 = ($compare12)($l1, $l2);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
return ($compare13)($r1, $r2);
} else {
;
};
if (true) {
$o = $__case_0;
return $o;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($compare12, $compare13, $__body, &$__fn) {
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
})(), "Eq10" => (function() use ($eq1Product2) {
  $__fn = function($__dollar____unused) use ($eq1Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eq1Product2;
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

// Data_Functor_Product_ordProduct
$Data_Functor_Product_ordProduct = (function() use (&$Data_Functor_Product_ord1Product, &$Data_Functor_Product_eqProduct, &$Prim_undefined, &$Data_Ord_compare1, &$Data_Ord_Ord__dollar__Dict) {
  $__fn = function($dictOrd1) use (&$Data_Functor_Product_ord1Product, &$Data_Functor_Product_eqProduct, &$Prim_undefined, &$Data_Ord_compare1, &$Data_Ord_Ord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ord1Product1 = ($Data_Functor_Product_ord1Product)($dictOrd1);
$eqProduct1 = ($Data_Functor_Product_eqProduct)((($dictOrd1)->Eq10)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare1, $ord1Product1, $eqProduct1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict) {
  $__fn = function($dictOrd11) use (&$Data_Ord_compare1, $ord1Product1, $eqProduct1, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare1)(($ord1Product1)($dictOrd11));
$eqProduct2 = ($eqProduct1)((($dictOrd11)->Eq10)($Prim_undefined));
    $__res = (function() use ($eqProduct2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare1) {
  $__fn = function($dictOrd) use ($eqProduct2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqProduct3 = ($eqProduct2)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($compare1)($dictOrd), "Eq0" => (function() use ($eqProduct3) {
  $__fn = function($__dollar____unused) use ($eqProduct3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqProduct3;
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

// Data_Functor_Product_bihoistProduct
$Data_Functor_Product_bihoistProduct = (function() use (&$Data_Functor_Product_Product, &$Data_Functor_Product_bimap) {
  $__body = function($natF, $natG, $v) use (&$Data_Functor_Product_Product, &$Data_Functor_Product_bimap) {
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
return ($Data_Functor_Product_Product)(($Data_Functor_Product_bimap)($natF1, $natG1, $e));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($natF, $natG = null, $v = null) use (&$Data_Functor_Product_Product, &$Data_Functor_Product_bimap, $__body, &$__fn) {
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

// Data_Functor_Product_applyProduct
$Data_Functor_Product_applyProduct = (function() use (&$Control_Apply_apply, &$Data_Functor_Product_functorProduct, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Product_product) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_Product_functorProduct, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply = ($Control_Apply_apply)($dictApply);
$functorProduct1 = ($Data_Functor_Product_functorProduct)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use (&$Control_Apply_apply, $functorProduct1, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Product_product, $apply) {
  $__fn = function($dictApply1) use (&$Control_Apply_apply, $functorProduct1, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Data_Functor_Product_product, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply1);
$functorProduct2 = ($functorProduct1)((($dictApply1)->Functor0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Functor_Product_product, $apply, $apply1) {
  $__body = function($v, $v1) use (&$Data_Functor_Product_product, $apply, $apply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$f = ($__case_0)->values[0];
$g = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($Data_Functor_Product_product)(($apply)($f, $a), ($apply1)($g, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Product_product, $apply, $apply1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorProduct2) {
  $__fn = function($__dollar____unused) use ($functorProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorProduct2;
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

// Data_Functor_Product_bindProduct
$Data_Functor_Product_bindProduct = (function() use (&$Control_Bind_bind, &$Data_Functor_Product_applyProduct, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Functor_Product_product, &$Data_Functor_Product_compose, &$Data_Tuple_fst, &$Data_Functor_Product_unwrap, &$Data_Tuple_snd) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Data_Functor_Product_applyProduct, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Functor_Product_product, &$Data_Functor_Product_compose, &$Data_Tuple_fst, &$Data_Functor_Product_unwrap, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
$applyProduct1 = ($Data_Functor_Product_applyProduct)((($dictBind)->Apply0)($Prim_undefined));
    $__res = (function() use (&$Control_Bind_bind, $applyProduct1, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Functor_Product_product, $bind, &$Data_Functor_Product_compose, &$Data_Tuple_fst, &$Data_Functor_Product_unwrap, &$Data_Tuple_snd) {
  $__fn = function($dictBind1) use (&$Control_Bind_bind, $applyProduct1, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Data_Functor_Product_product, $bind, &$Data_Functor_Product_compose, &$Data_Tuple_fst, &$Data_Functor_Product_unwrap, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind1 = ($Control_Bind_bind)($dictBind1);
$applyProduct2 = ($applyProduct1)((($dictBind1)->Apply0)($Prim_undefined));
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Functor_Product_product, $bind, &$Data_Functor_Product_compose, &$Data_Tuple_fst, &$Data_Functor_Product_unwrap, $bind1, &$Data_Tuple_snd) {
  $__body = function($v, $f) use (&$Data_Functor_Product_product, $bind, &$Data_Functor_Product_compose, &$Data_Tuple_fst, &$Data_Functor_Product_unwrap, $bind1, &$Data_Tuple_snd) {
    $__case_0 = $v;
    $__case_1 = $f;
    if ((($__case_0)->tag === "Tuple")) {
$fa = ($__case_0)->values[0];
$ga = ($__case_0)->values[1];
$f1 = $__case_1;
return ($Data_Functor_Product_product)(($bind)($fa, ($Data_Functor_Product_compose)($Data_Tuple_fst, ($Data_Functor_Product_compose)($Data_Functor_Product_unwrap, $f1))), ($bind1)($ga, ($Data_Functor_Product_compose)($Data_Tuple_snd, ($Data_Functor_Product_compose)($Data_Functor_Product_unwrap, $f1))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $f = null) use (&$Data_Functor_Product_product, $bind, &$Data_Functor_Product_compose, &$Data_Tuple_fst, &$Data_Functor_Product_unwrap, $bind1, &$Data_Tuple_snd, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyProduct2) {
  $__fn = function($__dollar____unused) use ($applyProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyProduct2;
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

// Data_Functor_Product_applicativeProduct
$Data_Functor_Product_applicativeProduct = (function() use (&$Control_Applicative_pure, &$Data_Functor_Product_applyProduct, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Product_product) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_Product_applyProduct, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$applyProduct1 = ($Data_Functor_Product_applyProduct)((($dictApplicative)->Apply0)($Prim_undefined));
    $__res = (function() use (&$Control_Applicative_pure, $applyProduct1, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Product_product, $pure) {
  $__fn = function($dictApplicative1) use (&$Control_Applicative_pure, $applyProduct1, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Data_Functor_Product_product, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)($dictApplicative1);
$applyProduct2 = ($applyProduct1)((($dictApplicative1)->Apply0)($Prim_undefined));
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Functor_Product_product, $pure, $pure1) {
  $__fn = function($a) use (&$Data_Functor_Product_product, $pure, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)(($pure)($a), ($pure1)($a));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyProduct2) {
  $__fn = function($__dollar____unused) use ($applyProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyProduct2;
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

// Data_Functor_Product_monadProduct
$Data_Functor_Product_monadProduct = (function() use (&$Data_Functor_Product_applicativeProduct, &$Prim_undefined, &$Data_Functor_Product_bindProduct, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Data_Functor_Product_applicativeProduct, &$Prim_undefined, &$Data_Functor_Product_bindProduct, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeProduct1 = ($Data_Functor_Product_applicativeProduct)((($dictMonad)->Applicative0)($Prim_undefined));
$bindProduct1 = ($Data_Functor_Product_bindProduct)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = (function() use ($applicativeProduct1, &$Prim_undefined, $bindProduct1, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad1) use ($applicativeProduct1, &$Prim_undefined, $bindProduct1, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeProduct2 = ($applicativeProduct1)((($dictMonad1)->Applicative0)($Prim_undefined));
$bindProduct2 = ($bindProduct1)((($dictMonad1)->Bind1)($Prim_undefined));
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeProduct2) {
  $__fn = function($__dollar____unused) use ($applicativeProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeProduct2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindProduct2) {
  $__fn = function($__dollar____unused) use ($bindProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindProduct2;
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

