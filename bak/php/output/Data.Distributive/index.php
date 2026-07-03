<?php

namespace Data\Distributive;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Type.Equality/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Distributive_compose
$Data_Distributive_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Distributive_unwrap
$Data_Distributive_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Distributive_identity
$Data_Distributive_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Distributive_Distributive$Dict
$Data_Distributive_Distributive__dollar__Dict = (function() {
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

// Data_Distributive_distributiveIdentity
$Data_Distributive_distributiveIdentity = ($Data_Distributive_Distributive__dollar__Dict)((object)["distribute" => (function() use (&$Data_Distributive_compose, &$Data_Identity_Identity, &$Data_Functor_map, &$Data_Distributive_unwrap) {
  $__fn = function($dictFunctor) use (&$Data_Distributive_compose, &$Data_Identity_Identity, &$Data_Functor_map, &$Data_Distributive_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Distributive_compose)($Data_Identity_Identity, ($Data_Functor_map)($dictFunctor, $Data_Distributive_unwrap));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "collect" => (function() use (&$Data_Functor_map, &$Data_Distributive_compose, &$Data_Identity_Identity, &$Data_Distributive_unwrap) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Distributive_compose, &$Data_Identity_Identity, &$Data_Distributive_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Distributive_compose, &$Data_Identity_Identity, $map, &$Data_Distributive_unwrap) {
  $__fn = function($f) use (&$Data_Distributive_compose, &$Data_Identity_Identity, $map, &$Data_Distributive_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Distributive_compose)($Data_Identity_Identity, ($map)(($Data_Distributive_compose)($Data_Distributive_unwrap, $f)));
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
})(), "Functor0" => (function() use (&$Data_Identity_functorIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Identity_functorIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Identity_functorIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Distributive_distribute
$Data_Distributive_distribute = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->distribute;
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

// Data_Distributive_distributiveFunction
$Data_Distributive_distributiveFunction = ($Data_Distributive_Distributive__dollar__Dict)((object)["distribute" => (function() use (&$Data_Functor_map) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($a, $e = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($map)((function() use ($e) {
  $__fn = function($v) use ($e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v)($e);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $a);
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
})(), "collect" => (function() use (&$Data_Functor_map, &$Data_Distributive_compose, &$Data_Distributive_distribute, &$Data_Distributive_distributiveFunction) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Distributive_compose, &$Data_Distributive_distribute, &$Data_Distributive_distributiveFunction, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Distributive_compose, &$Data_Distributive_distribute, &$Data_Distributive_distributiveFunction, $dictFunctor, $map) {
  $__fn = function($f) use (&$Data_Distributive_compose, &$Data_Distributive_distribute, &$Data_Distributive_distributiveFunction, $dictFunctor, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Distributive_compose)(($Data_Distributive_distribute)($Data_Distributive_distributiveFunction, $dictFunctor), ($map)($f));
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
})(), "Functor0" => (function() use (&$Data_Functor_functorFn) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_functorFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_functorFn;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Distributive_cotraverse
$Data_Distributive_cotraverse = (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Distributive_distribute, &$Data_Distributive_compose) {
  $__fn = function($dictDistributive) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Distributive_distribute, &$Data_Distributive_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((($dictDistributive)->Functor0)($Prim_undefined));
$distribute1 = ($Data_Distributive_distribute)($dictDistributive);
    $__res = (function() use ($distribute1, &$Data_Distributive_compose, $map) {
  $__fn = function($dictFunctor) use ($distribute1, &$Data_Distributive_compose, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$distribute2 = ($distribute1)($dictFunctor);
    $__res = (function() use (&$Data_Distributive_compose, $map, $distribute2) {
  $__fn = function($f) use (&$Data_Distributive_compose, $map, $distribute2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Distributive_compose)(($map)($f), $distribute2);
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

// Data_Distributive_collectDefault
$Data_Distributive_collectDefault = (function() use (&$Data_Distributive_distribute, &$Data_Functor_map, &$Data_Distributive_compose) {
  $__fn = function($dictDistributive) use (&$Data_Distributive_distribute, &$Data_Functor_map, &$Data_Distributive_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$distribute1 = ($Data_Distributive_distribute)($dictDistributive);
    $__res = (function() use ($distribute1, &$Data_Functor_map, &$Data_Distributive_compose) {
  $__fn = function($dictFunctor) use ($distribute1, &$Data_Functor_map, &$Data_Distributive_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$distribute2 = ($distribute1)($dictFunctor);
$map = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use (&$Data_Distributive_compose, $distribute2, $map) {
  $__fn = function($f) use (&$Data_Distributive_compose, $distribute2, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Distributive_compose)($distribute2, ($map)($f));
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

// Data_Distributive_distributiveTuple
$Data_Distributive_distributiveTuple = (function() use (&$Type_Equality_from, &$Data_Distributive_Distributive__dollar__Dict, &$Data_Distributive_collectDefault, &$Data_Distributive_distributiveTuple, &$Data_Distributive_compose, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$Data_Functor_map, &$Data_Tuple_snd, &$Data_Tuple_functorTuple) {
  $__fn = function($dictTypeEquals) use (&$Type_Equality_from, &$Data_Distributive_Distributive__dollar__Dict, &$Data_Distributive_collectDefault, &$Data_Distributive_distributiveTuple, &$Data_Distributive_compose, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$Data_Functor_map, &$Data_Tuple_snd, &$Data_Tuple_functorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictTypeEquals) use (&$Type_Equality_from, &$Data_Distributive_Distributive__dollar__Dict, &$Data_Distributive_collectDefault, &$Data_Distributive_distributiveTuple, &$Data_Distributive_compose, &$Data_Tuple_Tuple, &$Data_Unit_unit, &$Data_Functor_map, &$Data_Tuple_snd, &$Data_Tuple_functorTuple) {
while (true) {
$from = ($Type_Equality_from)($dictTypeEquals);
return ($Data_Distributive_Distributive__dollar__Dict)((object)["collect" => (function() use (&$Data_Distributive_collectDefault, &$Data_Distributive_distributiveTuple, $dictTypeEquals) {
  $__fn = function($dictFunctor) use (&$Data_Distributive_collectDefault, &$Data_Distributive_distributiveTuple, $dictTypeEquals, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Distributive_collectDefault)(($Data_Distributive_distributiveTuple)($dictTypeEquals), $dictFunctor);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "distribute" => (function() use (&$Data_Distributive_compose, &$Data_Tuple_Tuple, $from, &$Data_Unit_unit, &$Data_Functor_map, &$Data_Tuple_snd) {
  $__fn = function($dictFunctor) use (&$Data_Distributive_compose, &$Data_Tuple_Tuple, $from, &$Data_Unit_unit, &$Data_Functor_map, &$Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Distributive_compose)(($Data_Tuple_Tuple)(($from)($Data_Unit_unit)), ($Data_Functor_map)($dictFunctor, $Data_Tuple_snd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Tuple_functorTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Tuple_functorTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Tuple_functorTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
}
})($dictTypeEquals);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Distributive_collect
$Data_Distributive_collect = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->collect;
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

// Data_Distributive_distributeDefault
$Data_Distributive_distributeDefault = (function() use (&$Data_Distributive_collect, &$Data_Distributive_identity) {
  $__fn = function($dictDistributive) use (&$Data_Distributive_collect, &$Data_Distributive_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$collect1 = ($Data_Distributive_collect)($dictDistributive);
    $__res = (function() use ($collect1, &$Data_Distributive_identity) {
  $__fn = function($dictFunctor) use ($collect1, &$Data_Distributive_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($collect1)($dictFunctor, $Data_Distributive_identity);
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

