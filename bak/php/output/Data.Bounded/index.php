<?php

namespace Data\Bounded;

require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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




$Data_Bounded_topInt = 2147483647;
$Data_Bounded_bottomInt = -2147483648;
$Data_Bounded_topChar = "\u{10FFFF}";
$Data_Bounded_bottomChar = "\u{0000}";
$Data_Bounded_topNumber = INF;
$Data_Bounded_bottomNumber = -INF;

// Data_Bounded_ordRecord
$Data_Bounded_ordRecord = ($Data_Ord_ordRecord)($Prim_undefined);

// Data_Bounded_BoundedRecord$Dict
$Data_Bounded_BoundedRecord__dollar__Dict = (function() {
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

// Data_Bounded_Bounded$Dict
$Data_Bounded_Bounded__dollar__Dict = (function() {
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

// Data_Bounded_topRecord
$Data_Bounded_topRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->topRecord;
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

// Data_Bounded_top
$Data_Bounded_top = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->top;
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

// Data_Bounded_boundedUnit
$Data_Bounded_boundedUnit = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => $Data_Unit_unit, "bottom" => $Data_Unit_unit, "Ord0" => (function() use (&$Data_Ord_ordUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_boundedRecordNil
$Data_Bounded_boundedRecordNil = ($Data_Bounded_BoundedRecord__dollar__Dict)((object)["topRecord" => (function() {
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
})(), "bottomRecord" => (function() {
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
})(), "OrdRecord0" => (function() use (&$Data_Ord_ordRecordNil) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordRecordNil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordRecordNil;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_boundedProxy
$Data_Bounded_boundedProxy = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => $Type_Proxy_Proxy, "top" => $Type_Proxy_Proxy, "Ord0" => (function() use (&$Data_Ord_ordProxy) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordProxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordProxy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_boundedOrdering
$Data_Bounded_boundedOrdering = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => $Data_Ordering_GT, "bottom" => $Data_Ordering_LT, "Ord0" => (function() use (&$Data_Ord_ordOrdering) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordOrdering, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordOrdering;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_boundedNumber
$Data_Bounded_boundedNumber = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => $Data_Bounded_topNumber, "bottom" => $Data_Bounded_bottomNumber, "Ord0" => (function() use (&$Data_Ord_ordNumber) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordNumber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordNumber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_boundedInt
$Data_Bounded_boundedInt = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => $Data_Bounded_topInt, "bottom" => $Data_Bounded_bottomInt, "Ord0" => (function() use (&$Data_Ord_ordInt) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordInt;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_boundedChar
$Data_Bounded_boundedChar = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => $Data_Bounded_topChar, "bottom" => $Data_Bounded_bottomChar, "Ord0" => (function() use (&$Data_Ord_ordChar) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordChar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordChar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_boundedBoolean
$Data_Bounded_boundedBoolean = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => true, "bottom" => false, "Ord0" => (function() use (&$Data_Ord_ordBoolean) {
  $__fn = function($__dollar____unused) use (&$Data_Ord_ordBoolean, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ord_ordBoolean;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Bounded_bottomRecord
$Data_Bounded_bottomRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bottomRecord;
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

// Data_Bounded_boundedRecord
$Data_Bounded_boundedRecord = (function() use (&$Data_Bounded_ordRecord, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Bounded_topRecord, &$Type_Proxy_Proxy, &$Data_Bounded_bottomRecord) {
  $__fn = function($__dollar____unused, $dictBoundedRecord = null) use (&$Data_Bounded_ordRecord, &$Prim_undefined, &$Data_Bounded_Bounded__dollar__Dict, &$Data_Bounded_topRecord, &$Type_Proxy_Proxy, &$Data_Bounded_bottomRecord, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ordRecord1 = ($Data_Bounded_ordRecord)((($dictBoundedRecord)->OrdRecord0)($Prim_undefined));
    $__res = ($Data_Bounded_Bounded__dollar__Dict)((object)["top" => ($Data_Bounded_topRecord)($dictBoundedRecord, $Type_Proxy_Proxy, $Type_Proxy_Proxy), "bottom" => ($Data_Bounded_bottomRecord)($dictBoundedRecord, $Type_Proxy_Proxy, $Type_Proxy_Proxy), "Ord0" => (function() use ($ordRecord1) {
  $__fn = function($__dollar____unused) use ($ordRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordRecord1;
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

// Data_Bounded_bottom
$Data_Bounded_bottom = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bottom;
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

// Data_Bounded_boundedRecordCons
$Data_Bounded_boundedRecordCons = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Bounded_top, &$Data_Bounded_bottom, &$Prim_undefined, &$Data_Bounded_topRecord, &$Data_Bounded_bottomRecord, &$Data_Ord_ordRecordCons, &$Data_Bounded_BoundedRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Bounded_top, &$Data_Bounded_bottom, &$Prim_undefined, &$Data_Bounded_topRecord, &$Data_Bounded_bottomRecord, &$Data_Ord_ordRecordCons, &$Data_Bounded_BoundedRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_Bounded_top, &$Data_Bounded_bottom, &$Prim_undefined, &$Data_Bounded_topRecord, &$Data_Bounded_bottomRecord, &$Data_Ord_ordRecordCons, $dictIsSymbol, &$Data_Bounded_BoundedRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet) {
  $__fn = function($dictBounded) use (&$Data_Bounded_top, &$Data_Bounded_bottom, &$Prim_undefined, &$Data_Bounded_topRecord, &$Data_Bounded_bottomRecord, &$Data_Ord_ordRecordCons, $dictIsSymbol, &$Data_Bounded_BoundedRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$top1 = ($Data_Bounded_top)($dictBounded);
$bottom1 = ($Data_Bounded_bottom)($dictBounded);
$Ord0 = (($dictBounded)->Ord0)($Prim_undefined);
    $__res = (function() use (&$Data_Bounded_topRecord, &$Data_Bounded_bottomRecord, &$Data_Ord_ordRecordCons, &$Prim_undefined, $dictIsSymbol, &$Ord0, &$Data_Bounded_BoundedRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $top1, $bottom1) {
  $__fn = function($__dollar____unused_, $__dollar____unused = null, $dictBoundedRecord = null) use (&$Data_Bounded_topRecord, &$Data_Bounded_bottomRecord, &$Data_Ord_ordRecordCons, &$Prim_undefined, $dictIsSymbol, &$Ord0, &$Data_Bounded_BoundedRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $top1, $bottom1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$topRecord1 = ($Data_Bounded_topRecord)($dictBoundedRecord);
$bottomRecord1 = ($Data_Bounded_bottomRecord)($dictBoundedRecord);
$ordRecordCons = ($Data_Ord_ordRecordCons)((($dictBoundedRecord)->OrdRecord0)($Prim_undefined), $Prim_undefined, $dictIsSymbol, $Ord0);
    $__res = ($Data_Bounded_BoundedRecord__dollar__Dict)((object)["topRecord" => (function() use ($topRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $top1) {
  $__fn = function($v, $rowProxy = null) use ($topRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $top1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($topRecord1)($Type_Proxy_Proxy, $rowProxy);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($top1, $tail);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "bottomRecord" => (function() use ($bottomRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $bottom1) {
  $__fn = function($v, $rowProxy = null) use ($bottomRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $bottom1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($bottomRecord1)($Type_Proxy_Proxy, $rowProxy);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($bottom1, $tail);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "OrdRecord0" => (function() use ($ordRecordCons) {
  $__fn = function($__dollar____unused) use ($ordRecordCons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ordRecordCons;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);
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

