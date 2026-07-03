<?php

namespace Data\Ord;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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



$Data_Ord_ordIntImpl = phpurs_uncurry5(function($lt) { return function($eq) use ($lt) { return function($gt) use ($lt, $eq) { return function($x) use ($lt, $eq, $gt) { return function($y) use ($lt, $eq, $gt, $x) { return $x < $y ? $lt : ($x === $y ? $eq : $gt); }; }; }; }; });
$Data_Ord_ordStringImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordNumberImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordCharImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordBooleanImpl = $Data_Ord_ordIntImpl;

// Data_Ord_eqRec
$Data_Ord_eqRec = ($Data_Eq_eqRec)($Prim_undefined);

// Data_Ord_negate
$Data_Ord_negate = ($Data_Ring_negate)($Data_Ring_ringInt);

// Data_Ord_notEq
$Data_Ord_notEq = ($Data_Eq_notEq)($Data_Ordering_eqOrdering);

// Data_Ord_OrdRecord$Dict
$Data_Ord_OrdRecord__dollar__Dict = (function() {
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

// Data_Ord_Ord$Dict
$Data_Ord_Ord__dollar__Dict = (function() {
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

// Data_Ord_Ord1$Dict
$Data_Ord_Ord1__dollar__Dict = (function() {
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

// Data_Ord_ordVoid
$Data_Ord_ordVoid = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_EQ;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use (&$Data_Eq_eqVoid) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqVoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqVoid;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordUnit
$Data_Ord_ordUnit = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_EQ;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use (&$Data_Eq_eqUnit) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqUnit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqUnit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordString
$Data_Ord_ordString = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_Ord_ordStringImpl)($Data_Ordering_LT, $Data_Ordering_EQ, $Data_Ordering_GT), "Eq0" => (function() use (&$Data_Eq_eqString) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqString, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqString;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordRecordNil
$Data_Ord_ordRecordNil = ($Data_Ord_OrdRecord__dollar__Dict)((object)["compareRecord" => (function() use (&$Data_Ordering_EQ) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_EQ;
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "EqRecord0" => (function() use (&$Data_Eq_eqRowNil) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqRowNil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqRowNil;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordProxy
$Data_Ord_ordProxy = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ) {
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_EQ;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use (&$Data_Eq_eqProxy) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqProxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqProxy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordOrdering
$Data_Ord_ordOrdering = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($v, $v1) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "LT") && (($__case_1)->tag === "LT"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "EQ"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "GT"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
    if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "LT"))) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "GT"))) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Ordering_eqOrdering) {
  $__fn = function($__dollar____unused) use (&$Data_Ordering_eqOrdering, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Ordering_eqOrdering;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordNumber
$Data_Ord_ordNumber = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_Ord_ordNumberImpl)($Data_Ordering_LT, $Data_Ordering_EQ, $Data_Ordering_GT), "Eq0" => (function() use (&$Data_Eq_eqNumber) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqNumber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqNumber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordInt
$Data_Ord_ordInt = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_Ord_ordIntImpl)($Data_Ordering_LT, $Data_Ordering_EQ, $Data_Ordering_GT), "Eq0" => (function() use (&$Data_Eq_eqInt) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqInt;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordChar
$Data_Ord_ordChar = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_Ord_ordCharImpl)($Data_Ordering_LT, $Data_Ordering_EQ, $Data_Ordering_GT), "Eq0" => (function() use (&$Data_Eq_eqChar) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqChar, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqChar;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordBoolean
$Data_Ord_ordBoolean = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_Ord_ordBooleanImpl)($Data_Ordering_LT, $Data_Ordering_EQ, $Data_Ordering_GT), "Eq0" => (function() use (&$Data_Eq_eqBoolean) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eqBoolean, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eqBoolean;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_compareRecord
$Data_Ord_compareRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compareRecord;
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

// Data_Ord_ordRecord
$Data_Ord_ordRecord = (function() use (&$Data_Ord_eqRec, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ord_compareRecord, &$Type_Proxy_Proxy) {
  $__fn = function($__dollar____unused, $dictOrdRecord = null) use (&$Data_Ord_eqRec, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ord_compareRecord, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eqRec1 = ($Data_Ord_eqRec)((($dictOrdRecord)->EqRecord0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => ($Data_Ord_compareRecord)($dictOrdRecord, $Type_Proxy_Proxy), "Eq0" => (function() use ($eqRec1) {
  $__fn = function($__dollar____unused) use ($eqRec1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqRec1;
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

// Data_Ord_compare1
$Data_Ord_compare1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare1;
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

// Data_Ord_compare
$Data_Ord_compare = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare;
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

// Data_Ord_compare2
$Data_Ord_compare2 = ($Data_Ord_compare)($Data_Ord_ordInt);

// Data_Ord_comparing
$Data_Ord_comparing = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare3) {
  $__fn = function($f, $x = null, $y = null) use ($compare3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($compare3)(($f)($x), ($f)($y));
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

// Data_Ord_greaterThan
$Data_Ord_greaterThan = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
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
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a1, $a2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a1, $a2);
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

// Data_Ord_greaterThanOrEq
$Data_Ord_greaterThanOrEq = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return false;
} else {
;
};
    if (true) {
return true;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a1, $a2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a1, $a2);
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

// Data_Ord_lessThan
$Data_Ord_lessThan = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
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
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a1, $a2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a1, $a2);
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

// Data_Ord_signum
$Data_Ord_signum = (function() use (&$Data_Ord_lessThan, &$Data_Ord_greaterThan, &$Prim_undefined, &$Data_Semiring_zero, &$Data_Ring_negate, &$Data_Semiring_one) {
  $__fn = function($dictOrd) use (&$Data_Ord_lessThan, &$Data_Ord_greaterThan, &$Prim_undefined, &$Data_Semiring_zero, &$Data_Ring_negate, &$Data_Semiring_one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lessThan1 = ($Data_Ord_lessThan)($dictOrd);
$greaterThan1 = ($Data_Ord_greaterThan)($dictOrd);
    $__res = (function() use (&$Prim_undefined, &$Data_Semiring_zero, &$Data_Ring_negate, &$Data_Semiring_one, $lessThan1, $greaterThan1) {
  $__fn = function($dictRing) use (&$Prim_undefined, &$Data_Semiring_zero, &$Data_Ring_negate, &$Data_Semiring_one, $lessThan1, $greaterThan1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Semiring0 = (($dictRing)->Semiring0)($Prim_undefined);
$zero = ($Data_Semiring_zero)($Semiring0);
$negate1 = ($Data_Ring_negate)($dictRing);
$one = ($Data_Semiring_one)($Semiring0);
    $__res = (function() use ($lessThan1, $zero, $negate1, $one, $greaterThan1) {
  $__body = function($x) use ($lessThan1, $zero, $negate1, $one, $greaterThan1) {
    $__case_0 = ($lessThan1)($x, $zero);
    if (($__case_0 === true)) {
return ($negate1)($one);
} else {
;
};
    if (true) {
$__case_0 = ($greaterThan1)($x, $zero);
if (($__case_0 === true)) {
return $one;
} else {
;
};
if (true) {
return $x;
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use ($lessThan1, $zero, $negate1, $one, $greaterThan1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($x);
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

// Data_Ord_lessThanOrEq
$Data_Ord_lessThanOrEq = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return false;
} else {
;
};
    if (true) {
return true;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a1, $a2);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a1, $a2);
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

// Data_Ord_max
$Data_Ord_max = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return $y;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return $x;
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return $x;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
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

// Data_Ord_min
$Data_Ord_min = (function() use (&$Data_Ord_compare) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return $x;
} else {
;
};
    if ((($__case_0)->tag === "EQ")) {
return $x;
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return $y;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
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

// Data_Ord_ordArray
$Data_Ord_ordArray = (function() use (&$Data_Ord_compare, &$Data_Eq_eqArray, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ord_negate, &$Data_Ord_compare2, &$Data_Ord_ordArrayImpl) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Eq_eqArray, &$Prim_undefined, &$Data_Ord_Ord__dollar__Dict, &$Data_Ord_negate, &$Data_Ord_compare2, &$Data_Ord_ordArrayImpl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
$eqArray = ($Data_Eq_eqArray)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use ($compare3, &$Data_Ord_negate, &$Data_Ord_compare2, &$Data_Ord_ordArrayImpl) {
$toDelta = (function() use ($compare3, &$Data_Ord_negate) {
  $__body = function($x, $y) use ($compare3, &$Data_Ord_negate) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    if ((($__case_0)->tag === "EQ")) {
return 0;
} else {
;
};
    if ((($__case_0)->tag === "LT")) {
return 1;
} else {
;
};
    if ((($__case_0)->tag === "GT")) {
return ($Data_Ord_negate)(1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use ($compare3, &$Data_Ord_negate, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($x, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($x, $y);
  };
  return $__fn;
})();
return (function() use (&$Data_Ord_compare2, &$Data_Ord_ordArrayImpl, $toDelta) {
  $__fn = function($xs, $ys = null) use (&$Data_Ord_compare2, &$Data_Ord_ordArrayImpl, $toDelta, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare2)(0, ($Data_Ord_ordArrayImpl)($toDelta, $xs, $ys));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
})(), "Eq0" => (function() use ($eqArray) {
  $__fn = function($__dollar____unused) use ($eqArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqArray;
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

// Data_Ord_ord1Array
$Data_Ord_ord1Array = ($Data_Ord_Ord1__dollar__Dict)((object)["compare1" => (function() use (&$Data_Ord_compare, &$Data_Ord_ordArray) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, &$Data_Ord_ordArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Ord_compare)(($Data_Ord_ordArray)($dictOrd));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use (&$Data_Eq_eq1Array) {
  $__fn = function($__dollar____unused) use (&$Data_Eq_eq1Array, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Eq_eq1Array;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordRecordCons
$Data_Ord_ordRecordCons = (function() use (&$Data_Ord_compareRecord, &$Data_Eq_eqRowCons, &$Prim_undefined, &$Data_Symbol_reflectSymbol, &$Data_Ord_compare, &$Data_Ord_OrdRecord__dollar__Dict, &$Record_Unsafe_unsafeGet, &$Type_Proxy_Proxy, &$Data_Ord_notEq, &$Data_Ordering_EQ) {
  $__fn = function($dictOrdRecord) use (&$Data_Ord_compareRecord, &$Data_Eq_eqRowCons, &$Prim_undefined, &$Data_Symbol_reflectSymbol, &$Data_Ord_compare, &$Data_Ord_OrdRecord__dollar__Dict, &$Record_Unsafe_unsafeGet, &$Type_Proxy_Proxy, &$Data_Ord_notEq, &$Data_Ordering_EQ, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compareRecord1 = ($Data_Ord_compareRecord)($dictOrdRecord);
$eqRowCons = ($Data_Eq_eqRowCons)((($dictOrdRecord)->EqRecord0)($Prim_undefined), $Prim_undefined);
    $__res = (function() use (&$Data_Symbol_reflectSymbol, $eqRowCons, &$Data_Ord_compare, &$Prim_undefined, &$Data_Ord_OrdRecord__dollar__Dict, &$Record_Unsafe_unsafeGet, &$Type_Proxy_Proxy, &$Data_Ord_notEq, &$Data_Ordering_EQ, $compareRecord1) {
  $__fn = function($__dollar____unused, $dictIsSymbol = null) use (&$Data_Symbol_reflectSymbol, $eqRowCons, &$Data_Ord_compare, &$Prim_undefined, &$Data_Ord_OrdRecord__dollar__Dict, &$Record_Unsafe_unsafeGet, &$Type_Proxy_Proxy, &$Data_Ord_notEq, &$Data_Ordering_EQ, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
$eqRowCons1 = ($eqRowCons)($dictIsSymbol);
    $__res = (function() use (&$Data_Ord_compare, $eqRowCons1, &$Prim_undefined, &$Data_Ord_OrdRecord__dollar__Dict, &$Record_Unsafe_unsafeGet, $reflectSymbol, &$Type_Proxy_Proxy, &$Data_Ord_notEq, &$Data_Ordering_EQ, $compareRecord1) {
  $__fn = function($dictOrd) use (&$Data_Ord_compare, $eqRowCons1, &$Prim_undefined, &$Data_Ord_OrdRecord__dollar__Dict, &$Record_Unsafe_unsafeGet, $reflectSymbol, &$Type_Proxy_Proxy, &$Data_Ord_notEq, &$Data_Ordering_EQ, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$compare3 = ($Data_Ord_compare)($dictOrd);
$eqRowCons2 = ($eqRowCons1)((($dictOrd)->Eq0)($Prim_undefined));
    $__res = ($Data_Ord_OrdRecord__dollar__Dict)((object)["compareRecord" => (function() use (&$Record_Unsafe_unsafeGet, $reflectSymbol, &$Type_Proxy_Proxy, $compare3, &$Data_Ord_notEq, &$Data_Ordering_EQ, $compareRecord1) {
  $__body = function($v, $ra, $rb) use (&$Record_Unsafe_unsafeGet, $reflectSymbol, &$Type_Proxy_Proxy, $compare3, &$Data_Ord_notEq, &$Data_Ordering_EQ, $compareRecord1) {
    $unsafeGet__prime__ = $Record_Unsafe_unsafeGet;
    $key = ($reflectSymbol)($Type_Proxy_Proxy);
    $left = ($compare3)(($unsafeGet__prime__)($key, $ra), ($unsafeGet__prime__)($key, $rb));
    $__case_0 = ($Data_Ord_notEq)($left, $Data_Ordering_EQ);
    if (($__case_0 === true)) {
return $left;
} else {
;
};
    if (true) {
return ($compareRecord1)($Type_Proxy_Proxy, $ra, $rb);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $ra = null, $rb = null) use (&$Record_Unsafe_unsafeGet, $reflectSymbol, &$Type_Proxy_Proxy, $compare3, &$Data_Ord_notEq, &$Data_Ordering_EQ, $compareRecord1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($v, $ra, $rb);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($v, $ra, $rb);
  };
  return $__fn;
})(), "EqRecord0" => (function() use ($eqRowCons2) {
  $__fn = function($__dollar____unused) use ($eqRowCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $eqRowCons2;
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

// Data_Ord_clamp
$Data_Ord_clamp = (function() use (&$Data_Ord_min, &$Data_Ord_max) {
  $__fn = function($dictOrd) use (&$Data_Ord_min, &$Data_Ord_max, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$min1 = ($Data_Ord_min)($dictOrd);
$max1 = ($Data_Ord_max)($dictOrd);
    $__res = (function() use ($min1, $max1) {
  $__fn = function($low, $hi = null, $x = null) use ($min1, $max1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($min1)($hi, ($max1)($low, $x));
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

// Data_Ord_between
$Data_Ord_between = (function() use (&$Data_Ord_lessThan, &$Data_Ord_greaterThan) {
  $__fn = function($dictOrd) use (&$Data_Ord_lessThan, &$Data_Ord_greaterThan, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$lessThan1 = ($Data_Ord_lessThan)($dictOrd);
$greaterThan1 = ($Data_Ord_greaterThan)($dictOrd);
    $__res = (function() {
  $__body = function($low, $hi, $x) {
    $__case_0 = $low;
    $__case_1 = $hi;
    $__case_2 = $x;
    if (true) {
$low1 = $__case_0;
$hi1 = $__case_1;
$x1 = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($low, $hi = null, $x = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($low, $hi, $x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($low, $hi, $x);
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

// Data_Ord_abs
$Data_Ord_abs = (function() use (&$Data_Ord_greaterThanOrEq, &$Data_Semiring_zero, &$Prim_undefined, &$Data_Ring_negate) {
  $__fn = function($dictOrd) use (&$Data_Ord_greaterThanOrEq, &$Data_Semiring_zero, &$Prim_undefined, &$Data_Ring_negate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$greaterThanOrEq1 = ($Data_Ord_greaterThanOrEq)($dictOrd);
    $__res = (function() use (&$Data_Semiring_zero, &$Prim_undefined, &$Data_Ring_negate, $greaterThanOrEq1) {
  $__fn = function($dictRing) use (&$Data_Semiring_zero, &$Prim_undefined, &$Data_Ring_negate, $greaterThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$zero = ($Data_Semiring_zero)((($dictRing)->Semiring0)($Prim_undefined));
$negate1 = ($Data_Ring_negate)($dictRing);
    $__res = (function() use ($greaterThanOrEq1, $zero, $negate1) {
  $__body = function($x) use ($greaterThanOrEq1, $zero, $negate1) {
    $__case_0 = ($greaterThanOrEq1)($x, $zero);
    if (($__case_0 === true)) {
return $x;
} else {
;
};
    if (true) {
return ($negate1)($x);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use ($greaterThanOrEq1, $zero, $negate1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($x);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($x);
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

