<?php

namespace Data\Functor\Product2;

require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Product2_append
$Data_Functor_Product2_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Functor_Product2_conj
$Data_Functor_Product2_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Functor_Product2_Product2
$Data_Functor_Product2_Product2 = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Product2", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_showProduct2
$Data_Functor_Product2_showProduct2 = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product2_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product2_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show = ($Data_Show_show)($dictShow);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product2_append, $show) {
  $__fn = function($dictShow1) use (&$Data_Show_show, &$Data_Show_Show__dollar__Dict, &$Data_Functor_Product2_append, $show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow1);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Functor_Product2_append, $show, $show1) {
  $__body = function($v) use (&$Data_Functor_Product2_append, $show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product2")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($Data_Functor_Product2_append)("(Product2 ", ($Data_Functor_Product2_append)(($show)($x), ($Data_Functor_Product2_append)(" ", ($Data_Functor_Product2_append)(($show1)($y), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Functor_Product2_append, $show, $show1, $__body, &$__fn) {
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

// Data_Functor_Product2_profunctorProduct2
$Data_Functor_Product2_profunctorProduct2 = (function() use (&$Data_Profunctor_dimap, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictProfunctor) use (&$Data_Profunctor_dimap, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$dimap = ($Data_Profunctor_dimap)($dictProfunctor);
    $__res = (function() use (&$Data_Profunctor_dimap, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Product2_Product2, $dimap) {
  $__fn = function($dictProfunctor1) use (&$Data_Profunctor_dimap, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Product2_Product2, $dimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$dimap1 = ($Data_Profunctor_dimap)($dictProfunctor1);
    $__res = ($Data_Profunctor_Profunctor__dollar__Dict)((object)["dimap" => (function() use (&$Data_Functor_Product2_Product2, $dimap, $dimap1) {
  $__body = function($f, $g, $v) use (&$Data_Functor_Product2_Product2, $dimap, $dimap1) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Product2")) {
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($Data_Functor_Product2_Product2)(($dimap)($f1, $g1, $x), ($dimap1)($f1, $g1, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Functor_Product2_Product2, $dimap, $dimap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $g, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $g, $v);
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

// Data_Functor_Product2_functorProduct2
$Data_Functor_Product2_functorProduct2 = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product2_Product2, $map) {
  $__fn = function($dictFunctor1) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Data_Functor_Product2_Product2, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor1);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Product2_Product2, $map, $map1) {
  $__body = function($f, $v) use (&$Data_Functor_Product2_Product2, $map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Product2")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($Data_Functor_Product2_Product2)(($map)($f1, $x), ($map1)($f1, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Product2_Product2, $map, $map1, $__body, &$__fn) {
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

// Data_Functor_Product2_eqProduct2
$Data_Functor_Product2_eqProduct2 = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_Product2_conj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_Product2_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_Product2_conj, $eq) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq, &$Data_Eq_Eq__dollar__Dict, &$Data_Functor_Product2_conj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq1 = ($Data_Eq_eq)($dictEq1);
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Functor_Product2_conj, $eq, $eq1) {
  $__body = function($x, $y) use (&$Data_Functor_Product2_conj, $eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Product2") && (($__case_1)->tag === "Product2"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_Functor_Product2_conj)(($eq)($l, $r), ($eq1)($l1, $r1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Functor_Product2_conj, $eq, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
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

// Data_Functor_Product2_ordProduct2
$Data_Functor_Product2_ordProduct2 = (function() use (&$Data_Ord_compare, &$Data_Functor_Product2_eqProduct2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Functor_Product2_eqProduct2, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
$eqProduct21 = ($Data_Functor_Product2_eqProduct2)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = (function() use (&$Data_Ord_compare, $eqProduct21, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__fn = function($dictOrd1) use (&$Data_Ord_compare, $eqProduct21, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, $compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare1 = ($Data_Ord_compare)($dictOrd1);
$eqProduct22 = ($eqProduct21)((($dictOrd1)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
  $__body = function($x, $y) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Product2") && (($__case_1)->tag === "Product2"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($compare1)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare, &$Data_Ordering_LT, &$Data_Ordering_GT, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqProduct22) {
  $__fn = function($__dollar____unused) use ($eqProduct22, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqProduct22;
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

// Data_Functor_Product2_bifunctorProduct2
$Data_Functor_Product2_bifunctorProduct2 = (function() use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictBifunctor) use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bimap = ($Data_Bifunctor_bimap)($dictBifunctor);
    $__res = (function() use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Product2_Product2, $bimap) {
  $__fn = function($dictBifunctor1) use (&$Data_Bifunctor_bimap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Product2_Product2, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bimap1 = ($Data_Bifunctor_bimap)($dictBifunctor1);
    $__res = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Functor_Product2_Product2, $bimap, $bimap1) {
  $__body = function($f, $g, $v) use (&$Data_Functor_Product2_Product2, $bimap, $bimap1) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Product2")) {
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($Data_Functor_Product2_Product2)(($bimap)($f1, $g1, $x), ($bimap1)($f1, $g1, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Functor_Product2_Product2, $bimap, $bimap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $g, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $g, $v);
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

// Data_Functor_Product2_biapplyProduct2
$Data_Functor_Product2_biapplyProduct2 = (function() use (&$Control_Biapply_biapply, &$Data_Functor_Product2_bifunctorProduct2, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictBiapply) use (&$Control_Biapply_biapply, &$Data_Functor_Product2_bifunctorProduct2, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply = ($Control_Biapply_biapply)($dictBiapply);
$bifunctorProduct21 = ($Data_Functor_Product2_bifunctorProduct2)((($dictBiapply)->Bifunctor0)($Prim_undefined));
    $__res = (function() use (&$Control_Biapply_biapply, $bifunctorProduct21, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Product2_Product2, $biapply) {
  $__fn = function($dictBiapply1) use (&$Control_Biapply_biapply, $bifunctorProduct21, &$Prim_undefined, &$Control_Biapply_Biapply__dollar__Dict, &$Data_Functor_Product2_Product2, $biapply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$biapply1 = ($Control_Biapply_biapply)($dictBiapply1);
$bifunctorProduct22 = ($bifunctorProduct21)((($dictBiapply1)->Bifunctor0)($Prim_undefined));
    $__res = ($Control_Biapply_Biapply__dollar__Dict)((object)["biapply" => (function() use (&$Data_Functor_Product2_Product2, $biapply, $biapply1) {
  $__body = function($v, $v1) use (&$Data_Functor_Product2_Product2, $biapply, $biapply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product2") && (($__case_1)->tag === "Product2"))) {
$w = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$z = ($__case_1)->values[1];
return ($Data_Functor_Product2_Product2)(($biapply)($w, $y), ($biapply1)($x, $z));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Product2_Product2, $biapply, $biapply1, $__body, &$__fn) {
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
})(), "Bifunctor0" => (function() use ($bifunctorProduct22) {
  $__fn = function($__dollar____unused) use ($bifunctorProduct22, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bifunctorProduct22;
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

// Data_Functor_Product2_biapplicativeProduct2
$Data_Functor_Product2_biapplicativeProduct2 = (function() use (&$Control_Biapplicative_bipure, &$Data_Functor_Product2_biapplyProduct2, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Product2_Product2) {
  $__fn = function($dictBiapplicative) use (&$Control_Biapplicative_bipure, &$Data_Functor_Product2_biapplyProduct2, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Product2_Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bipure = ($Control_Biapplicative_bipure)($dictBiapplicative);
$biapplyProduct21 = ($Data_Functor_Product2_biapplyProduct2)((($dictBiapplicative)->Biapply0)($Prim_undefined));
    $__res = (function() use (&$Control_Biapplicative_bipure, $biapplyProduct21, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Product2_Product2, $bipure) {
  $__fn = function($dictBiapplicative1) use (&$Control_Biapplicative_bipure, $biapplyProduct21, &$Prim_undefined, &$Control_Biapplicative_Biapplicative__dollar__Dict, &$Data_Functor_Product2_Product2, $bipure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bipure1 = ($Control_Biapplicative_bipure)($dictBiapplicative1);
$biapplyProduct22 = ($biapplyProduct21)((($dictBiapplicative1)->Biapply0)($Prim_undefined));
    $__res = ($Control_Biapplicative_Biapplicative__dollar__Dict)((object)["bipure" => (function() use (&$Data_Functor_Product2_Product2, $bipure, $bipure1) {
  $__fn = function($a, $b = null) use (&$Data_Functor_Product2_Product2, $bipure, $bipure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Product2_Product2)(($bipure)($a, $b), ($bipure1)($a, $b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyProduct22) {
  $__fn = function($__dollar____unused) use ($biapplyProduct22, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $biapplyProduct22;
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

