<?php

namespace Control\Comonad\Env\Trans;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Env_Trans_map
$Control_Comonad_Env_Trans_map = ($Data_Functor_map)($Data_Functor_functorFn);

// Control_Comonad_Env_Trans_composeFlipped
$Control_Comonad_Env_Trans_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Control_Comonad_Env_Trans_EnvT
$Control_Comonad_Env_Trans_EnvT = (function() {
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

// Control_Comonad_Env_Trans_withEnvT
$Control_Comonad_Env_Trans_withEnvT = (function() use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__body = function($f, $v) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($Control_Comonad_Env_Trans_EnvT)(($Data_Tuple_Tuple)(($f1)($e), $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $__body, &$__fn) {
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

// Control_Comonad_Env_Trans_runEnvT
$Control_Comonad_Env_Trans_runEnvT = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
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

// Control_Comonad_Env_Trans_newtypeEnvT
$Control_Comonad_Env_Trans_newtypeEnvT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Comonad_Env_Trans_mapEnvT
$Control_Comonad_Env_Trans_mapEnvT = (function() use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__body = function($f, $v) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($Control_Comonad_Env_Trans_EnvT)(($Data_Tuple_Tuple)($e, ($f1)($x)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $__body, &$__fn) {
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

// Control_Comonad_Env_Trans_functorEnvT
$Control_Comonad_Env_Trans_functorEnvT = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $map1) {
  $__body = function($f, $v) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($Control_Comonad_Env_Trans_EnvT)(($Data_Tuple_Tuple)($e, ($map1)($f1, $x)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $map1, $__body, &$__fn) {
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

// Control_Comonad_Env_Trans_functorWithIndexEnvT
$Control_Comonad_Env_Trans_functorWithIndexEnvT = (function() use (&$Data_FunctorWithIndex_mapWithIndex, &$Control_Comonad_Env_Trans_functorEnvT, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictFunctorWithIndex) use (&$Data_FunctorWithIndex_mapWithIndex, &$Control_Comonad_Env_Trans_functorEnvT, &$Prim_undefined, &$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapWithIndex = ($Data_FunctorWithIndex_mapWithIndex)($dictFunctorWithIndex);
$functorEnvT1 = ($Control_Comonad_Env_Trans_functorEnvT)((($dictFunctorWithIndex)->Functor0)($Prim_undefined));
    $__res = ($Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict)((object)["mapWithIndex" => (function() use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $mapWithIndex) {
  $__body = function($f, $v) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $mapWithIndex) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($Control_Comonad_Env_Trans_EnvT)(($Data_Tuple_Tuple)($e, ($mapWithIndex)($f1, $x)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $mapWithIndex, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorEnvT1) {
  $__fn = function($__dollar____unused) use ($functorEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorEnvT1;
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

// Control_Comonad_Env_Trans_foldableEnvT
$Control_Comonad_Env_Trans_foldableEnvT = (function() use (&$Data_Foldable_foldl, &$Data_Foldable_foldr, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Foldable_foldr, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl = ($Data_Foldable_foldl)($dictFoldable);
$foldr = ($Data_Foldable_foldr)($dictFoldable);
$foldMap = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldl" => (function() use ($foldl) {
  $__body = function($fn, $a, $v) use ($foldl) {
    $__case_0 = $fn;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldl)($fn1, $a1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($fn, $a = null, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($fn, $a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($fn, $a, $v);
  };
  return $__fn;
})(), "foldr" => (function() use ($foldr) {
  $__body = function($fn, $a, $v) use ($foldr) {
    $__case_0 = $fn;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldr)($fn1, $a1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($fn, $a = null, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($fn, $a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($fn, $a, $v);
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($fn, $v) use ($foldMap1) {
    $__case_0 = $fn;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$fn1 = $__case_0;
$x = ($__case_1)->values[1];
return ($foldMap1)($fn1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($fn, $v = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($fn, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($fn, $v);
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

// Control_Comonad_Env_Trans_foldableWithIndexEnvT
$Control_Comonad_Env_Trans_foldableWithIndexEnvT = (function() use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Control_Comonad_Env_Trans_foldableEnvT, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict) {
  $__fn = function($dictFoldableWithIndex) use (&$Data_FoldableWithIndex_foldlWithIndex, &$Data_FoldableWithIndex_foldrWithIndex, &$Data_FoldableWithIndex_foldMapWithIndex, &$Control_Comonad_Env_Trans_foldableEnvT, &$Prim_undefined, &$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldlWithIndex = ($Data_FoldableWithIndex_foldlWithIndex)($dictFoldableWithIndex);
$foldrWithIndex = ($Data_FoldableWithIndex_foldrWithIndex)($dictFoldableWithIndex);
$foldMapWithIndex = ($Data_FoldableWithIndex_foldMapWithIndex)($dictFoldableWithIndex);
$foldableEnvT1 = ($Control_Comonad_Env_Trans_foldableEnvT)((($dictFoldableWithIndex)->Foldable0)($Prim_undefined));
    $__res = ($Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict)((object)["foldlWithIndex" => (function() use ($foldlWithIndex) {
  $__body = function($f, $a, $v) use ($foldlWithIndex) {
    $__case_0 = $f;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldlWithIndex)($f1, $a1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $a = null, $v = null) use ($foldlWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $a, $v);
  };
  return $__fn;
})(), "foldrWithIndex" => (function() use ($foldrWithIndex) {
  $__body = function($f, $a, $v) use ($foldrWithIndex) {
    $__case_0 = $f;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldrWithIndex)($f1, $a1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $a = null, $v = null) use ($foldrWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $a, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $a, $v);
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1) {
  $__body = function($f, $v) use ($foldMapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[1];
return ($foldMapWithIndex1)($f1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableEnvT1;
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

// Control_Comonad_Env_Trans_traversableEnvT
$Control_Comonad_Env_Trans_traversableEnvT = (function() use (&$Data_Traversable_sequence, &$Data_Traversable_traverse, &$Control_Comonad_Env_Trans_functorEnvT, &$Prim_undefined, &$Control_Comonad_Env_Trans_foldableEnvT, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_sequence, &$Data_Traversable_traverse, &$Control_Comonad_Env_Trans_functorEnvT, &$Prim_undefined, &$Control_Comonad_Env_Trans_foldableEnvT, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence = ($Data_Traversable_sequence)($dictTraversable);
$traverse = ($Data_Traversable_traverse)($dictTraversable);
$functorEnvT1 = ($Control_Comonad_Env_Trans_functorEnvT)((($dictTraversable)->Functor0)($Prim_undefined));
$foldableEnvT1 = ($Control_Comonad_Env_Trans_foldableEnvT)((($dictTraversable)->Foldable1)($Prim_undefined));
    $__res = ($Data_Traversable_Traversable__dollar__Dict)((object)["sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, $sequence, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $sequence, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $sequence1) {
  $__body = function($v) use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $sequence1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($map1)(($Control_Comonad_Env_Trans_map)($Control_Comonad_Env_Trans_EnvT, ($Data_Tuple_Tuple)($a)), ($sequence1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $sequence1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverse, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverse, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $traverse1) {
  $__body = function($f, $v) use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($map1)(($Control_Comonad_Env_Trans_map)($Control_Comonad_Env_Trans_EnvT, ($Data_Tuple_Tuple)($a)), ($traverse1)($f1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $traverse1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorEnvT1) {
  $__fn = function($__dollar____unused) use ($functorEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorEnvT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableEnvT1;
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

// Control_Comonad_Env_Trans_traversableWithIndexEnvT
$Control_Comonad_Env_Trans_traversableWithIndexEnvT = (function() use (&$Data_TraversableWithIndex_traverseWithIndex, &$Control_Comonad_Env_Trans_functorWithIndexEnvT, &$Prim_undefined, &$Control_Comonad_Env_Trans_foldableWithIndexEnvT, &$Control_Comonad_Env_Trans_traversableEnvT, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictTraversableWithIndex) use (&$Data_TraversableWithIndex_traverseWithIndex, &$Control_Comonad_Env_Trans_functorWithIndexEnvT, &$Prim_undefined, &$Control_Comonad_Env_Trans_foldableWithIndexEnvT, &$Control_Comonad_Env_Trans_traversableEnvT, &$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict, &$Data_Functor_map, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverseWithIndex = ($Data_TraversableWithIndex_traverseWithIndex)($dictTraversableWithIndex);
$functorWithIndexEnvT1 = ($Control_Comonad_Env_Trans_functorWithIndexEnvT)((($dictTraversableWithIndex)->FunctorWithIndex0)($Prim_undefined));
$foldableWithIndexEnvT1 = ($Control_Comonad_Env_Trans_foldableWithIndexEnvT)((($dictTraversableWithIndex)->FoldableWithIndex1)($Prim_undefined));
$traversableEnvT1 = ($Control_Comonad_Env_Trans_traversableEnvT)((($dictTraversableWithIndex)->Traversable2)($Prim_undefined));
    $__res = ($Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict)((object)["traverseWithIndex" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverseWithIndex, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverseWithIndex1 = ($traverseWithIndex)($dictApplicative);
    $__res = (function() use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $traverseWithIndex1) {
  $__body = function($f, $v) use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $traverseWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($map1)(($Control_Comonad_Env_Trans_map)($Control_Comonad_Env_Trans_EnvT, ($Data_Tuple_Tuple)($e)), ($traverseWithIndex1)($f1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map1, &$Control_Comonad_Env_Trans_map, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $traverseWithIndex1, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexEnvT1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorWithIndexEnvT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableWithIndexEnvT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableEnvT1) {
  $__fn = function($__dollar____unused) use ($traversableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $traversableEnvT1;
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

// Control_Comonad_Env_Trans_extendEnvT
$Control_Comonad_Env_Trans_extendEnvT = (function() use (&$Prim_undefined, &$Data_Functor_map, &$Control_Extend_extend, &$Control_Comonad_Env_Trans_functorEnvT, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$Control_Comonad_Env_Trans_composeFlipped) {
  $__fn = function($dictExtend) use (&$Prim_undefined, &$Data_Functor_map, &$Control_Extend_extend, &$Control_Comonad_Env_Trans_functorEnvT, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$Control_Comonad_Env_Trans_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Functor0 = (($dictExtend)->Functor0)($Prim_undefined);
$map1 = ($Data_Functor_map)($Functor0);
$extend = ($Control_Extend_extend)($dictExtend);
$functorEnvT1 = ($Control_Comonad_Env_Trans_functorEnvT)($Functor0);
    $__res = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $map1, $extend, &$Control_Comonad_Env_Trans_composeFlipped) {
  $__body = function($f, $v) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $map1, $extend, &$Control_Comonad_Env_Trans_composeFlipped) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($Control_Comonad_Env_Trans_EnvT)(($Data_Tuple_Tuple)($e, ($map1)($f1, ($extend)(($Control_Comonad_Env_Trans_composeFlipped)(($Data_Tuple_Tuple)($e), $Control_Comonad_Env_Trans_EnvT), $x))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, $map1, $extend, &$Control_Comonad_Env_Trans_composeFlipped, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorEnvT1) {
  $__fn = function($__dollar____unused) use ($functorEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorEnvT1;
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

// Control_Comonad_Env_Trans_comonadTransEnvT
$Control_Comonad_Env_Trans_comonadTransEnvT = ($Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict)((object)["lower" => (function() {
  $__body = function($dictComonad, $v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[1];
return $x;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictComonad, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($dictComonad, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($dictComonad, $v);
  };
  return $__fn;
})()]);

// Control_Comonad_Env_Trans_comonadEnvT
$Control_Comonad_Env_Trans_comonadEnvT = (function() use (&$Control_Comonad_extract, &$Control_Comonad_Env_Trans_extendEnvT, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict) {
  $__fn = function($dictComonad) use (&$Control_Comonad_extract, &$Control_Comonad_Env_Trans_extendEnvT, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extract = ($Control_Comonad_extract)($dictComonad);
$extendEnvT1 = ($Control_Comonad_Env_Trans_extendEnvT)((($dictComonad)->Extend0)($Prim_undefined));
    $__res = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => (function() use ($extract) {
  $__body = function($v) use ($extract) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[1];
return ($extract)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($extract, $__body, &$__fn) {
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
})(), "Extend0" => (function() use ($extendEnvT1) {
  $__fn = function($__dollar____unused) use ($extendEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $extendEnvT1;
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

