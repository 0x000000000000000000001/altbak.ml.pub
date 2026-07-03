<?php

namespace Effect\Aff;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Global/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Unsafe/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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





$Effect_Aff__pure = function($x) { return function() use(&$x) { return $x; }; };
$Effect_Aff__map = phpurs_uncurry2(function($f) { return function($aff) use(&$f) { return function() use(&$f, &$aff) { return $f($aff()); }; }; });
$Effect_Aff__bind = phpurs_uncurry2(function($aff) { return function($f) use(&$aff) { return function() use(&$aff, &$f) { return $f($aff())(); }; }; });
$Effect_Aff__liftEffect = function($eff) { return $eff; };
$Effect_Aff__makeFiber = function($util, $aff) { return function() use(&$aff) { $fiber = new \Fiber($aff); $fiber->start(); return (object)['run' => function() {}, 'join' => function($k) { return function() { return function(){}; }; }]; }; };
$Effect_Aff__fork = phpurs_uncurry2(function($immediate) { return function($aff) use(&$immediate) { return function() use(&$aff) { $fiber = new \Fiber($aff); \Revolt\EventLoop::queue(function() use(&$fiber) { $fiber->start(); }); return (object)['run' => function() {}, 'join' => function($k){ return function(){ return function(){}; }; }]; }; }; });
$Effect_Aff__delay = function($right, $ms) { return function() use(&$right, &$ms) { $fiber = \Fiber::getCurrent(); \Revolt\EventLoop::delay($ms / 1000, function() use(&$fiber, &$right) { if ($fiber) $fiber->resume(); }); if ($fiber) \Fiber::suspend(); return $right(null); }; };
$Effect_Aff__makeSupervisedFiber = $Effect_Aff__makeFiber;
$Effect_Aff__killAll = function($err, $sup, $cb) { return function() { return function(){}; }; };
$Effect_Aff_makeAff = function($k) { return function() use(&$k) { return $k(function($res){ return function(){}; })(); }; };
$Effect_Aff__throwError = function($err) { return function() use(&$err) { throw $err; }; };
$Effect_Aff__catchError = phpurs_uncurry2(function($aff) { return function($f) use(&$aff) { return function() use(&$aff, &$f) { try { return $aff(); } catch (\Throwable $e) { return $f($e)(); } }; }; });
$Effect_Aff_generalBracket = function($acq) { return function($cond) { return function($use) use(&$acq) { return function() use(&$acq, &$use) { $res = $acq(); return $use($res)(); }; }; }; };
$Effect_Aff__parAffMap = $Effect_Aff__map;
$Effect_Aff__parAffApply = phpurs_uncurry2(function($aff1) { return function($aff2) use(&$aff1) { return function() use(&$aff1, &$aff2) { return $aff1()($aff2()); }; }; });
$Effect_Aff__sequential = function($aff) { return $aff; };
$Effect_Aff__parAffAlt = phpurs_uncurry2(function($aff1) { return function($aff2) use(&$aff1) { return function() use(&$aff1, &$aff2) { try { return $aff1(); } catch (\Throwable $e) { return $aff2(); } }; }; });

// Effect_Aff_bind
$Effect_Aff_bind = ($Control_Bind_bind)($Effect_bindEffect);

// Effect_Aff_discard
$Effect_Aff_discard = ($Control_Bind_discard)($Control_Bind_discardUnit, $Effect_bindEffect);

// Effect_Aff_pure
$Effect_Aff_pure = ($Control_Applicative_pure)($Effect_applicativeEffect);

// Effect_Aff_compose
$Effect_Aff_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Effect_Aff_void
$Effect_Aff_void = ($Data_Functor_void)($Effect_functorEffect);

// Effect_Aff_map
$Effect_Aff_map = ($Data_Functor_map)($Effect_functorEffect);

// Effect_Aff_pure1
$Effect_Aff_pure1 = ($Control_Applicative_pure)($Data_Either_applicativeEither);

// Effect_Aff_composeFlipped
$Effect_Aff_composeFlipped = ($Control_Semigroupoid_composeFlipped)($Control_Semigroupoid_semigroupoidFn);

