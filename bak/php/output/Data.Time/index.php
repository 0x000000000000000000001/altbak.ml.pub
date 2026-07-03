<?php

namespace Data\Time;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Time_append
$Data_Time_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_Time_show
$Data_Time_show = ($Data_Show_show)($Data_Time_Component_showHour);

// Data_Time_show1
$Data_Time_show1 = ($Data_Show_show)($Data_Time_Component_showMinute);

// Data_Time_show2
$Data_Time_show2 = ($Data_Show_show)($Data_Time_Component_showSecond);

// Data_Time_show3
$Data_Time_show3 = ($Data_Show_show)($Data_Time_Component_showMillisecond);

// Data_Time_div
$Data_Time_div = ($Data_EuclideanRing_div)($Data_EuclideanRing_euclideanRingNumber);

// Data_Time_sub
$Data_Time_sub = ($Data_Ring_sub)($Data_Ring_ringNumber);

// Data_Time_mul
$Data_Time_mul = ($Data_Semiring_mul)($Data_Semiring_semiringNumber);

// Data_Time_add
$Data_Time_add = ($Data_Semiring_add)($Data_Semiring_semiringNumber);

// Data_Time_fromJust
$Data_Time_fromJust = ($Data_Maybe_fromJust)($Prim_undefined);

// Data_Time_apply
$Data_Time_apply = ($Control_Apply_apply)($Data_Maybe_applyMaybe);

// Data_Time_map
$Data_Time_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_Time_toEnum
$Data_Time_toEnum = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumHour);

// Data_Time_toEnum1
$Data_Time_toEnum1 = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMinute);

// Data_Time_toEnum2
$Data_Time_toEnum2 = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumSecond);

// Data_Time_toEnum3
$Data_Time_toEnum3 = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMillisecond);

// Data_Time_fromEnum
$Data_Time_fromEnum = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumHour);

// Data_Time_fromEnum1
$Data_Time_fromEnum1 = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMinute);

// Data_Time_fromEnum2
$Data_Time_fromEnum2 = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumSecond);

// Data_Time_fromEnum3
$Data_Time_fromEnum3 = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMillisecond);

// Data_Time_conj
$Data_Time_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_Time_eq
$Data_Time_eq = ($Data_Eq_eq)($Data_Time_Component_eqHour);

// Data_Time_eq1
$Data_Time_eq1 = ($Data_Eq_eq)($Data_Time_Component_eqMinute);

// Data_Time_eq2
$Data_Time_eq2 = ($Data_Eq_eq)($Data_Time_Component_eqSecond);

// Data_Time_eq3
$Data_Time_eq3 = ($Data_Eq_eq)($Data_Time_Component_eqMillisecond);

// Data_Time_compare
$Data_Time_compare = ($Data_Ord_compare)($Data_Time_Component_ordHour);

// Data_Time_compare1
$Data_Time_compare1 = ($Data_Ord_compare)($Data_Time_Component_ordMinute);

// Data_Time_compare2
$Data_Time_compare2 = ($Data_Ord_compare)($Data_Time_Component_ordSecond);

// Data_Time_compare3
$Data_Time_compare3 = ($Data_Ord_compare)($Data_Time_Component_ordMillisecond);

// Data_Time_append1
$Data_Time_append1 = ($Data_Semigroup_append)($Data_Time_Duration_semigroupMilliseconds);

// Data_Time_negateDuration
$Data_Time_negateDuration = ($Data_Time_Duration_negateDuration)($Data_Time_Duration_durationMilliseconds);

// Data_Time_unwrap
$Data_Time_unwrap = ($Data_Newtype_unwrap)($Prim_undefined);

// Data_Time_fromDuration
$Data_Time_fromDuration = ($Data_Time_Duration_fromDuration)($Data_Time_Duration_durationDays);

// Data_Time_greaterThan
$Data_Time_greaterThan = ($Data_Ord_greaterThan)($Data_Time_Duration_ordMilliseconds);

// Data_Time_lessThan
$Data_Time_lessThan = ($Data_Ord_lessThan)($Data_Time_Duration_ordMilliseconds);

// Data_Time_negate
$Data_Time_negate = ($Data_Ring_negate)($Data_Ring_ringNumber);

// Data_Time_append2
$Data_Time_append2 = ($Data_Semigroup_append)($Data_Time_Duration_semigroupDays);

