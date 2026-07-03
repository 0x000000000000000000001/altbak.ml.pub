<?php

namespace Control\Monad\ST\Internal;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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



$Control_Monad_ST_Internal_map_ = phpurs_uncurry2(function($f) { return function($a) use(&$f) { return function() use(&$f, &$a) { return $f($a()); }; }; });
$Control_Monad_ST_Internal_bind_ = phpurs_uncurry2(function($a) { return function($f) use(&$a) { return function() use(&$a, &$f) { return $f($a())(); }; }; });
$Control_Monad_ST_Internal_pure_ = function($a) { return function() use(&$a) { return $a; }; };
$Control_Monad_ST_Internal_new = function($val) { return function() use(&$val) { return (object)['value' => $val]; }; };
$Control_Monad_ST_Internal_read = function($ref) { return function() use(&$ref) { return $ref->value; }; };
$Control_Monad_ST_Internal_modifyImpl = phpurs_uncurry2(function($f) { return function($ref) use(&$f) { return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; }; }; });
$Control_Monad_ST_Internal_write = phpurs_uncurry2(function($val) { return function($ref) use(&$val) { return function() use(&$val, &$ref) { $ref->value = $val; return $val; }; }; });
$Control_Monad_ST_Internal_run = function($f) { return $f(); };
$Control_Monad_ST_Internal_while = phpurs_uncurry2(function($f) { return function($a) use(&$f) { return function() use(&$f, &$a) { while ($f()) { $a(); } return null; }; }; });
$Control_Monad_ST_Internal_for = phpurs_uncurry3(function($lo) { return function($hi) use(&$lo) { return function($f) use(&$lo, &$hi) { return function() use(&$lo, &$hi, &$f) { for ($i = $lo; $i < $hi; $i++) { $f($i)(); } return null; }; }; }; });
$Control_Monad_ST_Internal_foreach = phpurs_uncurry2(function($as) { return function($f) use(&$as) { return function() use(&$as, &$f) { foreach ($as as $a) { $f($a)(); } return null; }; }; });

// Control_Monad_ST_Internal_modify'
$Control_Monad_ST_Internal_modify__prime__ = $Control_Monad_ST_Internal_modifyImpl;

