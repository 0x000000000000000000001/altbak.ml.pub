<?php

namespace Data\Eq;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
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




$Data_Eq_eqIntImpl = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a === $b; }; });
$Data_Eq_eqStringImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqNumberImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqCharImpl = $Data_Eq_eqIntImpl;
$Data_Eq_eqBooleanImpl = $Data_Eq_eqIntImpl;

// Data_Eq_conj
$Data_Eq_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Eq_EqRecord$Dict
$Data_Eq_EqRecord__dollar__Dict = (function() {
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

// Data_Eq_Eq$Dict
$Data_Eq_Eq__dollar__Dict = (function() {
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

// Data_Eq_Eq1$Dict
$Data_Eq_Eq1__dollar__Dict = (function() {
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

// Data_Eq_eqVoid
$Data_Eq_eqVoid = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = true;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Eq_eqUnit
$Data_Eq_eqUnit = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = true;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Eq_eqString
$Data_Eq_eqString = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => $Data_Eq_eqStringImpl]);

// Data_Eq_eqRowNil
$Data_Eq_eqRowNil = ($Data_Eq_EqRecord__dollar__Dict)((object)["eqRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = true;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Eq_eqRecord
$Data_Eq_eqRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eqRecord;
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

// Data_Eq_eqRec
$Data_Eq_eqRec = (function() use (&$Data_Eq_Eq__dollar__Dict, &$Data_Eq_eqRecord, &$Type_Proxy_Proxy) {
  $__fn = function($__dollar____unused, $dictEqRecord = null) use (&$Data_Eq_Eq__dollar__Dict, &$Data_Eq_eqRecord, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => ($Data_Eq_eqRecord)($dictEqRecord, $Type_Proxy_Proxy)]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Eq_eqProxy
$Data_Eq_eqProxy = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = true;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Eq_eqNumber
$Data_Eq_eqNumber = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => $Data_Eq_eqNumberImpl]);

// Data_Eq_eqInt
$Data_Eq_eqInt = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => $Data_Eq_eqIntImpl]);

// Data_Eq_eqChar
$Data_Eq_eqChar = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => $Data_Eq_eqCharImpl]);

// Data_Eq_eqBoolean
$Data_Eq_eqBoolean = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => $Data_Eq_eqBooleanImpl]);

// Data_Eq_eq1
$Data_Eq_eq1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq1;
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

// Data_Eq_eq
$Data_Eq_eq = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->eq;
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

// Data_Eq_eq2
$Data_Eq_eq2 = ($Data_Eq_eq)($Data_Eq_eqBoolean);

// Data_Eq_eqArray
$Data_Eq_eqArray = (function() use (&$Data_Eq_Eq__dollar__Dict, &$Data_Eq_eqArrayImpl, &$Data_Eq_eq) {
  $__fn = function($dictEq) use (&$Data_Eq_Eq__dollar__Dict, &$Data_Eq_eqArrayImpl, &$Data_Eq_eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => ($Data_Eq_eqArrayImpl)(($Data_Eq_eq)($dictEq))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Eq_eq1Array
$Data_Eq_eq1Array = ($Data_Eq_Eq1__dollar__Dict)((object)["eq1" => (function() use (&$Data_Eq_eq, &$Data_Eq_eqArray) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_eqArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq)(($Data_Eq_eqArray)($dictEq));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Eq_eqRowCons
$Data_Eq_eqRowCons = (function() use (&$Data_Eq_eqRecord, &$Data_Symbol_reflectSymbol, &$Data_Eq_eq, &$Data_Eq_EqRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj) {
  $__fn = function($dictEqRecord) use (&$Data_Eq_eqRecord, &$Data_Symbol_reflectSymbol, &$Data_Eq_eq, &$Data_Eq_EqRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqRecord1 = ($Data_Eq_eqRecord)($dictEqRecord);
    $__res = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Eq_eq, &$Data_Eq_EqRecord__dollar__Dict, $eqRecord1, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj) {
  $__fn = function($__dollar____unused, $dictIsSymbol = null) use (&$Data_Symbol_reflectSymbol, &$Data_Eq_eq, &$Data_Eq_EqRecord__dollar__Dict, $eqRecord1, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_Eq_eq, &$Data_Eq_EqRecord__dollar__Dict, $eqRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_EqRecord__dollar__Dict, $eqRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq3 = ($Data_Eq_eq)($dictEq);
    $__res = ($Data_Eq_EqRecord__dollar__Dict)((object)["eqRecord" => (function() use ($eqRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj, $eq3) {
  $__fn = function($v, $ra = null, $rb = null) use ($eqRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Eq_conj, $eq3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($eqRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($Data_Eq_conj)(($eq3)(($get)($ra), ($get)($rb)), $tail);
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

// Data_Eq_notEq
$Data_Eq_notEq = (function() use (&$Data_Eq_eq, &$Data_Eq_eq2) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq3 = ($Data_Eq_eq)($dictEq);
    $__res = (function() use (&$Data_Eq_eq2, $eq3) {
  $__fn = function($x, $y = null) use (&$Data_Eq_eq2, $eq3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq2)(($eq3)($x, $y), false);
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

// Data_Eq_notEq1
$Data_Eq_notEq1 = (function() use (&$Data_Eq_eq1, &$Data_Eq_eq2) {
  $__fn = function($dictEq1) use (&$Data_Eq_eq1, &$Data_Eq_eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq11 = ($Data_Eq_eq1)($dictEq1);
    $__res = (function() use ($eq11, &$Data_Eq_eq2) {
  $__fn = function($dictEq) use ($eq11, &$Data_Eq_eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq12 = ($eq11)($dictEq);
    $__res = (function() use (&$Data_Eq_eq2, $eq12) {
  $__fn = function($x, $y = null) use (&$Data_Eq_eq2, $eq12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Eq_eq2)(($eq12)($x, $y), false);
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

