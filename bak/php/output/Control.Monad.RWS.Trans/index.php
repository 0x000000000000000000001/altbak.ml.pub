<?php

namespace Control\Monad\RWS\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_RWS_Trans_compose
$Control_Monad_RWS_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_RWS_Trans_RWSResult
$Control_Monad_RWS_Trans_RWSResult = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "RWSResult", "values" => [$value0, $value1, $value2]];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_RWST
$Control_Monad_RWS_Trans_RWST = (function() {
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

// Control_Monad_RWS_Trans_withRWST
$Control_Monad_RWS_Trans_withRWST = (function() use (&$Control_Monad_RWS_Trans_RWST, &$Data_Tuple_uncurry) {
  $__fn = function($f, $m = null) use (&$Control_Monad_RWS_Trans_RWST, &$Data_Tuple_uncurry, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use (&$Data_Tuple_uncurry, $m, $f) {
  $__fn = function($r, $s = null) use (&$Data_Tuple_uncurry, $m, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_uncurry)((function() use ($m) {
$__case_0 = $m;
if (true) {
$m__prime__ = $__case_0;
return $m__prime__;
} else {
;
};
throw new \Exception("Pattern match failure");
})(), ($f)($r, $s));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

// Control_Monad_RWS_Trans_runRWST
$Control_Monad_RWS_Trans_runRWST = (function() {
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

// Control_Monad_RWS_Trans_newtypeRWST
$Control_Monad_RWS_Trans_newtypeRWST = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Monad_RWS_Trans_monadTransRWST
$Control_Monad_RWS_Trans_monadTransRWST = (function() use (&$Data_Monoid_mempty, &$Control_Monad_Trans_Class_MonadTrans__dollar__Dict, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Control_Monad_Trans_Class_MonadTrans__dollar__Dict, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use (&$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
  $__fn = function($m) use (&$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($bind, $m, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
  $__fn = function($v, $s = null) use ($bind, $m, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($m, (function() use ($pure, &$Control_Monad_RWS_Trans_RWSResult, $s, $mempty) {
  $__fn = function($a) use ($pure, &$Control_Monad_RWS_Trans_RWSResult, $s, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Control_Monad_RWS_Trans_RWSResult)($s, $a, $mempty));
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
})());
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_mapRWST
$Control_Monad_RWS_Trans_mapRWST = (function() use (&$Control_Monad_RWS_Trans_RWST) {
  $__body = function($f, $v) use (&$Control_Monad_RWS_Trans_RWST) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_RWS_Trans_RWST)((function() use ($f1, $m) {
  $__fn = function($r, $s = null) use ($f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f1)(($m)($r, $s));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
  $__fn = function($f, $v = null) use (&$Control_Monad_RWS_Trans_RWST, $__body, &$__fn) {
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

// Control_Monad_RWS_Trans_lazyRWST
$Control_Monad_RWS_Trans_lazyRWST = ($Control_Lazy_Lazy__dollar__Dict)((object)["defer" => (function() use (&$Control_Monad_RWS_Trans_RWST, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Control_Monad_RWS_Trans_RWST, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($f, &$Data_Unit_unit) {
  $__body = function($r, $s) use ($f, &$Data_Unit_unit) {
    $v = ($f)($Data_Unit_unit);
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($r, $s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $s = null) use ($f, &$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($r, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($r, $s);
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
})()]);

// Control_Monad_RWS_Trans_functorRWST
$Control_Monad_RWS_Trans_functorRWST = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_RWS_Trans_RWST, $map, &$Control_Monad_RWS_Trans_RWSResult) {
  $__body = function($f, $v) use (&$Control_Monad_RWS_Trans_RWST, $map, &$Control_Monad_RWS_Trans_RWSResult) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_RWS_Trans_RWST)((function() use ($map, &$Control_Monad_RWS_Trans_RWSResult, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, &$Control_Monad_RWS_Trans_RWSResult, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map)((function() use (&$Control_Monad_RWS_Trans_RWSResult, $f1) {
  $__body = function($v1) use (&$Control_Monad_RWS_Trans_RWSResult, $f1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$state = ($__case_0)->values[0];
$result = ($__case_0)->values[1];
$writer = ($__case_0)->values[2];
return ($Control_Monad_RWS_Trans_RWSResult)($state, ($f1)($result), $writer);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Control_Monad_RWS_Trans_RWSResult, $f1, $__body, &$__fn) {
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
})(), ($m)($r, $s));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
  $__fn = function($f, $v = null) use (&$Control_Monad_RWS_Trans_RWST, $map, &$Control_Monad_RWS_Trans_RWSResult, $__body, &$__fn) {
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

// Control_Monad_RWS_Trans_execRWST
$Control_Monad_RWS_Trans_execRWST = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use ($bind, $pure, &$Data_Tuple_Tuple) {
  $__body = function($v, $r, $s) use ($bind, $pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $s;
    if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
return ($bind)(($m)($r1, $s1), (function() use ($pure, &$Data_Tuple_Tuple) {
  $__body = function($v1) use ($pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$state = ($__case_0)->values[0];
$writer = ($__case_0)->values[2];
return ($pure)(($Data_Tuple_Tuple)($state, $writer));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $r, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $r, $s);
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

// Control_Monad_RWS_Trans_evalRWST
$Control_Monad_RWS_Trans_evalRWST = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use ($bind, $pure, &$Data_Tuple_Tuple) {
  $__body = function($v, $r, $s) use ($bind, $pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $s;
    if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
return ($bind)(($m)($r1, $s1), (function() use ($pure, &$Data_Tuple_Tuple) {
  $__body = function($v1) use ($pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$result = ($__case_0)->values[1];
$writer = ($__case_0)->values[2];
return ($pure)(($Data_Tuple_Tuple)($result, $writer));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $r, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $r, $s);
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

// Control_Monad_RWS_Trans_applyRWST
$Control_Monad_RWS_Trans_applyRWST = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Data_Functor_mapFlipped, &$Control_Monad_RWS_Trans_functorRWST, &$Data_Semigroup_append, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Prim_undefined, &$Data_Functor_mapFlipped, &$Control_Monad_RWS_Trans_functorRWST, &$Data_Semigroup_append, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
$Functor0 = (((($dictBind)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined);
$mapFlipped = ($Data_Functor_mapFlipped)($Functor0);
$functorRWST1 = ($Control_Monad_RWS_Trans_functorRWST)($Functor0);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $functorRWST1) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append) {
  $__body = function($v, $v1) use (&$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return ($Control_Monad_RWS_Trans_RWST)((function() use ($bind, $f, $mapFlipped, $m, &$Control_Monad_RWS_Trans_RWSResult, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, &$Control_Monad_RWS_Trans_RWSResult, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, &$Control_Monad_RWS_Trans_RWSResult, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, &$Control_Monad_RWS_Trans_RWSResult, $append) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime__ = ($__case_0)->values[0];
$f__prime__ = ($__case_0)->values[1];
$w__prime__ = ($__case_0)->values[2];
return ($mapFlipped)(($m)($r, $s__prime__), (function() use (&$Control_Monad_RWS_Trans_RWSResult, $f__prime__, $append, $w__prime__) {
  $__body = function($v3) use (&$Control_Monad_RWS_Trans_RWSResult, $f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime____prime__ = ($__case_0)->values[0];
$a__prime____prime__ = ($__case_0)->values[1];
$w__prime____prime__ = ($__case_0)->values[2];
return ($Control_Monad_RWS_Trans_RWSResult)($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v3) use (&$Control_Monad_RWS_Trans_RWSResult, $f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v3);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v3);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v2) use ($mapFlipped, $m, $r, &$Control_Monad_RWS_Trans_RWSResult, $append, $__body, &$__fn) {
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
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
  $__fn = function($v, $v1 = null) use (&$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorRWST1;
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

// Control_Monad_RWS_Trans_bindRWST
$Control_Monad_RWS_Trans_bindRWST = (function() use (&$Control_Bind_bind, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_RWS_Trans_applyRWST, &$Data_Semigroup_append, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictBind) use (&$Control_Bind_bind, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_RWS_Trans_applyRWST, &$Data_Semigroup_append, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)($dictBind);
$mapFlipped = ($Data_Functor_mapFlipped)((((($dictBind)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$applyRWST1 = ($Control_Monad_RWS_Trans_applyRWST)($dictBind);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, $applyRWST1, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, $applyRWST1, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append) {
  $__body = function($v, $f) use (&$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return ($Control_Monad_RWS_Trans_RWST)((function() use ($bind, $m, $f1, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, &$Control_Monad_RWS_Trans_RWSResult, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, &$Control_Monad_RWS_Trans_RWSResult, $append) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime__ = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
$w = ($__case_0)->values[2];
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use (&$Control_Monad_RWS_Trans_RWSResult, $append, $w) {
  $__body = function($v3) use (&$Control_Monad_RWS_Trans_RWSResult, $append, $w) {
    $__case_0 = $v3;
    if ((($__case_0)->tag === "RWSResult")) {
$state = ($__case_0)->values[0];
$result = ($__case_0)->values[1];
$writer = ($__case_0)->values[2];
return ($Control_Monad_RWS_Trans_RWSResult)($state, $result, ($append)($w, $writer));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v3) use (&$Control_Monad_RWS_Trans_RWSResult, $append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($v3);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($v3);
  };
  return $__fn;
})());
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, &$Control_Monad_RWS_Trans_RWSResult, $append, $__body, &$__fn) {
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
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
  $__fn = function($v, $f = null) use (&$Control_Monad_RWS_Trans_RWST, $bind, $mapFlipped, &$Control_Monad_RWS_Trans_RWSResult, $append, $__body, &$__fn) {
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
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyRWST2;
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

// Control_Monad_RWS_Trans_semigroupRWST
$Control_Monad_RWS_Trans_semigroupRWST = (function() use (&$Control_Monad_RWS_Trans_applyRWST, &$Control_Apply_lift2, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictBind) use (&$Control_Monad_RWS_Trans_applyRWST, &$Control_Apply_lift2, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applyRWST1 = ($Control_Monad_RWS_Trans_applyRWST)($dictBind);
    $__res = (function() use (&$Control_Apply_lift2, $applyRWST1, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictMonoid) use (&$Control_Apply_lift2, $applyRWST1, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)(($applyRWST1)($dictMonoid));
    $__res = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, $lift2, &$Data_Semigroup_append) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_Semigroup__dollar__Dict, $lift2, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($lift2)(($Data_Semigroup_append)($dictSemigroup))]);
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

// Control_Monad_RWS_Trans_applicativeRWST
$Control_Monad_RWS_Trans_applicativeRWST = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_applyRWST, &$Data_Monoid_mempty, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_applyRWST, &$Data_Monoid_mempty, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$applyRWST1 = ($Control_Monad_RWS_Trans_applyRWST)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = (function() use (&$Data_Monoid_mempty, $applyRWST1, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, $applyRWST1, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
  $__fn = function($a) use (&$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($pure, &$Control_Monad_RWS_Trans_RWSResult, $a, $mempty) {
  $__fn = function($v, $s = null) use ($pure, &$Control_Monad_RWS_Trans_RWSResult, $a, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Control_Monad_RWS_Trans_RWSResult)($s, $a, $mempty));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applyRWST2;
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

// Control_Monad_RWS_Trans_monadRWST
$Control_Monad_RWS_Trans_monadRWST = (function() use (&$Control_Monad_RWS_Trans_applicativeRWST, &$Control_Monad_RWS_Trans_bindRWST, &$Prim_undefined, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_RWS_Trans_applicativeRWST, &$Control_Monad_RWS_Trans_bindRWST, &$Prim_undefined, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeRWST1 = ($Control_Monad_RWS_Trans_applicativeRWST)($dictMonad);
$bindRWST1 = ($Control_Monad_RWS_Trans_bindRWST)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = (function() use ($applicativeRWST1, $bindRWST1, &$Control_Monad_Monad__dollar__Dict) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$Control_Monad_Monad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeRWST2;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $bindRWST2;
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

// Control_Monad_RWS_Trans_monadAskRWST
$Control_Monad_RWS_Trans_monadAskRWST = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Data_Monoid_mempty, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Data_Monoid_mempty, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$monadRWST1 = ($Control_Monad_RWS_Trans_monadRWST)($dictMonad);
    $__res = (function() use (&$Data_Monoid_mempty, $monadRWST1, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, $monadRWST1, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($Control_Monad_Reader_Class_MonadAsk__dollar__Dict)((object)["ask" => ($Control_Monad_RWS_Trans_RWST)((function() use ($pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
  $__fn = function($r, $s = null) use ($pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Control_Monad_RWS_Trans_RWSResult)($s, $r, $mempty));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadReaderRWST
$Control_Monad_RWS_Trans_monadReaderRWST = (function() use (&$Control_Monad_RWS_Trans_monadAskRWST, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_RWS_Trans_RWST) {
  $__fn = function($dictMonad) use (&$Control_Monad_RWS_Trans_monadAskRWST, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadAskRWST1 = ($Control_Monad_RWS_Trans_monadAskRWST)($dictMonad);
    $__res = (function() use ($monadAskRWST1, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_RWS_Trans_RWST) {
  $__fn = function($dictMonoid) use ($monadAskRWST1, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadAskRWST2 = ($monadAskRWST1)($dictMonoid);
    $__res = ($Control_Monad_Reader_Class_MonadReader__dollar__Dict)((object)["local" => (function() use (&$Control_Monad_RWS_Trans_RWST) {
  $__fn = function($f, $m = null) use (&$Control_Monad_RWS_Trans_RWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($m, $f) {
  $__body = function($r, $s) use ($m, $f) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)(($f)($r), $s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $s = null) use ($m, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($r, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($r, $s);
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
})(), "MonadAsk0" => (function() use ($monadAskRWST2) {
  $__fn = function($__dollar____unused) use ($monadAskRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadAskRWST2;
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

// Control_Monad_RWS_Trans_monadEffectRWS
$Control_Monad_RWS_Trans_monadEffectRWS = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_RWS_Trans_compose, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_RWS_Trans_compose, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid));
    $__res = (function() use (&$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, $dictMonoid, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_RWS_Trans_compose, $lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, $dictMonoid, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_RWS_Trans_compose, $lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadRWST1 = ($Control_Monad_RWS_Trans_monadRWST)($Monad0, $dictMonoid);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_RWS_Trans_compose)(($lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadRWST1) {
  $__fn = function($__dollar____unused) use ($monadRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadRWST1;
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

// Control_Monad_RWS_Trans_monadRecRWST
$Control_Monad_RWS_Trans_monadRecRWST = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_RWS_Trans_monadRWST, &$Data_Semigroup_append, &$Data_Monoid_mempty, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, &$Control_Monad_Rec_Class_Done, &$Control_Monad_RWS_Trans_RWST) {
  $__fn = function($dictMonadRec) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_RWS_Trans_monadRWST, &$Data_Semigroup_append, &$Data_Monoid_mempty, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, &$Control_Monad_Rec_Class_Done, &$Control_Monad_RWS_Trans_RWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadRec)->Monad0)($Prim_undefined);
$bind = ($Control_Bind_bind)((($Monad0)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$tailRecM = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
$monadRWST1 = ($Control_Monad_RWS_Trans_monadRWST)($Monad0);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $monadRWST1, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, &$Control_Monad_Rec_Class_Done, &$Control_Monad_RWS_Trans_RWST, $tailRecM) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $monadRWST1, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, &$Control_Monad_Rec_Class_Done, &$Control_Monad_RWS_Trans_RWST, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use ($bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, &$Control_Monad_Rec_Class_Done, &$Control_Monad_RWS_Trans_RWST, $tailRecM, $mempty) {
  $__fn = function($k, $a = null) use ($bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, &$Control_Monad_Rec_Class_Done, &$Control_Monad_RWS_Trans_RWST, $tailRecM, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$k__prime__ = (function() use ($k, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, &$Control_Monad_Rec_Class_Done) {
  $__body = function($r, $v) use ($k, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $r;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RWSResult")) {
$r1 = $__case_0;
$state = ($__case_1)->values[0];
$result = ($__case_1)->values[1];
$writer = ($__case_1)->values[2];
$v1 = ($k)($result);
$__case_0 = $v1;
if (true) {
$m = $__case_0;
return ($bind)(($m)($r1, $state), (function() use ($pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, $writer, &$Control_Monad_Rec_Class_Done) {
  $__body = function($v2) use ($pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, $writer, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "RWSResult")) {
$state__prime__ = ($__case_0)->values[0];
$result__prime__ = ($__case_0)->values[1];
$writer__prime__ = ($__case_0)->values[2];
return ($pure)((function() use ($result__prime__, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $state__prime__, $append, $writer, $writer__prime__, &$Control_Monad_Rec_Class_Done) {
$__case_0 = $result__prime__;
if ((($__case_0)->tag === "Loop")) {
$x = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Loop)(($Control_Monad_RWS_Trans_RWSResult)($state__prime__, $x, ($append)($writer, $writer__prime__)));
} else {
;
};
if ((($__case_0)->tag === "Done")) {
$y = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)(($Control_Monad_RWS_Trans_RWSResult)($state__prime__, $y, ($append)($writer, $writer__prime__)));
} else {
;
};
throw new \Exception("Pattern match failure");
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v2) use ($pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, $writer, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
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
})());
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $v = null) use ($k, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Control_Monad_RWS_Trans_RWSResult, $append, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($r, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($r, $v);
  };
  return $__fn;
})();
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($tailRecM, $k__prime__, &$Control_Monad_RWS_Trans_RWSResult, $a, $mempty) {
  $__fn = function($r, $s = null) use ($tailRecM, $k__prime__, &$Control_Monad_RWS_Trans_RWSResult, $a, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM)(($k__prime__)($r), ($Control_Monad_RWS_Trans_RWSResult)($s, $a, $mempty));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadStateRWST
$Control_Monad_RWS_Trans_monadStateRWST = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Data_Monoid_mempty, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Data_Monoid_mempty, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$monadRWST1 = ($Control_Monad_RWS_Trans_monadRWST)($dictMonad);
    $__res = (function() use (&$Data_Monoid_mempty, $monadRWST1, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, $monadRWST1, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($Control_Monad_State_Class_MonadState__dollar__Dict)((object)["state" => (function() use (&$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
  $__fn = function($f) use (&$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($f, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
  $__body = function($v, $s) use ($f, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty) {
    $v1 = ($f)($s);
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$s__prime__ = ($__case_0)->values[1];
return ($pure)(($Control_Monad_RWS_Trans_RWSResult)($s__prime__, $a, $mempty));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use ($f, $pure, &$Control_Monad_RWS_Trans_RWSResult, $mempty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $s);
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
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadTellRWST
$Control_Monad_RWS_Trans_monadTellRWST = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$monadRWST1 = ($Control_Monad_RWS_Trans_monadRWST)($dictMonad);
    $__res = (function() use (&$Prim_undefined, $monadRWST1, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit) {
  $__fn = function($dictMonoid) use (&$Prim_undefined, $monadRWST1, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Semigroup0 = (($dictMonoid)->Semigroup0)($Prim_undefined);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($Control_Monad_Writer_Class_MonadTell__dollar__Dict)((object)["tell" => (function() use (&$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit) {
  $__fn = function($w) use (&$Control_Monad_RWS_Trans_RWST, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit, $w) {
  $__fn = function($v, $s = null) use ($pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Unit_unit, $w, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Control_Monad_RWS_Trans_RWSResult)($s, $Data_Unit_unit, $w));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
})(), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Semigroup0;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadWriterRWST
$Control_Monad_RWS_Trans_monadWriterRWST = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_RWS_Trans_monadTellRWST, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_RWS_Trans_monadTellRWST, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$monadTellRWST1 = ($Control_Monad_RWS_Trans_monadTellRWST)($dictMonad);
    $__res = (function() use ($monadTellRWST1, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonoid) use ($monadTellRWST1, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadTellRWST2 = ($monadTellRWST1)($dictMonoid);
    $__res = ($Control_Monad_Writer_Class_MonadWriter__dollar__Dict)((object)["listen" => (function() use (&$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple) {
  $__fn = function($m) use (&$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($m, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple) {
  $__body = function($r, $s) use ($m, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($m__prime__)($r, $s), (function() use ($pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple) {
  $__body = function($v) use ($pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime__ = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
$w = ($__case_0)->values[2];
return ($pure)(($Control_Monad_RWS_Trans_RWSResult)($s__prime__, ($Data_Tuple_Tuple)($a, $w), $w));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $s = null) use ($m, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($r, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($r, $s);
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
})(), "pass" => (function() use (&$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult) {
  $__fn = function($m) use (&$Control_Monad_RWS_Trans_RWST, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($m, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult) {
  $__body = function($r, $s) use ($m, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($m__prime__)($r, $s), (function() use ($pure, &$Control_Monad_RWS_Trans_RWSResult) {
  $__body = function($v) use ($pure, &$Control_Monad_RWS_Trans_RWSResult) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "RWSResult") && ((($__case_0)->values[1])->tag === "Tuple"))) {
$s__prime__ = ($__case_0)->values[0];
$a = (($__case_0)->values[1])->values[0];
$f = (($__case_0)->values[1])->values[1];
$w = ($__case_0)->values[2];
return ($pure)(($Control_Monad_RWS_Trans_RWSResult)($s__prime__, $a, ($f)($w)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Control_Monad_RWS_Trans_RWSResult, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($r, $s = null) use ($m, $bind, $pure, &$Control_Monad_RWS_Trans_RWSResult, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($r, $s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($r, $s);
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
})(), "Monoid0" => (function() use ($dictMonoid) {
  $__fn = function($__dollar____unused) use ($dictMonoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $dictMonoid;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellRWST2) {
  $__fn = function($__dollar____unused) use ($monadTellRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadTellRWST2;
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

// Control_Monad_RWS_Trans_monadThrowRWST
$Control_Monad_RWS_Trans_monadThrowRWST = (function() use (&$Prim_undefined, &$Control_Monad_Error_Class_throwError, &$Control_Monad_RWS_Trans_monadRWST, &$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict) {
  $__fn = function($dictMonadThrow) use (&$Prim_undefined, &$Control_Monad_Error_Class_throwError, &$Control_Monad_RWS_Trans_monadRWST, &$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadThrow)->Monad0)($Prim_undefined);
$throwError = ($Control_Monad_Error_Class_throwError)($dictMonadThrow);
$monadRWST1 = ($Control_Monad_RWS_Trans_monadRWST)($Monad0);
    $__res = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Monad0, $monadRWST1, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, $throwError) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Monad0, $monadRWST1, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid), $Monad0);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => (function() use ($lift, $throwError) {
  $__fn = function($e) use ($lift, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lift)(($throwError)($e));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadErrorRWST
$Control_Monad_RWS_Trans_monadErrorRWST = (function() use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_RWS_Trans_monadThrowRWST, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_RWS_Trans_RWST) {
  $__fn = function($dictMonadError) use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_RWS_Trans_monadThrowRWST, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$catchError = ($Control_Monad_Error_Class_catchError)($dictMonadError);
$monadThrowRWST1 = ($Control_Monad_RWS_Trans_monadThrowRWST)((($dictMonadError)->MonadThrow0)($Prim_undefined));
    $__res = (function() use ($monadThrowRWST1, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $catchError) {
  $__fn = function($dictMonoid) use ($monadThrowRWST1, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, $catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadThrowRWST2 = ($monadThrowRWST1)($dictMonoid);
    $__res = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Control_Monad_RWS_Trans_RWST, $catchError) {
  $__fn = function($m, $h = null) use (&$Control_Monad_RWS_Trans_RWST, $catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_RWS_Trans_RWST)((function() use ($catchError, $m, $h) {
  $__fn = function($r, $s = null) use ($catchError, $m, $h, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($catchError)((function() use ($m, $r, $s) {
$__case_0 = $m;
if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)($r, $s);
} else {
;
};
throw new \Exception("Pattern match failure");
})(), (function() use ($h, $r, $s) {
  $__body = function($e) use ($h, $r, $s) {
    $v = ($h)($e);
    $__case_0 = $v;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)($r, $s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($e) use ($h, $r, $s, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($e);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($e);
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
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowRWST2) {
  $__fn = function($__dollar____unused) use ($monadThrowRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadThrowRWST2;
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

// Control_Monad_RWS_Trans_monadSTRWST
$Control_Monad_RWS_Trans_monadSTRWST = (function() use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_RWS_Trans_compose, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Trans_Class_lift, &$Control_Monad_RWS_Trans_monadTransRWST, &$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_RWS_Trans_compose, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift = ($Control_Monad_Trans_Class_lift)(($Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid));
    $__res = (function() use (&$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, $dictMonoid, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_RWS_Trans_compose, $lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, &$Control_Monad_RWS_Trans_monadRWST, $dictMonoid, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_RWS_Trans_compose, $lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadRWST1 = ($Control_Monad_RWS_Trans_monadRWST)($Monad0, $dictMonoid);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_RWS_Trans_compose)(($lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadRWST1) {
  $__fn = function($__dollar____unused) use ($monadRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadRWST1;
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

// Control_Monad_RWS_Trans_monoidRWST
$Control_Monad_RWS_Trans_monoidRWST = (function() use (&$Control_Monad_RWS_Trans_applicativeRWST, &$Control_Monad_RWS_Trans_semigroupRWST, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictMonad) use (&$Control_Monad_RWS_Trans_applicativeRWST, &$Control_Monad_RWS_Trans_semigroupRWST, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeRWST1 = ($Control_Monad_RWS_Trans_applicativeRWST)($dictMonad);
$semigroupRWST1 = ($Control_Monad_RWS_Trans_semigroupRWST)((($dictMonad)->Bind1)($Prim_undefined));
    $__res = (function() use (&$Control_Applicative_pure, $applicativeRWST1, $semigroupRWST1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Control_Applicative_pure, $applicativeRWST1, $semigroupRWST1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)(($applicativeRWST1)($dictMonoid));
$semigroupRWST2 = ($semigroupRWST1)($dictMonoid);
    $__res = (function() use ($semigroupRWST2, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid1) use ($semigroupRWST2, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupRWST3 = ($semigroupRWST2)((($dictMonoid1)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($pure)(($Data_Monoid_mempty)($dictMonoid1)), "Semigroup0" => (function() use ($semigroupRWST3) {
  $__fn = function($__dollar____unused) use ($semigroupRWST3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupRWST3;
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

// Control_Monad_RWS_Trans_altRWST
$Control_Monad_RWS_Trans_altRWST = (function() use (&$Control_Alt_alt, &$Control_Monad_RWS_Trans_functorRWST, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_RWS_Trans_RWST) {
  $__fn = function($dictAlt) use (&$Control_Alt_alt, &$Control_Monad_RWS_Trans_functorRWST, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$functorRWST1 = ($Control_Monad_RWS_Trans_functorRWST)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Control_Monad_RWS_Trans_RWST, $alt) {
  $__body = function($v, $v1) use (&$Control_Monad_RWS_Trans_RWST, $alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($Control_Monad_RWS_Trans_RWST)((function() use ($alt, $m, $n) {
  $__fn = function($r, $s = null) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($m)($r, $s), ($n)($r, $s));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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
  $__fn = function($v, $v1 = null) use (&$Control_Monad_RWS_Trans_RWST, $alt, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorRWST1;
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

// Control_Monad_RWS_Trans_plusRWST
$Control_Monad_RWS_Trans_plusRWST = (function() use (&$Control_Plus_empty, &$Control_Monad_RWS_Trans_altRWST, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_RWS_Trans_RWST) {
  $__fn = function($dictPlus) use (&$Control_Plus_empty, &$Control_Monad_RWS_Trans_altRWST, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_RWS_Trans_RWST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$empty = ($Control_Plus_empty)($dictPlus);
$altRWST1 = ($Control_Monad_RWS_Trans_altRWST)((($dictPlus)->Alt0)($Prim_undefined));
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_RWS_Trans_RWST)((function() use ($empty) {
  $__fn = function($v, $v1 = null) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $empty;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()), "Alt0" => (function() use ($altRWST1) {
  $__fn = function($__dollar____unused) use ($altRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altRWST1;
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

// Control_Monad_RWS_Trans_alternativeRWST
$Control_Monad_RWS_Trans_alternativeRWST = (function() use (&$Control_Monad_RWS_Trans_plusRWST, &$Prim_undefined, &$Control_Monad_RWS_Trans_applicativeRWST, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonoid, $dictAlternative = null) use (&$Control_Monad_RWS_Trans_plusRWST, &$Prim_undefined, &$Control_Monad_RWS_Trans_applicativeRWST, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$plusRWST1 = ($Control_Monad_RWS_Trans_plusRWST)((($dictAlternative)->Plus1)($Prim_undefined));
    $__res = (function() use (&$Control_Monad_RWS_Trans_applicativeRWST, $dictMonoid, &$Control_Alternative_Alternative__dollar__Dict, $plusRWST1) {
  $__fn = function($dictMonad) use (&$Control_Monad_RWS_Trans_applicativeRWST, $dictMonoid, &$Control_Alternative_Alternative__dollar__Dict, $plusRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeRWST1 = ($Control_Monad_RWS_Trans_applicativeRWST)($dictMonad, $dictMonoid);
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeRWST1) {
  $__fn = function($__dollar____unused) use ($applicativeRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeRWST1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusRWST1) {
  $__fn = function($__dollar____unused) use ($plusRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusRWST1;
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
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

