<?php

namespace Control\Monad\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Last/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Gen_lessThanOrEq
$Control_Monad_Gen_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Control_Monad_Gen_sub
$Control_Monad_Gen_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Control_Monad_Gen_compose
$Control_Monad_Gen_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Gen_un
$Control_Monad_Gen_un = ($Data_Newtype_un)($Prim_undefined);

// Control_Monad_Gen_greaterThanOrEq
$Control_Monad_Gen_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordNumber);

// Control_Monad_Gen_sub1
$Control_Monad_Gen_sub1 = ($Data_Ring_sub)($Data_Ring_ringNumber);

// Control_Monad_Gen_alaF
$Control_Monad_Gen_alaF = ($Data_Newtype_alaF)($Prim_undefined, $Prim_undefined, $Prim_undefined, $Prim_undefined);

// Control_Monad_Gen_monoidAdditive
$Control_Monad_Gen_monoidAdditive = ($Data_Monoid_Additive_monoidAdditive)($Data_Semiring_semiringNumber);

// Control_Monad_Gen_Cons
$Control_Monad_Gen_Cons = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Cons", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Nil
$Control_Monad_Gen_Nil = (object)["tag" => "Nil", "values" => []];

// Control_Monad_Gen_FreqSemigroup
$Control_Monad_Gen_FreqSemigroup = (function() {
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

// Control_Monad_Gen_unfoldable
$Control_Monad_Gen_unfoldable = (function() use (&$Control_Monad_Rec_Class_tailRecM, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Data_Functor_map, &$Control_Monad_Gen_Class_sized, &$Data_Unfoldable_unfoldr, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Control_Monad_Gen_compose, &$Control_Monad_Gen_Nil) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Data_Functor_map, &$Control_Monad_Gen_Class_sized, &$Data_Unfoldable_unfoldr, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Control_Monad_Gen_compose, &$Control_Monad_Gen_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
    $__res = (function() use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Data_Functor_map, &$Control_Monad_Gen_Class_sized, &$Data_Unfoldable_unfoldr, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Control_Monad_Gen_compose, $tailRecM, &$Control_Monad_Gen_Nil) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Applicative_pure, &$Control_Bind_bind, &$Data_Functor_map, &$Control_Monad_Gen_Class_sized, &$Data_Unfoldable_unfoldr, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, &$Control_Monad_Gen_compose, $tailRecM, &$Control_Monad_Gen_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadGen)->Monad0)($Prim_undefined);
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
$Bind1 = (($Monad0)->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$map = ($Data_Functor_map)((((($Bind1)->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$sized = ($Control_Monad_Gen_Class_sized)($dictMonadGen);
    $__res = (function() use (&$Data_Unfoldable_unfoldr, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $map, $sized, &$Control_Monad_Gen_compose, $tailRecM, &$Control_Monad_Gen_Nil) {
  $__fn = function($dictUnfoldable) use (&$Data_Unfoldable_unfoldr, &$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $map, $sized, &$Control_Monad_Gen_compose, $tailRecM, &$Control_Monad_Gen_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfoldr = ($Data_Unfoldable_unfoldr)($dictUnfoldable);
    $__res = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $map, $unfoldr, $sized, &$Control_Monad_Gen_compose, $tailRecM, &$Control_Monad_Gen_Nil) {
  $__fn = function($gen) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $map, $unfoldr, $sized, &$Control_Monad_Gen_compose, $tailRecM, &$Control_Monad_Gen_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$unfold = (function() use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple) {
  $__body = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $Data_Maybe_Nothing;
} else {
;
};
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($Data_Maybe_Just)(($Data_Tuple_Tuple)($x, $xs));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$Data_Maybe_Just, &$Data_Tuple_Tuple, $__body, &$__fn) {
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
$loopGen = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$acc = ($__case_0)->values[0];
$n = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
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
    $__res = ($map)(($unfoldr)($unfold), ($sized)(($Control_Monad_Gen_compose)(($tailRecM)($loopGen), ($Data_Tuple_Tuple)($Control_Monad_Gen_Nil))));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_semigroupFreqSemigroup
$Control_Monad_Gen_semigroupFreqSemigroup = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Control_Monad_Gen_FreqSemigroup) {
  $__body = function($v, $v1) use (&$Control_Monad_Gen_FreqSemigroup) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($Control_Monad_Gen_FreqSemigroup)((function() use ($f, $g) {
  $__body = function($pos) use ($f, $g) {
    $v2 = ($f)($pos);
    $__case_0 = $v2;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[0])->tag === "Just"))) {
$pos__prime__ = (($__case_0)->values[0])->values[0];
return ($g)($pos__prime__);
} else {
;
};
    if (true) {
$result = $__case_0;
return $result;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($pos) use ($f, $g, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($pos);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($pos);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Control_Monad_Gen_FreqSemigroup, $__body, &$__fn) {
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

// Control_Monad_Gen_getFreqVal
$Control_Monad_Gen_getFreqVal = (function() use (&$Control_Monad_Gen_compose, &$Data_Tuple_snd) {
  $__body = function($v) use (&$Control_Monad_Gen_compose, &$Data_Tuple_snd) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($Control_Monad_Gen_compose)($Data_Tuple_snd, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Gen_compose, &$Data_Tuple_snd, $__body, &$__fn) {
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

// Control_Monad_Gen_fromIndex
$Control_Monad_Gen_fromIndex = (function() use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Last_semigroupLast, &$Data_Foldable_foldr, &$Prim_undefined, &$Control_Monad_Gen_sub, &$Control_Monad_Gen_un, &$Data_Semigroup_Last_Last, &$Control_Monad_Gen_Cons, &$Control_Monad_Gen_Nil) {
  $__fn = function($dictFoldable1) use (&$Data_Semigroup_Foldable_foldMap1, &$Data_Semigroup_Last_semigroupLast, &$Data_Foldable_foldr, &$Prim_undefined, &$Control_Monad_Gen_sub, &$Control_Monad_Gen_un, &$Data_Semigroup_Last_Last, &$Control_Monad_Gen_Cons, &$Control_Monad_Gen_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap1 = ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1, $Data_Semigroup_Last_semigroupLast);
$foldr = ($Data_Foldable_foldr)((($dictFoldable1)->Foldable0)($Prim_undefined));
    $__res = (function() use (&$Control_Monad_Gen_sub, &$Control_Monad_Gen_un, &$Data_Semigroup_Last_Last, $foldMap1, $foldr, &$Control_Monad_Gen_Cons, &$Control_Monad_Gen_Nil) {
  $__fn = function($i, $xs = null) use (&$Control_Monad_Gen_sub, &$Control_Monad_Gen_un, &$Data_Semigroup_Last_Last, $foldMap1, $foldr, &$Control_Monad_Gen_Cons, &$Control_Monad_Gen_Nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$go, &$Control_Monad_Gen_sub, &$Control_Monad_Gen_un, &$Data_Semigroup_Last_Last, $foldMap1, $xs) {
  $__fn = function($v, $v1 = null) use (&$go, &$Control_Monad_Gen_sub, &$Control_Monad_Gen_un, &$Data_Semigroup_Last_Last, $foldMap1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v, $v1) use (&$go, &$Control_Monad_Gen_sub, &$Control_Monad_Gen_un, &$Data_Semigroup_Last_Last, $foldMap1, $xs) {
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && ((($__case_1)->values[1])->tag === "Nil"))) {
$a = ($__case_1)->values[0];
return $a;
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$j = $__case_0;
$a = ($__case_1)->values[0];
return "/* Unsupported: Guards not supported */";
} else {
;
};
if ((($__case_1)->tag === "Cons")) {
$j = $__case_0;
$as = ($__case_1)->values[1];
$__tco_tmp_0 = ($Control_Monad_Gen_sub)($j, 1);
$__tco_tmp_1 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
;
};
if ((($__case_1)->tag === "Nil")) {
return ($Control_Monad_Gen_un)($Data_Semigroup_Last_Last, ($foldMap1)($Data_Semigroup_Last_Last, $xs));
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v, $v1);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($go)($i, ($foldr)($Control_Monad_Gen_Cons, $Control_Monad_Gen_Nil, $xs));
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

// Control_Monad_Gen_oneOf
$Control_Monad_Gen_oneOf = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Gen_Class_chooseInt, &$Data_Foldable_length, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, &$Control_Monad_Gen_sub) {
  $__fn = function($dictMonadGen) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Gen_Class_chooseInt, &$Data_Foldable_length, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, &$Control_Monad_Gen_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined));
$chooseInt = ($Control_Monad_Gen_Class_chooseInt)($dictMonadGen);
    $__res = (function() use (&$Data_Foldable_length, &$Prim_undefined, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, $bind, $chooseInt, &$Control_Monad_Gen_sub) {
  $__fn = function($dictFoldable1) use (&$Data_Foldable_length, &$Prim_undefined, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, $bind, $chooseInt, &$Control_Monad_Gen_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$length = ($Data_Foldable_length)((($dictFoldable1)->Foldable0)($Prim_undefined), $Data_Semiring_semiringInt);
$fromIndex1 = ($Control_Monad_Gen_fromIndex)($dictFoldable1);
    $__res = (function() use ($bind, $chooseInt, &$Control_Monad_Gen_sub, $length, $fromIndex1) {
  $__fn = function($xs) use ($bind, $chooseInt, &$Control_Monad_Gen_sub, $length, $fromIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($chooseInt)(0, ($Control_Monad_Gen_sub)(($length)($xs), 1)), (function() use ($fromIndex1, $xs) {
  $__fn = function($n) use ($fromIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($fromIndex1)($n, $xs);
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_freqSemigroup
$Control_Monad_Gen_freqSemigroup = (function() use (&$Control_Monad_Gen_FreqSemigroup, &$Control_Monad_Gen_greaterThanOrEq, &$Data_Tuple_Tuple, &$Data_Maybe_Just, &$Control_Monad_Gen_sub1, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Control_Monad_Gen_FreqSemigroup, &$Control_Monad_Gen_greaterThanOrEq, &$Data_Tuple_Tuple, &$Data_Maybe_Just, &$Control_Monad_Gen_sub1, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$weight = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($Control_Monad_Gen_FreqSemigroup)((function() use (&$Control_Monad_Gen_greaterThanOrEq, $weight, &$Data_Tuple_Tuple, &$Data_Maybe_Just, &$Control_Monad_Gen_sub1, $x, &$Data_Maybe_Nothing) {
  $__body = function($pos) use (&$Control_Monad_Gen_greaterThanOrEq, $weight, &$Data_Tuple_Tuple, &$Data_Maybe_Just, &$Control_Monad_Gen_sub1, $x, &$Data_Maybe_Nothing) {
    $__case_0 = ($Control_Monad_Gen_greaterThanOrEq)($pos, $weight);
    if (($__case_0 === true)) {
return ($Data_Tuple_Tuple)(($Data_Maybe_Just)(($Control_Monad_Gen_sub1)($pos, $weight)), $x);
} else {
;
};
    if (true) {
return ($Data_Tuple_Tuple)($Data_Maybe_Nothing, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($pos) use (&$Control_Monad_Gen_greaterThanOrEq, $weight, &$Data_Tuple_Tuple, &$Data_Maybe_Just, &$Control_Monad_Gen_sub1, $x, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($pos);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($pos);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_Gen_FreqSemigroup, &$Control_Monad_Gen_greaterThanOrEq, &$Data_Tuple_Tuple, &$Data_Maybe_Just, &$Control_Monad_Gen_sub1, &$Data_Maybe_Nothing, $__body, &$__fn) {
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

// Control_Monad_Gen_frequency
$Control_Monad_Gen_frequency = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Gen_Class_chooseFloat, &$Data_Foldable_foldMap, &$Control_Monad_Gen_monoidAdditive, &$Data_Semigroup_Foldable_foldMap1, &$Control_Monad_Gen_semigroupFreqSemigroup, &$Control_Monad_Gen_alaF, &$Data_Monoid_Additive_Additive, &$Data_Tuple_fst, &$Control_Monad_Gen_getFreqVal, &$Control_Monad_Gen_freqSemigroup) {
  $__fn = function($dictMonadGen) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Gen_Class_chooseFloat, &$Data_Foldable_foldMap, &$Control_Monad_Gen_monoidAdditive, &$Data_Semigroup_Foldable_foldMap1, &$Control_Monad_Gen_semigroupFreqSemigroup, &$Control_Monad_Gen_alaF, &$Data_Monoid_Additive_Additive, &$Data_Tuple_fst, &$Control_Monad_Gen_getFreqVal, &$Control_Monad_Gen_freqSemigroup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined));
$chooseFloat = ($Control_Monad_Gen_Class_chooseFloat)($dictMonadGen);
    $__res = (function() use (&$Data_Foldable_foldMap, &$Prim_undefined, &$Control_Monad_Gen_monoidAdditive, &$Data_Semigroup_Foldable_foldMap1, &$Control_Monad_Gen_semigroupFreqSemigroup, &$Control_Monad_Gen_alaF, &$Data_Monoid_Additive_Additive, &$Data_Tuple_fst, $bind, $chooseFloat, &$Control_Monad_Gen_getFreqVal, &$Control_Monad_Gen_freqSemigroup) {
  $__fn = function($dictFoldable1) use (&$Data_Foldable_foldMap, &$Prim_undefined, &$Control_Monad_Gen_monoidAdditive, &$Data_Semigroup_Foldable_foldMap1, &$Control_Monad_Gen_semigroupFreqSemigroup, &$Control_Monad_Gen_alaF, &$Data_Monoid_Additive_Additive, &$Data_Tuple_fst, $bind, $chooseFloat, &$Control_Monad_Gen_getFreqVal, &$Control_Monad_Gen_freqSemigroup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap = ($Data_Foldable_foldMap)((($dictFoldable1)->Foldable0)($Prim_undefined), $Control_Monad_Gen_monoidAdditive);
$foldMap1 = ($Data_Semigroup_Foldable_foldMap1)($dictFoldable1, $Control_Monad_Gen_semigroupFreqSemigroup);
    $__res = (function() use (&$Control_Monad_Gen_alaF, &$Data_Monoid_Additive_Additive, $foldMap, &$Data_Tuple_fst, $bind, $chooseFloat, &$Control_Monad_Gen_getFreqVal, $foldMap1, &$Control_Monad_Gen_freqSemigroup) {
  $__fn = function($xs) use (&$Control_Monad_Gen_alaF, &$Data_Monoid_Additive_Additive, $foldMap, &$Data_Tuple_fst, $bind, $chooseFloat, &$Control_Monad_Gen_getFreqVal, $foldMap1, &$Control_Monad_Gen_freqSemigroup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$total = ($Control_Monad_Gen_alaF)($Data_Monoid_Additive_Additive, $foldMap, $Data_Tuple_fst, $xs);
    $__res = ($bind)(($chooseFloat)(0.0, $total), ($Control_Monad_Gen_getFreqVal)(($foldMap1)($Control_Monad_Gen_freqSemigroup, $xs)));
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

// Control_Monad_Gen_filtered
$Control_Monad_Gen_filtered = (function() use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Rec_Class_tailRecM, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tailRecM = ($Control_Monad_Rec_Class_tailRecM)($dictMonadRec);
    $__res = (function() use (&$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, $tailRecM) {
  $__fn = function($dictMonadGen) use (&$Data_Functor_mapFlipped, &$Prim_undefined, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mapFlipped = ($Data_Functor_mapFlipped)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($mapFlipped, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, $tailRecM) {
  $__fn = function($gen) use ($mapFlipped, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($mapFlipped, $gen, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
  $__fn = function($v) use ($mapFlipped, $gen, &$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mapFlipped)($gen, (function() use (&$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
  $__body = function($a) use (&$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done) {
    $__case_0 = $a;
    if ((($__case_0)->tag === "Nothing")) {
return ($Control_Monad_Rec_Class_Loop)($Data_Unit_unit);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$a__prime__ = ($__case_0)->values[0];
return ($Control_Monad_Rec_Class_Done)($a__prime__);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use (&$Control_Monad_Rec_Class_Loop, &$Data_Unit_unit, &$Control_Monad_Rec_Class_Done, $__body, &$__fn) {
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
})());
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM)($go, $Data_Unit_unit);
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

// Control_Monad_Gen_suchThat
$Control_Monad_Gen_suchThat = (function() use (&$Control_Monad_Gen_filtered, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictMonadRec) use (&$Control_Monad_Gen_filtered, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$filtered1 = ($Control_Monad_Gen_filtered)($dictMonadRec);
    $__res = (function() use ($filtered1, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictMonadGen) use ($filtered1, &$Data_Functor_mapFlipped, &$Prim_undefined, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$filtered2 = ($filtered1)($dictMonadGen);
$mapFlipped = ($Data_Functor_mapFlipped)((((((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
    $__res = (function() use ($filtered2, $mapFlipped, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($gen, $pred = null) use ($filtered2, $mapFlipped, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($filtered2)(($mapFlipped)($gen, (function() use ($pred, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($a) use ($pred, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = ($pred)($a);
    if (($__case_0 === true)) {
return ($Data_Maybe_Just)($a);
} else {
;
};
    if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a) use ($pred, &$Data_Maybe_Just, &$Data_Maybe_Nothing, $__body, &$__fn) {
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

// Control_Monad_Gen_elements
$Control_Monad_Gen_elements = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseInt, &$Control_Applicative_pure, &$Data_Foldable_length, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, &$Control_Monad_Gen_sub) {
  $__fn = function($dictMonadGen) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Gen_Class_chooseInt, &$Control_Applicative_pure, &$Data_Foldable_length, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, &$Control_Monad_Gen_sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Monad0 = (($dictMonadGen)->Monad0)($Prim_undefined);
$bind = ($Control_Bind_bind)((($Monad0)->Bind1)($Prim_undefined));
$chooseInt = ($Control_Monad_Gen_Class_chooseInt)($dictMonadGen);
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
    $__res = (function() use (&$Data_Foldable_length, &$Prim_undefined, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, $bind, $chooseInt, &$Control_Monad_Gen_sub, $pure) {
  $__fn = function($dictFoldable1) use (&$Data_Foldable_length, &$Prim_undefined, &$Data_Semiring_semiringInt, &$Control_Monad_Gen_fromIndex, $bind, $chooseInt, &$Control_Monad_Gen_sub, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$length = ($Data_Foldable_length)((($dictFoldable1)->Foldable0)($Prim_undefined), $Data_Semiring_semiringInt);
$fromIndex1 = ($Control_Monad_Gen_fromIndex)($dictFoldable1);
    $__res = (function() use ($bind, $chooseInt, &$Control_Monad_Gen_sub, $length, $pure, $fromIndex1) {
  $__fn = function($xs) use ($bind, $chooseInt, &$Control_Monad_Gen_sub, $length, $pure, $fromIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($chooseInt)(0, ($Control_Monad_Gen_sub)(($length)($xs), 1)), (function() use ($pure, $fromIndex1, $xs) {
  $__fn = function($n) use ($pure, $fromIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($pure)(($fromIndex1)($n, $xs));
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
})();
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_choose
$Control_Monad_Gen_choose = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Gen_Class_chooseBool) {
  $__fn = function($dictMonadGen) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Monad_Gen_Class_chooseBool, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((((($dictMonadGen)->Monad0)($Prim_undefined))->Bind1)($Prim_undefined));
$chooseBool = ($Control_Monad_Gen_Class_chooseBool)($dictMonadGen);
    $__res = (function() use ($bind, $chooseBool) {
  $__fn = function($genA, $genB = null) use ($bind, $chooseBool, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($chooseBool, (function() use ($genA, $genB) {
  $__body = function($v) use ($genA, $genB) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return $genA;
} else {
;
};
    if (true) {
return $genB;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($genA, $genB, $__body, &$__fn) {
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

