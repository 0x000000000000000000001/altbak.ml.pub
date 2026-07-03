<?php

namespace Data\Semiring\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Semiring.Generic/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Semiring_Generic_GenericSemiring$Dict
$Data_Semiring_Generic_GenericSemiring__dollar__Dict = (function() {
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

// Data_Semiring_Generic_genericZero'
$Data_Semiring_Generic_genericZero__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericZero__prime__;
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

// Data_Semiring_Generic_genericZero
$Data_Semiring_Generic_genericZero = (function() use (&$Data_Generic_Rep_to, &$Data_Semiring_Generic_genericZero__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Semiring_Generic_genericZero__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use ($to, &$Data_Semiring_Generic_genericZero__prime__) {
  $__fn = function($dictGenericSemiring) use ($to, &$Data_Semiring_Generic_genericZero__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($Data_Semiring_Generic_genericZero__prime__)($dictGenericSemiring));
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

// Data_Semiring_Generic_genericSemiringNoArguments
$Data_Semiring_Generic_genericSemiringNoArguments = ($Data_Semiring_Generic_GenericSemiring__dollar__Dict)((object)["genericAdd'" => (function() use (&$Data_Generic_Rep_NoArguments) {
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_NoArguments, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Generic_Rep_NoArguments;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "genericZero'" => $Data_Generic_Rep_NoArguments, "genericMul'" => (function() use (&$Data_Generic_Rep_NoArguments) {
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_NoArguments, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Generic_Rep_NoArguments;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "genericOne'" => $Data_Generic_Rep_NoArguments]);

// Data_Semiring_Generic_genericSemiringArgument
$Data_Semiring_Generic_genericSemiringArgument = (function() use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Semiring_zero, &$Data_Semiring_one) {
  $__fn = function($dictSemiring) use (&$Data_Semiring_add, &$Data_Semiring_mul, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Argument, &$Data_Semiring_zero, &$Data_Semiring_one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$add = ($Data_Semiring_add)($dictSemiring);
$mul = ($Data_Semiring_mul)($dictSemiring);
    $__res = ($Data_Semiring_Generic_GenericSemiring__dollar__Dict)((object)["genericAdd'" => (function() use (&$Data_Generic_Rep_Argument, $add) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Argument, $add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Generic_Rep_Argument)(($add)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Argument, $add, $__body, &$__fn) {
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
})(), "genericZero'" => ($Data_Generic_Rep_Argument)(($Data_Semiring_zero)($dictSemiring)), "genericMul'" => (function() use (&$Data_Generic_Rep_Argument, $mul) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Argument, $mul) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($Data_Generic_Rep_Argument)(($mul)($x, $y));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Argument, $mul, $__body, &$__fn) {
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
})(), "genericOne'" => ($Data_Generic_Rep_Argument)(($Data_Semiring_one)($dictSemiring))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericOne'
$Data_Semiring_Generic_genericOne__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericOne__prime__;
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

// Data_Semiring_Generic_genericOne
$Data_Semiring_Generic_genericOne = (function() use (&$Data_Generic_Rep_to, &$Data_Semiring_Generic_genericOne__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Semiring_Generic_genericOne__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use ($to, &$Data_Semiring_Generic_genericOne__prime__) {
  $__fn = function($dictGenericSemiring) use ($to, &$Data_Semiring_Generic_genericOne__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($Data_Semiring_Generic_genericOne__prime__)($dictGenericSemiring));
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

// Data_Semiring_Generic_genericMul'
$Data_Semiring_Generic_genericMul__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericMul__prime__;
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

// Data_Semiring_Generic_genericMul
$Data_Semiring_Generic_genericMul = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Semiring_Generic_genericMul__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Semiring_Generic_genericMul__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Semiring_Generic_genericMul__prime__, $to, $from) {
  $__fn = function($dictGenericSemiring) use (&$Data_Semiring_Generic_genericMul__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericMul__prime__1 = ($Data_Semiring_Generic_genericMul__prime__)($dictGenericSemiring);
    $__res = (function() use ($to, $genericMul__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericMul__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericMul__prime__1)(($from)($x), ($from)($y)));
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

// Data_Semiring_Generic_genericAdd'
$Data_Semiring_Generic_genericAdd__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericAdd__prime__;
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

// Data_Semiring_Generic_genericSemiringConstructor
$Data_Semiring_Generic_genericSemiringConstructor = (function() use (&$Data_Semiring_Generic_genericAdd__prime__, &$Data_Semiring_Generic_genericMul__prime__, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Semiring_Generic_genericZero__prime__, &$Data_Semiring_Generic_genericOne__prime__) {
  $__fn = function($dictGenericSemiring) use (&$Data_Semiring_Generic_genericAdd__prime__, &$Data_Semiring_Generic_genericMul__prime__, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Constructor, &$Data_Semiring_Generic_genericZero__prime__, &$Data_Semiring_Generic_genericOne__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAdd__prime__1 = ($Data_Semiring_Generic_genericAdd__prime__)($dictGenericSemiring);
$genericMul__prime__1 = ($Data_Semiring_Generic_genericMul__prime__)($dictGenericSemiring);
    $__res = ($Data_Semiring_Generic_GenericSemiring__dollar__Dict)((object)["genericAdd'" => (function() use (&$Data_Generic_Rep_Constructor, $genericAdd__prime__1) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Constructor, $genericAdd__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Constructor)(($genericAdd__prime__1)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Constructor, $genericAdd__prime__1, $__body, &$__fn) {
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
})(), "genericZero'" => ($Data_Generic_Rep_Constructor)(($Data_Semiring_Generic_genericZero__prime__)($dictGenericSemiring)), "genericMul'" => (function() use (&$Data_Generic_Rep_Constructor, $genericMul__prime__1) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Constructor, $genericMul__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($Data_Generic_Rep_Constructor)(($genericMul__prime__1)($a1, $a2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Constructor, $genericMul__prime__1, $__body, &$__fn) {
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
})(), "genericOne'" => ($Data_Generic_Rep_Constructor)(($Data_Semiring_Generic_genericOne__prime__)($dictGenericSemiring))]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericSemiringProduct
$Data_Semiring_Generic_genericSemiringProduct = (function() use (&$Data_Semiring_Generic_genericAdd__prime__, &$Data_Semiring_Generic_genericZero__prime__, &$Data_Semiring_Generic_genericMul__prime__, &$Data_Semiring_Generic_genericOne__prime__, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Product) {
  $__fn = function($dictGenericSemiring) use (&$Data_Semiring_Generic_genericAdd__prime__, &$Data_Semiring_Generic_genericZero__prime__, &$Data_Semiring_Generic_genericMul__prime__, &$Data_Semiring_Generic_genericOne__prime__, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Product, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAdd__prime__1 = ($Data_Semiring_Generic_genericAdd__prime__)($dictGenericSemiring);
$genericZero__prime__1 = ($Data_Semiring_Generic_genericZero__prime__)($dictGenericSemiring);
$genericMul__prime__1 = ($Data_Semiring_Generic_genericMul__prime__)($dictGenericSemiring);
$genericOne__prime__1 = ($Data_Semiring_Generic_genericOne__prime__)($dictGenericSemiring);
    $__res = (function() use (&$Data_Semiring_Generic_genericAdd__prime__, &$Data_Semiring_Generic_genericMul__prime__, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Product, $genericAdd__prime__1, $genericZero__prime__1, &$Data_Semiring_Generic_genericZero__prime__, $genericMul__prime__1, $genericOne__prime__1, &$Data_Semiring_Generic_genericOne__prime__) {
  $__fn = function($dictGenericSemiring1) use (&$Data_Semiring_Generic_genericAdd__prime__, &$Data_Semiring_Generic_genericMul__prime__, &$Data_Semiring_Generic_GenericSemiring__dollar__Dict, &$Data_Generic_Rep_Product, $genericAdd__prime__1, $genericZero__prime__1, &$Data_Semiring_Generic_genericZero__prime__, $genericMul__prime__1, $genericOne__prime__1, &$Data_Semiring_Generic_genericOne__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAdd__prime__2 = ($Data_Semiring_Generic_genericAdd__prime__)($dictGenericSemiring1);
$genericMul__prime__2 = ($Data_Semiring_Generic_genericMul__prime__)($dictGenericSemiring1);
    $__res = ($Data_Semiring_Generic_GenericSemiring__dollar__Dict)((object)["genericAdd'" => (function() use (&$Data_Generic_Rep_Product, $genericAdd__prime__1, $genericAdd__prime__2) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Product, $genericAdd__prime__1, $genericAdd__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Generic_Rep_Product)(($genericAdd__prime__1)($a1, $a2), ($genericAdd__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Product, $genericAdd__prime__1, $genericAdd__prime__2, $__body, &$__fn) {
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
})(), "genericZero'" => ($Data_Generic_Rep_Product)($genericZero__prime__1, ($Data_Semiring_Generic_genericZero__prime__)($dictGenericSemiring1)), "genericMul'" => (function() use (&$Data_Generic_Rep_Product, $genericMul__prime__1, $genericMul__prime__2) {
  $__body = function($v, $v1) use (&$Data_Generic_Rep_Product, $genericMul__prime__1, $genericMul__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Generic_Rep_Product)(($genericMul__prime__1)($a1, $a2), ($genericMul__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Generic_Rep_Product, $genericMul__prime__1, $genericMul__prime__2, $__body, &$__fn) {
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
})(), "genericOne'" => ($Data_Generic_Rep_Product)($genericOne__prime__1, ($Data_Semiring_Generic_genericOne__prime__)($dictGenericSemiring1))]);
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

// Data_Semiring_Generic_genericAdd
$Data_Semiring_Generic_genericAdd = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Semiring_Generic_genericAdd__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Semiring_Generic_genericAdd__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Semiring_Generic_genericAdd__prime__, $to, $from) {
  $__fn = function($dictGenericSemiring) use (&$Data_Semiring_Generic_genericAdd__prime__, $to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericAdd__prime__1 = ($Data_Semiring_Generic_genericAdd__prime__)($dictGenericSemiring);
    $__res = (function() use ($to, $genericAdd__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericAdd__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($to)(($genericAdd__prime__1)(($from)($x), ($from)($y)));
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

