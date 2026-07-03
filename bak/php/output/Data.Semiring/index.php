<?php

namespace Data\Semiring;

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




$Data_Semiring_intAdd = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a + $b; }; });
$Data_Semiring_intMul = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a * $b; }; });
$Data_Semiring_numAdd = $Data_Semiring_intAdd;
$Data_Semiring_numMul = $Data_Semiring_intMul;

// Data_Semiring_SemiringRecord$Dict
$Data_Semiring_SemiringRecord__dollar__Dict = (function() {
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

// Data_Semiring_Semiring$Dict
$Data_Semiring_Semiring__dollar__Dict = (function() {
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

// Data_Semiring_zeroRecord
$Data_Semiring_zeroRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->zeroRecord;
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

// Data_Semiring_zero
$Data_Semiring_zero = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->zero;
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

// Data_Semiring_semiringUnit
$Data_Semiring_semiringUnit = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => (function() use (&$Data_Unit_unit) {
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
})(), "zero" => $Data_Unit_unit, "mul" => (function() use (&$Data_Unit_unit) {
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
})(), "one" => $Data_Unit_unit]);

// Data_Semiring_semiringRecordNil
$Data_Semiring_semiringRecordNil = ($Data_Semiring_SemiringRecord__dollar__Dict)((object)["addRecord" => (function() {
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
})(), "mulRecord" => (function() {
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
})(), "oneRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)[];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "zeroRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)[];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Semiring_semiringProxy
$Data_Semiring_semiringProxy = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => (function() use (&$Type_Proxy_Proxy) {
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
})(), "mul" => (function() use (&$Type_Proxy_Proxy) {
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
})(), "one" => $Type_Proxy_Proxy, "zero" => $Type_Proxy_Proxy]);

// Data_Semiring_semiringNumber
$Data_Semiring_semiringNumber = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => $Data_Semiring_numAdd, "zero" => 0.0, "mul" => $Data_Semiring_numMul, "one" => 1.0]);

// Data_Semiring_semiringInt
$Data_Semiring_semiringInt = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => $Data_Semiring_intAdd, "zero" => 0, "mul" => $Data_Semiring_intMul, "one" => 1]);

// Data_Semiring_oneRecord
$Data_Semiring_oneRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->oneRecord;
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

// Data_Semiring_one
$Data_Semiring_one = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->one;
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

// Data_Semiring_mulRecord
$Data_Semiring_mulRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mulRecord;
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

// Data_Semiring_mul
$Data_Semiring_mul = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mul;
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

// Data_Semiring_addRecord
$Data_Semiring_addRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->addRecord;
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

