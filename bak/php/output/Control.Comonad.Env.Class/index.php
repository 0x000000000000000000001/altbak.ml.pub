<?php

namespace Control\Comonad\Env\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Env_Class_compose
$Control_Comonad_Env_Class_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Comonad_Env_Class_lower
$Control_Comonad_Env_Class_lower = ($Control_Comonad_Trans_Class_lower)($Control_Comonad_Store_Trans_comonadTransStoreT);

// Control_Comonad_Env_Class_ComonadAsk$Dict
$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict = (function() {
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

// Control_Comonad_Env_Class_ComonadEnv$Dict
$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict = (function() {
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

// Control_Comonad_Env_Class_local
$Control_Comonad_Env_Class_local = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->local;
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

// Control_Comonad_Env_Class_comonadAskTuple
$Control_Comonad_Env_Class_comonadAskTuple = ($Control_Comonad_Env_Class_ComonadAsk__dollar__Dict)((object)["ask" => $Data_Tuple_fst, "Comonad0" => (function() use (&$Data_Tuple_comonadTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Tuple_comonadTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Tuple_comonadTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Comonad_Env_Class_comonadEnvTuple
$Control_Comonad_Env_Class_comonadEnvTuple = ($Control_Comonad_Env_Class_ComonadEnv__dollar__Dict)((object)["local" => (function() use (&$Data_Tuple_Tuple) {
  $__body = function($f, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($f1)($x), $y);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "ComonadAsk0" => (function() use (&$Control_Comonad_Env_Class_comonadAskTuple) {
  $__fn = function($__dollar____unused) use (&$Control_Comonad_Env_Class_comonadAskTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Comonad_Env_Class_comonadAskTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Comonad_Env_Class_comonadAskEnvT
$Control_Comonad_Env_Class_comonadAskEnvT = (function() use (&$Control_Comonad_Env_Trans_comonadEnvT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Data_Tuple_fst) {
  $__fn = function($dictComonad) use (&$Control_Comonad_Env_Trans_comonadEnvT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Data_Tuple_fst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadEnvT = ($Control_Comonad_Env_Trans_comonadEnvT)($dictComonad);
    $__res = ($Control_Comonad_Env_Class_ComonadAsk__dollar__Dict)((object)["ask" => (function() use (&$Data_Tuple_fst) {
  $__body = function($v) use (&$Data_Tuple_fst) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($Data_Tuple_fst)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Tuple_fst, $__body, &$__fn) {
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
})(), "Comonad0" => (function() use ($comonadEnvT) {
  $__fn = function($__dollar____unused) use ($comonadEnvT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $comonadEnvT;
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

// Control_Comonad_Env_Class_comonadEnvEnvT
$Control_Comonad_Env_Class_comonadEnvEnvT = (function() use (&$Control_Comonad_Env_Class_comonadAskEnvT, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__fn = function($dictComonad) use (&$Control_Comonad_Env_Class_comonadAskEnvT, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadAskEnvT1 = ($Control_Comonad_Env_Class_comonadAskEnvT)($dictComonad);
    $__res = ($Control_Comonad_Env_Class_ComonadEnv__dollar__Dict)((object)["local" => (function() use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
  $__body = function($f, $v) use (&$Control_Comonad_Env_Trans_EnvT, &$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($Control_Comonad_Env_Trans_EnvT)((function() use ($x, &$Data_Tuple_Tuple, $f1) {
$__case_0 = $x;
if ((($__case_0)->tag === "Tuple")) {
$y = ($__case_0)->values[0];
$z = ($__case_0)->values[1];
return ($Data_Tuple_Tuple)(($f1)($y), $z);
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
})(), "ComonadAsk0" => (function() use ($comonadAskEnvT1) {
  $__fn = function($__dollar____unused) use ($comonadAskEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $comonadAskEnvT1;
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

// Control_Comonad_Env_Class_ask
$Control_Comonad_Env_Class_ask = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ask;
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

// Control_Comonad_Env_Class_asks
$Control_Comonad_Env_Class_asks = (function() use (&$Control_Comonad_Env_Class_ask) {
  $__fn = function($dictComonadAsk) use (&$Control_Comonad_Env_Class_ask, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ask1 = ($Control_Comonad_Env_Class_ask)($dictComonadAsk);
    $__res = (function() use ($ask1) {
  $__fn = function($f, $x = null) use ($ask1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($ask1)($x));
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

// Control_Comonad_Env_Class_comonadAskStoreT
$Control_Comonad_Env_Class_comonadAskStoreT = (function() use (&$Prim_undefined, &$Control_Comonad_Store_Trans_comonadStoreT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Control_Comonad_Env_Class_compose, &$Control_Comonad_Env_Class_ask, &$Control_Comonad_Env_Class_lower) {
  $__fn = function($dictComonadAsk) use (&$Prim_undefined, &$Control_Comonad_Store_Trans_comonadStoreT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Control_Comonad_Env_Class_compose, &$Control_Comonad_Env_Class_ask, &$Control_Comonad_Env_Class_lower, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Comonad0 = (($dictComonadAsk)->Comonad0)($Prim_undefined);
$comonadStoreT = ($Control_Comonad_Store_Trans_comonadStoreT)($Comonad0);
    $__res = ($Control_Comonad_Env_Class_ComonadAsk__dollar__Dict)((object)["ask" => ($Control_Comonad_Env_Class_compose)(($Control_Comonad_Env_Class_ask)($dictComonadAsk), ($Control_Comonad_Env_Class_lower)($Comonad0)), "Comonad0" => (function() use ($comonadStoreT) {
  $__fn = function($__dollar____unused) use ($comonadStoreT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $comonadStoreT;
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

// Control_Comonad_Env_Class_comonadEnvStoreT
$Control_Comonad_Env_Class_comonadEnvStoreT = (function() use (&$Control_Comonad_Env_Class_local, &$Control_Comonad_Env_Class_comonadAskStoreT, &$Prim_undefined, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple) {
  $__fn = function($dictComonadEnv) use (&$Control_Comonad_Env_Class_local, &$Control_Comonad_Env_Class_comonadAskStoreT, &$Prim_undefined, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$local1 = ($Control_Comonad_Env_Class_local)($dictComonadEnv);
$comonadAskStoreT1 = ($Control_Comonad_Env_Class_comonadAskStoreT)((($dictComonadEnv)->ComonadAsk0)($Prim_undefined));
    $__res = ($Control_Comonad_Env_Class_ComonadEnv__dollar__Dict)((object)["local" => (function() use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $local1) {
  $__body = function($f, $v) use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$w = ($__case_1)->values[0];
$s = ($__case_1)->values[1];
return ($Control_Comonad_Store_Trans_StoreT)(($Data_Tuple_Tuple)(($local1)($f1, $w), $s));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $local1, $__body, &$__fn) {
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
})(), "ComonadAsk0" => (function() use ($comonadAskStoreT1) {
  $__fn = function($__dollar____unused) use ($comonadAskStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $comonadAskStoreT1;
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

// Control_Comonad_Env_Class_comonadAskTracedT
$Control_Comonad_Env_Class_comonadAskTracedT = (function() use (&$Control_Comonad_Env_Class_ask, &$Prim_undefined, &$Control_Comonad_Traced_Trans_comonadTracedT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Control_Comonad_Env_Class_compose, &$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT) {
  $__fn = function($dictComonadAsk) use (&$Control_Comonad_Env_Class_ask, &$Prim_undefined, &$Control_Comonad_Traced_Trans_comonadTracedT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Control_Comonad_Env_Class_compose, &$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ask1 = ($Control_Comonad_Env_Class_ask)($dictComonadAsk);
$Comonad0 = (($dictComonadAsk)->Comonad0)($Prim_undefined);
$comonadTracedT = ($Control_Comonad_Traced_Trans_comonadTracedT)($Comonad0);
    $__res = (function() use ($comonadTracedT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Control_Comonad_Env_Class_compose, $ask1, &$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT, &$Comonad0) {
  $__fn = function($dictMonoid) use ($comonadTracedT, &$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict, &$Control_Comonad_Env_Class_compose, $ask1, &$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT, &$Comonad0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = ($Control_Comonad_Env_Class_ComonadAsk__dollar__Dict)((object)["ask" => ($Control_Comonad_Env_Class_compose)($ask1, ($Control_Comonad_Trans_Class_lower)(($Control_Comonad_Traced_Trans_comonadTransTracedT)($dictMonoid), $Comonad0)), "Comonad0" => (function() use ($comonadTracedT1) {
  $__fn = function($__dollar____unused) use ($comonadTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $comonadTracedT1;
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

// Control_Comonad_Env_Class_comonadEnvTracedT
$Control_Comonad_Env_Class_comonadEnvTracedT = (function() use (&$Control_Comonad_Env_Class_local, &$Control_Comonad_Env_Class_comonadAskTracedT, &$Prim_undefined, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT) {
  $__fn = function($dictComonadEnv) use (&$Control_Comonad_Env_Class_local, &$Control_Comonad_Env_Class_comonadAskTracedT, &$Prim_undefined, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$local1 = ($Control_Comonad_Env_Class_local)($dictComonadEnv);
$comonadAskTracedT1 = ($Control_Comonad_Env_Class_comonadAskTracedT)((($dictComonadEnv)->ComonadAsk0)($Prim_undefined));
    $__res = (function() use ($comonadAskTracedT1, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT, $local1) {
  $__fn = function($dictMonoid) use ($comonadAskTracedT1, &$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT, $local1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadAskTracedT2 = ($comonadAskTracedT1)($dictMonoid);
    $__res = ($Control_Comonad_Env_Class_ComonadEnv__dollar__Dict)((object)["local" => (function() use (&$Control_Comonad_Traced_Trans_TracedT, $local1) {
  $__body = function($f, $v) use (&$Control_Comonad_Traced_Trans_TracedT, $local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return ($Control_Comonad_Traced_Trans_TracedT)(($local1)($f1, $w));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Traced_Trans_TracedT, $local1, $__body, &$__fn) {
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
})(), "ComonadAsk0" => (function() use ($comonadAskTracedT2) {
  $__fn = function($__dollar____unused) use ($comonadAskTracedT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $comonadAskTracedT2;
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

