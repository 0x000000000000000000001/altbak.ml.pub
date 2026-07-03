<?php

namespace Data\Functor\Costar;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Functor.Costar/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Closed/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Costar_composeFlipped
$Data_Functor_Costar_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Costar_lcmap
$Data_Functor_Costar_lcmap = ($Data_Profunctor_lcmap)($Data_Profunctor_profunctorFn);

// Data_Functor_Costar_compose
$Data_Functor_Costar_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Functor_Costar_Costar
$Data_Functor_Costar_Costar = (function() {
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

// Data_Functor_Costar_semigroupoidCostar
$Data_Functor_Costar_semigroupoidCostar = (function() use (&$Control_Extend_composeCoKleisliFlipped, &$Control_Semigroupoid_Semigroupoid__dollar__Dict, &$Data_Functor_Costar_Costar) {
  $__fn = function($dictExtend) use (&$Control_Extend_composeCoKleisliFlipped, &$Control_Semigroupoid_Semigroupoid__dollar__Dict, &$Data_Functor_Costar_Costar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$composeCoKleisliFlipped = ($Control_Extend_composeCoKleisliFlipped)($dictExtend);
    $__res = ($Control_Semigroupoid_Semigroupoid__dollar__Dict)((object)["compose" => (function() use (&$Data_Functor_Costar_Costar, $composeCoKleisliFlipped) {
  $__body = function($v, $v1) use (&$Data_Functor_Costar_Costar, $composeCoKleisliFlipped) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($Data_Functor_Costar_Costar)(($composeCoKleisliFlipped)($f, $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Costar_Costar, $composeCoKleisliFlipped, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Costar_profunctorCostar
$Data_Functor_Costar_profunctorCostar = (function() use (&$Data_Functor_map, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Profunctor_Profunctor__dollar__Dict, &$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Profunctor_Profunctor__dollar__Dict)((object)["dimap" => (function() use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, $map) {
  $__body = function($f, $g, $v) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, $map) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
return ($Data_Functor_Costar_Costar)(($Data_Functor_Costar_composeFlipped)(($map)($f1), ($Data_Functor_Costar_composeFlipped)($h, $g1)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, $map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $g, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $g, $v);
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

// Data_Functor_Costar_strongCostar
$Data_Functor_Costar_strongCostar = (function() use (&$Prim_undefined, &$Data_Functor_map, &$Control_Comonad_extract, &$Data_Functor_Costar_profunctorCostar, &$Data_Profunctor_Strong_Strong__dollar__Dict, &$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, &$Data_Tuple_fst, &$Data_Tuple_snd) {
  $__fn = function($dictComonad) use (&$Prim_undefined, &$Data_Functor_map, &$Control_Comonad_extract, &$Data_Functor_Costar_profunctorCostar, &$Data_Profunctor_Strong_Strong__dollar__Dict, &$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, &$Data_Tuple_fst, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Functor0 = (((($dictComonad)->Extend0)($Prim_undefined))->Functor0)($Prim_undefined);
$map = ($Data_Functor_map)($Functor0);
$extract = ($Control_Comonad_extract)($dictComonad);
$profunctorCostar1 = ($Data_Functor_Costar_profunctorCostar)($Functor0);
    $__res = ($Data_Profunctor_Strong_Strong__dollar__Dict)((object)["first" => (function() use (&$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, $map, &$Data_Tuple_fst, &$Data_Tuple_snd, $extract) {
  $__body = function($v) use (&$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, $map, &$Data_Tuple_fst, &$Data_Tuple_snd, $extract) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Functor_Costar_Costar)((function() use (&$Data_Tuple_Tuple, $f, $map, &$Data_Tuple_fst, &$Data_Tuple_snd, $extract) {
  $__fn = function($x) use (&$Data_Tuple_Tuple, $f, $map, &$Data_Tuple_fst, &$Data_Tuple_snd, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($f)(($map)($Data_Tuple_fst, $x)), ($Data_Tuple_snd)(($extract)($x)));
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
  $__fn = function($v) use (&$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, $map, &$Data_Tuple_fst, &$Data_Tuple_snd, $extract, $__body, &$__fn) {
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
})(), "second" => (function() use (&$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, &$Data_Tuple_fst, $extract, $map, &$Data_Tuple_snd) {
  $__body = function($v) use (&$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, &$Data_Tuple_fst, $extract, $map, &$Data_Tuple_snd) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Functor_Costar_Costar)((function() use (&$Data_Tuple_Tuple, &$Data_Tuple_fst, $extract, $f, $map, &$Data_Tuple_snd) {
  $__fn = function($x) use (&$Data_Tuple_Tuple, &$Data_Tuple_fst, $extract, $f, $map, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)(($Data_Tuple_fst)(($extract)($x)), ($f)(($map)($Data_Tuple_snd, $x)));
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
  $__fn = function($v) use (&$Data_Functor_Costar_Costar, &$Data_Tuple_Tuple, &$Data_Tuple_fst, $extract, $map, &$Data_Tuple_snd, $__body, &$__fn) {
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
})(), "Profunctor0" => (function() use ($profunctorCostar1) {
  $__fn = function($__dollar____unused) use ($profunctorCostar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $profunctorCostar1;
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

// Data_Functor_Costar_newtypeCostar
$Data_Functor_Costar_newtypeCostar = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Data_Functor_Costar_hoistCostar
$Data_Functor_Costar_hoistCostar = (function() use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_lcmap) {
  $__body = function($f, $v) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_lcmap) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($Data_Functor_Costar_Costar)(($Data_Functor_Costar_lcmap)($f1, $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_lcmap, $__body, &$__fn) {
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

// Data_Functor_Costar_functorCostar
$Data_Functor_Costar_functorCostar = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_compose) {
  $__body = function($f, $v) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_compose) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$g = $__case_1;
return ($Data_Functor_Costar_Costar)(($Data_Functor_Costar_compose)($f1, $g));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_compose, $__body, &$__fn) {
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

// Data_Functor_Costar_invariantCostar
$Data_Functor_Costar_invariantCostar = ($Data_Functor_Invariant_Invariant__dollar__Dict)((object)["imap" => ($Data_Functor_Invariant_imapF)($Data_Functor_Costar_functorCostar)]);

// Data_Functor_Costar_distributiveCostar
$Data_Functor_Costar_distributiveCostar = ($Data_Distributive_Distributive__dollar__Dict)((object)["distribute" => (function() use (&$Data_Functor_map, &$Data_Functor_Costar_Costar) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Costar_Costar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Functor_Costar_Costar, $map) {
  $__fn = function($f) use (&$Data_Functor_Costar_Costar, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Costar_Costar)((function() use ($map, $f) {
  $__fn = function($a) use ($map, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map)((function() use ($a) {
  $__body = function($v) use ($a) {
    $__case_0 = $v;
    if (true) {
$g = $__case_0;
return ($g)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($a, $__body, &$__fn) {
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
})(), $f);
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
})(), "collect" => (function() use (&$Data_Functor_map, &$Data_Functor_Costar_compose, &$Data_Distributive_distribute, &$Data_Functor_Costar_distributiveCostar) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Costar_compose, &$Data_Distributive_distribute, &$Data_Functor_Costar_distributiveCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Functor_Costar_compose, &$Data_Distributive_distribute, &$Data_Functor_Costar_distributiveCostar, $dictFunctor, $map) {
  $__fn = function($f) use (&$Data_Functor_Costar_compose, &$Data_Distributive_distribute, &$Data_Functor_Costar_distributiveCostar, $dictFunctor, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Costar_compose)(($Data_Distributive_distribute)($Data_Functor_Costar_distributiveCostar, $dictFunctor), ($map)($f));
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
})(), "Functor0" => (function() use (&$Data_Functor_Costar_functorCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_functorCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_functorCostar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Functor_Costar_closedCostar
$Data_Functor_Costar_closedCostar = (function() use (&$Data_Functor_map, &$Data_Functor_Costar_profunctorCostar, &$Data_Profunctor_Closed_Closed__dollar__Dict, &$Data_Functor_Costar_Costar) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Costar_profunctorCostar, &$Data_Profunctor_Closed_Closed__dollar__Dict, &$Data_Functor_Costar_Costar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
$profunctorCostar1 = ($Data_Functor_Costar_profunctorCostar)($dictFunctor);
    $__res = ($Data_Profunctor_Closed_Closed__dollar__Dict)((object)["closed" => (function() use (&$Data_Functor_Costar_Costar, $map) {
  $__body = function($v) use (&$Data_Functor_Costar_Costar, $map) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Data_Functor_Costar_Costar)((function() use ($f, $map) {
  $__fn = function($g, $x = null) use ($f, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($map)((function() use ($x) {
  $__fn = function($v1) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v1)($x);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $g));
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
  $__fn = function($v) use (&$Data_Functor_Costar_Costar, $map, $__body, &$__fn) {
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
})(), "Profunctor0" => (function() use ($profunctorCostar1) {
  $__fn = function($__dollar____unused) use ($profunctorCostar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $profunctorCostar1;
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

// Data_Functor_Costar_categoryCostar
$Data_Functor_Costar_categoryCostar = (function() use (&$Data_Functor_Costar_semigroupoidCostar, &$Prim_undefined, &$Control_Category_Category__dollar__Dict, &$Data_Functor_Costar_Costar, &$Control_Comonad_extract) {
  $__fn = function($dictComonad) use (&$Data_Functor_Costar_semigroupoidCostar, &$Prim_undefined, &$Control_Category_Category__dollar__Dict, &$Data_Functor_Costar_Costar, &$Control_Comonad_extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupoidCostar1 = ($Data_Functor_Costar_semigroupoidCostar)((($dictComonad)->Extend0)($Prim_undefined));
    $__res = ($Control_Category_Category__dollar__Dict)((object)["identity" => ($Data_Functor_Costar_Costar)(($Control_Comonad_extract)($dictComonad)), "Semigroupoid0" => (function() use ($semigroupoidCostar1) {
  $__fn = function($__dollar____unused) use ($semigroupoidCostar1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupoidCostar1;
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

// Data_Functor_Costar_bifunctorCostar
$Data_Functor_Costar_bifunctorCostar = (function() use (&$Data_Functor_Contravariant_cmap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped) {
  $__fn = function($dictContravariant) use (&$Data_Functor_Contravariant_cmap, &$Data_Bifunctor_Bifunctor__dollar__Dict, &$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$cmap = ($Data_Functor_Contravariant_cmap)($dictContravariant);
    $__res = ($Data_Bifunctor_Bifunctor__dollar__Dict)((object)["bimap" => (function() use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, $cmap) {
  $__body = function($f, $g, $v) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, $cmap) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
return ($Data_Functor_Costar_Costar)(($Data_Functor_Costar_composeFlipped)(($cmap)($f1), ($Data_Functor_Costar_composeFlipped)($h, $g1)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $g = null, $v = null) use (&$Data_Functor_Costar_Costar, &$Data_Functor_Costar_composeFlipped, $cmap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $g, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $g, $v);
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

// Data_Functor_Costar_applyCostar
$Data_Functor_Costar_applyCostar = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Data_Functor_Costar_Costar) {
  $__body = function($v, $v1) use (&$Data_Functor_Costar_Costar) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($Data_Functor_Costar_Costar)((function() use ($f, $g) {
  $__fn = function($a) use ($f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($a, ($g)($a));
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
  $__fn = function($v, $v1 = null) use (&$Data_Functor_Costar_Costar, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Functor_Costar_functorCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_functorCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_functorCostar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Functor_Costar_bindCostar
$Data_Functor_Costar_bindCostar = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => (function() use (&$Data_Functor_Costar_Costar) {
  $__body = function($v, $f) use (&$Data_Functor_Costar_Costar) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return ($Data_Functor_Costar_Costar)((function() use ($f1, $m) {
  $__body = function($x) use ($f1, $m) {
    $v1 = ($f1)(($m)($x));
    $__case_0 = $v1;
    if (true) {
$g = $__case_0;
return ($g)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use ($f1, $m, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($x);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $f = null) use (&$Data_Functor_Costar_Costar, $__body, &$__fn) {
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
})(), "Apply0" => (function() use (&$Data_Functor_Costar_applyCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_applyCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_applyCostar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Functor_Costar_applicativeCostar
$Data_Functor_Costar_applicativeCostar = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Data_Functor_Costar_Costar) {
  $__fn = function($a) use (&$Data_Functor_Costar_Costar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Costar_Costar)((function() use ($a) {
  $__fn = function($v) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $a;
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
})(), "Apply0" => (function() use (&$Data_Functor_Costar_applyCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_applyCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_applyCostar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Functor_Costar_monadCostar
$Data_Functor_Costar_monadCostar = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Data_Functor_Costar_applicativeCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_applicativeCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_applicativeCostar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Data_Functor_Costar_bindCostar) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_Costar_bindCostar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_Costar_bindCostar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

