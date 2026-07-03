<?php

namespace Control\Monad\Except\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Except_Trans_map
$Control_Monad_Except_Trans_map = ($Data_Functor_map)($Data_Either_functorEither);

// Control_Monad_Except_Trans_compose
$Control_Monad_Except_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Except_Trans_identity
$Control_Monad_Except_Trans_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Control_Monad_Except_Trans_ExceptT
$Control_Monad_Except_Trans_ExceptT = (function() {
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

// Control_Monad_Except_Trans_withExceptT
$Control_Monad_Except_Trans_withExceptT = (function() use (&$Data_Functor_map, &$Data_Either_Right, &$Data_Either_Left, &$Control_Monad_Except_Trans_ExceptT) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Either_Right, &$Data_Either_Left, &$Control_Monad_Except_Trans_ExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Either_Right, &$Data_Either_Left, &$Control_Monad_Except_Trans_ExceptT, $map1) {
  $__body = function($f, $v) use (&$Data_Either_Right, &$Data_Either_Left, &$Control_Monad_Except_Trans_ExceptT, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$t = $__case_1;
$mapLeft = (function() use (&$Data_Either_Right, &$Data_Either_Left) {
  $__body = function($v1, $v2) use (&$Data_Either_Right, &$Data_Either_Left) {
    $__case_0 = $v1;
    $__case_1 = $v2;
    if ((($__case_1)->tag === "Right")) {
$x = ($__case_1)->values[0];
return ($Data_Either_Right)($x);
} else {
;
};
    if ((($__case_1)->tag === "Left")) {
$f__prime__ = $__case_0;
$x = ($__case_1)->values[0];
return ($Data_Either_Left)(($f__prime__)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1, $v2 = null) use (&$Data_Either_Right, &$Data_Either_Left, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v1, $v2);
  };
  return $__fn;
})();
return ($Control_Monad_Except_Trans_ExceptT)(($map1)(($mapLeft)($f1), $t));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Either_Right, &$Data_Either_Left, &$Control_Monad_Except_Trans_ExceptT, $map1, $__body, &$__fn) {
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

// Control_Monad_Except_Trans_runExceptT
$Control_Monad_Except_Trans_runExceptT = (function() {
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

// Control_Monad_Except_Trans_newtypeExceptT
$Control_Monad_Except_Trans_newtypeExceptT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Monad_Except_Trans_monadTransExceptT
$Control_Monad_Except_Trans_monadTransExceptT = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use (&$Control_Monad_Except_Trans_ExceptT, $bind, $pure, &$Data_Either_Right) {
  $__fn = function($m) use (&$Control_Monad_Except_Trans_ExceptT, $bind, $pure, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_ExceptT)(($bind)($m, (function() use ($pure, &$Data_Either_Right) {
  $__fn = function($a) use ($pure, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($Data_Either_Right)($a));
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
})()]);

// Control_Monad_Except_Trans_lift
$Control_Monad_Except_Trans_lift = ($Control_Monad_Trans_Class_lift)($Control_Monad_Except_Trans_monadTransExceptT);

// Control_Monad_Except_Trans_mapExceptT
$Control_Monad_Except_Trans_mapExceptT = (function() use (&$Control_Monad_Except_Trans_ExceptT) {
  $__body = function($f, $v) use (&$Control_Monad_Except_Trans_ExceptT) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Except_Trans_ExceptT)(($f1)($m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_Except_Trans_ExceptT, $__body, &$__fn) {
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

// Control_Monad_Except_Trans_functorExceptT
$Control_Monad_Except_Trans_functorExceptT = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Except_Trans_mapExceptT, &$Control_Monad_Except_Trans_map) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Except_Trans_mapExceptT, &$Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_Except_Trans_mapExceptT, $map1, &$Control_Monad_Except_Trans_map) {
  $__fn = function($f) use (&$Control_Monad_Except_Trans_mapExceptT, $map1, &$Control_Monad_Except_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_mapExceptT)(($map1)(($Control_Monad_Except_Trans_map)($f)));
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

// Control_Monad_Except_Trans_except
$Control_Monad_Except_Trans_except = (function() use (&$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use (&$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_compose)($Control_Monad_Except_Trans_ExceptT, ($Control_Applicative_pure)($dictApplicative));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Except_Trans_monadExceptT
$Control_Monad_Except_Trans_monadExceptT = (function() use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_Except_Trans_applicativeExceptT, &$Control_Monad_Except_Trans_bindExceptT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_Except_Trans_applicativeExceptT, &$Control_Monad_Except_Trans_bindExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_Except_Trans_applicativeExceptT, &$Control_Monad_Except_Trans_bindExceptT) {
while (true) {
return ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Control_Monad_Except_Trans_applicativeExceptT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Except_Trans_applicativeExceptT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_applicativeExceptT)($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Control_Monad_Except_Trans_bindExceptT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Except_Trans_bindExceptT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_bindExceptT)($dictMonad);
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

// Control_Monad_Except_Trans_bindExceptT
$Control_Monad_Except_Trans_bindExceptT = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, &$Data_Either_Left, &$Control_Monad_Except_Trans_applyExceptT) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, &$Data_Either_Left, &$Control_Monad_Except_Trans_applyExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, &$Data_Either_Left, &$Control_Monad_Except_Trans_applyExceptT) {
while (true) {
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
return ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Control_Monad_Except_Trans_ExceptT, $bind, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, $pure, &$Data_Either_Left) {
  $__body = function($v, $k) use (&$Control_Monad_Except_Trans_ExceptT, $bind, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, $pure, &$Data_Either_Left) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($Control_Monad_Except_Trans_ExceptT)(($bind)($m, ($Data_Either_either)(($Control_Monad_Except_Trans_compose)($pure, $Data_Either_Left), (function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($a);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($a);
  };
  return $__fn;
})())));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $k = null) use (&$Control_Monad_Except_Trans_ExceptT, $bind, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, $pure, &$Data_Either_Left, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $k);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $k);
  };
  return $__fn;
})(), "Apply0" => (function() use (&$Control_Monad_Except_Trans_applyExceptT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Except_Trans_applyExceptT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_applyExceptT)($dictMonad);
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

// Control_Monad_Except_Trans_applyExceptT
$Control_Monad_Except_Trans_applyExceptT = (function() use (&$Control_Monad_Except_Trans_functorExceptT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_Except_Trans_monadExceptT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Except_Trans_functorExceptT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_Except_Trans_monadExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_Except_Trans_functorExceptT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_Except_Trans_monadExceptT) {
while (true) {
$functorExceptT1 = ($Control_Monad_Except_Trans_functorExceptT)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Control_Monad_ap)(($Control_Monad_Except_Trans_monadExceptT)($dictMonad)), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorExceptT1;
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

// Control_Monad_Except_Trans_applicativeExceptT
$Control_Monad_Except_Trans_applicativeExceptT = (function() use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Either_Right, &$Control_Monad_Except_Trans_applyExceptT) {
  $__fn = function($dictMonad) use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Either_Right, &$Control_Monad_Except_Trans_applyExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Either_Right, &$Control_Monad_Except_Trans_applyExceptT) {
while (true) {
return ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Control_Monad_Except_Trans_compose)($Control_Monad_Except_Trans_ExceptT, ($Control_Monad_Except_Trans_compose)(($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined)), $Data_Either_Right)), "Apply0" => (function() use (&$Control_Monad_Except_Trans_applyExceptT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Except_Trans_applyExceptT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_applyExceptT)($dictMonad);
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

// Control_Monad_Except_Trans_semigroupExceptT
$Control_Monad_Except_Trans_semigroupExceptT = (function() use (&$Control_Apply_lift2, &$Control_Monad_Except_Trans_applyExceptT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictMonad) use (&$Control_Apply_lift2, &$Control_Monad_Except_Trans_applyExceptT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)(($Control_Monad_Except_Trans_applyExceptT)($dictMonad));
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

// Control_Monad_Except_Trans_monadAskExceptT
$Control_Monad_Except_Trans_monadAskExceptT = (function() use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Except_Trans_lift, &$Control_Monad_Reader_Class_ask) {
  $__fn = function($dictMonadAsk) use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Except_Trans_lift, &$Control_Monad_Reader_Class_ask, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadAsk)->Monad0)($Prim_undefined);
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($Monad0);
    $__res = ($Control_Monad_Reader_Class_MonadAsk__dollar__Dict)((object)["ask" => ($Control_Monad_Except_Trans_lift)($Monad0, ($Control_Monad_Reader_Class_ask)($dictMonadAsk)), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monadReaderExceptT
$Control_Monad_Except_Trans_monadReaderExceptT = (function() use (&$Control_Monad_Reader_Class_local, &$Control_Monad_Except_Trans_monadAskExceptT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Except_Trans_mapExceptT) {
  $__fn = function($dictMonadReader) use (&$Control_Monad_Reader_Class_local, &$Control_Monad_Except_Trans_monadAskExceptT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Except_Trans_mapExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$local = ($Control_Monad_Reader_Class_local)($dictMonadReader);
$monadAskExceptT1 = ($Control_Monad_Except_Trans_monadAskExceptT)((($dictMonadReader)->MonadAsk0)($Prim_undefined));
    $__res = ($Control_Monad_Reader_Class_MonadReader__dollar__Dict)((object)["local" => (function() use (&$Control_Monad_Except_Trans_mapExceptT, $local) {
  $__fn = function($f) use (&$Control_Monad_Except_Trans_mapExceptT, $local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_mapExceptT)(($local)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskExceptT1) {
  $__fn = function($__dollar____unused) use ($monadAskExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadAskExceptT1;
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

// Control_Monad_Except_Trans_monadContExceptT
$Control_Monad_Except_Trans_monadContExceptT = (function() use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_Except_Trans_monadExceptT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right) {
  $__fn = function($dictMonadCont) use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_Except_Trans_monadExceptT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$callCC = ($Control_Monad_Cont_Class_callCC)($dictMonadCont);
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)((($dictMonadCont)->Monad0)($Prim_undefined));
    $__res = ($Control_Monad_Cont_Class_MonadCont__dollar__Dict)((object)["callCC" => (function() use (&$Control_Monad_Except_Trans_ExceptT, $callCC, &$Data_Either_Right) {
  $__fn = function($f) use (&$Control_Monad_Except_Trans_ExceptT, $callCC, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_ExceptT)(($callCC)((function() use ($f, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right) {
  $__body = function($c) use ($f, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right) {
    $v = ($f)((function() use (&$Control_Monad_Except_Trans_ExceptT, $c, &$Data_Either_Right) {
  $__fn = function($a) use (&$Control_Monad_Except_Trans_ExceptT, $c, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_ExceptT)(($c)(($Data_Either_Right)($a)));
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
$b = $__case_0;
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($c) use ($f, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right, $__body, &$__fn) {
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
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monadEffectExceptT
$Control_Monad_Except_Trans_monadEffectExceptT = (function() use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($Monad0);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_Except_Trans_compose)(($Control_Monad_Except_Trans_lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monadRecExceptT
$Control_Monad_Except_Trans_monadRecExceptT = (function() use (&$Control_Monad_Rec_Class_tailRecM, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
$Monad0 = (($dictMonadRec)->Monad0)($Prim_undefined);
$bind = ($Control_Bind_bind)((($Monad0)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($Monad0);
    $__res = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, $tailRecM, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right) {
  $__fn = function($f) use (&$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, $tailRecM, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Except_Trans_compose)($Control_Monad_Except_Trans_ExceptT, ($tailRecM)((function() use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right) {
  $__body = function($a) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right) {
    $v = ($f)($a);
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($bind)($m, (function() use ($pure, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right) {
  $__fn = function($m__prime__) use ($pure, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)((function() use ($m__prime__, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right) {
$__case_0 = $m__prime__;
if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)(($Data_Either_Left)($e));
} else {
;
};
if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Loop"))) {
$a1 = (($__case_0)->values[0])->values[0];
return ($Control_Monad_Rec_Class_Loop)($a1);
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
  $__fn = function($a) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Either_Left, &$Control_Monad_Rec_Class_Loop, &$Data_Either_Right, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($a);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($a);
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
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monadStateExceptT
$Control_Monad_Except_Trans_monadStateExceptT = (function() use (&$Prim_undefined, &$Control_Monad_Except_Trans_lift, &$Control_Monad_State_Class_state, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_State_Class_MonadState__dollar__Dict) {
  $__fn = function($dictMonadState) use (&$Prim_undefined, &$Control_Monad_Except_Trans_lift, &$Control_Monad_State_Class_state, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadState)->Monad0)($Prim_undefined);
$lift1 = ($Control_Monad_Except_Trans_lift)($Monad0);
$state = ($Control_Monad_State_Class_state)($dictMonadState);
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($Monad0);
    $__res = ($Control_Monad_State_Class_MonadState__dollar__Dict)((object)["state" => (function() use ($lift1, $state) {
  $__fn = function($f) use ($lift1, $state, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($lift1)(($state)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monadTellExceptT
$Control_Monad_Except_Trans_monadTellExceptT = (function() use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_lift, &$Control_Monad_Writer_Class_tell) {
  $__fn = function($dictMonadTell) use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_lift, &$Control_Monad_Writer_Class_tell, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad1 = (($dictMonadTell)->Monad1)($Prim_undefined);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($Prim_undefined);
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($Monad1);
    $__res = ($Control_Monad_Writer_Class_MonadTell__dollar__Dict)((object)["tell" => ($Control_Monad_Except_Trans_compose)(($Control_Monad_Except_Trans_lift)($Monad1), ($Control_Monad_Writer_Class_tell)($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
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
})(), "Monad1" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monadWriterExceptT
$Control_Monad_Except_Trans_monadWriterExceptT = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_pass, &$Control_Monad_Except_Trans_monadTellExceptT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Except_Trans_mapExceptT, &$Control_Monad_Except_Trans_map, &$Data_Tuple_Tuple, &$Data_Either_Left, &$Control_Monad_Except_Trans_identity, &$Data_Either_Right) {
  $__fn = function($dictMonadWriter) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_pass, &$Control_Monad_Except_Trans_monadTellExceptT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Except_Trans_mapExceptT, &$Control_Monad_Except_Trans_map, &$Data_Tuple_Tuple, &$Data_Either_Left, &$Control_Monad_Except_Trans_identity, &$Data_Either_Right, &$__fn) {
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
$monadTellExceptT1 = ($Control_Monad_Except_Trans_monadTellExceptT)($MonadTell1);
    $__res = ($Control_Monad_Writer_Class_MonadWriter__dollar__Dict)((object)["listen" => ($Control_Monad_Except_Trans_mapExceptT)((function() use ($bind, $listen, $pure, &$Control_Monad_Except_Trans_map, &$Data_Tuple_Tuple) {
  $__fn = function($m) use ($bind, $listen, $pure, &$Control_Monad_Except_Trans_map, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($listen)($m), (function() use ($pure, &$Control_Monad_Except_Trans_map, &$Data_Tuple_Tuple) {
  $__body = function($v) use ($pure, &$Control_Monad_Except_Trans_map, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
return ($pure)(($Control_Monad_Except_Trans_map)((function() use (&$Data_Tuple_Tuple, $w) {
  $__fn = function($r) use (&$Data_Tuple_Tuple, $w, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($r, $w);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Control_Monad_Except_Trans_map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "pass" => ($Control_Monad_Except_Trans_mapExceptT)((function() use ($pass, $bind, $pure, &$Data_Tuple_Tuple, &$Data_Either_Left, &$Control_Monad_Except_Trans_identity, &$Data_Either_Right) {
  $__fn = function($m) use ($pass, $bind, $pure, &$Data_Tuple_Tuple, &$Data_Either_Left, &$Control_Monad_Except_Trans_identity, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pass)(($bind)($m, (function() use ($pure, &$Data_Tuple_Tuple, &$Data_Either_Left, &$Control_Monad_Except_Trans_identity, &$Data_Either_Right) {
  $__fn = function($a) use ($pure, &$Data_Tuple_Tuple, &$Data_Either_Left, &$Control_Monad_Except_Trans_identity, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)((function() use ($a, &$Data_Tuple_Tuple, &$Data_Either_Left, &$Control_Monad_Except_Trans_identity, &$Data_Either_Right) {
$__case_0 = $a;
if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
return ($Data_Tuple_Tuple)(($Data_Either_Left)($e), $Control_Monad_Except_Trans_identity);
} else {
;
};
if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$r = (($__case_0)->values[0])->values[0];
$f = (($__case_0)->values[0])->values[1];
return ($Data_Tuple_Tuple)(($Data_Either_Right)($r), $f);
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
})()));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), "Monoid0" => (function() use (&$Monoid0) {
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
})(), "MonadTell1" => (function() use ($monadTellExceptT1) {
  $__fn = function($__dollar____unused) use ($monadTellExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadTellExceptT1;
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

// Control_Monad_Except_Trans_monadThrowExceptT
$Control_Monad_Except_Trans_monadThrowExceptT = (function() use (&$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Either_Left) {
  $__fn = function($dictMonad) use (&$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_ExceptT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Either_Left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($dictMonad);
    $__res = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => ($Control_Monad_Except_Trans_compose)($Control_Monad_Except_Trans_ExceptT, ($Control_Monad_Except_Trans_compose)(($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined)), $Data_Either_Left)), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monadErrorExceptT
$Control_Monad_Except_Trans_monadErrorExceptT = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_monadThrowExceptT, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, &$Data_Either_Right) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_monadThrowExceptT, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$monadThrowExceptT1 = ($Control_Monad_Except_Trans_monadThrowExceptT)($dictMonad);
    $__res = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Control_Monad_Except_Trans_ExceptT, $bind, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, $pure, &$Data_Either_Right) {
  $__body = function($v, $k) use (&$Control_Monad_Except_Trans_ExceptT, $bind, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, $pure, &$Data_Either_Right) {
    $__case_0 = $v;
    $__case_1 = $k;
    if (true) {
$m = $__case_0;
$k1 = $__case_1;
return ($Control_Monad_Except_Trans_ExceptT)(($bind)($m, ($Data_Either_either)((function() use ($k1) {
  $__body = function($a) use ($k1) {
    $v1 = ($k1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($k1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($a);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($a);
  };
  return $__fn;
})(), ($Control_Monad_Except_Trans_compose)($pure, $Data_Either_Right))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $k = null) use (&$Control_Monad_Except_Trans_ExceptT, $bind, &$Data_Either_either, &$Control_Monad_Except_Trans_compose, $pure, &$Data_Either_Right, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $k);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $k);
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowExceptT1) {
  $__fn = function($__dollar____unused) use ($monadThrowExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadThrowExceptT1;
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

// Control_Monad_Except_Trans_monadSTExceptT
$Control_Monad_Except_Trans_monadSTExceptT = (function() use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, &$Control_Monad_Except_Trans_monadExceptT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Except_Trans_compose, &$Control_Monad_Except_Trans_lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($Monad0);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_Except_Trans_compose)(($Control_Monad_Except_Trans_lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
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

// Control_Monad_Except_Trans_monoidExceptT
$Control_Monad_Except_Trans_monoidExceptT = (function() use (&$Control_Applicative_pure, &$Control_Monad_Except_Trans_applicativeExceptT, &$Control_Monad_Except_Trans_semigroupExceptT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Control_Monad_Except_Trans_applicativeExceptT, &$Control_Monad_Except_Trans_semigroupExceptT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)(($Control_Monad_Except_Trans_applicativeExceptT)($dictMonad));
$semigroupExceptT1 = ($Control_Monad_Except_Trans_semigroupExceptT)($dictMonad);
    $__res = (function() use ($semigroupExceptT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use ($semigroupExceptT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupExceptT2 = ($semigroupExceptT1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($pure)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupExceptT2) {
  $__fn = function($__dollar____unused) use ($semigroupExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupExceptT2;
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

// Control_Monad_Except_Trans_altExceptT
$Control_Monad_Except_Trans_altExceptT = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_functorExceptT, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right, &$Data_Either_Left) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_functorExceptT, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right, &$Data_Either_Left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_functorExceptT, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right, &$Data_Either_Left, $append) {
  $__fn = function($dictMonad) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Except_Trans_functorExceptT, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Except_Trans_ExceptT, &$Data_Either_Right, &$Data_Either_Left, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Bind1 = (($dictMonad)->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
$functorExceptT1 = ($Control_Monad_Except_Trans_functorExceptT)((((($Bind1)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Control_Monad_Except_Trans_ExceptT, $bind, $pure, &$Data_Either_Right, &$Data_Either_Left, $append) {
  $__body = function($v, $v1) use (&$Control_Monad_Except_Trans_ExceptT, $bind, $pure, &$Data_Either_Right, &$Data_Either_Left, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($Control_Monad_Except_Trans_ExceptT)(($bind)($m, (function() use ($pure, &$Data_Either_Right, $bind, $n, &$Data_Either_Left, $append) {
  $__body = function($rm) use ($pure, &$Data_Either_Right, $bind, $n, &$Data_Either_Left, $append) {
    $__case_0 = $rm;
    if ((($__case_0)->tag === "Right")) {
$x = ($__case_0)->values[0];
return ($pure)(($Data_Either_Right)($x));
} else {
;
};
    if ((($__case_0)->tag === "Left")) {
$err = ($__case_0)->values[0];
return ($bind)($n, (function() use ($pure, &$Data_Either_Right, &$Data_Either_Left, $append, $err) {
  $__body = function($rn) use ($pure, &$Data_Either_Right, &$Data_Either_Left, $append, $err) {
    $__case_0 = $rn;
    if ((($__case_0)->tag === "Right")) {
$x = ($__case_0)->values[0];
return ($pure)(($Data_Either_Right)($x));
} else {
;
};
    if ((($__case_0)->tag === "Left")) {
$err__prime__ = ($__case_0)->values[0];
return ($pure)(($Data_Either_Left)(($append)($err, $err__prime__)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($rn) use ($pure, &$Data_Either_Right, &$Data_Either_Left, $append, $err, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($rn);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($rn);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($rm) use ($pure, &$Data_Either_Right, $bind, $n, &$Data_Either_Left, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($rm);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($rm);
  };
  return $__fn;
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Except_Trans_ExceptT, $bind, $pure, &$Data_Either_Right, &$Data_Either_Left, $append, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorExceptT1) {
  $__fn = function($__dollar____unused) use ($functorExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorExceptT1;
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

// Control_Monad_Except_Trans_plusExceptT
$Control_Monad_Except_Trans_plusExceptT = (function() use (&$Data_Monoid_mempty, &$Control_Monad_Except_Trans_altExceptT, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Except_Trans_monadThrowExceptT) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Control_Monad_Except_Trans_altExceptT, &$Prim_undefined, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Except_Trans_monadThrowExceptT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$altExceptT1 = ($Control_Monad_Except_Trans_altExceptT)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = (function() use ($altExceptT1, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Except_Trans_monadThrowExceptT, $mempty) {
  $__fn = function($dictMonad) use ($altExceptT1, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Except_Trans_monadThrowExceptT, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$altExceptT2 = ($altExceptT1)($dictMonad);
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_Error_Class_throwError)(($Control_Monad_Except_Trans_monadThrowExceptT)($dictMonad), $mempty), "Alt0" => (function() use ($altExceptT2) {
  $__fn = function($__dollar____unused) use ($altExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altExceptT2;
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

// Control_Monad_Except_Trans_alternativeExceptT
$Control_Monad_Except_Trans_alternativeExceptT = (function() use (&$Control_Monad_Except_Trans_plusExceptT, &$Control_Monad_Except_Trans_applicativeExceptT, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Except_Trans_plusExceptT, &$Control_Monad_Except_Trans_applicativeExceptT, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$plusExceptT1 = ($Control_Monad_Except_Trans_plusExceptT)($dictMonoid);
    $__res = (function() use (&$Control_Monad_Except_Trans_applicativeExceptT, $plusExceptT1, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_Except_Trans_applicativeExceptT, $plusExceptT1, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeExceptT1 = ($Control_Monad_Except_Trans_applicativeExceptT)($dictMonad);
$plusExceptT2 = ($plusExceptT1)($dictMonad);
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeExceptT1) {
  $__fn = function($__dollar____unused) use ($applicativeExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeExceptT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusExceptT2) {
  $__fn = function($__dollar____unused) use ($plusExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusExceptT2;
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

// Control_Monad_Except_Trans_monadPlusExceptT
$Control_Monad_Except_Trans_monadPlusExceptT = (function() use (&$Control_Monad_Except_Trans_alternativeExceptT, &$Control_Monad_Except_Trans_monadExceptT, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonoid) use (&$Control_Monad_Except_Trans_alternativeExceptT, &$Control_Monad_Except_Trans_monadExceptT, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alternativeExceptT1 = ($Control_Monad_Except_Trans_alternativeExceptT)($dictMonoid);
    $__res = (function() use (&$Control_Monad_Except_Trans_monadExceptT, $alternativeExceptT1, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_Except_Trans_monadExceptT, $alternativeExceptT1, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadExceptT1 = ($Control_Monad_Except_Trans_monadExceptT)($dictMonad);
$alternativeExceptT2 = ($alternativeExceptT1)($dictMonad);
    $__res = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use ($monadExceptT1) {
  $__fn = function($__dollar____unused) use ($monadExceptT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadExceptT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeExceptT2) {
  $__fn = function($__dollar____unused) use ($alternativeExceptT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $alternativeExceptT2;
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

