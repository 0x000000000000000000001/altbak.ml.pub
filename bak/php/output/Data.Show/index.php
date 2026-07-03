<?php

namespace Data\Show;

require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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




$Data_Show_showIntImpl = function($i) { return (string)$i; };
$Data_Show_showStringImpl = function($s) { return $s; };
$Data_Show_showNumberImpl = function($n) { return (string)$n; };
$Data_Show_showCharImpl = function($c) { return $c; };
$Data_Show_showArrayImpl = phpurs_uncurry2(function($f) { return function($xs) use(&$f) { return "[" . implode(",", array_map($f, $xs)) . "]"; }; });

// Data_Show_append
$Data_Show_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Show_ShowRecordFields$Dict
$Data_Show_ShowRecordFields__dollar__Dict = (function() {
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

// Data_Show_Show$Dict
$Data_Show_Show__dollar__Dict = (function() {
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

// Data_Show_showVoid
$Data_Show_showVoid = ($Data_Show_Show__dollar__Dict)((object)["show" => $Data_Void_absurd]);

// Data_Show_showUnit
$Data_Show_showUnit = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = "unit";
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Show_showString
$Data_Show_showString = ($Data_Show_Show__dollar__Dict)((object)["show" => $Data_Show_showStringImpl]);

// Data_Show_showRecordFieldsNil
$Data_Show_showRecordFieldsNil = ($Data_Show_ShowRecordFields__dollar__Dict)((object)["showRecordFields" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = "";
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Show_showRecordFields
$Data_Show_showRecordFields = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->showRecordFields;
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

// Data_Show_showRecord
$Data_Show_showRecord = (function() use (&$Data_Show_showRecordFields, &$Data_Show_Show__dollar__Dict, &$Data_Show_append, &$Type_Proxy_Proxy) {
  $__fn = function($__dollar____unused_, $__dollar____unused = null, $dictShowRecordFields = null) use (&$Data_Show_showRecordFields, &$Data_Show_Show__dollar__Dict, &$Data_Show_append, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$showRecordFields1 = ($Data_Show_showRecordFields)($dictShowRecordFields);
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Show_append, $showRecordFields1, &$Type_Proxy_Proxy) {
  $__fn = function($record) use (&$Data_Show_append, $showRecordFields1, &$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Show_append)("{", ($Data_Show_append)(($showRecordFields1)($Type_Proxy_Proxy, $record), "}"));
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

// Data_Show_showProxy
$Data_Show_showProxy = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = "Proxy";
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Show_showNumber
$Data_Show_showNumber = ($Data_Show_Show__dollar__Dict)((object)["show" => $Data_Show_showNumberImpl]);

// Data_Show_showInt
$Data_Show_showInt = ($Data_Show_Show__dollar__Dict)((object)["show" => $Data_Show_showIntImpl]);

// Data_Show_showChar
$Data_Show_showChar = ($Data_Show_Show__dollar__Dict)((object)["show" => $Data_Show_showCharImpl]);

// Data_Show_showBoolean
$Data_Show_showBoolean = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return "true";
} else {
;
};
    if (($__case_0 === false)) {
return "false";
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
})()]);

// Data_Show_show
$Data_Show_show = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->show;
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

// Data_Show_showArray
$Data_Show_showArray = (function() use (&$Data_Show_Show__dollar__Dict, &$Data_Show_showArrayImpl, &$Data_Show_show) {
  $__fn = function($dictShow) use (&$Data_Show_Show__dollar__Dict, &$Data_Show_showArrayImpl, &$Data_Show_show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Show_Show__dollar__Dict)((object)["show" => ($Data_Show_showArrayImpl)(($Data_Show_show)($dictShow))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Show_showRecordFieldsCons
$Data_Show_showRecordFieldsCons = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Show_showRecordFields, &$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Show_showRecordFields, &$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_Show_showRecordFields, &$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Show_append) {
  $__fn = function($dictShowRecordFields) use (&$Data_Show_showRecordFields, &$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Show_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$showRecordFields1 = ($Data_Show_showRecordFields)($dictShowRecordFields);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, $showRecordFields1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Show_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, $showRecordFields1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Show_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_ShowRecordFields__dollar__Dict)((object)["showRecordFields" => (function() use ($showRecordFields1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Show_append, $show1) {
  $__fn = function($v, $record = null) use ($showRecordFields1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeGet, &$Data_Show_append, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($showRecordFields1)($Type_Proxy_Proxy, $record);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$focus = ($Record_Unsafe_unsafeGet)($key, $record);
    $__res = ($Data_Show_append)(" ", ($Data_Show_append)($key, ($Data_Show_append)(": ", ($Data_Show_append)(($show1)($focus), ($Data_Show_append)(",", $tail)))));
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

// Data_Show_showRecordFieldsConsNil
$Data_Show_showRecordFieldsConsNil = (function() use (&$Data_Symbol_reflectSymbol, &$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, $reflectSymbol, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append) {
  $__fn = function($dictShow) use (&$Data_Show_show, &$Data_Show_ShowRecordFields__dollar__Dict, $reflectSymbol, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$show1 = ($Data_Show_show)($dictShow);
    $__res = ($Data_Show_ShowRecordFields__dollar__Dict)((object)["showRecordFields" => (function() use ($reflectSymbol, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append, $show1) {
  $__fn = function($v, $record = null) use ($reflectSymbol, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeGet, &$Data_Show_append, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$focus = ($Record_Unsafe_unsafeGet)($key, $record);
    $__res = ($Data_Show_append)(" ", ($Data_Show_append)($key, ($Data_Show_append)(": ", ($Data_Show_append)(($show1)($focus), " "))));
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

