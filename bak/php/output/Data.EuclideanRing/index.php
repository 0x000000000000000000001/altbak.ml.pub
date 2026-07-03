<?php

namespace Data\EuclideanRing;

require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';

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




$Data_EuclideanRing_intDegree = function($x) { return abs($x); };
$Data_EuclideanRing_intDiv = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return (int)($x / $y); }; });
$Data_EuclideanRing_intMod = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return $x % $y; }; });
$Data_EuclideanRing_numDiv = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return $x / $y; }; });

// Data_EuclideanRing_disj
$Data_EuclideanRing_disj = ($Data_HeytingAlgebra_disj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_EuclideanRing_EuclideanRing$Dict
$Data_EuclideanRing_EuclideanRing__dollar__Dict = (function() {
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

// Data_EuclideanRing_mod
$Data_EuclideanRing_mod = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mod;
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

// Data_EuclideanRing_gcd
$Data_EuclideanRing_gcd = (function() use (&$Data_Eq_eq, &$Data_Semiring_zero, &$Prim_undefined, &$Data_EuclideanRing_mod, &$Data_EuclideanRing_gcd) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Semiring_zero, &$Prim_undefined, &$Data_EuclideanRing_mod, &$Data_EuclideanRing_gcd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($dictEq) use (&$Data_Eq_eq, &$Data_Semiring_zero, &$Prim_undefined, &$Data_EuclideanRing_mod, &$Data_EuclideanRing_gcd) {
while (true) {
$eq = ($Data_Eq_eq)($dictEq);
return (function() use (&$Data_Semiring_zero, &$Prim_undefined, &$Data_EuclideanRing_mod, $eq, &$Data_EuclideanRing_gcd, $dictEq) {
  $__fn = function($dictEuclideanRing) use (&$Data_Semiring_zero, &$Prim_undefined, &$Data_EuclideanRing_mod, $eq, &$Data_EuclideanRing_gcd, $dictEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$zero = ($Data_Semiring_zero)((((((($dictEuclideanRing)->CommutativeRing0)($Prim_undefined))->Ring0)($Prim_undefined))->Semiring0)($Prim_undefined));
$mod1 = ($Data_EuclideanRing_mod)($dictEuclideanRing);
    $__res = (function() use ($eq, $zero, &$Data_EuclideanRing_gcd, $dictEq, $dictEuclideanRing, $mod1) {
  $__body = function($a, $b) use ($eq, $zero, &$Data_EuclideanRing_gcd, $dictEq, $dictEuclideanRing, $mod1) {
    $__case_0 = ($eq)($b, $zero);
    if (($__case_0 === true)) {
return $a;
} else {
;
};
    if (true) {
return ($Data_EuclideanRing_gcd)($dictEq, $dictEuclideanRing, $b, ($mod1)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null) use ($eq, $zero, &$Data_EuclideanRing_gcd, $dictEq, $dictEuclideanRing, $mod1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $b);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $b);
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
}
})($dictEq);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_EuclideanRing_euclideanRingNumber
$Data_EuclideanRing_euclideanRingNumber = ($Data_EuclideanRing_EuclideanRing__dollar__Dict)((object)["degree" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = 1;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "div" => $Data_EuclideanRing_numDiv, "mod" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = 0.0;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() use (&$Data_CommutativeRing_commutativeRingNumber) {
  $__fn = function($__dollar____unused) use (&$Data_CommutativeRing_commutativeRingNumber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_CommutativeRing_commutativeRingNumber;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_EuclideanRing_euclideanRingInt
$Data_EuclideanRing_euclideanRingInt = ($Data_EuclideanRing_EuclideanRing__dollar__Dict)((object)["degree" => $Data_EuclideanRing_intDegree, "div" => $Data_EuclideanRing_intDiv, "mod" => $Data_EuclideanRing_intMod, "CommutativeRing0" => (function() use (&$Data_CommutativeRing_commutativeRingInt) {
  $__fn = function($__dollar____unused) use (&$Data_CommutativeRing_commutativeRingInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_CommutativeRing_commutativeRingInt;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_EuclideanRing_div
$Data_EuclideanRing_div = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->div;
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

// Data_EuclideanRing_lcm
$Data_EuclideanRing_lcm = (function() use (&$Data_Eq_eq, &$Data_EuclideanRing_gcd, &$Prim_undefined, &$Data_Semiring_zero, &$Data_EuclideanRing_div, &$Data_Semiring_mul, &$Data_EuclideanRing_disj) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_EuclideanRing_gcd, &$Prim_undefined, &$Data_Semiring_zero, &$Data_EuclideanRing_div, &$Data_Semiring_mul, &$Data_EuclideanRing_disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
$gcd1 = ($Data_EuclideanRing_gcd)($dictEq);
    $__res = (function() use (&$Prim_undefined, &$Data_Semiring_zero, &$Data_EuclideanRing_div, &$Data_Semiring_mul, $gcd1, &$Data_EuclideanRing_disj, $eq) {
  $__fn = function($dictEuclideanRing) use (&$Prim_undefined, &$Data_Semiring_zero, &$Data_EuclideanRing_div, &$Data_Semiring_mul, $gcd1, &$Data_EuclideanRing_disj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$Semiring0 = (((((($dictEuclideanRing)->CommutativeRing0)($Prim_undefined))->Ring0)($Prim_undefined))->Semiring0)($Prim_undefined);
$zero = ($Data_Semiring_zero)($Semiring0);
$div1 = ($Data_EuclideanRing_div)($dictEuclideanRing);
$mul = ($Data_Semiring_mul)($Semiring0);
$gcd2 = ($gcd1)($dictEuclideanRing);
    $__res = (function() use (&$Data_EuclideanRing_disj, $eq, $zero, $div1, $mul, $gcd2) {
  $__body = function($a, $b) use (&$Data_EuclideanRing_disj, $eq, $zero, $div1, $mul, $gcd2) {
    $__case_0 = ($Data_EuclideanRing_disj)(($eq)($a, $zero), ($eq)($b, $zero));
    if (($__case_0 === true)) {
return $zero;
} else {
;
};
    if (true) {
return ($div1)(($mul)($a, $b), ($gcd2)($a, $b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null) use (&$Data_EuclideanRing_disj, $eq, $zero, $div1, $mul, $gcd2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($a, $b);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($a, $b);
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

// Data_EuclideanRing_degree
$Data_EuclideanRing_degree = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->degree;
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

