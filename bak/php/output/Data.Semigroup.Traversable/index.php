<?php

namespace Data\Semigroup\Traversable;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Semigroup_Traversable_identity
$Data_Semigroup_Traversable_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Semigroup_Traversable_Traversable1$Dict
$Data_Semigroup_Traversable_Traversable1__dollar__Dict = (function() {
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

// Data_Semigroup_Traversable_traverse1
$Data_Semigroup_Traversable_traverse1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->traverse1;
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

// Data_Semigroup_Traversable_traversableTuple
$Data_Semigroup_Traversable_traversableTuple = ($Data_Semigroup_Traversable_Traversable1__dollar__Dict)((object)["traverse1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Tuple_Tuple) {
  $__body = function($f, $v) use ($map, &$Data_Tuple_Tuple) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($map)(($Data_Tuple_Tuple)($x), ($f1)($y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "sequence1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Tuple_Tuple) {
  $__body = function($v) use ($map, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($map)(($Data_Tuple_Tuple)($x), $y);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
})(), "Foldable10" => (function() use (&$Data_Semigroup_Foldable_foldableTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_Foldable_foldableTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_Foldable_foldableTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() use (&$Data_Traversable_traversableTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Traversable_traversableIdentity
$Data_Semigroup_Traversable_traversableIdentity = ($Data_Semigroup_Traversable_Traversable1__dollar__Dict)((object)["traverse1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Identity_Identity) {
  $__body = function($f, $v) use ($map, &$Data_Identity_Identity) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Identity_Identity, ($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Identity_Identity, $__body, &$__fn) {
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
})(), "sequence1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Identity_Identity) {
  $__body = function($v) use ($map, &$Data_Identity_Identity) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Identity_Identity, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Identity_Identity, $__body, &$__fn) {
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
})(), "Foldable10" => (function() use (&$Data_Semigroup_Foldable_foldableIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_Foldable_foldableIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_Foldable_foldableIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() use (&$Data_Traversable_traversableIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Traversable_sequence1Default
$Data_Semigroup_Traversable_sequence1Default = (function() use (&$Data_Semigroup_Traversable_traverse1, &$Data_Semigroup_Traversable_identity) {
  $__fn = function($dictTraversable1) use (&$Data_Semigroup_Traversable_traverse1, &$Data_Semigroup_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse11 = ($Data_Semigroup_Traversable_traverse1)($dictTraversable1);
    $__res = (function() use ($traverse11, &$Data_Semigroup_Traversable_identity) {
  $__fn = function($dictApply) use ($traverse11, &$Data_Semigroup_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse11)($dictApply, $Data_Semigroup_Traversable_identity);
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

// Data_Semigroup_Traversable_traversableDual
$Data_Semigroup_Traversable_traversableDual = ($Data_Semigroup_Traversable_Traversable1__dollar__Dict)((object)["traverse1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Dual_Dual) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Dual_Dual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Dual_Dual) {
  $__body = function($f, $v) use ($map, &$Data_Monoid_Dual_Dual) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Monoid_Dual_Dual, ($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Monoid_Dual_Dual, $__body, &$__fn) {
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
})(), "sequence1" => (function() use (&$Data_Semigroup_Traversable_sequence1Default, &$Data_Semigroup_Traversable_traversableDual) {
  $__fn = function($dictApply) use (&$Data_Semigroup_Traversable_sequence1Default, &$Data_Semigroup_Traversable_traversableDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Traversable_sequence1Default)($Data_Semigroup_Traversable_traversableDual, $dictApply);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() use (&$Data_Semigroup_Foldable_foldableDual) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_Foldable_foldableDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_Foldable_foldableDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() use (&$Data_Traversable_traversableDual) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Traversable_traversableMultiplicative
$Data_Semigroup_Traversable_traversableMultiplicative = ($Data_Semigroup_Traversable_Traversable1__dollar__Dict)((object)["traverse1" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Multiplicative_Multiplicative) {
  $__fn = function($dictApply) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Multiplicative_Multiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Multiplicative_Multiplicative) {
  $__body = function($f, $v) use ($map, &$Data_Monoid_Multiplicative_Multiplicative) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Monoid_Multiplicative_Multiplicative, ($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Monoid_Multiplicative_Multiplicative, $__body, &$__fn) {
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
})(), "sequence1" => (function() use (&$Data_Semigroup_Traversable_sequence1Default, &$Data_Semigroup_Traversable_traversableMultiplicative) {
  $__fn = function($dictApply) use (&$Data_Semigroup_Traversable_sequence1Default, &$Data_Semigroup_Traversable_traversableMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Traversable_sequence1Default)($Data_Semigroup_Traversable_traversableMultiplicative, $dictApply);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() use (&$Data_Semigroup_Foldable_foldableMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Semigroup_Foldable_foldableMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semigroup_Foldable_foldableMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() use (&$Data_Traversable_traversableMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Traversable_traversableMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Traversable_traversableMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Traversable_sequence1
$Data_Semigroup_Traversable_sequence1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sequence1;
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

// Data_Semigroup_Traversable_traverse1Default
$Data_Semigroup_Traversable_traverse1Default = (function() use (&$Data_Semigroup_Traversable_sequence1, &$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictTraversable1) use (&$Data_Semigroup_Traversable_sequence1, &$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence11 = ($Data_Semigroup_Traversable_sequence1)($dictTraversable1);
$map = ($Data_Functor_map)((((($dictTraversable1)->Traversable1)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($sequence11, $map) {
  $__fn = function($dictApply) use ($sequence11, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence12 = ($sequence11)($dictApply);
    $__res = (function() use ($sequence12, $map) {
  $__fn = function($f, $ta = null) use ($sequence12, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence12)(($map)($f, $ta));
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

