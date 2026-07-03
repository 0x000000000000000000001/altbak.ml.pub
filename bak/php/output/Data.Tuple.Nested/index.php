<?php

namespace Data\Tuple\Nested;

require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Tuple_Nested_uncurry9
$Data_Tuple_Nested_uncurry9 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h, $i);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f__prime__, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f__prime__, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry8
$Data_Tuple_Nested_uncurry8 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f__prime__, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f__prime__, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry7
$Data_Tuple_Nested_uncurry7 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f__prime__, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f__prime__, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry6
$Data_Tuple_Nested_uncurry6 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f__prime__, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f__prime__, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry5
$Data_Tuple_Nested_uncurry5 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f1)($a, $b, $c, $d, $e);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry4
$Data_Tuple_Nested_uncurry4 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple"))))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
return ($f1)($a, $b, $c, $d);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry3
$Data_Tuple_Nested_uncurry3 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && (((($__case_1)->values[1])->values[1])->tag === "Tuple")))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
return ($f1)($a, $b, $c);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry2
$Data_Tuple_Nested_uncurry2 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && ((($__case_1)->values[1])->tag === "Tuple"))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
return ($f1)($a, $b);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry10
$Data_Tuple_Nested_uncurry10 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$j = (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f__prime__, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f__prime__, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry1
$Data_Tuple_Nested_uncurry1 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
return ($f1)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($f, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($f, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple9
$Data_Tuple_Nested_tuple9 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, ($Data_Tuple_Tuple)($i, $Data_Unit_unit)))))))));
    if ($__num > 9) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 9));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple8
$Data_Tuple_Nested_tuple8 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, $Data_Unit_unit))))))));
    if ($__num > 8) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 8));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple7
$Data_Tuple_Nested_tuple7 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, $Data_Unit_unit)))))));
    if ($__num > 7) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple6
$Data_Tuple_Nested_tuple6 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, $Data_Unit_unit))))));
    if ($__num > 6) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple5
$Data_Tuple_Nested_tuple5 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, $Data_Unit_unit)))));
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple4
$Data_Tuple_Nested_tuple4 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, $Data_Unit_unit))));
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple3
$Data_Tuple_Nested_tuple3 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, $Data_Unit_unit)));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple2
$Data_Tuple_Nested_tuple2 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, $Data_Unit_unit));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple10
$Data_Tuple_Nested_tuple10 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, ($Data_Tuple_Tuple)($i, ($Data_Tuple_Tuple)($j, $Data_Unit_unit))))))))));
    if ($__num > 10) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 10));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple1
$Data_Tuple_Nested_tuple1 = (function() use (&$Data_Tuple_Tuple, &$Data_Unit_unit) {
  $__fn = function($a) use (&$Data_Tuple_Tuple, &$Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Tuple_Tuple)($a, $Data_Unit_unit);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over9
$Data_Tuple_Nested_over9 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, ($Data_Tuple_Tuple)(($o1)($i), $z)))))))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over8
$Data_Tuple_Nested_over8 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)(($o1)($h), $z))))))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over7
$Data_Tuple_Nested_over7 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)(($o1)($g), $z)))))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over6
$Data_Tuple_Nested_over6 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)(($o1)($f), $z))))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over5
$Data_Tuple_Nested_over5 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$z = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)(($o1)($e), $z)))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over4
$Data_Tuple_Nested_over4 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple"))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$z = (((($__case_1)->values[1])->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)(($o1)($d), $z))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over3
$Data_Tuple_Nested_over3 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && (((($__case_1)->values[1])->values[1])->tag === "Tuple")))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$z = ((($__case_1)->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)(($o1)($c), $z)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over2
$Data_Tuple_Nested_over2 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && ((($__case_1)->values[1])->tag === "Tuple"))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$z = (($__case_1)->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)(($o1)($b), $z));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over10
$Data_Tuple_Nested_over10 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$j = (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, ($Data_Tuple_Tuple)($i, ($Data_Tuple_Tuple)(($o1)($j), $z))))))))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_over1
$Data_Tuple_Nested_over1 = (function() use (&$Data_Tuple_Tuple) {
  $__body = function($o, $v) use (&$Data_Tuple_Tuple) {
    $__case_0 = $o;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$z = ($__case_1)->values[1];
return ($Data_Tuple_Tuple)(($o1)($a), $z);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($o, $v = null) use (&$Data_Tuple_Tuple, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($o, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($o, $v);
  };
  return $__fn;
})();

// Data_Tuple_Nested_get9
$Data_Tuple_Nested_get9 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))))) {
$i = ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $i;
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
})();

