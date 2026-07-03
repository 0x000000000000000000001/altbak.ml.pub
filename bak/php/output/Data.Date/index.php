<?php

namespace Data\Date;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Date_fromEnum
$Data_Date_fromEnum = ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumMonth);

// Data_Date_eq
$Data_Date_eq = ($Data_Eq_eq)($Data_Eq_eqInt);

// Data_Date_fromJust
$Data_Date_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Date_toEnum
$Data_Date_toEnum = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumWeekday);

// Data_Date_append
$Data_Date_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Date_show
$Data_Date_show = ($Data_Show_show)($Data_Date_Component_showYear);

// Data_Date_show1
$Data_Date_show1 = ($Data_Show_show)($Data_Date_Component_showMonth);

// Data_Date_show2
$Data_Date_show2 = ($Data_Show_show)($Data_Date_Component_showDay);

// Data_Date_fromEnum1
$Data_Date_fromEnum1 = ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumYear);

// Data_Date_conj
$Data_Date_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Date_mod
$Data_Date_mod = ($Data_EuclideanRing_mod)($Data_EuclideanRing_euclideanRingInt);

// Data_Date_disj
$Data_Date_disj = ($Data_HeytingAlgebra_disj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Date_not
$Data_Date_not = ($Data_HeytingAlgebra_not)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Date_compose
$Data_Date_compose = ($Control_Semigroupoid_compose)($Control_Semigroupoid_semigroupoidFn);

// Data_Date_toEnum1
$Data_Date_toEnum1 = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumDay);

// Data_Date_eq1
$Data_Date_eq1 = ($Data_Eq_eq)($Data_Date_Component_eqYear);

// Data_Date_eq2
$Data_Date_eq2 = ($Data_Eq_eq)($Data_Date_Component_eqMonth);

// Data_Date_eq3
$Data_Date_eq3 = ($Data_Eq_eq)($Data_Date_Component_eqDay);

// Data_Date_compare
$Data_Date_compare = ($Data_Ord_compare)($Data_Date_Component_ordYear);

// Data_Date_compare1
$Data_Date_compare1 = ($Data_Ord_compare)($Data_Date_Component_ordMonth);

// Data_Date_compare2
$Data_Date_compare2 = ($Data_Ord_compare)($Data_Date_Component_ordDay);

// Data_Date_succ
$Data_Date_succ = ($Data_Enum_succ)($Data_Date_Component_enumMonth);

// Data_Date_succ1
$Data_Date_succ1 = ($Data_Enum_succ)($Data_Date_Component_enumDay);

// Data_Date_greaterThan
$Data_Date_greaterThan = ($Data_Ord_greaterThan)(($Data_Maybe_ordMaybe)($Data_Date_Component_ordDay));

// Data_Date_succ2
$Data_Date_succ2 = ($Data_Enum_succ)($Data_Date_Component_enumYear);

// Data_Date_apply
$Data_Date_apply = ($Control_Apply_apply)($Data_Maybe_applyMaybe);

// Data_Date_map
$Data_Date_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Date_pure
$Data_Date_pure = ($Control_Applicative_pure)($Data_Maybe_applicativeMaybe);

// Data_Date_pred
$Data_Date_pred = ($Data_Enum_pred)($Data_Date_Component_enumMonth);

// Data_Date_pred1
$Data_Date_pred1 = ($Data_Enum_pred)($Data_Date_Component_enumDay);

// Data_Date_pred2
$Data_Date_pred2 = ($Data_Enum_pred)($Data_Date_Component_enumYear);

// Data_Date_toEnum2
$Data_Date_toEnum2 = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumMonth);

// Data_Date_add
$Data_Date_add = ($Data_Semiring_add)($Data_Semiring_semiringInt);

// Data_Date_fromEnum2
$Data_Date_fromEnum2 = ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumDay);

// Data_Date_lessThan
$Data_Date_lessThan = ($Data_Ord_lessThan)($Data_Ord_ordInt);

