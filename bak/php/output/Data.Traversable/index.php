<?php

namespace Data\Traversable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Traversable_identity
$Data_Traversable_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Traversable_compose
$Data_Traversable_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Traversable_Traversable$Dict
$Data_Traversable_Traversable__dollar__Dict = (function() {
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

// Data_Traversable_traverse
$Data_Traversable_traverse = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->traverse;
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

// Data_Traversable_traversableTuple
$Data_Traversable_traversableTuple = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
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
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableTuple) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableTuple;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableMultiplicative
$Data_Traversable_traversableMultiplicative = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Multiplicative_Multiplicative) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Multiplicative_Multiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Multiplicative_Multiplicative) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Multiplicative_Multiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Multiplicative_Multiplicative) {
  $__body = function($v) use ($map, &$Data_Monoid_Multiplicative_Multiplicative) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Monoid_Multiplicative_Multiplicative, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Monoid_Multiplicative_Multiplicative, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Multiplicative_functorMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Multiplicative_functorMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Multiplicative_functorMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableMultiplicative) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableMultiplicative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableMultiplicative;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableMaybe
$Data_Traversable_traversableMaybe = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Maybe_Nothing, $map, &$Data_Maybe_Just) {
  $__body = function($v, $v1) use ($pure, &$Data_Maybe_Nothing, $map, &$Data_Maybe_Just) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return ($pure)($Data_Maybe_Nothing);
} else {
;
};
    if ((($__case_1)->tag === "Just")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($map)($Data_Maybe_Just, ($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($pure, &$Data_Maybe_Nothing, $map, &$Data_Maybe_Just, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "sequence" => (function() use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Maybe_Nothing, &$Data_Maybe_Just) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Maybe_Nothing, $map, &$Data_Maybe_Just) {
  $__body = function($v) use ($pure, &$Data_Maybe_Nothing, $map, &$Data_Maybe_Just) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure)($Data_Maybe_Nothing);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($map)($Data_Maybe_Just, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Data_Maybe_Nothing, $map, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Maybe_functorMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_functorMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_functorMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traverse1
$Data_Traversable_traverse1 = ($Data_Traversable_traverse)($Data_Traversable_traversableMaybe);

// Data_Traversable_traversableIdentity
$Data_Traversable_traversableIdentity = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Identity_Identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
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
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableIdentity) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableIdentity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableIdentity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableEither
$Data_Traversable_traversableEither = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right) {
  $__body = function($v, $v1) use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$x = ($__case_1)->values[0];
return ($pure)(($Data_Either_Left)($x));
} else {
;
};
    if ((($__case_1)->tag === "Right")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($map)($Data_Either_Right, ($f)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "sequence" => (function() use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Functor_map, &$Prim_undefined, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right) {
  $__body = function($v) use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$x = ($__case_0)->values[0];
return ($pure)(($Data_Either_Left)($x));
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$x = ($__case_0)->values[0];
return ($map)($Data_Either_Right, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Data_Either_Left, $map, &$Data_Either_Right, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Either_functorEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_functorEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_functorEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableEither) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableDual
$Data_Traversable_traversableDual = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Dual_Dual) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Dual_Dual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Dual_Dual) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Dual_Dual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Dual_Dual) {
  $__body = function($v) use ($map, &$Data_Monoid_Dual_Dual) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Monoid_Dual_Dual, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Monoid_Dual_Dual, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Dual_functorDual) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Dual_functorDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Dual_functorDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableDual) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableDual, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableDual;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableDisj
$Data_Traversable_traversableDisj = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Disj_Disj) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Disj_Disj) {
  $__body = function($f, $v) use ($map, &$Data_Monoid_Disj_Disj) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Monoid_Disj_Disj, ($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Monoid_Disj_Disj, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Disj_Disj) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Disj_Disj) {
  $__body = function($v) use ($map, &$Data_Monoid_Disj_Disj) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Monoid_Disj_Disj, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Monoid_Disj_Disj, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Disj_functorDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Disj_functorDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Disj_functorDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableDisj) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableDisj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableConst
