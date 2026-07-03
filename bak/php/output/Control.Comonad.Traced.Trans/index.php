<?php

namespace Control\Comonad\Traced\Trans;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Comonad_Traced_Trans_TracedT
$Control_Comonad_Traced_Trans_TracedT = (function() {
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

// Control_Comonad_Traced_Trans_runTracedT
$Control_Comonad_Traced_Trans_runTracedT = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$w = $__case_0;
return $w;
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

// Control_Comonad_Traced_Trans_newtypeTracedT
$Control_Comonad_Traced_Trans_newtypeTracedT = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Control_Comonad_Traced_Trans_functorTracedT
$Control_Comonad_Traced_Trans_functorTracedT = (function() use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Functor_Functor__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)($dictFunctor);
    $__res = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Control_Comonad_Traced_Trans_TracedT, $map) {
  $__body = function($f, $v) use (&$Control_Comonad_Traced_Trans_TracedT, $map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return ($Control_Comonad_Traced_Trans_TracedT)(($map)((function() use ($f1) {
  $__fn = function($g, $t = null) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f1)(($g)($t));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $w));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Traced_Trans_TracedT, $map, $__body, &$__fn) {
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

// Control_Comonad_Traced_Trans_extendTracedT
$Control_Comonad_Traced_Trans_extendTracedT = (function() use (&$Control_Extend_extend, &$Prim_undefined, &$Data_Functor_map, &$Control_Comonad_Traced_Trans_functorTracedT, &$Data_Semigroup_append, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT) {
  $__fn = function($dictExtend) use (&$Control_Extend_extend, &$Prim_undefined, &$Data_Functor_map, &$Control_Comonad_Traced_Trans_functorTracedT, &$Data_Semigroup_append, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extend = ($Control_Extend_extend)($dictExtend);
$Functor0 = (($dictExtend)->Functor0)($Prim_undefined);
$map = ($Data_Functor_map)($Functor0);
$functorTracedT1 = ($Control_Comonad_Traced_Trans_functorTracedT)($Functor0);
    $__res = (function() use (&$Data_Semigroup_append, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT, $extend, $map, $functorTracedT1) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Control_Extend_Extend__dollar__Dict, &$Control_Comonad_Traced_Trans_TracedT, $extend, $map, $functorTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Control_Extend_Extend__dollar__Dict)((object)["extend" => (function() use (&$Control_Comonad_Traced_Trans_TracedT, $extend, $map, $append) {
  $__body = function($f, $v) use (&$Control_Comonad_Traced_Trans_TracedT, $extend, $map, $append) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return ($Control_Comonad_Traced_Trans_TracedT)(($extend)((function() use ($f1, &$Control_Comonad_Traced_Trans_TracedT, $map, $append) {
  $__fn = function($w__prime__, $t = null) use ($f1, &$Control_Comonad_Traced_Trans_TracedT, $map, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f1)(($Control_Comonad_Traced_Trans_TracedT)(($map)((function() use ($append, $t) {
  $__fn = function($h, $t__prime__ = null) use ($append, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($h)(($append)($t, $t__prime__));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $w__prime__)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $w));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Control_Comonad_Traced_Trans_TracedT, $extend, $map, $append, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorTracedT1) {
  $__fn = function($__dollar____unused) use ($functorTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorTracedT1;
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

// Control_Comonad_Traced_Trans_comonadTransTracedT
$Control_Comonad_Traced_Trans_comonadTransTracedT = (function() use (&$Data_Monoid_mempty, &$Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict, &$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict, &$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = ($Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict)((object)["lower" => (function() use (&$Data_Functor_map, &$Prim_undefined, $mempty) {
  $__fn = function($dictComonad) use (&$Data_Functor_map, &$Prim_undefined, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictComonad)->Extend0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, $mempty) {
  $__body = function($v) use ($map, $mempty) {
    $__case_0 = $v;
    if (true) {
$w = $__case_0;
return ($map)((function() use ($mempty) {
  $__fn = function($f) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($mempty);
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
  $__fn = function($v) use ($map, $mempty, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Trans_comonadTracedT
$Control_Comonad_Traced_Trans_comonadTracedT = (function() use (&$Control_Comonad_extract, &$Control_Comonad_Traced_Trans_extendTracedT, &$Prim_undefined, &$Data_Monoid_mempty, &$Control_Comonad_Comonad__dollar__Dict) {
  $__fn = function($dictComonad) use (&$Control_Comonad_extract, &$Control_Comonad_Traced_Trans_extendTracedT, &$Prim_undefined, &$Data_Monoid_mempty, &$Control_Comonad_Comonad__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$extract = ($Control_Comonad_extract)($dictComonad);
$extendTracedT1 = ($Control_Comonad_Traced_Trans_extendTracedT)((($dictComonad)->Extend0)($Prim_undefined));
    $__res = (function() use (&$Data_Monoid_mempty, $extendTracedT1, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, $extract) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, $extendTracedT1, &$Prim_undefined, &$Control_Comonad_Comonad__dollar__Dict, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
$extendTracedT2 = ($extendTracedT1)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Control_Comonad_Comonad__dollar__Dict)((object)["extract" => (function() use ($extract, $mempty) {
  $__body = function($v) use ($extract, $mempty) {
    $__case_0 = $v;
    if (true) {
$w = $__case_0;
return ($extract)($w, $mempty);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($extract, $mempty, $__body, &$__fn) {
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
})(), "Extend0" => (function() use ($extendTracedT2) {
  $__fn = function($__dollar____unused) use ($extendTracedT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $extendTracedT2;
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

