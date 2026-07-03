<?php

namespace Control\Comonad\Traced\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Identity.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Traced_Class_compose
$Control_Comonad_Traced_Class_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Comonad_Traced_Class_composeFlipped
$Control_Comonad_Traced_Class_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Control_Comonad_Traced_Class_ComonadTraced$Dict
$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict = (function() {
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

// Control_Comonad_Traced_Class_track
$Control_Comonad_Traced_Class_track = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->track;
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

// Control_Comonad_Traced_Class_tracks
$Control_Comonad_Traced_Class_tracks = (function() use (&$Control_Comonad_Traced_Class_track, &$Control_Comonad_extract, &$Prim_undefined) {
  $__fn = function($dictComonadTraced) use (&$Control_Comonad_Traced_Class_track, &$Control_Comonad_extract, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$track1 = ($Control_Comonad_Traced_Class_track)($dictComonadTraced);
$extract = ($Control_Comonad_extract)((($dictComonadTraced)->Comonad0)($Prim_undefined));
    $__res = (function() use ($track1, $extract) {
  $__fn = function($f, $w = null) use ($track1, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($track1)(($f)(($extract)($w)), $w);
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

// Control_Comonad_Traced_Class_lowerTrack
$Control_Comonad_Traced_Class_lowerTrack = (function() use (&$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Class_track, &$Prim_undefined, &$Control_Comonad_Traced_Class_compose) {
  $__fn = function($dictComonadTrans) use (&$Control_Comonad_Trans_Class_lower, &$Control_Comonad_Traced_Class_track, &$Prim_undefined, &$Control_Comonad_Traced_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lower = ($Control_Comonad_Trans_Class_lower)($dictComonadTrans);
    $__res = (function() use (&$Control_Comonad_Traced_Class_track, $lower, &$Prim_undefined, &$Control_Comonad_Traced_Class_compose) {
  $__fn = function($dictComonadTraced) use (&$Control_Comonad_Traced_Class_track, $lower, &$Prim_undefined, &$Control_Comonad_Traced_Class_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$track1 = ($Control_Comonad_Traced_Class_track)($dictComonadTraced);
$lower1 = ($lower)((($dictComonadTraced)->Comonad0)($Prim_undefined));
    $__res = (function() use (&$Control_Comonad_Traced_Class_compose, $track1, $lower1) {
  $__fn = function($m) use (&$Control_Comonad_Traced_Class_compose, $track1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Traced_Class_compose)(($track1)($m), $lower1);
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

// Control_Comonad_Traced_Class_lowerTrack1
$Control_Comonad_Traced_Class_lowerTrack1 = ($Control_Comonad_Traced_Class_lowerTrack)($Control_Comonad_Store_Trans_comonadTransStoreT);

// Control_Comonad_Traced_Class_lowerTrack2
$Control_Comonad_Traced_Class_lowerTrack2 = ($Control_Comonad_Traced_Class_lowerTrack)($Control_Comonad_Trans_Class_comonadTransIdentityT);

// Control_Comonad_Traced_Class_lowerTrack3
$Control_Comonad_Traced_Class_lowerTrack3 = ($Control_Comonad_Traced_Class_lowerTrack)($Control_Comonad_Env_Trans_comonadTransEnvT);

// Control_Comonad_Traced_Class_listens
$Control_Comonad_Traced_Class_listens = (function() use (&$Data_Functor_map, &$Control_Comonad_Traced_Trans_TracedT, &$Data_Tuple_Tuple) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Control_Comonad_Traced_Trans_TracedT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Data_Tuple_Tuple) {
  $__body = function($f, $v) use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$tr = $__case_1;
return ($Control_Comonad_Traced_Trans_TracedT)(($map)((function() use (&$Data_Tuple_Tuple, $f1) {
  $__fn = function($g, $t = null) use (&$Data_Tuple_Tuple, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($g)($t), ($f1)($t));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $tr));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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

// Control_Comonad_Traced_Class_listen
$Control_Comonad_Traced_Class_listen = (function() use (&$Data_Functor_map, &$Control_Comonad_Traced_Trans_TracedT, &$Data_Tuple_Tuple) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Control_Comonad_Traced_Trans_TracedT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Data_Tuple_Tuple) {
  $__body = function($v) use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if (true) {
$tr = $__case_0;
return ($Control_Comonad_Traced_Trans_TracedT)(($map)((function() use (&$Data_Tuple_Tuple) {
  $__fn = function($f, $t = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($f)($t), $t);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $tr));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})();

// Control_Comonad_Traced_Class_comonadTracedTracedT
$Control_Comonad_Traced_Class_comonadTracedTracedT = (function() use (&$Control_Comonad_extract, &$Control_Comonad_Traced_Trans_comonadTracedT, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict) {
  $__fn = function($dictComonad) use (&$Control_Comonad_extract, &$Control_Comonad_Traced_Trans_comonadTracedT, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extract = ($Control_Comonad_extract)($dictComonad);
$comonadTracedT = ($Control_Comonad_Traced_Trans_comonadTracedT)($dictComonad);
    $__res = (function() use ($comonadTracedT, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, $extract) {
  $__fn = function($dictMonoid) use ($comonadTracedT, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = ($Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict)((object)["track" => (function() use ($extract) {
  $__body = function($t, $v) use ($extract) {
    $__case_0 = $t;
    $__case_1 = $v;
    if (true) {
$t1 = $__case_0;
$tr = $__case_1;
return ($extract)($tr, $t1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($t, $v = null) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($t, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($t, $v);
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

// Control_Comonad_Traced_Class_comonadTracedStoreT
$Control_Comonad_Traced_Class_comonadTracedStoreT = (function() use (&$Control_Comonad_Store_Trans_comonadStoreT, &$Prim_undefined, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, &$Control_Comonad_Traced_Class_lowerTrack1) {
  $__fn = function($dictComonadTraced) use (&$Control_Comonad_Store_Trans_comonadStoreT, &$Prim_undefined, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, &$Control_Comonad_Traced_Class_lowerTrack1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadStoreT = ($Control_Comonad_Store_Trans_comonadStoreT)((($dictComonadTraced)->Comonad0)($Prim_undefined));
    $__res = ($Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict)((object)["track" => ($Control_Comonad_Traced_Class_lowerTrack1)($dictComonadTraced), "Comonad0" => (function() use ($comonadStoreT) {
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

// Control_Comonad_Traced_Class_comonadTracedIdentityT
$Control_Comonad_Traced_Class_comonadTracedIdentityT = (function() use (&$Control_Monad_Identity_Trans_comonadIdentityT, &$Prim_undefined, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, &$Control_Comonad_Traced_Class_lowerTrack2) {
  $__fn = function($dictComonadTraced) use (&$Control_Monad_Identity_Trans_comonadIdentityT, &$Prim_undefined, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, &$Control_Comonad_Traced_Class_lowerTrack2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadIdentityT = ($Control_Monad_Identity_Trans_comonadIdentityT)((($dictComonadTraced)->Comonad0)($Prim_undefined));
    $__res = ($Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict)((object)["track" => ($Control_Comonad_Traced_Class_lowerTrack2)($dictComonadTraced), "Comonad0" => (function() use ($comonadIdentityT) {
  $__fn = function($__dollar____unused) use ($comonadIdentityT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $comonadIdentityT;
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

// Control_Comonad_Traced_Class_comonadTracedEnvT
$Control_Comonad_Traced_Class_comonadTracedEnvT = (function() use (&$Control_Comonad_Env_Trans_comonadEnvT, &$Prim_undefined, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, &$Control_Comonad_Traced_Class_lowerTrack3) {
  $__fn = function($dictComonadTraced) use (&$Control_Comonad_Env_Trans_comonadEnvT, &$Prim_undefined, &$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict, &$Control_Comonad_Traced_Class_lowerTrack3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$comonadEnvT = ($Control_Comonad_Env_Trans_comonadEnvT)((($dictComonadTraced)->Comonad0)($Prim_undefined));
    $__res = ($Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict)((object)["track" => ($Control_Comonad_Traced_Class_lowerTrack3)($dictComonadTraced), "Comonad0" => (function() use ($comonadEnvT) {
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

// Control_Comonad_Traced_Class_censor
$Control_Comonad_Traced_Class_censor = (function() use (&$Data_Functor_map, &$Control_Comonad_Traced_Trans_TracedT, &$Control_Comonad_Traced_Class_composeFlipped) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Control_Comonad_Traced_Trans_TracedT, &$Control_Comonad_Traced_Class_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Control_Comonad_Traced_Class_composeFlipped) {
  $__body = function($f, $v) use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Control_Comonad_Traced_Class_composeFlipped) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$tr = $__case_1;
return ($Control_Comonad_Traced_Trans_TracedT)(($map)((function() use (&$Control_Comonad_Traced_Class_composeFlipped, $f1) {
  $__fn = function($v1) use (&$Control_Comonad_Traced_Class_composeFlipped, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Traced_Class_composeFlipped)($f1, $v1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $tr));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Traced_Trans_TracedT, $map, &$Control_Comonad_Traced_Class_composeFlipped, $__body, &$__fn) {
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

