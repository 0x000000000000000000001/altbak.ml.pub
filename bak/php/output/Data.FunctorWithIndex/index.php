<?php

namespace Data\FunctorWithIndex;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_FunctorWithIndex_map
$Data_FunctorWithIndex_map = ($Data_Functor_map)($Data_Tuple_functorTuple);

// Data_FunctorWithIndex_bimap
$Data_FunctorWithIndex_bimap = ($Data_Bifunctor_bimap)($Data_Bifunctor_bifunctorTuple);

// Data_FunctorWithIndex_compose
$Data_FunctorWithIndex_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_FunctorWithIndex_map1
$Data_FunctorWithIndex_map1 = ($Data_Functor_map)($Data_Monoid_Multiplicative_functorMultiplicative);

// Data_FunctorWithIndex_map2
$Data_FunctorWithIndex_map2 = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_FunctorWithIndex_map3
$Data_FunctorWithIndex_map3 = ($Data_Functor_map)($Data_Maybe_Last_functorLast);

// Data_FunctorWithIndex_map4
$Data_FunctorWithIndex_map4 = ($Data_Functor_map)($Data_Maybe_First_functorFirst);

// Data_FunctorWithIndex_map5
$Data_FunctorWithIndex_map5 = ($Data_Functor_map)($Data_Either_functorEither);

// Data_FunctorWithIndex_map6
$Data_FunctorWithIndex_map6 = ($Data_Functor_map)($Data_Monoid_Dual_functorDual);

// Data_FunctorWithIndex_map7
$Data_FunctorWithIndex_map7 = ($Data_Functor_map)($Data_Monoid_Disj_functorDisj);

// Data_FunctorWithIndex_bimap1
$Data_FunctorWithIndex_bimap1 = ($Data_Bifunctor_bimap)($Data_Bifunctor_bifunctorEither);

// Data_FunctorWithIndex_map8
$Data_FunctorWithIndex_map8 = ($Data_Functor_map)($Data_Monoid_Conj_functorConj);

// Data_FunctorWithIndex_map9
$Data_FunctorWithIndex_map9 = ($Data_Functor_map)($Data_Monoid_Additive_functorAdditive);

// Data_FunctorWithIndex_FunctorWithIndex$Dict
$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict = (function() {
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

// Data_FunctorWithIndex_mapWithIndex
$Data_FunctorWithIndex_mapWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mapWithIndex;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($dict);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($dict);
  };
  return $__fn;
})();

