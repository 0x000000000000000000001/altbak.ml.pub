<?php

namespace Data\Int;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Int.Bits/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Int_conj
$Data_Int_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Int_greaterThanOrEq
$Data_Int_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_Int_lessThanOrEq
$Data_Int_lessThanOrEq = ($Data_Ord_lessThanOrEq)($Data_Ord_ordInt);

// Data_Int_notEq
$Data_Int_notEq = ($Data_Eq_notEq)($Data_Eq_eqInt);

// Data_Int_not
$Data_Int_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Int_greaterThanOrEq1
$Data_Int_greaterThanOrEq1 = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordNumber);

// Data_Int_top
$Data_Int_top = ($Data_Bounded_top)($Data_Bounded_boundedInt);

// Data_Int_lessThanOrEq1
$Data_Int_lessThanOrEq1 = ($Data_Ord_lessThanOrEq)($Data_Ord_ordNumber);

// Data_Int_bottom
$Data_Int_bottom = ($Data_Bounded_bottom)($Data_Bounded_boundedInt);

// Data_Int_compose
$Data_Int_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Int_eq
$Data_Int_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Int_Radix
$Data_Int_Radix = (function() {
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

// Data_Int_Even
$Data_Int_Even = (object)["tag" => "Even", "values" => []];

// Data_Int_Odd
$Data_Int_Odd = (object)["tag" => "Odd", "values" => []];

// Data_Int_showParity
$Data_Int_showParity = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Even")) {
return "Even";
} else {
;
};
    if ((($__case_0)->tag === "Odd")) {
return "Odd";
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

// Data_Int_radix
$Data_Int_radix = (function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
  };
  return $__fn;
})();

