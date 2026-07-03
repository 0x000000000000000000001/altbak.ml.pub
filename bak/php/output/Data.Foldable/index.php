<?php

namespace Data\Foldable;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}



$Data_Foldable_foldrArray = phpurs_uncurry3(function($f) { return function($init) use(&$f) { return function($xs) use(&$f, &$init) { $acc = $init; for($i=count($xs)-1; $i>=0; $i--) { $acc = $f($xs[$i])($acc); } return $acc; }; }; });
$Data_Foldable_foldlArray = phpurs_uncurry3(function($f) { return function($init) use(&$f) { return function($xs) use(&$f, &$init) { $acc = $init; foreach($xs as $x) { $acc = $f($acc)($x); } return $acc; }; }; });

// Data_Foldable_eq
$Data_Foldable_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Foldable_add
$Data_Foldable_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Foldable_compose
$Data_Foldable_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Foldable_identity
$Data_Foldable_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Data_Foldable_eq1
$Data_Foldable_eq1 = ($Data_Eq_eq)($Data_Ordering_eqOrdering);

// Data_Foldable_unwrap
$Data_Foldable_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Foldable_monoidEndo
$Data_Foldable_monoidEndo = ($Data_Monoid_Endo_monoidEndo)($Control_Category_categoryFn);

// Data_Foldable_monoidDual
$Data_Foldable_monoidDual = ($Data_Monoid_Dual_monoidDual)($Data_Foldable_monoidEndo);

// Data_Foldable_alaF
$Data_Foldable_alaF = ($Data_Newtype_alaF)($Prim_undefined, $Prim_undefined, $Prim_undefined, $Prim_undefined);