// Data_Tuple_Nested_get8
$Data_Tuple_Nested_get8 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))) {
$h = (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $h;
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
})();

// Data_Tuple_Nested_get7
$Data_Tuple_Nested_get7 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))) {
$g = ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $g;
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
})();

// Data_Tuple_Nested_get6
$Data_Tuple_Nested_get6 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))) {
$f = (((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $f;
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
})();

// Data_Tuple_Nested_get5
$Data_Tuple_Nested_get5 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))) {
$e = ((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[0];
return $e;
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
})();

// Data_Tuple_Nested_get4
$Data_Tuple_Nested_get4 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple"))))) {
$d = (((($__case_0)->values[1])->values[1])->values[1])->values[0];
return $d;
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
})();

// Data_Tuple_Nested_get3
$Data_Tuple_Nested_get3 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && (((($__case_0)->values[1])->values[1])->tag === "Tuple")))) {
$c = ((($__case_0)->values[1])->values[1])->values[0];
return $c;
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
})();

// Data_Tuple_Nested_get2
$Data_Tuple_Nested_get2 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Tuple"))) {
$b = (($__case_0)->values[1])->values[0];
return $b;
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
})();

// Data_Tuple_Nested_get10
$Data_Tuple_Nested_get10 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))))) {
$j = (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $j;
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
})();

// Data_Tuple_Nested_get1
$Data_Tuple_Nested_get1 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
return $a;
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
})();

// Data_Tuple_Nested_curry9
$Data_Tuple_Nested_curry9 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 11) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f__prime__)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, ($Data_Tuple_Tuple)($i, $z))))))))));
    if ($__num > 11) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 11));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry8
$Data_Tuple_Nested_curry8 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f__prime__)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, $z)))))))));
    if ($__num > 10) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 10));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry7
$Data_Tuple_Nested_curry7 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f__prime__)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, $z))))))));
    if ($__num > 9) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 9));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry6
$Data_Tuple_Nested_curry6 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f__prime__)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, $z)))))));
    if ($__num > 8) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 8));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry5
$Data_Tuple_Nested_curry5 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null, $d = null, $e = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, $z))))));
    if ($__num > 7) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry4
$Data_Tuple_Nested_curry4 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null, $d = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, $z)))));
    if ($__num > 6) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry3
$Data_Tuple_Nested_curry3 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, $z))));
    if ($__num > 5) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry2
$Data_Tuple_Nested_curry2 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f = null, $a = null, $b = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, $z)));
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry10
$Data_Tuple_Nested_curry10 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 12) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f__prime__)(($Data_Tuple_Tuple)($a, ($Data_Tuple_Tuple)($b, ($Data_Tuple_Tuple)($c, ($Data_Tuple_Tuple)($d, ($Data_Tuple_Tuple)($e, ($Data_Tuple_Tuple)($f, ($Data_Tuple_Tuple)($g, ($Data_Tuple_Tuple)($h, ($Data_Tuple_Tuple)($i, ($Data_Tuple_Tuple)($j, $z)))))))))));
    if ($__num > 12) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 12));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry1
$Data_Tuple_Nested_curry1 = (function() use (&$Data_Tuple_Tuple) {
  $__fn = function($z, $f = null, $a = null) use (&$Data_Tuple_Tuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($f)(($Data_Tuple_Tuple)($a, $z));
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