// Data_Time_Time
$Data_Time_Time = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "Time", "values" => [$value0, $value1, $value2, $value3]];
    if ($__num > 4) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 4));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_showTime
$Data_Time_showTime = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_Time_append, &$Data_Time_show, &$Data_Time_show1, &$Data_Time_show2, &$Data_Time_show3) {
  $__body = function($v) use (&$Data_Time_append, &$Data_Time_show, &$Data_Time_show1, &$Data_Time_show2, &$Data_Time_show3) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$h = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$s = ($__case_0)->values[2];
$ms = ($__case_0)->values[3];
return ($Data_Time_append)("(Time ", ($Data_Time_append)(($Data_Time_show)($h), ($Data_Time_append)(" ", ($Data_Time_append)(($Data_Time_show1)($m), ($Data_Time_append)(" ", ($Data_Time_append)(($Data_Time_show2)($s), ($Data_Time_append)(" ", ($Data_Time_append)(($Data_Time_show3)($ms), ")"))))))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Time_append, &$Data_Time_show, &$Data_Time_show1, &$Data_Time_show2, &$Data_Time_show3, $__body, &$__fn) {
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

// Data_Time_setSecond
$Data_Time_setSecond = (function() use (&$Data_Time_Time) {
  $__body = function($s, $v) use (&$Data_Time_Time) {
    $__case_0 = $s;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$s1 = $__case_0;
$h = ($__case_1)->values[0];
$m = ($__case_1)->values[1];
$ms = ($__case_1)->values[3];
return ($Data_Time_Time)($h, $m, $s1, $ms);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($s, $v = null) use (&$Data_Time_Time, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($s, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($s, $v);
  };
  return $__fn;
})();

// Data_Time_setMinute
$Data_Time_setMinute = (function() use (&$Data_Time_Time) {
  $__body = function($m, $v) use (&$Data_Time_Time) {
    $__case_0 = $m;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$m1 = $__case_0;
$h = ($__case_1)->values[0];
$s = ($__case_1)->values[2];
$ms = ($__case_1)->values[3];
return ($Data_Time_Time)($h, $m1, $s, $ms);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($m, $v = null) use (&$Data_Time_Time, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($m, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($m, $v);
  };
  return $__fn;
})();

// Data_Time_setMillisecond
$Data_Time_setMillisecond = (function() use (&$Data_Time_Time) {
  $__body = function($ms, $v) use (&$Data_Time_Time) {
    $__case_0 = $ms;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$ms1 = $__case_0;
$h = ($__case_1)->values[0];
$m = ($__case_1)->values[1];
$s = ($__case_1)->values[2];
return ($Data_Time_Time)($h, $m, $s, $ms1);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($ms, $v = null) use (&$Data_Time_Time, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($ms, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($ms, $v);
  };
  return $__fn;
})();

// Data_Time_setHour
$Data_Time_setHour = (function() use (&$Data_Time_Time) {
  $__body = function($h, $v) use (&$Data_Time_Time) {
    $__case_0 = $h;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$h1 = $__case_0;
$m = ($__case_1)->values[1];
$s = ($__case_1)->values[2];
$ms = ($__case_1)->values[3];
return ($Data_Time_Time)($h1, $m, $s, $ms);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($h, $v = null) use (&$Data_Time_Time, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    if ($__num > 2) {
      $__res = $__body($h, $v);
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__body($h, $v);
  };
  return $__fn;
})();

// Data_Time_second
$Data_Time_second = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$s = ($__case_0)->values[2];
return $s;
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

// Data_Time_minute
$Data_Time_minute = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
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

// Data_Time_millisecond
$Data_Time_millisecond = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$ms = ($__case_0)->values[3];
return $ms;
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

// Data_Time_millisToTime
$Data_Time_millisToTime = (function() use (&$Data_Number_floor, &$Data_Time_div, &$Data_Time_sub, &$Data_Time_mul, &$Data_Time_add, &$Partial_Unsafe_unsafePartial, &$Data_Time_fromJust, &$Data_Time_apply, &$Data_Time_map, &$Data_Time_Time, &$Data_Time_toEnum, &$Data_Int_floor, &$Data_Time_toEnum1, &$Data_Time_toEnum2, &$Data_Time_toEnum3) {
  $__body = function($v) use (&$Data_Number_floor, &$Data_Time_div, &$Data_Time_sub, &$Data_Time_mul, &$Data_Time_add, &$Partial_Unsafe_unsafePartial, &$Data_Time_fromJust, &$Data_Time_apply, &$Data_Time_map, &$Data_Time_Time, &$Data_Time_toEnum, &$Data_Int_floor, &$Data_Time_toEnum1, &$Data_Time_toEnum2, &$Data_Time_toEnum3) {
    $__case_0 = $v;
    if (true) {
$ms__prime__ = $__case_0;
$secondLength = 1000.0;
$minuteLength = 60000.0;
$hourLength = 3600000.0;
$hours = ($Data_Number_floor)(($Data_Time_div)($ms__prime__, $hourLength));
$minutes = ($Data_Number_floor)(($Data_Time_div)(($Data_Time_sub)($ms__prime__, ($Data_Time_mul)($hours, $hourLength)), $minuteLength));
$seconds = ($Data_Number_floor)(($Data_Time_div)(($Data_Time_sub)($ms__prime__, ($Data_Time_add)(($Data_Time_mul)($hours, $hourLength), ($Data_Time_mul)($minutes, $minuteLength))), $secondLength));
$milliseconds = ($Data_Time_sub)($ms__prime__, ($Data_Time_add)(($Data_Time_add)(($Data_Time_mul)($hours, $hourLength), ($Data_Time_mul)($minutes, $minuteLength)), ($Data_Time_mul)($seconds, $secondLength)));
return ($Partial_Unsafe_unsafePartial)((function() use (&$Data_Time_fromJust) {
  $__fn = function($__dollar____unused) use (&$Data_Time_fromJust, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_fromJust;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})(), ($Data_Time_apply)(($Data_Time_apply)(($Data_Time_apply)(($Data_Time_map)($Data_Time_Time, ($Data_Time_toEnum)(($Data_Int_floor)($hours))), ($Data_Time_toEnum1)(($Data_Int_floor)($minutes))), ($Data_Time_toEnum2)(($Data_Int_floor)($seconds))), ($Data_Time_toEnum3)(($Data_Int_floor)($milliseconds))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_Number_floor, &$Data_Time_div, &$Data_Time_sub, &$Data_Time_mul, &$Data_Time_add, &$Partial_Unsafe_unsafePartial, &$Data_Time_fromJust, &$Data_Time_apply, &$Data_Time_map, &$Data_Time_Time, &$Data_Time_toEnum, &$Data_Int_floor, &$Data_Time_toEnum1, &$Data_Time_toEnum2, &$Data_Time_toEnum3, $__body, &$__fn) {
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

// Data_Time_hour
$Data_Time_hour = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$h = ($__case_0)->values[0];
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

// Data_Time_timeToMillis
$Data_Time_timeToMillis = (function() use (&$Data_Time_Duration_Milliseconds, &$Data_Time_add, &$Data_Time_mul, &$Data_Int_toNumber, &$Data_Time_fromEnum, &$Data_Time_hour, &$Data_Time_fromEnum1, &$Data_Time_minute, &$Data_Time_fromEnum2, &$Data_Time_second, &$Data_Time_fromEnum3, &$Data_Time_millisecond) {
  $__fn = function($t) use (&$Data_Time_Duration_Milliseconds, &$Data_Time_add, &$Data_Time_mul, &$Data_Int_toNumber, &$Data_Time_fromEnum, &$Data_Time_hour, &$Data_Time_fromEnum1, &$Data_Time_minute, &$Data_Time_fromEnum2, &$Data_Time_second, &$Data_Time_fromEnum3, &$Data_Time_millisecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_Time_Duration_Milliseconds)(($Data_Time_add)(($Data_Time_add)(($Data_Time_add)(($Data_Time_mul)(3600000.0, ($Data_Int_toNumber)(($Data_Time_fromEnum)(($Data_Time_hour)($t)))), ($Data_Time_mul)(60000.0, ($Data_Int_toNumber)(($Data_Time_fromEnum1)(($Data_Time_minute)($t))))), ($Data_Time_mul)(1000.0, ($Data_Int_toNumber)(($Data_Time_fromEnum2)(($Data_Time_second)($t))))), ($Data_Int_toNumber)(($Data_Time_fromEnum3)(($Data_Time_millisecond)($t)))));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_Time_eqTime
$Data_Time_eqTime = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_Time_conj, &$Data_Time_eq, &$Data_Time_eq1, &$Data_Time_eq2, &$Data_Time_eq3) {
  $__body = function($x, $y) use (&$Data_Time_conj, &$Data_Time_eq, &$Data_Time_eq1, &$Data_Time_eq2, &$Data_Time_eq3) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$l3 = ($__case_0)->values[3];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
$r3 = ($__case_1)->values[3];
return ($Data_Time_conj)(($Data_Time_conj)(($Data_Time_conj)(($Data_Time_eq)($l, $r), ($Data_Time_eq1)($l1, $r1)), ($Data_Time_eq2)($l2, $r2)), ($Data_Time_eq3)($l3, $r3));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_Time_conj, &$Data_Time_eq, &$Data_Time_eq1, &$Data_Time_eq2, &$Data_Time_eq3, $__body, &$__fn) {
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

// Data_Time_ordTime
$Data_Time_ordTime = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_Time_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Time_compare1, &$Data_Time_compare2, &$Data_Time_compare3) {
  $__body = function($x, $y) use (&$Data_Time_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Time_compare1, &$Data_Time_compare2, &$Data_Time_compare3) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$l3 = ($__case_0)->values[3];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
$r3 = ($__case_1)->values[3];
$v = ($Data_Time_compare)($l, $r);
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
$v1 = ($Data_Time_compare1)($l1, $r1);
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
$v2 = ($Data_Time_compare2)($l2, $r2);
$__case_0 = $v2;
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
return ($Data_Time_compare3)($l3, $r3);
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
  $__fn = function($x, $y = null) use (&$Data_Time_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_Time_compare1, &$Data_Time_compare2, &$Data_Time_compare3, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_Time_eqTime) {
  $__fn = function($__dollar____unused) use (&$Data_Time_eqTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_eqTime;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_diff
$Data_Time_diff = (function() use (&$Data_Time_Duration_toDuration, &$Data_Time_append1, &$Data_Time_timeToMillis, &$Data_Time_negateDuration) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_toDuration, &$Data_Time_append1, &$Data_Time_timeToMillis, &$Data_Time_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$toDuration = ($Data_Time_Duration_toDuration)($dictDuration);
    $__res = (function() use ($toDuration, &$Data_Time_append1, &$Data_Time_timeToMillis, &$Data_Time_negateDuration) {
  $__fn = function($t1, $t2 = null) use ($toDuration, &$Data_Time_append1, &$Data_Time_timeToMillis, &$Data_Time_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($toDuration)(($Data_Time_append1)(($Data_Time_timeToMillis)($t1), ($Data_Time_negateDuration)(($Data_Time_timeToMillis)($t2))));
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

// Data_Time_boundedTime
$Data_Time_boundedTime = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_Time_Time)(($Data_Bounded_bottom)($Data_Time_Component_boundedHour), ($Data_Bounded_bottom)($Data_Time_Component_boundedMinute), ($Data_Bounded_bottom)($Data_Time_Component_boundedSecond), ($Data_Bounded_bottom)($Data_Time_Component_boundedMillisecond)), "top" => ($Data_Time_Time)(($Data_Bounded_top)($Data_Time_Component_boundedHour), ($Data_Bounded_top)($Data_Time_Component_boundedMinute), ($Data_Bounded_top)($Data_Time_Component_boundedSecond), ($Data_Bounded_top)($Data_Time_Component_boundedMillisecond)), "Ord0" => (function() use (&$Data_Time_ordTime) {
  $__fn = function($__dollar____unused) use (&$Data_Time_ordTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_Time_ordTime;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_Time_maxTime
$Data_Time_maxTime = ($Data_Time_timeToMillis)(($Data_Bounded_top)($Data_Time_boundedTime));

// Data_Time_minTime
$Data_Time_minTime = ($Data_Time_timeToMillis)(($Data_Bounded_bottom)($Data_Time_boundedTime));

// Data_Time_adjust
$Data_Time_adjust = (function() use (&$Data_Time_Duration_fromDuration, &$Data_Time_timeToMillis, &$Data_Time_Duration_Days, &$Data_Number_floor, &$Data_Time_div, &$Data_Time_unwrap, &$Data_Time_append1, &$Data_Time_negateDuration, &$Data_Time_fromDuration, &$Data_Time_greaterThan, &$Data_Time_maxTime, &$Data_Time_lessThan, &$Data_Time_minTime, &$Data_Time_negate, &$Data_Tuple_Tuple, &$Data_Time_append2, &$Data_Time_millisToTime, &$Data_Time_Duration_Milliseconds, &$Data_Time_mul) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_fromDuration, &$Data_Time_timeToMillis, &$Data_Time_Duration_Days, &$Data_Number_floor, &$Data_Time_div, &$Data_Time_unwrap, &$Data_Time_append1, &$Data_Time_negateDuration, &$Data_Time_fromDuration, &$Data_Time_greaterThan, &$Data_Time_maxTime, &$Data_Time_lessThan, &$Data_Time_minTime, &$Data_Time_negate, &$Data_Tuple_Tuple, &$Data_Time_append2, &$Data_Time_millisToTime, &$Data_Time_Duration_Milliseconds, &$Data_Time_mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromDuration1 = ($Data_Time_Duration_fromDuration)($dictDuration);
    $__res = (function() use (&$Data_Time_timeToMillis, $fromDuration1, &$Data_Time_Duration_Days, &$Data_Number_floor, &$Data_Time_div, &$Data_Time_unwrap, &$Data_Time_append1, &$Data_Time_negateDuration, &$Data_Time_fromDuration, &$Data_Time_greaterThan, &$Data_Time_maxTime, &$Data_Time_lessThan, &$Data_Time_minTime, &$Data_Time_negate, &$Data_Tuple_Tuple, &$Data_Time_append2, &$Data_Time_millisToTime, &$Data_Time_Duration_Milliseconds, &$Data_Time_mul) {
  $__fn = function($d, $t = null) use (&$Data_Time_timeToMillis, $fromDuration1, &$Data_Time_Duration_Days, &$Data_Number_floor, &$Data_Time_div, &$Data_Time_unwrap, &$Data_Time_append1, &$Data_Time_negateDuration, &$Data_Time_fromDuration, &$Data_Time_greaterThan, &$Data_Time_maxTime, &$Data_Time_lessThan, &$Data_Time_minTime, &$Data_Time_negate, &$Data_Tuple_Tuple, &$Data_Time_append2, &$Data_Time_millisToTime, &$Data_Time_Duration_Milliseconds, &$Data_Time_mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$tLength = ($Data_Time_timeToMillis)($t);
$dayLength = 86400000.0;
$d__prime__ = ($fromDuration1)($d);
$wholeDays = ($Data_Time_Duration_Days)(($Data_Number_floor)(($Data_Time_div)(($Data_Time_unwrap)($d__prime__), $dayLength)));
$msAdjust = ($Data_Time_append1)($d__prime__, ($Data_Time_negateDuration)(($Data_Time_fromDuration)($wholeDays)));
$msAdjusted = ($Data_Time_append1)($tLength, $msAdjust);
$wrap = (function() use (&$Data_Time_greaterThan, $msAdjusted, &$Data_Time_maxTime, &$Data_Time_lessThan, &$Data_Time_minTime, &$Data_Time_negate) {
$__case_0 = ($Data_Time_greaterThan)($msAdjusted, $Data_Time_maxTime);
if (($__case_0 === true)) {
return 1.0;
} else {
;
};
if (true) {
return (function() use (&$Data_Time_lessThan, $msAdjusted, &$Data_Time_minTime, &$Data_Time_negate) {
$__case_0 = ($Data_Time_lessThan)($msAdjusted, $Data_Time_minTime);
if (($__case_0 === true)) {
return ($Data_Time_negate)(1.0);
} else {
;
};
if (true) {
return 0.0;
} else {
;
};
throw new \Exception("Pattern match failure");
})();
} else {
;
};
throw new \Exception("Pattern match failure");
})();
    $__res = ($Data_Tuple_Tuple)(($Data_Time_append2)($wholeDays, ($Data_Time_Duration_Days)($wrap)), ($Data_Time_millisToTime)(($Data_Time_append1)($msAdjusted, ($Data_Time_Duration_Milliseconds)(($Data_Time_mul)($dayLength, ($Data_Time_negate)($wrap))))));
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

