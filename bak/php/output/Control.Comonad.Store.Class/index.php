<?php

namespace Control\Comonad\Store\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Store_Class_compose
$Control_Comonad_Store_Class_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Comonad_Store_Class_lower
$Control_Comonad_Store_Class_lower = ($Control_Comonad_Trans_Class_lower)($Control_Comonad_Env_Trans_comonadTransEnvT);

// Control_Comonad_Store_Class_ComonadStore$Dict
$Control_Comonad_Store_Class_ComonadStore__dollar__Dict = (function() {
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

// Control_Comonad_Store_Class_pos
$Control_Comonad_Store_Class_pos = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pos;
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

// Control_Comonad_Store_Class_peek
$Control_Comonad_Store_Class_peek = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->peek;
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

// Control_Comonad_Store_Class_peeks
$Control_Comonad_Store_Class_peeks = (function() use (&$Control_Comonad_Store_Class_peek, &$Control_Comonad_Store_Class_pos) {
  $__fn = function($dictComonadStore) use (&$Control_Comonad_Store_Class_peek, &$Control_Comonad_Store_Class_pos, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$peek1 = ($Control_Comonad_Store_Class_peek)($dictComonadStore);
$pos1 = ($Control_Comonad_Store_Class_pos)($dictComonadStore);
    $__res = (function() use ($peek1, $pos1) {
  $__fn = function($f, $x = null) use ($peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($peek1)(($f)(($pos1)($x)), $x);
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

// Control_Comonad_Store_Class_seeks
$Control_Comonad_Store_Class_seeks = (function() use (&$Control_Comonad_Store_Class_peeks, &$Control_Extend_duplicate, &$Prim_undefined, &$Control_Comonad_Store_Class_compose) {
  $__fn = function($dictComonadStore) use (&$Control_Comonad_Store_Class_peeks, &$Control_Extend_duplicate, &$Prim_undefined, &$Control_Comonad_Store_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$peeks1 = ($Control_Comonad_Store_Class_peeks)($dictComonadStore);
$duplicate = ($Control_Extend_duplicate)((((($dictComonadStore)->Comonad0)($Prim_undefined))->Extend0)($Prim_undefined));
    $__res = (function() use (&$Control_Comonad_Store_Class_compose, $peeks1, $duplicate) {
  $__fn = function($f) use (&$Control_Comonad_Store_Class_compose, $peeks1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Store_Class_compose)(($peeks1)($f), $duplicate);
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

// Control_Comonad_Store_Class_seek
$Control_Comonad_Store_Class_seek = (function() use (&$Control_Comonad_Store_Class_peek, &$Control_Extend_duplicate, &$Prim_undefined, &$Control_Comonad_Store_Class_compose) {
  $__fn = function($dictComonadStore) use (&$Control_Comonad_Store_Class_peek, &$Control_Extend_duplicate, &$Prim_undefined, &$Control_Comonad_Store_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$peek1 = ($Control_Comonad_Store_Class_peek)($dictComonadStore);
$duplicate = ($Control_Extend_duplicate)((((($dictComonadStore)->Comonad0)($Prim_undefined))->Extend0)($Prim_undefined));
    $__res = (function() use (&$Control_Comonad_Store_Class_compose, $peek1, $duplicate) {
  $__fn = function($s) use (&$Control_Comonad_Store_Class_compose, $peek1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Store_Class_compose)(($peek1)($s), $duplicate);
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

// Control_Comonad_Store_Class_experiment
$Control_Comonad_Store_Class_experiment = (function() use (&$Control_Comonad_Store_Class_peek, &$Control_Comonad_Store_Class_pos, &$Data_Functor_map, &$Data_Function_flip) {
  $__fn = function($dictComonadStore) use (&$Control_Comonad_Store_Class_peek, &$Control_Comonad_Store_Class_pos, &$Data_Functor_map, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$peek1 = ($Control_Comonad_Store_Class_peek)($dictComonadStore);
$pos1 = ($Control_Comonad_Store_Class_pos)($dictComonadStore);
    $__res = (function() use (&$Data_Functor_map, &$Data_Function_flip, $peek1, $pos1) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Function_flip, $peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map, &$Data_Function_flip, $peek1, $pos1) {
  $__fn = function($f, $x = null) use ($map, &$Data_Function_flip, $peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map)(($Data_Function_flip)($peek1, $x), ($f)(($pos1)($x)));
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

// Control_Comonad_Store_Class_comonadStoreTracedT
$Control_Comonad_Store_Class_comonadStoreTracedT = (function() use (&$Control_Comonad_Store_Class_pos, &$Prim_undefined, &$Control_Comonad_Store_Class_peek, &$Control_Comonad_Traced_Trans_comonadTracedT, &$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict, &$Control_Comonad_Store_Class_compose) {
  $__fn = function($dictComonadStore) use (&$Control_Comonad_Store_Class_pos, &$Prim_undefined, &$Control_Comonad_Store_Class_peek, &$Control_Comonad_Traced_Trans_comonadTracedT, &$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict, &$Control_Comonad_Store_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pos1 = ($Control_Comonad_Store_Class_pos)($dictComonadStore);
$Comonad0 = (($dictComonadStore)->Comonad0)($Prim_undefined);
$peek1 = ($Control_Comonad_Store_Class_peek)($dictComonadStore);
$comonadTracedT = ($Control_Comonad_Traced_Trans_comonadTracedT)($Comonad0);
    $__res = (function() use (&$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT, &$Comonad0, $comonadTracedT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict, &$Control_Comonad_Store_Class_compose, $pos1, $peek1) {
  $__fn = function($dictMonoid) use (&$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Trans_comonadTransTracedT, &$Comonad0, $comonadTracedT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict, &$Control_Comonad_Store_Class_compose, $pos1, $peek1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lower1 = ($Control_Comonad_Trans_Class_lower)(($Control_Comonad_Traced_Trans_comonadTransTracedT)($dictMonoid), $Comonad0);
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = ($Control_Comonad_Store_Class_ComonadStore__dollar__Dict)((object)["pos" => ($Control_Comonad_Store_Class_compose)($pos1, $lower1), "peek" => (function() use (&$Control_Comonad_Store_Class_compose, $peek1, $lower1) {
  $__fn = function($s) use (&$Control_Comonad_Store_Class_compose, $peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Store_Class_compose)(($peek1)($s), $lower1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadTracedT1) {
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

// Control_Comonad_Store_Class_comonadStoreStoreT
$Control_Comonad_Store_Class_comonadStoreStoreT = (function() use (&$Control_Comonad_extract, &$Control_Comonad_Store_Trans_comonadStoreT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict) {
  $__fn = function($dictComonad) use (&$Control_Comonad_extract, &$Control_Comonad_Store_Trans_comonadStoreT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extract = ($Control_Comonad_extract)($dictComonad);
$comonadStoreT = ($Control_Comonad_Store_Trans_comonadStoreT)($dictComonad);
    $__res = ($Control_Comonad_Store_Class_ComonadStore__dollar__Dict)((object)["pos" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$s = ($__case_0)->values[1];
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
})(), "peek" => (function() use ($extract) {
  $__body = function($s, $v) use ($extract) {
    $__case_0 = $s;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$s1 = $__case_0;
$f = ($__case_1)->values[0];
return ($extract)($f, $s1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s, $v = null) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($s, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($s, $v);
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadStoreT) {
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

// Control_Comonad_Store_Class_comonadStoreEnvT
$Control_Comonad_Store_Class_comonadStoreEnvT = (function() use (&$Prim_undefined, &$Control_Comonad_Store_Class_lower, &$Control_Comonad_Store_Class_peek, &$Control_Comonad_Env_Trans_comonadEnvT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict, &$Control_Comonad_Store_Class_compose, &$Control_Comonad_Store_Class_pos) {
  $__fn = function($dictComonadStore) use (&$Prim_undefined, &$Control_Comonad_Store_Class_lower, &$Control_Comonad_Store_Class_peek, &$Control_Comonad_Env_Trans_comonadEnvT, &$Control_Comonad_Store_Class_ComonadStore__dollar__Dict, &$Control_Comonad_Store_Class_compose, &$Control_Comonad_Store_Class_pos, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Comonad0 = (($dictComonadStore)->Comonad0)($Prim_undefined);
$lower1 = ($Control_Comonad_Store_Class_lower)($Comonad0);
$peek1 = ($Control_Comonad_Store_Class_peek)($dictComonadStore);
$comonadEnvT = ($Control_Comonad_Env_Trans_comonadEnvT)($Comonad0);
    $__res = ($Control_Comonad_Store_Class_ComonadStore__dollar__Dict)((object)["pos" => ($Control_Comonad_Store_Class_compose)(($Control_Comonad_Store_Class_pos)($dictComonadStore), $lower1), "peek" => (function() use (&$Control_Comonad_Store_Class_compose, $peek1, $lower1) {
  $__fn = function($s) use (&$Control_Comonad_Store_Class_compose, $peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Store_Class_compose)(($peek1)($s), $lower1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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

