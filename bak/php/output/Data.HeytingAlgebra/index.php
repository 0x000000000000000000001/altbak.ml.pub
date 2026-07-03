<?php

namespace Data\HeytingAlgebra;

require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
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




$Data_HeytingAlgebra_boolConj = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a && $b; }; });
$Data_HeytingAlgebra_boolDisj = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a || $b; }; });
$Data_HeytingAlgebra_boolNot = function($a) { return !$a; };

// Data_HeytingAlgebra_HeytingAlgebraRecord$Dict
$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict = (function() {
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

// Data_HeytingAlgebra_HeytingAlgebra$Dict
$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict = (function() {
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

// Data_HeytingAlgebra_ttRecord
$Data_HeytingAlgebra_ttRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ttRecord;
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

// Data_HeytingAlgebra_tt
$Data_HeytingAlgebra_tt = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tt;
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

// Data_HeytingAlgebra_notRecord
$Data_HeytingAlgebra_notRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->notRecord;
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

// Data_HeytingAlgebra_not
$Data_HeytingAlgebra_not = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->not;
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

// Data_HeytingAlgebra_impliesRecord
$Data_HeytingAlgebra_impliesRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->impliesRecord;
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

// Data_HeytingAlgebra_implies
$Data_HeytingAlgebra_implies = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->implies;
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

// Data_HeytingAlgebra_heytingAlgebraUnit
$Data_HeytingAlgebra_heytingAlgebraUnit = ($Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict)((object)["ff" => $Data_Unit_unit, "tt" => $Data_Unit_unit, "implies" => (function() use (&$Data_Unit_unit) {
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
})(), "conj" => (function() use (&$Data_Unit_unit) {
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
})(), "disj" => (function() use (&$Data_Unit_unit) {
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
})(), "not" => (function() use (&$Data_Unit_unit) {
  $__fn = function($v) use (&$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Unit_unit;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_HeytingAlgebra_heytingAlgebraRecordNil
$Data_HeytingAlgebra_heytingAlgebraRecordNil = ($Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict)((object)["conjRecord" => (function() {
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
})(), "disjRecord" => (function() {
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
})(), "ffRecord" => (function() {
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
})(), "impliesRecord" => (function() {
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
})(), "notRecord" => (function() {
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
})(), "ttRecord" => (function() {
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

// Data_HeytingAlgebra_heytingAlgebraProxy
$Data_HeytingAlgebra_heytingAlgebraProxy = ($Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict)((object)["conj" => (function() use (&$Type_Proxy_Proxy) {
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
})(), "disj" => (function() use (&$Type_Proxy_Proxy) {
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
})(), "implies" => (function() use (&$Type_Proxy_Proxy) {
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
})(), "ff" => $Type_Proxy_Proxy, "not" => (function() use (&$Type_Proxy_Proxy) {
  $__fn = function($v) use (&$Type_Proxy_Proxy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Type_Proxy_Proxy;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "tt" => $Type_Proxy_Proxy]);

// Data_HeytingAlgebra_ffRecord
$Data_HeytingAlgebra_ffRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ffRecord;
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

// Data_HeytingAlgebra_ff
$Data_HeytingAlgebra_ff = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ff;
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

// Data_HeytingAlgebra_disjRecord
$Data_HeytingAlgebra_disjRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->disjRecord;
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

// Data_HeytingAlgebra_disj
$Data_HeytingAlgebra_disj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->disj;
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

// Data_HeytingAlgebra_heytingAlgebraBoolean
$Data_HeytingAlgebra_heytingAlgebraBoolean = ($Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict)((object)["ff" => false, "tt" => true, "implies" => (function() use (&$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_heytingAlgebraBoolean, &$Data_HeytingAlgebra_not) {
  $__fn = function($a, $b = null) use (&$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_heytingAlgebraBoolean, &$Data_HeytingAlgebra_not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_HeytingAlgebra_disj)($Data_HeytingAlgebra_heytingAlgebraBoolean, ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean, $a), $b);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "conj" => $Data_HeytingAlgebra_boolConj, "disj" => $Data_HeytingAlgebra_boolDisj, "not" => $Data_HeytingAlgebra_boolNot]);

// Data_HeytingAlgebra_conjRecord
$Data_HeytingAlgebra_conjRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->conjRecord;
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

// Data_HeytingAlgebra_heytingAlgebraRecord
$Data_HeytingAlgebra_heytingAlgebraRecord = (function() use (&$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_HeytingAlgebra_ffRecord, &$Type_Proxy_Proxy, &$Data_HeytingAlgebra_ttRecord, &$Data_HeytingAlgebra_conjRecord, &$Data_HeytingAlgebra_disjRecord, &$Data_HeytingAlgebra_impliesRecord, &$Data_HeytingAlgebra_notRecord) {
  $__fn = function($__dollar____unused, $dictHeytingAlgebraRecord = null) use (&$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$Data_HeytingAlgebra_ffRecord, &$Type_Proxy_Proxy, &$Data_HeytingAlgebra_ttRecord, &$Data_HeytingAlgebra_conjRecord, &$Data_HeytingAlgebra_disjRecord, &$Data_HeytingAlgebra_impliesRecord, &$Data_HeytingAlgebra_notRecord, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict)((object)["ff" => ($Data_HeytingAlgebra_ffRecord)($dictHeytingAlgebraRecord, $Type_Proxy_Proxy, $Type_Proxy_Proxy), "tt" => ($Data_HeytingAlgebra_ttRecord)($dictHeytingAlgebraRecord, $Type_Proxy_Proxy, $Type_Proxy_Proxy), "conj" => ($Data_HeytingAlgebra_conjRecord)($dictHeytingAlgebraRecord, $Type_Proxy_Proxy), "disj" => ($Data_HeytingAlgebra_disjRecord)($dictHeytingAlgebraRecord, $Type_Proxy_Proxy), "implies" => ($Data_HeytingAlgebra_impliesRecord)($dictHeytingAlgebraRecord, $Type_Proxy_Proxy), "not" => ($Data_HeytingAlgebra_notRecord)($dictHeytingAlgebraRecord, $Type_Proxy_Proxy)]);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_HeytingAlgebra_conj
$Data_HeytingAlgebra_conj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->conj;
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

// Data_HeytingAlgebra_heytingAlgebraFunction
$Data_HeytingAlgebra_heytingAlgebraFunction = (function() use (&$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$ff1 = ($Data_HeytingAlgebra_ff)($dictHeytingAlgebra);
$tt1 = ($Data_HeytingAlgebra_tt)($dictHeytingAlgebra);
$implies1 = ($Data_HeytingAlgebra_implies)($dictHeytingAlgebra);
$conj1 = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
$disj1 = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
$not1 = ($Data_HeytingAlgebra_not)($dictHeytingAlgebra);
    $__res = ($Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict)((object)["ff" => (function() use ($ff1) {
  $__fn = function($v) use ($ff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $ff1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "tt" => (function() use ($tt1) {
  $__fn = function($v) use ($tt1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $tt1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "implies" => (function() use ($implies1) {
  $__fn = function($f, $g = null, $a = null) use ($implies1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($implies1)(($f)($a), ($g)($a));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($conj1) {
  $__fn = function($f, $g = null, $a = null) use ($conj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($conj1)(($f)($a), ($g)($a));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($disj1) {
  $__fn = function($f, $g = null, $a = null) use ($disj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($disj1)(($f)($a), ($g)($a));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "not" => (function() use ($not1) {
  $__fn = function($f, $a = null) use ($not1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($not1)(($f)($a));
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

// Data_HeytingAlgebra_heytingAlgebraRecordCons
$Data_HeytingAlgebra_heytingAlgebraRecordCons = (function() use (&$Data_Symbol_reflectSymbol, &$Data_HeytingAlgebra_conjRecord, &$Data_HeytingAlgebra_disjRecord, &$Data_HeytingAlgebra_impliesRecord, &$Data_HeytingAlgebra_ffRecord, &$Data_HeytingAlgebra_notRecord, &$Data_HeytingAlgebra_ttRecord, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($dictIsSymbol) use (&$Data_Symbol_reflectSymbol, &$Data_HeytingAlgebra_conjRecord, &$Data_HeytingAlgebra_disjRecord, &$Data_HeytingAlgebra_impliesRecord, &$Data_HeytingAlgebra_ffRecord, &$Data_HeytingAlgebra_notRecord, &$Data_HeytingAlgebra_ttRecord, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict, &$Type_Proxy_Proxy, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$reflectSymbol = ($Data_Symbol_reflectSymbol)($dictIsSymbol);
    $__res = (function() use (&$Data_HeytingAlgebra_conjRecord, &$Data_HeytingAlgebra_disjRecord, &$Data_HeytingAlgebra_impliesRecord, &$Data_HeytingAlgebra_ffRecord, &$Data_HeytingAlgebra_notRecord, &$Data_HeytingAlgebra_ttRecord, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet) {
  $__fn = function($__dollar____unused, $dictHeytingAlgebraRecord = null) use (&$Data_HeytingAlgebra_conjRecord, &$Data_HeytingAlgebra_disjRecord, &$Data_HeytingAlgebra_impliesRecord, &$Data_HeytingAlgebra_ffRecord, &$Data_HeytingAlgebra_notRecord, &$Data_HeytingAlgebra_ttRecord, &$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$conjRecord1 = ($Data_HeytingAlgebra_conjRecord)($dictHeytingAlgebraRecord);
$disjRecord1 = ($Data_HeytingAlgebra_disjRecord)($dictHeytingAlgebraRecord);
$impliesRecord1 = ($Data_HeytingAlgebra_impliesRecord)($dictHeytingAlgebraRecord);
$ffRecord1 = ($Data_HeytingAlgebra_ffRecord)($dictHeytingAlgebraRecord);
$notRecord1 = ($Data_HeytingAlgebra_notRecord)($dictHeytingAlgebraRecord);
$ttRecord1 = ($Data_HeytingAlgebra_ttRecord)($dictHeytingAlgebraRecord);
    $__res = (function() use (&$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict, $conjRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1) {
  $__fn = function($dictHeytingAlgebra) use (&$Data_HeytingAlgebra_conj, &$Data_HeytingAlgebra_disj, &$Data_HeytingAlgebra_implies, &$Data_HeytingAlgebra_ff, &$Data_HeytingAlgebra_not, &$Data_HeytingAlgebra_tt, &$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict, $conjRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$conj1 = ($Data_HeytingAlgebra_conj)($dictHeytingAlgebra);
$disj1 = ($Data_HeytingAlgebra_disj)($dictHeytingAlgebra);
$implies1 = ($Data_HeytingAlgebra_implies)($dictHeytingAlgebra);
$ff1 = ($Data_HeytingAlgebra_ff)($dictHeytingAlgebra);
$not1 = ($Data_HeytingAlgebra_not)($dictHeytingAlgebra);
$tt1 = ($Data_HeytingAlgebra_tt)($dictHeytingAlgebra);
    $__res = ($Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict)((object)["conjRecord" => (function() use ($conjRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $conj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($conjRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $conj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($conjRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($conj1)(($get)($ra), ($get)($rb)), $tail);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "disjRecord" => (function() use ($disjRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $disj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($disjRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $disj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($disjRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($disj1)(($get)($ra), ($get)($rb)), $tail);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "impliesRecord" => (function() use ($impliesRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $implies1) {
  $__fn = function($v, $ra = null, $rb = null) use ($impliesRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $implies1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($impliesRecord1)($Type_Proxy_Proxy, $ra, $rb);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($implies1)(($get)($ra), ($get)($rb)), $tail);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})(), "ffRecord" => (function() use ($ffRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $ff1) {
  $__fn = function($v, $row = null) use ($ffRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $ff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($ffRecord1)($Type_Proxy_Proxy, $row);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($ff1, $tail);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "notRecord" => (function() use ($notRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $not1) {
  $__fn = function($v, $row = null) use ($notRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, &$Record_Unsafe_unsafeGet, $not1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($notRecord1)($Type_Proxy_Proxy, $row);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
$get = ($Record_Unsafe_unsafeGet)($key);
    $__res = ($insert)(($not1)(($get)($row)), $tail);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "ttRecord" => (function() use ($ttRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $tt1) {
  $__fn = function($v, $row = null) use ($ttRecord1, &$Type_Proxy_Proxy, $reflectSymbol, &$Record_Unsafe_unsafeSet, $tt1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tail = ($ttRecord1)($Type_Proxy_Proxy, $row);
$key = ($reflectSymbol)($Type_Proxy_Proxy);
$insert = ($Record_Unsafe_unsafeSet)($key);
    $__res = ($insert)($tt1, $tail);
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

