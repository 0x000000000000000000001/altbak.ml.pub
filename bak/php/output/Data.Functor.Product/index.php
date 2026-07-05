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

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Functor_Product_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Product_bimap': $v = (($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple')))->bimap; break;
      case 'Data_Functor_Product_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Functor_Product_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Functor_Product_unwrap': $v = (($GLOBALS['Data_Newtype_unwrap'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap')))(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Functor_Product_newtypeProduct': $v = (object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
    $__res = $__global_Prim_undefined;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







// Data_Functor_Product_Product
function Data_Functor_Product_Product($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_Product';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $x;
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Product'] = __NAMESPACE__ . '\\Data_Functor_Product_Product';

// Data_Functor_Product_showProduct
function Data_Functor_Product_showProduct($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_showProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show = ($dictShow)->show;
    $__res = (function() use ($show) {
  $__fn = function($dictShow1) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$show1 = ($dictShow1)->show;
    $__res = (object)["show" => (function() use ($show, $show1) {
  $__body = function($v) use ($show, $show1) {
    $__case_0 = $v;
    switch (($__case_0)->tag) {
case "Tuple":
$fa = ($__case_0)->v0;
$ga = ($__case_0)->v1;
return ("(product " . (($show)($fa) . (" " . (($show1)($ga) . ")"))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v) use ($show, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_showProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_showProduct';

// Data_Functor_Product_product
function Data_Functor_Product_product($fa, $ga = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_product';
  if ($__num < 2) {
    if ($__num === 1) return function($ga) use ($fa, $__fn) { return $__fn($fa, $ga); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($fa, $ga);
    return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_product'] = __NAMESPACE__ . '\\Data_Functor_Product_product';


// Data_Functor_Product_functorProduct
function Data_Functor_Product_functorProduct($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_functorProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_bimap = ($GLOBALS['Data_Functor_Product_bimap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bimap'));
$map = ($dictFunctor)->map;
    $__res = (function() use ($__global_Data_Functor_Product_bimap, $map) {
  $__fn = function($dictFunctor1) use ($__global_Data_Functor_Product_bimap, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$map1 = ($dictFunctor1)->map;
    $__res = (object)["map" => (function() use ($__global_Data_Functor_Product_bimap, $map, $map1) {
  $__body = function($f, $v) use ($__global_Data_Functor_Product_bimap, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($__global_Data_Functor_Product_bimap)(($map)($f1), ($map1)($f1), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Product_bimap, $map, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_functorProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_functorProduct';

// Data_Functor_Product_eq1Product
function Data_Functor_Product_eq1Product($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_eq1Product';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
$eq1 = ($dictEq1)->eq1;
    $__res = (function() use ($eq1, $__global_Data_HeytingAlgebra_boolConj) {
  $__fn = function($dictEq11) use ($eq1, $__global_Data_HeytingAlgebra_boolConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq11 = ($dictEq11)->eq1;
    $__res = (object)["eq1" => (function() use ($eq1, $eq11, $__global_Data_HeytingAlgebra_boolConj) {
  $__fn = function($dictEq) use ($eq1, $eq11, $__global_Data_HeytingAlgebra_boolConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq12 = ($eq1)($dictEq);
$eq13 = ($eq11)($dictEq);
    $__res = (function() use ($__global_Data_HeytingAlgebra_boolConj, $eq12, $eq13) {
  $__body = function($v, $v1) use ($__global_Data_HeytingAlgebra_boolConj, $eq12, $eq13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->v0;
$r1 = ($__case_0)->v1;
$l2 = ($__case_1)->v0;
$r2 = ($__case_1)->v1;
return ($__global_Data_HeytingAlgebra_boolConj)(($eq12)($l1, $l2), ($eq13)($r1, $r2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_HeytingAlgebra_boolConj, $eq12, $eq13, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_eq1Product'] = __NAMESPACE__ . '\\Data_Functor_Product_eq1Product';

// Data_Functor_Product_eqProduct
function Data_Functor_Product_eqProduct($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_eqProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_eq1Product = ($GLOBALS['Data_Functor_Product_eq1Product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_eq1Product'));
$eq1Product1 = ($__global_Data_Functor_Product_eq1Product)($dictEq1);
    $__res = (function() use ($eq1Product1) {
  $__fn = function($dictEq11) use ($eq1Product1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eq1 = (($eq1Product1)($dictEq11))->eq1;
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = (object)["eq" => ($eq1)($dictEq)];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_eqProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_eqProduct';

// Data_Functor_Product_ord1Product
function Data_Functor_Product_ord1Product($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_ord1Product';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_eq1Product = ($GLOBALS['Data_Functor_Product_eq1Product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_eq1Product'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$compare1 = ($dictOrd1)->compare1;
$eq1Product1 = ($__global_Data_Functor_Product_eq1Product)((($dictOrd1)->Eq10)($__global_Prim_undefined));
    $__res = (function() use ($eq1Product1, $__global_Prim_undefined, $compare1) {
  $__fn = function($dictOrd11) use ($eq1Product1, $__global_Prim_undefined, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare11 = ($dictOrd11)->compare1;
$eq1Product2 = ($eq1Product1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
    $__res = (object)["compare1" => (function() use ($compare1, $compare11) {
  $__fn = function($dictOrd) use ($compare1, $compare11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare12 = ($compare1)($dictOrd);
$compare13 = ($compare11)($dictOrd);
    $__res = (function() use ($compare12, $compare13) {
  $__body = function($v, $v1) use ($compare12, $compare13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->v0;
$r1 = ($__case_0)->v1;
$l2 = ($__case_1)->v0;
$r2 = ($__case_1)->v1;
$v2 = ($compare12)($l1, $l2);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "EQ":
return ($compare13)($r1, $r2);
break;
default:
$o = $__case_0;
return $o;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare12, $compare13, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Product2) {
  $__fn = function($__dollar____unused) use ($eq1Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eq1Product2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_ord1Product'] = __NAMESPACE__ . '\\Data_Functor_Product_ord1Product';

// Data_Functor_Product_ordProduct
function Data_Functor_Product_ordProduct($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_ordProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_ord1Product = ($GLOBALS['Data_Functor_Product_ord1Product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_ord1Product'));
$__global_Data_Functor_Product_eqProduct = ($GLOBALS['Data_Functor_Product_eqProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_eqProduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$ord1Product1 = ($__global_Data_Functor_Product_ord1Product)($dictOrd1);
$eqProduct1 = ($__global_Data_Functor_Product_eqProduct)((($dictOrd1)->Eq10)($__global_Prim_undefined));
    $__res = (function() use ($ord1Product1, $eqProduct1, $__global_Prim_undefined) {
  $__fn = function($dictOrd11) use ($ord1Product1, $eqProduct1, $__global_Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$compare1 = (($ord1Product1)($dictOrd11))->compare1;
$eqProduct2 = ($eqProduct1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
    $__res = (function() use ($eqProduct2, $__global_Prim_undefined, $compare1) {
  $__fn = function($dictOrd) use ($eqProduct2, $__global_Prim_undefined, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$eqProduct3 = ($eqProduct2)((($dictOrd)->Eq0)($__global_Prim_undefined));
    $__res = (object)["compare" => ($compare1)($dictOrd), "Eq0" => (function() use ($eqProduct3) {
  $__fn = function($__dollar____unused) use ($eqProduct3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $eqProduct3;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_ordProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_ordProduct';

// Data_Functor_Product_bihoistProduct
function Data_Functor_Product_bihoistProduct($natF, $natG = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_bihoistProduct';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($natF, $natG, $__fn) { return $__fn($natF, $natG, $v); };
    if ($__num === 1) return function($natG, $v = null) use ($natF, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($natF, $natG, $v);
      if ($__num2 === 1) return function($v) use ($natF, $natG, $__fn) { return $__fn($natF, $natG, $v); };
      return phpurs_curry_fallback($__fn, [$natF], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__body = function($natF, $natG, $v) {
    $__global_Data_Functor_Product_bimap = ($GLOBALS['Data_Functor_Product_bimap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bimap'));
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
return ($__global_Data_Functor_Product_bimap)($natF1, $natG1, $e);
} else {
throw new \Exception("Pattern match failure");
};
  };
    $__res = $__body($natF, $natG, $v);
    return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Product_bihoistProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_bihoistProduct';

// Data_Functor_Product_applyProduct
function Data_Functor_Product_applyProduct($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_applyProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_functorProduct = ($GLOBALS['Data_Functor_Product_functorProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_functorProduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
$apply = ($dictApply)->apply;
$functorProduct1 = ($__global_Data_Functor_Product_functorProduct)((($dictApply)->Functor0)($__global_Prim_undefined));
    $__res = (function() use ($functorProduct1, $__global_Prim_undefined, $__global_Data_Functor_Product_product, $apply) {
  $__fn = function($dictApply1) use ($functorProduct1, $__global_Prim_undefined, $__global_Data_Functor_Product_product, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$apply1 = ($dictApply1)->apply;
$functorProduct2 = ($functorProduct1)((($dictApply1)->Functor0)($__global_Prim_undefined));
    $__res = (object)["apply" => (function() use ($__global_Data_Functor_Product_product, $apply, $apply1) {
  $__body = function($v, $v1) use ($__global_Data_Functor_Product_product, $apply, $apply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$f = ($__case_0)->v0;
$g = ($__case_0)->v1;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
return ($__global_Data_Functor_Product_product)(($apply)($f, $a), ($apply1)($g, $b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__global_Data_Functor_Product_product, $apply, $apply1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorProduct2) {
  $__fn = function($__dollar____unused) use ($functorProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $functorProduct2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_applyProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_applyProduct';

// Data_Functor_Product_bindProduct
function Data_Functor_Product_bindProduct($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_bindProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_applyProduct = ($GLOBALS['Data_Functor_Product_applyProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_applyProduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
$__global_Data_Functor_Product_compose = ($GLOBALS['Data_Functor_Product_compose'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_compose'));
$__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
$__global_Data_Functor_Product_unwrap = ($GLOBALS['Data_Functor_Product_unwrap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_unwrap'));
$__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
$bind = ($dictBind)->bind;
$applyProduct1 = ($__global_Data_Functor_Product_applyProduct)((($dictBind)->Apply0)($__global_Prim_undefined));
    $__res = (function() use ($applyProduct1, $__global_Prim_undefined, $__global_Data_Functor_Product_product, $bind, $__global_Data_Functor_Product_compose, $__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $__global_Data_Tuple_snd) {
  $__fn = function($dictBind1) use ($applyProduct1, $__global_Prim_undefined, $__global_Data_Functor_Product_product, $bind, $__global_Data_Functor_Product_compose, $__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $__global_Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$bind1 = ($dictBind1)->bind;
$applyProduct2 = ($applyProduct1)((($dictBind1)->Apply0)($__global_Prim_undefined));
    $__res = (object)["bind" => (function() use ($__global_Data_Functor_Product_product, $bind, $__global_Data_Functor_Product_compose, $__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $bind1, $__global_Data_Tuple_snd) {
  $__body = function($v, $f) use ($__global_Data_Functor_Product_product, $bind, $__global_Data_Functor_Product_compose, $__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $bind1, $__global_Data_Tuple_snd) {
    $__case_0 = $v;
    $__case_1 = $f;
    switch (($__case_0)->tag) {
case "Tuple":
$fa = ($__case_0)->v0;
$ga = ($__case_0)->v1;
$f1 = $__case_1;
return ($__global_Data_Functor_Product_product)(($bind)($fa, ($__global_Data_Functor_Product_compose)($__global_Data_Tuple_fst, ($__global_Data_Functor_Product_compose)($__global_Data_Functor_Product_unwrap, $f1))), ($bind1)($ga, ($__global_Data_Functor_Product_compose)($__global_Data_Tuple_snd, ($__global_Data_Functor_Product_compose)($__global_Data_Functor_Product_unwrap, $f1))));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  };
  $__fn = function($v, $f = null) use ($__global_Data_Functor_Product_product, $bind, $__global_Data_Functor_Product_compose, $__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $bind1, $__global_Data_Tuple_snd, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyProduct2) {
  $__fn = function($__dollar____unused) use ($applyProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyProduct2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_bindProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_bindProduct';

// Data_Functor_Product_applicativeProduct
function Data_Functor_Product_applicativeProduct($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_applicativeProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_applyProduct = ($GLOBALS['Data_Functor_Product_applyProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_applyProduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
$pure = ($dictApplicative)->pure;
$applyProduct1 = ($__global_Data_Functor_Product_applyProduct)((($dictApplicative)->Apply0)($__global_Prim_undefined));
    $__res = (function() use ($applyProduct1, $__global_Prim_undefined, $__global_Data_Functor_Product_product, $pure) {
  $__fn = function($dictApplicative1) use ($applyProduct1, $__global_Prim_undefined, $__global_Data_Functor_Product_product, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$pure1 = ($dictApplicative1)->pure;
$applyProduct2 = ($applyProduct1)((($dictApplicative1)->Apply0)($__global_Prim_undefined));
    $__res = (object)["pure" => (function() use ($__global_Data_Functor_Product_product, $pure, $pure1) {
  $__fn = function($a) use ($__global_Data_Functor_Product_product, $pure, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = ($__global_Data_Functor_Product_product)(($pure)($a), ($pure1)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyProduct2) {
  $__fn = function($__dollar____unused) use ($applyProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applyProduct2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_applicativeProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_applicativeProduct';

// Data_Functor_Product_monadProduct
function Data_Functor_Product_monadProduct($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Product_monadProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$__global_Data_Functor_Product_applicativeProduct = ($GLOBALS['Data_Functor_Product_applicativeProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_applicativeProduct'));
$__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
$__global_Data_Functor_Product_bindProduct = ($GLOBALS['Data_Functor_Product_bindProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bindProduct'));
$applicativeProduct1 = ($__global_Data_Functor_Product_applicativeProduct)((($dictMonad)->Applicative0)($__global_Prim_undefined));
$bindProduct1 = ($__global_Data_Functor_Product_bindProduct)((($dictMonad)->Bind1)($__global_Prim_undefined));
    $__res = (function() use ($applicativeProduct1, $__global_Prim_undefined, $bindProduct1) {
  $__fn = function($dictMonad1) use ($applicativeProduct1, $__global_Prim_undefined, $bindProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
$applicativeProduct2 = ($applicativeProduct1)((($dictMonad1)->Applicative0)($__global_Prim_undefined));
$bindProduct2 = ($bindProduct1)((($dictMonad1)->Bind1)($__global_Prim_undefined));
    $__res = (object)["Applicative0" => (function() use ($applicativeProduct2) {
  $__fn = function($__dollar____unused) use ($applicativeProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $applicativeProduct2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindProduct2) {
  $__fn = function($__dollar____unused) use ($bindProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
    $__res = $bindProduct2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_monadProduct'] = __NAMESPACE__ . '\\Data_Functor_Product_monadProduct';

