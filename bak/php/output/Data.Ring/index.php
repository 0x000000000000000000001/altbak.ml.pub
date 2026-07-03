<?php

namespace Data\Ring;

require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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




$Data_Ring_intSub = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a - $b; }; });
$Data_Ring_numSub = $Data_Ring_intSub;

// Data_Ring_semiringRecord
$Data_Ring_semiringRecord = ($Data_Semiring_semiringRecord)($Prim_undefined);

// Data_Ring_RingRecord$Dict
$Data_Ring_RingRecord__dollar__Dict = (function() {
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

// Data_Ring_Ring$Dict
$Data_Ring_Ring__dollar__Dict = (function() {
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

// Data_Ring_subRecord
$Data_Ring_subRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->subRecord;
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

// Data_Ring_sub
$Data_Ring_sub = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->sub;
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

// Data_Ring_ringUnit
$Data_Ring_ringUnit = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => (function() use (&$Data_Unit_unit) {
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
})(), "Semiring0" => (function() use (&$Data_Semiring_semiringUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Semiring_semiringUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semiring_semiringUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ring_ringRecordNil
$Data_Ring_ringRecordNil = ($Data_Ring_RingRecord__dollar__Dict)((object)["subRecord" => (function() {
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
})(), "SemiringRecord0" => (function() use (&$Data_Semiring_semiringRecordNil) {
  $__fn = function($__dollar____unused) use (&$Data_Semiring_semiringRecordNil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semiring_semiringRecordNil;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ring_ringRecordCons
$Data_Ring_ringRecordCons = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Semiring_semiringRecordCons, &$Prim_undefined, &$Data_Ring_subRecord, &$Data_Ring_sub, &$Data_Ring_RingRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Semiring_semiringRecordCons, &$Prim_undefined, &$Data_Ring_subRecord, &$Data_Ring_sub, &$Data_Ring_RingRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
$semiringRecordCons = ($Data_Semiring_semiringRecordCons)($dictIsSymbol, $Prim_undefined);
    $__res = (function() use (&$Data_Ring_subRecord, $semiringRecordCons, &$Prim_undefined, &$Data_Ring_sub, &$Data_Ring_RingRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($__dollar____unused, $dictRingRecord = null) use (&$Data_Ring_subRecord, $semiringRecordCons, &$Prim_undefined, &$Data_Ring_sub, &$Data_Ring_RingRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$subRecord1 = ($Data_Ring_subRecord)($dictRingRecord);
$semiringRecordCons1 = ($semiringRecordCons)((($dictRingRecord)->SemiringRecord0)($Prim_undefined));
    $__res = (function() use (&$Data_Ring_sub, $semiringRecordCons1, &$Prim_undefined, &$Data_Ring_RingRecord__dollar__Dict, $subRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($dictRing) use (&$Data_Ring_sub, $semiringRecordCons1, &$Prim_undefined, &$Data_Ring_RingRecord__dollar__Dict, $subRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sub1 = ($Data_Ring_sub)($dictRing);
$semiringRecordCons2 = ($semiringRecordCons1)((($dictRing)->Semiring0)($Prim_undefined));
    $__res = ($Data_Ring_RingRecord__dollar__Dict)((object)["subRecord" => (function() use ($subRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $sub1) {
  $__fn = function($v, $ra = null, $rb = null) use ($subRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $sub1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($subRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($sub1)(($get)($ra), ($get)($rb)), $tail);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "SemiringRecord0" => (function() use ($semiringRecordCons2) {
  $__fn = function($__dollar____unused) use ($semiringRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semiringRecordCons2;
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

// Data_Ring_ringRecord
$Data_Ring_ringRecord = (function() use (&$Data_Ring_semiringRecord, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Ring_subRecord, &$Type_Proxy_Proxy) {
  $__fn = function($__dollar____unused, $dictRingRecord = null) use (&$Data_Ring_semiringRecord, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$Data_Ring_subRecord, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$semiringRecord1 = ($Data_Ring_semiringRecord)((($dictRingRecord)->SemiringRecord0)($Prim_undefined));
    $__res = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => ($Data_Ring_subRecord)($dictRingRecord, $Type_Proxy_Proxy), "Semiring0" => (function() use ($semiringRecord1) {
  $__fn = function($__dollar____unused) use ($semiringRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semiringRecord1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Ring_ringProxy
$Data_Ring_ringProxy = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => (function() use (&$Type_Proxy_Proxy) {
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
})(), "Semiring0" => (function() use (&$Data_Semiring_semiringProxy) {
  $__fn = function($__dollar____unused) use (&$Data_Semiring_semiringProxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semiring_semiringProxy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ring_ringNumber
$Data_Ring_ringNumber = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => $Data_Ring_numSub, "Semiring0" => (function() use (&$Data_Semiring_semiringNumber) {
  $__fn = function($__dollar____unused) use (&$Data_Semiring_semiringNumber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semiring_semiringNumber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ring_ringInt
$Data_Ring_ringInt = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => $Data_Ring_intSub, "Semiring0" => (function() use (&$Data_Semiring_semiringInt) {
  $__fn = function($__dollar____unused) use (&$Data_Semiring_semiringInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Semiring_semiringInt;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ring_ringFn
$Data_Ring_ringFn = (function() use (&$Data_Ring_sub, &$Data_Semiring_semiringFn, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict) {
  $__fn = function($dictRing) use (&$Data_Ring_sub, &$Data_Semiring_semiringFn, &$Prim_undefined, &$Data_Ring_Ring__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sub1 = ($Data_Ring_sub)($dictRing);
$semiringFn = ($Data_Semiring_semiringFn)((($dictRing)->Semiring0)($Prim_undefined));
    $__res = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => (function() use ($sub1) {
  $__fn = function($f, $g = null, $x = null) use ($sub1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sub1)(($f)($x), ($g)($x));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringFn) {
  $__fn = function($__dollar____unused) use ($semiringFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $semiringFn;
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

// Data_Ring_negate
$Data_Ring_negate = (function() use (&$Data_Ring_sub, &$Data_Semiring_zero, &$Prim_undefined) {
  $__fn = function($dictRing) use (&$Data_Ring_sub, &$Data_Semiring_zero, &$Prim_undefined, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$sub1 = ($Data_Ring_sub)($dictRing);
$zero = ($Data_Semiring_zero)((($dictRing)->Semiring0)($Prim_undefined));
    $__res = (function() use ($sub1, $zero) {
  $__fn = function($a) use ($sub1, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($sub1)($zero, $a);
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

