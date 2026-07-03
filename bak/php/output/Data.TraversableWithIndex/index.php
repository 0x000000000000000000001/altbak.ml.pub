<?php

namespace Data\TraversableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
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
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_TraversableWithIndex_compose
$Data_TraversableWithIndex_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_TraversableWithIndex_traverse
$Data_TraversableWithIndex_traverse = ($Data_Traversable_traverse)($Data_Traversable_traversableMultiplicative);

// Data_TraversableWithIndex_traverse1
$Data_TraversableWithIndex_traverse1 = ($Data_Traversable_traverse)($Data_Traversable_traversableMaybe);

// Data_TraversableWithIndex_traverse2
$Data_TraversableWithIndex_traverse2 = ($Data_Traversable_traverse)($Data_Traversable_traversableLast);

// Data_TraversableWithIndex_traverse3
$Data_TraversableWithIndex_traverse3 = ($Data_Traversable_traverse)($Data_Traversable_traversableFirst);

// Data_TraversableWithIndex_traverse4
$Data_TraversableWithIndex_traverse4 = ($Data_Traversable_traverse)($Data_Traversable_traversableDual);

// Data_TraversableWithIndex_traverse5
$Data_TraversableWithIndex_traverse5 = ($Data_Traversable_traverse)($Data_Traversable_traversableDisj);

// Data_TraversableWithIndex_traverse6
$Data_TraversableWithIndex_traverse6 = ($Data_Traversable_traverse)($Data_Traversable_traversableConj);

// Data_TraversableWithIndex_traverse7
$Data_TraversableWithIndex_traverse7 = ($Data_Traversable_traverse)($Data_Traversable_traversableAdditive);

