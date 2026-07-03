<?php

namespace Data\Functor\Coproduct\Nested;

require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Functor_Coproduct_Nested_unwrap
$Data_Functor_Coproduct_Nested_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Functor_Coproduct_Nested_in9
$Data_Functor_Coproduct_Nested_in9 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v)))))))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in8
$Data_Functor_Coproduct_Nested_in8 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v))))))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in7
$Data_Functor_Coproduct_Nested_in7 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v)))))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in6
$Data_Functor_Coproduct_Nested_in6 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v))))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in5
$Data_Functor_Coproduct_Nested_in5 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v)))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in4
$Data_Functor_Coproduct_Nested_in4 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in3
$Data_Functor_Coproduct_Nested_in3 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in2
$Data_Functor_Coproduct_Nested_in2 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in10
$Data_Functor_Coproduct_Nested_in10 = (function() use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left) {
  $__fn = function($v) use (&$Data_Functor_Coproduct_right, &$Data_Functor_Coproduct_left, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_right)(($Data_Functor_Coproduct_left)($v))))))))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in1
$Data_Functor_Coproduct_Nested_in1 = $Data_Functor_Coproduct_left;

// Data_Functor_Coproduct_Nested_coproduct9
$Data_Functor_Coproduct_Nested_coproduct9 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $h, $i, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
$__case_0 = $_7;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($h)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_8 = ($__case_0)->values[0];
$__case_0 = $_8;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($i)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_9 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_9));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 10) {
      $__res = $__body($a, $b, $c, $d, $e, $f, $g, $h, $i, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 10));
    }
    return $__body($a, $b, $c, $d, $e, $f, $g, $h, $i, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct8
$Data_Functor_Coproduct_Nested_coproduct8 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $h, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
$__case_0 = $_7;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($h)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_8 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_8));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 9) {
      $__res = $__body($a, $b, $c, $d, $e, $f, $g, $h, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 9));
    }
    return $__body($a, $b, $c, $d, $e, $f, $g, $h, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct7
$Data_Functor_Coproduct_Nested_coproduct7 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_7));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 8) {
      $__res = $__body($a, $b, $c, $d, $e, $f, $g, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 8));
    }
    return $__body($a, $b, $c, $d, $e, $f, $g, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct6
$Data_Functor_Coproduct_Nested_coproduct6 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $d, $e, $f, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_6));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 7) {
      $__res = $__body($a, $b, $c, $d, $e, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 7));
    }
    return $__body($a, $b, $c, $d, $e, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct5
$Data_Functor_Coproduct_Nested_coproduct5 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $d, $e, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_5));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 6) {
      $__res = $__body($a, $b, $c, $d, $e, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 6));
    }
    return $__body($a, $b, $c, $d, $e, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct4
$Data_Functor_Coproduct_Nested_coproduct4 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $d, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_4));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 5) {
      $__res = $__body($a, $b, $c, $d, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 5));
    }
    return $__body($a, $b, $c, $d, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct3
$Data_Functor_Coproduct_Nested_coproduct3 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_3));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 4) {
      $__res = $__body($a, $b, $c, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__body($a, $b, $c, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct2
$Data_Functor_Coproduct_Nested_coproduct2 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_2));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($a, $b, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($a, $b, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct10
$Data_Functor_Coproduct_Nested_coproduct10 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
$__case_0 = $_7;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($h)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_8 = ($__case_0)->values[0];
$__case_0 = $_8;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($i)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_9 = ($__case_0)->values[0];
$__case_0 = $_9;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($j)($r);
} else {
;
};
if ((($__case_0)->tag === "Right")) {
$_10 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_10));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null, $y = null) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 11) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 11) {
      $__res = $__body($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 11));
    }
    return $__body($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct1
$Data_Functor_Coproduct_Nested_coproduct1 = (function() use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
  $__body = function($y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return $r;
} else {
;
};
    if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
return ($Data_Void_absurd)(($Data_Functor_Coproduct_Nested_unwrap)($_1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($y) use (&$Data_Void_absurd, &$Data_Functor_Coproduct_Nested_unwrap, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at9
$Data_Functor_Coproduct_Nested_at9 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left")))))))))) {
$r = ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at8
$Data_Functor_Coproduct_Nested_at8 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left"))))))))) {
$r = (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at7
$Data_Functor_Coproduct_Nested_at7 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left")))))))) {
$r = ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at6
$Data_Functor_Coproduct_Nested_at6 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left"))))))) {
$r = (((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at5
$Data_Functor_Coproduct_Nested_at5 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Left")))))) {
$r = ((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at4
$Data_Functor_Coproduct_Nested_at4 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->values[0])->tag === "Left"))))) {
$r = (((($__case_0)->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at3
$Data_Functor_Coproduct_Nested_at3 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && (((($__case_0)->values[0])->values[0])->tag === "Left")))) {
$r = ((($__case_0)->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at2
$Data_Functor_Coproduct_Nested_at2 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Left"))) {
$r = (($__case_0)->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at10
$Data_Functor_Coproduct_Nested_at10 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left"))))))))))) {
$r = (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at1
$Data_Functor_Coproduct_Nested_at1 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
;
};
    if (true) {
return $b;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($b, $f, $y);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($b, $f, $y);
  };
  return $__fn;
})();

