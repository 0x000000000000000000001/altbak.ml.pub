<?php

namespace Control\Monad\Rec\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Rec_Class_compose
$Control_Monad_Rec_Class_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Rec_Class_bind
$Control_Monad_Rec_Class_bind = ($Control_Bind_bind)($Effect_bindEffect);

// Control_Monad_Rec_Class_bindFlipped
$Control_Monad_Rec_Class_bindFlipped = ($Control_Bind_bindFlipped)($Effect_bindEffect);

// Control_Monad_Rec_Class_discard
$Control_Monad_Rec_Class_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Effect_bindEffect);

// Control_Monad_Rec_Class_pure
$Control_Monad_Rec_Class_pure = ($Control_Applicative_pure)($Effect_applicativeEffect);

// Control_Monad_Rec_Class_map
$Control_Monad_Rec_Class_map = ($Data_Functor_map)($Effect_functorEffect);

// Control_Monad_Rec_Class_Loop
$Control_Monad_Rec_Class_Loop = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Loop", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_Done
$Control_Monad_Rec_Class_Done = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Done", "values" => [$value0]];
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_MonadRec$Dict
$Control_Monad_Rec_Class_MonadRec__dollar__Dict = (function() {
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

// Control_Monad_Rec_Class_tailRecM
$Control_Monad_Rec_Class_tailRecM = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tailRecM;
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

// Control_Monad_Rec_Class_tailRecM2
$Control_Monad_Rec_Class_tailRecM2 = (function() use (&$Control_Monad_Rec_Class_tailRecM) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM1 = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($o)->a, ($o)->b);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
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

// Control_Monad_Rec_Class_tailRecM3
$Control_Monad_Rec_Class_tailRecM3 = (function() use (&$Control_Monad_Rec_Class_tailRecM) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM1 = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null, $c = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
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

// Control_Monad_Rec_Class_untilJust
$Control_Monad_Rec_Class_untilJust = (function() use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM1 = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
$mapFlipped = ($Data_Functor_mapFlipped)((((((((($dictMonadRec)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($tailRecM1, $mapFlipped, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
  $__fn = function($v) use ($mapFlipped, $m, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mapFlipped)($m, (function() use (&$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
  $__body = function($v1) use (&$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return ($Control_Monad_Rec_Class_Loop)($Data_Unit_unit);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_whileJust
$Control_Monad_Rec_Class_whileJust = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $append, $mempty) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM1 = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
$mapFlipped = ($Data_Functor_mapFlipped)((((((((($dictMonadRec)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($tailRecM1, $mapFlipped, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $append, $mempty) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $append) {
  $__fn = function($v) use ($mapFlipped, $m, &$Control_Monad_Rec_Class_Done, &$Control_Monad_Rec_Class_Loop, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mapFlipped)($m, (function() use (&$Control_Monad_Rec_Class_Done, $v, &$Control_Monad_Rec_Class_Loop, $append) {
  $__body = function($v1) use (&$Control_Monad_Rec_Class_Done, $v, &$Control_Monad_Rec_Class_Loop, $append) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return ($Control_Monad_Rec_Class_Done)($v);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Loop)(($append)($v, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Control_Monad_Rec_Class_Done, $v, &$Control_Monad_Rec_Class_Loop, $append, $__body, &$__fn) {
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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

// Control_Monad_Rec_Class_tailRec
$Control_Monad_Rec_Class_tailRec = (function() use (&$Control_Monad_Rec_Class_compose) {
  $__fn = function($f) use (&$Control_Monad_Rec_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, $f) {
  $__fn = function($v) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v) use (&$go, $f) {
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Loop")) {
$a = ($__case_0)->values[0];
$__tco_tmp_0 = ($f)($a);
$v = $__tco_tmp_0;
continue;
} else {
;
};
if ((($__case_0)->tag === "Done")) {
$b = ($__case_0)->values[0];
return $b;
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
    $__res = ($Control_Monad_Rec_Class_compose)($go, $f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_tailRec2
$Control_Monad_Rec_Class_tailRec2 = (function() use (&$Control_Monad_Rec_Class_tailRec) {
  $__fn = function($f, $a = null, $b = null) use (&$Control_Monad_Rec_Class_tailRec, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_tailRec)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($o)->a, ($o)->b);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_tailRec3
$Control_Monad_Rec_Class_tailRec3 = (function() use (&$Control_Monad_Rec_Class_tailRec) {
  $__fn = function($f, $a = null, $b = null, $c = null) use (&$Control_Monad_Rec_Class_tailRec, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_tailRec)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_monadRecMaybe
$Control_Monad_Rec_Class_monadRecMaybe = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_tailRec) {
  $__fn = function($f, $a0 = null) use (&$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just, &$Control_Monad_Rec_Class_tailRec, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use (&$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, $f, &$Data_Maybe_Just) {
  $__body = function($v) use (&$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, $f, &$Data_Maybe_Just) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($Control_Monad_Rec_Class_Done)($Data_Maybe_Nothing);
} else {
;
};
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Loop"))) {
$a = (($__case_0)->values[0])->values[0];
return ($Control_Monad_Rec_Class_Loop)(($f)($a));
} else {
;
};
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Done"))) {
$b = (($__case_0)->values[0])->values[0];
return ($Control_Monad_Rec_Class_Done)(($Data_Maybe_Just)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, $f, &$Data_Maybe_Just, $__body, &$__fn) {
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
    $__res = ($Control_Monad_Rec_Class_tailRec)($g, ($f)($a0));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use (&$Data_Maybe_monadMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_monadMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_monadMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecIdentity
$Control_Monad_Rec_Class_monadRecIdentity = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Control_Monad_Rec_Class_compose, &$Data_Identity_Identity, &$Control_Monad_Rec_Class_tailRec) {
  $__fn = function($f) use (&$Control_Monad_Rec_Class_compose, &$Data_Identity_Identity, &$Control_Monad_Rec_Class_tailRec, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$runIdentity = (function() {
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
    $__res = ($Control_Monad_Rec_Class_compose)($Data_Identity_Identity, ($Control_Monad_Rec_Class_tailRec)(($Control_Monad_Rec_Class_compose)($runIdentity, $f)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use (&$Data_Identity_monadIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Identity_monadIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Identity_monadIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecFunction
$Control_Monad_Rec_Class_monadRecFunction = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Control_Monad_Rec_Class_tailRec) {
  $__fn = function($f, $a0 = null, $e = null) use (&$Control_Monad_Rec_Class_tailRec, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_tailRec)((function() use ($f, $e) {
  $__fn = function($a) use ($f, $e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($a, $e);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $a0);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use (&$Control_Monad_monadFn) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_monadFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_monadFn;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecEither
$Control_Monad_Rec_Class_monadRecEither = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right, &$Control_Monad_Rec_Class_tailRec) {
  $__fn = function($f, $a0 = null) use (&$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right, &$Control_Monad_Rec_Class_tailRec, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$g = (function() use (&$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, $f, &$Data_Either_Right) {
  $__body = function($v) use (&$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, $f, &$Data_Either_Right) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)(($Data_Either_Left)($e));
} else {
;
};
    if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Loop"))) {
$a = (($__case_0)->values[0])->values[0];
return ($Control_Monad_Rec_Class_Loop)(($f)($a));
} else {
;
};
    if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Done"))) {
$b = (($__case_0)->values[0])->values[0];
return ($Control_Monad_Rec_Class_Done)(($Data_Either_Right)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, $f, &$Data_Either_Right, $__body, &$__fn) {
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
    $__res = ($Control_Monad_Rec_Class_tailRec)($g, ($f)($a0));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use (&$Data_Either_monadEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_monadEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_monadEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecEffect
$Control_Monad_Rec_Class_monadRecEffect = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Partial_Unsafe_unsafePartial, &$Prim_undefined, &$Control_Monad_Rec_Class_bind, &$Control_Monad_Rec_Class_bindFlipped, &$Effect_Ref_new, &$Control_Monad_Rec_Class_discard, &$Effect_untilE, &$Effect_Ref_read, &$Effect_Ref_write, &$Control_Monad_Rec_Class_pure, &$Control_Monad_Rec_Class_map) {
  $__fn = function($f, $a = null) use (&$Partial_Unsafe_unsafePartial, &$Prim_undefined, &$Control_Monad_Rec_Class_bind, &$Control_Monad_Rec_Class_bindFlipped, &$Effect_Ref_new, &$Control_Monad_Rec_Class_discard, &$Effect_untilE, &$Effect_Ref_read, &$Effect_Ref_write, &$Control_Monad_Rec_Class_pure, &$Control_Monad_Rec_Class_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromDone = ($Partial_Unsafe_unsafePartial)((function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Done")) {
$b = ($__case_0)->values[0];
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($__dollar____unused);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($__dollar____unused);
  };
  return $__fn;
})())($Prim_undefined);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());
    $__res = ($Control_Monad_Rec_Class_bind)(($Control_Monad_Rec_Class_bindFlipped)($Effect_Ref_new, ($f)($a)), (function() use (&$Control_Monad_Rec_Class_discard, &$Effect_untilE, &$Control_Monad_Rec_Class_bind, &$Effect_Ref_read, $f, &$Effect_Ref_write, &$Control_Monad_Rec_Class_pure, &$Control_Monad_Rec_Class_map, $fromDone) {
  $__fn = function($r) use (&$Control_Monad_Rec_Class_discard, &$Effect_untilE, &$Control_Monad_Rec_Class_bind, &$Effect_Ref_read, $f, &$Effect_Ref_write, &$Control_Monad_Rec_Class_pure, &$Control_Monad_Rec_Class_map, $fromDone, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_discard)(($Effect_untilE)(($Control_Monad_Rec_Class_bind)(($Effect_Ref_read)($r), (function() use (&$Control_Monad_Rec_Class_bind, $f, &$Effect_Ref_write, $r, &$Control_Monad_Rec_Class_pure) {
  $__body = function($v) use (&$Control_Monad_Rec_Class_bind, $f, &$Effect_Ref_write, $r, &$Control_Monad_Rec_Class_pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Loop")) {
$a__prime__ = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_bind)(($f)($a__prime__), (function() use (&$Control_Monad_Rec_Class_bind, &$Effect_Ref_write, $r, &$Control_Monad_Rec_Class_pure) {
  $__fn = function($e) use (&$Control_Monad_Rec_Class_bind, &$Effect_Ref_write, $r, &$Control_Monad_Rec_Class_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_bind)(($Effect_Ref_write)($e, $r), (function() use (&$Control_Monad_Rec_Class_pure) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Rec_Class_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_pure)(false);
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
})());
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
return ($Control_Monad_Rec_Class_pure)(true);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Rec_Class_bind, $f, &$Effect_Ref_write, $r, &$Control_Monad_Rec_Class_pure, $__body, &$__fn) {
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
})())), (function() use (&$Control_Monad_Rec_Class_map, $fromDone, &$Effect_Ref_read, $r) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Rec_Class_map, $fromDone, &$Effect_Ref_read, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_map)($fromDone, ($Effect_Ref_read)($r));
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
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use (&$Effect_monadEffect) {
  $__fn = function($__dollar____unused) use (&$Effect_monadEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_monadEffect;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_loop3
$Control_Monad_Rec_Class_loop3 = (function() use (&$Control_Monad_Rec_Class_Loop) {
  $__fn = function($a, $b = null, $c = null) use (&$Control_Monad_Rec_Class_Loop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_Loop)((object)["a" => $a, "b" => $b, "c" => $c]);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_loop2
$Control_Monad_Rec_Class_loop2 = (function() use (&$Control_Monad_Rec_Class_Loop) {
  $__fn = function($a, $b = null) use (&$Control_Monad_Rec_Class_Loop, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Rec_Class_Loop)((object)["a" => $a, "b" => $b]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_functorStep
$Control_Monad_Rec_Class_functorStep = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done) {
  $__body = function($f, $m) use (&$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Loop")) {
$v = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Loop)($v);
} else {
;
};
    if ((($__case_0)->tag === "Done")) {
$v = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)(($f)($v));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $m = null) use (&$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $m);
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_forever
$Control_Monad_Rec_Class_forever = (function() use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_voidRight, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_voidRight, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM1 = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
$voidRight = ($Data_Functor_voidRight)((((((((($dictMonadRec)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($tailRecM1, $voidRight, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit) {
  $__fn = function($ma) use ($tailRecM1, $voidRight, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM1)((function() use ($voidRight, &$Control_Monad_Rec_Class_Loop, $ma) {
  $__fn = function($u) use ($voidRight, &$Control_Monad_Rec_Class_Loop, $ma, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($voidRight)(($Control_Monad_Rec_Class_Loop)($u), $ma);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_bifunctorStep
$Control_Monad_Rec_Class_bifunctorStep = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done) {
  $__body = function($v, $v1, $v2) use (&$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Loop")) {
$f = $__case_0;
$a = ($__case_2)->values[0];
return ($Control_Monad_Rec_Class_Loop)(($f)($a));
} else {
;
};
    if ((($__case_2)->tag === "Done")) {
$g = $__case_1;
$b = ($__case_2)->values[0];
return ($Control_Monad_Rec_Class_Done)(($g)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Control_Monad_Rec_Class_Loop, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
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
})()]);

