<?php

namespace Control\Monad\Error\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Control_Monad_Error_Class_compose
$Control_Monad_Error_Class_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Control_Monad_Error_Class_discard
$Control_Monad_Error_Class_discard = ($Control_Bind_discard)($Control_Bind_discardUnit);

// Control_Monad_Error_Class_MonadThrow$Dict
$Control_Monad_Error_Class_MonadThrow__dollar__Dict = (function() {
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

// Control_Monad_Error_Class_MonadError$Dict
$Control_Monad_Error_Class_MonadError__dollar__Dict = (function() {
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

// Control_Monad_Error_Class_throwError
$Control_Monad_Error_Class_throwError = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->throwError;
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

// Control_Monad_Error_Class_monadThrowMaybe
$Control_Monad_Error_Class_monadThrowMaybe = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => ($Data_Function_const)($Data_Maybe_Nothing), "Monad0" => (function() use (&$Data_Maybe_monadMaybe) {
  $__fn = function($__dollar____unused) use (&$Data_Maybe_monadMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_monadMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadThrowEither
$Control_Monad_Error_Class_monadThrowEither = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => $Data_Either_Left, "Monad0" => (function() use (&$Data_Either_monadEither) {
  $__fn = function($__dollar____unused) use (&$Data_Either_monadEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Either_monadEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadThrowEffect
$Control_Monad_Error_Class_monadThrowEffect = ($Control_Monad_Error_Class_MonadThrow__dollar__Dict)((object)["throwError" => $Effect_Exception_throwException, "Monad0" => (function() use (&$Effect_monadEffect) {
  $__fn = function($__dollar____unused) use (&$Effect_monadEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Effect_monadEffect;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadErrorMaybe
$Control_Monad_Error_Class_monadErrorMaybe = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Data_Unit_unit, &$Data_Maybe_Just) {
  $__body = function($v, $v1) use (&$Data_Unit_unit, &$Data_Maybe_Just) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
$f = $__case_1;
return ($f)($Data_Unit_unit);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($Data_Maybe_Just)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Unit_unit, &$Data_Maybe_Just, $__body, &$__fn) {
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
})(), "MonadThrow0" => (function() use (&$Control_Monad_Error_Class_monadThrowMaybe) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Error_Class_monadThrowMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_Error_Class_monadThrowMaybe;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadErrorEither
$Control_Monad_Error_Class_monadErrorEither = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => (function() use (&$Data_Either_Right) {
  $__body = function($v, $v1) use (&$Data_Either_Right) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
$h = $__case_1;
return ($h)($e);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$x = ($__case_0)->values[0];
return ($Data_Either_Right)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Either_Right, $__body, &$__fn) {
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
})(), "MonadThrow0" => (function() use (&$Control_Monad_Error_Class_monadThrowEither) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Error_Class_monadThrowEither, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_Error_Class_monadThrowEither;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_monadErrorEffect
$Control_Monad_Error_Class_monadErrorEffect = ($Control_Monad_Error_Class_MonadError__dollar__Dict)((object)["catchError" => ($Data_Function_flip)($Effect_Exception_catchException), "MonadThrow0" => (function() use (&$Control_Monad_Error_Class_monadThrowEffect) {
  $__fn = function($__dollar____unused) use (&$Control_Monad_Error_Class_monadThrowEffect, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Control_Monad_Error_Class_monadThrowEffect;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Error_Class_liftMaybe
$Control_Monad_Error_Class_liftMaybe = (function() use (&$Control_Monad_Error_Class_throwError, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Maybe_maybe) {
  $__fn = function($dictMonadThrow) use (&$Control_Monad_Error_Class_throwError, &$Control_Applicative_pure, &$Prim_undefined, &$Data_Maybe_maybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$throwError1 = ($Control_Monad_Error_Class_throwError)($dictMonadThrow);
$pure = ($Control_Applicative_pure)((((($dictMonadThrow)->Monad0)($Prim_undefined))->Applicative0)($Prim_undefined));
    $__res = (function() use (&$Data_Maybe_maybe, $throwError1, $pure) {
  $__fn = function($error) use (&$Data_Maybe_maybe, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Maybe_maybe)(($throwError1)($error), $pure);
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

// Control_Monad_Error_Class_liftEither
$Control_Monad_Error_Class_liftEither = (function() use (&$Data_Either_either, &$Control_Monad_Error_Class_throwError, &$Control_Applicative_pure, &$Prim_undefined) {
  $__fn = function($dictMonadThrow) use (&$Data_Either_either, &$Control_Monad_Error_Class_throwError, &$Control_Applicative_pure, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Either_either)(($Control_Monad_Error_Class_throwError)($dictMonadThrow), ($Control_Applicative_pure)((((($dictMonadThrow)->Monad0)($Prim_undefined))->Applicative0)($Prim_undefined)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Control_Monad_Error_Class_catchError
$Control_Monad_Error_Class_catchError = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->catchError;
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

// Control_Monad_Error_Class_catchJust
$Control_Monad_Error_Class_catchJust = (function() use (&$Control_Monad_Error_Class_throwError, &$Prim_undefined, &$Control_Monad_Error_Class_catchError) {
  $__fn = function($dictMonadError) use (&$Control_Monad_Error_Class_throwError, &$Prim_undefined, &$Control_Monad_Error_Class_catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$throwError1 = ($Control_Monad_Error_Class_throwError)((($dictMonadError)->MonadThrow0)($Prim_undefined));
$catchError1 = ($Control_Monad_Error_Class_catchError)($dictMonadError);
    $__res = (function() use ($throwError1, $catchError1) {
  $__fn = function($p, $act = null, $handler = null) use ($throwError1, $catchError1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$handle = (function() use ($p, $throwError1, $handler) {
  $__body = function($e) use ($p, $throwError1, $handler) {
    $v = ($p)($e);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($throwError1)($e);
} else {
;
};
    if ((($__case_0)->tag === "Just")) {
$b = ($__case_0)->values[0];
return ($handler)($b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($e) use ($p, $throwError1, $handler, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($e);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($e);
  };
  return $__fn;
})();
    $__res = ($catchError1)($act, $handle);
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

// Control_Monad_Error_Class_try
$Control_Monad_Error_Class_try = (function() use (&$Control_Monad_Error_Class_catchError, &$Prim_undefined, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_Either_Right, &$Control_Monad_Error_Class_compose, &$Data_Either_Left) {
  $__fn = function($dictMonadError) use (&$Control_Monad_Error_Class_catchError, &$Prim_undefined, &$Data_Functor_map, &$Control_Applicative_pure, &$Data_Either_Right, &$Control_Monad_Error_Class_compose, &$Data_Either_Left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$catchError1 = ($Control_Monad_Error_Class_catchError)($dictMonadError);
$Monad0 = (((($dictMonadError)->MonadThrow0)($Prim_undefined))->Monad0)($Prim_undefined);
$map = ($Data_Functor_map)((((((($Monad0)->Bind1)($Prim_undefined))->Apply0)($Prim_undefined))->Functor0)($Prim_undefined));
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
    $__res = (function() use ($catchError1, $map, &$Data_Either_Right, &$Control_Monad_Error_Class_compose, $pure, &$Data_Either_Left) {
  $__fn = function($a) use ($catchError1, $map, &$Data_Either_Right, &$Control_Monad_Error_Class_compose, $pure, &$Data_Either_Left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($catchError1)(($map)($Data_Either_Right, $a), ($Control_Monad_Error_Class_compose)($pure, $Data_Either_Left));
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

// Control_Monad_Error_Class_withResource
$Control_Monad_Error_Class_withResource = (function() use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Error_Class_try, &$Control_Monad_Error_Class_discard, &$Control_Monad_Error_Class_throwError, &$Control_Applicative_pure, &$Data_Either_either) {
  $__fn = function($dictMonadError) use (&$Prim_undefined, &$Control_Bind_bind, &$Control_Monad_Error_Class_try, &$Control_Monad_Error_Class_discard, &$Control_Monad_Error_Class_throwError, &$Control_Applicative_pure, &$Data_Either_either, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$MonadThrow0 = (($dictMonadError)->MonadThrow0)($Prim_undefined);
$Monad0 = (($MonadThrow0)->Monad0)($Prim_undefined);
$Bind1 = (($Monad0)->Bind1)($Prim_undefined);
$bind = ($Control_Bind_bind)($Bind1);
$try1 = ($Control_Monad_Error_Class_try)($dictMonadError);
$discard1 = ($Control_Monad_Error_Class_discard)($Bind1);
$throwError1 = ($Control_Monad_Error_Class_throwError)($MonadThrow0);
$pure = ($Control_Applicative_pure)((($Monad0)->Applicative0)($Prim_undefined));
    $__res = (function() use ($bind, $try1, $discard1, &$Data_Either_either, $throwError1, $pure) {
  $__fn = function($acquire, $release = null, $kleisli = null) use ($bind, $try1, $discard1, &$Data_Either_either, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)($acquire, (function() use ($bind, $try1, $kleisli, $discard1, $release, &$Data_Either_either, $throwError1, $pure) {
  $__fn = function($resource) use ($bind, $try1, $kleisli, $discard1, $release, &$Data_Either_either, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($bind)(($try1)(($kleisli)($resource)), (function() use ($discard1, $release, $resource, &$Data_Either_either, $throwError1, $pure) {
  $__fn = function($result) use ($discard1, $release, $resource, &$Data_Either_either, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($discard1)(($release)($resource), (function() use (&$Data_Either_either, $throwError1, $pure, $result) {
  $__fn = function($__dollar____unused) use (&$Data_Either_either, $throwError1, $pure, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Either_either)($throwError1, $pure, $result);
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
})());
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

