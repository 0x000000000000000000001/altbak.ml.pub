<?php

namespace Data\Semigroup;

require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
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




$Data_Semigroup_concatString = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return $x . $y; }; });
$Data_Semigroup_concatArray = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return array_merge($x, $y); }; });

// Data_Semigroup_SemigroupRecord$Dict
$Data_Semigroup_SemigroupRecord__dollar__Dict = (function() {
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

// Data_Semigroup_Semigroup$Dict
$Data_Semigroup_Semigroup__dollar__Dict = (function() {
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

// Data_Semigroup_semigroupVoid
$Data_Semigroup_semigroupVoid = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Void_absurd) {
  $__fn = function($v) use (&$Data_Void_absurd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Void_absurd;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_semigroupUnit
$Data_Semigroup_semigroupUnit = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Data_Unit_unit) {
  $__fn = function($v, $v1 = null) use (&$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Unit_unit;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_semigroupString
$Data_Semigroup_semigroupString = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => $Data_Semigroup_concatString]);

// Data_Semigroup_semigroupRecordNil
$Data_Semigroup_semigroupRecordNil = ($Data_Semigroup_SemigroupRecord__dollar__Dict)((object)["appendRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)[];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_semigroupProxy
$Data_Semigroup_semigroupProxy = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use (&$Type_Proxy_Proxy) {
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
})()]);

// Data_Semigroup_semigroupArray
$Data_Semigroup_semigroupArray = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => $Data_Semigroup_concatArray]);

// Data_Semigroup_appendRecord
$Data_Semigroup_appendRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->appendRecord;
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

// Data_Semigroup_semigroupRecord
$Data_Semigroup_semigroupRecord = (function() use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_appendRecord, &$Type_Proxy_Proxy) {
  $__fn = function($__dollar____unused, $dictSemigroupRecord = null) use (&$Data_Semigroup_Semigroup__dollar__Dict, &$Data_Semigroup_appendRecord, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => ($Data_Semigroup_appendRecord)($dictSemigroupRecord, $Type_Proxy_Proxy)]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semigroup_append
$Data_Semigroup_append = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->append;
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

// Data_Semigroup_semigroupFn
$Data_Semigroup_semigroupFn = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_Semigroup__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_Semigroup__dollar__Dict)((object)["append" => (function() use ($append1) {
  $__fn = function($f, $g = null, $x = null) use ($append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($append1)(($f)($x), ($g)($x));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

// Data_Semigroup_semigroupRecordCons
$Data_Semigroup_semigroupRecordCons = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Semigroup_appendRecord, &$Data_Semigroup_append, &$Data_Semigroup_SemigroupRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Semigroup_appendRecord, &$Data_Semigroup_append, &$Data_Semigroup_SemigroupRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_Semigroup_appendRecord, &$Data_Semigroup_append, &$Data_Semigroup_SemigroupRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($__dollar____unused, $dictSemigroupRecord = null) use (&$Data_Semigroup_appendRecord, &$Data_Semigroup_append, &$Data_Semigroup_SemigroupRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$appendRecord1 = ($Data_Semigroup_appendRecord)($dictSemigroupRecord);
    $__res = (function() use (&$Data_Semigroup_append, &$Data_Semigroup_SemigroupRecord__dollar__Dict, $appendRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($dictSemigroup) use (&$Data_Semigroup_append, &$Data_Semigroup_SemigroupRecord__dollar__Dict, $appendRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$append1 = ($Data_Semigroup_append)($dictSemigroup);
    $__res = ($Data_Semigroup_SemigroupRecord__dollar__Dict)((object)["appendRecord" => (function() use ($appendRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $append1) {
  $__fn = function($v, $ra = null, $rb = null) use ($appendRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($appendRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($append1)(($get)($ra), ($get)($rb)), $tail);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
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

