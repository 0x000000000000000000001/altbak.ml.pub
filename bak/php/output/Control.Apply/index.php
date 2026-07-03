<?php

namespace Control\Apply;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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




$Control_Apply_arrayApply = phpurs_uncurry2(function($fs) { return function($xs) use(&$fs) { $r = []; foreach($fs as $f) { foreach($xs as $x) { $r[] = $f($x); } } return $r; }; });

// Control_Apply_identity
$Control_Apply_identity = ($Control_Category_identity)($Control_Category_categoryFn);

// Control_Apply_Apply$Dict
$Control_Apply_Apply__dollar__Dict = (function() {
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

// Control_Apply_applyProxy
$Control_Apply_applyProxy = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() use (&$Type_Proxy_Proxy) {
  $__fn = function($v, $v1 = null) use (&$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Type_Proxy_Proxy;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use (&$Data_Functor_functorProxy) {
  $__fn = function($__dollar____unused) use (&$Data_Functor_functorProxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Functor_functorProxy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Control_Apply_applyFn
$Control_Apply_applyFn = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => (function() {
  $__fn = function($f, $g = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)($x, ($g)($x));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Control_Apply_applyArray
$Control_Apply_applyArray = ($Control_Apply_Apply__dollar__Dict)((object)["apply" => $Control_Apply_arrayApply, "Functor0" => (function() use (&$Data_Functor_functorArray) {
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
})()]);

// Control_Apply_apply
$Control_Apply_apply = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->apply;
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

// Control_Apply_applyFirst
$Control_Apply_applyFirst = (function() use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$Data_Function_const) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply);
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply1, $map, &$Data_Function_const) {
  $__fn = function($a, $b = null) use ($apply1, $map, &$Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($map)($Data_Function_const, $a), $b);
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

// Control_Apply_applySecond
$Control_Apply_applySecond = (function() use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$Data_Function_const, &$Control_Apply_identity) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$Data_Function_const, &$Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply);
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply1, $map, &$Data_Function_const, &$Control_Apply_identity) {
  $__fn = function($a, $b = null) use ($apply1, $map, &$Data_Function_const, &$Control_Apply_identity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($map)(($Data_Function_const)($Control_Apply_identity), $a), $b);
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

// Control_Apply_lift2
$Control_Apply_lift2 = (function() use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply);
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($map)($f, $a), $b);
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

// Control_Apply_lift3
$Control_Apply_lift3 = (function() use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply);
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null, $c = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($apply1)(($map)($f, $a), $b), $c);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
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

// Control_Apply_lift4
$Control_Apply_lift4 = (function() use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply);
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null, $c = null, $d = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($apply1)(($apply1)(($map)($f, $a), $b), $c), $d);
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
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

// Control_Apply_lift5
$Control_Apply_lift5 = (function() use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined) {
  $__fn = function($dictApply) use (&$Control_Apply_apply, &$Data_Functor_map, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$apply1 = ($Control_Apply_apply)($dictApply);
$map = ($Data_Functor_map)((($dictApply)->Functor0)($Prim_undefined));
    $__res = (function() use ($apply1, $map) {
  $__fn = function($f, $a = null, $b = null, $c = null, $d = null, $e = null) use ($apply1, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($apply1)(($apply1)(($apply1)(($apply1)(($map)($f, $a), $b), $c), $d), $e);
    if ($__num > 6) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
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