// Data_FunctorWithIndex_mapDefault
$Data_FunctorWithIndex_mapDefault = (function() use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Function_const) {
  $__fn = function($dictFunctorWithIndex) use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex1 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex);
    $__res = (function() use ($mapWithIndex1, &$Data_Function_const) {
  $__fn = function($f) use ($mapWithIndex1, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mapWithIndex1)(($Data_Function_const)($f));
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

// Data_FunctorWithIndex_functorWithIndexTuple
$Data_FunctorWithIndex_functorWithIndexTuple = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Tuple_functorTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Tuple_functorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Tuple_functorTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexProduct
$Data_FunctorWithIndex_functorWithIndexProduct = (function() use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_Product_functorProduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Product_Product, &$Data_FunctorWithIndex_bimap, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictFunctorWithIndex) use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_Product_functorProduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Product_Product, &$Data_FunctorWithIndex_bimap, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex1 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex);
$functorProduct = ($Data_Functor_Product_functorProduct)((($dictFunctorWithIndex)->Functor0)($Prim_undefined));
    $__res = (function() use (&$Data_FunctorWithIndex_mapWithIndex, $functorProduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Product_Product, &$Data_FunctorWithIndex_bimap, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictFunctorWithIndex1) use (&$Data_FunctorWithIndex_mapWithIndex, $functorProduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Product_Product, &$Data_FunctorWithIndex_bimap, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex2 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex1);
$functorProduct1 = ($functorProduct)((($dictFunctorWithIndex1)->Functor0)($Prim_undefined));
    $__res = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Functor_Product_Product, &$Data_FunctorWithIndex_bimap, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, $mapWithIndex2, &$Data_Either_Right) {
  $__body = function($f, $v) use (&$Data_Functor_Product_Product, &$Data_FunctorWithIndex_bimap, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, $mapWithIndex2, &$Data_Either_Right) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($Data_Functor_Product_Product)(($Data_FunctorWithIndex_bimap)(($mapWithIndex1)(($Data_FunctorWithIndex_compose)($f1, $Data_Either_Left)), ($mapWithIndex2)(($Data_FunctorWithIndex_compose)($f1, $Data_Either_Right)), $fga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Product_Product, &$Data_FunctorWithIndex_bimap, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, $mapWithIndex2, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorProduct1) {
  $__fn = function($__dollar____unused) use ($functorProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorProduct1;
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

// Data_FunctorWithIndex_functorWithIndexMultiplicative
$Data_FunctorWithIndex_functorWithIndexMultiplicative = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map1, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map1)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Monoid_Multiplicative_functorMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_functorMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_functorMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexMaybe
$Data_FunctorWithIndex_functorWithIndexMaybe = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map2, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map2, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map2)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Maybe_functorMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_functorMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_functorMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexLast
$Data_FunctorWithIndex_functorWithIndexLast = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map3, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map3, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map3)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Maybe_Last_functorLast) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_Last_functorLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Last_functorLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexIdentity
$Data_FunctorWithIndex_functorWithIndexIdentity = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Identity_Identity, &$Data_Unit_unit) {
  $__body = function($f, $v) use (&$Data_Identity_Identity, &$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Data_Identity_Identity)(($f1)($Data_Unit_unit, $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Identity_Identity, &$Data_Unit_unit, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Identity_functorIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Identity_functorIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Identity_functorIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexFirst
$Data_FunctorWithIndex_functorWithIndexFirst = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map4, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map4, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map4)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Maybe_First_functorFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_First_functorFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_First_functorFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexEither
$Data_FunctorWithIndex_functorWithIndexEither = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map5, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map5, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map5)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Either_functorEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_functorEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_functorEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexDual
$Data_FunctorWithIndex_functorWithIndexDual = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map6, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map6, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map6)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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

// Data_FunctorWithIndex_functorWithIndexDisj
$Data_FunctorWithIndex_functorWithIndexDisj = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map7, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map7, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map7)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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

// Data_FunctorWithIndex_functorWithIndexCoproduct
$Data_FunctorWithIndex_functorWithIndexCoproduct = (function() use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_Coproduct_functorCoproduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_FunctorWithIndex_bimap1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictFunctorWithIndex) use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_Coproduct_functorCoproduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_FunctorWithIndex_bimap1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex1 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex);
$functorCoproduct = ($Data_Functor_Coproduct_functorCoproduct)((($dictFunctorWithIndex)->Functor0)($Prim_undefined));
    $__res = (function() use (&$Data_FunctorWithIndex_mapWithIndex, $functorCoproduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_FunctorWithIndex_bimap1, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictFunctorWithIndex1) use (&$Data_FunctorWithIndex_mapWithIndex, $functorCoproduct, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Coproduct_Coproduct, &$Data_FunctorWithIndex_bimap1, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex2 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex1);
$functorCoproduct1 = ($functorCoproduct)((($dictFunctorWithIndex1)->Functor0)($Prim_undefined));
    $__res = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Functor_Coproduct_Coproduct, &$Data_FunctorWithIndex_bimap1, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, $mapWithIndex2, &$Data_Either_Right) {
  $__body = function($f, $v) use (&$Data_Functor_Coproduct_Coproduct, &$Data_FunctorWithIndex_bimap1, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, $mapWithIndex2, &$Data_Either_Right) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($Data_Functor_Coproduct_Coproduct)(($Data_FunctorWithIndex_bimap1)(($mapWithIndex1)(($Data_FunctorWithIndex_compose)($f1, $Data_Either_Left)), ($mapWithIndex2)(($Data_FunctorWithIndex_compose)($f1, $Data_Either_Right)), $e));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Coproduct_Coproduct, &$Data_FunctorWithIndex_bimap1, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Either_Left, $mapWithIndex2, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorCoproduct1;
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

// Data_FunctorWithIndex_functorWithIndexConst
$Data_FunctorWithIndex_functorWithIndexConst = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Const_Const) {
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

// Data_FunctorWithIndex_functorWithIndexConj
$Data_FunctorWithIndex_functorWithIndexConj = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map8, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map8)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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

