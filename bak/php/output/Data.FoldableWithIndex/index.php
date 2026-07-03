<?php

namespace Data\FoldableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_FoldableWithIndex_compose
$Data_FoldableWithIndex_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_FoldableWithIndex_foldr
$Data_FoldableWithIndex_foldr = ($Data_Foldable_foldr)($Data_Foldable_foldableMultiplicative);

// Data_FoldableWithIndex_foldl
$Data_FoldableWithIndex_foldl = ($Data_Foldable_foldl)($Data_Foldable_foldableMultiplicative);

// Data_FoldableWithIndex_foldMap
$Data_FoldableWithIndex_foldMap = ($Data_Foldable_foldMap)($Data_Foldable_foldableMultiplicative);

// Data_FoldableWithIndex_foldr1
$Data_FoldableWithIndex_foldr1 = ($Data_Foldable_foldr)($Data_Foldable_foldableMaybe);

// Data_FoldableWithIndex_foldl1
$Data_FoldableWithIndex_foldl1 = ($Data_Foldable_foldl)($Data_Foldable_foldableMaybe);

// Data_FoldableWithIndex_foldMap1
$Data_FoldableWithIndex_foldMap1 = ($Data_Foldable_foldMap)($Data_Foldable_foldableMaybe);

// Data_FoldableWithIndex_foldr2
$Data_FoldableWithIndex_foldr2 = ($Data_Foldable_foldr)($Data_Foldable_foldableLast);

// Data_FoldableWithIndex_foldl2
$Data_FoldableWithIndex_foldl2 = ($Data_Foldable_foldl)($Data_Foldable_foldableLast);

// Data_FoldableWithIndex_foldMap2
$Data_FoldableWithIndex_foldMap2 = ($Data_Foldable_foldMap)($Data_Foldable_foldableLast);

// Data_FoldableWithIndex_foldr3
$Data_FoldableWithIndex_foldr3 = ($Data_Foldable_foldr)($Data_Foldable_foldableFirst);

// Data_FoldableWithIndex_foldl3
$Data_FoldableWithIndex_foldl3 = ($Data_Foldable_foldl)($Data_Foldable_foldableFirst);

// Data_FoldableWithIndex_foldMap3
$Data_FoldableWithIndex_foldMap3 = ($Data_Foldable_foldMap)($Data_Foldable_foldableFirst);

// Data_FoldableWithIndex_foldr4
$Data_FoldableWithIndex_foldr4 = ($Data_Foldable_foldr)($Data_Foldable_foldableDual);

// Data_FoldableWithIndex_foldl4
$Data_FoldableWithIndex_foldl4 = ($Data_Foldable_foldl)($Data_Foldable_foldableDual);

// Data_FoldableWithIndex_foldMap4
$Data_FoldableWithIndex_foldMap4 = ($Data_Foldable_foldMap)($Data_Foldable_foldableDual);

// Data_FoldableWithIndex_foldr5
$Data_FoldableWithIndex_foldr5 = ($Data_Foldable_foldr)($Data_Foldable_foldableDisj);

// Data_FoldableWithIndex_foldl5
$Data_FoldableWithIndex_foldl5 = ($Data_Foldable_foldl)($Data_Foldable_foldableDisj);

// Data_FoldableWithIndex_foldMap5
$Data_FoldableWithIndex_foldMap5 = ($Data_Foldable_foldMap)($Data_Foldable_foldableDisj);

// Data_FoldableWithIndex_foldr6
$Data_FoldableWithIndex_foldr6 = ($Data_Foldable_foldr)($Data_Foldable_foldableConj);

// Data_FoldableWithIndex_foldl6
$Data_FoldableWithIndex_foldl6 = ($Data_Foldable_foldl)($Data_Foldable_foldableConj);

// Data_FoldableWithIndex_foldMap6
$Data_FoldableWithIndex_foldMap6 = ($Data_Foldable_foldMap)($Data_Foldable_foldableConj);

// Data_FoldableWithIndex_foldr7
$Data_FoldableWithIndex_foldr7 = ($Data_Foldable_foldr)($Data_Foldable_foldableAdditive);

// Data_FoldableWithIndex_foldl7
$Data_FoldableWithIndex_foldl7 = ($Data_Foldable_foldl)($Data_Foldable_foldableAdditive);