// Data_TraversableWithIndex_TraversableWithIndex$Dict
$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict = (function() {
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

// Data_TraversableWithIndex_traverseWithIndexDefault
$Data_TraversableWithIndex_traverseWithIndexDefault = (function() use (&$Data_Traversable_sequence, &$Prim_undefined, &$Data_FunctorWithIndex_mapWithIndex, &$Data_TraversableWithIndex_compose) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_Traversable_sequence, &$Prim_undefined, &$Data_FunctorWithIndex_mapWithIndex, &$Data_TraversableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence = ($Data_Traversable_sequence)((($dictTraversableWithIndex)->Traversable2)($Prim_undefined));
$mapWithIndex = ($Data_FunctorWithIndex_mapWithIndex)((($dictTraversableWithIndex)->FunctorWithIndex0)($Prim_undefined));
    $__res = (function() use ($sequence, &$Data_TraversableWithIndex_compose, $mapWithIndex) {
  $__fn = function($dictApplicative) use ($sequence, &$Data_TraversableWithIndex_compose, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use (&$Data_TraversableWithIndex_compose, $sequence1, $mapWithIndex) {
  $__fn = function($f) use (&$Data_TraversableWithIndex_compose, $sequence1, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_TraversableWithIndex_compose)($sequence1, ($mapWithIndex)($f));
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

// Data_TraversableWithIndex_traverseWithIndex
$Data_TraversableWithIndex_traverseWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->traverseWithIndex;
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

// Data_TraversableWithIndex_traverseDefault
$Data_TraversableWithIndex_traverseDefault = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_Function_const) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex1 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex);
    $__res = (function() use ($traverseWithIndex1, &$Data_Function_const) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($traverseWithIndex2, &$Data_Function_const) {
  $__fn = function($f) use ($traverseWithIndex2, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverseWithIndex2)(($Data_Function_const)($f));
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

// Data_TraversableWithIndex_traversableWithIndexTuple
$Data_TraversableWithIndex_traversableWithIndexTuple = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__body = function($f, $v) use ($map, &$Data_Tuple_Tuple, &$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($map)(($Data_Tuple_Tuple)($x), ($f1)($Data_Unit_unit, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Tuple_Tuple, &$Data_Unit_unit, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexTuple) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexTuple) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexProduct
$Data_TraversableWithIndex_traversableWithIndexProduct = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexProduct, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexProduct, &$Data_Traversable_traversableProduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Control_Apply_lift2, &$Data_Functor_Product_product, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexProduct, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexProduct, &$Data_Traversable_traversableProduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Control_Apply_lift2, &$Data_Functor_Product_product, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex1 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex);
$functorWithIndexProduct = ($Data_FunctorWithIndex_functorWithIndexProduct)((($dictTraversableWithIndex)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexProduct = ($Data_FoldableWithIndex_foldableWithIndexProduct)((($dictTraversableWithIndex)->FoldableWithIndex1)($Prim_undefined));
$traversableProduct = ($Data_Traversable_traversableProduct)((($dictTraversableWithIndex)->Traversable2)($Prim_undefined));
    $__res = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, $functorWithIndexProduct, &$Prim_undefined, $foldableWithIndexProduct, $traversableProduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Control_Apply_lift2, $traverseWithIndex1, &$Data_Functor_Product_product, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictTraversableWithIndex1) use (&$Data_TraversableWithIndex_traverseWithIndex, $functorWithIndexProduct, &$Prim_undefined, $foldableWithIndexProduct, $traversableProduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Control_Apply_lift2, $traverseWithIndex1, &$Data_Functor_Product_product, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex2 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex1);
$functorWithIndexProduct1 = ($functorWithIndexProduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexProduct1 = ($foldableWithIndexProduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($Prim_undefined));
$traversableProduct1 = ($traversableProduct)((($dictTraversableWithIndex1)->Traversable2)($Prim_undefined));
    $__res = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Control_Apply_lift2, &$Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, &$Data_Functor_Product_product, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Control_Apply_lift2, &$Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, &$Data_Functor_Product_product, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)((($dictApplicative)->Apply0)($Prim_undefined));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($lift2, &$Data_Functor_Product_product, $traverseWithIndex3, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, $traverseWithIndex4, &$Data_Either_Right) {
  $__body = function($f, $v) use ($lift2, &$Data_Functor_Product_product, $traverseWithIndex3, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, $traverseWithIndex4, &$Data_Either_Right) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$fa = ($__case_1)->values[0];
$ga = ($__case_1)->values[1];
return ($lift2)($Data_Functor_Product_product, ($traverseWithIndex3)(($Data_TraversableWithIndex_compose)($f1, $Data_Either_Left), $fa), ($traverseWithIndex4)(($Data_TraversableWithIndex_compose)($f1, $Data_Either_Right), $ga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($lift2, &$Data_Functor_Product_product, $traverseWithIndex3, &$Data_TraversableWithIndex_compose, &$Data_Either_Left, $traverseWithIndex4, &$Data_Either_Right, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexProduct1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWithIndexProduct1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexProduct1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableWithIndexProduct1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableProduct1) {
  $__fn = function($__dollar____unused) use ($traversableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $traversableProduct1;
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

// Data_TraversableWithIndex_traversableWithIndexMultiplicative
$Data_TraversableWithIndex_traversableWithIndexMultiplicative = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexMaybe
$Data_TraversableWithIndex_traversableWithIndexMaybe = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse1, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse1)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexLast
$Data_TraversableWithIndex_traversableWithIndexLast = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse2, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse2, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse2)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexLast) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexLast) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableLast) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexIdentity
$Data_TraversableWithIndex_traversableWithIndexIdentity = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Identity_Identity, &$Data_Unit_unit) {
  $__body = function($f, $v) use ($map, &$Data_Identity_Identity, &$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Identity_Identity, ($f1)($Data_Unit_unit, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Identity_Identity, &$Data_Unit_unit, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexFirst
$Data_TraversableWithIndex_traversableWithIndexFirst = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse3, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse3, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse3)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexFirst) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexFirst) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexEither
$Data_TraversableWithIndex_traversableWithIndexEither = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right, &$Data_Unit_unit) {
  $__body = function($v, $v1) use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right, &$Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$x = ($__case_1)->values[0];
return ($pure)(($Data_Either_Left)($x));
} else {
;
};
    if ((($__case_1)->tag === "Right")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($map)($Data_Either_Right, ($f)($Data_Unit_unit, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right, &$Data_Unit_unit, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexEither) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexEither) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableEither) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexDual
$Data_TraversableWithIndex_traversableWithIndexDual = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse4, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse4, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse4)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexDual) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexDual) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableDual) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexDisj
$Data_TraversableWithIndex_traversableWithIndexDisj = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse5, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse5, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse5)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexDisj) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexDisj) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexCoproduct
$Data_TraversableWithIndex_traversableWithIndexCoproduct = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexCoproduct, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexCoproduct, &$Data_Traversable_traversableCoproduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexCoproduct, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexCoproduct, &$Data_Traversable_traversableCoproduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex1 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex);
$functorWithIndexCoproduct = ($Data_FunctorWithIndex_functorWithIndexCoproduct)((($dictTraversableWithIndex)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexCoproduct = ($Data_FoldableWithIndex_foldableWithIndexCoproduct)((($dictTraversableWithIndex)->FoldableWithIndex1)($Prim_undefined));
$traversableCoproduct = ($Data_Traversable_traversableCoproduct)((($dictTraversableWithIndex)->Traversable2)($Prim_undefined));
    $__res = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, $functorWithIndexCoproduct, &$Prim_undefined, $foldableWithIndexCoproduct, $traversableCoproduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, $traverseWithIndex1, &$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictTraversableWithIndex1) use (&$Data_TraversableWithIndex_traverseWithIndex, $functorWithIndexCoproduct, &$Prim_undefined, $foldableWithIndexCoproduct, $traversableCoproduct, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, $traverseWithIndex1, &$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex2 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex1);
$functorWithIndexCoproduct1 = ($functorWithIndexCoproduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexCoproduct1 = ($foldableWithIndexCoproduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($Prim_undefined));
$traversableCoproduct1 = ($traversableCoproduct)((($dictTraversableWithIndex1)->Traversable2)($Prim_undefined));
    $__res = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, &$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, &$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use (&$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, $map, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, $traverseWithIndex3, &$Data_Either_Right, $traverseWithIndex4) {
  $__fn = function($f) use (&$Data_Functor_Coproduct_coproduct, &$Data_TraversableWithIndex_compose, $map, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, $traverseWithIndex3, &$Data_Either_Right, $traverseWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($Data_TraversableWithIndex_compose)(($map)(($Data_TraversableWithIndex_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Left)), ($traverseWithIndex3)(($Data_TraversableWithIndex_compose)($f, $Data_Either_Left))), ($Data_TraversableWithIndex_compose)(($map)(($Data_TraversableWithIndex_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Right)), ($traverseWithIndex4)(($Data_TraversableWithIndex_compose)($f, $Data_Either_Right))));
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
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWithIndexCoproduct1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableWithIndexCoproduct1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableCoproduct1) {
  $__fn = function($__dollar____unused) use ($traversableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $traversableCoproduct1;
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

// Data_TraversableWithIndex_traversableWithIndexConst
$Data_TraversableWithIndex_traversableWithIndexConst = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Control_Applicative_pure, &$Data_Const_Const) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Const_Const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($pure, &$Data_Const_Const) {
  $__body = function($v, $v1) use ($pure, &$Data_Const_Const) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($pure)(($Data_Const_Const)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($pure, &$Data_Const_Const, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexConst) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexConst) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableConst) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexConj
$Data_TraversableWithIndex_traversableWithIndexConj = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse6, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse6, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse6)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexConj) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexConj) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableConj) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexCompose
$Data_TraversableWithIndex_traversableWithIndexCompose = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexCompose, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexCompose, &$Data_Traversable_traversableCompose, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Compose_Compose, &$Data_TraversableWithIndex_compose, &$Data_Tuple_curry) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexCompose, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexCompose, &$Data_Traversable_traversableCompose, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Compose_Compose, &$Data_TraversableWithIndex_compose, &$Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex1 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex);
$functorWithIndexCompose = ($Data_FunctorWithIndex_functorWithIndexCompose)((($dictTraversableWithIndex)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexCompose = ($Data_FoldableWithIndex_foldableWithIndexCompose)((($dictTraversableWithIndex)->FoldableWithIndex1)($Prim_undefined));
$traversableCompose = ($Data_Traversable_traversableCompose)((($dictTraversableWithIndex)->Traversable2)($Prim_undefined));
    $__res = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, $functorWithIndexCompose, &$Prim_undefined, $foldableWithIndexCompose, $traversableCompose, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, $traverseWithIndex1, &$Data_Functor_Compose_Compose, &$Data_TraversableWithIndex_compose, &$Data_Tuple_curry) {
  $__fn = function($dictTraversableWithIndex1) use (&$Data_TraversableWithIndex_traverseWithIndex, $functorWithIndexCompose, &$Prim_undefined, $foldableWithIndexCompose, $traversableCompose, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, $traverseWithIndex1, &$Data_Functor_Compose_Compose, &$Data_TraversableWithIndex_compose, &$Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex2 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex1);
$functorWithIndexCompose1 = ($functorWithIndexCompose)((($dictTraversableWithIndex1)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexCompose1 = ($foldableWithIndexCompose)((($dictTraversableWithIndex1)->FoldableWithIndex1)($Prim_undefined));
$traversableCompose1 = ($traversableCompose)((($dictTraversableWithIndex1)->Traversable2)($Prim_undefined));
    $__res = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, &$Data_Functor_Compose_Compose, &$Data_TraversableWithIndex_compose, &$Data_Tuple_curry) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, &$Data_Functor_Compose_Compose, &$Data_TraversableWithIndex_compose, &$Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Compose_Compose, $traverseWithIndex3, &$Data_TraversableWithIndex_compose, $traverseWithIndex4, &$Data_Tuple_curry) {
  $__body = function($f, $v) use ($map, &$Data_Functor_Compose_Compose, $traverseWithIndex3, &$Data_TraversableWithIndex_compose, $traverseWithIndex4, &$Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)($Data_Functor_Compose_Compose, ($traverseWithIndex3)(($Data_TraversableWithIndex_compose)($traverseWithIndex4, ($Data_Tuple_curry)($f1)), $fga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Functor_Compose_Compose, $traverseWithIndex3, &$Data_TraversableWithIndex_compose, $traverseWithIndex4, &$Data_Tuple_curry, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexCompose1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWithIndexCompose1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexCompose1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableWithIndexCompose1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableCompose1) {
  $__fn = function($__dollar____unused) use ($traversableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $traversableCompose1;
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

// Data_TraversableWithIndex_traversableWithIndexArray
$Data_TraversableWithIndex_traversableWithIndexArray = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverseWithIndexDefault, &$Data_TraversableWithIndex_traversableWithIndexArray) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverseWithIndexDefault, &$Data_TraversableWithIndex_traversableWithIndexArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_TraversableWithIndex_traverseWithIndexDefault)($Data_TraversableWithIndex_traversableWithIndexArray, $dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexArray) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexArray) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableArray) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexApp
$Data_TraversableWithIndex_traversableWithIndexApp = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexApp, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexApp, &$Data_Traversable_traversableApp, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Data_Functor_App_App) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_FunctorWithIndex_functorWithIndexApp, &$Prim_undefined, &$Data_FoldableWithIndex_foldableWithIndexApp, &$Data_Traversable_traversableApp, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex1 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex);
$functorWithIndexApp = ($Data_FunctorWithIndex_functorWithIndexApp)((($dictTraversableWithIndex)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexApp = ($Data_FoldableWithIndex_foldableWithIndexApp)((($dictTraversableWithIndex)->FoldableWithIndex1)($Prim_undefined));
$traversableApp = ($Data_Traversable_traversableApp)((($dictTraversableWithIndex)->Traversable2)($Prim_undefined));
    $__res = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex1, &$Data_Functor_App_App) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex1, &$Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_App_App, $traverseWithIndex2) {
  $__body = function($f, $v) use ($map, &$Data_Functor_App_App, $traverseWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Functor_App_App, ($traverseWithIndex2)($f1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Functor_App_App, $traverseWithIndex2, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexApp) {
  $__fn = function($__dollar____unused) use ($functorWithIndexApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWithIndexApp;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexApp) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableWithIndexApp;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableApp) {
  $__fn = function($__dollar____unused) use ($traversableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $traversableApp;
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

// Data_TraversableWithIndex_traversableWithIndexAdditive
$Data_TraversableWithIndex_traversableWithIndexAdditive = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_TraversableWithIndex_traverse7, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Data_TraversableWithIndex_traverse7, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse8 = ($Data_TraversableWithIndex_traverse7)($dictApplicative);
    $__res = (function() use ($traverse8, &$Data_Unit_unit) {
  $__fn = function($f) use ($traverse8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse8)(($f)($Data_Unit_unit));
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
})(), "FunctorWithIndex0" => (function() use (&$Data_FunctorWithIndex_functorWithIndexAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_FunctorWithIndex_functorWithIndexAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FunctorWithIndex_functorWithIndexAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use (&$Data_FoldableWithIndex_foldableWithIndexAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_FoldableWithIndex_foldableWithIndexAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_FoldableWithIndex_foldableWithIndexAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use (&$Data_Traversable_traversableAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_mapAccumRWithIndex
$Data_TraversableWithIndex_mapAccumRWithIndex = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_Traversable_Accum_Internal_applicativeStateR, &$Data_Traversable_Accum_Internal_stateR, &$Data_Traversable_Accum_Internal_StateR) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_Traversable_Accum_Internal_applicativeStateR, &$Data_Traversable_Accum_Internal_stateR, &$Data_Traversable_Accum_Internal_StateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex1 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex, $Data_Traversable_Accum_Internal_applicativeStateR);
    $__res = (function() use (&$Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1, &$Data_Traversable_Accum_Internal_StateR) {
  $__fn = function($f, $s0 = null, $xs = null) use (&$Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1, &$Data_Traversable_Accum_Internal_StateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_stateR)(($traverseWithIndex1)((function() use (&$Data_Traversable_Accum_Internal_StateR, $f) {
  $__fn = function($i, $a = null) use (&$Data_Traversable_Accum_Internal_StateR, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateR)((function() use ($f, $i, $a) {
  $__fn = function($s) use ($f, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($i, $s, $a);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $xs), $s0);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_TraversableWithIndex_scanrWithIndex
$Data_TraversableWithIndex_scanrWithIndex = (function() use (&$Data_TraversableWithIndex_mapAccumRWithIndex) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_mapAccumRWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapAccumRWithIndex1 = ($Data_TraversableWithIndex_mapAccumRWithIndex)($dictTraversableWithIndex);
    $__res = (function() use ($mapAccumRWithIndex1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumRWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (($mapAccumRWithIndex1)((function() use ($f) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$b__prime__ = ($f)($i, $a, $b);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_TraversableWithIndex_mapAccumLWithIndex
$Data_TraversableWithIndex_mapAccumLWithIndex = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_Traversable_Accum_Internal_applicativeStateL, &$Data_Traversable_Accum_Internal_stateL, &$Data_Traversable_Accum_Internal_StateL) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Data_Traversable_Accum_Internal_applicativeStateL, &$Data_Traversable_Accum_Internal_stateL, &$Data_Traversable_Accum_Internal_StateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex1 = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex, $Data_Traversable_Accum_Internal_applicativeStateL);
    $__res = (function() use (&$Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1, &$Data_Traversable_Accum_Internal_StateL) {
  $__fn = function($f, $s0 = null, $xs = null) use (&$Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1, &$Data_Traversable_Accum_Internal_StateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_stateL)(($traverseWithIndex1)((function() use (&$Data_Traversable_Accum_Internal_StateL, $f) {
  $__fn = function($i, $a = null) use (&$Data_Traversable_Accum_Internal_StateL, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateL)((function() use ($f, $i, $a) {
  $__fn = function($s) use ($f, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($i, $s, $a);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $xs), $s0);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_TraversableWithIndex_scanlWithIndex
$Data_TraversableWithIndex_scanlWithIndex = (function() use (&$Data_TraversableWithIndex_mapAccumLWithIndex) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_mapAccumLWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapAccumLWithIndex1 = ($Data_TraversableWithIndex_mapAccumLWithIndex)($dictTraversableWithIndex);
    $__res = (function() use ($mapAccumLWithIndex1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumLWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (($mapAccumLWithIndex1)((function() use ($f) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$b__prime__ = ($f)($i, $b, $a);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_TraversableWithIndex_forWithIndex
$Data_TraversableWithIndex_forWithIndex = (function() use (&$Data_Function_flip, &$Data_TraversableWithIndex_traverseWithIndex) {
  $__fn = function($dictApplicative, $dictTraversableWithIndex = null) use (&$Data_Function_flip, &$Data_TraversableWithIndex_traverseWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)(($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex, $dictApplicative));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

