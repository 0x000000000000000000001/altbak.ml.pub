<?php

namespace Data\Eq\Generic;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Eq.Generic/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Eq_Generic_conj
$Data_Eq_Generic_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Eq_Generic_GenericEq$Dict
$Data_Eq_Generic_GenericEq__dollar__Dict = (function() {
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

// Data_Eq_Generic_genericEqNoConstructors
$Data_Eq_Generic_genericEqNoConstructors = ($Data_Eq_Generic_GenericEq__dollar__Dict)((object)["genericEq'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = true;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Eq_Generic_genericEqNoArguments
$Data_Eq_Generic_genericEqNoArguments = ($Data_Eq_Generic_GenericEq__dollar__Dict)((object)["genericEq'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = true;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Eq_Generic_genericEqArgument
$Data_Eq_Generic_genericEqArgument = (function() use (&$Data_Eq_eq, &$Data_Eq_Generic_GenericEq__dollar__Dict) {
  $__fn = function($dictEq) use (&$Data_Eq_eq, &$Data_Eq_Generic_GenericEq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$eq = ($Data_Eq_eq)($dictEq);
    $__res = ($Data_Eq_Generic_GenericEq__dollar__Dict)((object)["genericEq'" => (function() use ($eq) {
  $__body = function($v, $v1) use ($eq) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($eq)($a1, $a2);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($eq, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Eq_Generic_genericEq'
$Data_Eq_Generic_genericEq__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericEq__prime__;
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

// Data_Eq_Generic_genericEqConstructor
$Data_Eq_Generic_genericEqConstructor = (function() use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict) {
  $__fn = function($dictGenericEq) use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericEq__prime__1 = ($Data_Eq_Generic_genericEq__prime__)($dictGenericEq);
    $__res = ($Data_Eq_Generic_GenericEq__dollar__Dict)((object)["genericEq'" => (function() use ($genericEq__prime__1) {
  $__body = function($v, $v1) use ($genericEq__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericEq__prime__1)($a1, $a2);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($genericEq__prime__1, $__body, &$__fn) {
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
})()]);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Eq_Generic_genericEqProduct
$Data_Eq_Generic_genericEqProduct = (function() use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, &$Data_Eq_Generic_conj) {
  $__fn = function($dictGenericEq) use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, &$Data_Eq_Generic_conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericEq__prime__1 = ($Data_Eq_Generic_genericEq__prime__)($dictGenericEq);
    $__res = (function() use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, &$Data_Eq_Generic_conj, $genericEq__prime__1) {
  $__fn = function($dictGenericEq1) use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, &$Data_Eq_Generic_conj, $genericEq__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericEq__prime__2 = ($Data_Eq_Generic_genericEq__prime__)($dictGenericEq1);
    $__res = ($Data_Eq_Generic_GenericEq__dollar__Dict)((object)["genericEq'" => (function() use (&$Data_Eq_Generic_conj, $genericEq__prime__1, $genericEq__prime__2) {
  $__body = function($v, $v1) use (&$Data_Eq_Generic_conj, $genericEq__prime__1, $genericEq__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($Data_Eq_Generic_conj)(($genericEq__prime__1)($a1, $a2), ($genericEq__prime__2)($b1, $b2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Eq_Generic_conj, $genericEq__prime__1, $genericEq__prime__2, $__body, &$__fn) {
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

// Data_Eq_Generic_genericEqSum
$Data_Eq_Generic_genericEqSum = (function() use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict) {
  $__fn = function($dictGenericEq) use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericEq__prime__1 = ($Data_Eq_Generic_genericEq__prime__)($dictGenericEq);
    $__res = (function() use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, $genericEq__prime__1) {
  $__fn = function($dictGenericEq1) use (&$Data_Eq_Generic_genericEq__prime__, &$Data_Eq_Generic_GenericEq__dollar__Dict, $genericEq__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericEq__prime__2 = ($Data_Eq_Generic_genericEq__prime__)($dictGenericEq1);
    $__res = ($Data_Eq_Generic_GenericEq__dollar__Dict)((object)["genericEq'" => (function() use ($genericEq__prime__1, $genericEq__prime__2) {
  $__body = function($v, $v1) use ($genericEq__prime__1, $genericEq__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inl"))) {
$a1 = ($__case_0)->values[0];
$a2 = ($__case_1)->values[0];
return ($genericEq__prime__1)($a1, $a2);
} else {
;
};
    if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inr"))) {
$b1 = ($__case_0)->values[0];
$b2 = ($__case_1)->values[0];
return ($genericEq__prime__2)($b1, $b2);
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
  $__fn = function($v, $v1 = null) use ($genericEq__prime__1, $genericEq__prime__2, $__body, &$__fn) {
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

// Data_Eq_Generic_genericEq
$Data_Eq_Generic_genericEq = (function() use (&$Data_Generic_Rep_from, &$Data_Eq_Generic_genericEq__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_from, &$Data_Eq_Generic_genericEq__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Eq_Generic_genericEq__prime__, $from) {
  $__fn = function($dictGenericEq) use (&$Data_Eq_Generic_genericEq__prime__, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericEq__prime__1 = ($Data_Eq_Generic_genericEq__prime__)($dictGenericEq);
    $__res = (function() use ($genericEq__prime__1, $from) {
  $__fn = function($x, $y = null) use ($genericEq__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($genericEq__prime__1)(($from)($x), ($from)($y));
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