// Data_FoldableWithIndex_foldMap7
$Data_FoldableWithIndex_foldMap7 = ($Data_Foldable_foldMap)($Data_Foldable_foldableAdditive);

// Data_FoldableWithIndex_foldr8
$Data_FoldableWithIndex_foldr8 = ($Data_Foldable_foldr)($Data_Foldable_foldableArray);

// Data_FoldableWithIndex_mapWithIndex
$Data_FoldableWithIndex_mapWithIndex = ($Data_FunctorWithIndex_mapWithIndex)($Data_FunctorWithIndex_functorWithIndexArray);

// Data_FoldableWithIndex_foldl8
$Data_FoldableWithIndex_foldl8 = ($Data_Foldable_foldl)($Data_Foldable_foldableArray);

// Data_FoldableWithIndex_unwrap
$Data_FoldableWithIndex_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_FoldableWithIndex_monoidEndo
$Data_FoldableWithIndex_monoidEndo = ($Data_Monoid_Endo_monoidEndo)($Control_Category_categoryFn);

// Data_FoldableWithIndex_monoidDual
$Data_FoldableWithIndex_monoidDual = ($Data_Monoid_Dual_monoidDual)($Data_FoldableWithIndex_monoidEndo);

// Data_FoldableWithIndex_FoldableWithIndex$Dict
$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict = (function() {
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

// Data_FoldableWithIndex_foldrWithIndex
$Data_FoldableWithIndex_foldrWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldrWithIndex;
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

// Data_FoldableWithIndex_traverseWithIndex_
$Data_FoldableWithIndex_traverseWithIndex_ = (function() use (&$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, &$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_compose, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, &$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_compose, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applySecond = ($Control_Apply_applySecond)((($dictApplicative)->Apply0)($Prim_undefined));
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_compose, $applySecond, $pure, &$Data_Unit_unit) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_compose, $applySecond, $pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1, &$Data_FoldableWithIndex_compose, $applySecond, $pure, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldrWithIndex1, &$Data_FoldableWithIndex_compose, $applySecond, $pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldrWithIndex1)((function() use (&$Data_FoldableWithIndex_compose, $applySecond, $f) {
  $__fn = function($i) use (&$Data_FoldableWithIndex_compose, $applySecond, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)($applySecond, ($f)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($pure)($Data_Unit_unit));
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

// Data_FoldableWithIndex_forWithIndex_
$Data_FoldableWithIndex_forWithIndex_ = (function() use (&$Data_FoldableWithIndex_traverseWithIndex_, &$Data_Function_flip) {
  $__fn = function($dictApplicative) use (&$Data_FoldableWithIndex_traverseWithIndex_, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex_1 = ($Data_FoldableWithIndex_traverseWithIndex_)($dictApplicative);
    $__res = (function() use (&$Data_Function_flip, $traverseWithIndex_1) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_Function_flip, $traverseWithIndex_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)(($traverseWithIndex_1)($dictFoldableWithIndex));
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

// Data_FoldableWithIndex_foldrDefault
$Data_FoldableWithIndex_foldrDefault = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_Function_const) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1, &$Data_Function_const) {
  $__fn = function($f) use ($foldrWithIndex1, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldrWithIndex1)(($Data_Function_const)($f));
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

// Data_FoldableWithIndex_foldlWithIndex
$Data_FoldableWithIndex_foldlWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldlWithIndex;
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

// Data_FoldableWithIndex_foldlDefault
$Data_FoldableWithIndex_foldlDefault = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Function_const) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1, &$Data_Function_const) {
  $__fn = function($f) use ($foldlWithIndex1, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldlWithIndex1)(($Data_Function_const)($f));
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

// Data_FoldableWithIndex_foldableWithIndexTuple
$Data_FoldableWithIndex_foldableWithIndexTuple = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($f, $z, $v) use (&$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->values[1];
return ($f1)($Data_Unit_unit, $x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($f, $z, $v) use (&$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->values[1];
return ($f1)($Data_Unit_unit, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($dictMonoid, $f, $v) use (&$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[1];
return ($f1)($Data_Unit_unit, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexMultiplicative
$Data_FoldableWithIndex_foldableWithIndexMultiplicative = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexMaybe
$Data_FoldableWithIndex_foldableWithIndexMaybe = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr1, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr1)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl1, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl1)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap1, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap1)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexLast
$Data_FoldableWithIndex_foldableWithIndexLast = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr2, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr2, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr2)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl2, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl2, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl2)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap2, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap2, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap2)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableLast) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexIdentity
$Data_FoldableWithIndex_foldableWithIndexIdentity = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($f, $z, $v) use (&$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($Data_Unit_unit, $x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($f, $z, $v) use (&$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($Data_Unit_unit, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($dictMonoid, $f, $v) use (&$Data_Unit_unit) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($Data_Unit_unit, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexFirst
$Data_FoldableWithIndex_foldableWithIndexFirst = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr3, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr3, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr3)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl3, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl3, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl3)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap3, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap3, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap3)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexEither
$Data_FoldableWithIndex_foldableWithIndexEither = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($v, $v1, $v2) use (&$Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$z = $__case_1;
return $z;
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($Data_Unit_unit, $x, $z);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Unit_unit, $__body, &$__fn) {
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
})(), "foldlWithIndex" => (function() use (&$Data_Unit_unit) {
  $__body = function($v, $v1, $v2) use (&$Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$z = $__case_1;
return $z;
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($Data_Unit_unit, $z, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Unit_unit, $__body, &$__fn) {
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
})(), "foldMapWithIndex" => (function() use (&$Data_Monoid_mempty, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($mempty, &$Data_Unit_unit) {
  $__body = function($v, $v1) use ($mempty, &$Data_Unit_unit) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
return $mempty;
} else {
;
};
    if ((($__case_1)->tag === "Right")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($f)($Data_Unit_unit, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($mempty, &$Data_Unit_unit, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableEither) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexDual
$Data_FoldableWithIndex_foldableWithIndexDual = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr4, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr4, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr4)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl4, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl4, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl4)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap4, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap4, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap4)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableDual) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexDisj
$Data_FoldableWithIndex_foldableWithIndexDisj = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr5, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr5, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr5)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl5, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl5, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl5)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap5, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap5, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap5)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexConst
$Data_FoldableWithIndex_foldableWithIndexConst = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $z;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $z;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($mempty) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableConst) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexConj
$Data_FoldableWithIndex_foldableWithIndexConj = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr6, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr6, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr6)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl6, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl6, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl6)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap6, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap6, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap6)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableConj) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexAdditive
$Data_FoldableWithIndex_foldableWithIndexAdditive = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_foldr7, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldr7, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldr7)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_foldl7, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Data_FoldableWithIndex_foldl7, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldl7)(($f)($Data_Unit_unit));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMap7, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMap7, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap8 = ($Data_FoldableWithIndex_foldMap7)($dictMonoid);
    $__res = (function() use ($foldMap8, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldMap8, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap8)(($f)($Data_Unit_unit));
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
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldWithIndexM
$Data_FoldableWithIndex_foldWithIndexM = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Function_flip) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
    $__res = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, $foldlWithIndex1, &$Data_Function_flip) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, $foldlWithIndex1, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use ($foldlWithIndex1, $bind, &$Data_Function_flip, $pure) {
  $__fn = function($f, $a0 = null) use ($foldlWithIndex1, $bind, &$Data_Function_flip, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldlWithIndex1)((function() use ($bind, &$Data_Function_flip, $f) {
  $__fn = function($i, $ma = null, $b = null) use ($bind, &$Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($ma, ($Data_Function_flip)(($f)($i), $b));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), ($pure)($a0));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Data_FoldableWithIndex_foldMapWithIndexDefaultR
$Data_FoldableWithIndex_foldMapWithIndexDefaultR = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldrWithIndex1) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldrWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($foldrWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldrWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldrWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $x = null, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($f)($i, $x), $acc);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $mempty);
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

// Data_FoldableWithIndex_foldableWithIndexArray
$Data_FoldableWithIndex_foldableWithIndexArray = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_foldr8, &$Data_FoldableWithIndex_mapWithIndex, &$Data_Tuple_Tuple) {
  $__fn = function($f, $z = null) use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_foldr8, &$Data_FoldableWithIndex_mapWithIndex, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)(($Data_FoldableWithIndex_foldr8)((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return (function() use ($f, $i, $x) {
  $__fn = function($y) use ($f, $i, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($i, $x, $y);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
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
})(), $z), ($Data_FoldableWithIndex_mapWithIndex)($Data_Tuple_Tuple));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_foldl8, &$Data_FoldableWithIndex_mapWithIndex, &$Data_Tuple_Tuple) {
  $__fn = function($f, $z = null) use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_foldl8, &$Data_FoldableWithIndex_mapWithIndex, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)(($Data_FoldableWithIndex_foldl8)((function() use ($f) {
  $__body = function($y, $v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($f)($i, $y, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($y, $v = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($y, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($y, $v);
  };
  return $__fn;
})(), $z), ($Data_FoldableWithIndex_mapWithIndex)($Data_Tuple_Tuple));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_FoldableWithIndex_foldMapWithIndexDefaultR, &$Data_FoldableWithIndex_foldableWithIndexArray) {
  $__fn = function($dictMonoid) use (&$Data_FoldableWithIndex_foldMapWithIndexDefaultR, &$Data_FoldableWithIndex_foldableWithIndexArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_foldMapWithIndexDefaultR)($Data_FoldableWithIndex_foldableWithIndexArray, $dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use (&$Data_Foldable_foldableArray) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldMapWithIndexDefaultL
$Data_FoldableWithIndex_foldMapWithIndexDefaultL = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldlWithIndex1) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($foldlWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldlWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldlWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $acc = null, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)($acc, ($f)($i, $x));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), $mempty);
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

// Data_FoldableWithIndex_foldMapWithIndex
$Data_FoldableWithIndex_foldMapWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMapWithIndex;
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

// Data_FoldableWithIndex_foldableWithIndexApp
$Data_FoldableWithIndex_foldableWithIndexApp = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableApp, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableApp, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
$foldableApp = ($Data_Foldable_foldableApp)((($dictFoldableWithIndex)->Foldable0)($Prim_undefined));
    $__res = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use ($foldrWithIndex1) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldrWithIndex1)($f1, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldlWithIndex1)($f1, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2) {
  $__body = function($f, $v) use ($foldMapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMapWithIndex2)($f1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex2, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableApp;
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

// Data_FoldableWithIndex_foldableWithIndexCompose
$Data_FoldableWithIndex_foldableWithIndexCompose = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableCompose, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Function_flip, &$Data_Tuple_curry, &$Data_FoldableWithIndex_compose) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableCompose, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Function_flip, &$Data_Tuple_curry, &$Data_FoldableWithIndex_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
$foldableCompose = ($Data_Foldable_foldableCompose)((($dictFoldableWithIndex)->Foldable0)($Prim_undefined));
    $__res = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, $foldableCompose, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, $foldrWithIndex1, &$Data_Function_flip, &$Data_Tuple_curry, $foldlWithIndex1, &$Data_FoldableWithIndex_compose, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, $foldableCompose, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, $foldrWithIndex1, &$Data_Function_flip, &$Data_Tuple_curry, $foldlWithIndex1, &$Data_FoldableWithIndex_compose, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex2 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex1);
$foldlWithIndex2 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex1);
$foldMapWithIndex2 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex1);
$foldableCompose1 = ($foldableCompose)((($dictFoldableWithIndex1)->Foldable0)($Prim_undefined));
    $__res = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, &$Data_Function_flip, $foldrWithIndex2, &$Data_Tuple_curry) {
  $__body = function($f, $i, $v) use ($foldrWithIndex1, &$Data_Function_flip, $foldrWithIndex2, &$Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldrWithIndex1)((function() use (&$Data_Function_flip, $foldrWithIndex2, &$Data_Tuple_curry, $f1) {
  $__fn = function($a) use (&$Data_Function_flip, $foldrWithIndex2, &$Data_Tuple_curry, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)(($foldrWithIndex2)(($Data_Tuple_curry)($f1, $a)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $i1, $fga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $i = null, $v = null) use ($foldrWithIndex1, &$Data_Function_flip, $foldrWithIndex2, &$Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $i, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $i, $v);
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1, &$Data_FoldableWithIndex_compose, $foldlWithIndex2, &$Data_Tuple_curry) {
  $__body = function($f, $i, $v) use ($foldlWithIndex1, &$Data_FoldableWithIndex_compose, $foldlWithIndex2, &$Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldlWithIndex1)(($Data_FoldableWithIndex_compose)($foldlWithIndex2, ($Data_Tuple_curry)($f1)), $i1, $fga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $i = null, $v = null) use ($foldlWithIndex1, &$Data_FoldableWithIndex_compose, $foldlWithIndex2, &$Data_Tuple_curry, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $i, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $i, $v);
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2, &$Data_FoldableWithIndex_compose, &$Data_Tuple_curry) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$Data_FoldableWithIndex_compose, &$Data_Tuple_curry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex3, &$Data_FoldableWithIndex_compose, $foldMapWithIndex4, &$Data_Tuple_curry) {
  $__body = function($f, $v) use ($foldMapWithIndex3, &$Data_FoldableWithIndex_compose, $foldMapWithIndex4, &$Data_Tuple_curry) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMapWithIndex3)(($Data_FoldableWithIndex_compose)($foldMapWithIndex4, ($Data_Tuple_curry)($f1)), $fga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex3, &$Data_FoldableWithIndex_compose, $foldMapWithIndex4, &$Data_Tuple_curry, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableCompose1;
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

// Data_FoldableWithIndex_foldableWithIndexCoproduct
$Data_FoldableWithIndex_foldableWithIndexCoproduct = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableCoproduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Functor_Coproduct_coproduct, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableCoproduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Functor_Coproduct_coproduct, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
$foldableCoproduct = ($Data_Foldable_foldableCoproduct)((($dictFoldableWithIndex)->Foldable0)($Prim_undefined));
    $__res = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, $foldableCoproduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Functor_Coproduct_coproduct, $foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, $foldableCoproduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_Functor_Coproduct_coproduct, $foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex2 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex1);
$foldlWithIndex2 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex1);
$foldMapWithIndex2 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex1);
$foldableCoproduct1 = ($foldableCoproduct)((($dictFoldableWithIndex1)->Foldable0)($Prim_undefined));
    $__res = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use (&$Data_Functor_Coproduct_coproduct, $foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldrWithIndex2, &$Data_Either_Right) {
  $__fn = function($f, $z = null) use (&$Data_Functor_Coproduct_coproduct, $foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldrWithIndex2, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($foldrWithIndex1)(($Data_FoldableWithIndex_compose)($f, $Data_Either_Left), $z), ($foldrWithIndex2)(($Data_FoldableWithIndex_compose)($f, $Data_Either_Right), $z));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$Data_Functor_Coproduct_coproduct, $foldlWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldlWithIndex2, &$Data_Either_Right) {
  $__fn = function($f, $z = null) use (&$Data_Functor_Coproduct_coproduct, $foldlWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldlWithIndex2, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($foldlWithIndex1)(($Data_FoldableWithIndex_compose)($f, $Data_Either_Left), $z), ($foldlWithIndex2)(($Data_FoldableWithIndex_compose)($f, $Data_Either_Right), $z));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2, &$Data_Functor_Coproduct_coproduct, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$Data_Functor_Coproduct_coproduct, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use (&$Data_Functor_Coproduct_coproduct, $foldMapWithIndex3, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldMapWithIndex4, &$Data_Either_Right) {
  $__fn = function($f) use (&$Data_Functor_Coproduct_coproduct, $foldMapWithIndex3, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldMapWithIndex4, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($foldMapWithIndex3)(($Data_FoldableWithIndex_compose)($f, $Data_Either_Left)), ($foldMapWithIndex4)(($Data_FoldableWithIndex_compose)($f, $Data_Either_Right)));
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
})(), "Foldable0" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableCoproduct1;
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

// Data_FoldableWithIndex_foldableWithIndexProduct
$Data_FoldableWithIndex_foldableWithIndexProduct = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableProduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$Data_Semigroup_append) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Foldable_foldableProduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex1 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
$foldableProduct = ($Data_Foldable_foldableProduct)((($dictFoldableWithIndex)->Foldable0)($Prim_undefined));
    $__res = (function() use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, $foldableProduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, $foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, $foldlWithIndex1, &$Data_Semigroup_append, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use (&$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, $foldableProduct, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, $foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, $foldlWithIndex1, &$Data_Semigroup_append, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldrWithIndex2 = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex1);
$foldlWithIndex2 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex1);
$foldMapWithIndex2 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex1);
$foldableProduct1 = ($foldableProduct)((($dictFoldableWithIndex1)->Foldable0)($Prim_undefined));
    $__res = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldrWithIndex2, &$Data_Either_Right) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldrWithIndex2, &$Data_Either_Right) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->values[0];