// Data_Date_greaterThan1
$Data_Date_greaterThan1 = ($Data_Ord_greaterThan)($Data_Ord_ordInt);

// Data_Date_sub
$Data_Date_sub = ($Data_Ring_sub)($Data_Ring_ringInt);

// Data_Date_bindFlipped
$Data_Date_bindFlipped = ($Control_Bind_bindFlipped)($Data_Maybe_bindMaybe);

// Data_Date_bind
$Data_Date_bind = ($Control_Bind_bind)($Data_Maybe_bindMaybe);

// Data_Date_Date
$Data_Date_Date = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Date", "values" => [$value0, $value1, $value2]];
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Date_year
$Data_Date_year = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
return $y;
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

// Data_Date_weekday
$Data_Date_weekday = ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Function_Uncurried_runFn3, &$Data_Date_calcWeekday, &$Data_Date_fromEnum, &$Data_Date_eq, &$Data_Date_fromJust, &$Data_Date_toEnum) {
  $__body = function($__dollar____unused, $v) use (&$Data_Function_Uncurried_runFn3, &$Data_Date_calcWeekday, &$Data_Date_fromEnum, &$Data_Date_eq, &$Data_Date_fromJust, &$Data_Date_toEnum) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
$n = ($Data_Function_Uncurried_runFn3)($Data_Date_calcWeekday, $y, ($Data_Date_fromEnum)($m), $d);
$__case_0 = ($Data_Date_eq)($n, 0);
if (($__case_0 === true)) {
return ($Data_Date_fromJust)(($Data_Date_toEnum)(7));
} else {
;
};
if (true) {
return ($Data_Date_fromJust)(($Data_Date_toEnum)($n));
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($__dollar____unused, $v = null) use (&$Data_Function_Uncurried_runFn3, &$Data_Date_calcWeekday, &$Data_Date_fromEnum, &$Data_Date_eq, &$Data_Date_fromJust, &$Data_Date_toEnum, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($__dollar____unused, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($__dollar____unused, $v);
  };
  return $__fn;
})());