// Control_Monad_ST_Internal_modify
$Control_Monad_ST_Internal_modify = (function() use (&$Control_Monad_ST_Internal_modify__prime__) {
  $__fn = function($f) use (&$Control_Monad_ST_Internal_modify__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_modify__prime__)((function() use ($f) {
  $__fn = function($s) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$s__prime__ = ($f)($s);
    $__res = (object)["state" => $s__prime__, "value" => $s__prime__];
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

// Control_Monad_ST_Internal_functorST
$Control_Monad_ST_Internal_functorST = ($Data_Functor_Functor__dollar__Dict)((object)["map" => $Control_Monad_ST_Internal_map_]);

// Control_Monad_ST_Internal_map
$Control_Monad_ST_Internal_map = ($Data_Functor_map)($Control_Monad_ST_Internal_functorST);

// Control_Monad_ST_Internal_void
$Control_Monad_ST_Internal_void = ($Data_Functor_void)($Control_Monad_ST_Internal_functorST);

// Control_Monad_ST_Internal_monadST
$Control_Monad_ST_Internal_monadST = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Control_Monad_ST_Internal_applicativeST) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Internal_applicativeST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_ST_Internal_applicativeST;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Control_Monad_ST_Internal_bindST) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Internal_bindST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_ST_Internal_bindST;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_ST_Internal_bindST
$Control_Monad_ST_Internal_bindST = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => $Control_Monad_ST_Internal_bind_, "Apply0" => (function() use (&$Control_Monad_ST_Internal_applyST) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Internal_applyST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_ST_Internal_applyST;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_ST_Internal_applicativeST
$Control_Monad_ST_Internal_applicativeST = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Control_Monad_ST_Internal_pure_, "Apply0" => (function() use (&$Control_Monad_ST_Internal_applyST) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Internal_applyST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_ST_Internal_applyST;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_ST_Internal_applyST
$Control_Monad_ST_Internal_applyST = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Control_Monad_ap)($Control_Monad_ST_Internal_monadST), "Functor0" => (function() use (&$Control_Monad_ST_Internal_functorST) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Internal_functorST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_ST_Internal_functorST;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_ST_Internal_lift2
$Control_Monad_ST_Internal_lift2 = ($Control_Apply_lift2)($Control_Monad_ST_Internal_applyST);

// Control_Monad_ST_Internal_bind
$Control_Monad_ST_Internal_bind = ($Control_Bind_bind)($Control_Monad_ST_Internal_bindST);

// Control_Monad_ST_Internal_bindFlipped
$Control_Monad_ST_Internal_bindFlipped = ($Control_Bind_bindFlipped)($Control_Monad_ST_Internal_bindST);

// Control_Monad_ST_Internal_discard
$Control_Monad_ST_Internal_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Control_Monad_ST_Internal_bindST);

// Control_Monad_ST_Internal_pure
$Control_Monad_ST_Internal_pure = ($Control_Applicative_pure)($Control_Monad_ST_Internal_applicativeST);

// Control_Monad_ST_Internal_semigroupST
$Control_Monad_ST_Internal_semigroupST = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Control_Monad_ST_Internal_lift2, &$Data_Semigroup_append) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Control_Monad_ST_Internal_lift2, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($Control_Monad_ST_Internal_lift2)(($Data_Semigroup_append)($dictSemigroup))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_ST_Internal_monadRecST
$Control_Monad_ST_Internal_monadRecST = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Partial_Unsafe_unsafePartial, &$Prim_undefined, &$Control_Monad_ST_Internal_bind, &$Control_Monad_ST_Internal_bindFlipped, &$Control_Monad_ST_Internal_new, &$Control_Monad_ST_Internal_discard, &$Control_Monad_ST_Internal_while, &$Control_Monad_ST_Internal_map, &$Control_Monad_ST_Internal_read, &$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, &$Control_Monad_ST_Internal_pure, &$Data_Unit_unit) {
  $__fn = function($f, $a = null) use (&$Partial_Unsafe_unsafePartial, &$Prim_undefined, &$Control_Monad_ST_Internal_bind, &$Control_Monad_ST_Internal_bindFlipped, &$Control_Monad_ST_Internal_new, &$Control_Monad_ST_Internal_discard, &$Control_Monad_ST_Internal_while, &$Control_Monad_ST_Internal_map, &$Control_Monad_ST_Internal_read, &$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, &$Control_Monad_ST_Internal_pure, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$isLooping = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Loop")) {
return true;
} else {
;
};
    if (true) {
return false;
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
$fromDone = ($Partial_Unsafe_unsafePartial)((function() use (&$Prim_undefined) {
  $__fn = function($__dollar____unused, $v = null) use (&$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Done")) {
$b = ($__case_0)->values[0];
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($__dollar____unused);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($__dollar____unused);
  };
  return $__fn;
})())($Prim_undefined);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})());
    $__res = ($Control_Monad_ST_Internal_bind)(($Control_Monad_ST_Internal_bindFlipped)($Control_Monad_ST_Internal_new, ($f)($a)), (function() use (&$Control_Monad_ST_Internal_discard, &$Control_Monad_ST_Internal_while, &$Control_Monad_ST_Internal_map, $isLooping, &$Control_Monad_ST_Internal_read, &$Control_Monad_ST_Internal_bind, $f, &$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, &$Control_Monad_ST_Internal_pure, &$Data_Unit_unit, $fromDone) {
  $__fn = function($r) use (&$Control_Monad_ST_Internal_discard, &$Control_Monad_ST_Internal_while, &$Control_Monad_ST_Internal_map, $isLooping, &$Control_Monad_ST_Internal_read, &$Control_Monad_ST_Internal_bind, $f, &$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, &$Control_Monad_ST_Internal_pure, &$Data_Unit_unit, $fromDone, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_discard)(($Control_Monad_ST_Internal_while)(($Control_Monad_ST_Internal_map)($isLooping, ($Control_Monad_ST_Internal_read)($r)), ($Control_Monad_ST_Internal_bind)(($Control_Monad_ST_Internal_read)($r), (function() use (&$Control_Monad_ST_Internal_bind, $f, &$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, $r, &$Control_Monad_ST_Internal_pure, &$Data_Unit_unit) {
  $__body = function($v) use (&$Control_Monad_ST_Internal_bind, $f, &$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, $r, &$Control_Monad_ST_Internal_pure, &$Data_Unit_unit) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Loop")) {
$a__prime__ = ($__case_0)->values[0];
return ($Control_Monad_ST_Internal_bind)(($f)($a__prime__), (function() use (&$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, $r) {
  $__fn = function($e) use (&$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_void)(($Control_Monad_ST_Internal_write)($e, $r));
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
    if ((($__case_0)->tag === "Done")) {
return ($Control_Monad_ST_Internal_pure)($Data_Unit_unit);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Control_Monad_ST_Internal_bind, $f, &$Control_Monad_ST_Internal_void, &$Control_Monad_ST_Internal_write, $r, &$Control_Monad_ST_Internal_pure, &$Data_Unit_unit, $__body, &$__fn) {
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
})())), (function() use (&$Control_Monad_ST_Internal_map, $fromDone, &$Control_Monad_ST_Internal_read, $r) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Internal_map, $fromDone, &$Control_Monad_ST_Internal_read, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Control_Monad_ST_Internal_map)($fromDone, ($Control_Monad_ST_Internal_read)($r));
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
})());
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use (&$Control_Monad_ST_Internal_monadST) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_ST_Internal_monadST, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_ST_Internal_monadST;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_ST_Internal_monoidST
$Control_Monad_ST_Internal_monoidST = (function() use (&$Control_Monad_ST_Internal_semigroupST, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Control_Monad_ST_Internal_pure, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Control_Monad_ST_Internal_semigroupST, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Control_Monad_ST_Internal_pure, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupST1 = ($Control_Monad_ST_Internal_semigroupST)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Control_Monad_ST_Internal_pure)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupST1) {
  $__fn = function($__dollar____unused) use ($semigroupST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupST1;
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