$Data_Traversable_traversableConst = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Control_Applicative_pure, &$Data_Const_Const) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Const_Const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($pure, &$Data_Const_Const) {
  $__body = function($v, $v1) use ($pure, &$Data_Const_Const) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($pure)(($Data_Const_Const)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($pure, &$Data_Const_Const, $__body, &$__fn) {
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "sequence" => (function() use (&$Control_Applicative_pure, &$Data_Const_Const) {
  $__fn = function($dictApplicative) use (&$Control_Applicative_pure, &$Data_Const_Const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use ($pure, &$Data_Const_Const) {
  $__body = function($v) use ($pure, &$Data_Const_Const) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($pure)(($Data_Const_Const)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($pure, &$Data_Const_Const, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Const_functorConst) {
  $__fn = function($__dollar____unused) use (&$Data_Const_functorConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Const_functorConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableConst) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableConst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableConst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableConj
$Data_Traversable_traversableConj = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Conj_Conj) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Conj_Conj) {
  $__body = function($f, $v) use ($map, &$Data_Monoid_Conj_Conj) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Monoid_Conj_Conj, ($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Monoid_Conj_Conj, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Conj_Conj) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Conj_Conj) {
  $__body = function($v) use ($map, &$Data_Monoid_Conj_Conj) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Monoid_Conj_Conj, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Monoid_Conj_Conj, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Conj_functorConj) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Conj_functorConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Conj_functorConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableConj) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableConj;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableCompose
$Data_Traversable_traversableCompose = (function() use (&$Data_Traversable_traverse, &$Data_Functor_Compose_functorCompose, &$Prim_undefined, &$Data_Foldable_foldableCompose, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Compose_Compose, &$Data_Traversable_traversableCompose, &$Data_Traversable_identity) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Functor_Compose_functorCompose, &$Prim_undefined, &$Data_Foldable_foldableCompose, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Compose_Compose, &$Data_Traversable_traversableCompose, &$Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Functor_Compose_functorCompose, &$Prim_undefined, &$Data_Foldable_foldableCompose, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Compose_Compose, &$Data_Traversable_traversableCompose, &$Data_Traversable_identity) {
while (true) {
$traverse2 = ($Data_Traversable_traverse)($dictTraversable);
$functorCompose = ($Data_Functor_Compose_functorCompose)((($dictTraversable)->Functor0)($Prim_undefined));
$foldableCompose = ($Data_Foldable_foldableCompose)((($dictTraversable)->Foldable1)($Prim_undefined));
return (function() use (&$Data_Traversable_traverse, $functorCompose, &$Prim_undefined, $foldableCompose, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, $traverse2, &$Data_Functor_Compose_Compose, &$Data_Traversable_traversableCompose, $dictTraversable, &$Data_Traversable_identity) {
  $__fn = function($dictTraversable1) use (&$Data_Traversable_traverse, $functorCompose, &$Prim_undefined, $foldableCompose, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, $traverse2, &$Data_Functor_Compose_Compose, &$Data_Traversable_traversableCompose, $dictTraversable, &$Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse3 = ($Data_Traversable_traverse)($dictTraversable1);
$functorCompose1 = ($functorCompose)((($dictTraversable1)->Functor0)($Prim_undefined));
$foldableCompose1 = ($foldableCompose)((($dictTraversable1)->Foldable1)($Prim_undefined));
    $__res = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverse2, $traverse3, &$Data_Functor_Compose_Compose) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverse2, $traverse3, &$Data_Functor_Compose_Compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_Compose_Compose, $traverse4, $traverse5) {
  $__body = function($f, $v) use ($map, &$Data_Functor_Compose_Compose, $traverse4, $traverse5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)($Data_Functor_Compose_Compose, ($traverse4)(($traverse5)($f1), $fga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Functor_Compose_Compose, $traverse4, $traverse5, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Traversable_traverse, &$Data_Traversable_traversableCompose, $dictTraversable, $dictTraversable1, &$Data_Traversable_identity) {
  $__fn = function($dictApplicative) use (&$Data_Traversable_traverse, &$Data_Traversable_traversableCompose, $dictTraversable, $dictTraversable1, &$Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_traverse)(($Data_Traversable_traversableCompose)($dictTraversable, $dictTraversable1), $dictApplicative, $Data_Traversable_identity);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose1) {
  $__fn = function($__dollar____unused) use ($functorCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorCompose1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableCompose1;
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
}
})($dictTraversable);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Traversable_traversableAdditive
$Data_Traversable_traversableAdditive = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Additive_Additive) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Additive_Additive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Additive_Additive) {
  $__body = function($f, $v) use ($map, &$Data_Monoid_Additive_Additive) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Monoid_Additive_Additive, ($f1)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Monoid_Additive_Additive, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Additive_Additive) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Monoid_Additive_Additive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($map, &$Data_Monoid_Additive_Additive) {
  $__body = function($v) use ($map, &$Data_Monoid_Additive_Additive) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Monoid_Additive_Additive, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Monoid_Additive_Additive, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Monoid_Additive_functorAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Monoid_Additive_functorAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Monoid_Additive_functorAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableAdditive) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableAdditive, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableAdditive;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_sequenceDefault
$Data_Traversable_sequenceDefault = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_identity) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse2 = ($Data_Traversable_traverse)($dictTraversable);
    $__res = (function() use ($traverse2, &$Data_Traversable_identity) {
  $__fn = function($dictApplicative) use ($traverse2, &$Data_Traversable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse2)($dictApplicative, $Data_Traversable_identity);
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

// Data_Traversable_traversableArray
$Data_Traversable_traversableArray = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Prim_undefined, &$Data_Traversable_traverseArrayImpl, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Applicative_pure) {
  $__fn = function($dictApplicative) use (&$Prim_undefined, &$Data_Traversable_traverseArrayImpl, &$Control_Apply_apply, &$Data_Functor_map, &$Control_Applicative_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Apply0 = (($dictApplicative)->Apply0)($Prim_undefined);
    $__res = ($Data_Traversable_traverseArrayImpl)(($Control_Apply_apply)($Apply0), ($Data_Functor_map)((($Apply0)->Functor0)($Prim_undefined)), ($Control_Applicative_pure)($dictApplicative));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "sequence" => (function() use (&$Data_Traversable_sequenceDefault, &$Data_Traversable_traversableArray) {
  $__fn = function($dictApplicative) use (&$Data_Traversable_sequenceDefault, &$Data_Traversable_traversableArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_sequenceDefault)($Data_Traversable_traversableArray, $dictApplicative);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Functor_functorArray) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_functorArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_functorArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableArray) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableArray;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_sequence
$Data_Traversable_sequence = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sequence;
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

// Data_Traversable_sequence1
$Data_Traversable_sequence1 = ($Data_Traversable_sequence)($Data_Traversable_traversableMaybe);

// Data_Traversable_traversableApp
$Data_Traversable_traversableApp = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_App_functorApp, &$Prim_undefined, &$Data_Foldable_foldableApp, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_App_App) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_App_functorApp, &$Prim_undefined, &$Data_Foldable_foldableApp, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse2 = ($Data_Traversable_traverse)($dictTraversable);
$sequence2 = ($Data_Traversable_sequence)($dictTraversable);
$functorApp = ($Data_Functor_App_functorApp)((($dictTraversable)->Functor0)($Prim_undefined));
$foldableApp = ($Data_Foldable_foldableApp)((($dictTraversable)->Foldable1)($Prim_undefined));
    $__res = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverse2, &$Data_Functor_App_App) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverse2, &$Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse3 = ($traverse2)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_App_App, $traverse3) {
  $__body = function($f, $v) use ($map, &$Data_Functor_App_App, $traverse3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Functor_App_App, ($traverse3)($f1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Functor_App_App, $traverse3, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, $sequence2, &$Data_Functor_App_App) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $sequence2, &$Data_Functor_App_App, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sequence3 = ($sequence2)($dictApplicative);
    $__res = (function() use ($map, &$Data_Functor_App_App, $sequence3) {
  $__body = function($v) use ($map, &$Data_Functor_App_App, $sequence3) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Functor_App_App, ($sequence3)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Functor_App_App, $sequence3, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorApp) {
  $__fn = function($__dollar____unused) use ($functorApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorApp;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableApp;
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

// Data_Traversable_traversableCoproduct
$Data_Traversable_traversableCoproduct = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Coproduct_functorCoproduct, &$Prim_undefined, &$Data_Foldable_foldableCoproduct, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Coproduct_functorCoproduct, &$Prim_undefined, &$Data_Foldable_foldableCoproduct, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse2 = ($Data_Traversable_traverse)($dictTraversable);
$sequence2 = ($Data_Traversable_sequence)($dictTraversable);
$functorCoproduct = ($Data_Functor_Coproduct_functorCoproduct)((($dictTraversable)->Functor0)($Prim_undefined));
$foldableCoproduct = ($Data_Foldable_foldableCoproduct)((($dictTraversable)->Foldable1)($Prim_undefined));
    $__res = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, $functorCoproduct, &$Prim_undefined, $foldableCoproduct, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, $traverse2, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right, $sequence2) {
  $__fn = function($dictTraversable1) use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, $functorCoproduct, &$Prim_undefined, $foldableCoproduct, &$Data_Traversable_Traversable__dollar__Dict, &$Data_Functor_map, $traverse2, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right, $sequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse3 = ($Data_Traversable_traverse)($dictTraversable1);
$sequence3 = ($Data_Traversable_sequence)($dictTraversable1);
$functorCoproduct1 = ($functorCoproduct)((($dictTraversable1)->Functor0)($Prim_undefined));
$foldableCoproduct1 = ($foldableCoproduct)((($dictTraversable1)->Foldable1)($Prim_undefined));
    $__res = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, $traverse2, $traverse3, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, $traverse2, $traverse3, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, &$Data_Either_Right, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use (&$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, $map, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, $traverse4, &$Data_Either_Right, $traverse5) {
  $__fn = function($f) use (&$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, $map, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, $traverse4, &$Data_Either_Right, $traverse5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($Data_Traversable_compose)(($map)(($Data_Traversable_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Left)), ($traverse4)($f)), ($Data_Traversable_compose)(($map)(($Data_Traversable_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Right)), ($traverse5)($f)));
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, $sequence2, &$Data_Either_Right, $sequence3) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Functor_Coproduct_coproduct, &$Data_Traversable_compose, &$Data_Functor_Coproduct_Coproduct, &$Data_Either_Left, $sequence2, &$Data_Either_Right, $sequence3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = ($Data_Functor_Coproduct_coproduct)(($Data_Traversable_compose)(($map)(($Data_Traversable_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Left)), ($sequence2)($dictApplicative)), ($Data_Traversable_compose)(($map)(($Data_Traversable_compose)($Data_Functor_Coproduct_Coproduct, $Data_Either_Right)), ($sequence3)($dictApplicative)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorCoproduct1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableCoproduct1;
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

// Data_Traversable_traversableFirst
$Data_Traversable_traversableFirst = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_traverse1, &$Data_Maybe_First_First) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_traverse1, &$Data_Maybe_First_First, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse2 = ($Data_Traversable_traverse1)($dictApplicative);
    $__res = (function() use ($map, &$Data_Maybe_First_First, $traverse2) {
  $__body = function($f, $v) use ($map, &$Data_Maybe_First_First, $traverse2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Maybe_First_First, ($traverse2)($f1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Maybe_First_First, $traverse2, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_sequence1, &$Data_Maybe_First_First) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_sequence1, &$Data_Maybe_First_First, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sequence2 = ($Data_Traversable_sequence1)($dictApplicative);
    $__res = (function() use ($map, &$Data_Maybe_First_First, $sequence2) {
  $__body = function($v) use ($map, &$Data_Maybe_First_First, $sequence2) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Maybe_First_First, ($sequence2)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Maybe_First_First, $sequence2, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Maybe_First_functorFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_First_functorFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_First_functorFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableFirst) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableFirst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableFirst;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableLast
$Data_Traversable_traversableLast = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_traverse1, &$Data_Maybe_Last_Last) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_traverse1, &$Data_Maybe_Last_Last, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$traverse2 = ($Data_Traversable_traverse1)($dictApplicative);
    $__res = (function() use ($map, &$Data_Maybe_Last_Last, $traverse2) {
  $__body = function($f, $v) use ($map, &$Data_Maybe_Last_Last, $traverse2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($Data_Maybe_Last_Last, ($traverse2)($f1, $x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map, &$Data_Maybe_Last_Last, $traverse2, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_sequence1, &$Data_Maybe_Last_Last) {
  $__fn = function($dictApplicative) use (&$Data_Functor_map, &$Prim_undefined, &$Data_Traversable_sequence1, &$Data_Maybe_Last_Last, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map = ($Data_Functor_map)((((($dictApplicative)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sequence2 = ($Data_Traversable_sequence1)($dictApplicative);
    $__res = (function() use ($map, &$Data_Maybe_Last_Last, $sequence2) {
  $__body = function($v) use ($map, &$Data_Maybe_Last_Last, $sequence2) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($map)($Data_Maybe_Last_Last, ($sequence2)($x));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($map, &$Data_Maybe_Last_Last, $sequence2, $__body, &$__fn) {
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
})(), "Functor0" => (function() use (&$Data_Maybe_Last_functorLast) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_Last_functorLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Last_functorLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use (&$Data_Foldable_foldableLast) {
  $__fn = function($__dollar____unused) use (&$Data_Foldable_foldableLast, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Foldable_foldableLast;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Traversable_traversableProduct
$Data_Traversable_traversableProduct = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Product_functorProduct, &$Prim_undefined, &$Data_Foldable_foldableProduct, &$Data_Traversable_Traversable__dollar__Dict, &$Control_Apply_lift2, &$Data_Functor_Product_product) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, &$Data_Functor_Product_functorProduct, &$Prim_undefined, &$Data_Foldable_foldableProduct, &$Data_Traversable_Traversable__dollar__Dict, &$Control_Apply_lift2, &$Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse2 = ($Data_Traversable_traverse)($dictTraversable);
$sequence2 = ($Data_Traversable_sequence)($dictTraversable);
$functorProduct = ($Data_Functor_Product_functorProduct)((($dictTraversable)->Functor0)($Prim_undefined));
$foldableProduct = ($Data_Foldable_foldableProduct)((($dictTraversable)->Foldable1)($Prim_undefined));
    $__res = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, $functorProduct, &$Prim_undefined, $foldableProduct, &$Data_Traversable_Traversable__dollar__Dict, &$Control_Apply_lift2, $traverse2, &$Data_Functor_Product_product, $sequence2) {
  $__fn = function($dictTraversable1) use (&$Data_Traversable_traverse, &$Data_Traversable_sequence, $functorProduct, &$Prim_undefined, $foldableProduct, &$Data_Traversable_Traversable__dollar__Dict, &$Control_Apply_lift2, $traverse2, &$Data_Functor_Product_product, $sequence2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse3 = ($Data_Traversable_traverse)($dictTraversable1);
$sequence3 = ($Data_Traversable_sequence)($dictTraversable1);
$functorProduct1 = ($functorProduct)((($dictTraversable1)->Functor0)($Prim_undefined));
$foldableProduct1 = ($foldableProduct)((($dictTraversable1)->Foldable1)($Prim_undefined));
    $__res = ($Data_Traversable_Traversable__dollar__Dict)((object)["traverse" => (function() use (&$Control_Apply_lift2, &$Prim_undefined, $traverse2, $traverse3, &$Data_Functor_Product_product) {
  $__fn = function($dictApplicative) use (&$Control_Apply_lift2, &$Prim_undefined, $traverse2, $traverse3, &$Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)((($dictApplicative)->Apply0)($Prim_undefined));
$traverse4 = ($traverse2)($dictApplicative);
$traverse5 = ($traverse3)($dictApplicative);
    $__res = (function() use ($lift2, &$Data_Functor_Product_product, $traverse4, $traverse5) {
  $__body = function($f, $v) use ($lift2, &$Data_Functor_Product_product, $traverse4, $traverse5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$fa = ($__case_1)->values[0];
$ga = ($__case_1)->values[1];
return ($lift2)($Data_Functor_Product_product, ($traverse4)($f1, $fa), ($traverse5)($f1, $ga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($lift2, &$Data_Functor_Product_product, $traverse4, $traverse5, $__body, &$__fn) {
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
})(), "sequence" => (function() use (&$Control_Apply_lift2, &$Prim_undefined, $sequence2, $sequence3, &$Data_Functor_Product_product) {
  $__fn = function($dictApplicative) use (&$Control_Apply_lift2, &$Prim_undefined, $sequence2, $sequence3, &$Data_Functor_Product_product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lift2 = ($Control_Apply_lift2)((($dictApplicative)->Apply0)($Prim_undefined));
$sequence4 = ($sequence2)($dictApplicative);
$sequence5 = ($sequence3)($dictApplicative);
    $__res = (function() use ($lift2, &$Data_Functor_Product_product, $sequence4, $sequence5) {
  $__body = function($v) use ($lift2, &$Data_Functor_Product_product, $sequence4, $sequence5) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$fa = ($__case_0)->values[0];
$ga = ($__case_0)->values[1];
return ($lift2)($Data_Functor_Product_product, ($sequence4)($fa), ($sequence5)($ga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($lift2, &$Data_Functor_Product_product, $sequence4, $sequence5, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorProduct1) {
  $__fn = function($__dollar____unused) use ($functorProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $functorProduct1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $foldableProduct1;
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

// Data_Traversable_traverseDefault
$Data_Traversable_traverseDefault = (function() use (&$Data_Traversable_sequence, &$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_sequence, &$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence2 = ($Data_Traversable_sequence)($dictTraversable);
$map = ($Data_Functor_map)((($dictTraversable)->Functor0)($Prim_undefined));
    $__res = (function() use ($sequence2, $map) {
  $__fn = function($dictApplicative) use ($sequence2, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sequence3 = ($sequence2)($dictApplicative);
    $__res = (function() use ($sequence3, $map) {
  $__fn = function($f, $ta = null) use ($sequence3, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sequence3)(($map)($f, $ta));
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

// Data_Traversable_mapAccumR
$Data_Traversable_mapAccumR = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_Accum_Internal_applicativeStateR, &$Data_Traversable_Accum_Internal_stateR, &$Data_Traversable_Accum_Internal_StateR) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_Accum_Internal_applicativeStateR, &$Data_Traversable_Accum_Internal_stateR, &$Data_Traversable_Accum_Internal_StateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse2 = ($Data_Traversable_traverse)($dictTraversable, $Data_Traversable_Accum_Internal_applicativeStateR);
    $__res = (function() use (&$Data_Traversable_Accum_Internal_stateR, $traverse2, &$Data_Traversable_Accum_Internal_StateR) {
  $__fn = function($f, $s0 = null, $xs = null) use (&$Data_Traversable_Accum_Internal_stateR, $traverse2, &$Data_Traversable_Accum_Internal_StateR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_stateR)(($traverse2)((function() use (&$Data_Traversable_Accum_Internal_StateR, $f) {
  $__fn = function($a) use (&$Data_Traversable_Accum_Internal_StateR, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateR)((function() use ($f, $a) {
  $__fn = function($s) use ($f, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($s, $a);
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
})(), $xs), $s0);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_Traversable_scanr
$Data_Traversable_scanr = (function() use (&$Data_Traversable_mapAccumR) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_mapAccumR, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapAccumR1 = ($Data_Traversable_mapAccumR)($dictTraversable);
    $__res = (function() use ($mapAccumR1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumR1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (($mapAccumR1)((function() use ($f) {
  $__fn = function($b, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$b__prime__ = ($f)($a, $b);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_Traversable_mapAccumL
$Data_Traversable_mapAccumL = (function() use (&$Data_Traversable_traverse, &$Data_Traversable_Accum_Internal_applicativeStateL, &$Data_Traversable_Accum_Internal_stateL, &$Data_Traversable_Accum_Internal_StateL) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_traverse, &$Data_Traversable_Accum_Internal_applicativeStateL, &$Data_Traversable_Accum_Internal_stateL, &$Data_Traversable_Accum_Internal_StateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse2 = ($Data_Traversable_traverse)($dictTraversable, $Data_Traversable_Accum_Internal_applicativeStateL);
    $__res = (function() use (&$Data_Traversable_Accum_Internal_stateL, $traverse2, &$Data_Traversable_Accum_Internal_StateL) {
  $__fn = function($f, $s0 = null, $xs = null) use (&$Data_Traversable_Accum_Internal_stateL, $traverse2, &$Data_Traversable_Accum_Internal_StateL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_stateL)(($traverse2)((function() use (&$Data_Traversable_Accum_Internal_StateL, $f) {
  $__fn = function($a) use (&$Data_Traversable_Accum_Internal_StateL, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Traversable_Accum_Internal_StateL)((function() use ($f, $a) {
  $__fn = function($s) use ($f, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($s, $a);
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
})(), $xs), $s0);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_Traversable_scanl
$Data_Traversable_scanl = (function() use (&$Data_Traversable_mapAccumL) {
  $__fn = function($dictTraversable) use (&$Data_Traversable_mapAccumL, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapAccumL1 = ($Data_Traversable_mapAccumL)($dictTraversable);
    $__res = (function() use ($mapAccumL1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumL1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (($mapAccumL1)((function() use ($f) {
  $__fn = function($b, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$b__prime__ = ($f)($b, $a);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_Traversable_for
$Data_Traversable_for = (function() use (&$Data_Traversable_traverse) {
  $__fn = function($dictApplicative, $dictTraversable = null) use (&$Data_Traversable_traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse2 = ($Data_Traversable_traverse)($dictTraversable, $dictApplicative);
    $__res = (function() use ($traverse2) {
  $__fn = function($x, $f = null) use ($traverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse2)($f, $x);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