// Data_Foldable_not
$Data_Foldable_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Foldable_Foldable$Dict
$Data_Foldable_Foldable__dollar__Dict = (function() {
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

// Data_Foldable_foldr
$Data_Foldable_foldr = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldr;
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

// Data_Foldable_indexr
$Data_Foldable_indexr = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
    $__res = (function() use (&$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, $foldr2, &$Data_Maybe_Nothing) {
  $__fn = function($idx) use (&$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, $foldr2, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Foldable_eq, $idx, &$Data_Maybe_Just, &$Data_Foldable_add) {
  $__body = function($a, $cursor) use (&$Data_Foldable_eq, $idx, &$Data_Maybe_Just, &$Data_Foldable_add) {
    $__case_0 = ($cursor)->elem;
    if ((($__case_0)->tag === "Just")) {
return $cursor;
} else {
;
};
    if (true) {
$__case_0 = ($Data_Foldable_eq)(($cursor)->pos, $idx);
if (($__case_0 === true)) {
return (object)["elem" => ($Data_Maybe_Just)($a), "pos" => ($cursor)->pos];
} else {
;
};
if (true) {
return (object)["pos" => ($Data_Foldable_add)(($cursor)->pos, 1), "elem" => ($cursor)->elem];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $cursor = null) use (&$Data_Foldable_eq, $idx, &$Data_Maybe_Just, &$Data_Foldable_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $cursor);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $cursor);
  };
  return $__fn;
})();
    $__res = ($Data_Foldable_compose)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v)->elem;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($foldr2)($go, (object)["elem" => $Data_Maybe_Nothing, "pos" => 0]));
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

// Data_Foldable_null
$Data_Foldable_null = (function() use (&$Data_Foldable_foldr) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldr)($dictFoldable, (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = false;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), true);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Foldable_oneOf
$Data_Foldable_oneOf = (function() use (&$Data_Foldable_foldr, &$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
    $__res = (function() use ($foldr2, &$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty) {
  $__fn = function($dictPlus) use ($foldr2, &$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldr2)(($Control_Alt_alt)((($dictPlus)->Alt0)($Prim_undefined)), ($Control_Plus_empty)($dictPlus));
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

// Data_Foldable_oneOfMap
$Data_Foldable_oneOfMap = (function() use (&$Data_Foldable_foldr, &$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty, &$Data_Foldable_compose) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty, &$Data_Foldable_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
    $__res = (function() use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty, $foldr2, &$Data_Foldable_compose) {
  $__fn = function($dictPlus) use (&$Control_Alt_alt, &$Prim_undefined, &$Control_Plus_empty, $foldr2, &$Data_Foldable_compose, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$alt = ($Control_Alt_alt)((($dictPlus)->Alt0)($Prim_undefined));
$empty = ($Control_Plus_empty)($dictPlus);
    $__res = (function() use ($foldr2, &$Data_Foldable_compose, $alt, $empty) {
  $__fn = function($f) use ($foldr2, &$Data_Foldable_compose, $alt, $empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldr2)(($Data_Foldable_compose)($alt, $f), $empty);
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

// Data_Foldable_traverse_
$Data_Foldable_traverse_ = (function() use (&$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Foldable_foldr, &$Data_Foldable_compose, &$Data_Unit_unit) {
  $__fn = function($dictApplicative) use (&$Control_Apply_applySecond, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Foldable_foldr, &$Data_Foldable_compose, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$applySecond = ($Control_Apply_applySecond)((($dictApplicative)->Apply0)($Prim_undefined));
$pure = ($Control_Applicative_pure)($dictApplicative);
    $__res = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_compose, $applySecond, $pure, &$Data_Unit_unit) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_compose, $applySecond, $pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
    $__res = (function() use ($foldr2, &$Data_Foldable_compose, $applySecond, $pure, &$Data_Unit_unit) {
  $__fn = function($f) use ($foldr2, &$Data_Foldable_compose, $applySecond, $pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldr2)(($Data_Foldable_compose)($applySecond, $f), ($pure)($Data_Unit_unit));
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

// Data_Foldable_for_
$Data_Foldable_for_ = (function() use (&$Data_Foldable_traverse_, &$Data_Function_flip) {
  $__fn = function($dictApplicative) use (&$Data_Foldable_traverse_, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse_1 = ($Data_Foldable_traverse_)($dictApplicative);
    $__res = (function() use (&$Data_Function_flip, $traverse_1) {
  $__fn = function($dictFoldable) use (&$Data_Function_flip, $traverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_flip)(($traverse_1)($dictFoldable));
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

// Data_Foldable_sequence_
$Data_Foldable_sequence_ = (function() use (&$Data_Foldable_traverse_, &$Data_Foldable_identity) {
  $__fn = function($dictApplicative) use (&$Data_Foldable_traverse_, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$traverse_1 = ($Data_Foldable_traverse_)($dictApplicative);
    $__res = (function() use ($traverse_1, &$Data_Foldable_identity) {
  $__fn = function($dictFoldable) use ($traverse_1, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($traverse_1)($dictFoldable, $Data_Foldable_identity);
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

// Data_Foldable_foldl
$Data_Foldable_foldl = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldl;
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

// Data_Foldable_indexl
$Data_Foldable_indexl = (function() use (&$Data_Foldable_foldl, &$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, $foldl2, &$Data_Maybe_Nothing) {
  $__fn = function($idx) use (&$Data_Foldable_eq, &$Data_Maybe_Just, &$Data_Foldable_add, &$Data_Foldable_compose, $foldl2, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Data_Foldable_eq, $idx, &$Data_Maybe_Just, &$Data_Foldable_add) {
  $__body = function($cursor, $a) use (&$Data_Foldable_eq, $idx, &$Data_Maybe_Just, &$Data_Foldable_add) {
    $__case_0 = ($cursor)->elem;
    if ((($__case_0)->tag === "Just")) {
return $cursor;
} else {
;
};
    if (true) {
$__case_0 = ($Data_Foldable_eq)(($cursor)->pos, $idx);
if (($__case_0 === true)) {
return (object)["elem" => ($Data_Maybe_Just)($a), "pos" => ($cursor)->pos];
} else {
;
};
if (true) {
return (object)["pos" => ($Data_Foldable_add)(($cursor)->pos, 1), "elem" => ($cursor)->elem];
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($cursor, $a = null) use (&$Data_Foldable_eq, $idx, &$Data_Maybe_Just, &$Data_Foldable_add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($cursor, $a);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($cursor, $a);
  };
  return $__fn;
})();
    $__res = ($Data_Foldable_compose)((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v)->elem;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($foldl2)($go, (object)["elem" => $Data_Maybe_Nothing, "pos" => 0]));
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

// Data_Foldable_intercalate
$Data_Foldable_intercalate = (function() use (&$Data_Foldable_foldl, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldl2) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldl2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($append, $foldl2, $mempty) {
  $__fn = function($sep, $xs = null) use ($append, $foldl2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($append, $sep) {
  $__body = function($v, $v1) use ($append, $sep) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((is_object)($__case_0) && (($__case_0)->init === true))) {
$x = $__case_1;
return (object)["init" => false, "acc" => $x];
} else {
;
};
    if ((is_object)($__case_0)) {
$acc = ($__case_0)->acc;
$x = $__case_1;
return (object)["init" => false, "acc" => ($append)($acc, ($append)($sep, $x))];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($append, $sep, $__body, &$__fn) {
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
    $__res = (($foldl2)($go, (object)["init" => true, "acc" => $mempty], $xs))->acc;
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

// Data_Foldable_length
$Data_Foldable_length = (function() use (&$Data_Foldable_foldl, &$Data_Semiring_add, &$Data_Semiring_one, &$Data_Semiring_zero) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Semiring_add, &$Data_Semiring_one, &$Data_Semiring_zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Data_Semiring_add, &$Data_Semiring_one, $foldl2, &$Data_Semiring_zero) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semiring_one, $foldl2, &$Data_Semiring_zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add1 = ($Data_Semiring_add)($dictSemiring);
$one = ($Data_Semiring_one)($dictSemiring);
    $__res = ($foldl2)((function() use ($add1, $one) {
  $__fn = function($c, $v = null) use ($add1, $one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($add1)($one, $c);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Semiring_zero)($dictSemiring));
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

// Data_Foldable_maximumBy
$Data_Foldable_maximumBy = (function() use (&$Data_Foldable_foldl, &$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_GT, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_GT, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_GT, $foldl2, &$Data_Maybe_Nothing) {
  $__fn = function($cmp) use (&$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_GT, $foldl2, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$max__prime__ = (function() use (&$Data_Maybe_Just, &$Data_Foldable_eq1, $cmp, &$Data_Ordering_GT) {
  $__body = function($v, $v1) use (&$Data_Maybe_Just, &$Data_Foldable_eq1, $cmp, &$Data_Ordering_GT) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$x = $__case_1;
return ($Data_Maybe_Just)($x);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
$y = $__case_1;
return ($Data_Maybe_Just)((function() use (&$Data_Foldable_eq1, $cmp, $x, $y, &$Data_Ordering_GT) {
$__case_0 = ($Data_Foldable_eq1)(($cmp)($x, $y), $Data_Ordering_GT);
if (($__case_0 === true)) {
return $x;
} else {
;
};
if (true) {
return $y;
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
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Just, &$Data_Foldable_eq1, $cmp, &$Data_Ordering_GT, $__body, &$__fn) {
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
    $__res = ($foldl2)($max__prime__, $Data_Maybe_Nothing);
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

// Data_Foldable_maximum
$Data_Foldable_maximum = (function() use (&$Data_Ord_compare, &$Data_Foldable_maximumBy) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Foldable_maximumBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Foldable_maximumBy, $compare) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_maximumBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_maximumBy)($dictFoldable, $compare);
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

// Data_Foldable_minimumBy
$Data_Foldable_minimumBy = (function() use (&$Data_Foldable_foldl, &$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_LT, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_LT, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_LT, $foldl2, &$Data_Maybe_Nothing) {
  $__fn = function($cmp) use (&$Data_Maybe_Just, &$Data_Foldable_eq1, &$Data_Ordering_LT, $foldl2, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$min__prime__ = (function() use (&$Data_Maybe_Just, &$Data_Foldable_eq1, $cmp, &$Data_Ordering_LT) {
  $__body = function($v, $v1) use (&$Data_Maybe_Just, &$Data_Foldable_eq1, $cmp, &$Data_Ordering_LT) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$x = $__case_1;
return ($Data_Maybe_Just)($x);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
$y = $__case_1;
return ($Data_Maybe_Just)((function() use (&$Data_Foldable_eq1, $cmp, $x, $y, &$Data_Ordering_LT) {
$__case_0 = ($Data_Foldable_eq1)(($cmp)($x, $y), $Data_Ordering_LT);
if (($__case_0 === true)) {
return $x;
} else {
;
};
if (true) {
return $y;
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
  $__fn = function($v, $v1 = null) use (&$Data_Maybe_Just, &$Data_Foldable_eq1, $cmp, &$Data_Ordering_LT, $__body, &$__fn) {
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
    $__res = ($foldl2)($min__prime__, $Data_Maybe_Nothing);
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

// Data_Foldable_minimum
$Data_Foldable_minimum = (function() use (&$Data_Ord_compare, &$Data_Foldable_minimumBy) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Foldable_minimumBy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use (&$Data_Foldable_minimumBy, $compare) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_minimumBy, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_minimumBy)($dictFoldable, $compare);
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

// Data_Foldable_product
$Data_Foldable_product = (function() use (&$Data_Foldable_foldl, &$Data_Semiring_mul, &$Data_Semiring_one) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Semiring_mul, &$Data_Semiring_one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use ($foldl2, &$Data_Semiring_mul, &$Data_Semiring_one) {
  $__fn = function($dictSemiring) use ($foldl2, &$Data_Semiring_mul, &$Data_Semiring_one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldl2)(($Data_Semiring_mul)($dictSemiring), ($Data_Semiring_one)($dictSemiring));
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

// Data_Foldable_sum
$Data_Foldable_sum = (function() use (&$Data_Foldable_foldl, &$Data_Semiring_add, &$Data_Semiring_zero) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Semiring_add, &$Data_Semiring_zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use ($foldl2, &$Data_Semiring_add, &$Data_Semiring_zero) {
  $__fn = function($dictSemiring) use ($foldl2, &$Data_Semiring_add, &$Data_Semiring_zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldl2)(($Data_Semiring_add)($dictSemiring), ($Data_Semiring_zero)($dictSemiring));
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

// Data_Foldable_foldableTuple
$Data_Foldable_foldableTuple = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->values[1];
return ($f1)($x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->values[1];
return ($f1)($z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[1];
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})()]);

// Data_Foldable_foldableMultiplicative
$Data_Foldable_foldableMultiplicative = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})()]);

// Data_Foldable_foldableMaybe
$Data_Foldable_foldableMaybe = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Nothing")) {
$z = $__case_1;
return $z;
} else {
;
};
    if ((($__case_2)->tag === "Just")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($x, $z);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Nothing")) {
$z = $__case_1;
return $z;
} else {
;
};
    if ((($__case_2)->tag === "Just")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($z, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($mempty) {
  $__body = function($v, $v1) use ($mempty) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return $mempty;
} else {
;
};
    if ((($__case_1)->tag === "Just")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($f)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($mempty, $__body, &$__fn) {
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
})()]);

// Data_Foldable_foldr1
$Data_Foldable_foldr1 = ($Data_Foldable_foldr)($Data_Foldable_foldableMaybe);

// Data_Foldable_foldl1
$Data_Foldable_foldl1 = ($Data_Foldable_foldl)($Data_Foldable_foldableMaybe);

// Data_Foldable_foldableIdentity
$Data_Foldable_foldableIdentity = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})()]);

// Data_Foldable_foldableEither
$Data_Foldable_foldableEither = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$z = $__case_1;
return $z;
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($x, $z);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$z = $__case_1;
return $z;
} else {
;
};
    if ((($__case_2)->tag === "Right")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($z, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $v1, $v2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $v1, $v2);
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($mempty) {
  $__body = function($v, $v1) use ($mempty) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
return $mempty;
} else {
;
};
    if ((($__case_1)->tag === "Right")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($f)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($mempty, $__body, &$__fn) {
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
})()]);

// Data_Foldable_foldableDual
$Data_Foldable_foldableDual = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})()]);

// Data_Foldable_foldableDisj
$Data_Foldable_foldableDisj = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})()]);

// Data_Foldable_foldableConst
$Data_Foldable_foldableConst = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $z;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $z;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($mempty) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $mempty;
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
})()]);

// Data_Foldable_foldableConj
$Data_Foldable_foldableConj = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})()]);

// Data_Foldable_foldableAdditive
$Data_Foldable_foldableAdditive = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($x, $z1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($dictMonoid, $f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($dictMonoid, $f, $v);
  };
  return $__fn;
})()]);

// Data_Foldable_foldMapDefaultR
$Data_Foldable_foldMapDefaultR = (function() use (&$Data_Foldable_foldr, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldr2) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldr2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($foldr2, $append, $mempty) {
  $__fn = function($f) use ($foldr2, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldr2)((function() use ($append, $f) {
  $__fn = function($x, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)(($f)($x), $acc);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $mempty);
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

// Data_Foldable_foldableArray
$Data_Foldable_foldableArray = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => $Data_Foldable_foldrArray, "foldl" => $Data_Foldable_foldlArray, "foldMap" => (function() use (&$Data_Foldable_foldMapDefaultR, &$Data_Foldable_foldableArray) {
  $__fn = function($dictMonoid) use (&$Data_Foldable_foldMapDefaultR, &$Data_Foldable_foldableArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_foldMapDefaultR)($Data_Foldable_foldableArray, $dictMonoid);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Foldable_foldMapDefaultL
$Data_Foldable_foldMapDefaultL = (function() use (&$Data_Foldable_foldl, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldl2) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, &$Data_Monoid_mempty, $foldl2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$mempty = ($Data_Monoid_mempty)($dictMonoid);
    $__res = (function() use ($foldl2, $append, $mempty) {
  $__fn = function($f) use ($foldl2, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldl2)((function() use ($append, $f) {
  $__fn = function($acc, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)($acc, ($f)($x));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), $mempty);
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

// Data_Foldable_foldMap
$Data_Foldable_foldMap = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMap;
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

// Data_Foldable_foldMap1
$Data_Foldable_foldMap1 = ($Data_Foldable_foldMap)($Data_Foldable_foldableMaybe);

// Data_Foldable_foldableApp
$Data_Foldable_foldableApp = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use ($foldr2) {
  $__body = function($f, $i, $v) use ($foldr2) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldr2)($f1, $i1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $i, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $i, $v);
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl2) {
  $__body = function($f, $i, $v) use ($foldl2) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
return ($foldl2)($f1, $i1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $i, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $i, $v);
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2) {
  $__fn = function($dictMonoid) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap3 = ($foldMap2)($dictMonoid);
    $__res = (function() use ($foldMap3) {
  $__body = function($f, $v) use ($foldMap3) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap3)($f1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMap3, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Foldable_foldableCompose
$Data_Foldable_foldableCompose = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Function_flip) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, $foldr2, &$Data_Function_flip, $foldl2, $foldMap2) {
  $__fn = function($dictFoldable1) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, $foldr2, &$Data_Function_flip, $foldl2, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr3 = ($Data_Foldable_foldr)($dictFoldable1);
$foldl3 = ($Data_Foldable_foldl)($dictFoldable1);
$foldMap3 = ($Data_Foldable_foldMap)($dictFoldable1);
    $__res = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use ($foldr2, &$Data_Function_flip, $foldr3) {
  $__body = function($f, $i, $v) use ($foldr2, &$Data_Function_flip, $foldr3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldr2)(($Data_Function_flip)(($foldr3)($f1)), $i1, $fga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $i = null, $v = null) use ($foldr2, &$Data_Function_flip, $foldr3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $i, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $i, $v);
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl2, $foldl3) {
  $__body = function($f, $i, $v) use ($foldl2, $foldl3) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldl2)(($foldl3)($f1), $i1, $fga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $i = null, $v = null) use ($foldl2, $foldl3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $i, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $i, $v);
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMap4)(($foldMap5)($f1), $fga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMap4, $foldMap5, $__body, &$__fn) {
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

// Data_Foldable_foldableCoproduct
$Data_Foldable_foldableCoproduct = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Functor_Coproduct_coproduct, $foldr2, $foldl2, $foldMap2) {
  $__fn = function($dictFoldable1) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Functor_Coproduct_coproduct, $foldr2, $foldl2, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr3 = ($Data_Foldable_foldr)($dictFoldable1);
$foldl3 = ($Data_Foldable_foldl)($dictFoldable1);
$foldMap3 = ($Data_Foldable_foldMap)($dictFoldable1);
    $__res = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_Functor_Coproduct_coproduct, $foldr2, $foldr3) {
  $__fn = function($f, $z = null) use (&$Data_Functor_Coproduct_coproduct, $foldr2, $foldr3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($foldr2)($f, $z), ($foldr3)($f, $z));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$Data_Functor_Coproduct_coproduct, $foldl2, $foldl3) {
  $__fn = function($f, $z = null) use (&$Data_Functor_Coproduct_coproduct, $foldl2, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($foldl2)($f, $z), ($foldl3)($f, $z));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3, &$Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictMonoid) use ($foldMap2, $foldMap3, &$Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use (&$Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5) {
  $__fn = function($f) use (&$Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_coproduct)(($foldMap4)($f), ($foldMap5)($f));
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

// Data_Foldable_foldableFirst
$Data_Foldable_foldableFirst = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_Foldable_foldr1) {
  $__body = function($f, $z, $v) use (&$Data_Foldable_foldr1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($Data_Foldable_foldr1)($f1, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Foldable_foldr1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() use (&$Data_Foldable_foldl1) {
  $__body = function($f, $z, $v) use (&$Data_Foldable_foldl1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($Data_Foldable_foldl1)($f1, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Foldable_foldl1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Foldable_foldMap1) {
  $__fn = function($dictMonoid) use (&$Data_Foldable_foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap1)($dictMonoid);
    $__res = (function() use ($foldMap2) {
  $__body = function($f, $v) use ($foldMap2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap2)($f1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMap2, $__body, &$__fn) {
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
})()]);

// Data_Foldable_foldableLast
$Data_Foldable_foldableLast = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use (&$Data_Foldable_foldr1) {
  $__body = function($f, $z, $v) use (&$Data_Foldable_foldr1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($Data_Foldable_foldr1)($f1, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Foldable_foldr1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() use (&$Data_Foldable_foldl1) {
  $__body = function($f, $z, $v) use (&$Data_Foldable_foldl1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($Data_Foldable_foldl1)($f1, $z1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use (&$Data_Foldable_foldl1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Foldable_foldMap1) {
  $__fn = function($dictMonoid) use (&$Data_Foldable_foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap1)($dictMonoid);
    $__res = (function() use ($foldMap2) {
  $__body = function($f, $v) use ($foldMap2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMap2)($f1, $x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($foldMap2, $__body, &$__fn) {
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
})()]);

// Data_Foldable_foldableProduct
$Data_Foldable_foldableProduct = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Semigroup_append, &$Prim_undefined) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, &$Data_Semigroup_append, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr2 = ($Data_Foldable_foldr)($dictFoldable);
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = (function() use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, $foldr2, $foldl2, &$Data_Semigroup_append, &$Prim_undefined, $foldMap2) {
  $__fn = function($dictFoldable1) use (&$Data_Foldable_foldr, &$Data_Foldable_foldl, &$Data_Foldable_foldMap, &$Data_Foldable_Foldable__dollar__Dict, $foldr2, $foldl2, &$Data_Semigroup_append, &$Prim_undefined, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldr3 = ($Data_Foldable_foldr)($dictFoldable1);
$foldl3 = ($Data_Foldable_foldl)($dictFoldable1);
$foldMap3 = ($Data_Foldable_foldMap)($dictFoldable1);
    $__res = ($Data_Foldable_Foldable__dollar__Dict)((object)["foldr" => (function() use ($foldr2, $foldr3) {
  $__body = function($f, $z, $v) use ($foldr2, $foldr3) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->values[0];
$ga = ($__case_2)->values[1];
return ($foldr2)($f1, ($foldr3)($f1, $z1, $ga), $fa);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($foldr2, $foldr3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3, $foldl2) {
  $__body = function($f, $z, $v) use ($foldl3, $foldl2) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->values[0];
$ga = ($__case_2)->values[1];
return ($foldl3)($f1, ($foldl2)($f1, $z1, $fa), $ga);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $z = null, $v = null) use ($foldl3, $foldl2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($f, $z, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($f, $z, $v);
  };
  return $__fn;
})(), "foldMap" => (function() use (&$Data_Semigroup_append, &$Prim_undefined, $foldMap2, $foldMap3) {
  $__fn = function($dictMonoid) use (&$Data_Semigroup_append, &$Prim_undefined, $foldMap2, $foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)((($dictMonoid)->Semigroup0)($Prim_undefined));
$foldMap4 = ($foldMap2)($dictMonoid);
$foldMap5 = ($foldMap3)($dictMonoid);
    $__res = (function() use ($append, $foldMap4, $foldMap5) {
  $__body = function($f, $v) use ($append, $foldMap4, $foldMap5) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$fa = ($__case_1)->values[0];
$ga = ($__case_1)->values[1];
return ($append)(($foldMap4)($f1, $fa), ($foldMap5)($f1, $ga));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($append, $foldMap4, $foldMap5, $__body, &$__fn) {
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

// Data_Foldable_foldlDefault
$Data_Foldable_foldlDefault = (function() use (&$Data_Foldable_foldMap, &$Data_Foldable_monoidDual, &$Data_Foldable_unwrap, &$Data_Foldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Foldable_monoidDual, &$Data_Foldable_unwrap, &$Data_Foldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable, $Data_Foldable_monoidDual);
    $__res = (function() use (&$Data_Foldable_unwrap, $foldMap2, &$Data_Foldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip) {
  $__fn = function($c, $u = null, $xs = null) use (&$Data_Foldable_unwrap, $foldMap2, &$Data_Foldable_compose, &$Data_Monoid_Dual_Dual, &$Data_Monoid_Endo_Endo, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_unwrap)(($Data_Foldable_unwrap)(($foldMap2)(($Data_Foldable_compose)($Data_Monoid_Dual_Dual, ($Data_Foldable_compose)($Data_Monoid_Endo_Endo, ($Data_Function_flip)($c))), $xs)), $u);
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

// Data_Foldable_foldrDefault
$Data_Foldable_foldrDefault = (function() use (&$Data_Foldable_foldMap, &$Data_Foldable_monoidEndo, &$Data_Foldable_unwrap, &$Data_Foldable_compose, &$Data_Monoid_Endo_Endo) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Foldable_monoidEndo, &$Data_Foldable_unwrap, &$Data_Foldable_compose, &$Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable, $Data_Foldable_monoidEndo);
    $__res = (function() use (&$Data_Foldable_unwrap, $foldMap2, &$Data_Foldable_compose, &$Data_Monoid_Endo_Endo) {
  $__fn = function($c, $u = null, $xs = null) use (&$Data_Foldable_unwrap, $foldMap2, &$Data_Foldable_compose, &$Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_unwrap)(($foldMap2)(($Data_Foldable_compose)($Data_Monoid_Endo_Endo, $c), $xs), $u);
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

// Data_Foldable_lookup
$Data_Foldable_lookup = (function() use (&$Data_Foldable_foldMap, &$Data_Maybe_First_monoidFirst, &$Data_Eq_eq, &$Data_Foldable_compose, &$Data_Foldable_unwrap, &$Data_Maybe_First_First, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Maybe_First_monoidFirst, &$Data_Eq_eq, &$Data_Foldable_compose, &$Data_Foldable_unwrap, &$Data_Maybe_First_First, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable, $Data_Maybe_First_monoidFirst);
    $__res = (function() use (&$Data_Eq_eq, &$Data_Foldable_compose, &$Data_Foldable_unwrap, $foldMap2, &$Data_Maybe_First_First, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Foldable_compose, &$Data_Foldable_unwrap, $foldMap2, &$Data_Maybe_First_First, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq2 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Foldable_compose, &$Data_Foldable_unwrap, $foldMap2, &$Data_Maybe_First_First, $eq2, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__fn = function($a) use (&$Data_Foldable_compose, &$Data_Foldable_unwrap, $foldMap2, &$Data_Maybe_First_First, $eq2, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_compose)($Data_Foldable_unwrap, ($foldMap2)((function() use (&$Data_Maybe_First_First, $eq2, $a, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($v) use (&$Data_Maybe_First_First, $eq2, $a, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a__prime__ = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($Data_Maybe_First_First)((function() use ($eq2, $a, $a__prime__, &$Data_Maybe_Just, $b, &$Data_Maybe_Nothing) {
$__case_0 = ($eq2)($a, $a__prime__);
if (($__case_0 === true)) {
return ($Data_Maybe_Just)($b);
} else {
;
};
if (true) {
return $Data_Maybe_Nothing;
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
  $__fn = function($v) use (&$Data_Maybe_First_First, $eq2, $a, &$Data_Maybe_Just, &$Data_Maybe_Nothing, $__body, &$__fn) {
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
})()));
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

// Data_Foldable_surroundMap
$Data_Foldable_surroundMap = (function() use (&$Data_Foldable_foldMap, &$Data_Foldable_monoidEndo, &$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_Foldable_unwrap) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Foldable_monoidEndo, &$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_Foldable_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable, $Data_Foldable_monoidEndo);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_Foldable_unwrap, $foldMap2) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Monoid_Endo_Endo, &$Data_Foldable_unwrap, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append = ($Data_Semigroup_append)($dictSemigroup);
    $__res = (function() use (&$Data_Monoid_Endo_Endo, $append, &$Data_Foldable_unwrap, $foldMap2) {
  $__fn = function($d, $t = null, $f = null) use (&$Data_Monoid_Endo_Endo, $append, &$Data_Foldable_unwrap, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$joined = (function() use (&$Data_Monoid_Endo_Endo, $append, $d, $t) {
  $__fn = function($a) use (&$Data_Monoid_Endo_Endo, $append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Monoid_Endo_Endo)((function() use ($append, $d, $t, $a) {
  $__fn = function($m) use ($append, $d, $t, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append)($d, ($append)(($t)($a), $m));
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
    $__res = ($Data_Foldable_unwrap)(($foldMap2)($joined, $f), $d);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Foldable_surround
$Data_Foldable_surround = (function() use (&$Data_Foldable_surroundMap, &$Data_Foldable_identity) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_surroundMap, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$surroundMap1 = ($Data_Foldable_surroundMap)($dictFoldable);
    $__res = (function() use ($surroundMap1, &$Data_Foldable_identity) {
  $__fn = function($dictSemigroup) use ($surroundMap1, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$surroundMap2 = ($surroundMap1)($dictSemigroup);
    $__res = (function() use ($surroundMap2, &$Data_Foldable_identity) {
  $__fn = function($d) use ($surroundMap2, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($surroundMap2)($d, $Data_Foldable_identity);
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

// Data_Foldable_foldM
$Data_Foldable_foldM = (function() use (&$Data_Foldable_foldl, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Function_flip) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, $foldl2, &$Data_Function_flip) {
  $__fn = function($dictMonad) use (&$Control_Bind_bind, &$Prim_undefined, &$Control_Applicative_pure, $foldl2, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$bind = ($Control_Bind_bind)((($dictMonad)->Bind1)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($dictMonad)->Applicative0)($Prim_undefined));
    $__res = (function() use ($foldl2, $bind, &$Data_Function_flip, $pure) {
  $__fn = function($f, $b0 = null) use ($foldl2, $bind, &$Data_Function_flip, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldl2)((function() use ($bind, &$Data_Function_flip, $f) {
  $__fn = function($b, $a = null) use ($bind, &$Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($b, ($Data_Function_flip)($f, $a));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), ($pure)($b0));
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

// Data_Foldable_fold
$Data_Foldable_fold = (function() use (&$Data_Foldable_foldMap, &$Data_Foldable_identity) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = (function() use ($foldMap2, &$Data_Foldable_identity) {
  $__fn = function($dictMonoid) use ($foldMap2, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($foldMap2)($dictMonoid, $Data_Foldable_identity);
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

// Data_Foldable_findMap
$Data_Foldable_findMap = (function() use (&$Data_Foldable_foldl, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use ($foldl2, &$Data_Maybe_Nothing) {
  $__fn = function($p) use ($foldl2, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use ($p) {
  $__body = function($v, $v1) use ($p) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$x = $__case_1;
return ($p)($x);
} else {
;
};
    if (true) {
$r = $__case_0;
return $r;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($p, $__body, &$__fn) {
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
    $__res = ($foldl2)($go, $Data_Maybe_Nothing);
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

// Data_Foldable_find
$Data_Foldable_find = (function() use (&$Data_Foldable_foldl, &$Data_Maybe_Nothing) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldl, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldl2 = ($Data_Foldable_foldl)($dictFoldable);
    $__res = (function() use ($foldl2, &$Data_Maybe_Nothing) {
  $__fn = function($p) use ($foldl2, &$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$x = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if (true) {
$r = $__case_0;
return $r;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
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
    $__res = ($foldl2)($go, $Data_Maybe_Nothing);
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

// Data_Foldable_any
$Data_Foldable_any = (function() use (&$Data_Foldable_foldMap, &$Data_Foldable_alaF, &$Data_Monoid_Disj_Disj, &$Data_Monoid_Disj_monoidDisj) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Foldable_alaF, &$Data_Monoid_Disj_Disj, &$Data_Monoid_Disj_monoidDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = (function() use (&$Data_Foldable_alaF, &$Data_Monoid_Disj_Disj, $foldMap2, &$Data_Monoid_Disj_monoidDisj) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_Foldable_alaF, &$Data_Monoid_Disj_Disj, $foldMap2, &$Data_Monoid_Disj_monoidDisj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_alaF)($Data_Monoid_Disj_Disj, ($foldMap2)(($Data_Monoid_Disj_monoidDisj)($dictHeytingAlgebra)));
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

// Data_Foldable_elem
$Data_Foldable_elem = (function() use (&$Data_Foldable_any, &$Data_HeytingAlgebra_heytingAlgebraBoolean, &$Data_Foldable_compose, &$Data_Eq_eq) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_any, &$Data_HeytingAlgebra_heytingAlgebraBoolean, &$Data_Foldable_compose, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$any1 = ($Data_Foldable_any)($dictFoldable, $Data_HeytingAlgebra_heytingAlgebraBoolean);
    $__res = (function() use (&$Data_Foldable_compose, $any1, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Foldable_compose, $any1, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_compose)($any1, ($Data_Eq_eq)($dictEq));
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

// Data_Foldable_notElem
$Data_Foldable_notElem = (function() use (&$Data_Foldable_elem, &$Data_Foldable_compose, &$Data_Foldable_not) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_elem, &$Data_Foldable_compose, &$Data_Foldable_not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elem1 = ($Data_Foldable_elem)($dictFoldable);
    $__res = (function() use ($elem1, &$Data_Foldable_compose, &$Data_Foldable_not) {
  $__fn = function($dictEq) use ($elem1, &$Data_Foldable_compose, &$Data_Foldable_not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$elem2 = ($elem1)($dictEq);
    $__res = (function() use (&$Data_Foldable_compose, &$Data_Foldable_not, $elem2) {
  $__fn = function($x) use (&$Data_Foldable_compose, &$Data_Foldable_not, $elem2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_compose)($Data_Foldable_not, ($elem2)($x));
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

// Data_Foldable_or
$Data_Foldable_or = (function() use (&$Data_Foldable_any, &$Data_Foldable_identity) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_any, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$any1 = ($Data_Foldable_any)($dictFoldable);
    $__res = (function() use ($any1, &$Data_Foldable_identity) {
  $__fn = function($dictHeytingAlgebra) use ($any1, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($any1)($dictHeytingAlgebra, $Data_Foldable_identity);
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

// Data_Foldable_all
$Data_Foldable_all = (function() use (&$Data_Foldable_foldMap, &$Data_Foldable_alaF, &$Data_Monoid_Conj_Conj, &$Data_Monoid_Conj_monoidConj) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_foldMap, &$Data_Foldable_alaF, &$Data_Monoid_Conj_Conj, &$Data_Monoid_Conj_monoidConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$foldMap2 = ($Data_Foldable_foldMap)($dictFoldable);
    $__res = (function() use (&$Data_Foldable_alaF, &$Data_Monoid_Conj_Conj, $foldMap2, &$Data_Monoid_Conj_monoidConj) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_Foldable_alaF, &$Data_Monoid_Conj_Conj, $foldMap2, &$Data_Monoid_Conj_monoidConj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Foldable_alaF)($Data_Monoid_Conj_Conj, ($foldMap2)(($Data_Monoid_Conj_monoidConj)($dictHeytingAlgebra)));
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

// Data_Foldable_and
$Data_Foldable_and = (function() use (&$Data_Foldable_all, &$Data_Foldable_identity) {
  $__fn = function($dictFoldable) use (&$Data_Foldable_all, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$all1 = ($Data_Foldable_all)($dictFoldable);
    $__res = (function() use ($all1, &$Data_Foldable_identity) {
  $__fn = function($dictHeytingAlgebra) use ($all1, &$Data_Foldable_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($all1)($dictHeytingAlgebra, $Data_Foldable_identity);
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