// Data_FunctorWithIndex_functorWithIndexCompose
$Data_FunctorWithIndex_functorWithIndexCompose = (function() use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_Compose_functorCompose, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Compose_Compose, &$Data_FunctorWithIndex_compose, &$Data_Tuple_curry) {
  $__fn = function($dictFunctorWithIndex) use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_Compose_functorCompose, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Compose_Compose, &$Data_FunctorWithIndex_compose, &$Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex1 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex);
$functorCompose = ($Data_Functor_Compose_functorCompose)((($dictFunctorWithIndex)->Functor0)($Prim_undefined));
    $__res = (function() use (&$Data_FunctorWithIndex_mapWithIndex, $functorCompose, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Compose_Compose, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Tuple_curry) {
  $__fn = function($dictFunctorWithIndex1) use (&$Data_FunctorWithIndex_mapWithIndex, $functorCompose, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_Compose_Compose, $mapWithIndex1, &$Data_FunctorWithIndex_compose, &$Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex2 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex1);
$functorCompose1 = ($functorCompose)((($dictFunctorWithIndex1)->Functor0)($Prim_undefined));
    $__res = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Functor_Compose_Compose, $mapWithIndex1, &$Data_FunctorWithIndex_compose, $mapWithIndex2, &$Data_Tuple_curry) {
  $__body = function($f, $v) use (&$Data_Functor_Compose_Compose, $mapWithIndex1, &$Data_FunctorWithIndex_compose, $mapWithIndex2, &$Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($Data_Functor_Compose_Compose)(($mapWithIndex1)(($Data_FunctorWithIndex_compose)($mapWithIndex2, ($Data_Tuple_curry)($f1)), $fga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Compose_Compose, $mapWithIndex1, &$Data_FunctorWithIndex_compose, $mapWithIndex2, &$Data_Tuple_curry, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorCompose1) {
  $__fn = function($__dollar____unused) use ($functorCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorCompose1;
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

// Data_FunctorWithIndex_functorWithIndexArray
$Data_FunctorWithIndex_functorWithIndexArray = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => $Data_FunctorWithIndex_mapWithIndexArray, "Functor0" => (function() use (&$Data_Functor_functorArray) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_functorArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_functorArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexApp
$Data_FunctorWithIndex_functorWithIndexApp = (function() use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_App_functorApp, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_App_App) {
  $__fn = function($dictFunctorWithIndex) use (&$Data_FunctorWithIndex_mapWithIndex, &$Data_Functor_App_functorApp, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex1 = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex);
$functorApp = ($Data_Functor_App_functorApp)((($dictFunctorWithIndex)->Functor0)($Prim_undefined));
    $__res = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_Functor_App_App, $mapWithIndex1) {
  $__body = function($f, $v) use (&$Data_Functor_App_App, $mapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($Data_Functor_App_App)(($mapWithIndex1)($f1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_App_App, $mapWithIndex1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorApp) {
  $__fn = function($__dollar____unused) use ($functorApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorApp;
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

// Data_FunctorWithIndex_functorWithIndexAdditive
$Data_FunctorWithIndex_functorWithIndexAdditive = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Data_FunctorWithIndex_map9, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FunctorWithIndex_map9, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FunctorWithIndex_map9)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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

