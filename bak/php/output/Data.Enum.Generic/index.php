<?php

namespace Data\Enum\Generic;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Generic/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Enum_Generic_compose
$Data_Enum_Generic_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Enum_Generic_map
$Data_Enum_Generic_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Enum_Generic_unwrap
$Data_Enum_Generic_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Enum_Generic_add
$Data_Enum_Generic_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Enum_Generic_conj
$Data_Enum_Generic_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Enum_Generic_greaterThanOrEq
$Data_Enum_Generic_greaterThanOrEq = ($Data_Ord_greaterThanOrEq)($Data_Ord_ordInt);

// Data_Enum_Generic_lessThan
$Data_Enum_Generic_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_Enum_Generic_sub
$Data_Enum_Generic_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Enum_Generic_mul
$Data_Enum_Generic_mul = ($Data_Semiring_mul)($Data_Semiring_semiringInt);

// Data_Enum_Generic_apply
$Data_Enum_Generic_apply = ($Control_Apply_apply)($Data_Maybe_applyMaybe);

// Data_Enum_Generic_div
$Data_Enum_Generic_div = ($Data_EuclideanRing_div)($Data_EuclideanRing_euclideanRingInt);

// Data_Enum_Generic_mod
$Data_Enum_Generic_mod = ($Data_EuclideanRing_mod)($Data_EuclideanRing_euclideanRingInt);