// Data_Date_showDate
$Data_Date_showDate = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Date_append, &$Data_Date_show, &$Data_Date_show1, &$Data_Date_show2) {
  $__body = function($v) use (&$Data_Date_append, &$Data_Date_show, &$Data_Date_show1, &$Data_Date_show2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
return ($Data_Date_append)("(Date ", ($Data_Date_append)(($Data_Date_show)($y), ($Data_Date_append)(" ", ($Data_Date_append)(($Data_Date_show1)($m), ($Data_Date_append)(" ", ($Data_Date_append)(($Data_Date_show2)($d), ")"))))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Date_append, &$Data_Date_show, &$Data_Date_show1, &$Data_Date_show2, $__body, &$__fn) {
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

// Data_Date_month
$Data_Date_month = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$m = ($__case_0)->values[1];
return $m;
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

// Data_Date_isLeapYear
$Data_Date_isLeapYear = (function() use (&$Data_Date_fromEnum1, &$Data_Date_conj, &$Data_Date_eq, &$Data_Date_mod, &$Data_Date_disj, &$Data_Date_not) {
  $__fn = function($y) use (&$Data_Date_fromEnum1, &$Data_Date_conj, &$Data_Date_eq, &$Data_Date_mod, &$Data_Date_disj, &$Data_Date_not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$y__prime__ = ($Data_Date_fromEnum1)($y);
    $__res = ($Data_Date_conj)(($Data_Date_eq)(($Data_Date_mod)($y__prime__, 4), 0), ($Data_Date_disj)(($Data_Date_eq)(($Data_Date_mod)($y__prime__, 400), 0), ($Data_Date_not)(($Data_Date_eq)(($Data_Date_mod)($y__prime__, 100), 0))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Date_lastDayOfMonth
$Data_Date_lastDayOfMonth = (function() use (&$Data_Date_compose, &$Partial_Unsafe_unsafePartial, &$Data_Date_fromJust, &$Data_Date_toEnum1) {
  $__body = function($y, $m) use (&$Data_Date_compose, &$Partial_Unsafe_unsafePartial, &$Data_Date_fromJust, &$Data_Date_toEnum1) {
    $unsafeDay = ($Data_Date_compose)(($Partial_Unsafe_unsafePartial)((function() use (&$Data_Date_fromJust) {
  $__fn = function($__dollar____unused) use (&$Data_Date_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_fromJust;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()), $Data_Date_toEnum1);
    $__case_0 = $m;
    if ((($__case_0)->tag === "January")) {
return ($unsafeDay)(31);
} else {
;
};
    if ((($__case_0)->tag === "February")) {
return "/* Unsupported: Guards not supported */";
} else {
;
};
    if ((($__case_0)->tag === "March")) {
return ($unsafeDay)(31);
} else {
;
};
    if ((($__case_0)->tag === "April")) {
return ($unsafeDay)(30);
} else {
;
};
    if ((($__case_0)->tag === "May")) {
return ($unsafeDay)(31);
} else {
;
};
    if ((($__case_0)->tag === "June")) {
return ($unsafeDay)(30);
} else {
;
};
    if ((($__case_0)->tag === "July")) {
return ($unsafeDay)(31);
} else {
;
};
    if ((($__case_0)->tag === "August")) {
return ($unsafeDay)(31);
} else {
;
};
    if ((($__case_0)->tag === "September")) {
return ($unsafeDay)(30);
} else {
;
};
    if ((($__case_0)->tag === "October")) {
return ($unsafeDay)(31);
} else {
;
};
    if ((($__case_0)->tag === "November")) {
return ($unsafeDay)(30);
} else {
;
};
    if ((($__case_0)->tag === "December")) {
return ($unsafeDay)(31);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($y, $m = null) use (&$Data_Date_compose, &$Partial_Unsafe_unsafePartial, &$Data_Date_fromJust, &$Data_Date_toEnum1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($y, $m);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($y, $m);
  };
  return $__fn;
})();

// Data_Date_eqDate
$Data_Date_eqDate = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Date_conj, &$Data_Date_eq1, &$Data_Date_eq2, &$Data_Date_eq3) {
  $__body = function($x, $y) use (&$Data_Date_conj, &$Data_Date_eq1, &$Data_Date_eq2, &$Data_Date_eq3) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
return ($Data_Date_conj)(($Data_Date_conj)(($Data_Date_eq1)($l, $r), ($Data_Date_eq2)($l1, $r1)), ($Data_Date_eq3)($l2, $r2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Date_conj, &$Data_Date_eq1, &$Data_Date_eq2, &$Data_Date_eq3, $__body, &$__fn) {
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

// Data_Date_eq4
$Data_Date_eq4 = ($Data_Eq_eq)($Data_Date_eqDate);

// Data_Date_ordDate
$Data_Date_ordDate = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Date_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Date_compare1, &$Data_Date_compare2) {
  $__body = function($x, $y) use (&$Data_Date_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Date_compare1, &$Data_Date_compare2) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
$v = ($Data_Date_compare)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
$v1 = ($Data_Date_compare1)($l1, $r1);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return $Data_Ordering_LT;
} else {
;
};
if ((($__case_0)->tag === "GT")) {
return $Data_Ordering_GT;
} else {
;
};
if (true) {
return ($Data_Date_compare2)($l2, $r2);
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
  $__fn = function($x, $y = null) use (&$Data_Date_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Date_compare1, &$Data_Date_compare2, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Date_eqDate) {
  $__fn = function($__dollar____unused) use (&$Data_Date_eqDate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_eqDate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_enumDate
$Data_Date_enumDate = ($Data_Enum_Enum__dollar__Dict)((object)["succ" => (function() use (&$Data_Date_succ, &$Data_Date_lastDayOfMonth, &$Data_Date_succ1, &$Data_Date_greaterThan, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_Maybe_isNothing, &$Data_Maybe_fromMaybe, &$Data_Date_Component_January, &$Data_Date_conj, &$Data_Date_succ2, &$Data_Date_toEnum1, &$Data_Date_apply, &$Data_Date_map, &$Data_Date_Date, &$Data_Date_pure) {
  $__body = function($v) use (&$Data_Date_succ, &$Data_Date_lastDayOfMonth, &$Data_Date_succ1, &$Data_Date_greaterThan, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_Maybe_isNothing, &$Data_Maybe_fromMaybe, &$Data_Date_Component_January, &$Data_Date_conj, &$Data_Date_succ2, &$Data_Date_toEnum1, &$Data_Date_apply, &$Data_Date_map, &$Data_Date_Date, &$Data_Date_pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
$sm = ($Data_Date_succ)($m);
$l = ($Data_Date_lastDayOfMonth)($y, $m);
$sd = (function() use (&$Data_Date_succ1, $d, &$Data_Date_greaterThan, &$Data_Maybe_Just, $l, &$Data_Maybe_Nothing) {
$v1 = ($Data_Date_succ1)($d);
return (function() use (&$Data_Date_greaterThan, $v1, &$Data_Maybe_Just, $l, &$Data_Maybe_Nothing) {
$__case_0 = ($Data_Date_greaterThan)($v1, ($Data_Maybe_Just)($l));
if (($__case_0 === true)) {
return $Data_Maybe_Nothing;
} else {
;
};
if (true) {
return $v1;
} else {
;
};
throw new \Exception("Pattern match failure");
})();
})();
$m__prime__ = (function() use (&$Data_Maybe_isNothing, $sd, &$Data_Maybe_fromMaybe, &$Data_Date_Component_January, $sm, $m) {
$__case_0 = ($Data_Maybe_isNothing)($sd);
if (($__case_0 === true)) {
return ($Data_Maybe_fromMaybe)($Data_Date_Component_January, $sm);
} else {
;
};
if (true) {
return $m;
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$y__prime__ = (function() use (&$Data_Date_conj, &$Data_Maybe_isNothing, $sd, $sm, &$Data_Date_succ2, $y, &$Data_Maybe_Just) {
$__case_0 = ($Data_Date_conj)(($Data_Maybe_isNothing)($sd), ($Data_Maybe_isNothing)($sm));
if (($__case_0 === true)) {
return ($Data_Date_succ2)($y);
} else {
;
};
if (true) {
return ($Data_Maybe_Just)($y);
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$d__prime__ = (function() use (&$Data_Maybe_isNothing, $sd, &$Data_Date_toEnum1) {
$__case_0 = ($Data_Maybe_isNothing)($sd);
if (($__case_0 === true)) {
return ($Data_Date_toEnum1)(1);
} else {
;
};
if (true) {
return $sd;
} else {
;
};
throw new \Exception("Pattern match failure");
})();
return ($Data_Date_apply)(($Data_Date_apply)(($Data_Date_map)($Data_Date_Date, $y__prime__), ($Data_Date_pure)($m__prime__)), $d__prime__);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Date_succ, &$Data_Date_lastDayOfMonth, &$Data_Date_succ1, &$Data_Date_greaterThan, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_Maybe_isNothing, &$Data_Maybe_fromMaybe, &$Data_Date_Component_January, &$Data_Date_conj, &$Data_Date_succ2, &$Data_Date_toEnum1, &$Data_Date_apply, &$Data_Date_map, &$Data_Date_Date, &$Data_Date_pure, $__body, &$__fn) {
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
})(), "pred" => (function() use (&$Data_Date_pred, &$Data_Date_pred1, &$Data_Date_conj, &$Data_Maybe_isNothing, &$Data_Date_pred2, &$Data_Maybe_Just, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_lastDayOfMonth, &$Data_Date_apply, &$Data_Date_map, &$Data_Date_Date, &$Data_Date_pure) {
  $__body = function($v) use (&$Data_Date_pred, &$Data_Date_pred1, &$Data_Date_conj, &$Data_Maybe_isNothing, &$Data_Date_pred2, &$Data_Maybe_Just, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_lastDayOfMonth, &$Data_Date_apply, &$Data_Date_map, &$Data_Date_Date, &$Data_Date_pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
$pm = ($Data_Date_pred)($m);
$pd = ($Data_Date_pred1)($d);
$y__prime__ = (function() use (&$Data_Date_conj, &$Data_Maybe_isNothing, $pd, $pm, &$Data_Date_pred2, $y, &$Data_Maybe_Just) {
$__case_0 = ($Data_Date_conj)(($Data_Maybe_isNothing)($pd), ($Data_Maybe_isNothing)($pm));
if (($__case_0 === true)) {
return ($Data_Date_pred2)($y);
} else {
;
};
if (true) {
return ($Data_Maybe_Just)($y);
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$m__prime__ = (function() use (&$Data_Maybe_isNothing, $pd, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, $pm, $m) {
$__case_0 = ($Data_Maybe_isNothing)($pd);
if (($__case_0 === true)) {
return ($Data_Maybe_fromMaybe)($Data_Date_Component_December, $pm);
} else {
;
};
if (true) {
return $m;
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$l = ($Data_Date_lastDayOfMonth)($y, $m__prime__);
$d__prime__ = (function() use (&$Data_Maybe_isNothing, $pd, &$Data_Maybe_Just, $l) {
$__case_0 = ($Data_Maybe_isNothing)($pd);
if (($__case_0 === true)) {
return ($Data_Maybe_Just)($l);
} else {
;
};
if (true) {
return $pd;
} else {
;
};
throw new \Exception("Pattern match failure");
})();
return ($Data_Date_apply)(($Data_Date_apply)(($Data_Date_map)($Data_Date_Date, $y__prime__), ($Data_Date_pure)($m__prime__)), $d__prime__);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Date_pred, &$Data_Date_pred1, &$Data_Date_conj, &$Data_Maybe_isNothing, &$Data_Date_pred2, &$Data_Maybe_Just, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_lastDayOfMonth, &$Data_Date_apply, &$Data_Date_map, &$Data_Date_Date, &$Data_Date_pure, $__body, &$__fn) {
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
})(), "Ord0" => (function() use (&$Data_Date_ordDate) {
  $__fn = function($__dollar____unused) use (&$Data_Date_ordDate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_ordDate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_pred3
$Data_Date_pred3 = ($Data_Enum_pred)($Data_Date_enumDate);

// Data_Date_succ3
$Data_Date_succ3 = ($Data_Enum_succ)($Data_Date_enumDate);

// Data_Date_diff
$Data_Date_diff = (function() use (&$Data_Time_Duration_toDuration, &$Data_Function_Uncurried_runFn6, &$Data_Date_calcDiff, &$Data_Date_fromEnum) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_toDuration, &$Data_Function_Uncurried_runFn6, &$Data_Date_calcDiff, &$Data_Date_fromEnum, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$toDuration = ($Data_Time_Duration_toDuration)($dictDuration);
    $__res = (function() use ($toDuration, &$Data_Function_Uncurried_runFn6, &$Data_Date_calcDiff, &$Data_Date_fromEnum) {
  $__body = function($v, $v1) use ($toDuration, &$Data_Function_Uncurried_runFn6, &$Data_Date_calcDiff, &$Data_Date_fromEnum) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$y1 = ($__case_0)->values[0];
$m1 = ($__case_0)->values[1];
$d1 = ($__case_0)->values[2];
$y2 = ($__case_1)->values[0];
$m2 = ($__case_1)->values[1];
$d2 = ($__case_1)->values[2];
return ($toDuration)(($Data_Function_Uncurried_runFn6)($Data_Date_calcDiff, $y1, ($Data_Date_fromEnum)($m1), $d1, $y2, ($Data_Date_fromEnum)($m2), $d2));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $v1 = null) use ($toDuration, &$Data_Function_Uncurried_runFn6, &$Data_Date_calcDiff, &$Data_Date_fromEnum, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Date_day
$Data_Date_day = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$d = ($__case_0)->values[2];
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

// Data_Date_canonicalDate
$Data_Date_canonicalDate = (function() use (&$Partial_Unsafe_unsafePartial, &$Data_Date_Date, &$Data_Date_fromJust, &$Data_Date_toEnum2, &$Data_Function_Uncurried_runFn4, &$Data_Date_canonicalDateImpl, &$Data_Date_fromEnum) {
  $__fn = function($y, $m = null, $d = null) use (&$Partial_Unsafe_unsafePartial, &$Data_Date_Date, &$Data_Date_fromJust, &$Data_Date_toEnum2, &$Data_Function_Uncurried_runFn4, &$Data_Date_canonicalDateImpl, &$Data_Date_fromEnum, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$mkDate = ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Date_Date, &$Data_Date_fromJust, &$Data_Date_toEnum2) {
  $__fn = function($__dollar____unused, $y__prime__ = null, $m__prime__ = null, $d__prime__ = null) use (&$Data_Date_Date, &$Data_Date_fromJust, &$Data_Date_toEnum2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Date_Date)($y__prime__, ($Data_Date_fromJust)(($Data_Date_toEnum2)($m__prime__)), $d__prime__);
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})());
    $__res = ($Data_Function_Uncurried_runFn4)($Data_Date_canonicalDateImpl, $mkDate, $y, ($Data_Date_fromEnum)($m), $d);
    if ($__num > 3) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Date_exactDate
$Data_Date_exactDate = (function() use (&$Data_Date_Date, &$Data_Date_eq4, &$Data_Date_canonicalDate, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
  $__body = function($y, $m, $d) use (&$Data_Date_Date, &$Data_Date_eq4, &$Data_Date_canonicalDate, &$Data_Maybe_Just, &$Data_Maybe_Nothing) {
    $dt = ($Data_Date_Date)($y, $m, $d);
    $__case_0 = ($Data_Date_eq4)(($Data_Date_canonicalDate)($y, $m, $d), $dt);
    if (($__case_0 === true)) {
return ($Data_Maybe_Just)($dt);
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
  $__fn = function($y, $m = null, $d = null) use (&$Data_Date_Date, &$Data_Date_eq4, &$Data_Date_canonicalDate, &$Data_Maybe_Just, &$Data_Maybe_Nothing, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 3) {
      $__res = $__body($y, $m, $d);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 3));
    }
    return $__body($y, $m, $d);
  };
  return $__fn;
})();

// Data_Date_boundedDate
$Data_Date_boundedDate = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Date_Date)(($Data_Bounded_bottom)($Data_Date_Component_boundedYear), ($Data_Bounded_bottom)($Data_Date_Component_boundedMonth), ($Data_Bounded_bottom)($Data_Date_Component_boundedDay)), "top" => ($Data_Date_Date)(($Data_Bounded_top)($Data_Date_Component_boundedYear), ($Data_Bounded_top)($Data_Date_Component_boundedMonth), ($Data_Bounded_top)($Data_Date_Component_boundedDay)), "Ord0" => (function() use (&$Data_Date_ordDate) {
  $__fn = function($__dollar____unused) use (&$Data_Date_ordDate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Date_ordDate;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Date_adjust
$Data_Date_adjust = (function() use (&$Data_Maybe_Just, &$Data_Date_add, &$Data_Date_fromEnum2, &$Data_Date_lessThan, &$Data_Date_lastDayOfMonth, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_pred, &$Data_Date_greaterThan1, &$Data_Date_bindFlipped, &$Data_Date_bind, &$Data_Int_fromNumber, &$Data_Function_flip) {
  $__body = function($v, $date) use (&$Data_Maybe_Just, &$Data_Date_add, &$Data_Date_fromEnum2, &$Data_Date_lessThan, &$Data_Date_lastDayOfMonth, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_pred, &$Data_Date_greaterThan1, &$Data_Date_bindFlipped, &$Data_Date_bind, &$Data_Int_fromNumber, &$Data_Function_flip) {
    $__case_0 = $v;
    $__case_1 = $date;
    if (true) {
$n = $__case_0;
$date1 = $__case_1;
$adj = (function() use (&$Data_Maybe_Just, &$Data_Date_add, &$Data_Date_fromEnum2, &$Data_Date_lessThan, &$Data_Date_lastDayOfMonth, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_pred, &$Data_Date_greaterThan1, &$Data_Date_bindFlipped, &$adj) {
  $__fn = function($v1, $v2 = null) use (&$Data_Maybe_Just, &$Data_Date_add, &$Data_Date_fromEnum2, &$Data_Date_lessThan, &$Data_Date_lastDayOfMonth, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_pred, &$Data_Date_greaterThan1, &$Data_Date_bindFlipped, &$adj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (function($v1, $v2) use (&$Data_Maybe_Just, &$Data_Date_add, &$Data_Date_fromEnum2, &$Data_Date_lessThan, &$Data_Date_lastDayOfMonth, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_pred, &$Data_Date_greaterThan1, &$Data_Date_bindFlipped, &$adj) {
while (true) {
$__case_0 = $v1;
$__case_1 = $v2;
if (($__case_0 === 0)) {
$dt = $__case_1;
return ($Data_Maybe_Just)($dt);
} else {
;
};
if ((($__case_1)->tag === "Date")) {
$i = $__case_0;
$y = ($__case_1)->values[0];
$m = ($__case_1)->values[1];
$d = ($__case_1)->values[2];
$j = ($Data_Date_add)($i, ($Data_Date_fromEnum2)($d));
$low = ($Data_Date_lessThan)($j, 1);
$l = ($Data_Date_lastDayOfMonth)($y, (function() use ($low, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_pred, $m) {
$__case_0 = $low;
if (($__case_0 === true)) {
return ($Data_Maybe_fromMaybe)($Data_Date_Component_December, ($Data_Date_pred)($m));
} else {
;
};
if (true) {
return $m;
} else {
;
};
throw new \Exception("Pattern match failure");
})());
$hi = ($Data_Date_greaterThan1)($j, ($Data_Date_fromEnum2)($l));
$i__prime__ = (function() {
if (true) {
return "/* Unsupported: Guards not supported */";
} else {
;
};
throw new \Exception("Pattern match failure");
})();
$dt__prime__ = (function() {
if (true) {
return "/* Unsupported: Guards not supported */";
} else {
;
};
throw new \Exception("Pattern match failure");
})();
return ($Data_Date_bindFlipped)(($adj)($i__prime__), $dt__prime__);
} else {
;
};
throw new \Exception("Pattern match failure");
}
})($v1, $v2);
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();
return ($Data_Date_bind)(($Data_Int_fromNumber)($n), ($Data_Function_flip)($adj, $date1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v, $date = null) use (&$Data_Maybe_Just, &$Data_Date_add, &$Data_Date_fromEnum2, &$Data_Date_lessThan, &$Data_Date_lastDayOfMonth, &$Data_Maybe_fromMaybe, &$Data_Date_Component_December, &$Data_Date_pred, &$Data_Date_greaterThan1, &$Data_Date_bindFlipped, &$Data_Date_bind, &$Data_Int_fromNumber, &$Data_Function_flip, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($v, $date);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($v, $date);
  };
  return $__fn;
})();