$ga = ($__case_2)->values[1];
return ($foldrWithIndex1)(($Data_FoldableWithIndex_compose)($f1, $Data_Either_Left), ($foldrWithIndex2)(($Data_FoldableWithIndex_compose)($f1, $Data_Either_Right), $z1, $ga), $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldrWithIndex2, &$Data_Either_Right, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex2, &$Data_FoldableWithIndex_compose, &$Data_Either_Right, $foldlWithIndex1, &$Data_Either_Left) {
  $__body = function($f, $z, $v) use ($foldlWithIndex2, &$Data_FoldableWithIndex_compose, &$Data_Either_Right, $foldlWithIndex1, &$Data_Either_Left) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->values[0];
$ga = ($__case_2)->values[1];
return ($foldlWithIndex2)(($Data_FoldableWithIndex_compose)($f1, $Data_Either_Right), ($foldlWithIndex1)(($Data_FoldableWithIndex_compose)($f1, $Data_Either_Left), $z1, $fa), $ga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex2, &$Data_FoldableWithIndex_compose, &$Data_Either_Right, $foldlWithIndex1, &$Data_Either_Left, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, $foldMapWithIndex1, $foldMapWithIndex2, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, $foldMapWithIndex1, $foldMapWithIndex2, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($append, $foldMapWithIndex3, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldMapWithIndex4, &$Data_Either_Right) {
  $__body = function($f, $v) use ($append, $foldMapWithIndex3, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldMapWithIndex4, &$Data_Either_Right) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$fa = ($__case_1)->values[0];
$ga = ($__case_1)->values[1];
return ($append)(($foldMapWithIndex3)(($Data_FoldableWithIndex_compose)($f1, $Data_Either_Left), $fa), ($foldMapWithIndex4)(($Data_FoldableWithIndex_compose)($f1, $Data_Either_Right), $ga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($append, $foldMapWithIndex3, &$Data_FoldableWithIndex_compose, &$Data_Either_Left, $foldMapWithIndex4, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableProduct1;
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

// Data_FoldableWithIndex_foldlWithIndexDefault
$Data_FoldableWithIndex_foldlWithIndexDefault = (function() use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_monoidDual, &$Data_FoldableWithIndex_unwrap, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_monoidDual, &$Data_FoldableWithIndex_unwrap, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex, $Data_FoldableWithIndex_monoidDual);
    $__res = (function() use (&$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip) {
  $__fn = function($c, $u = null, $xs = null) use (&$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_unwrap)(($Data_FoldableWithIndex_unwrap)(($foldMapWithIndex1)((function() use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, $c) {
  $__fn = function($i) use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, $c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)($Data_Monoid_Dual_Dual, ($Data_FoldableWithIndex_compose)($Data_Monoid_Endo_Endo, ($Data_Function_flip)(($c)($i))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs)), $u);
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

// Data_FoldableWithIndex_foldrWithIndexDefault
$Data_FoldableWithIndex_foldrWithIndexDefault = (function() use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_monoidEndo, &$Data_FoldableWithIndex_unwrap, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Endo_Endo) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_monoidEndo, &$Data_FoldableWithIndex_unwrap, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex, $Data_FoldableWithIndex_monoidEndo);
    $__res = (function() use (&$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Endo_Endo) {
  $__fn = function($c, $u = null, $xs = null) use (&$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$Data_FoldableWithIndex_compose, &$Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_unwrap)(($foldMapWithIndex1)((function() use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Endo_Endo, $c) {
  $__fn = function($i) use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Endo_Endo, $c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)($Data_Monoid_Endo_Endo, ($c)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $xs), $u);
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

// Data_FoldableWithIndex_surroundMapWithIndex
$Data_FoldableWithIndex_surroundMapWithIndex = (function() use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_monoidEndo, &$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_FoldableWithIndex_unwrap) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_FoldableWithIndex_monoidEndo, &$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_FoldableWithIndex_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex, $Data_FoldableWithIndex_monoidEndo);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use (&$Data_Monoid_Endo_Endo, $append, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1) {
  $__fn = function($d, $t = null, $f = null) use (&$Data_Monoid_Endo_Endo, $append, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$joined = (function() use (&$Data_Monoid_Endo_Endo, $append, $d, $t) {
  $__fn = function($i, $a = null) use (&$Data_Monoid_Endo_Endo, $append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Monoid_Endo_Endo)((function() use ($append, $d, $t, $i, $a) {
  $__fn = function($m) use ($append, $d, $t, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)($d, ($append)(($t)($i, $a), $m));
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
})();
    $__res = ($Data_FoldableWithIndex_unwrap)(($foldMapWithIndex1)($joined, $f), $d);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldMapDefault
$Data_FoldableWithIndex_foldMapDefault = (function() use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Function_const) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1, &$Data_Function_const) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2, &$Data_Function_const) {
  $__fn = function($f) use ($foldMapWithIndex2, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMapWithIndex2)(($Data_Function_const)($f));
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

// Data_FoldableWithIndex_findWithIndex
$Data_FoldableWithIndex_findWithIndex = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1, &$Data_Maybe_Nothing) {
  $__fn = function($p) use ($foldlWithIndex1, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nothing")) {
$i = $__case_0;
$x = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if (true) {
$r = $__case_1;
return $r;
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
    $__res = ($foldlWithIndex1)($go, $Data_Maybe_Nothing);
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

// Data_FoldableWithIndex_findMapWithIndex
$Data_FoldableWithIndex_findMapWithIndex = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldlWithIndex1 = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1, &$Data_Maybe_Nothing) {
  $__fn = function($f) use ($foldlWithIndex1, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($f) {
  $__body = function($v, $v1, $v2) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nothing")) {
$i = $__case_0;
$x = $__case_2;
return ($f)($i, $x);
} else {
;
};
    if (true) {
$r = $__case_1;
return $r;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($f, $__body, &$__fn) {
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
    $__res = ($foldlWithIndex1)($go, $Data_Maybe_Nothing);
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

// Data_FoldableWithIndex_anyWithIndex
$Data_FoldableWithIndex_anyWithIndex = (function() use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Monoid_Disj_monoidDisj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Disj_Disj) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Monoid_Disj_monoidDisj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1, &$Data_Monoid_Disj_monoidDisj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Disj_Disj) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, &$Data_Monoid_Disj_monoidDisj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)(($Data_Monoid_Disj_monoidDisj)($dictHeytingAlgebra));
    $__res = (function() use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, &$Data_Monoid_Disj_Disj) {
  $__fn = function($t) use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)($Data_FoldableWithIndex_unwrap, ($foldMapWithIndex2)((function() use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Disj_Disj, $t) {
  $__fn = function($i) use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Disj_Disj, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)($Data_Monoid_Disj_Disj, ($t)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
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

// Data_FoldableWithIndex_allWithIndex
$Data_FoldableWithIndex_allWithIndex = (function() use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Monoid_Conj_monoidConj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Conj_Conj) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldMapWithIndex, &$Data_Monoid_Conj_monoidConj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1, &$Data_Monoid_Conj_monoidConj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Conj_Conj) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, &$Data_Monoid_Conj_monoidConj, &$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex2 = ($foldMapWithIndex1)(($Data_Monoid_Conj_monoidConj)($dictHeytingAlgebra));
    $__res = (function() use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, &$Data_Monoid_Conj_Conj) {
  $__fn = function($t) use (&$Data_FoldableWithIndex_compose, &$Data_FoldableWithIndex_unwrap, $foldMapWithIndex2, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)($Data_FoldableWithIndex_unwrap, ($foldMapWithIndex2)((function() use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Conj_Conj, $t) {
  $__fn = function($i) use (&$Data_FoldableWithIndex_compose, &$Data_Monoid_Conj_Conj, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_FoldableWithIndex_compose)($Data_Monoid_Conj_Conj, ($t)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
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