// Effect_Aff_Fiber
$Effect_Aff_Fiber = (function() {
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

// Effect_Aff_FFIUtil
$Effect_Aff_FFIUtil = (function() {
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

// Effect_Aff_Canceler
$Effect_Aff_Canceler = (function() {
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

// Effect_Aff_suspendAff
$Effect_Aff_suspendAff = ($Effect_Aff__fork)(false);

// Effect_Aff_newtypeCanceler
$Effect_Aff_newtypeCanceler = ($Data_Newtype_Newtype__dollar__Dict)((object)["Coercible0" => (function() use (&$Prim_undefined) {
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

// Effect_Aff_functorParAff
$Effect_Aff_functorParAff = ($Data_Functor_Functor__dollar__Dict)((object)["map" => $Effect_Aff__parAffMap]);

// Effect_Aff_functorAff
$Effect_Aff_functorAff = ($Data_Functor_Functor__dollar__Dict)((object)["map" => $Effect_Aff__map]);

// Effect_Aff_map1
$Effect_Aff_map1 = ($Data_Functor_map)($Effect_Aff_functorAff);

// Effect_Aff_forkAff
$Effect_Aff_forkAff = ($Effect_Aff__fork)(true);

// Effect_Aff_ffiUtil
$Effect_Aff_ffiUtil = (function() use (&$Partial_Unsafe_unsafeCrashWith, &$Effect_Aff_FFIUtil, &$Data_Either_Left, &$Data_Either_Right) {
$unsafeFromRight = (function() use (&$Partial_Unsafe_unsafeCrashWith) {
  $__body = function($v) use (&$Partial_Unsafe_unsafeCrashWith) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Right")) {
$a = ($__case_0)->values[0];
return $a;
} else {
;
};
    if ((($__case_0)->tag === "Left")) {
return ($Partial_Unsafe_unsafeCrashWith)("unsafeFromRight: Left");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Partial_Unsafe_unsafeCrashWith, $__body, &$__fn) {
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
$unsafeFromLeft = (function() use (&$Partial_Unsafe_unsafeCrashWith) {
  $__body = function($v) use (&$Partial_Unsafe_unsafeCrashWith) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$a = ($__case_0)->values[0];
return $a;
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
return ($Partial_Unsafe_unsafeCrashWith)("unsafeFromLeft: Right");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Partial_Unsafe_unsafeCrashWith, $__body, &$__fn) {
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
$isLeft = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
return true;
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
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
return ($Effect_Aff_FFIUtil)((object)["isLeft" => $isLeft, "fromLeft" => $unsafeFromLeft, "fromRight" => $unsafeFromRight, "left" => $Data_Either_Left, "right" => $Data_Either_Right]);
})();

// Effect_Aff_makeFiber
$Effect_Aff_makeFiber = (function() use (&$Data_Function_Uncurried_runFn2, &$Effect_Aff__makeFiber, &$Effect_Aff_ffiUtil) {
  $__fn = function($aff) use (&$Data_Function_Uncurried_runFn2, &$Effect_Aff__makeFiber, &$Effect_Aff_ffiUtil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn2)($Effect_Aff__makeFiber, $Effect_Aff_ffiUtil, $aff);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_launchAff
$Effect_Aff_launchAff = (function() use (&$Effect_Aff_bind, &$Effect_Aff_makeFiber, &$Effect_Aff_discard, &$Effect_Aff_pure) {
  $__fn = function($aff) use (&$Effect_Aff_bind, &$Effect_Aff_makeFiber, &$Effect_Aff_discard, &$Effect_Aff_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_bind)(($Effect_Aff_makeFiber)($aff), (function() use (&$Effect_Aff_discard, &$Effect_Aff_pure) {
  $__fn = function($fiber) use (&$Effect_Aff_discard, &$Effect_Aff_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_discard)((function() use ($fiber) {
$__case_0 = $fiber;
if (true) {
$f = $__case_0;
return ($f)->run;
} else {
;
};
throw new \Exception("Pattern match failure");
})(), (function() use (&$Effect_Aff_pure, $fiber) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_pure, $fiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_pure)($fiber);
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_launchAff_
$Effect_Aff_launchAff_ = ($Effect_Aff_compose)($Effect_Aff_void, $Effect_Aff_launchAff);

// Effect_Aff_launchSuspendedAff
$Effect_Aff_launchSuspendedAff = $Effect_Aff_makeFiber;

// Effect_Aff_delay
$Effect_Aff_delay = (function() use (&$Data_Function_Uncurried_runFn2, &$Effect_Aff__delay, &$Data_Either_Right) {
  $__body = function($v) use (&$Data_Function_Uncurried_runFn2, &$Effect_Aff__delay, &$Data_Either_Right) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($Data_Function_Uncurried_runFn2)($Effect_Aff__delay, $Data_Either_Right, $n);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Function_Uncurried_runFn2, &$Effect_Aff__delay, &$Data_Either_Right, $__body, &$__fn) {
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

// Effect_Aff_bracket
$Effect_Aff_bracket = (function() use (&$Effect_Aff_generalBracket, &$Data_Function_const) {
  $__fn = function($acquire, $completed = null) use (&$Effect_Aff_generalBracket, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_generalBracket)($acquire, (object)["killed" => ($Data_Function_const)($completed), "failed" => ($Data_Function_const)($completed), "completed" => ($Data_Function_const)($completed)]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_applyParAff
$Effect_Aff_applyParAff = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => $Effect_Aff__parAffApply, "Functor0" => (function() use (&$Effect_Aff_functorParAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_functorParAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_functorParAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_lift2
$Effect_Aff_lift2 = ($Control_Apply_lift2)($Effect_Aff_applyParAff);

// Effect_Aff_semigroupParAff
$Effect_Aff_semigroupParAff = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Aff_lift2, &$Data_Semigroup_append) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Aff_lift2, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($Effect_Aff_lift2)(($Data_Semigroup_append)($dictSemigroup))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_monadAff
$Effect_Aff_monadAff = ($Control_Monad_Monad__dollar__Dict)((object)["Applicative0" => (function() use (&$Effect_Aff_applicativeAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applicativeAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applicativeAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use (&$Effect_Aff_bindAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_bindAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_bindAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_bindAff
$Effect_Aff_bindAff = ($Control_Bind_Bind__dollar__Dict)((object)["bind" => $Effect_Aff__bind, "Apply0" => (function() use (&$Effect_Aff_applyAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applyAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applyAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applicativeAff
$Effect_Aff_applicativeAff = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => $Effect_Aff__pure, "Apply0" => (function() use (&$Effect_Aff_applyAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applyAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applyAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applyAff
$Effect_Aff_applyAff = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => ($Control_Monad_ap)($Effect_Aff_monadAff), "Functor0" => (function() use (&$Effect_Aff_functorAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_functorAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_functorAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_pure2
$Effect_Aff_pure2 = ($Control_Applicative_pure)($Effect_Aff_applicativeAff);

// Effect_Aff_bind1
$Effect_Aff_bind1 = ($Control_Bind_bind)($Effect_Aff_bindAff);

// Effect_Aff_lift21
$Effect_Aff_lift21 = ($Control_Apply_lift2)($Effect_Aff_applyAff);

// Effect_Aff_apply
$Effect_Aff_apply = ($Control_Apply_apply)($Effect_Aff_applyAff);

// Effect_Aff_bindFlipped
$Effect_Aff_bindFlipped = ($Control_Bind_bindFlipped)($Effect_Aff_bindAff);

// Effect_Aff_cancelWith
$Effect_Aff_cancelWith = (function() use (&$Effect_Aff_generalBracket, &$Effect_Aff_pure2, &$Data_Unit_unit, &$Data_Function_const) {
  $__body = function($aff, $v) use (&$Effect_Aff_generalBracket, &$Effect_Aff_pure2, &$Data_Unit_unit, &$Data_Function_const) {
    $__case_0 = $aff;
    $__case_1 = $v;
    if (true) {
$aff1 = $__case_0;
$cancel = $__case_1;
return ($Effect_Aff_generalBracket)(($Effect_Aff_pure2)($Data_Unit_unit), (object)["killed" => (function() use ($cancel) {
  $__fn = function($e, $v1 = null) use ($cancel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($cancel)($e);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "failed" => ($Data_Function_const)($Effect_Aff_pure2), "completed" => ($Data_Function_const)($Effect_Aff_pure2)], ($Data_Function_const)($aff1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($aff, $v = null) use (&$Effect_Aff_generalBracket, &$Effect_Aff_pure2, &$Data_Unit_unit, &$Data_Function_const, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($aff, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($aff, $v);
  };
  return $__fn;
})();

// Effect_Aff_finally
$Effect_Aff_finally = (function() use (&$Effect_Aff_bracket, &$Effect_Aff_pure2, &$Data_Unit_unit, &$Data_Function_const) {
  $__fn = function($fin, $a = null) use (&$Effect_Aff_bracket, &$Effect_Aff_pure2, &$Data_Unit_unit, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_bracket)(($Effect_Aff_pure2)($Data_Unit_unit), ($Data_Function_const)($fin), ($Data_Function_const)($a));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_invincible
$Effect_Aff_invincible = (function() use (&$Effect_Aff_bracket, &$Data_Function_const, &$Effect_Aff_pure2, &$Data_Unit_unit) {
  $__fn = function($a) use (&$Effect_Aff_bracket, &$Data_Function_const, &$Effect_Aff_pure2, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_bracket)($a, ($Data_Function_const)(($Effect_Aff_pure2)($Data_Unit_unit)), $Effect_Aff_pure2);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_lazyAff
$Effect_Aff_lazyAff = ($Control_Lazy_Lazy__dollar__Dict)((object)["defer" => (function() use (&$Effect_Aff_bind1, &$Effect_Aff_pure2, &$Data_Unit_unit) {
  $__fn = function($f) use (&$Effect_Aff_bind1, &$Effect_Aff_pure2, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_bind1)(($Effect_Aff_pure2)($Data_Unit_unit), $f);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_parallelAff
$Effect_Aff_parallelAff = ($Control_Parallel_Class_Parallel__dollar__Dict)((object)["parallel" => $Unsafe_Coerce_unsafeCoerce, "sequential" => $Effect_Aff__sequential, "Apply0" => (function() use (&$Effect_Aff_applyAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applyAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applyAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply1" => (function() use (&$Effect_Aff_applyParAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applyParAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applyParAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_parallel
$Effect_Aff_parallel = ($Control_Parallel_Class_parallel)($Effect_Aff_parallelAff);

// Effect_Aff_applicativeParAff
$Effect_Aff_applicativeParAff = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => ($Effect_Aff_compose)($Effect_Aff_parallel, $Effect_Aff_pure2), "Apply0" => (function() use (&$Effect_Aff_applyParAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applyParAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applyParAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_pure3
$Effect_Aff_pure3 = ($Control_Applicative_pure)($Effect_Aff_applicativeParAff);

// Effect_Aff_parSequence_
$Effect_Aff_parSequence_ = ($Control_Parallel_parSequence_)($Effect_Aff_parallelAff, $Effect_Aff_applicativeParAff, $Data_Foldable_foldableArray);

// Effect_Aff_monoidParAff
$Effect_Aff_monoidParAff = (function() use (&$Effect_Aff_semigroupParAff, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Aff_pure3, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Effect_Aff_semigroupParAff, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Aff_pure3, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupParAff1 = ($Effect_Aff_semigroupParAff)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Aff_pure3)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupParAff1) {
  $__fn = function($__dollar____unused) use ($semigroupParAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupParAff1;
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

// Effect_Aff_semigroupCanceler
$Effect_Aff_semigroupCanceler = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Effect_Aff_Canceler, &$Effect_Aff_parSequence_) {
  $__body = function($v, $v1) use (&$Effect_Aff_Canceler, &$Effect_Aff_parSequence_) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return ($Effect_Aff_Canceler)((function() use (&$Effect_Aff_parSequence_, $c1, $c2) {
  $__fn = function($err) use (&$Effect_Aff_parSequence_, $c1, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_parSequence_)([($c1)($err), ($c2)($err)]);
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
  $__fn = function($v, $v1 = null) use (&$Effect_Aff_Canceler, &$Effect_Aff_parSequence_, $__body, &$__fn) {
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

// Effect_Aff_semigroupAff
$Effect_Aff_semigroupAff = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Aff_lift21, &$Data_Semigroup_append) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Effect_Aff_lift21, &$Data_Semigroup_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($Effect_Aff_lift21)(($Data_Semigroup_append)($dictSemigroup))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_monadEffectAff
$Effect_Aff_monadEffectAff = ($Effect_Class_MonadEffect__dollar__Dict)((object)["liftEffect" => $Effect_Aff__liftEffect, "Monad0" => (function() use (&$Effect_Aff_monadAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_monadAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_monadAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_liftEffect
$Effect_Aff_liftEffect = ($Effect_Class_liftEffect)($Effect_Aff_monadEffectAff);

// Effect_Aff_effectCanceler
$Effect_Aff_effectCanceler = ($Effect_Aff_compose)($Effect_Aff_Canceler, ($Effect_Aff_compose)($Data_Function_const, $Effect_Aff_liftEffect));

// Effect_Aff_joinFiber
$Effect_Aff_joinFiber = (function() use (&$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler) {
  $__body = function($v) use (&$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler) {
    $__case_0 = $v;
    if (true) {
$t = $__case_0;
return ($Effect_Aff_makeAff)((function() use (&$Effect_Aff_map, &$Effect_Aff_effectCanceler, $t) {
  $__fn = function($k) use (&$Effect_Aff_map, &$Effect_Aff_effectCanceler, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_map)($Effect_Aff_effectCanceler, (($t)->join)($k));
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
  $__fn = function($v) use (&$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler, $__body, &$__fn) {
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

// Effect_Aff_functorFiber
$Effect_Aff_functorFiber = ($Data_Functor_Functor__dollar__Dict)((object)["map" => (function() use (&$Effect_Unsafe_unsafePerformEffect, &$Effect_Aff_makeFiber, &$Effect_Aff_map1, &$Effect_Aff_joinFiber) {
  $__fn = function($f, $t = null) use (&$Effect_Unsafe_unsafePerformEffect, &$Effect_Aff_makeFiber, &$Effect_Aff_map1, &$Effect_Aff_joinFiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Unsafe_unsafePerformEffect)(($Effect_Aff_makeFiber)(($Effect_Aff_map1)($f, ($Effect_Aff_joinFiber)($t))));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applyFiber
$Effect_Aff_applyFiber = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Effect_Unsafe_unsafePerformEffect, &$Effect_Aff_makeFiber, &$Effect_Aff_apply, &$Effect_Aff_joinFiber) {
  $__fn = function($t1, $t2 = null) use (&$Effect_Unsafe_unsafePerformEffect, &$Effect_Aff_makeFiber, &$Effect_Aff_apply, &$Effect_Aff_joinFiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Unsafe_unsafePerformEffect)(($Effect_Aff_makeFiber)(($Effect_Aff_apply)(($Effect_Aff_joinFiber)($t1), ($Effect_Aff_joinFiber)($t2))));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Effect_Aff_functorFiber) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_functorFiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_functorFiber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applicativeFiber
$Effect_Aff_applicativeFiber = ($Control_Applicative_Applicative__dollar__Dict)((object)["pure" => (function() use (&$Effect_Unsafe_unsafePerformEffect, &$Effect_Aff_makeFiber, &$Effect_Aff_pure2) {
  $__fn = function($a) use (&$Effect_Unsafe_unsafePerformEffect, &$Effect_Aff_makeFiber, &$Effect_Aff_pure2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Unsafe_unsafePerformEffect)(($Effect_Aff_makeFiber)(($Effect_Aff_pure2)($a)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use (&$Effect_Aff_applyFiber) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applyFiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applyFiber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_killFiber
$Effect_Aff_killFiber = (function() use (&$Effect_Aff_bind1, &$Effect_Aff_liftEffect, &$Effect_Aff_void, &$Data_Function_Uncurried_runFn2, &$Data_Function_const, &$Effect_Aff_pure, &$Data_Unit_unit, &$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler) {
  $__body = function($e, $v) use (&$Effect_Aff_bind1, &$Effect_Aff_liftEffect, &$Effect_Aff_void, &$Data_Function_Uncurried_runFn2, &$Data_Function_const, &$Effect_Aff_pure, &$Data_Unit_unit, &$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler) {
    $__case_0 = $e;
    $__case_1 = $v;
    if (true) {
$e1 = $__case_0;
$t = $__case_1;
return ($Effect_Aff_bind1)(($Effect_Aff_liftEffect)(($t)->isSuspended), (function() use (&$Effect_Aff_liftEffect, &$Effect_Aff_void, &$Data_Function_Uncurried_runFn2, $t, $e1, &$Data_Function_const, &$Effect_Aff_pure, &$Data_Unit_unit, &$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler) {
  $__body = function($suspended) use (&$Effect_Aff_liftEffect, &$Effect_Aff_void, &$Data_Function_Uncurried_runFn2, $t, $e1, &$Data_Function_const, &$Effect_Aff_pure, &$Data_Unit_unit, &$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler) {
    $__case_0 = $suspended;
    if (($__case_0 === true)) {
return ($Effect_Aff_liftEffect)(($Effect_Aff_void)(($Data_Function_Uncurried_runFn2)(($t)->kill, $e1, ($Data_Function_const)(($Effect_Aff_pure)($Data_Unit_unit)))));
} else {
;
};
    if (true) {
return ($Effect_Aff_makeAff)((function() use (&$Effect_Aff_map, &$Effect_Aff_effectCanceler, &$Data_Function_Uncurried_runFn2, $t, $e1) {
  $__fn = function($k) use (&$Effect_Aff_map, &$Effect_Aff_effectCanceler, &$Data_Function_Uncurried_runFn2, $t, $e1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_map)($Effect_Aff_effectCanceler, ($Data_Function_Uncurried_runFn2)(($t)->kill, $e1, $k));
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
  $__fn = function($suspended) use (&$Effect_Aff_liftEffect, &$Effect_Aff_void, &$Data_Function_Uncurried_runFn2, $t, $e1, &$Data_Function_const, &$Effect_Aff_pure, &$Data_Unit_unit, &$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($suspended);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($suspended);
  };
  return $__fn;
})());
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($e, $v = null) use (&$Effect_Aff_bind1, &$Effect_Aff_liftEffect, &$Effect_Aff_void, &$Data_Function_Uncurried_runFn2, &$Data_Function_const, &$Effect_Aff_pure, &$Data_Unit_unit, &$Effect_Aff_makeAff, &$Effect_Aff_map, &$Effect_Aff_effectCanceler, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($e, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($e, $v);
  };
  return $__fn;
})();

// Effect_Aff_fiberCanceler
$Effect_Aff_fiberCanceler = ($Effect_Aff_compose)($Effect_Aff_Canceler, ($Data_Function_flip)($Effect_Aff_killFiber));

// Effect_Aff_supervise
$Effect_Aff_supervise = (function() use (&$Effect_Exception_error, &$Effect_Aff_makeAff, &$Data_Function_Uncurried_runFn3, &$Effect_Aff__killAll, &$Effect_Aff_pure1, &$Data_Unit_unit, &$Effect_Aff_bind, &$Data_Function_Uncurried_runFn2, &$Effect_Aff__makeSupervisedFiber, &$Effect_Aff_ffiUtil, &$Effect_Aff_discard, &$Effect_Aff_pure, &$Effect_Aff_generalBracket, &$Effect_Aff_liftEffect, &$Effect_Aff_parSequence_, &$Effect_Aff_killFiber, &$Data_Function_const, &$Effect_Aff_compose, &$Effect_Aff_joinFiber) {
  $__fn = function($aff) use (&$Effect_Exception_error, &$Effect_Aff_makeAff, &$Data_Function_Uncurried_runFn3, &$Effect_Aff__killAll, &$Effect_Aff_pure1, &$Data_Unit_unit, &$Effect_Aff_bind, &$Data_Function_Uncurried_runFn2, &$Effect_Aff__makeSupervisedFiber, &$Effect_Aff_ffiUtil, &$Effect_Aff_discard, &$Effect_Aff_pure, &$Effect_Aff_generalBracket, &$Effect_Aff_liftEffect, &$Effect_Aff_parSequence_, &$Effect_Aff_killFiber, &$Data_Function_const, &$Effect_Aff_compose, &$Effect_Aff_joinFiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$killError = ($Effect_Exception_error)("[Aff] Child fiber outlived parent");
$killAll = (function() use (&$Effect_Aff_makeAff, &$Data_Function_Uncurried_runFn3, &$Effect_Aff__killAll, &$Effect_Aff_pure1, &$Data_Unit_unit) {
  $__fn = function($err, $sup = null) use (&$Effect_Aff_makeAff, &$Data_Function_Uncurried_runFn3, &$Effect_Aff__killAll, &$Effect_Aff_pure1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_makeAff)((function() use (&$Data_Function_Uncurried_runFn3, &$Effect_Aff__killAll, $err, $sup, &$Effect_Aff_pure1, &$Data_Unit_unit) {
  $__fn = function($k) use (&$Data_Function_Uncurried_runFn3, &$Effect_Aff__killAll, $err, $sup, &$Effect_Aff_pure1, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Function_Uncurried_runFn3)($Effect_Aff__killAll, $err, ($sup)->supervisor, ($k)(($Effect_Aff_pure1)($Data_Unit_unit)));
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
})();
$acquire = ($Effect_Aff_bind)(($Data_Function_Uncurried_runFn2)($Effect_Aff__makeSupervisedFiber, $Effect_Aff_ffiUtil, $aff), (function() use (&$Effect_Aff_discard, &$Effect_Aff_pure) {
  $__fn = function($sup) use (&$Effect_Aff_discard, &$Effect_Aff_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_discard)((function() use ($sup) {
$__case_0 = ($sup)->fiber;
if (true) {
$f = $__case_0;
return ($f)->run;
} else {
;
};
throw new \Exception("Pattern match failure");
})(), (function() use (&$Effect_Aff_pure, $sup) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_pure, $sup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_pure)($sup);
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
    $__res = ($Effect_Aff_generalBracket)(($Effect_Aff_liftEffect)($acquire), (object)["killed" => (function() use (&$Effect_Aff_parSequence_, &$Effect_Aff_killFiber, $killAll) {
  $__fn = function($err, $sup = null) use (&$Effect_Aff_parSequence_, &$Effect_Aff_killFiber, $killAll, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_parSequence_)([($Effect_Aff_killFiber)($err, ($sup)->fiber), ($killAll)($err, $sup)]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "failed" => ($Data_Function_const)(($killAll)($killError)), "completed" => ($Data_Function_const)(($killAll)($killError))], ($Effect_Aff_compose)($Effect_Aff_joinFiber, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($v)->fiber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
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

// Effect_Aff_monadSTAff
$Effect_Aff_monadSTAff = ($Control_Monad_ST_Class_MonadST__dollar__Dict)((object)["liftST" => ($Effect_Aff_composeFlipped)(($Control_Monad_ST_Class_liftST)($Control_Monad_ST_Class_monadSTEffect), $Effect_Aff_liftEffect), "Monad0" => (function() use (&$Effect_Aff_monadAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_monadAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_monadAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_monadThrowAff
$Effect_Aff_monadThrowAff = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => $Effect_Aff__throwError, "Monad0" => (function() use (&$Effect_Aff_monadAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_monadAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_monadAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_monadErrorAff
$Effect_Aff_monadErrorAff = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => $Effect_Aff__catchError, "MonadThrow0" => (function() use (&$Effect_Aff_monadThrowAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_monadThrowAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_monadThrowAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_try
$Effect_Aff_try = ($Control_Monad_Error_Class_try)($Effect_Aff_monadErrorAff);

// Effect_Aff_catchError
$Effect_Aff_catchError = ($Control_Monad_Error_Class_catchError)($Effect_Aff_monadErrorAff);

// Effect_Aff_attempt
$Effect_Aff_attempt = $Effect_Aff_try;

// Effect_Aff_runAff
$Effect_Aff_runAff = (function() use (&$Effect_Aff_launchAff, &$Effect_Aff_bindFlipped, &$Effect_Aff_compose, &$Effect_Aff_liftEffect, &$Effect_Aff_try) {
  $__fn = function($k, $aff = null) use (&$Effect_Aff_launchAff, &$Effect_Aff_bindFlipped, &$Effect_Aff_compose, &$Effect_Aff_liftEffect, &$Effect_Aff_try, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_launchAff)(($Effect_Aff_bindFlipped)(($Effect_Aff_compose)($Effect_Aff_liftEffect, $k), ($Effect_Aff_try)($aff)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_runAff_
$Effect_Aff_runAff_ = (function() use (&$Effect_Aff_void, &$Effect_Aff_runAff) {
  $__fn = function($k, $aff = null) use (&$Effect_Aff_void, &$Effect_Aff_runAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_void)(($Effect_Aff_runAff)($k, $aff));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_runSuspendedAff
$Effect_Aff_runSuspendedAff = (function() use (&$Effect_Aff_launchSuspendedAff, &$Effect_Aff_bindFlipped, &$Effect_Aff_compose, &$Effect_Aff_liftEffect, &$Effect_Aff_try) {
  $__fn = function($k, $aff = null) use (&$Effect_Aff_launchSuspendedAff, &$Effect_Aff_bindFlipped, &$Effect_Aff_compose, &$Effect_Aff_liftEffect, &$Effect_Aff_try, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_launchSuspendedAff)(($Effect_Aff_bindFlipped)(($Effect_Aff_compose)($Effect_Aff_liftEffect, $k), ($Effect_Aff_try)($aff)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Effect_Aff_monadRecAff
$Effect_Aff_monadRecAff = ($Control_Monad_Rec_Class_MonadRec__dollar__Dict)((object)["tailRecM" => (function() use (&$Effect_Aff_bind1, &$Effect_Aff_pure2) {
  $__fn = function($k) use (&$Effect_Aff_bind1, &$Effect_Aff_pure2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$go = (function() use (&$Effect_Aff_bind1, $k, &$Effect_Aff_pure2, &$go) {
  $__fn = function($a) use (&$Effect_Aff_bind1, $k, &$Effect_Aff_pure2, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($a) use (&$Effect_Aff_bind1, $k, &$Effect_Aff_pure2, &$go) {
while (true) {
return ($Effect_Aff_bind1)(($k)($a), (function() use (&$Effect_Aff_pure2, &$go) {
  $__body = function($res) use (&$Effect_Aff_pure2, &$go) {
    $__case_0 = $res;
    if ((($__case_0)->tag === "Done")) {
$r = ($__case_0)->values[0];
return ($Effect_Aff_pure2)($r);
} else {
;
};
    if ((($__case_0)->tag === "Loop")) {
$b = ($__case_0)->values[0];
return ($go)($b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($res) use (&$Effect_Aff_pure2, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($res);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($res);
  };
  return $__fn;
})());
}
})($a);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();
    $__res = $go;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use (&$Effect_Aff_monadAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_monadAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_monadAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_monoidAff
$Effect_Aff_monoidAff = (function() use (&$Effect_Aff_semigroupAff, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Aff_pure2, &$Data_Monoid_mempty) {
  $__fn = function($dictMonoid) use (&$Effect_Aff_semigroupAff, &$Prim_undefined, &$Data_Monoid_Monoid__dollar__Dict, &$Effect_Aff_pure2, &$Data_Monoid_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semigroupAff1 = ($Effect_Aff_semigroupAff)((($dictMonoid)->Semigroup0)($Prim_undefined));
    $__res = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => ($Effect_Aff_pure2)(($Data_Monoid_mempty)($dictMonoid)), "Semigroup0" => (function() use ($semigroupAff1) {
  $__fn = function($__dollar____unused) use ($semigroupAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semigroupAff1;
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

// Effect_Aff_nonCanceler
$Effect_Aff_nonCanceler = ($Effect_Aff_Canceler)(($Data_Function_const)(($Effect_Aff_pure2)($Data_Unit_unit)));

// Effect_Aff_monoidCanceler
$Effect_Aff_monoidCanceler = ($Data_Monoid_Monoid__dollar__Dict)((object)["mempty" => $Effect_Aff_nonCanceler, "Semigroup0" => (function() use (&$Effect_Aff_semigroupCanceler) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_semigroupCanceler, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_semigroupCanceler;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_mempty
$Effect_Aff_mempty = ($Data_Monoid_mempty)($Effect_Aff_monoidCanceler);

// Effect_Aff_never
$Effect_Aff_never = ($Effect_Aff_makeAff)((function() use (&$Effect_Aff_pure, &$Effect_Aff_mempty) {
  $__fn = function($v) use (&$Effect_Aff_pure, &$Effect_Aff_mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_pure)($Effect_Aff_mempty);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());

// Effect_Aff_apathize
$Effect_Aff_apathize = ($Effect_Aff_composeFlipped)($Effect_Aff_attempt, ($Effect_Aff_map1)(($Data_Function_const)($Data_Unit_unit)));

// Effect_Aff_altParAff
$Effect_Aff_altParAff = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => $Effect_Aff__parAffAlt, "Functor0" => (function() use (&$Effect_Aff_functorParAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_functorParAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_functorParAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_altAff
$Effect_Aff_altAff = ($Control_Alt_Alt__dollar__Dict)((object)["alt" => (function() use (&$Effect_Aff_catchError, &$Data_Function_const) {
  $__fn = function($a1, $a2 = null) use (&$Effect_Aff_catchError, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Effect_Aff_catchError)($a1, ($Data_Function_const)($a2));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Effect_Aff_functorAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_functorAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_functorAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_plusAff
$Effect_Aff_plusAff = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Control_Monad_Error_Class_throwError)($Effect_Aff_monadThrowAff, ($Effect_Exception_error)("Always fails")), "Alt0" => (function() use (&$Effect_Aff_altAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_altAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_altAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_plusParAff
$Effect_Aff_plusParAff = ($Control_Plus_Plus__dollar__Dict)((object)["empty" => ($Effect_Aff_parallel)(($Control_Plus_empty)($Effect_Aff_plusAff)), "Alt0" => (function() use (&$Effect_Aff_altParAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_altParAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_altParAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_alternativeParAff
$Effect_Aff_alternativeParAff = ($Control_Alternative_Alternative__dollar__Dict)((object)["Applicative0" => (function() use (&$Effect_Aff_applicativeParAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_applicativeParAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_applicativeParAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use (&$Effect_Aff_plusParAff) {
  $__fn = function($__dollar____unused) use (&$Effect_Aff_plusParAff, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_Aff_plusParAff;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

