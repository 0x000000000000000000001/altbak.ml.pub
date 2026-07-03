<?php

namespace Data\DateTime;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Prelude/index.php';

$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_DateTime_fromEnum
$Data_DateTime_fromEnum = ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumYear);

// Data_DateTime_fromEnum1
$Data_DateTime_fromEnum1 = ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumMonth);

// Data_DateTime_fromEnum2
$Data_DateTime_fromEnum2 = ($Data_Enum_fromEnum)($Data_Date_Component_boundedEnumDay);

// Data_DateTime_fromEnum3
$Data_DateTime_fromEnum3 = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumHour);

// Data_DateTime_fromEnum4
$Data_DateTime_fromEnum4 = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMinute);

// Data_DateTime_fromEnum5
$Data_DateTime_fromEnum5 = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumSecond);

// Data_DateTime_fromEnum6
$Data_DateTime_fromEnum6 = ($Data_Enum_fromEnum)($Data_Time_Component_boundedEnumMillisecond);

// Data_DateTime_append
$Data_DateTime_append = ($Data_Semigroup_append)($Data_Semigroup_semigroupString);

// Data_DateTime_show
$Data_DateTime_show = ($Data_Show_show)($Data_Date_showDate);

// Data_DateTime_show1
$Data_DateTime_show1 = ($Data_Show_show)($Data_Time_showTime);

// Data_DateTime_conj
$Data_DateTime_conj = ($Data_HeytingAlgebra_conj)($Data_HeytingAlgebra_heytingAlgebraBoolean);

// Data_DateTime_eq
$Data_DateTime_eq = ($Data_Eq_eq)($Data_Date_eqDate);

// Data_DateTime_eq1
$Data_DateTime_eq1 = ($Data_Eq_eq)($Data_Time_eqTime);

// Data_DateTime_compare
$Data_DateTime_compare = ($Data_Ord_compare)($Data_Date_ordDate);

// Data_DateTime_compare1
$Data_DateTime_compare1 = ($Data_Ord_compare)($Data_Time_ordTime);

// Data_DateTime_bind
$Data_DateTime_bind = ($Control_Bind_bind)($Data_Maybe_bindMaybe);

// Data_DateTime_apply
$Data_DateTime_apply = ($Control_Apply_apply)($Data_Maybe_applyMaybe);

// Data_DateTime_map
$Data_DateTime_map = ($Data_Functor_map)($Data_Maybe_functorMaybe);

// Data_DateTime_join
$Data_DateTime_join = ($Control_Bind_join)($Data_Maybe_bindMaybe);

// Data_DateTime_toEnum
$Data_DateTime_toEnum = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumYear);

// Data_DateTime_toEnum1
$Data_DateTime_toEnum1 = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumMonth);

// Data_DateTime_toEnum2
$Data_DateTime_toEnum2 = ($Data_Enum_toEnum)($Data_Date_Component_boundedEnumDay);

// Data_DateTime_toEnum3
$Data_DateTime_toEnum3 = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumHour);

// Data_DateTime_toEnum4
$Data_DateTime_toEnum4 = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMinute);

// Data_DateTime_toEnum5
$Data_DateTime_toEnum5 = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumSecond);

// Data_DateTime_toEnum6
$Data_DateTime_toEnum6 = ($Data_Enum_toEnum)($Data_Time_Component_boundedEnumMillisecond);

// Data_DateTime_DateTime
$Data_DateTime_DateTime = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = (object)["tag" => "DateTime", "values" => [$value0, $value1]];
    if ($__num > 2) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 2));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_DateTime_toRecord