// Data_Enum_Generic_eq
$Data_Enum_Generic_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Enum_Generic_GenericEnum$Dict
$Data_Enum_Generic_GenericEnum__dollar__Dict = (function() {
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

// Data_Enum_Generic_GenericBoundedEnum$Dict
$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict = (function() {
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

// Data_Enum_Generic_genericToEnum'
$Data_Enum_Generic_genericToEnum__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericToEnum__prime__;
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

// Data_Enum_Generic_genericToEnum
$Data_Enum_Generic_genericToEnum = (function() use (&$Data_Generic_Rep_to, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, &$Data_Enum_Generic_genericToEnum__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, &$Data_Enum_Generic_genericToEnum__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
    $__res = (function() use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, $to, &$Data_Enum_Generic_genericToEnum__prime__) {
  $__fn = function($dictGenericBoundedEnum) use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, $to, &$Data_Enum_Generic_genericToEnum__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Generic_compose)(($Data_Enum_Generic_map)($to), ($Data_Enum_Generic_genericToEnum__prime__)($dictGenericBoundedEnum));
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

// Data_Enum_Generic_genericSucc'
$Data_Enum_Generic_genericSucc__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericSucc__prime__;
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

// Data_Enum_Generic_genericSucc
$Data_Enum_Generic_genericSucc = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, &$Data_Enum_Generic_genericSucc__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, &$Data_Enum_Generic_genericSucc__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, $to, &$Data_Enum_Generic_genericSucc__prime__, $from) {
  $__fn = function($dictGenericEnum) use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, $to, &$Data_Enum_Generic_genericSucc__prime__, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Generic_compose)(($Data_Enum_Generic_map)($to), ($Data_Enum_Generic_compose)(($Data_Enum_Generic_genericSucc__prime__)($dictGenericEnum), $from));
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

// Data_Enum_Generic_genericPred'
$Data_Enum_Generic_genericPred__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericPred__prime__;
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

// Data_Enum_Generic_genericPred
$Data_Enum_Generic_genericPred = (function() use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, &$Data_Enum_Generic_genericPred__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_to, &$Data_Generic_Rep_from, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, &$Data_Enum_Generic_genericPred__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = ($Data_Generic_Rep_to)($dictGeneric);
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, $to, &$Data_Enum_Generic_genericPred__prime__, $from) {
  $__fn = function($dictGenericEnum) use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_map, $to, &$Data_Enum_Generic_genericPred__prime__, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Generic_compose)(($Data_Enum_Generic_map)($to), ($Data_Enum_Generic_compose)(($Data_Enum_Generic_genericPred__prime__)($dictGenericEnum), $from));
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

// Data_Enum_Generic_genericFromEnum'
$Data_Enum_Generic_genericFromEnum__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericFromEnum__prime__;
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

// Data_Enum_Generic_genericFromEnum
$Data_Enum_Generic_genericFromEnum = (function() use (&$Data_Generic_Rep_from, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_genericFromEnum__prime__) {
  $__fn = function($dictGeneric) use (&$Data_Generic_Rep_from, &$Data_Enum_Generic_compose, &$Data_Enum_Generic_genericFromEnum__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$from = ($Data_Generic_Rep_from)($dictGeneric);
    $__res = (function() use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_genericFromEnum__prime__, $from) {
  $__fn = function($dictGenericBoundedEnum) use (&$Data_Enum_Generic_compose, &$Data_Enum_Generic_genericFromEnum__prime__, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Generic_compose)(($Data_Enum_Generic_genericFromEnum__prime__)($dictGenericBoundedEnum), $from);
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

// Data_Enum_Generic_genericEnumSum
$Data_Enum_Generic_genericEnumSum = (function() use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, &$Data_Maybe_Just, &$Data_Generic_Rep_Inr) {
  $__fn = function($dictGenericEnum) use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, &$Data_Maybe_Just, &$Data_Generic_Rep_Inr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericPred__prime__1 = ($Data_Enum_Generic_genericPred__prime__)($dictGenericEnum);
$genericSucc__prime__1 = ($Data_Enum_Generic_genericSucc__prime__)($dictGenericEnum);
    $__res = (function() use (&$Data_Bounded_Generic_genericTop__prime__, &$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, &$Data_Maybe_Just, &$Data_Generic_Rep_Inr, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop) use (&$Data_Bounded_Generic_genericTop__prime__, &$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, &$Data_Maybe_Just, &$Data_Generic_Rep_Inr, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericTop__prime__ = ($Data_Bounded_Generic_genericTop__prime__)($dictGenericTop);
    $__res = (function() use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, &$Data_Maybe_Just, $genericTop__prime__, &$Data_Generic_Rep_Inr, $genericSucc__prime__1) {
  $__fn = function($dictGenericEnum1) use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, &$Data_Maybe_Just, $genericTop__prime__, &$Data_Generic_Rep_Inr, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericPred__prime__2 = ($Data_Enum_Generic_genericPred__prime__)($dictGenericEnum1);
$genericSucc__prime__2 = ($Data_Enum_Generic_genericSucc__prime__)($dictGenericEnum1);
    $__res = (function() use (&$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, $genericPred__prime__2, &$Data_Maybe_Just, $genericTop__prime__, &$Data_Generic_Rep_Inr, $genericSucc__prime__1, $genericSucc__prime__2) {
  $__fn = function($dictGenericBottom) use (&$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, $genericPred__prime__2, &$Data_Maybe_Just, $genericTop__prime__, &$Data_Generic_Rep_Inr, $genericSucc__prime__1, $genericSucc__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericBottom__prime__ = ($Data_Bounded_Generic_genericBottom__prime__)($dictGenericBottom);
    $__res = ($Data_Enum_Generic_GenericEnum__dollar__Dict)((object)["genericPred'" => (function() use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, $genericPred__prime__2, &$Data_Maybe_Just, $genericTop__prime__, &$Data_Generic_Rep_Inr) {
  $__body = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, $genericPred__prime__2, &$Data_Maybe_Just, $genericTop__prime__, &$Data_Generic_Rep_Inr) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
return ($Data_Enum_Generic_map)($Data_Generic_Rep_Inl, ($genericPred__prime__1)($a));
} else {
;
};
    if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Maybe_Just)(($Data_Generic_Rep_Inl)($genericTop__prime__));
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$b__prime__ = ($__case_0)->values[0];
return ($Data_Maybe_Just)(($Data_Generic_Rep_Inr)($b__prime__));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Inl, $genericPred__prime__1, $genericPred__prime__2, &$Data_Maybe_Just, $genericTop__prime__, &$Data_Generic_Rep_Inr, $__body, &$__fn) {
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
})(), "genericSucc'" => (function() use ($genericSucc__prime__1, &$Data_Maybe_Just, &$Data_Generic_Rep_Inr, $genericBottom__prime__, &$Data_Generic_Rep_Inl, &$Data_Enum_Generic_map, $genericSucc__prime__2) {
  $__body = function($v) use ($genericSucc__prime__1, &$Data_Maybe_Just, &$Data_Generic_Rep_Inr, $genericBottom__prime__, &$Data_Generic_Rep_Inl, &$Data_Enum_Generic_map, $genericSucc__prime__2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
$v1 = ($genericSucc__prime__1)($a);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Maybe_Just)(($Data_Generic_Rep_Inr)($genericBottom__prime__));
} else {
;
};
if ((($__case_0)->tag === "Just")) {
$a__prime__ = ($__case_0)->values[0];
return ($Data_Maybe_Just)(($Data_Generic_Rep_Inl)($a__prime__));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
return ($Data_Enum_Generic_map)($Data_Generic_Rep_Inr, ($genericSucc__prime__2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($genericSucc__prime__1, &$Data_Maybe_Just, &$Data_Generic_Rep_Inr, $genericBottom__prime__, &$Data_Generic_Rep_Inl, &$Data_Enum_Generic_map, $genericSucc__prime__2, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericEnumProduct
$Data_Enum_Generic_genericEnumProduct = (function() use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip) {
  $__fn = function($dictGenericEnum) use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericPred__prime__1 = ($Data_Enum_Generic_genericPred__prime__)($dictGenericEnum);
$genericSucc__prime__1 = ($Data_Enum_Generic_genericSucc__prime__)($dictGenericEnum);
    $__res = (function() use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop, $dictGenericBottom = null, $dictGenericEnum1 = null) use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericPred__prime__2 = ($Data_Enum_Generic_genericPred__prime__)($dictGenericEnum1);
$genericSucc__prime__2 = ($Data_Enum_Generic_genericSucc__prime__)($dictGenericEnum1);
    $__res = (function() use (&$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, $genericPred__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop1) use (&$Data_Bounded_Generic_genericTop__prime__, &$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, $genericPred__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericTop__prime__ = ($Data_Bounded_Generic_genericTop__prime__)($dictGenericTop1);
    $__res = (function() use (&$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, $genericPred__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericBottom1) use (&$Data_Bounded_Generic_genericBottom__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, $genericPred__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericBottom__prime__ = ($Data_Bounded_Generic_genericBottom__prime__)($dictGenericBottom1);
    $__res = ($Data_Enum_Generic_GenericEnum__dollar__Dict)((object)["genericPred'" => (function() use ($genericPred__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericTop__prime__, $genericPred__prime__1) {
  $__body = function($v) use ($genericPred__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericTop__prime__, $genericPred__prime__1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Just")) {
$p = ($__case_0)->values[0];
return ($Data_Maybe_Just)(($Data_Generic_Rep_Product)($a, $p));
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Enum_Generic_map)(($Data_Function_flip)($Data_Generic_Rep_Product, $genericTop__prime__), ($genericPred__prime__1)($a));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($genericPred__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericTop__prime__, $genericPred__prime__1, $__body, &$__fn) {
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
})(), "genericSucc'" => (function() use ($genericSucc__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericBottom__prime__, $genericSucc__prime__1) {
  $__body = function($v) use ($genericSucc__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericBottom__prime__, $genericSucc__prime__1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$v1 = ($genericSucc__prime__2)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Just")) {
$s = ($__case_0)->values[0];
return ($Data_Maybe_Just)(($Data_Generic_Rep_Product)($a, $s));
} else {
;
};
if ((($__case_0)->tag === "Nothing")) {
return ($Data_Enum_Generic_map)(($Data_Function_flip)($Data_Generic_Rep_Product, $genericBottom__prime__), ($genericSucc__prime__1)($a));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($genericSucc__prime__2, &$Data_Maybe_Just, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_map, &$Data_Function_flip, $genericBottom__prime__, $genericSucc__prime__1, $__body, &$__fn) {
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

// Data_Enum_Generic_genericEnumNoArguments
$Data_Enum_Generic_genericEnumNoArguments = ($Data_Enum_Generic_GenericEnum__dollar__Dict)((object)["genericPred'" => (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Nothing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use (&$Data_Maybe_Nothing) {
  $__fn = function($v) use (&$Data_Maybe_Nothing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Maybe_Nothing;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_Generic_genericEnumConstructor
$Data_Enum_Generic_genericEnumConstructor = (function() use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor) {
  $__fn = function($dictGenericEnum) use (&$Data_Enum_Generic_genericPred__prime__, &$Data_Enum_Generic_genericSucc__prime__, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericPred__prime__1 = ($Data_Enum_Generic_genericPred__prime__)($dictGenericEnum);
$genericSucc__prime__1 = ($Data_Enum_Generic_genericSucc__prime__)($dictGenericEnum);
    $__res = ($Data_Enum_Generic_GenericEnum__dollar__Dict)((object)["genericPred'" => (function() use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericPred__prime__1) {
  $__body = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericPred__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Enum_Generic_map)($Data_Generic_Rep_Constructor, ($genericPred__prime__1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericPred__prime__1, $__body, &$__fn) {
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
})(), "genericSucc'" => (function() use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericSucc__prime__1) {
  $__body = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericSucc__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Enum_Generic_map)($Data_Generic_Rep_Constructor, ($genericSucc__prime__1)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericSucc__prime__1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericEnumArgument
$Data_Enum_Generic_genericEnumArgument = (function() use (&$Data_Enum_pred, &$Data_Enum_succ, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument) {
  $__fn = function($dictEnum) use (&$Data_Enum_pred, &$Data_Enum_succ, &$Data_Enum_Generic_GenericEnum__dollar__Dict, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$pred = ($Data_Enum_pred)($dictEnum);
$succ = ($Data_Enum_succ)($dictEnum);
    $__res = ($Data_Enum_Generic_GenericEnum__dollar__Dict)((object)["genericPred'" => (function() use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $pred) {
  $__body = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $pred) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Enum_Generic_map)($Data_Generic_Rep_Argument, ($pred)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $pred, $__body, &$__fn) {
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
})(), "genericSucc'" => (function() use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $succ) {
  $__body = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $succ) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($Data_Enum_Generic_map)($Data_Generic_Rep_Argument, ($succ)($a));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $succ, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericCardinality'
$Data_Enum_Generic_genericCardinality__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericCardinality__prime__;
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

// Data_Enum_Generic_genericCardinality
$Data_Enum_Generic_genericCardinality = (function() use (&$Data_Enum_Cardinality, &$Data_Enum_Generic_unwrap, &$Data_Enum_Generic_genericCardinality__prime__) {
  $__fn = function($dictGeneric, $dictGenericBoundedEnum = null) use (&$Data_Enum_Cardinality, &$Data_Enum_Generic_unwrap, &$Data_Enum_Generic_genericCardinality__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Cardinality)(($Data_Enum_Generic_unwrap)(($Data_Enum_Generic_genericCardinality__prime__)($dictGenericBoundedEnum)));
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericBoundedEnumSum
$Data_Enum_Generic_genericBoundedEnumSum = (function() use (&$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_add, &$Data_Enum_Generic_unwrap) {
  $__fn = function($dictGenericBoundedEnum) use (&$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_add, &$Data_Enum_Generic_unwrap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCardinality__prime__1 = ($Data_Enum_Generic_genericCardinality__prime__)($dictGenericBoundedEnum);
$genericToEnum__prime__1 = ($Data_Enum_Generic_genericToEnum__prime__)($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = ($Data_Enum_Generic_genericFromEnum__prime__)($dictGenericBoundedEnum);
    $__res = (function() use (&$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_add, &$Data_Enum_Generic_unwrap, $genericCardinality__prime__1, &$Data_Enum_Generic_genericCardinality__prime__, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use (&$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_add, &$Data_Enum_Generic_unwrap, $genericCardinality__prime__1, &$Data_Enum_Generic_genericCardinality__prime__, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericToEnum__prime__2 = ($Data_Enum_Generic_genericToEnum__prime__)($dictGenericBoundedEnum1);
$genericFromEnum__prime__2 = ($Data_Enum_Generic_genericFromEnum__prime__)($dictGenericBoundedEnum1);
    $__res = ($Data_Enum_Generic_GenericBoundedEnum__dollar__Dict)((object)["genericCardinality'" => ($Data_Enum_Cardinality)(($Data_Enum_Generic_add)(($Data_Enum_Generic_unwrap)($genericCardinality__prime__1), ($Data_Enum_Generic_unwrap)(($Data_Enum_Generic_genericCardinality__prime__)($dictGenericBoundedEnum1)))), "genericToEnum'" => (function() use ($genericCardinality__prime__1) {
  $__fn = function($n) use ($genericCardinality__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ca = $__case_0;
return "/* Unsupported: Guards not supported */";
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
    $__res = ($to)($genericCardinality__prime__1);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($genericFromEnum__prime__1, &$Data_Enum_Generic_add, $genericFromEnum__prime__2, &$Data_Enum_Generic_unwrap, $genericCardinality__prime__1) {
  $__body = function($v) use ($genericFromEnum__prime__1, &$Data_Enum_Generic_add, $genericFromEnum__prime__2, &$Data_Enum_Generic_unwrap, $genericCardinality__prime__1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
return ($genericFromEnum__prime__1)($a);
} else {
;
};
    if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
return ($Data_Enum_Generic_add)(($genericFromEnum__prime__2)($b), ($Data_Enum_Generic_unwrap)($genericCardinality__prime__1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($genericFromEnum__prime__1, &$Data_Enum_Generic_add, $genericFromEnum__prime__2, &$Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $__body, &$__fn) {
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

// Data_Enum_Generic_genericBoundedEnumProduct
$Data_Enum_Generic_genericBoundedEnumProduct = (function() use (&$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_mul, &$Data_Enum_Generic_unwrap, &$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_div, &$Data_Enum_Generic_mod, &$Data_Enum_Generic_add) {
  $__fn = function($dictGenericBoundedEnum) use (&$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_mul, &$Data_Enum_Generic_unwrap, &$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, &$Data_Enum_Generic_div, &$Data_Enum_Generic_mod, &$Data_Enum_Generic_add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCardinality__prime__1 = ($Data_Enum_Generic_genericCardinality__prime__)($dictGenericBoundedEnum);
$genericToEnum__prime__1 = ($Data_Enum_Generic_genericToEnum__prime__)($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = ($Data_Enum_Generic_genericFromEnum__prime__)($dictGenericBoundedEnum);
    $__res = (function() use (&$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_mul, &$Data_Enum_Generic_unwrap, $genericCardinality__prime__1, &$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, $genericToEnum__prime__1, &$Data_Enum_Generic_div, &$Data_Enum_Generic_mod, &$Data_Enum_Generic_add, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use (&$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_mul, &$Data_Enum_Generic_unwrap, $genericCardinality__prime__1, &$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, $genericToEnum__prime__1, &$Data_Enum_Generic_div, &$Data_Enum_Generic_mod, &$Data_Enum_Generic_add, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericCardinality__prime__2 = ($Data_Enum_Generic_genericCardinality__prime__)($dictGenericBoundedEnum1);
$genericToEnum__prime__2 = ($Data_Enum_Generic_genericToEnum__prime__)($dictGenericBoundedEnum1);
$genericFromEnum__prime__2 = ($Data_Enum_Generic_genericFromEnum__prime__)($dictGenericBoundedEnum1);
    $__res = ($Data_Enum_Generic_GenericBoundedEnum__dollar__Dict)((object)["genericCardinality'" => ($Data_Enum_Cardinality)(($Data_Enum_Generic_mul)(($Data_Enum_Generic_unwrap)($genericCardinality__prime__1), ($Data_Enum_Generic_unwrap)($genericCardinality__prime__2))), "genericToEnum'" => (function() use (&$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, $genericToEnum__prime__1, &$Data_Enum_Generic_div, $genericToEnum__prime__2, &$Data_Enum_Generic_mod, $genericCardinality__prime__2) {
  $__fn = function($n) use (&$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, $genericToEnum__prime__1, &$Data_Enum_Generic_div, $genericToEnum__prime__2, &$Data_Enum_Generic_mod, $genericCardinality__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$to = (function() use (&$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, $genericToEnum__prime__1, &$Data_Enum_Generic_div, $n, $genericToEnum__prime__2, &$Data_Enum_Generic_mod) {
  $__body = function($v) use (&$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, $genericToEnum__prime__1, &$Data_Enum_Generic_div, $n, $genericToEnum__prime__2, &$Data_Enum_Generic_mod) {
    $__case_0 = $v;
    if (true) {
$cb = $__case_0;
return ($Data_Enum_Generic_apply)(($Data_Enum_Generic_map)($Data_Generic_Rep_Product, ($genericToEnum__prime__1)(($Data_Enum_Generic_div)($n, $cb))), ($genericToEnum__prime__2)(($Data_Enum_Generic_mod)($n, $cb)));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Enum_Generic_apply, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Product, $genericToEnum__prime__1, &$Data_Enum_Generic_div, $n, $genericToEnum__prime__2, &$Data_Enum_Generic_mod, $__body, &$__fn) {
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
    $__res = ($to)($genericCardinality__prime__2);
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use (&$Data_Enum_Generic_add, &$Data_Enum_Generic_mul, $genericFromEnum__prime__1, $genericFromEnum__prime__2, $genericCardinality__prime__2) {
$from = (function() use (&$Data_Enum_Generic_add, &$Data_Enum_Generic_mul, $genericFromEnum__prime__1, $genericFromEnum__prime__2) {
  $__body = function($v, $v1) use (&$Data_Enum_Generic_add, &$Data_Enum_Generic_mul, $genericFromEnum__prime__1, $genericFromEnum__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Product")) {
$cb = $__case_0;
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($Data_Enum_Generic_add)(($Data_Enum_Generic_mul)(($genericFromEnum__prime__1)($a), $cb), ($genericFromEnum__prime__2)($b));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use (&$Data_Enum_Generic_add, &$Data_Enum_Generic_mul, $genericFromEnum__prime__1, $genericFromEnum__prime__2, $__body, &$__fn) {
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
})();
return ($from)($genericCardinality__prime__2);
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

// Data_Enum_Generic_genericBoundedEnumNoArguments
$Data_Enum_Generic_genericBoundedEnumNoArguments = ($Data_Enum_Generic_GenericBoundedEnum__dollar__Dict)((object)["genericCardinality'" => ($Data_Enum_Cardinality)(1), "genericToEnum'" => (function() use (&$Data_Enum_Generic_eq, &$Data_Maybe_Just, &$Data_Generic_Rep_NoArguments, &$Data_Maybe_Nothing) {
  $__body = function($i) use (&$Data_Enum_Generic_eq, &$Data_Maybe_Just, &$Data_Generic_Rep_NoArguments, &$Data_Maybe_Nothing) {
    $__case_0 = ($Data_Enum_Generic_eq)($i, 0);
    if (($__case_0 === true)) {
return ($Data_Maybe_Just)($Data_Generic_Rep_NoArguments);
} else {
;
};
    if (true) {
return $Data_Maybe_Nothing;
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($i) use (&$Data_Enum_Generic_eq, &$Data_Maybe_Just, &$Data_Generic_Rep_NoArguments, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 1) {
      $__res = $__body($i);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__body($i);
  };
  return $__fn;
})(), "genericFromEnum'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = 0;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Enum_Generic_genericBoundedEnumConstructor
$Data_Enum_Generic_genericBoundedEnumConstructor = (function() use (&$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_unwrap, &$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor) {
  $__fn = function($dictGenericBoundedEnum) use (&$Data_Enum_Generic_genericToEnum__prime__, &$Data_Enum_Generic_genericFromEnum__prime__, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_unwrap, &$Data_Enum_Generic_genericCardinality__prime__, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$genericToEnum__prime__1 = ($Data_Enum_Generic_genericToEnum__prime__)($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = ($Data_Enum_Generic_genericFromEnum__prime__)($dictGenericBoundedEnum);
    $__res = ($Data_Enum_Generic_GenericBoundedEnum__dollar__Dict)((object)["genericCardinality'" => ($Data_Enum_Cardinality)(($Data_Enum_Generic_unwrap)(($Data_Enum_Generic_genericCardinality__prime__)($dictGenericBoundedEnum))), "genericToEnum'" => (function() use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericToEnum__prime__1) {
  $__fn = function($i) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Constructor, $genericToEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Generic_map)($Data_Generic_Rep_Constructor, ($genericToEnum__prime__1)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($genericFromEnum__prime__1) {
  $__body = function($v) use ($genericFromEnum__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($genericFromEnum__prime__1)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($genericFromEnum__prime__1, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericBoundedEnumArgument
$Data_Enum_Generic_genericBoundedEnumArgument = (function() use (&$Data_Enum_toEnum, &$Data_Enum_fromEnum, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_unwrap, &$Data_Enum_cardinality, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument) {
  $__fn = function($dictBoundedEnum) use (&$Data_Enum_toEnum, &$Data_Enum_fromEnum, &$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict, &$Data_Enum_Cardinality, &$Data_Enum_Generic_unwrap, &$Data_Enum_cardinality, &$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$toEnum = ($Data_Enum_toEnum)($dictBoundedEnum);
$fromEnum = ($Data_Enum_fromEnum)($dictBoundedEnum);
    $__res = ($Data_Enum_Generic_GenericBoundedEnum__dollar__Dict)((object)["genericCardinality'" => ($Data_Enum_Cardinality)(($Data_Enum_Generic_unwrap)(($Data_Enum_cardinality)($dictBoundedEnum))), "genericToEnum'" => (function() use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $toEnum) {
  $__fn = function($i) use (&$Data_Enum_Generic_map, &$Data_Generic_Rep_Argument, $toEnum, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Enum_Generic_map)($Data_Generic_Rep_Argument, ($toEnum)($i));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($fromEnum) {
  $__body = function($v) use ($fromEnum) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($fromEnum)($a);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use ($fromEnum, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