// Data_Semiring_semiringRecord
$Data_Semiring_semiringRecord = (function() use (&$Data_Semiring_Semiring__dollar__Dict, &$Data_Semiring_addRecord, &$Type_Proxy_Proxy, &$Data_Semiring_mulRecord, &$Data_Semiring_oneRecord, &$Data_Semiring_zeroRecord) {
  $__fn = function($__dollar____unused, $dictSemiringRecord = null) use (&$Data_Semiring_Semiring__dollar__Dict, &$Data_Semiring_addRecord, &$Type_Proxy_Proxy, &$Data_Semiring_mulRecord, &$Data_Semiring_oneRecord, &$Data_Semiring_zeroRecord, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => ($Data_Semiring_addRecord)($dictSemiringRecord, $Type_Proxy_Proxy), "mul" => ($Data_Semiring_mulRecord)($dictSemiringRecord, $Type_Proxy_Proxy), "one" => ($Data_Semiring_oneRecord)($dictSemiringRecord, $Type_Proxy_Proxy, $Type_Proxy_Proxy), "zero" => ($Data_Semiring_zeroRecord)($dictSemiringRecord, $Type_Proxy_Proxy, $Type_Proxy_Proxy)]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semiring_add
$Data_Semiring_add = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->add;
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

// Data_Semiring_semiringFn
$Data_Semiring_semiringFn = (function() use (&$Data_Semiring_add, &$Data_Semiring_zero, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_Semiring__dollar__Dict) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semiring_zero, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_Semiring__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add1 = ($Data_Semiring_add)($dictSemiring);
$zero1 = ($Data_Semiring_zero)($dictSemiring);
$mul1 = ($Data_Semiring_mul)($dictSemiring);
$one1 = ($Data_Semiring_one)($dictSemiring);
    $__res = ($Data_Semiring_Semiring__dollar__Dict)((object)["add" => (function() use ($add1) {
  $__fn = function($f, $g = null, $x = null) use ($add1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($add1)(($f)($x), ($g)($x));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "zero" => (function() use ($zero1) {
  $__fn = function($v) use ($zero1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $zero1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "mul" => (function() use ($mul1) {
  $__fn = function($f, $g = null, $x = null) use ($mul1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($mul1)(($f)($x), ($g)($x));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "one" => (function() use ($one1) {
  $__fn = function($v) use ($one1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $one1;
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

// Data_Semiring_semiringRecordCons
$Data_Semiring_semiringRecordCons = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Semiring_addRecord, &$Data_Semiring_mulRecord, &$Data_Semiring_oneRecord, &$Data_Semiring_zeroRecord, &$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_zero, &$Data_Semiring_SemiringRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Semiring_addRecord, &$Data_Semiring_mulRecord, &$Data_Semiring_oneRecord, &$Data_Semiring_zeroRecord, &$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_zero, &$Data_Semiring_SemiringRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_Semiring_addRecord, &$Data_Semiring_mulRecord, &$Data_Semiring_oneRecord, &$Data_Semiring_zeroRecord, &$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_zero, &$Data_Semiring_SemiringRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($__dollar____unused, $dictSemiringRecord = null) use (&$Data_Semiring_addRecord, &$Data_Semiring_mulRecord, &$Data_Semiring_oneRecord, &$Data_Semiring_zeroRecord, &$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_zero, &$Data_Semiring_SemiringRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$addRecord1 = ($Data_Semiring_addRecord)($dictSemiringRecord);
$mulRecord1 = ($Data_Semiring_mulRecord)($dictSemiringRecord);
$oneRecord1 = ($Data_Semiring_oneRecord)($dictSemiringRecord);
$zeroRecord1 = ($Data_Semiring_zeroRecord)($dictSemiringRecord);
    $__res = (function() use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_zero, &$Data_Semiring_SemiringRecord__dollar__Dict, $addRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $mulRecord1, $oneRecord1, $zeroRecord1) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_one, &$Data_Semiring_zero, &$Data_Semiring_SemiringRecord__dollar__Dict, $addRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $mulRecord1, $oneRecord1, $zeroRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add1 = ($Data_Semiring_add)($dictSemiring);
$mul1 = ($Data_Semiring_mul)($dictSemiring);
$one1 = ($Data_Semiring_one)($dictSemiring);
$zero1 = ($Data_Semiring_zero)($dictSemiring);
    $__res = ($Data_Semiring_SemiringRecord__dollar__Dict)((object)["addRecord" => (function() use ($addRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $add1) {
  $__fn = function($v, $ra = null, $rb = null) use ($addRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $add1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($addRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($add1)(($get)($ra), ($get)($rb)), $tail);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "mulRecord" => (function() use ($mulRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $mul1) {
  $__fn = function($v, $ra = null, $rb = null) use ($mulRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $mul1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($mulRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($mul1)(($get)($ra), ($get)($rb)), $tail);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "oneRecord" => (function() use ($oneRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $one1) {
  $__fn = function($v, $v1 = null) use ($oneRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $one1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($oneRecord1)($Type_Proxy_Proxy, $Type_Proxy_Proxy);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($one1, $tail);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "zeroRecord" => (function() use ($zeroRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $zero1) {
  $__fn = function($v, $v1 = null) use ($zeroRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $zero1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($zeroRecord1)($Type_Proxy_Proxy, $Type_Proxy_Proxy);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($zero1, $tail);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
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

