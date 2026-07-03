<?php

namespace Data\Functor\Product\Nested;

require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Product_Nested_product9
$Data_Functor_Product_Nested_product9 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Functor_Product_product)($d, ($Data_Functor_Product_product)($e, ($Data_Functor_Product_product)($f, ($Data_Functor_Product_product)($g, ($Data_Functor_Product_product)($h, ($Data_Functor_Product_product)($i, ($Data_Const_Const)($Data_Unit_unit))))))))));
    if ($__num > 9) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 9));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product8
$Data_Functor_Product_Nested_product8 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Functor_Product_product)($d, ($Data_Functor_Product_product)($e, ($Data_Functor_Product_product)($f, ($Data_Functor_Product_product)($g, ($Data_Functor_Product_product)($h, ($Data_Const_Const)($Data_Unit_unit)))))))));
    if ($__num > 8) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 8));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product7
$Data_Functor_Product_Nested_product7 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Functor_Product_product)($d, ($Data_Functor_Product_product)($e, ($Data_Functor_Product_product)($f, ($Data_Functor_Product_product)($g, ($Data_Const_Const)($Data_Unit_unit))))))));
    if ($__num > 7) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product6
$Data_Functor_Product_Nested_product6 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Functor_Product_product)($d, ($Data_Functor_Product_product)($e, ($Data_Functor_Product_product)($f, ($Data_Const_Const)($Data_Unit_unit)))))));
    if ($__num > 6) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product5
$Data_Functor_Product_Nested_product5 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Functor_Product_product)($d, ($Data_Functor_Product_product)($e, ($Data_Const_Const)($Data_Unit_unit))))));
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product4
$Data_Functor_Product_Nested_product4 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Functor_Product_product)($d, ($Data_Const_Const)($Data_Unit_unit)))));
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product3
$Data_Functor_Product_Nested_product3 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Const_Const)($Data_Unit_unit))));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product2
$Data_Functor_Product_Nested_product2 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Const_Const)($Data_Unit_unit)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product10
$Data_Functor_Product_Nested_product10 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Functor_Product_product)($b, ($Data_Functor_Product_product)($c, ($Data_Functor_Product_product)($d, ($Data_Functor_Product_product)($e, ($Data_Functor_Product_product)($f, ($Data_Functor_Product_product)($g, ($Data_Functor_Product_product)($h, ($Data_Functor_Product_product)($i, ($Data_Functor_Product_product)($j, ($Data_Const_Const)($Data_Unit_unit)))))))))));
    if ($__num > 10) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 10));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product1
$Data_Functor_Product_Nested_product1 = (function() use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit) {
  $__fn = function($a) use (&$Data_Functor_Product_product, &$Data_Const_Const, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product_product)($a, ($Data_Const_Const)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_get9
$Data_Functor_Product_Nested_get9 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))))) {
$i = ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $i;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get8
$Data_Functor_Product_Nested_get8 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))) {
$h = (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $h;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get7
$Data_Functor_Product_Nested_get7 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))) {
$g = ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $g;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get6
$Data_Functor_Product_Nested_get6 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))) {
$f = (((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $f;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get5
$Data_Functor_Product_Nested_get5 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))) {
$e = ((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[0];
return $e;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get4
$Data_Functor_Product_Nested_get4 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple"))))) {
$d = (((($__case_0)->values[1])->values[1])->values[1])->values[0];
return $d;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get3
$Data_Functor_Product_Nested_get3 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && (((($__case_0)->values[1])->values[1])->tag === "Tuple")))) {
$c = ((($__case_0)->values[1])->values[1])->values[0];
return $c;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get2
$Data_Functor_Product_Nested_get2 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Tuple"))) {
$b = (($__case_0)->values[1])->values[0];
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get10
$Data_Functor_Product_Nested_get10 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))))) {
$j = (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $j;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

// Data_Functor_Product_Nested_get1
$Data_Functor_Product_Nested_get1 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
return $a;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($__body, &$__fn) {
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
})();

