<?php

namespace Control\Monad\State\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
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


// Control_Monad_State_Trans_compose
$Control_Monad_State_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_State_Trans_StateT
$Control_Monad_State_Trans_StateT = (function() {
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

// Control_Monad_State_Trans_withStateT
$Control_Monad_State_Trans_withStateT = (function() use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose) {
  $__body = function($f, $v) use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$s = $__case_1;
return ($Control_Monad_State_Trans_StateT)(($Control_Monad_State_Trans_compose)($s, $f1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose, $__body, &$__fn) {
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

// Control_Monad_State_Trans_runStateT
$Control_Monad_State_Trans_runStateT = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return $s;
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

// Control_Monad_State_Trans_newtypeStateT
$Control_Monad_State_Trans_newtypeStateT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Monad_State_Trans_monadTransStateT
$Control_Monad_State_Trans_monadTransStateT = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use (&$Control_Monad_State_Trans_StateT, $bind, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($m) use (&$Control_Monad_State_Trans_StateT, $bind, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($bind, $m, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($s) use ($bind, $m, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($m, (function() use ($pure, &$Data_Tuple_Tuple, $s) {
  $__fn = function($x) use ($pure, &$Data_Tuple_Tuple, $s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Data_Tuple_Tuple)($x, $s));
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

// Control_Monad_State_Trans_lift
$Control_Monad_State_Trans_lift = ($Control_Monad_Trans_Class_lift)($Control_Monad_State_Trans_monadTransStateT);

// Control_Monad_State_Trans_mapStateT
$Control_Monad_State_Trans_mapStateT = (function() use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose) {
  $__body = function($f, $v) use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_State_Trans_StateT)(($Control_Monad_State_Trans_compose)($f1, $m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose, $__body, &$__fn) {
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

// Control_Monad_State_Trans_lazyStateT
$Control_Monad_State_Trans_lazyStateT = ($Control_Lazy_Lazy__dollar__Dict)((object)["defer" => (function() use (&$Control_Monad_State_Trans_StateT, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Control_Monad_State_Trans_StateT, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($f, &$Data_Unit_unit) {
  $__body = function($s) use ($f, &$Data_Unit_unit) {
    $v = ($f)($Data_Unit_unit);
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s) use ($f, &$Data_Unit_unit, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($s);
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

// Control_Monad_State_Trans_functorStateT
$Control_Monad_State_Trans_functorStateT = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_State_Trans_StateT, $map, &$Data_Tuple_Tuple) {
  $__body = function($f, $v) use (&$Control_Monad_State_Trans_StateT, $map, &$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($Control_Monad_State_Trans_StateT)((function() use ($map, &$Data_Tuple_Tuple, $f1, $a) {
  $__fn = function($s) use ($map, &$Data_Tuple_Tuple, $f1, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map)((function() use (&$Data_Tuple_Tuple, $f1) {
  $__body = function($v1) use (&$Data_Tuple_Tuple, $f1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$b = ($__case_0)->values[0];
$s__prime__ = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)(($f1)($b), $s__prime__);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use (&$Data_Tuple_Tuple, $f1, $__body, &$__fn) {
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
})(), ($a)($s));
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
  $__fn = function($f, $v = null) use (&$Control_Monad_State_Trans_StateT, $map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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

// Control_Monad_State_Trans_execStateT
$Control_Monad_State_Trans_execStateT = (function() use (&$Data_Functor_map, &$Data_Tuple_snd) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map, &$Data_Tuple_snd) {
  $__body = function($v, $s) use ($map, &$Data_Tuple_snd) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
return ($map)($Data_Tuple_snd, ($m)($s1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use ($map, &$Data_Tuple_snd, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_State_Trans_evalStateT
$Control_Monad_State_Trans_evalStateT = (function() use (&$Data_Functor_map, &$Data_Tuple_fst) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Tuple_fst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map, &$Data_Tuple_fst) {
  $__body = function($v, $s) use ($map, &$Data_Tuple_fst) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$m = $__case_0;
$s1 = $__case_1;
return ($map)($Data_Tuple_fst, ($m)($s1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $s = null) use ($map, &$Data_Tuple_fst, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_State_Trans_monadStateT
$Control_Monad_State_Trans_monadStateT = (function() use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_State_Trans_applicativeStateT, &$Control_Monad_State_Trans_bindStateT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_State_Trans_applicativeStateT, &$Control_Monad_State_Trans_bindStateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_State_Trans_applicativeStateT, &$Control_Monad_State_Trans_bindStateT) {
while (true) {
return ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Control_Monad_State_Trans_applicativeStateT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_State_Trans_applicativeStateT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_applicativeStateT)($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Control_Monad_State_Trans_bindStateT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_State_Trans_bindStateT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_bindStateT)($dictMonad);
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

// Control_Monad_State_Trans_bindStateT
$Control_Monad_State_Trans_bindStateT = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_applyStateT) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_applyStateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_applyStateT) {
while (true) {
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
return ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Control_Monad_State_Trans_StateT, $bind) {
  $__body = function($v, $f) use (&$Control_Monad_State_Trans_StateT, $bind) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($Control_Monad_State_Trans_StateT)((function() use ($bind, $x, $f1) {
  $__fn = function($s) use ($bind, $x, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($x)($s), (function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$v2 = ($__case_0)->values[0];
$s__prime__ = ($__case_0)->values[1];
$v3 = ($f1)($v2);
$__case_0 = $v3;
if (true) {
$st = $__case_0;
return ($st)($s__prime__);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
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
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $f = null) use (&$Control_Monad_State_Trans_StateT, $bind, $__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Control_Monad_State_Trans_applyStateT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_State_Trans_applyStateT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_applyStateT)($dictMonad);
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

// Control_Monad_State_Trans_applyStateT
$Control_Monad_State_Trans_applyStateT = (function() use (&$Control_Monad_State_Trans_functorStateT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_State_Trans_monadStateT) {
  $__fn = function($dictMonad) use (&$Control_Monad_State_Trans_functorStateT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_State_Trans_monadStateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_State_Trans_functorStateT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_State_Trans_monadStateT) {
while (true) {
$functorStateT1 = ($Control_Monad_State_Trans_functorStateT)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Control_Monad_ap)(($Control_Monad_State_Trans_monadStateT)($dictMonad)), "Functor0" => (function() use ($functorStateT1) {
  $__fn = function($__dollar____unused) use ($functorStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorStateT1;
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

// Control_Monad_State_Trans_applicativeStateT
$Control_Monad_State_Trans_applicativeStateT = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$Control_Monad_State_Trans_applyStateT) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$Control_Monad_State_Trans_applyStateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$Control_Monad_State_Trans_applyStateT) {
while (true) {
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
return ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Control_Monad_State_Trans_StateT, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($a) use (&$Control_Monad_State_Trans_StateT, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($pure, &$Data_Tuple_Tuple, $a) {
  $__fn = function($s) use ($pure, &$Data_Tuple_Tuple, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Data_Tuple_Tuple)($a, $s));
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
})(), "Apply0" => (function() use (&$Control_Monad_State_Trans_applyStateT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_State_Trans_applyStateT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_applyStateT)($dictMonad);
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

// Control_Monad_State_Trans_semigroupStateT
$Control_Monad_State_Trans_semigroupStateT = (function() use (&$Control_Apply_lift2, &$Control_Monad_State_Trans_applyStateT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictMonad) use (&$Control_Apply_lift2, &$Control_Monad_State_Trans_applyStateT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)(($Control_Monad_State_Trans_applyStateT)($dictMonad));
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

// Control_Monad_State_Trans_monadAskStateT
$Control_Monad_State_Trans_monadAskStateT = (function() use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_State_Trans_lift, &$Control_Monad_Reader_Class_ask) {
  $__fn = function($dictMonadAsk) use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_State_Trans_lift, &$Control_Monad_Reader_Class_ask, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadAsk)->Monad0)($Prim_undefined);
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($Monad0);
    $__res = ($Control_Monad_Reader_Class_MonadAsk__dollar__Dict)((object)["ask" => ($Control_Monad_State_Trans_lift)($Monad0, ($Control_Monad_Reader_Class_ask)($dictMonadAsk)), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monadReaderStateT
$Control_Monad_State_Trans_monadReaderStateT = (function() use (&$Control_Monad_State_Trans_monadAskStateT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_mapStateT, &$Control_Monad_Reader_Class_local) {
  $__fn = function($dictMonadReader) use (&$Control_Monad_State_Trans_monadAskStateT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_mapStateT, &$Control_Monad_Reader_Class_local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadAskStateT1 = ($Control_Monad_State_Trans_monadAskStateT)((($dictMonadReader)->MonadAsk0)($Prim_undefined));
    $__res = ($Control_Monad_Reader_Class_MonadReader__dollar__Dict)((object)["local" => ($Control_Monad_State_Trans_compose)($Control_Monad_State_Trans_mapStateT, ($Control_Monad_Reader_Class_local)($dictMonadReader)), "MonadAsk0" => (function() use ($monadAskStateT1) {
  $__fn = function($__dollar____unused) use ($monadAskStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadAskStateT1;
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

// Control_Monad_State_Trans_monadContStateT
$Control_Monad_State_Trans_monadContStateT = (function() use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_State_Trans_monadStateT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadCont) use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_State_Trans_monadStateT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$callCC = ($Control_Monad_Cont_Class_callCC)($dictMonadCont);
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)((($dictMonadCont)->Monad0)($Prim_undefined));
    $__res = ($Control_Monad_Cont_Class_MonadCont__dollar__Dict)((object)["callCC" => (function() use (&$Control_Monad_State_Trans_StateT, $callCC, &$Data_Tuple_Tuple) {
  $__fn = function($f) use (&$Control_Monad_State_Trans_StateT, $callCC, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($callCC, $f, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple) {
  $__fn = function($s) use ($callCC, $f, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($callCC)((function() use ($f, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, $s) {
  $__body = function($c) use ($f, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, $s) {
    $v = ($f)((function() use (&$Control_Monad_State_Trans_StateT, $c, &$Data_Tuple_Tuple) {
  $__fn = function($a) use (&$Control_Monad_State_Trans_StateT, $c, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($c, &$Data_Tuple_Tuple, $a) {
  $__fn = function($s__prime__) use ($c, &$Data_Tuple_Tuple, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($c)(($Data_Tuple_Tuple)($a, $s__prime__));
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
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($c) use ($f, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, $s, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($c);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($c);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monadEffectState
$Control_Monad_State_Trans_monadEffectState = (function() use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($Monad0);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_State_Trans_compose)(($Control_Monad_State_Trans_lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monadRecStateT
$Control_Monad_State_Trans_monadRecStateT = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, &$Control_Monad_State_Trans_StateT) {
  $__fn = function($dictMonadRec) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Rec_Class_tailRecM, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, &$Control_Monad_State_Trans_StateT, &$__fn) {
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
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($Monad0);
    $__res = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use ($bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, &$Control_Monad_State_Trans_StateT, $tailRecM) {
  $__fn = function($f, $a = null) use ($bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, &$Control_Monad_State_Trans_StateT, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$f__prime__ = (function() use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done) {
  $__body = function($v) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a__prime__ = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$v1 = ($f)($a__prime__);
$__case_0 = $v1;
if (true) {
$st = $__case_0;
return ($bind)(($st)($s), (function() use ($pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done) {
  $__body = function($v2) use ($pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Tuple")) {
$m = ($__case_0)->values[0];
$s1 = ($__case_0)->values[1];
return ($pure)((function() use ($m, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, $s1, &$Control_Monad_Rec_Class_Done) {
$__case_0 = $m;
if ((($__case_0)->tag === "Loop")) {
$x = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Loop)(($Data_Tuple_Tuple)($x, $s1));
} else {
;
};
if ((($__case_0)->tag === "Done")) {
$y = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)(($Data_Tuple_Tuple)($y, $s1));
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
  $__fn = function($v2) use ($pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
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
  $__fn = function($v) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Loop, &$Data_Tuple_Tuple, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
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
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($tailRecM, $f__prime__, &$Data_Tuple_Tuple, $a) {
  $__fn = function($s) use ($tailRecM, $f__prime__, &$Data_Tuple_Tuple, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($tailRecM)($f__prime__, ($Data_Tuple_Tuple)($a, $s));
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
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monadStateStateT
$Control_Monad_State_Trans_monadStateStateT = (function() use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($dictMonad);
    $__res = ($Control_Monad_State_Class_MonadState__dollar__Dict)((object)["state" => (function() use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose, $pure) {
  $__fn = function($f) use (&$Control_Monad_State_Trans_StateT, &$Control_Monad_State_Trans_compose, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)(($Control_Monad_State_Trans_compose)($pure, $f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monadTellStateT
$Control_Monad_State_Trans_monadTellStateT = (function() use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_lift, &$Control_Monad_Writer_Class_tell) {
  $__fn = function($dictMonadTell) use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_lift, &$Control_Monad_Writer_Class_tell, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad1 = (($dictMonadTell)->Monad1)($Prim_undefined);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($Prim_undefined);
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($Monad1);
    $__res = ($Control_Monad_Writer_Class_MonadTell__dollar__Dict)((object)["tell" => ($Control_Monad_State_Trans_compose)(($Control_Monad_State_Trans_lift)($Monad1), ($Control_Monad_Writer_Class_tell)($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
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
})(), "Monad1" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monadWriterStateT
$Control_Monad_State_Trans_monadWriterStateT = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_pass, &$Control_Monad_State_Trans_monadTellStateT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple) {
  $__fn = function($dictMonadWriter) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_pass, &$Control_Monad_State_Trans_monadTellStateT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadTell1 = (($dictMonadWriter)->MonadTell1)($Prim_undefined);
$Monad1 = (($MonadTell1)->Monad1)($Prim_undefined);
$bind = ($Control_Bind_bind)((($Monad1)->Bind1)($Prim_undefined));
$listen = ($Control_Monad_Writer_Class_listen)($dictMonadWriter);
$pure = ($Control_Applicative_pure)((($Monad1)->Applicative0)($Prim_undefined));
$pass = ($Control_Monad_Writer_Class_pass)($dictMonadWriter);
$Monoid0 = (($dictMonadWriter)->Monoid0)($Prim_undefined);
$monadTellStateT1 = ($Control_Monad_State_Trans_monadTellStateT)($MonadTell1);
    $__res = ($Control_Monad_Writer_Class_MonadWriter__dollar__Dict)((object)["listen" => (function() use (&$Control_Monad_State_Trans_StateT, $bind, $listen, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($m) use (&$Control_Monad_State_Trans_StateT, $bind, $listen, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($m, $bind, $listen, $pure, &$Data_Tuple_Tuple) {
  $__body = function($s) use ($m, $bind, $listen, $pure, &$Data_Tuple_Tuple) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($listen)(($m__prime__)($s)), (function() use ($pure, &$Data_Tuple_Tuple) {
  $__body = function($v) use ($pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$s__prime__ = (($__case_0)->values[0])->values[1];
$w = ($__case_0)->values[1];
return ($pure)(($Data_Tuple_Tuple)(($Data_Tuple_Tuple)($a, $w), $s__prime__));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
  $__fn = function($s) use ($m, $bind, $listen, $pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($s);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($s);
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
})(), "pass" => (function() use (&$Control_Monad_State_Trans_StateT, $pass, $bind, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($m) use (&$Control_Monad_State_Trans_StateT, $pass, $bind, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_State_Trans_StateT)((function() use ($pass, $m, $bind, $pure, &$Data_Tuple_Tuple) {
  $__fn = function($s) use ($pass, $m, $bind, $pure, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pass)((function() use ($m, $bind, $s, $pure, &$Data_Tuple_Tuple) {
$__case_0 = $m;
if (true) {
$m__prime__ = $__case_0;
return ($bind)(($m__prime__)($s), (function() use ($pure, &$Data_Tuple_Tuple) {
  $__body = function($v) use ($pure, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$f = (($__case_0)->values[0])->values[1];
$s__prime__ = ($__case_0)->values[1];
return ($pure)(($Data_Tuple_Tuple)(($Data_Tuple_Tuple)($a, $s__prime__), $f));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})());
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
})(), "Monoid0" => (function() use (&$Monoid0) {
  $__fn = function($__dollar____unused) use (&$Monoid0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Monoid0;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellStateT1) {
  $__fn = function($__dollar____unused) use ($monadTellStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadTellStateT1;
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

// Control_Monad_State_Trans_monadThrowStateT
$Control_Monad_State_Trans_monadThrowStateT = (function() use (&$Prim_undefined, &$Control_Monad_State_Trans_lift, &$Control_Monad_Error_Class_throwError, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict) {
  $__fn = function($dictMonadThrow) use (&$Prim_undefined, &$Control_Monad_State_Trans_lift, &$Control_Monad_Error_Class_throwError, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadThrow)->Monad0)($Prim_undefined);
$lift1 = ($Control_Monad_State_Trans_lift)($Monad0);
$throwError = ($Control_Monad_Error_Class_throwError)($dictMonadThrow);
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($Monad0);
    $__res = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => (function() use ($lift1, $throwError) {
  $__fn = function($e) use ($lift1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lift1)(($throwError)($e));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monadErrorStateT
$Control_Monad_State_Trans_monadErrorStateT = (function() use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_State_Trans_monadThrowStateT, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_State_Trans_StateT) {
  $__fn = function($dictMonadError) use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_State_Trans_monadThrowStateT, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$catchError = ($Control_Monad_Error_Class_catchError)($dictMonadError);
$monadThrowStateT1 = ($Control_Monad_State_Trans_monadThrowStateT)((($dictMonadError)->MonadThrow0)($Prim_undefined));
    $__res = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Control_Monad_State_Trans_StateT, $catchError) {
  $__body = function($v, $h) use (&$Control_Monad_State_Trans_StateT, $catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return ($Control_Monad_State_Trans_StateT)((function() use ($catchError, $m, $h1) {
  $__fn = function($s) use ($catchError, $m, $h1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($catchError)(($m)($s), (function() use ($h1, $s) {
  $__body = function($e) use ($h1, $s) {
    $v1 = ($h1)($e);
    $__case_0 = $v1;
    if (true) {
$f = $__case_0;
return ($f)($s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($e) use ($h1, $s, $__body, &$__fn) {
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
  $__fn = function($v, $h = null) use (&$Control_Monad_State_Trans_StateT, $catchError, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $h);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $h);
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowStateT1) {
  $__fn = function($__dollar____unused) use ($monadThrowStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadThrowStateT1;
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

// Control_Monad_State_Trans_monadSTStateT
$Control_Monad_State_Trans_monadSTStateT = (function() use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_State_Trans_compose, &$Control_Monad_State_Trans_lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($Monad0);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_State_Trans_compose)(($Control_Monad_State_Trans_lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
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

// Control_Monad_State_Trans_monoidStateT
$Control_Monad_State_Trans_monoidStateT = (function() use (&$Control_Applicative_pure, &$Control_Monad_State_Trans_applicativeStateT, &$Control_Monad_State_Trans_semigroupStateT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Control_Monad_State_Trans_applicativeStateT, &$Control_Monad_State_Trans_semigroupStateT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)(($Control_Monad_State_Trans_applicativeStateT)($dictMonad));
$semigroupStateT1 = ($Control_Monad_State_Trans_semigroupStateT)($dictMonad);
    $__res = (function() use ($semigroupStateT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use ($semigroupStateT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupStateT2 = ($semigroupStateT1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($pure)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupStateT2) {
  $__fn = function($__dollar____unused) use ($semigroupStateT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupStateT2;
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

// Control_Monad_State_Trans_altStateT
$Control_Monad_State_Trans_altStateT = (function() use (&$Control_Alt_alt, &$Control_Monad_State_Trans_functorStateT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_State_Trans_StateT) {
  $__fn = function($dictMonad, $dictAlt = null) use (&$Control_Alt_alt, &$Control_Monad_State_Trans_functorStateT, &$Prim_undefined, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)($dictAlt);
$functorStateT1 = ($Control_Monad_State_Trans_functorStateT)((($dictAlt)->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Control_Monad_State_Trans_StateT, $alt) {
  $__body = function($v, $v1) use (&$Control_Monad_State_Trans_StateT, $alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Control_Monad_State_Trans_StateT)((function() use ($alt, $x, $y) {
  $__fn = function($s) use ($alt, $x, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($alt)(($x)($s), ($y)($s));
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
  $__fn = function($v, $v1 = null) use (&$Control_Monad_State_Trans_StateT, $alt, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorStateT1) {
  $__fn = function($__dollar____unused) use ($functorStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorStateT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_State_Trans_plusStateT
$Control_Monad_State_Trans_plusStateT = (function() use (&$Control_Monad_State_Trans_altStateT, &$Control_Plus_empty, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_State_Trans_StateT) {
  $__fn = function($dictMonad) use (&$Control_Monad_State_Trans_altStateT, &$Control_Plus_empty, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$altStateT1 = ($Control_Monad_State_Trans_altStateT)($dictMonad);
    $__res = (function() use (&$Control_Plus_empty, $altStateT1, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_State_Trans_StateT) {
  $__fn = function($dictPlus) use (&$Control_Plus_empty, $altStateT1, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_State_Trans_StateT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$empty = ($Control_Plus_empty)($dictPlus);
$altStateT2 = ($altStateT1)((($dictPlus)->Alt0)($Prim_undefined));
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_State_Trans_StateT)((function() use ($empty) {
  $__fn = function($v) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $empty;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "Alt0" => (function() use ($altStateT2) {
  $__fn = function($__dollar____unused) use ($altStateT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altStateT2;
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

// Control_Monad_State_Trans_alternativeStateT
$Control_Monad_State_Trans_alternativeStateT = (function() use (&$Control_Monad_State_Trans_applicativeStateT, &$Control_Monad_State_Trans_plusStateT, &$Prim_undefined, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_State_Trans_applicativeStateT, &$Control_Monad_State_Trans_plusStateT, &$Prim_undefined, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeStateT1 = ($Control_Monad_State_Trans_applicativeStateT)($dictMonad);
$plusStateT1 = ($Control_Monad_State_Trans_plusStateT)($dictMonad);
    $__res = (function() use ($plusStateT1, &$Prim_undefined, &$Control_Alternative_Alternative__dollar__Dict, $applicativeStateT1) {
  $__fn = function($dictAlternative) use ($plusStateT1, &$Prim_undefined, &$Control_Alternative_Alternative__dollar__Dict, $applicativeStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$plusStateT2 = ($plusStateT1)((($dictAlternative)->Plus1)($Prim_undefined));
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeStateT1) {
  $__fn = function($__dollar____unused) use ($applicativeStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeStateT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusStateT2) {
  $__fn = function($__dollar____unused) use ($plusStateT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusStateT2;
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

// Control_Monad_State_Trans_monadPlusStateT
$Control_Monad_State_Trans_monadPlusStateT = (function() use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_State_Trans_alternativeStateT, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonadPlus) use (&$Prim_undefined, &$Control_Monad_State_Trans_monadStateT, &$Control_Monad_State_Trans_alternativeStateT, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadPlus)->Monad0)($Prim_undefined);
$monadStateT1 = ($Control_Monad_State_Trans_monadStateT)($Monad0);
$alternativeStateT1 = ($Control_Monad_State_Trans_alternativeStateT)($Monad0, (($dictMonadPlus)->Alternative1)($Prim_undefined));
    $__res = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use ($monadStateT1) {
  $__fn = function($__dollar____unused) use ($monadStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadStateT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeStateT1) {
  $__fn = function($__dollar____unused) use ($alternativeStateT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $alternativeStateT1;
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

