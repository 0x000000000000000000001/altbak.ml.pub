<?php

namespace Control\Comonad\Store\Trans;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Store_Trans_composeFlipped
$Control_Comonad_Store_Trans_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Control_Comonad_Store_Trans_StoreT
$Control_Comonad_Store_Trans_StoreT = (function() {
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

// Control_Comonad_Store_Trans_runStoreT
$Control_Comonad_Store_Trans_runStoreT = (function() {
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

// Control_Comonad_Store_Trans_newtypeStoreT
$Control_Comonad_Store_Trans_newtypeStoreT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Comonad_Store_Trans_functorStoreT
$Control_Comonad_Store_Trans_functorStoreT = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, &$Control_Comonad_Store_Trans_composeFlipped) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, &$Control_Comonad_Store_Trans_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $map, &$Control_Comonad_Store_Trans_composeFlipped) {
  $__body = function($f, $v) use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $map, &$Control_Comonad_Store_Trans_composeFlipped) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$w = ($__case_1)->values[0];
$s = ($__case_1)->values[1];
return ($Control_Comonad_Store_Trans_StoreT)(($Data_Tuple_Tuple)(($map)((function() use (&$Control_Comonad_Store_Trans_composeFlipped, $f1) {
  $__fn = function($h) use (&$Control_Comonad_Store_Trans_composeFlipped, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Comonad_Store_Trans_composeFlipped)($h, $f1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $w), $s));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $map, &$Control_Comonad_Store_Trans_composeFlipped, $__body, &$__fn) {
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

// Control_Comonad_Store_Trans_extendStoreT
$Control_Comonad_Store_Trans_extendStoreT = (function() use (&$Control_Extend_extend, &$Control_Comonad_Store_Trans_functorStoreT, &$Prim_undefined, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple) {
  $__fn = function($dictExtend) use (&$Control_Extend_extend, &$Control_Comonad_Store_Trans_functorStoreT, &$Prim_undefined, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extend = ($Control_Extend_extend)($dictExtend);
$functorStoreT1 = ($Control_Comonad_Store_Trans_functorStoreT)((($dictExtend)->Functor0)($Prim_undefined));
    $__res = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $extend) {
  $__body = function($f, $v) use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $extend) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$w = ($__case_1)->values[0];
$s = ($__case_1)->values[1];
return ($Control_Comonad_Store_Trans_StoreT)(($Data_Tuple_Tuple)(($extend)((function() use ($f1, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple) {
  $__fn = function($w__prime__, $s__prime__ = null) use ($f1, &$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f1)(($Control_Comonad_Store_Trans_StoreT)(($Data_Tuple_Tuple)($w__prime__, $s__prime__)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $w), $s));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Store_Trans_StoreT, &$Data_Tuple_Tuple, $extend, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorStoreT1) {
  $__fn = function($__dollar____unused) use ($functorStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorStoreT1;
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

// Control_Comonad_Store_Trans_comonadTransStoreT
$Control_Comonad_Store_Trans_comonadTransStoreT = ($Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict)((object)["lower" => (function() use (&$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictComonad) use (&$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictComonad)->Extend0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$w = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($map)((function() use ($s) {
  $__fn = function($v1) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v1)($s);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), $w);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
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
})()]);

// Control_Comonad_Store_Trans_comonadStoreT
$Control_Comonad_Store_Trans_comonadStoreT = (function() use (&$Control_Comonad_extract, &$Control_Comonad_Store_Trans_extendStoreT, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict) {
  $__fn = function($dictComonad) use (&$Control_Comonad_extract, &$Control_Comonad_Store_Trans_extendStoreT, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extract = ($Control_Comonad_extract)($dictComonad);
$extendStoreT1 = ($Control_Comonad_Store_Trans_extendStoreT)((($dictComonad)->Extend0)($Prim_undefined));
    $__res = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => (function() use ($extract) {
  $__body = function($v) use ($extract) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$w = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($extract)($w, $s);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($extract, $__body, &$__fn) {
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
})(), "Extend0" => (function() use ($extendStoreT1) {
  $__fn = function($__dollar____unused) use ($extendStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $extendStoreT1;
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