// Data_Int_odd
$Data_Int_odd = (function() use (&$Data_Int_notEq, &$Data_Int_Bits_and) {
  $__fn = function($x) use (&$Data_Int_notEq, &$Data_Int_Bits_and, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Int_notEq)(($Data_Int_Bits_and)($x, 1), 0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Int_octal
$Data_Int_octal = ($Data_Int_Radix)(8);

// Data_Int_hexadecimal
$Data_Int_hexadecimal = ($Data_Int_Radix)(16);

// Data_Int_fromStringAs
$Data_Int_fromStringAs = ($Data_Int_fromStringAsImpl)($Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Int_fromString
$Data_Int_fromString = ($Data_Int_fromStringAs)(($Data_Int_Radix)(10));

// Data_Int_fromNumber
$Data_Int_fromNumber = ($Data_Int_fromNumberImpl)($Data_Maybe_Just, $Data_Maybe_Nothing);

// Data_Int_unsafeClamp
$Data_Int_unsafeClamp = (function() {
  $__body = function($x) {
    $__case_0 = $x;
    if (true) {
$x1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x) use ($__body, &$__fn) {
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

// Data_Int_round
$Data_Int_round = ($Data_Int_compose)($Data_Int_unsafeClamp, $Data_Number_round);

// Data_Int_trunc
$Data_Int_trunc = ($Data_Int_compose)($Data_Int_unsafeClamp, $Data_Number_trunc);

// Data_Int_floor
$Data_Int_floor = ($Data_Int_compose)($Data_Int_unsafeClamp, $Data_Number_floor);

// Data_Int_even
$Data_Int_even = (function() use (&$Data_Int_eq, &$Data_Int_Bits_and) {
  $__fn = function($x) use (&$Data_Int_eq, &$Data_Int_Bits_and, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Int_eq)(($Data_Int_Bits_and)($x, 1), 0);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Int_parity
$Data_Int_parity = (function() use (&$Data_Int_even, &$Data_Int_Even, &$Data_Int_Odd) {
  $__body = function($n) use (&$Data_Int_even, &$Data_Int_Even, &$Data_Int_Odd) {
    $__case_0 = ($Data_Int_even)($n);
    if (($__case_0 === true)) {
return $Data_Int_Even;
} else {
;
};
    if (true) {
return $Data_Int_Odd;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($n) use (&$Data_Int_even, &$Data_Int_Even, &$Data_Int_Odd, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($n);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($n);
  };
  return $__fn;
})();

// Data_Int_eqParity
$Data_Int_eqParity = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
return true;
} else {
;
};
    if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
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
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
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
})()]);

// Data_Int_eq1
$Data_Int_eq1 = ($Data_Eq_eq)($Data_Int_eqParity);

// Data_Int_ordParity
$Data_Int_ordParity = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
  $__body = function($x, $y) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
return $Data_Ordering_EQ;
} else {
;
};
    if ((($__case_0)->tag === "Even")) {
return $Data_Ordering_LT;
} else {
;
};
    if ((($__case_1)->tag === "Even")) {
return $Data_Ordering_GT;
} else {
;
};
    if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
return $Data_Ordering_EQ;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Ordering_EQ, &$Data_Ordering_LT, &$Data_Ordering_GT, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Int_eqParity) {
  $__fn = function($__dollar____unused) use (&$Data_Int_eqParity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Int_eqParity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Int_semiringParity
$Data_Int_semiringParity = ($Data_Semiring_Semiring__dollar__Dict)((object)["zero" => $Data_Int_Even, "add" => (function() use (&$Data_Int_eq1, &$Data_Int_Even, &$Data_Int_Odd) {
  $__body = function($x, $y) use (&$Data_Int_eq1, &$Data_Int_Even, &$Data_Int_Odd) {
    $__case_0 = ($Data_Int_eq1)($x, $y);
    if (($__case_0 === true)) {
return $Data_Int_Even;
} else {
;
};
    if (true) {
return $Data_Int_Odd;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Int_eq1, &$Data_Int_Even, &$Data_Int_Odd, $__body, &$__fn) {
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
})(), "one" => $Data_Int_Odd, "mul" => (function() use (&$Data_Int_Odd, &$Data_Int_Even) {
  $__body = function($v, $v1) use (&$Data_Int_Odd, &$Data_Int_Even) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
return $Data_Int_Odd;
} else {
;
};
    if (true) {
return $Data_Int_Even;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Int_Odd, &$Data_Int_Even, $__body, &$__fn) {
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

// Data_Int_ringParity
$Data_Int_ringParity = ($Data_Ring_Ring__dollar__Dict)((object)["sub" => ($Data_Semiring_add)($Data_Int_semiringParity), "Semiring0" => (function() use (&$Data_Int_semiringParity) {
  $__fn = function($__dollar____unused) use (&$Data_Int_semiringParity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Int_semiringParity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Int_divisionRingParity
$Data_Int_divisionRingParity = ($Data_DivisionRing_DivisionRing__dollar__Dict)((object)["recip" => ($Control_Category_identity)($Control_Category_categoryFn), "Ring0" => (function() use (&$Data_Int_ringParity) {
  $__fn = function($__dollar____unused) use (&$Data_Int_ringParity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Int_ringParity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Int_decimal
$Data_Int_decimal = ($Data_Int_Radix)(10);

// Data_Int_commutativeRingParity
$Data_Int_commutativeRingParity = ($Data_CommutativeRing_CommutativeRing__dollar__Dict)((object)["Ring0" => (function() use (&$Data_Int_ringParity) {
  $__fn = function($__dollar____unused) use (&$Data_Int_ringParity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Int_ringParity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Int_euclideanRingParity
$Data_Int_euclideanRingParity = ($Data_EuclideanRing_EuclideanRing__dollar__Dict)((object)["degree" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Even")) {
return 0;
} else {
;
};
    if ((($__case_0)->tag === "Odd")) {
return 1;
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
})(), "div" => (function() {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $x;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "mod" => (function() use (&$Data_Int_Even) {
  $__fn = function($v, $v1 = null) use (&$Data_Int_Even, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Int_Even;
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() use (&$Data_Int_commutativeRingParity) {
  $__fn = function($__dollar____unused) use (&$Data_Int_commutativeRingParity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Int_commutativeRingParity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Int_ceil
$Data_Int_ceil = ($Data_Int_compose)($Data_Int_unsafeClamp, $Data_Number_ceil);

// Data_Int_boundedParity
$Data_Int_boundedParity = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => $Data_Int_Even, "top" => $Data_Int_Odd, "Ord0" => (function() use (&$Data_Int_ordParity) {
  $__fn = function($__dollar____unused) use (&$Data_Int_ordParity, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Int_ordParity;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Int_binary
$Data_Int_binary = ($Data_Int_Radix)(2);

// Data_Int_base36
$Data_Int_base36 = ($Data_Int_Radix)(36);