$Data_DateTime_toRecord = (function() use (&$Data_DateTime_fromEnum, &$Data_Date_year, &$Data_DateTime_fromEnum1, &$Data_Date_month, &$Data_DateTime_fromEnum2, &$Data_Date_day, &$Data_DateTime_fromEnum3, &$Data_Time_hour, &$Data_DateTime_fromEnum4, &$Data_Time_minute, &$Data_DateTime_fromEnum5, &$Data_Time_second, &$Data_DateTime_fromEnum6, &$Data_Time_millisecond) {
  $__body = function($v) use (&$Data_DateTime_fromEnum, &$Data_Date_year, &$Data_DateTime_fromEnum1, &$Data_Date_month, &$Data_DateTime_fromEnum2, &$Data_Date_day, &$Data_DateTime_fromEnum3, &$Data_Time_hour, &$Data_DateTime_fromEnum4, &$Data_Time_minute, &$Data_DateTime_fromEnum5, &$Data_Time_second, &$Data_DateTime_fromEnum6, &$Data_Time_millisecond) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
$t = ($__case_0)->values[1];
return (object)["year" => ($Data_DateTime_fromEnum)(($Data_Date_year)($d)), "month" => ($Data_DateTime_fromEnum1)(($Data_Date_month)($d)), "day" => ($Data_DateTime_fromEnum2)(($Data_Date_day)($d)), "hour" => ($Data_DateTime_fromEnum3)(($Data_Time_hour)($t)), "minute" => ($Data_DateTime_fromEnum4)(($Data_Time_minute)($t)), "second" => ($Data_DateTime_fromEnum5)(($Data_Time_second)($t)), "millisecond" => ($Data_DateTime_fromEnum6)(($Data_Time_millisecond)($t))];
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_DateTime_fromEnum, &$Data_Date_year, &$Data_DateTime_fromEnum1, &$Data_Date_month, &$Data_DateTime_fromEnum2, &$Data_Date_day, &$Data_DateTime_fromEnum3, &$Data_Time_hour, &$Data_DateTime_fromEnum4, &$Data_Time_minute, &$Data_DateTime_fromEnum5, &$Data_Time_second, &$Data_DateTime_fromEnum6, &$Data_Time_millisecond, $__body, &$__fn) {
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

// Data_DateTime_time
$Data_DateTime_time = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$t = ($__case_0)->values[1];
return $t;
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

// Data_DateTime_showDateTime
$Data_DateTime_showDateTime = ($Data_Show_Show__dollar__Dict)((object)["show" => (function() use (&$Data_DateTime_append, &$Data_DateTime_show, &$Data_DateTime_show1) {
  $__body = function($v) use (&$Data_DateTime_append, &$Data_DateTime_show, &$Data_DateTime_show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
$t = ($__case_0)->values[1];
return ($Data_DateTime_append)("(DateTime ", ($Data_DateTime_append)(($Data_DateTime_show)($d), ($Data_DateTime_append)(" ", ($Data_DateTime_append)(($Data_DateTime_show1)($t), ")"))));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($v) use (&$Data_DateTime_append, &$Data_DateTime_show, &$Data_DateTime_show1, $__body, &$__fn) {
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

// Data_DateTime_modifyTimeF
$Data_DateTime_modifyTimeF = (function() use (&$Data_Functor_map, &$Data_DateTime_DateTime) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_DateTime_DateTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map1, &$Data_DateTime_DateTime) {
  $__body = function($f, $v) use ($map1, &$Data_DateTime_DateTime) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($map1)(($Data_DateTime_DateTime)($d), ($f1)($t));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map1, &$Data_DateTime_DateTime, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_DateTime_modifyTime
$Data_DateTime_modifyTime = (function() use (&$Data_DateTime_DateTime) {
  $__body = function($f, $v) use (&$Data_DateTime_DateTime) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($Data_DateTime_DateTime)($d, ($f1)($t));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_DateTime_DateTime, $__body, &$__fn) {
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

// Data_DateTime_modifyDateF
$Data_DateTime_modifyDateF = (function() use (&$Data_Functor_map, &$Data_Function_flip, &$Data_DateTime_DateTime) {
  $__fn = function($dictFunctor) use (&$Data_Functor_map, &$Data_Function_flip, &$Data_DateTime_DateTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$map1 = ($Data_Functor_map)($dictFunctor);
    $__res = (function() use ($map1, &$Data_Function_flip, &$Data_DateTime_DateTime) {
  $__body = function($f, $v) use ($map1, &$Data_Function_flip, &$Data_DateTime_DateTime) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($map1)(($Data_Function_flip)($Data_DateTime_DateTime, $t), ($f1)($d));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use ($map1, &$Data_Function_flip, &$Data_DateTime_DateTime, $__body, &$__fn) {
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
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})();

// Data_DateTime_modifyDate
$Data_DateTime_modifyDate = (function() use (&$Data_DateTime_DateTime) {
  $__body = function($f, $v) use (&$Data_DateTime_DateTime) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($Data_DateTime_DateTime)(($f1)($d), $t);
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($f, $v = null) use (&$Data_DateTime_DateTime, $__body, &$__fn) {
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

// Data_DateTime_eqDateTime
$Data_DateTime_eqDateTime = ($Data_Eq_Eq__dollar__Dict)((object)["eq" => (function() use (&$Data_DateTime_conj, &$Data_DateTime_eq, &$Data_DateTime_eq1) {
  $__body = function($x, $y) use (&$Data_DateTime_conj, &$Data_DateTime_eq, &$Data_DateTime_eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($Data_DateTime_conj)(($Data_DateTime_eq)($l, $r), ($Data_DateTime_eq1)($l1, $r1));
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_DateTime_conj, &$Data_DateTime_eq, &$Data_DateTime_eq1, $__body, &$__fn) {
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

// Data_DateTime_ordDateTime
$Data_DateTime_ordDateTime = ($Data_Ord_Ord__dollar__Dict)((object)["compare" => (function() use (&$Data_DateTime_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_DateTime_compare1) {
  $__body = function($x, $y) use (&$Data_DateTime_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_DateTime_compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($Data_DateTime_compare)($l, $r);
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
return ($Data_DateTime_compare1)($l1, $r1);
} else {
;
};
throw new \Exception("Pattern match failure");
} else {
;
};
    throw new \Exception("Pattern match failure");
  };
  $__fn = function($x, $y = null) use (&$Data_DateTime_compare, &$Data_Ordering_LT, &$Data_Ordering_GT, &$Data_DateTime_compare1, $__body, &$__fn) {
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
})(), "Eq0" => (function() use (&$Data_DateTime_eqDateTime) {
  $__fn = function($__dollar____unused) use (&$Data_DateTime_eqDateTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_DateTime_eqDateTime;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_DateTime_diff
$Data_DateTime_diff = (function() use (&$Data_Time_Duration_toDuration, &$Data_Function_Uncurried_runFn2, &$Data_DateTime_calcDiff, &$Data_DateTime_toRecord) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_toDuration, &$Data_Function_Uncurried_runFn2, &$Data_DateTime_calcDiff, &$Data_DateTime_toRecord, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$toDuration = ($Data_Time_Duration_toDuration)($dictDuration);
    $__res = (function() use ($toDuration, &$Data_Function_Uncurried_runFn2, &$Data_DateTime_calcDiff, &$Data_DateTime_toRecord) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, &$Data_Function_Uncurried_runFn2, &$Data_DateTime_calcDiff, &$Data_DateTime_toRecord, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($toDuration)(($Data_Function_Uncurried_runFn2)($Data_DateTime_calcDiff, ($Data_DateTime_toRecord)($dt1), ($Data_DateTime_toRecord)($dt2)));
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

// Data_DateTime_date
$Data_DateTime_date = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
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

// Data_DateTime_boundedDateTime
$Data_DateTime_boundedDateTime = ($Data_Bounded_Bounded__dollar__Dict)((object)["bottom" => ($Data_DateTime_DateTime)(($Data_Bounded_bottom)($Data_Date_boundedDate), ($Data_Bounded_bottom)($Data_Time_boundedTime)), "top" => ($Data_DateTime_DateTime)(($Data_Bounded_top)($Data_Date_boundedDate), ($Data_Bounded_top)($Data_Time_boundedTime)), "Ord0" => (function() use (&$Data_DateTime_ordDateTime) {
  $__fn = function($__dollar____unused) use (&$Data_DateTime_ordDateTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = $Data_DateTime_ordDateTime;
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})()]);

// Data_DateTime_adjust
$Data_DateTime_adjust = (function() use (&$Data_Time_Duration_fromDuration, &$Data_DateTime_bind, &$Data_DateTime_adjustImpl, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_DateTime_toRecord, &$Data_DateTime_apply, &$Data_DateTime_map, &$Data_DateTime_DateTime, &$Data_DateTime_join, &$Data_Date_exactDate, &$Data_DateTime_toEnum, &$Data_DateTime_toEnum1, &$Data_DateTime_toEnum2, &$Data_Time_Time, &$Data_DateTime_toEnum3, &$Data_DateTime_toEnum4, &$Data_DateTime_toEnum5, &$Data_DateTime_toEnum6) {
  $__fn = function($dictDuration) use (&$Data_Time_Duration_fromDuration, &$Data_DateTime_bind, &$Data_DateTime_adjustImpl, &$Data_Maybe_Just, &$Data_Maybe_Nothing, &$Data_DateTime_toRecord, &$Data_DateTime_apply, &$Data_DateTime_map, &$Data_DateTime_DateTime, &$Data_DateTime_join, &$Data_Date_exactDate, &$Data_DateTime_toEnum, &$Data_DateTime_toEnum1, &$Data_DateTime_toEnum2, &$Data_Time_Time, &$Data_DateTime_toEnum3, &$Data_DateTime_toEnum4, &$Data_DateTime_toEnum5, &$Data_DateTime_toEnum6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
$fromDuration = ($Data_Time_Duration_fromDuration)($dictDuration);
    $__res = (function() use (&$Data_DateTime_bind, &$Data_DateTime_adjustImpl, &$Data_Maybe_Just, &$Data_Maybe_Nothing, $fromDuration, &$Data_DateTime_toRecord, &$Data_DateTime_apply, &$Data_DateTime_map, &$Data_DateTime_DateTime, &$Data_DateTime_join, &$Data_Date_exactDate, &$Data_DateTime_toEnum, &$Data_DateTime_toEnum1, &$Data_DateTime_toEnum2, &$Data_Time_Time, &$Data_DateTime_toEnum3, &$Data_DateTime_toEnum4, &$Data_DateTime_toEnum5, &$Data_DateTime_toEnum6) {
  $__fn = function($d, $dt = null) use (&$Data_DateTime_bind, &$Data_DateTime_adjustImpl, &$Data_Maybe_Just, &$Data_Maybe_Nothing, $fromDuration, &$Data_DateTime_toRecord, &$Data_DateTime_apply, &$Data_DateTime_map, &$Data_DateTime_DateTime, &$Data_DateTime_join, &$Data_Date_exactDate, &$Data_DateTime_toEnum, &$Data_DateTime_toEnum1, &$Data_DateTime_toEnum2, &$Data_Time_Time, &$Data_DateTime_toEnum3, &$Data_DateTime_toEnum4, &$Data_DateTime_toEnum5, &$Data_DateTime_toEnum6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_DateTime_bind)(($Data_DateTime_adjustImpl)($Data_Maybe_Just, $Data_Maybe_Nothing, ($fromDuration)($d), ($Data_DateTime_toRecord)($dt)), (function() use (&$Data_DateTime_apply, &$Data_DateTime_map, &$Data_DateTime_DateTime, &$Data_DateTime_join, &$Data_Date_exactDate, &$Data_DateTime_toEnum, &$Data_DateTime_toEnum1, &$Data_DateTime_toEnum2, &$Data_Time_Time, &$Data_DateTime_toEnum3, &$Data_DateTime_toEnum4, &$Data_DateTime_toEnum5, &$Data_DateTime_toEnum6) {
  $__fn = function($rec) use (&$Data_DateTime_apply, &$Data_DateTime_map, &$Data_DateTime_DateTime, &$Data_DateTime_join, &$Data_Date_exactDate, &$Data_DateTime_toEnum, &$Data_DateTime_toEnum1, &$Data_DateTime_toEnum2, &$Data_Time_Time, &$Data_DateTime_toEnum3, &$Data_DateTime_toEnum4, &$Data_DateTime_toEnum5, &$Data_DateTime_toEnum6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) {
    $__args = func_get_args();
    return function(...$__more) use ($__args, &$__fn) {
      return $__fn(...array_merge($__args, $__more));
    };
  }
    $__res = ($Data_DateTime_apply)(($Data_DateTime_map)($Data_DateTime_DateTime, ($Data_DateTime_join)(($Data_DateTime_apply)(($Data_DateTime_apply)(($Data_DateTime_map)($Data_Date_exactDate, ($Data_DateTime_toEnum)(($rec)->year)), ($Data_DateTime_toEnum1)(($rec)->month)), ($Data_DateTime_toEnum2)(($rec)->day)))), ($Data_DateTime_apply)(($Data_DateTime_apply)(($Data_DateTime_apply)(($Data_DateTime_map)($Data_Time_Time, ($Data_DateTime_toEnum3)(($rec)->hour)), ($Data_DateTime_toEnum4)(($rec)->minute)), ($Data_DateTime_toEnum5)(($rec)->second)), ($Data_DateTime_toEnum6)(($rec)->millisecond)));
    if ($__num > 1) {
      $__args = func_get_args();
      return $__res(...array_slice($__args, 1));
    }
    return $__res;
  };
  return $__fn;
})());
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

