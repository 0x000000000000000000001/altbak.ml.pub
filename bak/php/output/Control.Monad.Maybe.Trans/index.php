<?php

namespace Control\Monad\Maybe\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Maybe_Trans_compose
$Control_Monad_Maybe_Trans_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Maybe_Trans_map
$Control_Monad_Maybe_Trans_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Control_Monad_Maybe_Trans_identity
$Control_Monad_Maybe_Trans_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Control_Monad_Maybe_Trans_MaybeT
$Control_Monad_Maybe_Trans_MaybeT = (function() {
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

// Control_Monad_Maybe_Trans_runMaybeT
$Control_Monad_Maybe_Trans_runMaybeT = (function() {
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

// Control_Monad_Maybe_Trans_newtypeMaybeT
$Control_Monad_Maybe_Trans_newtypeMaybeT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Monad_Maybe_Trans_monadTransMaybeT
$Control_Monad_Maybe_Trans_monadTransMaybeT = ($Control_Monad_Trans_Class_MonadTrans__dollar__Dict)((object)["lift" => (function() use (&$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Monad_liftM1, &$Data_Maybe_Just) {
  $__fn = function($dictMonad) use (&$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Monad_liftM1, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_compose)($Control_Monad_Maybe_Trans_MaybeT, ($Control_Monad_liftM1)($dictMonad, $Data_Maybe_Just));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Maybe_Trans_lift
$Control_Monad_Maybe_Trans_lift = ($Control_Monad_Trans_Class_lift)($Control_Monad_Maybe_Trans_monadTransMaybeT);

// Control_Monad_Maybe_Trans_mapMaybeT
$Control_Monad_Maybe_Trans_mapMaybeT = (function() use (&$Control_Monad_Maybe_Trans_MaybeT) {
  $__body = function($f, $v) use (&$Control_Monad_Maybe_Trans_MaybeT) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($Control_Monad_Maybe_Trans_MaybeT)(($f1)($m));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_Maybe_Trans_MaybeT, $__body, &$__fn) {
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

// Control_Monad_Maybe_Trans_functorMaybeT
$Control_Monad_Maybe_Trans_functorMaybeT = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Monad_Maybe_Trans_map) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Monad_Maybe_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Monad_Maybe_Trans_MaybeT, $map1, &$Control_Monad_Maybe_Trans_map) {
  $__body = function($f, $v) use (&$Control_Monad_Maybe_Trans_MaybeT, $map1, &$Control_Monad_Maybe_Trans_map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ma = $__case_1;
return ($Control_Monad_Maybe_Trans_MaybeT)(($map1)(($Control_Monad_Maybe_Trans_map)($f1), $ma));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Monad_Maybe_Trans_MaybeT, $map1, &$Control_Monad_Maybe_Trans_map, $__body, &$__fn) {
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

// Control_Monad_Maybe_Trans_monadMaybeT
$Control_Monad_Maybe_Trans_monadMaybeT = (function() use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_Maybe_Trans_applicativeMaybeT, &$Control_Monad_Maybe_Trans_bindMaybeT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_Maybe_Trans_applicativeMaybeT, &$Control_Monad_Maybe_Trans_bindMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_Monad__dollar__Dict, &$Control_Monad_Maybe_Trans_applicativeMaybeT, &$Control_Monad_Maybe_Trans_bindMaybeT) {
while (true) {
return ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Control_Monad_Maybe_Trans_applicativeMaybeT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Maybe_Trans_applicativeMaybeT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_applicativeMaybeT)($dictMonad);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Control_Monad_Maybe_Trans_bindMaybeT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Maybe_Trans_bindMaybeT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_bindMaybeT)($dictMonad);
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

// Control_Monad_Maybe_Trans_bindMaybeT
$Control_Monad_Maybe_Trans_bindMaybeT = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_applyMaybeT) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_applyMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_Bind__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_applyMaybeT) {
while (true) {
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
return ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Control_Monad_Maybe_Trans_MaybeT, $bind, $pure, &$Data_Maybe_Nothing) {
  $__body = function($v, $f) use (&$Control_Monad_Maybe_Trans_MaybeT, $bind, $pure, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$x = $__case_0;
$f1 = $__case_1;
return ($Control_Monad_Maybe_Trans_MaybeT)(($bind)($x, (function() use ($pure, &$Data_Maybe_Nothing, $f1) {
  $__body = function($v1) use ($pure, &$Data_Maybe_Nothing, $f1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure)($Data_Maybe_Nothing);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$y = ($__case_0)->values[0];
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
return $m;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v1) use ($pure, &$Data_Maybe_Nothing, $f1, $__body, &$__fn) {
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
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $f = null) use (&$Control_Monad_Maybe_Trans_MaybeT, $bind, $pure, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Control_Monad_Maybe_Trans_applyMaybeT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Maybe_Trans_applyMaybeT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad);
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

// Control_Monad_Maybe_Trans_applyMaybeT
$Control_Monad_Maybe_Trans_applyMaybeT = (function() use (&$Control_Monad_Maybe_Trans_functorMaybeT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_Maybe_Trans_monadMaybeT) {
  $__fn = function($dictMonad) use (&$Control_Monad_Maybe_Trans_functorMaybeT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_Maybe_Trans_monadMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Monad_Maybe_Trans_functorMaybeT, &$Prim_undefined, &$Control_Apply_Apply__dollar__Dict, &$Control_Monad_ap, &$Control_Monad_Maybe_Trans_monadMaybeT) {
while (true) {
$functorMaybeT1 = ($Control_Monad_Maybe_Trans_functorMaybeT)((((((($dictMonad)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
return ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Control_Monad_ap)(($Control_Monad_Maybe_Trans_monadMaybeT)($dictMonad)), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorMaybeT1;
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

// Control_Monad_Maybe_Trans_applicativeMaybeT
$Control_Monad_Maybe_Trans_applicativeMaybeT = (function() use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Maybe_Just, &$Control_Monad_Maybe_Trans_applyMaybeT) {
  $__fn = function($dictMonad) use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Maybe_Just, &$Control_Monad_Maybe_Trans_applyMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictMonad) use (&$Control_Applicative_Applicative__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Maybe_Just, &$Control_Monad_Maybe_Trans_applyMaybeT) {
while (true) {
return ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Control_Monad_Maybe_Trans_compose)($Control_Monad_Maybe_Trans_MaybeT, ($Control_Monad_Maybe_Trans_compose)(($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined)), $Data_Maybe_Just)), "Apply0" => (function() use (&$Control_Monad_Maybe_Trans_applyMaybeT, $dictMonad) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Maybe_Trans_applyMaybeT, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad);
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

// Control_Monad_Maybe_Trans_semigroupMaybeT
$Control_Monad_Maybe_Trans_semigroupMaybeT = (function() use (&$Control_Apply_lift2, &$Control_Monad_Maybe_Trans_applyMaybeT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append) {
  $__fn = function($dictMonad) use (&$Control_Apply_lift2, &$Control_Monad_Maybe_Trans_applyMaybeT, &$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)(($Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad));
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

// Control_Monad_Maybe_Trans_monadAskMaybeT
$Control_Monad_Maybe_Trans_monadAskMaybeT = (function() use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_Reader_Class_ask) {
  $__fn = function($dictMonadAsk) use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Reader_Class_MonadAsk__dollar__Dict, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_Reader_Class_ask, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadAsk)->Monad0)($Prim_undefined);
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
    $__res = ($Control_Monad_Reader_Class_MonadAsk__dollar__Dict)((object)["ask" => ($Control_Monad_Maybe_Trans_lift)($Monad0, ($Control_Monad_Reader_Class_ask)($dictMonadAsk)), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monadReaderMaybeT
$Control_Monad_Maybe_Trans_monadReaderMaybeT = (function() use (&$Control_Monad_Reader_Class_local, &$Control_Monad_Maybe_Trans_monadAskMaybeT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Maybe_Trans_mapMaybeT) {
  $__fn = function($dictMonadReader) use (&$Control_Monad_Reader_Class_local, &$Control_Monad_Maybe_Trans_monadAskMaybeT, &$Prim_undefined, &$Control_Monad_Reader_Class_MonadReader__dollar__Dict, &$Control_Monad_Maybe_Trans_mapMaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$local = ($Control_Monad_Reader_Class_local)($dictMonadReader);
$monadAskMaybeT1 = ($Control_Monad_Maybe_Trans_monadAskMaybeT)((($dictMonadReader)->MonadAsk0)($Prim_undefined));
    $__res = ($Control_Monad_Reader_Class_MonadReader__dollar__Dict)((object)["local" => (function() use (&$Control_Monad_Maybe_Trans_mapMaybeT, $local) {
  $__fn = function($f) use (&$Control_Monad_Maybe_Trans_mapMaybeT, $local, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_mapMaybeT)(($local)($f));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadAskMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadAskMaybeT1;
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

// Control_Monad_Maybe_Trans_monadContMaybeT
$Control_Monad_Maybe_Trans_monadContMaybeT = (function() use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Just) {
  $__fn = function($dictMonadCont) use (&$Control_Monad_Cont_Class_callCC, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Prim_undefined, &$Control_Monad_Cont_Class_MonadCont__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$callCC = ($Control_Monad_Cont_Class_callCC)($dictMonadCont);
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)((($dictMonadCont)->Monad0)($Prim_undefined));
    $__res = ($Control_Monad_Cont_Class_MonadCont__dollar__Dict)((object)["callCC" => (function() use (&$Control_Monad_Maybe_Trans_MaybeT, $callCC, &$Data_Maybe_Just) {
  $__fn = function($f) use (&$Control_Monad_Maybe_Trans_MaybeT, $callCC, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_MaybeT)(($callCC)((function() use ($f, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Just) {
  $__body = function($c) use ($f, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Just) {
    $v = ($f)((function() use (&$Control_Monad_Maybe_Trans_MaybeT, $c, &$Data_Maybe_Just) {
  $__fn = function($a) use (&$Control_Monad_Maybe_Trans_MaybeT, $c, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_MaybeT)(($c)(($Data_Maybe_Just)($a)));
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
$m = $__case_0;
return $m;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($c) use ($f, &$Control_Monad_Maybe_Trans_MaybeT, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monadEffectMaybe
$Control_Monad_Maybe_Trans_monadEffectMaybe = (function() use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_lift, &$Effect_Class_liftEffect) {
  $__fn = function($dictMonadEffect) use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Effect_Class_MonadEffect__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_lift, &$Effect_Class_liftEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadEffect)->Monad0)($Prim_undefined);
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
    $__res = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => ($Control_Monad_Maybe_Trans_compose)(($Control_Monad_Maybe_Trans_lift)($Monad0), ($Effect_Class_liftEffect)($dictMonadEffect)), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monadRecMaybeT
$Control_Monad_Maybe_Trans_monadRecMaybeT = (function() use (&$Control_Monad_Rec_Class_tailRecM, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Rec_Class_MonadRec__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just, &$__fn) {
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
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
    $__res = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, $tailRecM, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just) {
  $__fn = function($f) use (&$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_MaybeT, $tailRecM, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_Maybe_Trans_compose)($Control_Monad_Maybe_Trans_MaybeT, ($tailRecM)((function() use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just) {
  $__body = function($a) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just) {
    $v = ($f)($a);
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($bind)($m, (function() use ($pure, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just) {
  $__fn = function($m__prime__) use ($pure, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)((function() use ($m__prime__, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just) {
$__case_0 = $m__prime__;
if ((($__case_0)->tag === "Nothing")) {
return ($Control_Monad_Rec_Class_Done)($Data_Maybe_Nothing);
} else {
;
};
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Loop"))) {
$a1 = (($__case_0)->values[0])->values[0];
return ($Control_Monad_Rec_Class_Loop)($a1);
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
  $__fn = function($a) use ($f, $bind, $pure, &$Control_Monad_Rec_Class_Done, &$Data_Maybe_Nothing, &$Control_Monad_Rec_Class_Loop, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monadStateMaybeT
$Control_Monad_Maybe_Trans_monadStateMaybeT = (function() use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_State_Class_state, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_State_Class_MonadState__dollar__Dict) {
  $__fn = function($dictMonadState) use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_State_Class_state, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_State_Class_MonadState__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadState)->Monad0)($Prim_undefined);
$lift1 = ($Control_Monad_Maybe_Trans_lift)($Monad0);
$state = ($Control_Monad_State_Class_state)($dictMonadState);
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monadTellMaybeT
$Control_Monad_Maybe_Trans_monadTellMaybeT = (function() use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_Writer_Class_tell) {
  $__fn = function($dictMonadTell) use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Writer_Class_MonadTell__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_Writer_Class_tell, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad1 = (($dictMonadTell)->Monad1)($Prim_undefined);
$Semigroup0 = (($dictMonadTell)->Semigroup0)($Prim_undefined);
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($Monad1);
    $__res = ($Control_Monad_Writer_Class_MonadTell__dollar__Dict)((object)["tell" => ($Control_Monad_Maybe_Trans_compose)(($Control_Monad_Maybe_Trans_lift)($Monad1), ($Control_Monad_Writer_Class_tell)($dictMonadTell)), "Semigroup0" => (function() use (&$Semigroup0) {
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
})(), "Monad1" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monadWriterMaybeT
$Control_Monad_Maybe_Trans_monadWriterMaybeT = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_pass, &$Control_Monad_Maybe_Trans_monadTellMaybeT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Maybe_Trans_mapMaybeT, &$Control_Monad_Maybe_Trans_map, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_identity, &$Data_Maybe_Just) {
  $__fn = function($dictMonadWriter) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Writer_Class_listen, &$Control_Applicative_pure, &$Control_Monad_Writer_Class_pass, &$Control_Monad_Maybe_Trans_monadTellMaybeT, &$Control_Monad_Writer_Class_MonadWriter__dollar__Dict, &$Control_Monad_Maybe_Trans_mapMaybeT, &$Control_Monad_Maybe_Trans_map, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_identity, &$Data_Maybe_Just, &$__fn) {
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
$monadTellMaybeT1 = ($Control_Monad_Maybe_Trans_monadTellMaybeT)($MonadTell1);
    $__res = ($Control_Monad_Writer_Class_MonadWriter__dollar__Dict)((object)["listen" => ($Control_Monad_Maybe_Trans_mapMaybeT)((function() use ($bind, $listen, $pure, &$Control_Monad_Maybe_Trans_map, &$Data_Tuple_Tuple) {
  $__fn = function($m) use ($bind, $listen, $pure, &$Control_Monad_Maybe_Trans_map, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($listen)($m), (function() use ($pure, &$Control_Monad_Maybe_Trans_map, &$Data_Tuple_Tuple) {
  $__body = function($v) use ($pure, &$Control_Monad_Maybe_Trans_map, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$w = ($__case_0)->values[1];
return ($pure)(($Control_Monad_Maybe_Trans_map)((function() use (&$Data_Tuple_Tuple, $w) {
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
  $__fn = function($v) use ($pure, &$Control_Monad_Maybe_Trans_map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})()), "pass" => ($Control_Monad_Maybe_Trans_mapMaybeT)((function() use ($pass, $bind, $pure, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_identity, &$Data_Maybe_Just) {
  $__fn = function($m) use ($pass, $bind, $pure, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_identity, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pass)(($bind)($m, (function() use ($pure, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_identity, &$Data_Maybe_Just) {
  $__fn = function($a) use ($pure, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_identity, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)((function() use ($a, &$Data_Tuple_Tuple, &$Data_Maybe_Nothing, &$Control_Monad_Maybe_Trans_identity, &$Data_Maybe_Just) {
$__case_0 = $a;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Tuple_Tuple)($Data_Maybe_Nothing, $Control_Monad_Maybe_Trans_identity);
} else {
;
};
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$v = (($__case_0)->values[0])->values[0];
$f = (($__case_0)->values[0])->values[1];
return ($Data_Tuple_Tuple)(($Data_Maybe_Just)($v), $f);
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
})(), "MonadTell1" => (function() use ($monadTellMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadTellMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadTellMaybeT1;
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

// Control_Monad_Maybe_Trans_monadThrowMaybeT
$Control_Monad_Maybe_Trans_monadThrowMaybeT = (function() use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict) {
  $__fn = function($dictMonadThrow) use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_Error_Class_throwError, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Error_Class_MonadThrow__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadThrow)->Monad0)($Prim_undefined);
$lift1 = ($Control_Monad_Maybe_Trans_lift)($Monad0);
$throwError = ($Control_Monad_Error_Class_throwError)($dictMonadThrow);
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
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
})(), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monadErrorMaybeT
$Control_Monad_Maybe_Trans_monadErrorMaybeT = (function() use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_Maybe_Trans_monadThrowMaybeT, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT) {
  $__fn = function($dictMonadError) use (&$Control_Monad_Error_Class_catchError, &$Control_Monad_Maybe_Trans_monadThrowMaybeT, &$Prim_undefined, &$Control_Monad_Error_Class_MonadError__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$catchError = ($Control_Monad_Error_Class_catchError)($dictMonadError);
$monadThrowMaybeT1 = ($Control_Monad_Maybe_Trans_monadThrowMaybeT)((($dictMonadError)->MonadThrow0)($Prim_undefined));
    $__res = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Control_Monad_Maybe_Trans_MaybeT, $catchError) {
  $__body = function($v, $h) use (&$Control_Monad_Maybe_Trans_MaybeT, $catchError) {
    $__case_0 = $v;
    $__case_1 = $h;
    if (true) {
$m = $__case_0;
$h1 = $__case_1;
return ($Control_Monad_Maybe_Trans_MaybeT)(($catchError)($m, (function() use ($h1) {
  $__body = function($a) use ($h1) {
    $v1 = ($h1)($a);
    $__case_0 = $v1;
    if (true) {
$b = $__case_0;
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($h1, $__body, &$__fn) {
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
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $h = null) use (&$Control_Monad_Maybe_Trans_MaybeT, $catchError, $__body, &$__fn) {
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
})(), "MonadThrow0" => (function() use ($monadThrowMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadThrowMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadThrowMaybeT1;
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

// Control_Monad_Maybe_Trans_monadSTMaybeT
$Control_Monad_Maybe_Trans_monadSTMaybeT = (function() use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_ST_Class_liftST) {
  $__fn = function($dictMonadST) use (&$Prim_undefined, &$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_ST_Class_MonadST__dollar__Dict, &$Control_Monad_Maybe_Trans_compose, &$Control_Monad_Maybe_Trans_lift, &$Control_Monad_ST_Class_liftST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadST)->Monad0)($Prim_undefined);
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
    $__res = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Control_Monad_Maybe_Trans_compose)(($Control_Monad_Maybe_Trans_lift)($Monad0), ($Control_Monad_ST_Class_liftST)($dictMonadST)), "Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
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

// Control_Monad_Maybe_Trans_monoidMaybeT
$Control_Monad_Maybe_Trans_monoidMaybeT = (function() use (&$Control_Applicative_pure, &$Control_Monad_Maybe_Trans_applicativeMaybeT, &$Control_Monad_Maybe_Trans_semigroupMaybeT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty) {
  $__fn = function($dictMonad) use (&$Control_Applicative_pure, &$Control_Monad_Maybe_Trans_applicativeMaybeT, &$Control_Monad_Maybe_Trans_semigroupMaybeT, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)(($Control_Monad_Maybe_Trans_applicativeMaybeT)($dictMonad));
$semigroupMaybeT1 = ($Control_Monad_Maybe_Trans_semigroupMaybeT)($dictMonad);
    $__res = (function() use ($semigroupMaybeT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use ($semigroupMaybeT1, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, $pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupMaybeT2 = ($semigroupMaybeT1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($pure)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupMaybeT2) {
  $__fn = function($__dollar____unused) use ($semigroupMaybeT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupMaybeT2;
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

// Control_Monad_Maybe_Trans_altMaybeT
$Control_Monad_Maybe_Trans_altMaybeT = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Maybe_Trans_functorMaybeT, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT) {
  $__fn = function($dictMonad) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Applicative_pure, &$Control_Monad_Maybe_Trans_functorMaybeT, &$Control_Alt_Alt__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$__fn) {
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
$functorMaybeT1 = ($Control_Monad_Maybe_Trans_functorMaybeT)((((($Bind1)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Control_Monad_Maybe_Trans_MaybeT, $bind, $pure) {
  $__body = function($v, $v1) use (&$Control_Monad_Maybe_Trans_MaybeT, $bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
return ($Control_Monad_Maybe_Trans_MaybeT)(($bind)($m1, (function() use ($m2, $pure) {
  $__body = function($m) use ($m2, $pure) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Nothing")) {
return $m2;
} else {
;
};
    if (true) {
$ja = $__case_0;
return ($pure)($ja);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($m) use ($m2, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($m);
  };
  return $__fn;
})()));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Maybe_Trans_MaybeT, $bind, $pure, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorMaybeT1) {
  $__fn = function($__dollar____unused) use ($functorMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorMaybeT1;
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

// Control_Monad_Maybe_Trans_plusMaybeT
$Control_Monad_Maybe_Trans_plusMaybeT = (function() use (&$Control_Monad_Maybe_Trans_altMaybeT, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Maybe_Nothing) {
  $__fn = function($dictMonad) use (&$Control_Monad_Maybe_Trans_altMaybeT, &$Control_Plus_Plus__dollar__Dict, &$Control_Monad_Maybe_Trans_MaybeT, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$altMaybeT1 = ($Control_Monad_Maybe_Trans_altMaybeT)($dictMonad);
    $__res = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_Maybe_Trans_MaybeT)(($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined), $Data_Maybe_Nothing)), "Alt0" => (function() use ($altMaybeT1) {
  $__fn = function($__dollar____unused) use ($altMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $altMaybeT1;
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

// Control_Monad_Maybe_Trans_alternativeMaybeT
$Control_Monad_Maybe_Trans_alternativeMaybeT = (function() use (&$Control_Monad_Maybe_Trans_applicativeMaybeT, &$Control_Monad_Maybe_Trans_plusMaybeT, &$Control_Alternative_Alternative__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_Maybe_Trans_applicativeMaybeT, &$Control_Monad_Maybe_Trans_plusMaybeT, &$Control_Alternative_Alternative__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applicativeMaybeT1 = ($Control_Monad_Maybe_Trans_applicativeMaybeT)($dictMonad);
$plusMaybeT1 = ($Control_Monad_Maybe_Trans_plusMaybeT)($dictMonad);
    $__res = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use ($applicativeMaybeT1) {
  $__fn = function($__dollar____unused) use ($applicativeMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $applicativeMaybeT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusMaybeT1) {
  $__fn = function($__dollar____unused) use ($plusMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $plusMaybeT1;
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

// Control_Monad_Maybe_Trans_monadPlusMaybeT
$Control_Monad_Maybe_Trans_monadPlusMaybeT = (function() use (&$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Maybe_Trans_alternativeMaybeT, &$Control_MonadPlus_MonadPlus__dollar__Dict) {
  $__fn = function($dictMonad) use (&$Control_Monad_Maybe_Trans_monadMaybeT, &$Control_Monad_Maybe_Trans_alternativeMaybeT, &$Control_MonadPlus_MonadPlus__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$monadMaybeT1 = ($Control_Monad_Maybe_Trans_monadMaybeT)($dictMonad);
$alternativeMaybeT1 = ($Control_Monad_Maybe_Trans_alternativeMaybeT)($dictMonad);
    $__res = ($Control_MonadPlus_MonadPlus__dollar__Dict)((object)["Monad0" => (function() use ($monadMaybeT1) {
  $__fn = function($__dollar____unused) use ($monadMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $monadMaybeT1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeMaybeT1) {
  $__fn = function($__dollar____unused) use ($alternativeMaybeT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $alternativeMaybeT1;
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

