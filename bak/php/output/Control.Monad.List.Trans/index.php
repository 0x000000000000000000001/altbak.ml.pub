<?php

namespace Control\Monad\List\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_List_Trans_compose
$Control_Monad_List_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_List_Trans_map
$Control_Monad_List_Trans_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Control_Monad_List_Trans_map1
$Control_Monad_List_Trans_map1 = ($Data_Functor_map)($Data_Lazy_functorLazy);

// Control_Monad_List_Trans_sub
$Control_Monad_List_Trans_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Control_Monad_List_Trans_identity
$Control_Monad_List_Trans_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Control_Monad_List_Trans_pure
$Control_Monad_List_Trans_pure = ($Control_Applicative_pure)($Data_Lazy_applicativeLazy);

// Control_Monad_List_Trans_Yield
$Control_Monad_List_Trans_Yield = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Yield", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_Skip
$Control_Monad_List_Trans_Skip = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Skip", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_Done
$Control_Monad_List_Trans_Done = (object)["tag" => "Done", "values" => []];

// Control_Monad_List_Trans_ListT
$Control_Monad_List_Trans_ListT = (function() {
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

// Control_Monad_List_Trans_wrapLazy
$Control_Monad_List_Trans_wrapLazy = (function() use (&$Control_Applicative_pure, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_Skip) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_Skip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Control_Monad_List_Trans_ListT, $pure1, &$Control_Monad_List_Trans_Skip) {
  $__fn = function($v) use (&$Control_Monad_List_Trans_ListT, $pure1, &$Control_Monad_List_Trans_Skip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_ListT)(($pure1)(($Control_Monad_List_Trans_Skip)($v)));
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

// Control_Monad_List_Trans_wrapEffect
$Control_Monad_List_Trans_wrapEffect = (function() use (&$Data_Functor_map, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Control_Monad_List_Trans_ListT, $map2, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const) {
  $__fn = function($v) use (&$Control_Monad_List_Trans_ListT, $map2, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_ListT)(($map2)(($Control_Monad_List_Trans_compose)($Control_Monad_List_Trans_Skip, ($Control_Monad_List_Trans_compose)($Data_Lazy_defer, $Data_Function_const)), $v));
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

// Control_Monad_List_Trans_unfold
$Control_Monad_List_Trans_unfold = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_ListT) {
  $__fn = function($dictMonad) use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_ListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_ListT) {
while (true) {
$map2 = ($Data_Functor_map)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, $dictMonad, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_ListT, $map2) {
  $__fn = function($f, $z = null) use (&$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, $dictMonad, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_ListT, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use (&$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, $dictMonad, $f, &$Control_Monad_List_Trans_Done) {
  $__body = function($v) use (&$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, $dictMonad, $f, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->values[0])->values[0];
$a = (($__case_0)->values[0])->values[1];
return ($Control_Monad_List_Trans_Yield)($a, ($Data_Lazy_defer)((function() use (&$Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__) {
  $__fn = function($v1) use (&$Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_unfold)($dictMonad, $f, $z__prime__);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$Control_Monad_List_Trans_unfold, $dictMonad, $f, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
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
    $__res = ($Control_Monad_List_Trans_ListT)(($map2)($g, ($f)($z)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_uncons
$Control_Monad_List_Trans_uncons = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, &$Data_Maybe_Nothing) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, &$Data_Maybe_Nothing) {
while (true) {
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return (function() use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, $dictMonad, &$Data_Maybe_Nothing, $bind) {
  $__body = function($v) use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, $dictMonad, &$Data_Maybe_Nothing, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, $dictMonad, &$Data_Maybe_Nothing) {
  $__body = function($v1) use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, $dictMonad, &$Data_Maybe_Nothing) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($pure1)(($Data_Maybe_Just)(($Data_Tuple_Tuple)($a, ($Data_Lazy_force)($s))));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_uncons)($dictMonad, ($Data_Lazy_force)($s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return ($pure1)($Data_Maybe_Nothing);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, $dictMonad, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v1);
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Control_Monad_List_Trans_uncons, $dictMonad, &$Data_Maybe_Nothing, $bind, $__body, &$__fn) {
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
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_tail
$Control_Monad_List_Trans_tail = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_uncons, &$Control_Monad_List_Trans_map, &$Data_Tuple_snd) {
  $__fn = function($dictMonad) use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_uncons, &$Control_Monad_List_Trans_map, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$uncons1 = ($Control_Monad_List_Trans_uncons)($dictMonad);
    $__res = (function() use ($map2, &$Control_Monad_List_Trans_map, &$Data_Tuple_snd, $uncons1) {
  $__fn = function($l) use ($map2, &$Control_Monad_List_Trans_map, &$Data_Tuple_snd, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map2)(($Control_Monad_List_Trans_map)($Data_Tuple_snd), ($uncons1)($l));
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

// Control_Monad_List_Trans_stepMap
$Control_Monad_List_Trans_stepMap = (function() use (&$Data_Functor_map, &$Control_Monad_List_Trans_ListT) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Control_Monad_List_Trans_ListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Control_Monad_List_Trans_ListT, $map2) {
  $__body = function($f, $v) use (&$Control_Monad_List_Trans_ListT, $map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($Control_Monad_List_Trans_ListT)(($map2)($f1, $l));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_List_Trans_ListT, $map2, $__body, &$__fn) {
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
})();

// Control_Monad_List_Trans_takeWhile
$Control_Monad_List_Trans_takeWhile = (function() use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip) {
while (true) {
$stepMap1 = ($Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, $dictApplicative, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip, $stepMap1) {
  $__fn = function($f) use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, $dictApplicative, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($f, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, $dictApplicative, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip) {
  $__body = function($v) use ($f, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, $dictApplicative, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$__case_0 = ($f)($a);
if (($__case_0 === true)) {
return ($Control_Monad_List_Trans_Yield)($a, ($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
} else {
;
};
if (true) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($f, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_takeWhile, $dictApplicative, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_Skip, $__body, &$__fn) {
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
    $__res = ($stepMap1)($g);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_scanl
$Control_Monad_List_Trans_scanl = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_unfold, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing) {
  $__fn = function($dictMonad) use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_unfold, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$unfold1 = ($Control_Monad_List_Trans_unfold)($dictMonad);
    $__res = (function() use (&$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing, $map2, $unfold1) {
  $__fn = function($f, $b = null, $l = null) use (&$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing, $map2, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($f, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing, $map2) {
  $__body = function($v) use ($f, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing, $map2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$b__prime__ = ($__case_0)->values[0];
$l__prime__ = ($__case_0)->values[1];
$h = (function() use ($f, $b__prime__, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing) {
  $__body = function($v1) use ($f, $b__prime__, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$b__prime____prime__ = ($f)($b__prime__, $a);
return ($Data_Maybe_Just)(($Data_Tuple_Tuple)(($Data_Tuple_Tuple)($b__prime____prime__, ($Data_Lazy_force)($s)), $b__prime__));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Data_Maybe_Just)(($Data_Tuple_Tuple)(($Data_Tuple_Tuple)($b__prime__, ($Data_Lazy_force)($s)), $b__prime__));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($f, $b__prime__, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v1);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v1);
  };
  return $__fn;
})();
return ($map2)($h, $l__prime__);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($f, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Data_Lazy_force, &$Data_Maybe_Nothing, $map2, $__body, &$__fn) {
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
    $__res = ($unfold1)($g, ($Data_Tuple_Tuple)($b, $l));
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

// Control_Monad_List_Trans_prepend'
$Control_Monad_List_Trans_prepend__prime__ = (function() use (&$Control_Applicative_pure, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_Yield) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_Yield, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Control_Monad_List_Trans_ListT, $pure1, &$Control_Monad_List_Trans_Yield) {
  $__fn = function($h, $t = null) use (&$Control_Monad_List_Trans_ListT, $pure1, &$Control_Monad_List_Trans_Yield, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_ListT)(($pure1)(($Control_Monad_List_Trans_Yield)($h, $t)));
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

// Control_Monad_List_Trans_prepend
$Control_Monad_List_Trans_prepend = (function() use (&$Control_Monad_List_Trans_prepend__prime__, &$Data_Lazy_defer, &$Data_Function_const) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_prepend__prime__, &$Data_Lazy_defer, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$prepend__prime__1 = ($Control_Monad_List_Trans_prepend__prime__)($dictApplicative);
    $__res = (function() use ($prepend__prime__1, &$Data_Lazy_defer, &$Data_Function_const) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, &$Data_Lazy_defer, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($prepend__prime__1)($h, ($Data_Lazy_defer)(($Data_Function_const)($t)));
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

// Control_Monad_List_Trans_nil
$Control_Monad_List_Trans_nil = (function() use (&$Control_Monad_List_Trans_ListT, &$Control_Applicative_pure, &$Control_Monad_List_Trans_Done) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_ListT, &$Control_Applicative_pure, &$Control_Monad_List_Trans_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_ListT)(($Control_Applicative_pure)($dictApplicative, $Control_Monad_List_Trans_Done));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_singleton
$Control_Monad_List_Trans_singleton = (function() use (&$Control_Monad_List_Trans_prepend, &$Control_Monad_List_Trans_nil) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_prepend, &$Control_Monad_List_Trans_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$prepend1 = ($Control_Monad_List_Trans_prepend)($dictApplicative);
$nil1 = ($Control_Monad_List_Trans_nil)($dictApplicative);
    $__res = (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($prepend1)($a, $nil1);
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

// Control_Monad_List_Trans_take
$Control_Monad_List_Trans_take = (function() use (&$Control_Monad_List_Trans_nil, &$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_nil, &$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictApplicative) use (&$Control_Monad_List_Trans_nil, &$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
while (true) {
$nil1 = ($Control_Monad_List_Trans_nil)($dictApplicative);
$stepMap1 = ($Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use ($nil1, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, $dictApplicative, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $stepMap1) {
  $__body = function($v, $v1) use ($nil1, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, $dictApplicative, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === 0)) {
return $nil1;
} else {
;
};
    if (true) {
$n = $__case_0;
$fa = $__case_1;
$f = (function() use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, $dictApplicative, &$Control_Monad_List_Trans_sub, $n, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
  $__body = function($v2) use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, $dictApplicative, &$Control_Monad_List_Trans_sub, $n, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($Control_Monad_List_Trans_Yield)($a, ($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_take)($dictApplicative, ($Control_Monad_List_Trans_sub)($n, 1)), $s));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_take)($dictApplicative, $n), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v2) use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, $dictApplicative, &$Control_Monad_List_Trans_sub, $n, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v2);
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($nil1, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_take, $dictApplicative, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $stepMap1, $__body, &$__fn) {
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
}
})($dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_zipWith'
$Control_Monad_List_Trans_zipWith__prime__ = (function() use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_List_Trans_nil, &$Data_Functor_map, &$Control_Monad_List_Trans_prepend__prime__, &$Control_Monad_List_Trans_wrapEffect, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Data_Function_flip, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__) {
  $__fn = function($dictMonad) use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_List_Trans_nil, &$Data_Functor_map, &$Control_Monad_List_Trans_prepend__prime__, &$Control_Monad_List_Trans_wrapEffect, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Data_Function_flip, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_List_Trans_nil, &$Data_Functor_map, &$Control_Monad_List_Trans_prepend__prime__, &$Control_Monad_List_Trans_wrapEffect, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Data_Function_flip, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__) {
while (true) {
$Applicative0 = (($dictMonad)->Applicative0)($Prim_undefined);
$pure1 = ($Control_Applicative_pure)($Applicative0);
$nil1 = ($Control_Monad_List_Trans_nil)($Applicative0);
$Bind1 = (($dictMonad)->Bind1)($Prim_undefined);
$Functor0 = (((($Bind1)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined);
$map2 = ($Data_Functor_map)($Functor0);
$prepend__prime__1 = ($Control_Monad_List_Trans_prepend__prime__)($Applicative0);
$wrapEffect1 = ($Control_Monad_List_Trans_wrapEffect)($Functor0);
$bind = ($Control_Bind_bind)($Bind1);
$uncons1 = ($Control_Monad_List_Trans_uncons)($dictMonad);
return (function() use ($pure1, $nil1, $map2, &$Data_Function_flip, $prepend__prime__1, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $wrapEffect1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $nil1, $map2, &$Data_Function_flip, $prepend__prime__1, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $wrapEffect1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($pure1, $nil1, $map2, &$Data_Function_flip, $prepend__prime__1, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f) {
  $__body = function($v, $v1) use ($pure1, $nil1, $map2, &$Data_Function_flip, $prepend__prime__1, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
;
};
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
;
};
    if ((((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple")) && ((($__case_1)->tag === "Just") && ((($__case_1)->values[0])->tag === "Tuple")))) {
$ha = (($__case_0)->values[0])->values[0];
$ta = (($__case_0)->values[0])->values[1];
$hb = (($__case_1)->values[0])->values[0];
$tb = (($__case_1)->values[0])->values[1];
return ($map2)(($Data_Function_flip)($prepend__prime__1, ($Data_Lazy_defer)((function() use (&$Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $ta, $tb) {
  $__fn = function($v2) use (&$Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $ta, $tb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_zipWith__prime__)($dictMonad, $f, $ta, $tb);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())), ($f)($ha, $hb));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($pure1, $nil1, $map2, &$Data_Function_flip, $prepend__prime__1, &$Data_Lazy_defer, &$Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $__body, &$__fn) {
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
$loop = (function() use ($wrapEffect1, $bind, $uncons1, $g) {
  $__fn = function($fa, $fb = null) use ($wrapEffect1, $bind, $uncons1, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($wrapEffect1)(($bind)(($uncons1)($fa), (function() use ($bind, $uncons1, $fb, $g) {
  $__fn = function($ua) use ($bind, $uncons1, $fb, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($uncons1)($fb), (function() use ($g, $ua) {
  $__fn = function($ub) use ($g, $ua, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($g)($ua, $ub);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $loop;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_zipWith
$Control_Monad_List_Trans_zipWith = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_zipWith__prime__) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_zipWith__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$zipWith__prime__1 = ($Control_Monad_List_Trans_zipWith__prime__)($dictMonad);
    $__res = (function() use ($pure1, $zipWith__prime__1) {
  $__fn = function($f) use ($pure1, $zipWith__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($pure1, $f) {
  $__fn = function($a, $b = null) use ($pure1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure1)(($f)($a, $b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($zipWith__prime__1)($g);
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

// Control_Monad_List_Trans_newtypeListT
$Control_Monad_List_Trans_newtypeListT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Monad_List_Trans_mapMaybe
$Control_Monad_List_Trans_mapMaybe = (function() use (&$Control_Monad_List_Trans_stepMap, &$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, &$Control_Monad_List_Trans_Done) {
  $__fn = function($dictFunctor) use (&$Control_Monad_List_Trans_stepMap, &$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, &$Control_Monad_List_Trans_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictFunctor) use (&$Control_Monad_List_Trans_stepMap, &$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, &$Control_Monad_List_Trans_Done) {
while (true) {
$stepMap1 = ($Control_Monad_List_Trans_stepMap)($dictFunctor);
return (function() use (&$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, $dictFunctor, &$Control_Monad_List_Trans_Done, $stepMap1) {
  $__fn = function($f) use (&$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, $dictFunctor, &$Control_Monad_List_Trans_Done, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use (&$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, $f, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, $dictFunctor, &$Control_Monad_List_Trans_Done) {
  $__body = function($v) use (&$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, $f, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, $dictFunctor, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($Data_Maybe_fromMaybe)($Control_Monad_List_Trans_Skip, ($Control_Monad_List_Trans_map)($Control_Monad_List_Trans_Yield, ($f)($a)), ($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_fromMaybe, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map, &$Control_Monad_List_Trans_Yield, $f, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_mapMaybe, $dictFunctor, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
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
    $__res = ($stepMap1)($g);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictFunctor);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_iterate
$Control_Monad_List_Trans_iterate = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_unfold, &$Data_Maybe_Just, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_unfold, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$unfold1 = ($Control_Monad_List_Trans_unfold)($dictMonad);
    $__res = (function() use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $unfold1) {
  $__fn = function($f, $a = null) use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $f) {
  $__fn = function($x) use ($pure1, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure1)(($Data_Maybe_Just)(($Data_Tuple_Tuple)(($f)($x), $x)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($unfold1)($g, $a);
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

// Control_Monad_List_Trans_repeat
$Control_Monad_List_Trans_repeat = (function() use (&$Control_Monad_List_Trans_iterate, &$Control_Monad_List_Trans_identity) {
  $__fn = function($dictMonad) use (&$Control_Monad_List_Trans_iterate, &$Control_Monad_List_Trans_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_iterate)($dictMonad, $Control_Monad_List_Trans_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_head
$Control_Monad_List_Trans_head = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_uncons, &$Control_Monad_List_Trans_map, &$Data_Tuple_fst) {
  $__fn = function($dictMonad) use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_uncons, &$Control_Monad_List_Trans_map, &$Data_Tuple_fst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$uncons1 = ($Control_Monad_List_Trans_uncons)($dictMonad);
    $__res = (function() use ($map2, &$Control_Monad_List_Trans_map, &$Data_Tuple_fst, $uncons1) {
  $__fn = function($l) use ($map2, &$Control_Monad_List_Trans_map, &$Data_Tuple_fst, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map2)(($Control_Monad_List_Trans_map)($Data_Tuple_fst), ($uncons1)($l));
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

// Control_Monad_List_Trans_functorListT
$Control_Monad_List_Trans_functorListT = (function() use (&$Control_Monad_List_Trans_stepMap, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
  $__fn = function($dictFunctor) use (&$Control_Monad_List_Trans_stepMap, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictFunctor) use (&$Control_Monad_List_Trans_stepMap, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
while (true) {
$stepMap1 = ($Control_Monad_List_Trans_stepMap)($dictFunctor);
return ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, $dictFunctor, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $stepMap1) {
  $__fn = function($f) use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, $dictFunctor, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use (&$Control_Monad_List_Trans_Yield, $f, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, $dictFunctor, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
  $__body = function($v) use (&$Control_Monad_List_Trans_Yield, $f, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, $dictFunctor, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($Control_Monad_List_Trans_Yield)(($f)($a), ($Control_Monad_List_Trans_map1)(($Data_Functor_map)(($Control_Monad_List_Trans_functorListT)($dictFunctor), $f), $s));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Data_Functor_map)(($Control_Monad_List_Trans_functorListT)($dictFunctor), $f), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_List_Trans_Yield, $f, &$Control_Monad_List_Trans_map1, &$Data_Functor_map, &$Control_Monad_List_Trans_functorListT, $dictFunctor, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
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
    $__res = ($stepMap1)($g);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictFunctor);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_fromEffect
$Control_Monad_List_Trans_fromEffect = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_nil, &$Control_Monad_List_Trans_ListT, &$Data_Function_flip, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Control_Monad_List_Trans_nil, &$Control_Monad_List_Trans_ListT, &$Data_Function_flip, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map2 = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$nil1 = ($Control_Monad_List_Trans_nil)($dictApplicative);
    $__res = (function() use (&$Control_Monad_List_Trans_ListT, $map2, &$Data_Function_flip, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, $nil1) {
  $__fn = function($fa) use (&$Control_Monad_List_Trans_ListT, $map2, &$Data_Function_flip, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_defer, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_ListT)(($map2)(($Data_Function_flip)($Control_Monad_List_Trans_Yield, ($Data_Lazy_defer)((function() use ($nil1) {
  $__fn = function($v) use ($nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $nil1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})())), $fa));
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

// Control_Monad_List_Trans_monadTransListT
$Control_Monad_List_Trans_monadTransListT = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Monad_List_Trans_fromEffect, &$Prim_undefined) {
  $__fn = function($dictMonad) use (&$Control_Monad_List_Trans_fromEffect, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_fromEffect)((($dictMonad)->Applicative0)($Prim_undefined));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_List_Trans_lift
$Control_Monad_List_Trans_lift = ($Control_Monad_Trans_Class_lift)($Control_Monad_List_Trans_monadTransListT);

// Control_Monad_List_Trans_foldlRec'
$Control_Monad_List_Trans_foldlRec__prime__ = (function() use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Control_Monad_Rec_Class_tailRecM2, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop) {
  $__fn = function($dictMonadRec) use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Control_Monad_Rec_Class_tailRecM2, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadRec)->Monad0)($Prim_undefined);
$pure1 = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$bind = ($Control_Bind_bind)((($Monad0)->Bind1)($Prim_undefined));
$uncons1 = ($Control_Monad_List_Trans_uncons)($Monad0);
$tailRecM2 = ($Control_Monad_Rec_Class_tailRecM2)($dictMonadRec);
    $__res = (function() use ($pure1, &$Control_Monad_Rec_Class_Done, $bind, &$Control_Monad_Rec_Class_Loop, $uncons1, $tailRecM2) {
  $__fn = function($f) use ($pure1, &$Control_Monad_Rec_Class_Done, $bind, &$Control_Monad_Rec_Class_Loop, $uncons1, $tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$loop = (function() use ($pure1, &$Control_Monad_Rec_Class_Done, $bind, $f, &$Control_Monad_Rec_Class_Loop, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, &$Control_Monad_Rec_Class_Done, $bind, $f, &$Control_Monad_Rec_Class_Loop, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($pure1, &$Control_Monad_Rec_Class_Done, $b, $bind, $f, &$Control_Monad_Rec_Class_Loop) {
  $__body = function($v) use ($pure1, &$Control_Monad_Rec_Class_Done, $b, $bind, $f, &$Control_Monad_Rec_Class_Loop) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(($Control_Monad_Rec_Class_Done)($b));
} else {
;
};
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($bind)(($f)($b, $a), (function() use ($pure1, &$Control_Monad_Rec_Class_Loop, $as) {
  $__fn = function($b__prime__) use ($pure1, &$Control_Monad_Rec_Class_Loop, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure1)(($Control_Monad_Rec_Class_Loop)((object)["a" => $b__prime__, "b" => $as]));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure1, &$Control_Monad_Rec_Class_Done, $b, $bind, $f, &$Control_Monad_Rec_Class_Loop, $__body, &$__fn) {
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
    $__res = ($bind)(($uncons1)($l), $g);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($loop);
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

// Control_Monad_List_Trans_runListTRec
$Control_Monad_List_Trans_runListTRec = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_foldlRec__prime__, &$Data_Unit_unit) {
  $__fn = function($dictMonadRec) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_foldlRec__prime__, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)((((($dictMonadRec)->Monad0)($Prim_undefined))->Applicative0)($Prim_undefined));
    $__res = ($Control_Monad_List_Trans_foldlRec__prime__)($dictMonadRec, (function() use ($pure1, &$Data_Unit_unit) {
  $__fn = function($v, $v1 = null) use ($pure1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure1)($Data_Unit_unit);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_Unit_unit);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_foldlRec
$Control_Monad_List_Trans_foldlRec = (function() use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Control_Monad_Rec_Class_tailRecM2, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop) {
  $__fn = function($dictMonadRec) use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Control_Monad_Rec_Class_tailRecM2, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadRec)->Monad0)($Prim_undefined);
$pure1 = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$bind = ($Control_Bind_bind)((($Monad0)->Bind1)($Prim_undefined));
$uncons1 = ($Control_Monad_List_Trans_uncons)($Monad0);
$tailRecM2 = ($Control_Monad_Rec_Class_tailRecM2)($dictMonadRec);
    $__res = (function() use ($pure1, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $bind, $uncons1, $tailRecM2) {
  $__fn = function($f) use ($pure1, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $bind, $uncons1, $tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$loop = (function() use ($pure1, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $f, $bind, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($pure1, &$Control_Monad_Rec_Class_Done, $b, &$Control_Monad_Rec_Class_Loop, $f) {
  $__body = function($v) use ($pure1, &$Control_Monad_Rec_Class_Done, $b, &$Control_Monad_Rec_Class_Loop, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(($Control_Monad_Rec_Class_Done)($b));
} else {
;
};
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($pure1)(($Control_Monad_Rec_Class_Loop)((object)["a" => ($f)($b, $a), "b" => $as]));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure1, &$Control_Monad_Rec_Class_Done, $b, &$Control_Monad_Rec_Class_Loop, $f, $__body, &$__fn) {
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
    $__res = ($bind)(($uncons1)($l), $g);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($loop);
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

// Control_Monad_List_Trans_foldl'
$Control_Monad_List_Trans_foldl__prime__ = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Data_Function_flip) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$uncons1 = ($Control_Monad_List_Trans_uncons)($dictMonad);
    $__res = (function() use ($pure1, $bind, &$Data_Function_flip, $uncons1) {
  $__fn = function($f) use ($pure1, $bind, &$Data_Function_flip, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$loop = (function() use ($pure1, $bind, $f, &$Data_Function_flip, &$loop, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, &$Data_Function_flip, &$loop, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($b, $l) use ($pure1, $bind, $f, &$Data_Function_flip, &$loop, $uncons1) {
while (true) {
$g = (function() use ($pure1, $b, $bind, $f, &$Data_Function_flip, &$loop) {
  $__body = function($v) use ($pure1, $b, $bind, $f, &$Data_Function_flip, &$loop) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
;
};
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($bind)(($f)($b, $a), ($Data_Function_flip)($loop, $as));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure1, $b, $bind, $f, &$Data_Function_flip, &$loop, $__body, &$__fn) {
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
return ($bind)(($uncons1)($l), $g);
}
})($b, $l);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $loop;
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

// Control_Monad_List_Trans_runListT
$Control_Monad_List_Trans_runListT = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_foldl__prime__, &$Data_Unit_unit) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_List_Trans_foldl__prime__, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = ($Control_Monad_List_Trans_foldl__prime__)($dictMonad, (function() use ($pure1, &$Data_Unit_unit) {
  $__fn = function($v, $v1 = null) use ($pure1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure1)($Data_Unit_unit);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $Data_Unit_unit);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_foldl
$Control_Monad_List_Trans_foldl = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_List_Trans_uncons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$uncons1 = ($Control_Monad_List_Trans_uncons)($dictMonad);
    $__res = (function() use ($pure1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$loop = (function() use ($pure1, &$loop, $f, $bind, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, &$loop, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($b, $l) use ($pure1, &$loop, $f, $bind, $uncons1) {
while (true) {
$g = (function() use ($pure1, $b, &$loop, $f) {
  $__body = function($v) use ($pure1, $b, &$loop, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
;
};
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($loop)(($f)($b, $a), $as);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure1, $b, &$loop, $f, $__body, &$__fn) {
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
return ($bind)(($uncons1)($l), $g);
}
})($b, $l);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $loop;
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

// Control_Monad_List_Trans_filter
$Control_Monad_List_Trans_filter = (function() use (&$Control_Monad_List_Trans_stepMap, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
  $__fn = function($dictFunctor) use (&$Control_Monad_List_Trans_stepMap, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictFunctor) use (&$Control_Monad_List_Trans_stepMap, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
while (true) {
$stepMap1 = ($Control_Monad_List_Trans_stepMap)($dictFunctor);
return (function() use (&$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, $dictFunctor, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $stepMap1) {
  $__fn = function($f) use (&$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, $dictFunctor, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use (&$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, $dictFunctor, $f, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
  $__body = function($v) use (&$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, $dictFunctor, $f, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$s__prime__ = ($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
$__case_0 = ($f)($a);
if (($__case_0 === true)) {
return ($Control_Monad_List_Trans_Yield)($a, $s__prime__);
} else {
;
};
if (true) {
return ($Control_Monad_List_Trans_Skip)($s__prime__);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
$s__prime__ = ($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
return ($Control_Monad_List_Trans_Skip)($s__prime__);
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_filter, $dictFunctor, $f, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
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
    $__res = ($stepMap1)($g);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictFunctor);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_dropWhile
$Control_Monad_List_Trans_dropWhile = (function() use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done) {
while (true) {
$stepMap1 = ($Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, $dictApplicative, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done, $stepMap1) {
  $__fn = function($f) use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, $dictApplicative, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($f, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, $dictApplicative, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done) {
  $__body = function($v) use ($f, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, $dictApplicative, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$__case_0 = ($f)($a);
if (($__case_0 === true)) {
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
} else {
;
};
if (true) {
return ($Control_Monad_List_Trans_Yield)($a, $s);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($f, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_dropWhile, $dictApplicative, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
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
    $__res = ($stepMap1)($g);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_drop
$Control_Monad_List_Trans_drop = (function() use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Done) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Done) {
while (true) {
$stepMap1 = ($Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, $dictApplicative, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Done, $stepMap1) {
  $__body = function($v, $v1) use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, $dictApplicative, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Done, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === 0)) {
$fa = $__case_1;
return $fa;
} else {
;
};
    if (true) {
$n = $__case_0;
$fa = $__case_1;
$f = (function() use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, $dictApplicative, &$Control_Monad_List_Trans_sub, $n, &$Control_Monad_List_Trans_Done) {
  $__body = function($v2) use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, $dictApplicative, &$Control_Monad_List_Trans_sub, $n, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Yield")) {
$s = ($__case_0)->values[1];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_drop)($dictApplicative, ($Control_Monad_List_Trans_sub)($n, 1)), $s));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)(($Control_Monad_List_Trans_drop)($dictApplicative, $n), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v2) use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, $dictApplicative, &$Control_Monad_List_Trans_sub, $n, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v2);
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_drop, $dictApplicative, &$Control_Monad_List_Trans_sub, &$Control_Monad_List_Trans_Done, $stepMap1, $__body, &$__fn) {
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
}
})($dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_cons
$Control_Monad_List_Trans_cons = (function() use (&$Control_Applicative_pure, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_force) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Control_Monad_List_Trans_ListT, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure1 = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Control_Monad_List_Trans_ListT, $pure1, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_force) {
  $__fn = function($lh, $t = null) use (&$Control_Monad_List_Trans_ListT, $pure1, &$Control_Monad_List_Trans_Yield, &$Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_ListT)(($pure1)(($Control_Monad_List_Trans_Yield)(($Data_Lazy_force)($lh), $t)));
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

// Control_Monad_List_Trans_unfoldable1ListT
$Control_Monad_List_Trans_unfoldable1ListT = (function() use (&$Prim_undefined, &$Control_Monad_List_Trans_singleton, &$Control_Monad_List_Trans_cons, &$Data_Unfoldable1_Unfoldable1__dollar__Dict, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer) {
  $__fn = function($dictMonad) use (&$Prim_undefined, &$Control_Monad_List_Trans_singleton, &$Control_Monad_List_Trans_cons, &$Data_Unfoldable1_Unfoldable1__dollar__Dict, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Applicative0 = (($dictMonad)->Applicative0)($Prim_undefined);
$singleton1 = ($Control_Monad_List_Trans_singleton)($Applicative0);
$cons1 = ($Control_Monad_List_Trans_cons)($Applicative0);
    $__res = ($Data_Unfoldable1_Unfoldable1__dollar__Dict)((object)["unfoldr1" => (function() use ($singleton1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer) {
  $__fn = function($f, $b = null) use ($singleton1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($singleton1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$go, $f) {
  $__fn = function($v) use ($singleton1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($singleton1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$go, $f) {
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Nothing"))) {
$x = ($__case_0)->values[0];
return ($singleton1)($x);
} else {
;
};
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Just"))) {
$x = ($__case_0)->values[0];
$y = (($__case_0)->values[1])->values[0];
return ($cons1)(($Control_Monad_List_Trans_pure)($x), ($Data_Lazy_defer)((function() use (&$go, $f, $y) {
  $__fn = function($v1) use (&$go, $f, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($go)(($f)($y));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)(($f)($b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Control_Monad_List_Trans_unfoldableListT
$Control_Monad_List_Trans_unfoldableListT = (function() use (&$Prim_undefined, &$Control_Monad_List_Trans_nil, &$Control_Monad_List_Trans_cons, &$Control_Monad_List_Trans_unfoldable1ListT, &$Data_Unfoldable_Unfoldable__dollar__Dict, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer) {
  $__fn = function($dictMonad) use (&$Prim_undefined, &$Control_Monad_List_Trans_nil, &$Control_Monad_List_Trans_cons, &$Control_Monad_List_Trans_unfoldable1ListT, &$Data_Unfoldable_Unfoldable__dollar__Dict, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Applicative0 = (($dictMonad)->Applicative0)($Prim_undefined);
$nil1 = ($Control_Monad_List_Trans_nil)($Applicative0);
$cons1 = ($Control_Monad_List_Trans_cons)($Applicative0);
$unfoldable1ListT1 = ($Control_Monad_List_Trans_unfoldable1ListT)($dictMonad);
    $__res = ($Data_Unfoldable_Unfoldable__dollar__Dict)((object)["unfoldr" => (function() use ($nil1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer) {
  $__fn = function($f, $b = null) use ($nil1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($nil1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$go, $f) {
  $__fn = function($v) use ($nil1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use ($nil1, $cons1, &$Control_Monad_List_Trans_pure, &$Data_Lazy_defer, &$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $nil1;
} else {
;
};
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$x = (($__case_0)->values[0])->values[0];
$y = (($__case_0)->values[0])->values[1];
return ($cons1)(($Control_Monad_List_Trans_pure)($x), ($Data_Lazy_defer)((function() use (&$go, $f, $y) {
  $__fn = function($v1) use (&$go, $f, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($go)(($f)($y));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)(($f)($b));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() use ($unfoldable1ListT1) {
  $__fn = function($__dollar____unused) use ($unfoldable1ListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $unfoldable1ListT1;
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

// Control_Monad_List_Trans_semigroupListT
$Control_Monad_List_Trans_semigroupListT = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Control_Monad_List_Trans_concat) {
  $__fn = function($dictApplicative) use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Control_Monad_List_Trans_concat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictApplicative) use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Control_Monad_List_Trans_concat) {
while (true) {
return ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($Control_Monad_List_Trans_concat)($dictApplicative)]);
}
})($dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_concat
$Control_Monad_List_Trans_concat = (function() use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictApplicative) use (&$Control_Monad_List_Trans_stepMap, &$Prim_undefined, &$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const) {
while (true) {
$stepMap1 = ($Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return (function() use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const, $stepMap1) {
  $__fn = function($x, $y = null) use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$f = (function() use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const) {
  $__body = function($v) use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($Control_Monad_List_Trans_Yield)($a, ($Control_Monad_List_Trans_map1)((function() use (&$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y) {
  $__fn = function($v1) use (&$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_append)(($Control_Monad_List_Trans_semigroupListT)($dictApplicative), $v1, $y);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $s));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)((function() use (&$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y) {
  $__fn = function($v1) use (&$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_append)(($Control_Monad_List_Trans_semigroupListT)($dictApplicative), $v1, $y);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return ($Control_Monad_List_Trans_Skip)(($Data_Lazy_defer)(($Data_Function_const)($y)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_List_Trans_Yield, &$Control_Monad_List_Trans_map1, &$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y, &$Control_Monad_List_Trans_Skip, &$Data_Lazy_defer, &$Data_Function_const, $__body, &$__fn) {
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
    $__res = ($stepMap1)($f, $x);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
}
})($dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monoidListT
$Control_Monad_List_Trans_monoidListT = (function() use (&$Control_Monad_List_Trans_semigroupListT, &$Data_Monoid_Monoid__dollar__Dict, &$Control_Monad_List_Trans_nil) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_semigroupListT, &$Data_Monoid_Monoid__dollar__Dict, &$Control_Monad_List_Trans_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupListT1 = ($Control_Monad_List_Trans_semigroupListT)($dictApplicative);
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Control_Monad_List_Trans_nil)($dictApplicative), "Semigroup0" => (function() use ($semigroupListT1) {
  $__fn = function($__dollar____unused) use ($semigroupListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupListT1;
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

// Control_Monad_List_Trans_catMaybes
$Control_Monad_List_Trans_catMaybes = (function() use (&$Control_Monad_List_Trans_mapMaybe, &$Control_Monad_List_Trans_identity) {
  $__fn = function($dictFunctor) use (&$Control_Monad_List_Trans_mapMaybe, &$Control_Monad_List_Trans_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_mapMaybe)($dictFunctor, $Control_Monad_List_Trans_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monadListT
$Control_Monad_List_Trans_monadListT = (function() use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_List_Trans_applicativeListT, &$Control_Monad_List_Trans_bindListT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_List_Trans_applicativeListT, &$Control_Monad_List_Trans_bindListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_List_Trans_applicativeListT, &$Control_Monad_List_Trans_bindListT) {
while (true) {
return ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Control_Monad_List_Trans_applicativeListT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_List_Trans_applicativeListT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_applicativeListT)($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Control_Monad_List_Trans_bindListT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_List_Trans_bindListT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_bindListT)($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_bindListT
$Control_Monad_List_Trans_bindListT = (function() use (&$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, &$Prim_undefined, &$Control_Monad_List_Trans_stepMap, &$Control_Bind_Bind__dollar__Dict, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_applyListT) {
  $__fn = function($dictMonad) use (&$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, &$Prim_undefined, &$Control_Monad_List_Trans_stepMap, &$Control_Bind_Bind__dollar__Dict, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_applyListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Data_Semigroup_append, &$Control_Monad_List_Trans_semigroupListT, &$Prim_undefined, &$Control_Monad_List_Trans_stepMap, &$Control_Bind_Bind__dollar__Dict, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done, &$Control_Monad_List_Trans_applyListT) {
while (true) {
$append = ($Data_Semigroup_append)(($Control_Monad_List_Trans_semigroupListT)((($dictMonad)->Applicative0)($Prim_undefined)));
$stepMap1 = ($Control_Monad_List_Trans_stepMap)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use ($append, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done, $stepMap1) {
  $__fn = function($fa, $f = null) use ($append, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use ($append, $f, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done) {
  $__body = function($v) use ($append, $f, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$h = (function() use ($append, $f, $a, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad) {
  $__fn = function($s__prime__) use ($append, $f, $a, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($f)($a), ($Control_Bind_bind)(($Control_Monad_List_Trans_bindListT)($dictMonad), $s__prime__, $f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)($h, $s));
} else {
;
};
    if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($Control_Monad_List_Trans_Skip)(($Control_Monad_List_Trans_map1)((function() use (&$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, $f) {
  $__fn = function($v1) use (&$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Bind_bind)(($Control_Monad_List_Trans_bindListT)($dictMonad), $v1, $f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $s));
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return $Control_Monad_List_Trans_Done;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($append, $f, &$Control_Bind_bind, &$Control_Monad_List_Trans_bindListT, $dictMonad, &$Control_Monad_List_Trans_Skip, &$Control_Monad_List_Trans_map1, &$Control_Monad_List_Trans_Done, $__body, &$__fn) {
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
    $__res = ($stepMap1)($g, $fa);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use (&$Control_Monad_List_Trans_applyListT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_List_Trans_applyListT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_applyListT)($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_applyListT
$Control_Monad_List_Trans_applyListT = (function() use (&$Control_Monad_List_Trans_functorListT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_List_Trans_monadListT) {
  $__fn = function($dictMonad) use (&$Control_Monad_List_Trans_functorListT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_List_Trans_monadListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_List_Trans_functorListT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_List_Trans_monadListT) {
while (true) {
$functorListT1 = ($Control_Monad_List_Trans_functorListT)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Control_Monad_ap)(($Control_Monad_List_Trans_monadListT)($dictMonad)), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorListT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_applicativeListT
$Control_Monad_List_Trans_applicativeListT = (function() use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_List_Trans_singleton, &$Prim_undefined, &$Control_Monad_List_Trans_applyListT) {
  $__fn = function($dictMonad) use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_List_Trans_singleton, &$Prim_undefined, &$Control_Monad_List_Trans_applyListT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_List_Trans_singleton, &$Prim_undefined, &$Control_Monad_List_Trans_applyListT) {
while (true) {
return ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Control_Monad_List_Trans_singleton)((($dictMonad)->Applicative0)($Prim_undefined)), "Apply0" => (function() use (&$Control_Monad_List_Trans_applyListT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_List_Trans_applyListT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_List_Trans_applyListT)($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monadEffectListT
$Control_Monad_List_Trans_monadEffectListT = (function() use (&$Prim_undefined, &$Control_Monad_List_Trans_monadListT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Monad_List_Trans_monadListT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadListT1 = ($Control_Monad_List_Trans_monadListT)($Monad0);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_List_Trans_compose)(($Control_Monad_List_Trans_lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadListT1;
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

// Control_Monad_List_Trans_monadSTListT
$Control_Monad_List_Trans_monadSTListT = (function() use (&$Prim_undefined, &$Control_Monad_List_Trans_monadListT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, &$Control_Monad_List_Trans_monadListT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_List_Trans_compose, &$Control_Monad_List_Trans_lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadListT1 = ($Control_Monad_List_Trans_monadListT)($Monad0);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_List_Trans_compose)(($Control_Monad_List_Trans_lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadListT1;
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

// Control_Monad_List_Trans_altListT
$Control_Monad_List_Trans_altListT = (function() use (&$Control_Monad_List_Trans_functorListT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_List_Trans_concat) {
  $__fn = function($dictApplicative) use (&$Control_Monad_List_Trans_functorListT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_List_Trans_concat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$functorListT1 = ($Control_Monad_List_Trans_functorListT)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => ($Control_Monad_List_Trans_concat)($dictApplicative), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorListT1;
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

// Control_Monad_List_Trans_plusListT
$Control_Monad_List_Trans_plusListT = (function() use (&$Prim_undefined, &$Control_Monad_List_Trans_altListT, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_List_Trans_nil) {
  $__fn = function($dictMonad) use (&$Prim_undefined, &$Control_Monad_List_Trans_altListT, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_List_Trans_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Applicative0 = (($dictMonad)->Applicative0)($Prim_undefined);
$altListT1 = ($Control_Monad_List_Trans_altListT)($Applicative0);
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_List_Trans_nil)($Applicative0), "Alt0" => (function() use ($altListT1) {
  $__fn = function($__dollar____unused) use ($altListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altListT1;
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

// Control_Monad_List_Trans_alternativeListT
$Control_Monad_List_Trans_alternativeListT = (function() use (&$Control_Monad_List_Trans_applicativeListT, &$Control_Monad_List_Trans_plusListT, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_List_Trans_applicativeListT, &$Control_Monad_List_Trans_plusListT, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeListT1 = ($Control_Monad_List_Trans_applicativeListT)($dictMonad);
$plusListT1 = ($Control_Monad_List_Trans_plusListT)($dictMonad);
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeListT1) {
  $__fn = function($__dollar____unused) use ($applicativeListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeListT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusListT1) {
  $__fn = function($__dollar____unused) use ($plusListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusListT1;
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

// Control_Monad_List_Trans_monadPlusListT
$Control_Monad_List_Trans_monadPlusListT = (function() use (&$Control_Monad_List_Trans_monadListT, &$Control_Monad_List_Trans_alternativeListT, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_List_Trans_monadListT, &$Control_Monad_List_Trans_alternativeListT, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadListT1 = ($Control_Monad_List_Trans_monadListT)($dictMonad);
$alternativeListT1 = ($Control_Monad_List_Trans_alternativeListT)($dictMonad);
    $__res = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadListT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeListT1) {
  $__fn = function($__dollar____unused) use ($alternativeListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $alternativeListT1;
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

